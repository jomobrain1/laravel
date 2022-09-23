<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index(){
        $employees=Employee::orderBy('created_at','asc')->paginate(10);
        return view('welcome',compact('employees'));
    }
    public function create(){
        return view('create');
    }
    public function view(){
        $employees=Employee::orderBy('created_at','asc')->paginate(10);
        return view('index',compact('employees'));
    }
    
    
    public function edit($id){
      $emp=Employee::findorFail($id);
      return view("edit",compact("id","emp"));
    }

    public function store(Request $request){
        $request->validate(
            [
            "name"=>"required",
            "email"=>"required|email",
            "salary"=>"required|numeric"
            ]
        );
        $employee= new Employee();
        $employee->name=$request->input("name");
        $employee->email=$request->input("email");
        $employee->salary=$request->input("salary");
        $employee->save();
        return redirect('/');
    }

    public function update(Request $request){
        $request->validate(
            [
            "name"=>"required",
            "email"=>"required|email",
            "salary"=>"required|numeric"
            ]
        );
        $employee= Employee::findorFail($request->id);
        $employee->name=$request->input("name");
        $employee->email=$request->input("email");
        $employee->salary=$request->input("salary");
        $employee->save();
       return redirect("/");
    }
    public function destroy($id){
      Employee::where('id',$id)->delete();
      return back()->with("msg","post deleted");
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $employees = Employee::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('search', compact('employees'));
    }


}
