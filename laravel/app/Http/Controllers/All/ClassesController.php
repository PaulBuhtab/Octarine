<?php namespace App\Http\Controllers\All;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ClassesController extends Controller {
    /**
     * Главный обработчик по url - /classes/
     *
     */
    public function index($class_id = null)
    {
        if($class_id){
            $class = DB::table("classes")
                ->where('id',$class_id)
                ->get();//Получаем из базы данных класс
            $users = DB::table('users_classes')
                ->where('class',$class_id)
                ->get();
            return view('classes.list_single')
                ->with('users',$users)
                ->with('class',$class[0]);
        }else{
            $classes = DB::table("classes") -> get();//Получаем из базы данных все классы
            return view('classes.list')//Возвращаем модель, обрабатывающую каждый класс
                ->with('classes',$classes);
        };
    }

    public static function view_single($class_id){

    }

}
