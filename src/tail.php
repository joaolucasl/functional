<?php

/**
 * @author Sérgio Rafael Siqueira <sergio@inbep.com.br>
 *
 * @param array $ls
 * 
 * @return array
 */
function tail($ls)
{
    return array_slice($ls, 1);
}
