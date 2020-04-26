<?php
// Класс работы с компонентами
class vget{
	// Метод логина
	public static function login(){
		
	}

	//Метод извлечения компонента
	public static function component(){
		$args = func_get_args();
		
		// Первый параметр (обязательный) название компонента
		$component_name = $args[0];
		
		// Все остальные параметры (кроме наименования) передавать в вызываемый компонент.
		$argz = array_pop($args);

		//Обращаемся к файлу компонента
		include "../$component_name/component.php";
		
		//show_component($args);
		return 0;
	}
}