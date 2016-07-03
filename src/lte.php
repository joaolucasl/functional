<?php

namespace Sergiors\Functional;

const lte = __NAMESPACE__.'\lte';

/**
 * Less than or equals to
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function lte(/* ...$args */)
{
    $args = func_get_args();

    $lte = function ($a, $b) {
        return $a <= $b;
    };

    return call_user_func_array(partial($lte), $args);
}
