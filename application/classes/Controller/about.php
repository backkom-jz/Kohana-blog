<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller {

    public function action_index()
    {

        $title = 'Hello world!!!';
        Template::factory('Index/about', array(
                'title' => $title,
            )
        )->response();

    }

} // End Welcome
