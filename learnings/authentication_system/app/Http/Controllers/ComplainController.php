<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function uploadForm(){
        return view ('upload_form');
    }
    public function submitForm(Request $request)

    {
    
    
    if($request->hasFile('photos'))
    
    {
    
    $allowedfileExtension=['pdf','jpg','png','docx'];
    
    $files = $request->file('files');
    
    foreach($files as $file){
    
    $filename = $file->getClientOriginalName();
    
    $extension = $file->getClientOriginalExtension();
    
    $check=in_array($extension,$allowedfileExtension);
    
    //dd($check);
    
    // if($check)
    
    // {
    
    // $complains= Complain::create($request->all());
    
    // foreach ($request->files as $file) {
    
    // $filename = $file->store('file');
    
    // ItemDetail::create([
    
    // 'description_text' => $files->description_text,
    
    // 'files' => $flies->file
    
    // ]);
    
    // }
    
    // echo "Upload Successfully";
    
    // }
    
    // else
    
    // {
    
    // echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
    
    // }
    
    // }
    
    }
    
    }
    
    }?>