<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RubricController extends Controller
{
    //view Rubric
public function viewRubric(){
    $data_rubric = \App\Models\Rubric::all();
    return view('ManageRubric/ViewandDeleteRubric', ['data_rubric'=> $data_rubric]);
}
    
//add Rubric
    public function createRubric(Request $request ){

        $request->validate([
            
            'Rubric_id' => 'required',
            'Competency' => 'required',
            'Excellent_grade' => 'required',
            'Good_grade' => 'required',
            'Moderate_grade' => 'required',
            'Weak_grade' => 'required',
            'VWeak_grade' => 'required',
            'Fail_grade' => 'required',
            'Weightage' => 'required',
            'Mark_given' => 'required',
            'Final_percent' => 'required',
        ]);
        \App\Models\Rubric::create($request->all());
        return redirect('/rubricdata')->with('success','New Data Successfully Inserted');
    } 

 //call edit rubric form  
    public function EditRubric($id ){
        $data_rubric = \App\Models\Rubric::find($id);
        return view('ManageRubric/EditRubric',['data_rubric'=>$data_rubric]);
    }


//Update Rubric

    public function update(Request $request,$id){
        $data_rubric = \App\Models\Rubric::find($id);
        $data_rubric -> update($request->all());

        return redirect('/rubricdata')->with('success','Data Successfully Updated');
}

//delete Rubric
public function delete($id){
    $data_rubric = \App\Models\Rubric::find($id);
    $data_rubric -> delete($data_rubric);

    return redirect('/rubricdata')->with('success','Data Successfully Deleted');
}

//filter PSM1 for coordinator view
public function viewPSM1(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PSM1');

    return view('ManageRubric/ViewandDeleteRubric', ['data_rubric'=> $data_rubric]);
}

//filter PSM2 for coordinator view
public function viewPSM2(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PSM2');

    return view('ManageRubric/ViewandDeleteRubric', ['data_rubric'=> $data_rubric]);
}

//filter PTA for coordinator view
public function viewPTA(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PTA');

    return view('ManageRubric/ViewandDeleteRubric', ['data_rubric'=> $data_rubric]);
}

//function to display rubric for students
public function StdviewRubric(){
    $data_rubric = \App\Models\Rubric::all();

    return view('ManageRubric/ViewRubric', ['data_rubric'=> $data_rubric]);
}

//filter PSM1 for student view
public function sviewPSM1(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PSM1');

    return view('ManageRubric/ViewRubric', ['data_rubric'=> $data_rubric]);
}

//filter PSM2 for student view
public function sviewPSM2(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PSM2');

    return view('ManageRubric/ViewRubric', ['data_rubric'=> $data_rubric]);
}

//filter PTA for student view
public function sviewPTA(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PTA');

    return view('ManageRubric/ViewRubric', ['data_rubric'=> $data_rubric]);

}

   //function to display rubric for evaluator
public function EvaviewRubric(){
    $data_rubric = \App\Models\Rubric::all();

    return view('ManageRubric/EvaluatorView', ['data_rubric'=> $data_rubric]);
}

//filter PSM1  for evaluator
public function eviewPSM1(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PSM1');

    return view('ManageRubric/EvaluatorView', ['data_rubric'=> $data_rubric]);
}

//filter PSM2  for evaluator
public function eviewPSM2(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PSM2');

    return view('managerubric/EvaluatorView', ['data_rubric'=> $data_rubric]);
}

//filter PTA  for evaluator
public function eviewPTA(){
    $data_rubric = \App\Models\Rubric::all()
    ->where('Rubric_id', '=', 'PTA');

    return view('managerubric/EvaluatorView', ['data_rubric'=> $data_rubric]); 

}
}
