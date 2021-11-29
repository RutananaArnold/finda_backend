<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\search;
use App\Models\found;

class searchController extends Controller
{
    function searchdetail(Request $request){
        $searchdetail = new search;
        $searchdetail ->selecteditem = $request ->selecteditem;
        $searchdetail ->lostdocfirstname = $request ->lostdocfirstname;
        $searchdetail ->lostdoclastname = $request ->lostdoclastname;
        $searchdetail ->lostdocdateofbirth = $request ->lostdocdateofbirth;
        $searchdetail ->searchinggender= $request ->searchinggender;
        $searchdetail ->searchingnationality = $request ->searchingnationality;
        $searchdetail ->searchingfirstname = $request ->searchingfirstname;
        $searchdetail ->searchinglastname = $request ->searchinglastname;
        $searchdetail ->searchingemail = $request ->searchingemail;
        $searchdetail ->phone= $request ->phone;

        if($searchdetail->save()){
          //  $response = ["Message"=>"Information saved but Item not found"];
            $found = found::get();
            foreach($found as $item){
                if($item->docfirstname === $searchdetail['lostdocfirstname'] && $item->doclastname === $searchdetail['lostdoclastname'] &&  $item->dateofbirth === $searchdetail['lostdocdateofbirth'] && $item->gender === $searchdetail['searchinggender'] && $item->nationality === $searchdetail['searchingnationality']){
            $response = $item;
            return response($response, 200); 
                }
            }
            // return response($response, 200);
            }else{
              $response = ["Message"=>"Submission Failed"];
                return response($response, 404);
            }


    }
}
