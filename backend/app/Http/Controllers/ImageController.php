<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Resources\ImageResource;

class ImageController extends Controller
{
    public function index()
    {

    $images = Image::all();


     return ImageResource::collection($images);
    }

    public function file(Request $request){
        $image= new Image;
            if($request->hasFile('imagePath')){
        
            $completeFileName = $request->file('imagePath')->getClientOriginalName();
            $fileNameOnly = pathinfo($completeFileName, PATHINFO_FILENAME);
            $extenshion = $request->file('imagePath')->getClientOriginalExtension();
            $compic = str_replace('','_',$fileNameOnly).'-'.rand() . '_'.time().'.'.$extenshion;
            $path = $request->file('imagePath')->storeAs('public/docs',$compic);
            
            $image->imagePath=$path;
            
            $image->copyright=$request->copyright;
            $image->droitsPhotographiques=$request->droitsPhotographiques;
            $image->ouvrage_id=$request->ouvrage_id;
            if($image->save()){
                return ['status'=> true, 'message' =>'Post successfuly'];
            }
            else{
                return ['status'=> false, 'message' =>'Post worning'];
            }
           }
    
    
        }
}
