<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\found;

class foundController extends Controller
{
    function submit(Request $request){
          //handle image
      $request->validate([
        'pic' => 'required|mimes:jpeg,png,jpg,svg|max:5048',
    ]);
      $fileName = time().'.'.$request->pic->extension();
      $request->pic->move(public_path('docImages'), $fileName);

        $submit = new found;
        $submit ->selecteditem = $request ->selecteditem;
        $submit ->docfirstname = $request ->docfirstname;
        $submit ->doclastname = $request ->doclastname;
        $submit ->dateofbirth = $request ->dateofbirth;
        $submit ->gender = $request ->gender;
        $submit ->nationality = $request ->nationality;
        $submit ->location = $request ->location;
        $submit ->firstname = $request ->firstname;
        $submit ->lastname = $request ->lastname;
        $submit ->email = $request ->email;
        $submit ->phone= $request ->phone;
        $submit ->pic= $fileName;

        if($submit->save()){
            $response = ["Message"=>"Submission Successful"];
            return response($response, 200);
            }else{
              $response = ["Message"=>"Submission Failed"];
                return response($response, 404);
            }
    }

    function retrieve(){
        return found::all();
    }
}
