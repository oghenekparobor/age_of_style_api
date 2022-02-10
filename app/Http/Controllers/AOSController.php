<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contestants;
use App\Models\SubCategory;
use App\Models\Voters;
use App\Models\VoteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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

    public function processVote()
    {
        $vote = Voters::where('status', '=', null)->limit(1)->get();

        if (!empty($vote)) {
            for ($i = 0; $i < count($vote); $i++) {

                $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer sk_live_6ee6d817edc08f2fa1e2e90aaafc4ed1b1179af7',
                ])->get('https://api.paystack.co/transaction/verify/' . $vote[$i]->reference);

                if (json_decode($response->body())->data->status == 'success') {

                    $cont = Contestants::find($vote[$i]->voted);
                    $cont->vote_count += $vote[$i]->how_many;
                    $cont->save();

                    $vt = Voters::find($vote[$i]->id);
                    $vt->status = 'SUCCESS';
                    $vt->save();

                    return 'SUCCESS';
                } else {
                    $vt = Voters::find($vote[$i]->id);
                    $vt->status = 'FAILED';
                    $vt->save();

                    return 'FAILED';
                }
            }
        } else {
            return 'EMPTY';
        }
    }
}
