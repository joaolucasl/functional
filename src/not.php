<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function not()
{
    $args = func_get_args();

    $not = function ($x) {
        return !$x;
    };

    return call_user_func_array(partial($not), $args);
}
