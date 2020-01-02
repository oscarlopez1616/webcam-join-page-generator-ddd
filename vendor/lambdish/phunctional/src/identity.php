<?php

namespace Lambdish\Phunctional;

/**
 * Identity function is a function which return the same value that is passed as argument. `f(x) = x`
 *
 * @since v1.0.9
 *
 * @param mixed $argument any type of value
 *
 * @return mixed
 */
function identity($argument)
{
    return $argument;
}
