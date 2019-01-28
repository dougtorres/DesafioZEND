<?php

class Application_Model_Carros extends Zend_Db_Table_Abstract
{
    protected $_name = 'carros';
    
    public function insert($data)
    {   
        return $this->insert($data);
    }
     public function listar()
    {
        $select = $this->select()
                    ->order("name asc");
        return $this->fetchAll($select)->toArray();
    }
    public function buscar($id){
        return $this->find($id);
    }
    
    


}

