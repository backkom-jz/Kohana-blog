<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Share extends Controller {

    public function action_index()
    {

        $title = 'Hello world!!!';
        Template::factory('Index/share', array(
                'title' => $title,
            )
        )->response();

    }

} // End Welcome
