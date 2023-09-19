<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $salesproducts = [
        [
            'title' => 'Msi Gaming',
            'specific' => 'Intel i7-12400kf Nvidia 2080super Ram 16bg ssd 500gb ',
            'description' => 'Pc adatto a chi si vuole affacciare al mondo del gaming senza rinunciare alla prestazioni',
            'price' => '990,00£',
            'img' => '/img/msi.jpg',
            'route' => 'show.pc',
        ],
        [
            'title' => 'Asus ROG',
            'specific' => 'Intel i9-14900k Nvidia 4090 Ram 32bg ssd 1 tera ',
            'description' => 'Questo pc e` assemblato con le migliori componenti presenti attualmente sul mercato',
            'price' => '3290,00£',
            'img' => '/img/asusrog.jpg', 
            'route' => 'show.pc',
        ],
        [
            'title' => 'Msi 2k',
            'specific' => '1090x2080 ottimo monito per il 2k, risoluzione avanzata e refresh a 160hz',
            'description' => 'Monitor versatile, si comporta bene sia in ambito lavorativo che nel gaming.',
            'price' => '490,00£',
            'img' => '/img/monitormsi.jpg',
            'route' => 'show.monitor',
        ],
    ];

    public function homepage(){
        return view('homepage',[
            'salesproducts' => $this->salesproducts
        ]);
    }
}
