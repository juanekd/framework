<?php

abstract class AppController
{
	protected $_view;
	abstract public function index();

	public function __construct(){
		$this->_view = new View(new Request);
	}
}