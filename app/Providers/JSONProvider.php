<?php
/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 09/11/18
 * Time: 21:03
 */

namespace App\Providers;


class JSONProvider
{
    public static function json($data = array(), $status = 200, $headers = array(), $options = 0){

        return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
    }
}
