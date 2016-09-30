<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		// gets justone view
		$this->data['pagebody'] = 'justone';
		// gets array id of x from the source
		$source = $this->$quotes->get(5);
		$this->data['mug'] = $authors['mug'];
		$this->data['who'] = $authors['who'];
		$this->data['what'] = $authors['what'];
		$this->render();
	}

}
