<?php

namespace App\Interfaces;

Interface StudentRepositoryInterface{

    // public function getdata($request); //datatable
    public function all(); //index
    public function store($request); //create
    public function find($id);//edit
    public function update($request,$id); //update
    public function delete($student); //delete

}

