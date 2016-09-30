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
		// build the author we want to pass on to our view
		$firstAuthor = $this->quotes->get(1);
		$this->data['who'] = $firstAuthor['who'];
		$this->data['mug'] = $firstAuthor['mug'];
		$this->data['what'] = $firstAuthor['what'];

		// this is the view we want shown
		$this->data['pagebody'] = 'justone';
		$this->render();
    }

    /*
     * Function displays the Bob Monkouse quote.
     */
    public function zzz() {
		// build the author we want to pass on to our view
		$bob = $this->quotes->get(1);
		$this->data['who'] = $bob['who'];
		$this->data['mug'] = $bob['mug'];
		$this->data['what'] = $bob['what'];

		// this is the view we want shown
		$this->data['pagebody'] = 'justone';
		$this->render();
    }

    /*
     * Function displays a quote by an author based on the author ID.
     */
    public function gimmie($id) {
		// build the author we want to pass on to our view
		$author = $this->quotes->get($id);
		$this->data['who'] = $author['who'];
		$this->data['mug'] = $author['mug'];
		$this->data['what'] = $author['what'];

		// this is the view we want shown
		$this->data['pagebody'] = 'justone';
		$this->render();
        
    }

}
