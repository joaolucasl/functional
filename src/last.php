<?php

namespace Sergiors\Functional;

const last = __NAMESPACE__.'\last';

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @return mixed
 */
function last(array $xss)
{
    return get(array_values(array_slice($xss, -1)), 0, null);
}
