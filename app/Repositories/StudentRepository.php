<?php

namespace App\Repositories;
use App\Interfaces\StudentRepositoryInterface;
use App\Student as AppStudent;
use Illuminate\Support\Facades\DB;
use Datatables;


class StudentRepository implements StudentRepositoryInterface{

    // public function getdata($request){

    // }

    public function all()
    {
        
        // if ($request->ajax()) {
        //     $data = Product::latest()->get();
        //     return Datatables::of($data)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){

        //                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

        //                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

        //                     return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
    }


    public function store($request)
    {
        $input = $request->all();
        $input['hobby'] = implode(',',$input['hobby']);
        AppStudent::create($input);
        //$input = AppStudent::of(DB::table('students'))->make(true);
        //dd($input);
        return $input;

    }

    public function find($id)
    {
        $student = AppStudent::find($id);
        //dd($student);
        return $student;
    }

    public function update($request, $id)
    {
        //dd($$request,$id);
        $input = $request->all();
        $input['hobby'] = implode(',',$input['hobby']);
        $student = AppStudent::find($id);
        $student->fill($input);
        $student->save();
        return $student;
    }

    public function delete($student)
    {
        return $student->delete();
    }
}


