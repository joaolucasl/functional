<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function has()
{
    $args = func_get_args();

    $has = function ($x, $xs) {
        return array_key_exists($x, (array) $xs);
    };

    return call_user_func_array(partial($has), $args);
}
