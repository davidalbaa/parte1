<?php

function isRoute($name)
{
    return (request()->routeIs($name)) ? 'active' : '';
}
