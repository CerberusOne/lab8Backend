<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	public function index()
	{
		$this->data['content'] = "You are accessing the Backend.... Goodjob";
		$this->render();
	}

}
