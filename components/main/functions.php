<?php
// Класс извлечения компонента в фрейм.
class vget{
	public static function component(){
		// Первый параметр (обязательный) название компонента
		$component_name = func_get_args()[0];
	
		$path ="../$component_name/component.php";
	
	
		return $path;
	}
}