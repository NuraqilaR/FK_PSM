<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Lecturers;
class UserController extends Controller
{
    //Student Index
    public function index()
    {
        $students = Students::all();
        return view ('userList')->with('students', $students);
    }
    
    //student create
    public function create()
    {
        return view('userAdd');
    }
    
    //student store
    public function store(Request $request)
    {
        //Request $request
        $input = $request->all();
        Students::create($input);
        return redirect('userList')->with('flash_message', 'Student Sucessfully Addedd!');  

    }
    
    //student show
    public function show($std_id)
    {
        $students = Students::find($std_id);
        return view('userView')->with('students', $students);
    }
    
    //student edit
    public function edit($std_id)
    {
        $students = Students::find($std_id);
        return view('userEdit')->with('students', $students);
    }
    
    //student update
    public function update(Request $request, $std_id)
    {   

        //Request $request, $std_id
        $students = Students::find($std_id);
        $input = $request->all();
        $students->update($input);
        return redirect('userList')->with('flash_message', 'Student Updated!');  
    }
    
    //student delete
    public function destroy($std_id)
    {
        Students::destroy($std_id);
        return redirect('userList')->with('flash_message', 'Student deleted!');  
    }
    
}
