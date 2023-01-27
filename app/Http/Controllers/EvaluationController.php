<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluationSuperviseeModel;
use App\Models\EvaluationEvaluateeModel;




class EvaluationController extends Controller
{
    // open add evaluation mark supervisee
    public function AddEvaluationMarkSupervisee1()
    {
        $superviseeevaluation = EvaluationSuperviseeModel::all();
        return view ('ManageEvaluation.AddMarksSupervisor1', ['superviseeevaluation'=>$superviseeevaluation]);
    }

    // add evaluation mark supervisee
    public function create(Request $request)
    {
        $input = $request->all();
        EvaluationSuperviseeModel::create($input);
        return redirect('ViewMarkSupervisee')->with('flash_message','The marks added successfully!');
    }

    //open add evaluation mark evaluatee
    public function AddEvaluationMarkEvaluatee1()
    {
        $evaluateeevaluation = EvaluationEvaluateeModel::all();
        return view ('ManageEvaluation.AddMarksEvaluator1', ['evaluateeevaluation'=>$evaluateeevaluation]);
    }

    // add evaluation mark evaluatee
    public function createEva(Request $request)
    {
        $input = $request->all();
        EvaluationEvaluateeModel::create($input);
        return redirect('ViewMarkEvaluatee')->with('flash_message','The marks added successfully!');
    }

    //view mark supervisee
    public function ViewMarkSupervisee()
    {
        $superviseeevaluation = EvaluationSuperviseeModel::all();
        return view ('ManageEvaluation.ViewMarkSupervisee', ['superviseeevaluation'=>$superviseeevaluation]);
    }

      //view mark evaluatee
      public function ViewMarkEvaluatee()
      {
          $evaluateeevaluation = EvaluationEvaluateeModel::all();
          return view ('ManageEvaluation.ViewMarkEvaluatee', ['evaluateeevaluation'=>$evaluateeevaluation]);
      }
      
      //delete mark supervisee
      public function destroy($id)
    {
        EvaluationSuperviseeModel::destroy($id);
        return redirect('ViewMarkSupervisee')->with('flash_message', 'The mark is deleted!');
    }

    //delete mark evaluatee
    public function destroyEva($id)
    {
        EvaluationEvaluateeModel::destroy($id);
        return redirect('ViewMarkEvaluatee')->with('flash_message', 'The mark is deleted!');
    }

    //edit supervisee
    public function edit($id)
    {
        $superviseeevaluation = EvaluationSuperviseeModel::find($id);
        return view('ManageEvaluation.EditMarkSupervisee', ['superviseeevaluation'=>$superviseeevaluation]);
    }

    //Update supervisee
    public function update(Request $request, $id)
    {
        $superviseeevaluation = EvaluationSuperviseeModel::find($id);
        $input = $request->all();
        $superviseeevaluation->update($input);
        return redirect('ViewMarkSupervisee')->with('flash_message', 'The Supervisee Mark details is updated!');
    }

    //edit evaluatee
    public function editEva($id)
    {
        $evaluateeevaluation = EvaluationEvaluateeModel::find($id);
        return view('ManageEvaluation.EditMarkEvaluatee', ['evaluateeevaluation'=>$evaluateeevaluation]);
    }

    //Update evaluatee
    public function updateEva(Request $request, $id)
    {
        $evaluateeevaluation = EvaluationEvaluateeModel::find($id);
        $input = $request->all();
        $evaluateeevaluation->update($input);
        return redirect('ViewMarkEvaluatee')->with('flash_message', 'The Evaluatee Mark details is updated!');
    }

    // manage evaluation for coordinator
    //view Mark supervisee for PSM1 AND PTA1
    public function ViewMarkSuperviseePSM1PTA1(){
        $superviseeevaluation = EvaluationSuperviseeModel::all()
        ->where('StudentCategory', '=', 'PSM1','PTA1');

        return view('ManageEvaluation.CoordinatorViewMarkSupervisee', ['superviseeevaluation'=>$superviseeevaluation]);
    }
    //view Mark supervisee for PSM2 AND PTA2
    public function ViewMarkSuperviseePSM2PTA2(){
        $superviseeevaluation = EvaluationSuperviseeModel::all()
        ->where('StudentCategory', '=', 'PSM2','PTA2');

        return view('ManageEvaluation.CoordinatorViewMarkSupervisee', ['superviseeevaluation'=>$superviseeevaluation]);
    }
    //view Mark evaluatee for PSM1 AND PTA1
    public function ViewMarkEvaluateePSM1PTA1(){
        $evaluateeevaluation = EvaluationEvaluateeModel::all()
        ->where('StudentCategory', '=', 'PSM1','PTA1');

        return view('ManageEvaluation.CoordinatorViewMarkEvaluatee', ['evaluateeevaluation'=>$evaluateeevaluation]);
    }
    //view Mark evaluatee for PSM2 AND PTA2
    public function ViewMarkEvaluateePSM2PTA2(){
        $evaluateeevaluation = EvaluationEvaluateeModel::all()
        ->where('StudentCategory', '=', 'PSM2','PTA2');

        return view('ManageEvaluation.CoordinatorViewMarkEvaluatee', ['evaluateeevaluation'=>$evaluateeevaluation]);
    }
}
