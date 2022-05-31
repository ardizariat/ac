<?php

function isActiveApp(string $url)
{
    if (url()->current() === $url) {
        return 'text-white active';
    }
    return '';
}
