<?php

use Pagekit\Application;

return [
    // --------------- ОСНОВНЫЕ ---------------
    'name' => 'todobd', // уникальное имя, идентифицирующий модуль
    'type' => 'extension', // тип модуля

    // --------------- ГЛАВНАЯ ФУНКЦИЯ ФХОДА ---------------
    'main' => function (Application $app) {
    },

    // --------------- РЕГИСТРАЦИЯ ПРОСТРАНСТВ ИМЕН ---------------
    'autoload' => [
        'Pagekit\\todobd\\' => 'src'
    ],

    // --------------- МАРШРУТ КОНТРОЛЛЕРА ---------------
    'routes' => [
        '/todobd' => [
            'name' => '@todobd/admin',
            'controller' => 'Pagekit\\todobd\\Controller\\ToDoBDController'
        ],
        
        '/todobd/ajax' => [
            'name' => '@todobd/ajax',
            'controller' => 'Pagekit\\todobd\\Controller\\ToDoBDAjaxController'
        ]
    ],

    // --------------- МЕНЮ В КОНСОЛИ АДМИНИСТРАТОРА ---------------
    'menu' => [
        'todobd' => [
            'label' => 'ToDo BD', // наименование
            'url' => '@todobd/admin', // url-адрес модуля по умолчанию (Controller - indexAction)
            'icon' => 'todobd:icon.svg' // иконка
        ]
    ],

    // --------------- СОКРАЩЕНИЯ ---------------
    'resources' => [
        'todobd:' => ''
    ]
];
