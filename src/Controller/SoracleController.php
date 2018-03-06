<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class SoracleController extends AppController{
  public function index(){
    $this->viewBuilder()->layout(false);
    $volts = TableRegistry::get('battery_volts')->find();
    $this->render('index');
  }

  public function post(){
    $this->viewBuilder()->layout(false);

    $battery_volts = TableRegistry::get('battery_volts');
    $battery_volt = $battery_volts->newEntity();

    $query_data = $this->request->getQuery('data');

    if($query_data != Null && $query_data != ''){
      $battery_volt->volt = (int)$query_data;
      $battery_volt->created = new Time(date('Y-m-d H:i:s'));
      $this->log($this->getLastId($battery_volts->find()));
      $this->giveId($battery_volts, $battery_volt);

      if($battery_volts->save($battery_volt)){
        $this->set('mes', 'success');
      }else{
        $this->set('mes', 'fail');
      }
    }
    $this->render('post');
  }
}
?>
