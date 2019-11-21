<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SongsModel;

class songsController extends Controller
{
    public function get_songs(Request $request)
    {
        $songs=SongsModel::with('category')->where('category_id', $request->category_id)->get();

        if(count($songs)>0)
        {
           return [
            'msg'=>'List of category songs',
            'status'=>1,
            'data'=>$songs
           ];
        }
        else
        {
            return [
                'msg'=>'No Songs Available',
                'status'=>0
            ];
        }
    }
}
