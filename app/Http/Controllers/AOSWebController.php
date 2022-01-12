<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contestants;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\VoteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use DateTime;

class AOSWebController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->action([AOSWebController::class, 'index']);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $user = User::find(Auth::id());

            $contestants = Contestants::all();
            $total = 0;
            foreach ($contestants as $cont) {
                $total += $cont->vote_count;
            }

            return view('welcome', [
                'user' => $user,
                'contestants' => $contestants,
                'total' => $total,
            ]);
        } else {
            return view('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewContestants()
    {
        if (Auth::check()) {
            $user = User::find(Auth::id());

            $con = Contestants::join('categories', 'contestants.category_id', '=', 'categories.id')
                ->join('sub_categories', 'contestants.sub_category_id', '=', 'sub_categories.id')
                ->select('contestants.*', 'categories.category', 'sub_categories.sub_category')
                ->orderBy('contestants.vote_count', 'DESC')
                ->get();

            return view('contestants', [
                'user' => $user,
                'contestants' => $con,
            ]);
        } else {
            return view('login');
        }
    }

    public function contestants()
    {
        if (Auth::check()) {
            $user = User::find(Auth::id());

            $cat = Category::all();
            $subCat = SubCategory::all();

            return view('contestant-add', [
                'user' => $user,
                'category' => $cat,
                'subCategory' => $subCat,
            ]);
        } else {
            return view('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();

            $con = new Contestants();

            $con->name = $request->name;
            $con->description = $request->desc ?? '';
            $con->category_id = $request->cat;
            $con->sub_category_id = $request->sub;
            $con->photo = $response;
            $con->vote_count = 0;

            $con->save();

            return redirect()->back()->with([
                'user' => User::find(Auth::id()),
                'message' => 'Success'
            ]);
        } else {
            return view('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function allCategory()
    {
        if (Auth::check()) {
            $cat = Category::all();

            return view('category')->with([
                'user' => User::find(Auth::id()),
                'category' => $cat,
            ]);
        } else {
            return view('login');
        }
    }

    public function viewCategory($id)
    {
        if (Auth::check()) {
            $cat = Category::find($id);
            $sub = SubCategory::where('category_id', '=', $id)->get();

            return view('category-view')->with([
                'user' => User::find(Auth::id()),
                'category' => $cat,
                'subCategory' => $sub,
            ]);
        } else {
            return view('login');
        }
    }

    public function addSubCategory(Request $request, $id)
    {
        if (Auth::check()) {

            $sub = new SubCategory();

            $sub->category_id = $id;
            $sub->sub_category = $request->sub;

            $sub->save();

            return redirect()->back()->with([
                'user' => User::find(Auth::id()),
                'category' => Category::find($id),
                'subCategory' => SubCategory::where('category_id', '=', $id)->get(),
            ]);
        } else {
            return view('login');
        }
    }

    public function categoryAdd()
    {
        if (Auth::check()) {
            return view('category-add')->with([
                'user' => User::find(Auth::id()),
            ]);
        } else {
            return view('login');
        }
    }

    public function createCategory(Request $request)
    {
        if (Auth::check()) {
            $response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();

            $cat = new Category();

            $cat->photo = $response;
            $cat->category = $request->cat;

            $cat->save();

            return redirect()->back()->with([
                'user' => User::find(Auth::id()),
            ]);
        } else {
            return view('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removeContestant($id)
    {
        if (Auth::check()) {
            $data = Contestants::find($id);
            $data->delete();

            return redirect()->back()->with([
                'user' => User::find(Auth::id()),
            ]);
        } else {
            return view('login');
        }
    }

    public function removeCategory($id)
    {
        if (Auth::check()) {
            $data = Category::find($id);
            $data->delete();

            $sub  = SubCategory::where('category_id', '=', $id)->get();
            foreach ($sub as $s) {
                $s->delete();
            }

            return redirect()->back()->with([
                'user' => User::find(Auth::id()),
            ]);
        } else {
            return view('login');
        }
    }

    public function removeSubCategory($id)
    {
        if (Auth::check()) {
            $data = SubCategory::find($id);
            $data->delete();

            return redirect()->back()->with([
                'user' => User::find(Auth::id()),
            ]);
        } else {
            return view('login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        if (Auth::check()) {
            $settings = VoteSettings::first();

            return view('settings')->with([
                'user' => User::find(Auth::id()),
                'settings' => $settings,
            ]);
        } else {
            return view('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function saveSettings(Request $request)
    {
        if (Auth::check()) {

            $ft = DateTime::createFromFormat("d/m/Y H:i A", $request->from);
            $fromTimestamp = $ft->getTimestamp();

            $tt = DateTime::createFromFormat("d/m/Y H:i A", $request->to);
            $toTimestamp = $tt->getTimestamp();

            $settings = VoteSettings::first();

            $settings->created_at = $fromTimestamp;
            $settings->updated_at = $toTimestamp;

            $settings->save();

            return redirect()->back()->with([
                'user' => User::find(Auth::id()),
            ]);
        } else {
            return view('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
