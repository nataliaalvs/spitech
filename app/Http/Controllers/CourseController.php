<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
//usando o modelo
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Auth;

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

    public function store(CourseRequest $request){

        $course = new Course; 
        $course->name = $request->post('name');
        $course->description = $request->post('description');
        $course->price = $request->post('price');
        $course->duration = $request->post('duration');
        $course->link = $request->post('link');
        $course->user_id = Auth::id();

    
        $course->save(); //salva no banco 
        
        
        return redirect()->to(route('course.index'));
    }
    
    public function show($id){
        $course = Course::find($id);
        $user = User::find($course->user_id);
        return view('course.show', ['course'=>$course, 'nameUser'=>$user->name]);

    }

    public function edit($id){
        $course = Course::find($id);
        return view('course.edit', ['course'=>$course]);
    }

    
    public function update(CourseRequest $request, $id){
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
