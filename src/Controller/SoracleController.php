<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class SoracleController extends AppController{
  public function index(){
    $this->viewBuilder()->layout(false);
    $battery_volts_table = TableRegistry::get('battery_volts');

    $this->set('last_battery_volt', $battery_volts_table->find()->where(['id'=>$this->getLastId($battery_volts_table->find())])->first()->volt);
    $this->set('battery_volts', $battery_volts_table->find());
    $this->set('app_controller', $this);

    $this->render('index');
  }

  public function post(){
    $this->viewBuilder()->layout(false);

    $battery_volts = TableRegistry::get('battery_volts');
    $battery_volt = $battery_volts->newEntity();

    $query_data = $this->request->getQuery('data');

    if($query_data != Null && $query_data != ''){
      $battery_volt->volt = (double)$query_data;
      $now = new Time(date('Y-m-d H:i:s'));
      $battery_volt->created = $now->addHours(9);
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

  public function delete(){
    $this->viewBuilder()->layout(false);

    $delete_id = $this->request->getQuery('id');
    $battery_volts = TableRegistry::get('battery_volts');
    if($battery_volts->deleteAll(['id' => $delete_id])){
      $this->set('mes', 'success');
    }else{
      $this->set('mes', 'fail');
    }

    $this->render('delete');
  }
}
?>
