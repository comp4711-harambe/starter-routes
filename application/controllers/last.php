<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class last extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		// gets justone view
		$this->data['pagebody'] = 'justone';
		// gets all authors to be rendered
		$source = $this->quotes->all();
		$authors = array_pop($source);     
		$this->data['mug'] = $authors['mug'];
		$this->data['who'] = $authors['who'];
		$this->data['what'] = $authors['what'];
		$this->render();
	}

}
