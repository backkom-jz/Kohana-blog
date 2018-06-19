<?php defined('SYSPATH') or die('No direct script access.');

class Controller_List extends Controller {

    public function action_index()
    {

        $count = DB::select(DB::expr('COUNT(*) AS mycount'))->from('articles')->execute()->get('mycount');

        $perpage = 2;


        //you can configure routes and custom routes params
        $pagination = Pagination::factory(array(
            'total_items'    => $count,
            'items_per_page' => $perpage,
        ))
            ->route_params(array(
                    'controller' => Request::current()->controller(),
                    'action'     => Request::current()->action(),
                )
            );


        $data = DB::select(SUBSTR('content',0,40),'title','small_title','articles.id','articles.updated_at','name')
            ->from('articles')
            ->join('users')
            ->on('users.id','=','articles.user_id')
            ->order_by("articles.id", "DESC")
            ->limit($pagination->items_per_page)
            ->offset($pagination->offset)
            ->group_by("articles.id")
            ->execute()->as_array();

        $title = 'Hello world!!!';
        Template::factory('Index/list', array(
                'title' => $title,
                'data' =>$data,
                'pagination'=>$pagination,
            )
        )->response();

    }

} // End Welcome
