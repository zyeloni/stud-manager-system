<?php


namespace App\Menu;


class MenuBuilder
{
    public static $links = [
        'Dashboard' => [
            'name'=>"Dashboard",
            'route'=>'dashboard'
        ],

        'News' => [
            'name' => 'Ogłoszenia',
            'route'=> 'dashboard.news'
        ],

        'Request' => [
            'name' => 'Zgłoszenia',
            'route'=> 'dashboard.news'
        ],

        'Projects' => [
            'name' => 'Projekty/Zaliczenia',
            'route'=> 'dashboard.news'
        ],
    ];

}
