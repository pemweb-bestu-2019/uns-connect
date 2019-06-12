<?php

/**
 * Mengeset link apapun menjadi active dengan menambahkan class active
 * berdasarkan route yang diakses
 *
 * @param mixed $uri
 * @param string $output
 * @return string
 */
function nav_set_active($uri, $output = 'active')
{
    if (is_string($uri)) {
        if (Route::is($uri)) return $output;
    } else {
        foreach ($uri as $u) {
            if (Route::is($u)) return $output;
        }
    }

    return '';
}
