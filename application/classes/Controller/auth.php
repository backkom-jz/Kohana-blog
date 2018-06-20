<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

    public function action_index()
    {

        $title = 'Hello world!!!';
        Template::factory('Index/login', array(
                'title' => $title,
            )
        )->response();

    }

    public function action_register()
    {

        $title = 'Hello world!!!';
        Template::factory('Index/register', array(
                'title' => $title,
            )
        )->response();

    }

    public function action_doRegister()
    {

        if(empty($_POST)){
            echo '数据为空，请填写相关数据';
            header("Refresh:1;url=/auth/register");die;
        }

        if(empty($_POST['uid'])){
            echo '用户数据为空，请填写相关数据';
            header("Refresh:1;url=/auth/register");die;
        }

        if(empty($_POST['psw1'])){
            echo '密码数据为空，请填写相关数据';
            header("Refresh:1;url=/auth/register");die;
        }

        if(empty($_POST['psw2'])){
            echo '重复密码数据为空，请填写相关数据';
            header("Refresh:1;url=/auth/register");die;
        }

        if(empty($_POST['email'])){
            echo '邮箱数据为空，请填写相关数据';
            header("Refresh:1;url=/auth/register");die;
        }

        $name = $this->IsUsername($_POST['uid']);
        if($name == false){
              echo '用户名不符合规则';
              header("Refresh:1;url=/auth/register");die;
        }

        $passwd1 = $_POST['psw1'];
        $passwd1 = $this->IsUsername($passwd1);
        if($passwd1 == false){
             echo '密码不符合规则';
            header("Refresh:1;url=/auth/register");die;
        }

        $passwd2 = $_POST['psw2'];
        $pwd = $this->IsSame($passwd1,$passwd2);
        if($pwd == false){
            echo '两次密码不一致';
            header("Refresh:1;url=/auth/register");die;
        }


        $em = $this->IsMail($_POST['email']);
        if($em == false){
            echo 'email 不符合规则';
            header("Refresh:1;url=/auth/register");die;
        }



        list($id,$affected_rows) = DB::insert('users',
          array('name',
              'password',
              'email',
              'created_at',
              'updated_at'
          ))
          ->values(array(
                  $name,
                  md5($pwd),
                  $em,
                  date('Y-m-d H:i:s',time()),
                  date('Y-m-d H:i:s',time())
              )
          )->execute();

        if($id>0){
          echo '成功注册';

          header("Refresh:3;url=/index");
        }



    }

    /**
     * IsUsername函数:检测是否符合用户名格式
     * $Argv是要检测的用户名参数
     * $RegExp是要进行检测的正则语句
     * 返回值:符合用户名格式返回用户名,不是返回false
     */
    public  function IsUsername($Argv){

        $RegExp="/^[a-zA-Z0-9_]{3,16}$/"; //由大小写字母跟数字组成并且长度在3-16字符直接
        return preg_match($RegExp,$Argv)?$Argv:false;
    }

    /**
     * IsMail函数:检测是否为正确的邮件格式
     * 返回值:是正确的邮件格式返回邮件,不是返回false
     */
    function IsMail($Argv){
        $RegExp='/^[a-z0-9][a-z.0-9-_] @[a-z0-9_-] (?:.[a-z]{0,3}.[a-z]{0,2}|.[a-z]{0,3}|.[a-z]{0,2})$/i';
        return preg_match($RegExp,$Argv)?$Argv:false;
    }

    /**
     * IsSmae函数:检测参数的值是否相同
     * 返回值:相同返回true,不相同返回false
     */
    function IsSame($ArgvOne,$ArgvTwo,$Force=false){
        return $ArgvOne===$ArgvTwo?$ArgvOne:$Force;
    }

} // End Welcome
