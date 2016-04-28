<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 */
function prepend()
{
    $args = func_get_args();

    $fn = function ($el, array $ls) {
        array_unshift($ls, $el);
        return $ls;
    };

    return call_user_func_array(curry($fn), $args);
}
