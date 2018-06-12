<?php
class Controller_Admin_Index extends Controller
{
    public function action_index()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/admin-list', array(
                'title' => $title,
            )
        )->response();
    }



}