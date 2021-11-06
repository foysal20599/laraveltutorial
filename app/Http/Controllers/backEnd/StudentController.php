<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::where('status', 1)->get();
        return view('student', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'roll' => 'required',
            'phone' => 'required',
            'image' => 'image|mimes:png,jpg, jpeg',
        ]);
        if($request->image){
            $imageName = date('y').'-'.date('m').time().'.'.$request->image->extension();
            Image::make($request->image)->resize(300, 300)->save( 'images/student/'.$imageName);
         }

        //   if($request->image){
        //     $imageName = date('y').'-'.date('m').time().'.'.$request->image->extension();  
        //     $request->image->move(public_path('images/student/'), $imageName);
        //   }
        //  return $imageName;

        $student = new Student();
        $student->name = $request->name;
        $student->class = $request->class;
        $student->roll = $request->roll;
        $student->phone = $request->phone;
        $student->image = $imageName;
        $student->save();
        toastr()->success('Student Created Successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'roll' => 'required',
            'phone' => 'required',
            'image' => 'image|mimes:png,jpg, jpeg',
        ]);
      
        if($request->image){  
            $student = Student::find($id);
            $filepath = 'images/student/'. $student->image;
            if(File::exists($filepath)){
                File::delete($filepath);
            }
            $imageName = date('y').'-'.date('m').time().'.'.$request->image->extension();
            Image::make($request->image)->resize(300, 300)->save( 'images/student/'.$imageName);
         }


        $student =  Student::find($id);
        $student->name = $request->name;
        $student->class = $request->class;
        $student->roll = $request->roll;
        $student->phone = $request->phone;
        $student->image = $imageName??$student->image;
        $student->save();
        toastr()->success('Student Update Successfully!');
        return redirect()->back();
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
       
        $filepath = 'images/student/'. $student->image;
        if(File::exists($filepath)){
            File::delete($filepath);
        }
        $student->delete();
        toastr()->error('Student Created Successfully!');
        return redirect()->back();
    }
}
