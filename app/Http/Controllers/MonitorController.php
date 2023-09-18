<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public $monitors = [
        [
            'title' => 'Asus 4k',
            'specific' => '4k oled 165Hz 0.5ms  ',
            'description' => 'Monitor adatto a chi vuole il massimo delle prestazioni adatto per qualsiasi utilizzo',
            'price' => '590,00£',
            'img' => '/img/monitorasus.jpg',
        ],
        [
            'title' => 'Acer 1080p',
            'specific' => 'HD e Full Hd a 1080p 144hz 1ms di risposta ',
            'description' => 'Monitor con un ottima qualita prezzo ideale per chi e` alle prime configurazioni',
            'price' => '290,00£',
            'img' => '/img/monitoraces.jpg',
        ],
        [
            'title' => 'Msi 2k',
            'specific' => '1090x2080 ottimo monito per il 2k, risoluzione avanzata e refresh a 160hz',
            'description' => 'Monitor versatile, si comporta bene sia in ambito lavorativo che nel gaming.',
            'price' => '490,00£',
            'img' => '/img/monitormsi.jpg',
        ],
    ];

    // call back index
    public function index(){
        return view('monitor',[
            'monitors' => $this->monitors
        ]);
    }

    // call back rottaparametrica
    public function show($title){
        foreach($this->monitors as $monitor){
    
            if($monitor['title'] == $title){
                return view('show-monitor', [
                    'monitor' => $monitor
                ]);
    
            }
    
        }        
        }
}
