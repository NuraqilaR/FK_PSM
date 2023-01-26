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

    public function create()
    {
        return view ('TitleManagement.RegisterTitle');
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
        return redirect('/registertitle')->with('success','New Data Successfully Inserted');
     }

    //  public function show ($Reg_id)
    // {
    //     $Lecturer = lecturers::find($Reg_id);
    //     return view ('TitleManagement.ViewRegisterStatus')->with('title', $title);
    // }

    //Update Registration
    public function update(Request $request, $Reg_id)
    {
        $title = title::find($Reg_id);
        $input = $request->all();
        $title->update($input);
        return redirect('TitleManagement.EditRegister')->with('flash_message', 'Title Registration Succesfully Update!');
    }

    public function destroy($Reg_id)
    {
        title::destroy($Reg_id);
        return redirect ('TitleManagement.TitleMainpageStu')->with('flash_message', 'Register Info deleted!');
    }
    
}
