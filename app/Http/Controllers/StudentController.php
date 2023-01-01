<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use App\Interfaces\StudentRepositoryInterface;
use App\Repositories\StudentRepository;
use Illuminate\Support\Facades\DB;
use Datatables;

class StudentController extends Controller
{
    public $StudentRepository;
    public function __Construct(StudentRepositoryInterface $StudentRepository){
        $this->StudentRepository = $StudentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $students = $this->StudentRepository->all();
        return view('student.index',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // $input['hobby'] = implode(',',$input['hobby']);
        // Student::create($input);
        $input = $this->StudentRepository->store($request);
        //dd($input);
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $student = Student::find($id);
        $student = $this->StudentRepository->find($id);
        //dd($student);
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // $input = $request->all();
        // $student = Student::find($id);
        // $student->fill($input);
        // $student->save();
        $student = $this->StudentRepository->update($request,$id);
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //dd($student);
        //$student->delete();
        $student = $this->StudentRepository->delete($student);
        return redirect()->route('students.index');
    }


    public function GetData(Request $request)
    {
        $data = $request->all();
        $student = DB::table('students')->get();
        $students = array('draw' => $data['draw'],'data' => $student);
        return $students;
    }
}
