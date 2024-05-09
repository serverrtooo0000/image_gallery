<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Image;
use App\Http\Requests\ImageUploadRequest;

class ImageController extends Controller
{


    public function create()
    {
        return view('create', ['image' => null]);
    }


    public function upload(ImageUploadRequest $request)
    {

        foreach ($request->file('image') as $key => $image) {


       
        $imageName = $image->getClientOriginalName();
        $path = $image->store('images');
        $relativePath = basename($path);


       
        $imageModel = new Image();
        $imageModel->name = $imageName;
        $imageModel->path = $relativePath;
        $imageModel->save();
     } 
           
        
   

    return response()->json(['image' => $image],201);


    }

}

