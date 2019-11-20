<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use Illuminate\Http\Request;
use App\SongsModel;
use App\Common;


class SongsController extends Controller
{
    public function add_song()
    {
        $categories=CategoryModel::all();

        return view('songs.addsong')->with('categories',$categories);
    }
    public function insert(Request $request)
    {
            foreach($request->file as $file)
            {
                // $file->array();
            // Get filename with the extension
            $filenameWithExt = $file->getClientOriginalName();

            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just ext
            $extension = $file->getClientOriginalExtension();
            //File Name to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // return $fileNameToStore;
            //Upload Image
            $path = $file->storeAs('public/upload_images/', $fileNameToStore);
            $file= new SongsModel;
            $file->category_id=$request->category;
            $file->artist=$request->name;
            $file->song_url=$fileNameToStore;
            $file->save();
        }


        return redirect()->route('song.table');
    }
    public function table()
    {
        return view('songs.table');
    }
    public function get_data()
    {
        $songs=SongsModel::all();
        return view('songs.table')->with('songs',$songs);
    }
    public function edit_song($id)
    {
        $category=CategoryModel::all();
        $songs =SongsModel::with('category')->find($id);

        $data['category']=$category;
        $data['songs']=$songs;
        return view('songs.edit_song')->with($data);
    }
    public function update_song(Request $request)
    {
        if ($request->hasFile('file')) {

            $fileNameToStore = Common::fileUpload($request, 'file');
        }
        $song=SongsModel::find($request->id);
        if ($request->hasFile('file')) {
            $song->song_url = $fileNameToStore;
        }
        $song->category_id=$request->category1;
        $song->save();
        return redirect()->route('song.table');

    }
    public function delete_song($id)
    {
        SongsModel::find($id)->delete();
        return redirect()->route('song.table');
    }
}
