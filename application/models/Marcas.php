<?php

class Application_Model_Marcas extends Zend_Db_Table_Abstract
{
     protected $_name = 'marcas';
    
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
    public function select($id = null){
        ini_set('memory_limit', '-1');
         $select = $this->select()->where('id = ?', $id);
        return $this->fetchAll($select)->toArray();
    }
    
      public function buscar($id = null){
          if($this->find($id))
           return true;
          else
              return false;
    }
    
}

