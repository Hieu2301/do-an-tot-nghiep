<?php

namespace App\Http\Services;
use Illuminate\Http\Request;

class UploadService
{
   public function store($request)
   {
       if($request->hasFile('file')){
           $path = $request->file('file')->storeAs(
               'upload/' . date("Y/m/d"), $request->user()->id
           );
       }
   }
}
