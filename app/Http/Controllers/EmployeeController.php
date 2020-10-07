<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Employee;
use App\Http\Requests\emp_req;
class EmployeeController extends Controller
{
    public function addemp()
    {
        return view('addemp');
    }
    public function emplist()
    {
        $emp=new Employee;
        $data=$emp->get();
        return View('getemp',compact('data'));
    }
     public function addempdata(emp_req $request)
    {


            $emp=new Employee;
            $emp->name=$request->name;
            $emp->Designation=$request->Designation;
            $emp->Department=$request->Department;
            $emp->save();
            $request->session()->flash('msg','Employee Added Successfully !');
            return redirect('/');

    }
    public function deleteemp($id,request $request)
    {
            $emp=new Employee;
            $empexist=$emp->find($id);
            if($empexist!=null)
            {
                $emp->where('id',$id)->delete();
                $request->session()->flash('msg','Employee Deleted Successfully');
            }
            else
            {
                 $request->session()->flash('msg','Employee Is not Exist');

            }
            return Redirect('/');
    }
    public function Edit($id)
    {
        $emp=new Employee();
        $data=$emp->find($id);
        return View('edit',compact('data'));
    }
     public function Editemp(Request $request)
    {
         $emp=new Employee();
         $data=$emp->find($request->id);
         $data->name=$request->name;
         $data->Designation=$request->Designation;
         $data->Department=$request->Department;
         $data->save();
          return redirect('/');
    }
}
