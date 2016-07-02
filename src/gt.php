<?php

namespace Sergiors\Functional;

const gt = __NAMESPACE__.'\gt';

/**
 * Greater than
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function gt(/* ...$args */)
{
    $args = func_get_args();

    $gt = function ($a, $b) {
        return $a > $b;
    };

    return call_user_func_array(partial($gt), $args);
}
