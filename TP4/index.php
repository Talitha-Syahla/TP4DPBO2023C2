<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Member.controller.php");

$member = new MemberController();

if (!empty($_GET['form'])) {
    //memanggil form
    $id = $_GET['form'];
    $member->form($id);
} 
else if (isset($_POST['submit'])) {
    $member->add($_POST);
}
else if (!empty($_GET['id_delete'])) {
    //memanggil delete
    $id = $_GET['id_delete'];
    $member->delete($id);
}
else if (isset($_POST['edit'])) {
    //memanggil update
    $member->update($_POST);
} 
else if (!empty($_GET['id_edit'])) {
    //memanggil edit
    $id = $_GET['id_edit'];
    $member->edit($id);
}
else{
    $member->index();
}
