<?php

declare(strict_types=1);

$json = include MODELS . 'api/nightly_crashes.php';

require_once VIEWS . 'json.php';
