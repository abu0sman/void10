<?php
// Класс работы с компонентами
class vget{
	// Метод логина
	public static function login(){
		
	}

	//Метод извлечения компонента
	public static function component(){
		// Первый параметр (обязательный) название компонента
		$component_name = func_get_args()[0];
		//Обращаемся к файлу компонента
		include "../$component_name/component.php";
		// Все остальные параметры (кроме наименования) передавать в вызываемый компонент.
		$args = array_shift(func_get_args());
		show_component($args);
		return 0;
	}
}