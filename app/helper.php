<?php

use App\Models\Service;

function getServices() {
    $services = service::orderBy('name', 'ASC')-> where('status', 1)-> get();
    return $services;
}
?>