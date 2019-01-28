<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {   
        
        $marcasJson = file_get_contents('http://fipeapi.appspot.com/api/1/carros/marcas.json');
        $marcas = Zend_Json::decode($marcasJson);
        $carrosJson = file_get_contents('http://fipeapi.appspot.com/api/1/carros/veiculos/21.json');
        $carros= Zend_Json::decode($carrosJson);
        $marca = new Application_Model_Marcas();
        foreach($marcas as $row){
            if($marca->select($row["id"])){
                echo "achei";
              
            }
            else "nao achei";
    }
            
    }

    public function indexAction()
    {
        // action body
    }

    public function cadastrarMarcaAction()
    {
        // action body
    }


}



