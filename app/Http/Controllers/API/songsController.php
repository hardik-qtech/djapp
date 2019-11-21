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


    public function all_songs(Request $request)
    {
        $allsongs=SongsModel::with('category')->get();

        if(count($allsongs)>0)
        {
            return[
                'msg'=>'List Of All Songs',
                'status'=>1,
                'data'=>$allsongs
            ];
        }
        else
        {
            return[
                'msg'=>'No Song Available',
                'status'=>0
            ];
        }
    }
    public function artists(Request $request)
    {
        $artist=SongsModel::with('category')->where('artist',$request->artist)->get();

        if(count($artist)>0)
        {
            return [
                'msg'=>'list of artist',
                'status'=>1,
                'data'=>$artist
            ];
        }
        else
        {
            return [
                'msg'=>'No Artist Available',
                'status'=>0
            ];
        }

    }
}
