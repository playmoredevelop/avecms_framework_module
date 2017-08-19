<?php

class AdminMethodsController extends Framework\Controllers\BaseController {
	/** @author Playmore 2017 (playmoredevelop@gmail.com) */
	
	public function indexAction() {
		
		debug(__METHOD__);
		
		return $this->render('index.view');
	}
	
	public function render($filename) {
		
		$path = realpath(dirname(__FILE__)).'/views/';
		
		$filename = str_replace('.php', '', $filename).'.php';
		
		return snippets()->render->file($path.$filename);
	}
}