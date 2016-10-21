<?php

/**
 * Routes
 * Load all system routes from a single location
 */

// Base route
$this->group("/", function () {
    $this->get("", Papp\Controllers\Index::class.':index')->setArgument('access', 'public');
});
