<?php

/**
 * Just an alias
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @link http://php.net/array_map
 */
function map()
{
    $args = func_get_args();
    return call_user_func_array(curry('array_map'), $args);
}
