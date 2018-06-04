<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        $title = 'Hello world!!!';
        Template::factory('Index/index', array(
                'title' => $title,
            )
        )->response();

	}

} // End Welcome
