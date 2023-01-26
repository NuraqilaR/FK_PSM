<?php

namespace App\Http\Controllers;
use App\Models\title;
use Illuminate\Http\Request;


class TitleController extends Controller
{
     
    public function titlemainpagestu()
    {
        $title = title:: all();
        return view ('TitleManagement.TitleMainpageStu')->with('title', $title);
    }


    //Register Title (add)
     public function CreateRegistration(Request $request)
     {
        $request->validate([
            'Stu_SVName' => 'required', 
            'Stu_Title'  => 'required',
            'Stu_Objective'  => 'required',
            'Stu_Scope'  => 'required',
            'Stu_ProbStat'  => 'required',
            'Stu_SoftUse'  => 'required',
            'Stu_ToolsUse'  => 'required',
            'Stu_Approach'  => 'required',
        ]);
        \App\Models\title::create($request->all());
        return redirect('/TitleMainpageStu')->with('success','New Data Successfully Inserted');
     }

    //  public function show ($Reg_id)
    // {
    //     $Lecturer = lecturers::find($Reg_id);
    //     return view ('TitleManagement.ViewRegisterStatus')->with('title', $title);
    // }

    //call edit rubric form  
    public function EditRegister($Reg_id ){
        $title = title::find($Reg_id);
        return view('TitleManagement/EditRegister',['title'=>$title]);
    }

    //Update Registration
    public function update(Request $request, $Reg_id)
    {
        $title = title::find($Reg_id);
        $input = $request->all();
        $title->update($input);
        return redirect('/registertitle')->with('flash_message', 'Title Registration Succesfully Update!');
    }


    //delete Rubric
    public function delete($Reg_id){
        $title = \App\Models\title::find($Reg_id);
        $title -> delete($delete);

        return redirect('/registertitle')->with('success','Data Successfully Deleted');
    }
    
}
