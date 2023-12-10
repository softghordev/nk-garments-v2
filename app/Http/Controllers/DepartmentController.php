<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
<<<<<<< HEAD
    public function index(){

=======
 
    public function __construct()
    {
        $this->middleware('can:create-department', ['only' => ['create','store','edit','update']]);
        $this->middleware('can:delete-department', ['only' => ['destroy']]);
>>>>>>> 9066209 (Hello)
    }

    public function create(){
        $result = Department::orderBy('id','desc')->paginate(10);
        return view('admin.department.create',compact('result'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:departments',
        ]);

        Department::create([
            'name'=>$request->name,
            'status'=>$request->status
        ]);

        return back()->with('success','department created successfully');
    }

<<<<<<< HEAD
    public function show($id)
    {
      dd('show');
    }
=======
   
>>>>>>> 9066209 (Hello)
    public function update(Request $request,$id){
      Department::find($id)->update(['name'=>$request->name,'status'=>$request->status]);
      return back()->with('success','department updated successfully');
    }

    public function change_active(Request $request)
    {
        session(['department'=>$request->department_id]);
        session()->flash('success', 'Changes Department Successfully!');
        return back();
    }
}
