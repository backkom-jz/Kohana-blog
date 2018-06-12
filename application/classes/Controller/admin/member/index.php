<?php
class Controller_Admin_Member_Index extends Controller
{
    public function action_add(){
        $title = 'Hello world!!!';
        Template::factory('Admin/member/add', array(
                'title' => $title,
            )
        )->response();
    }

    public function action_del(){
        $title = 'Hello world!!!';
        Template::factory('Admin/member/del', array(
                'title' => $title,
            )
        )->response();
    }

    public function action_list(){
        $title = 'Hello world!!!';
        Template::factory('Admin/member/list', array(
                'title' => $title,
            )
        )->response();
    }

    public function action_record_browse()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/member/record_browse', array(
                'title' => $title,
            )
        )->response();
    }

    public function action_record_download()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/member/record_download', array(
                'title' => $title,
            )
        )->response();
    }

    public function action_record_share()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/member/record_share', array(
                'title' => $title,
            )
        )->response();
    }
}