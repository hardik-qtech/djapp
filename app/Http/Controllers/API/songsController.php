<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SongsModel;

class songsController extends Controller
{
    public function get_songs(Request $request)
    {
        $songs=SongsModel::all();
        if(count($songs)>0)
        {
           return [
            'msg'=>'All Songs list',
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
