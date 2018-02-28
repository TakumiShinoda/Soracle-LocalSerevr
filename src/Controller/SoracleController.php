<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class SoracleController extends AppController{
  public function index(){
    $this->viewBuilder()->layout(false);
    $volts = TableRegistry::get('battery_volts')->find();
    $this->log($volts);
    foreach($volts as $v){
      $this->log($v->volts);
    }

    $this->render('index');
  }
}
?>
