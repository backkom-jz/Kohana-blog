<?php
class Controller_Admin_Admin_Index extends Controller
{

    public function action_index()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/admin/index', array(
                'title' => $title,
            )
        )->response();
    }
    /**
     * action_add
     * 用户添加
     */
    public  function action_add()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/admin/add', array(
                'title' => $title,
            )
        )->response();
    }

    /**
     * action_list
     * 用户列表
     */
    public function action_list()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/admin/list', array(
                'title' => $title,
            )
        )->response();
    }

    /**
     * action_permission
     * 权限管理
     */
    public function action_permission()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/admin/permission', array(
                'title' => $title,
            )
        )->response();
    }

    /**
     * action_role
     * 角色管理
     */
    public function action_role()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/admin/role', array(
                'title' => $title,
            )
        )->response();
    }

    /**
     * action_role_add
     * 角色添加
     */
    public function action_role_add()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/admin/role-add', array(
                'title' => $title,
            )
        )->response();
    }

}