<?php

/**
 * @param $value
 * @return void
 */
function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

/**
 * @param $value
 * @return bool
 */
function urlIs($value): bool {
    return $_SERVER['REQUEST_URI'] === $value;
}