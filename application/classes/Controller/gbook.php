<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Gbook extends Controller {

    public function action_index()
    {

        $title = 'Hello world!!!';
        Template::factory('Index/gbook', array(
                'title' => $title,
            )
        )->response();

    }

} // End Welcome
