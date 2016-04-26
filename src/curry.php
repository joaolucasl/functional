<?php

namespace Sergiors\Functional;

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param \Closure|string $fn
 *
 * @return mixed
 */
function curry($fn)
{
    $args = tail(func_get_args());
    $count = (new \ReflectionFunction($fn))->getNumberOfRequiredParameters();

    return function () use ($fn, $args, $count) {
        $args = array_merge($args, func_get_args());

        if ($count > count($args)) {
            array_unshift($args, $fn);

            return call_user_func_array(__NAMESPACE__.'\curry', $args);
        }

        return call_user_func_array($fn, $args);
    };
}
