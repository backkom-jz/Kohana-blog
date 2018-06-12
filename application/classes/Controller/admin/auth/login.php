<?php
class Controller_Admin_Auth_Login extends Controller
{
    public function action_index(){
        $title = 'Hello world!!!';
        Template::factory('Admin/auth/login', array(
                'title' => $title,
            )
        )->response();
    }

    public function action_change()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/auth/change-password', array(
                'title' => $title,
            )
        )->response();
    }
}