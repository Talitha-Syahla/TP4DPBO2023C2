<?php
include_once("conf.php");
include_once("models/Naungan.class.php");
include_once("views/Naungan.view.php");

class NaunganController {
  private $naungan;
  private $temp;

  function __construct(){
    $this->naungan = new Naungan(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->temp = new Naungan(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->naungan->open();
    $this->naungan->getNaungan();

    $data = array(
      'naungan' => array()
    );
    
    while($row = $this->naungan->getResult()){
      array_push($data['naungan'], $row);
    }

    $this->naungan->close();

    $view = new NaunganView();
    $view->render($data);
  }

  
  function add($data){
    $this->naungan->open();
    $this->naungan->addNaungan($data);
    $this->naungan->close();
    
    header("location:naungan.php");
  }

  function update($data){
    $this->naungan->open();
    $this->naungan->update($data);
    $this->naungan->close();
    
    header("location:naungan.php");
  }

  function edit($id){
    $this->naungan->open();
    $this->naungan->getNaungan();

    $this->temp->open();
    $this->temp->getNaunganById($id);

    $data = array(
        'naungan' => array(),
        'flag' => 1,
        'temp' => array()
    );

    while ($row = $this->naungan->getResult()) {
        array_push($data['naungan'], $row);
    }

    while ($row = $this->temp->getResult()) {
      array_push($data['temp'], $row);
    }

    $this->naungan->close();
    $this->temp->close();

    $view = new NaunganView();
    $view->render($data);
}

  function delete($id){
    $this->naungan->open();
    $this->naungan->delete($id);
    $this->naungan->close();
    
    header("location:naungan.php");
  }

}