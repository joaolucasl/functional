<?php

namespace Sergiors\Functional;

/**
 * Returns the value mapped to key, $notfound value if key not present.
 *
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @link https://clojuredocs.org/clojure.core/get
 *
 * @return mixed
 */
function get()
{
    $args = func_get_args();

    $get = function ($map, $key, $notfound = false) {
        $map = (array) $map;
        
        if (isset($map[$key])) {
            return $map[$key];
        }

        return $notfound;
    };

    return call_user_func_array(partial($get), $args);
}