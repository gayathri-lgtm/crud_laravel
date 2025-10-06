<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB; // <-- Add this line

class StudentController extends Controller
{
    public function index(){
        $items = DB::table('student')->get();
         return $items;
        
        // ... now you can use $items ...
    }
    public function adddata(){
        $data = DB::table('student') ->insert
        ([
            'name'=>'gayathri',
            'email'=>'gayi@example.com',
            'branch' =>'cai',
            'phone'=>'2323232323',
        ]);
        return "add successfully";
    }

    public function deletedata(){
        $data = DB::table("student")->where('id',1) ->delete();
        return 'deleted';
    }
    
    public function update(){
        $data =DB::table('student')->where('id','2')->update(['name'=>'priya']);
        return 'update';

    }
}