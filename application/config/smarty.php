<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Smarty 模板配置信息
 */
return array(

    'default' => array(
        'debugging' => FALSE,
        'caching' => FALSE,
        'cache_lifetime' => 1200,
        'template_dir'	=> APPPATH.'views/smarty/',
        'compile_dir'=> APPPATH.'cache/smarty/compile/',
        'cache_dir'=> APPPATH.'cache/smarty/cache/',
        //定界符
        'left_delimiter' => '{{',
        'right_delimiter' => '}}',
        //自定义文件后缀
        'file_subfix' => '.tpl',
        /**
         * 模版内预制变量
         */
        'template_vars'=> array(
            'base_url'	=> Kohana::$base_url,
            'ui_url'	=> Kohana::$base_url.'static/ui_bootstrap',
        ),
    ),

);

