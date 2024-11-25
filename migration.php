<?php

require_once 'di/migration.php';

$controller = MigrationDI::create();

$controller->index();

