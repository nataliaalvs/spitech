<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
//usando o modelo



class CourseController extends Controller{

    public function __construct(){
    
        $this->middleware('auth')->except('index', 'show');
    }

    public function index(){
        $courses = Course::all(); 
        return view('course.index', ['courses'=>$courses]);
        
    }

    public function create(){
        return view('course.create');
    }

    public function store(Request $request){
        $course = new Course; 
        $course->name = $request->post('name');
        $course->description = $request->post('description');
        $course->price = $request->post('price');
        $course->in_progress = 0;
        $course->duration = $request->post('duration');
        $course->acquired = 1;

    
        $course->save(); //salva no banco 
        
        
        return redirect()->to(route('course.index'));
    }
    
    public function show($id){
        $course = Course::find($id);
        return view('course.show', ['course'=>$course]);

    }

    public function edit($id){
        $course = Course::find($id);
        return view('course.edit', ['course'=>$course]);
    }

    
    public function update(Request $request, $id){
        $course = Course::find($id);
        $course->name = $request->post('name');
        $course->description = $request->post('description');
        $course->price = $request->post('price');
        $course->duration = $request->post('duration');
        $course->save(); //salva no banco 

        return redirect()->to(route('course.index'));
    }

    public function destroy($id){
        
    }
}
