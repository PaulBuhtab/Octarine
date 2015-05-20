<?php namespace App\Http\Controllers\Teacher;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class JournalController extends Controller {

	/**
	 * Основная функция, обрабатывающая все действия с журналом
	 * Ссылается на все остальные
	 * @return Response
	 */
	public function main_action($class_id = null, $subject_id = null, $edu_period_id = null, $date = null, $user_id = null)
	{
		echo  "Это модуль 'Журнал'";
        if($class_id){
            echo " для класса c id = ".$class_id;
        };
        if($subject_id){
            echo " для предмета с id = ".$subject_id;
        };
        if($edu_period_id){
            echo ". Учебный период - ".$edu_period_id;
        };
        if($date){
            echo ". Оценки будут загружаться в модальном окне за дату  ".date("d:M:y",$date);
        };
        if($user_id){
            echo " для пользователся с id = ".$user_id;
        };
	}
}
