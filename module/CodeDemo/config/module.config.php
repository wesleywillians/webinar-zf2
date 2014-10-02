<?php

return [

    'router'=> [
        'routes' => [
            'code-index' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/code',
                    'defaults' => [
                        'controller' => 'CodeDemo\Controller\Index',
                        'action' => 'index'
                    ]
                ]
            ]
        ]
    ],

    'controllers'=> [
        'invokables' => [
            'CodeDemo\Controller\Index' => 'CodeDemo\Controller\IndexController'
        ]
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__.'/../view'
        ]
    ]

];