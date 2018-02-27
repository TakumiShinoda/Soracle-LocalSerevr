<?php
namespace App\Controller;

class SoracleController extends AppController{
  public function index(){
    $this->viewBuilder()->layout(false);
    $this->render('index');
  }
}
?>
