<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PcController extends Controller
{
    public $computers = [
        [
            'title' => 'Msi Gaming',
            'specific' => 'Intel i7-12400kf Nvidia 2080super Ram 16bg ssd 500gb ',
            'description' => 'Pc adatto a chi si vuole affacciare al mondo del gaming senza rinunciare alla prestazioni',
            'price' => '990,00£',
            'img' => '/img/msi.jpg',
        ],
        [
            'title' => 'Asus ROG',
            'specific' => 'Intel i9-14900k Nvidia 4090 Ram 32bg ssd 1 tera ',
            'description' => 'Questo pc e` assemblato con le migliori componenti presenti attualmente sul mercato',
            'price' => '3290,00£',
            'img' => '/img/asusrog.jpg',
        ],
        [
            'title' => 'Radeon WorkStation',
            'specific' => 'Ryzen 7 5800 Amd 6950xt Ram 16bg ssd 500gb ',
            'description' => 'Pc versatile, si comporta bene sia in ambito lavorativo che nel gaming.',
            'price' => '1290,00£',
            'img' => '/img/ryzen.jpg',
        ],
    ];
    
    // call back index
    public function index(){
        return view('pc',[
            'computers' => $this->computers
        ]);
    }
    

    // call back rottaparametrica
    public function show($title){
    foreach($this->computers as $computer){

        if($computer['title'] == $title){
            return view('show-pc', [
                'computer' => $computer
            ]);

        }

    }        
    }


}
