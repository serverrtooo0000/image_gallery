<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Image;

class ImageController extends Controller
{


    public function create()
    {
        return view('create', ['image' => null]);

        var_dump(1);
        exit();
    }


    public function upload(Request $request)
    {


    //Перебрать 5 изображений и сохронить в БД

    
    foreach ($request->file('image') as $image) {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' //Проверка формата изоброжений
        ]);
       
        $imageName = $image->getClientOriginalName();
        $imagePath = $image->store('images');

            
        $imageModel = new Image();
        $imageModel->name = $imageName;
        $imageModel->path = $imagePath;
        $imageModel->save();
     } 
           
        
    

    return response()->json(['image' => $image],201);


    }

}

