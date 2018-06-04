Kohana 3.2 Pagination
---

This is pretty much hacked up to support Kohana 3.2 so there are a few things to note:

- Request, Route and route parameters dependency injection added
- Current Request is used by default instead of the initial one ($_GET was used directly in < 3.2)
- URL::query() has been removed, Pagination::query() added instead (HMVC support)
- Add feauture to limit links in rendered html template.

Usage Example
---

        //first calc average count
        $count     = $count_sql->count_all();

        //you can change items_per_page
        $num = 10;
        //you can configure routes and custom routes params
        $pagination = Pagination::factory(array(
                            'total_items'    => $count,
                            'items_per_page' => $num,
        //                    'current_page'   => Request::current()->param("page"),
                                )
                        )
                        ->route_params(array(
                    'directory'  => Request::current()->directory(),
                    'controller' => Request::current()->controller(),
                    'action'     => Request::current()->action(),
                    "id"         => $date,
                    "id2"        => $date2,
                        )
                );

        //now select from your DB using calculated offset
        $logs = $logs_sql->order_by("id", "DESC")
                        ->limit($pagination->items_per_page)
                        ->offset($pagination->offset)
                        ->group_by("id")
                        ->find_all()->as_array();

        //and finally set view variables
        $this->content = View::factory("admin/log/asb/main.tpl")
                ->set("logs", $logs)
                ->set('pagination', $pagination);

Variable $pagination will automatically convert to rendered from tpl html.

In this version added some new config features!

Config Example:
---
        return array(
            // Application defaults
            'default' => array(
                // source: "query_string" or "route"
                'current_page'      => array('source' => 'query_string',
                                             'key'    => 'page'),
                'total_items'       => 0,
                'items_per_page'    => 10,
                'view'              => 'pagination/limited',
                'auto_hide'         => TRUE,
                'first_page_in_url' => FALSE,

                //NEW! Use limited template.
                'max_left_pages'    => 10,
                'max_right_pages'   => 10,
            ),
        );

In pagination/view folder added limited tpl, witch can limit number of left and right
pages links by config variables.