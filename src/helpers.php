<?php

if (!function_exists('env')) {
    function env($value, $default = null) {
        return $_ENV[$value] ?? $default;
    }
}
