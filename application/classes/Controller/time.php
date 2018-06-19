<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Time extends Controller {

    public function action_index()
    {

        $data = DB::select('title','id','created_at')
            ->from('articles')
            ->order_by("id", "DESC")
            ->group_by("id")
            ->execute()->as_array();
        $title = 'Hello world!!!';

        Template::factory('Index/time', array(
                'data' => $data,
                'title' => $title,
            )
        )->response();

    }

} // End Welcome
