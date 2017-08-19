<?php

class AdminMethodsController extends Framework\Controllers\BaseController {
	/** @author Playmore 2017 (playmoredevelop@gmail.com) */
	
	public function indexAction() {
		
		return $this->render('index.view');
	}
	
	/**
	 * autocomplete
	 * @global type $AVE_Template
	 * @return \AVE_Template
	 */
	protected function ave_template() {
		global $AVE_Template;
		return $AVE_Template;
	}
	
	protected function render($filename) {
		
		$path = realpath(dirname(__FILE__)).'/views/';
		
		$filename = str_replace('.php', '', $filename).'.php';
		
		$this->ave_template()->assign('content', snippets()->render->file($path.$filename));
	}
}