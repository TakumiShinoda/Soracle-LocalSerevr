<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller{
    public function initialize(){
      parent::initialize();

      $this->loadComponent('RequestHandler');
      $this->loadComponent('Flash');
    }

    public function giveId($table, $entity){
      if($this->getLastId($table->find()) > -1){
        $entity->id = $this->getLastId($table->find()) + 1;
      }else{
        $entity->id = 1;
      }
    }

    public function getLastId($table){
      $result = -1;
      if(!empty($table)){
        foreach($table as $id){
          if($id->id > $result){
            $result = $id->id;
          }
        }
        return $result;
      }else{
        return $result;
      }
    }
}
