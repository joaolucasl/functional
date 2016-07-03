<?php

namespace Sergiors\Functional;

const hold = '\Sergiors\Functional\hold';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function hold(/* ...$args */)
{
    $args = func_get_args();
    $placeholder = pipe(
        filter(function ($x) {
            return _ === $x;
        }),
        'array_keys'
    );

    $hold = function (callable $fn) use ($placeholder) {
        $args = array_slice(func_get_args(), 1);
        $ks = $placeholder($args);

        return function ($x) use ($fn, $args, $ks) {
            if ([] === $ks) {
                return call_user_func_array($fn, array_merge($args, [$x]));
            }

            return call_user_func_array($fn, array_replace($args, [
                $ks[0] => $x
            ]));
        };
    };

    return call_user_func_array($hold, $args);
}
