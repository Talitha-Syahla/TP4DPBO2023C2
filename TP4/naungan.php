<?php

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Naungan.controller.php");

$naungan = new NaunganController();

if (isset($_POST['submit'])) {
    $naungan->add($_POST);
}
else if (!empty($_GET['id_delete'])) {
    //memanggil delete
    $id = $_GET['id_delete'];
    $naungan->delete($id);
}
else if (isset($_POST['edit'])) {
    //memanggil update
    $naungan->update($_POST);
} 
else if (!empty($_GET['id_edit'])) {
    //memanggil edit
    $id = $_GET['id_edit'];
    $naungan->edit($id);
}

else{
    $naungan->index();
}