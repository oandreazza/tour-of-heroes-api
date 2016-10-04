<?php
namespace App\Http\Controllers;


use App\Model\Hero;


class HeroesController extends Controller{


    private $heroes;
   
    public function __construct(){
        $this->setHeroes();
    }


    private function setHeroes(){
        /** $this->heroes = [new Hero('1','Mauricio'),
            new Hero('2','Don Martin'),
            new Hero('3','Marzteck Turkishw'),
            new Hero('4','Ultrazon Maritzen'),
            new Hero('5','Ultramegazord Alterez')
        ];*/

        $this->heroes = Hero::all();
    }



    public function index(){
        return response()->json(array('data' => $this->heroes));
        //return $this->heroes;
    }


    public function edit($id){

        $hero = Hero::find($id);

        
        return response()->json(array('data' => $hero))->header('Access-Control-Allow-Origin', '*')->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

    }

}
