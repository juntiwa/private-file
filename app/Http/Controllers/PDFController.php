<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
   // public function __construct()
   // {
   //    $this->middleware('auth');
   // }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function view($id)
   {
      $file = storage_path('app/files/') . $id . '.pdf';
      if (file_exists($file)) {
         $headers = [
            'Content-Type' => 'application/pdf'
         ];
         return response()->download($file, 'Test File', $headers, 'inline');
      } else {
         abort(404, 'File not found!');
      }
   }

   #check file in storage folder
   //  $path = 'files/' . $year . '/' . $regdoc . '.' . $type;
   //    if (Storage::exists($path)) {
   //       return Storage::response($path);
   //    } else {
   //       // dd('File is Not Exists');
   //       return view('errors.404');
   //    }
}
