<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    function getThumbnail($album_id){
        return Storage::get('gallery/'.$album_id.'_thumbnail.jpg');
    }
}
