<?php
class Controller_Admin_Article_Index extends Controller
{
    const POST_ERROR = 1001;
    const POST_TITLE_ERROR = 1002;
    const POST_SMALL_TITLE_ERROR = 1003;
    const POST_PLATE_ERROR = 1004;
    const POST_KEYWORD_ERROR = 1005;
    const POST_IS_ORIGINAL_ERROR = 1006;
    const POST_CONTENT_ERROR = 1007;
    const POST_TYPE_ERROR = 1008;

    /**
     * action_list
     * 文章列表
     */
    public function action_list()
    {
        $title = 'Hello world!!!';
        $total = Model::factory('articles')->getTotal();
        $data = Model::factory('articles')->getAll();
        Template::factory('Admin/article/list', array(
                'total'=>$total,
                'data' => $data,
                'title' => $title,
            )
        )->response();
    }

    /**
     * action_add
     * 添加文章页面
     */
    public function action_add()
    {
        $title = 'Hello world!!!';
        Template::factory('Admin/article/add', array(
                'title' => $title,
            )
        )->response();
    }

    /**
     * action_real_add
     * 添加文章
     */
    public function action_real_add()
    {



      if(empty($_POST)){
          echo json_encode(self::POST_ERROR);die;
      }

      if(empty($_POST['title'])){
          echo self::POST_TITLE_ERROR;die;
      }

      if(empty($_POST['small_title'])){
            echo self::POST_SMALL_TITLE_ERROR;die;
      }

      if(empty($_POST['plate'])){
        echo self::POST_PLATE_ERROR;die;
      }


      if(empty($_POST['keyword'])){
        echo self::POST_KEYWORD_ERROR;die;
      }

      if(empty($_POST['type'])){
            echo self::POST_TYPE_ERROR;die;
      }

      if(empty($_POST['is_original'])){
        echo self::POST_IS_ORIGINAL_ERROR;die;
      }


      if(empty($_POST['content'])){
        echo self::POST_CONTENT_ERROR;die;
      }

      list($articles_id,$affected_rows) = DB::insert('articles',
          array('title',
              'small_title',
              'plate',
              'type',
              'keyword',
              'user_id',
              'is_original',
              'content',
              'created_at',
              'updated_at'
                ))
          ->values(array(
                  $_POST['title'],
                  $_POST['small_title'],
                  $_POST['plate'],
                  $_POST['type'],
                  $_POST['keyword'],
                  1,
                  0,
                  $_POST['content'],
                  date('Y-m-d H:i:s',time()),
                  date('Y-m-d H:i:s',time())
              )
          )->execute();
     echo $articles_id;





    }


}