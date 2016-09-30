<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * The default page for the current first quote.
	 */
	public function index()
	{
		// build the list of author we want to pass on to our view
		$firstAuthor = $this->quotes->get(1);
		$this->data['who'] = $firstAuthor['who'];
		$this->data['mug'] = $firstAuthor['mug'];
		$this->data['what'] = $firstAuthor['what'];

		// this is the view we want shown
		$this->data['pagebody'] = 'justone';
		$this->render();
	}

}
