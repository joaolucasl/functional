<?php

namespace Sergiors\Functional;

const ifelse = __NAMESPACE__.'\ifelse';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function ifelse(...$args)
{
    return (function (callable $pred, callable $ontrue, callable $onfalse) {
        return function ($x) use ($pred, $ontrue, $onfalse) {
            return $pred($x)
                ? $ontrue($x)
                : $onfalse($x);
        };
    })(...$args);
}
