<?php

namespace App\Interfaces;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ProjectImage;
use Aws\S3\S3Client;

class ImageVideoUpload
{
    public function StoreImageSingle($upload,$model){

        $image = $upload;
     
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension(); // Ensures a unique name
        $destinationPath = public_path('/uploads/image/'.$model);
        $image->move($destinationPath, $imageName);
        $name = '/uploads/image/'.$model.'/'.$imageName;
         return $name;
    }
    public function DeleteImageSingle($image_data){
        if (File::exists(public_path().$image_data))
        {
            File::delete(public_path().$image_data);
        }
    }
    public function UpdateImageSingle($upload,$model,$image_data){
        if (File::exists(public_path().$image_data))
        {
            File::delete(public_path().$image_data);
        }

        $image = $upload;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/image/'.$model);
        $image->move($destinationPath, $imageName);
        $name = '/uploads/image/'.$model.'/'.$imageName;
         return $name;
    }
}
