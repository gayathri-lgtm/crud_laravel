<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB; 

class StudentController extends Controller
{
    public function index(Request $request)
    {
        
    $items = DB::table('student')
        ->when($request->search, function ($query) use ($request) {
            $search = $request->search;
            return $query->where(function ($q) use ($search) {
                $q->where('id', 'like', "%{$search}%")
                  ->orWhere('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('branch', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%");
            });
        })
        ->paginate(5)
        ->appends($request->all()); 

    return view('dataview', compact('items'));
        
        
    }







    public function addtable(){
        return view('addview');
    }






    public function adddata(Request $request){
 
    $request->validate([
        'name'   => 'required',
        'email'  => 'required',
        'branch' => 'required',
        'phone'  => 'required',
    ]);

   
    DB::table('student')->insert([
        'name'   => $request->name,
        'email'  => $request->email,
        'branch' => $request->branch,
        'phone'  => $request->phone,
    ]);

    
     return redirect()->route('getdata');
    
}







    public function deletedata($id){
        $data = DB::table("student")->where('id',$id) ->delete();
        return redirect()->route('getdata');
    }





    public function updtable($id){
        $item = DB::table('student')->where('id', $id)->first();
        return view('tableforupdate', compact('item')); 
    }

   
    public function update(Request $request,$id){
        DB::table('student')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'branch' => $request->branch,
                'phone' => $request->phone,
            ]);

        return redirect()->route('getdata'); 
    }
}