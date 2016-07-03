<?php

namespace Sergiors\Functional;

const gte = '\Sergiors\Functional\gte';

/**
 * Greater than or equals to
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function gte(/* ...$args */)
{
    $args = func_get_args();

    $gte = function ($a, $b) {
        return $a >= $b;
    };

    return call_user_func_array(partial($gte), $args);
}
