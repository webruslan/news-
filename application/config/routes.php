<?php

    return [

        '' => [
            'controller' => 'main',
            'action' => 'index',
        ],

        'news' => [
            'controller' => 'news',
            'action' => 'news',
            ],

        'news/page/{id:\d+}' => [
            'controller' => 'news',
            'action' => 'news',
        ],

        'news/view/{id:\d+}' => [
            'controller' => 'news',
            'action' => 'views',
        ],
    ];