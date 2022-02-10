<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contestants;
use App\Models\SubCategory;
use App\Models\Voters;
use App\Models\VoteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AOSController extends Controller
{
    public function category()
    {
        $data = Category::all();

        return ([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function subCategory()
    {
        $data = SubCategory::all();

        return ([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function setting()
    {
        $data = VoteSettings::first();

        return ([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function contestants()
    {
        $data = Contestants::all();

        return ([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function vote(Request $request)
    {
        $contestants = Contestants::find($request->id);

        $contestants->vote_count += $request->count;
        $contestants->save();

        return ([
            'status' => 'success',
            'data' => $contestants
        ]);
    }

    public function saveVoters(Request $request)
    {
        $vote =  new Voters();

        $vote->voted = $request->voted;
        $vote->reference = $request->reference;
        $vote->how_many = $request->how_many;

        $vote->save();

        return ([
            'status' => 'success'
        ]);
    }
}
