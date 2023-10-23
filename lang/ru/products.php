<?php

return [
    'btns' => [
        'add' => 'Добавить',
        'add_attribute' => '+ Добавить атрибут'
    ],

    'table' => [
        'article' => 'Артикул',
        'name' => 'Название',
        'status' => [
            'text' => 'Статус',
            'available' => 'Доступен',
            'unavailable' => 'Недоступен',
        ],
        'attributes' => 'Атрибуты',
    ],

    'form' => [
        'article' => 'article',
        'name' => 'name',
        'status' => 'status',
        'attributes' => 'attributes',
    ],

    'titles' => [
        'main' => 'Продукты',
        'create' => 'Добавить продукт',
        'edit' => 'Редактировать :name'
    ],

    'errors' => [
        'required' => 'Поле :field обязательно для заполнения',
        'unique' => ':field должно быть уникальным',
        'regex' => [
            'lat' => ':field должно состоят только из латинских букв',
        ],
        'string' => ':field должно быть строкой',
        'array' => ':field должно быть массивом',
        'min' => ':field должно быть не менее :number символов',
    ],

    'mail' => [
        'subject' => 'Добавлен новый продукт: :name',
        'who_created' => 'Добавил: :user',
        'date' => 'Дата: :date',
    ],
];
