<?php
include_once("conf.php");
include_once("models/Member.class.php");
include_once("models/Naungan.class.php");
include_once("views/Member.view.php");
include_once("views/AddForm.view.php");

class MemberController {
  private $member;
  private $naungan;

  function __construct(){
    $this->member = new Member(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->naungan = new Naungan(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->member->open();
    $this->naungan->open();
    $this->member->getMemberJoin();
    $this->naungan->getNaungan();
    
    $data = array(
      'member' => array(),
      'naungan' => array()
    );
    while($row = $this->member->getResult()){
      array_push($data['member'], $row);
    }

    $this->member->close();
    $this->naungan->close();

    $view = new MemberView();
    $view->render($data);
  }

  function add($data){
    $this->member->open();
    $this->member->addMember($data);
    $this->member->close();
    
    header("location:index.php");
  }

  function form($id){
        $this->naungan->open();
        $this->naungan->getNaungan();

        $this->member->open();
        $this->member->getMemberById($id);

        $data = array(
            'naungan' => array(),
            'member' => array()
        );

        while ($row = $this->naungan->getResult()) {
            array_push($data['naungan'], $row);
        }

        while ($row = $this->member->getResult()) {
            array_push($data['member'], $row);
        }

        $this->naungan->close();
        $this->member->close();

        $view = new AddFormView();
        $view->render($id, $data);
    }

    function update($data){
      $this->member->open();
      $this->member->update($data);
      $this->member->close();

      header("location:index.php");
    }

  function edit($id){
        $this->naungan->open();
        $this->naungan->getNaungan();

        $this->member->open();
        $this->member->getMemberById($id);

        $data = array(
            'naungan' => array(),
            'member' => array()
        );

        while ($row = $this->naungan->getResult()) {
            array_push($data['naungan'], $row);
        }

        while ($row = $this->member->getResult()) {
            array_push($data['member'], $row);
        }

        $this->naungan->close();
        $this->member->close();

        $view = new AddFormView();
        $view->render($id, $data);
  }

  function delete($id){
    $this->member->open();
    $this->member->delete($id);
    $this->member->close();

    header("location:index.php");
  }

}