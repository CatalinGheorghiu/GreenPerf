<?php

// Set active class to the current page
function active($partialUrl)
{
    return request()->is($partialUrl) ? 'active' : '';
}
