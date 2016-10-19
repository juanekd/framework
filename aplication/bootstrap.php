<?php
class Bootstrap
{
	public static function run(Request $petition){
		$controller = $petition->getController()."Controller";
		$routeController = ROOT."controllers".DS.$controller.".php";
		$method = $petition->getMethod();
		$args = $petition->getArgs();

		if (is_readable($routeController)) {
			include_once($routeController);
			$c = new $controller;
			if (is_callable(array($controller, $method))) {
				$method = $petition->getMethod();
		    }else{
			      $method = "index";
		    }
		    if(isset($args)){
			    call_user_func_array(array($controller, $method), $args);
		    }else{
			    call_user_func_array(array($controller, $method));
			}

		}else{
			throw new Exception("Controlador no encontrado", 1);
		}


	}
}