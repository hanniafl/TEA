<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApprovedCourse;
use App\Models\Course;
use App\Mail\RejectCourse;
class CourseController extends Controller
{


    public function index(){

        $courses = Course::where('status',2)->paginate();  
        return view('admin.courses.index', compact('courses'));
    }

    public function show(Course $course){
        $this->authorize('revision', $course);

        return view('admin.courses.show', compact('course'));
    }

    public function approved(Course $course){
        $this->authorize('revision', $course);
        if(!$course->lessons || !$course->goals || !$course->requirements || !$course->image){
            return back()->with('info','No se puede publicar el curso que no esta completo');
        }


        $course->status =3;
        $course->save();

        //envie el correo electronico
        $mail = new ApprovedCourse($course);
        //utilizacion de quues para optimizar el trabajo de los correos
        Mail::to($course->teacher->email)->queue($mail);

        return redirect()->route('admin.courses.index')->with('info','El curso se publico con exito');
    }

    public function observation(Course $course){
        return view('admin.courses.observation',compact('course'));
    }

    public function reject(Request $request,Course $course){
        $request->validate([
            'body' => 'required'
        ]);

        
        $course->observation()->create($request->all());
        $course->status =1;
        $course->save();

          //envie el correo electronico
          $mail = new RejectCourse($course);
          Mail::to($course->teacher->email)->queue($mail);
  
        
          return redirect()->route('admin.courses.index')->with('info','El curso se ha rechazado con exito');

    }
}
