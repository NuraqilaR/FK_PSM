<?php

namespace App\Http\Controllers;
use App\Models\title;
use Illuminate\Http\Request;


class TitleController extends Controller
{
     
    public function titlemainpagestu()
    {
        $title =title:: all();
        return view ('TitleManagement.TitleMainpageStu')->with('title', $title);
    }

    //Register Title (add)
     public function create(Request $request)
     {
         $input = $request->all();
         title::create($input);
         return redirect('TitleMainpagestu')->with('flash_message','Title has successfully registered!');
     }
}
