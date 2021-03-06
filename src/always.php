<?php

namespace Sergiors\Functional;

const always = __NAMESPACE__.'\always';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param mixed $x
 *
 * @return mixed
 */
function always($x)
{
    return function () use ($x) {
        return $x;
    };
}
