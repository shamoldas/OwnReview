<?php

/**
 * Redirect to the given location.
 * 
 * @param string $location Target page location.
 */
function redirect($location) {
    header('Location: ' . $location);
    exit();
}