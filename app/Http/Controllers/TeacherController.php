<?php

namespace App\Http\Controllers;

use App\Http\Managers\TeacherManager;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //


    protected TeacherManager $manager;

    public function __construct(TeacherManager $manager){

        $this->manager = $manager;
    }



    public function pending(){

        return $this->manager->getPending();

    }

    public function accept(String $id){
        return $this->manager->accept($id);
    }

    public function reject(String $id){
        return $this->manager->reject($id);
    }


}
