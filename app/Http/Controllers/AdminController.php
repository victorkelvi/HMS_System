<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Appointment;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {

        return view('admin.add_doctor');



    }
    public function upload(Request $request){
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->save();


        return redirect()->back()->with('message' , 'Doctor Added Successfully!');


    }
    public function showappoitment()
    {
        $data = appointment::all();
        return view('admin.showappoitment' ,compact('data'));
    }
    public function approved($id){
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();

        return redirect()->back();


    }

    public function Cancelled($id){
        $data=appointment::find($id);
        $data->status='Cancelled';
        $data->save();

        return redirect()->back();


    }

    public function showdoctor(){
        $data= doctor::all();


        return view('admin.showdoctor', compact('data'));
    }
    public function deletedoctor($id){
        $data=doctor::find($id);
        $data->delete();
      
        return redirect()->back();


    }

    public function updatedoctor($id){
        $data=doctor::find($id);
 
        return view('admin.updatedoctor', compact('data'));


    }

    public function edit_doctor(Request $request , $id){
        $doctor = doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $doctor->name=$request->name;

        $image=$request->file;
        if($image){



        
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image = $imagename;

    }

        $doctor->save();

        return redirect()->back()->with('message' , 'Details updated Succesfully....!');



    }


}
