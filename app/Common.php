<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Common extends Model
{
    public static function fileUpload(Request $request, $image_name)
    {

        // Get filename with extension
        $filenameWithExt = $request->file($image_name)->getClientOriginalName();
        //Get only file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $filename = preg_replace("/[^a-zA-Z0-9\s]/", "", $filename);
        $filename = urlencode($filename);

        // Get just ext
        $extension = $request->file($image_name)->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $fileNameToStore = str_replace(" ", "-", $fileNameToStore);
        // Upload Image
        $path = $request->file($image_name)->storeAs('public/upload_images/', $fileNameToStore);

        return $fileNameToStore;
    }
}

