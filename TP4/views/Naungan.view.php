<?php
include_once("conf.php");
include_once("models/Naungan.class.php");

class NaunganView
{
    public function render($data)
    {
        $dataNaungan = null;
        $form = null;
        foreach ($data['naungan'] as $val) {
            list($id, $nama_naungan) = $val;
            $dataNaungan .= "<tr>
            <td>" . $id . "</td>
            <td>" . $val['nama_naungan'] . "</td>
            <td>
                <a class='btn btn-success' href='naungan.php?id_edit=$id'>Edit</a>
                <a class='btn btn-danger' href='naungan.php?id_delete=$id'>Delete</a>
            </td>
            </tr>";
        }

        if(!empty($data['flag'])){
            $title = 'Update';
            foreach ($data['temp'] as $val) {
                list($id, $nama_naungan) = $val;
                $form = '<div class="card-body">
                <form method="post" id="data" action="naungan.php">
                <div class="mb-3 row">
                    <input type="hidden" name="id" value="' . $id . '">
                    <label for="name" class="col-sm-4 col-form-label">Nama Naungan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_naungan" value="' . $nama_naungan . '">
                    </div>
                </div>
                </form>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-success" name="edit" form="data">Edit</button>
                    <a href="naungan.php" class="text-light text-decoration-none btn btn-danger">Cancel</a>
                </div>';
            }
        }

        else {
            $form = '<div class="card-body">
            <form method="POST" id="data" action="naungan.php">
            <div class="mb-3 row">
                <label for="name" class="col-sm-4 col-form-label">Nama Naungan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_naungan">
                </div>
            </div>
            </form>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-success" name="submit" form="data">Add</button>
                <a href="naungan.php" class="text-light text-decoration-none btn btn-danger">Cancel</a>
            </div>';           

            $title = 'Add';
        }
        
        $tpl = new Template("templates/naungan.html");
        $tpl->replace("DATA_TABEL", $dataNaungan);
        $tpl->replace("FORM", $form);
        $tpl->replace("TITLE", $title);
        $tpl->write();
    }
}