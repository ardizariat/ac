<?php

function isActiveApp(string $url)
{
    if (url()->current() === $url) {
        return 'text-white active';
    }
    return '';
}

function prefixAPI()
{
    return 'http://ac.test/api/v1';
}
