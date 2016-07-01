<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function each(/* ...$args */)
{
    $args = func_get_args();

    $each = function (callable $fn, array $xs) {
        array_walk($xs, $fn);
        return $xs;
    };

    return call_user_func_array(partial($each), $args);
}
