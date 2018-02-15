<?php
/**
 * Created by PhpStorm.
 * User: Rain Kütt
 * Date: 15.02.2018
 * Time: 15:26
 */

namespace App;


class tags extends Controller
{
    function index()
    {
        $this->tags = get_all(
            "SELECT tag_name, " .
            "COUNT(post_id) AS count " .
            "FROM post_tag NATURAL JOIN tag " .
            "GROUP BY tag_id");
    }
}