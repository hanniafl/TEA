<?php

namespace App\Http\Controllers\Instructor;



use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Level;
use App\Models\Price;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{


    public function __construct(){
        $this->middleware('can:Leer cursos')->only('index');
        $this->middleware('can:Crear cursos')->only('create','store');
        $this->middleware('can:Actualizar cursos')->only('edit','update','goals');
        $this->middleware('can:Eliminar cursos')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('instructor.courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::pluck('name','id');
        $levels = Level::pluck('name','id');
        $prices = Price::pluck('name','id');

        return view('instructor.courses.create',compact('categories','levels','prices'))->with('info','El curso se creo con exito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses',
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image'
        ]);


        $course = Course::create($request->all());
        if($request->file('file')){
            $url = Storage::put('public/courses', $request->file('file'));

          $course->image()->create([
                'url' => $url
            ]);
        }
       

        

        return redirect()->route('instructor.courses.edit',$course)->with('info','El curso se actualizo con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        return view('instructor.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $this->authorize('dicataded', $course);
        $categories = Category::pluck('name','id');
        $levels = Level::pluck('name','id');
        $prices = Price::pluck('name','id');


        
        return view('instructor.courses.edit',compact('course','categories','levels','prices'))->with('info','El curso se actualizo con exito');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $this->authorize('dicataded', $course);
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:courses,slug,' . $course->id,
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'price_id' => 'required',
            'file' => 'image'
        ]);
        $course->update($request->all());

        if($request->file('file')){
            $url = Storage::put('public/courses',$request->file('file'));

            if($course->image){
                Storage::delete($course->image->url);


                $course->image->update([
                    'url' => $url
                ]);
            }else{
                $course->image()->create([
                    'url' => $url
                ]);
            }
        }

        return redirect()->route('instructor.courses.edit',$course)->with('info','El curso se actualizo con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function goals(Course $course){
        $this->authorize('dicataded', $course);
        return view('instructor.courses.goals', compact('course'))->with('info','Se añadieron las metas con exito');
    }

    public function status(Course $course){
        $course->status = 2;
        $course->save();

        if($course->observation){
            $course->observation->delete();
        }

        return redirect()->route('instructor.courses.edit',$course);
    }
    
    public function observation(Course $course){
        return view('instructor.courses.observation', compact('course'));
    }
}
