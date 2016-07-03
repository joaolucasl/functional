<?php

namespace Sergiors\Functional;

const equals = '\Sergiors\Functional\equals';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function equals(/* ...$args */)
{
    $args = func_get_args();

    $equals = function ($a, $b) {
        return $a === $b;
    };

    return call_user_func_array(partial($equals), $args);
}
