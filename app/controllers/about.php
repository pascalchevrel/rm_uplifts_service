<?php

declare(strict_types=1);

use ReleaseInsights\{Model, Template};

$data = new Model('about')->get();

new Template(
    'regular.html.twig',
    [
        'page_title'   => 'Firefox Trains ressources',
        'css_page_id'  => 'about',
        'page_content' => $data,
    ]
)->render();
