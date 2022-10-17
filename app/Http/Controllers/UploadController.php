<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Utils\Image;

class UploadController extends Controller
{
    public function upload(Request $request){
       if ($request->hasFile('avatar')){
           $file = $request->file('avatar');
           $filename=$file->getClientOriginalName();
           $folder=uniqid(). '-'. now()->timestamp;
           $file->storeAs('avatars/'. $user->id,$filename);

           return $folder;
       }
       return '';
    }
}
