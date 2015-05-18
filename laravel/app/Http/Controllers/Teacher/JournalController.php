<?php namespace App\Http\Controllers\Teacher;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class JournalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function main_action($class_id = null,$subject_id = null)
	{
		echo  "Это модуль 'Журнал'";
        if($class_id){
            echo "<br/>Для класса c id=".$class_id;
        };
        if($subject_id){
            echo "<br/>Для предмета с id=".$subject_id;
        };
	}
}
