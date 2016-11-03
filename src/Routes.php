<?php

/**
 * Routes
 * Load all system routes from a single location
 */

// Base route
$this->group("/", function () {
    $this->get("", Papp\Controllers\Index::class.':index')->setArgument('access', 'public');
});

// Account route
$this->group("/account", function () {
   $this->get("/login", Papp\Controllers\Account::class.':login')->setArgument('access', 'public');
   $this->post("/login", Papp\Controllers\Account::class.':login')->setArgument('access', 'public');
   $this->get("/logout", Papp\Controllers\Account::class.':logout')->setArgument('access', 'public');
});
