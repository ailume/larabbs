<?php

/**
 * Notes: 辅助函数 文件
 * User: lumi
 * Date: 2019/9/9
 * Time: 下午9:29
 * @return mixed
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}