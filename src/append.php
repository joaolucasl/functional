<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function append(/* ...$args */)
{
    $args = func_get_args();

    $append = function ($x, array $xs) {
        return array_merge($xs, [$x]);
    };

    return call_user_func_array(partial($append), $args);
}
