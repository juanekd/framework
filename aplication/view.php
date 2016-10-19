<?php
class view
{
	private $_controller;
	private $_method;
	private $_view;
	private $_layout;
	private $viewsVars;

	public function __construct(Request $petition){
		$this->_controller = $petition->getController();
		$this->_method = $petition->getMethod();
		$this->_view = $this->_method;
	}
	public function render($view){
		$routeView = ROOT."views".DS.$this->_controller.DS.$view.".php";
		$header = ROOT."views".DS."layouts".DS."default".DS."header.php"; 
        $footer = ROOT."views".DS."layouts".DS."default".DS."footer.php";

	    if (is_readable($routeView)) {
		          include_once($header);
		          include_once($routeView);
		          include_once($footer);
	    }else{
		      throw new Exception("la vita para el metodo $_method no existe", 1);
		}
	}
	public function __destruct(){
		$this->render($this->_view);
	}
}

