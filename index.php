<?php

use Pagekit\Application;

return [
    // --------------- ОСНОВНЫЕ ---------------
    'name' => 'todo', // уникальное имя, идентифицирующий модуль
    'type' => 'extension', // тип модуля

    // --------------- ГЛАВНАЯ ФУНКЦИЯ ФХОДА ---------------
    'main' => function (Application $app) {
    },

    // --------------- РЕГИСТРАЦИЯ ПРОСТРАНСТВ ИМЕН ---------------
    'autoload' => [
        'Pagekit\\ToDo\\' => 'src'
    ],

    // --------------- МАРШРУТ КОНТРОЛЛЕРА ---------------
    'routes' => [
        '/todo' => [
            'name' => '@todo/admin',
            'controller' => 'Pagekit\\ToDo\\Controller\\ToDoController'
        ]
    ],
    
    // --------------- МЕНЮ В КОНСОЛИ АДМИНИСТРАТОРА ---------------
    'menu' => [
        'todo' => [
            'label' => 'ToDo BD', // наименование
            'url' => '@todo/admin', // url-адрес модуля по умолчанию (Controller - indexAction)
            'icon' => 'todo:icon.png' // иконка
        ]
    ],

    // --------------- СОКРАЩЕНИЯ ---------------
    'resources' => [
        'todo:' => ''
    ]
];
