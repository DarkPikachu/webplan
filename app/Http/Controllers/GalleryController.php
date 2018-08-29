<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Image; 
class GalleryController extends Controller
{
    function getThumbnail($album_id){
        $path = 'gallery/thumbnail_'.$album_id.'.jpg';
        return Storage::get($path);
    }

    function getPhoto($album_id, $photo_id){
        $path = 'gallery/album_'.$album_id.'/'.$photo_id.'.jpg';
        return Storage::get($path);
    }

    function getThumbnailPhoto($album_id, $photo_id){
        $path = './gallery/album_'.$album_id.'/'.$photo_id.'.jpg';
        try 
        {
            $image = Image::make($path);
        }
        catch(NotReadableException $e)
        {
            // If error, stop and continue looping to next iteration
            return null;
        }

        //Image::make()->resize(200, 200);
        //return Storage::get('gallery/album_'.$album_id.'/'.$album_id.'.jpg');
        return  $image;
    }
}
