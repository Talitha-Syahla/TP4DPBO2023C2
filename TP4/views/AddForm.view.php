<?php
include_once("conf.php");
include_once("models/Member.class.php");

class AddFormView
{
    public function render($id_edit, $data)
    {
        $title = "";
        if (isset($_GET['id_edit'])) {
            $option = null;
            $naungan = 0;
            $data2 = null;

            foreach ($data['member'] as $val) {
                list($id, $nama_member, $tanggal_lahir, $asal_kota, $id_naungan) = $val;
                $naungan = $id_naungan;
            }

            foreach ($data['naungan'] as $val) {
                list($id, $nama_member) = $val;
                if ($id_naungan == $id) {

                    $option .= "<option value='" . $id . "' selected>" . $nama_member . "</option>";
                } else {

                    $option .= "<option value='" . $id . "'>" . $nama_member . "</option>";
                }
            }

            foreach ($data['member'] as $val) {
                list($id, $nama_member, $tanggal_lahir, $asal_kota, $id_naungan) = $val;
                $data2 = '
                    <form method="POST" action="index.php">
                    <br><br>
                    <div class="card mb-5">

                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">Update Member</h1>
                        </div><br>
                            <input type="hidden" name="id" value="' . $id_edit . '">
                            <label> Nama </label>
                            <input type="text" name="nama_member" class="form-control" value="' . $nama_member . '"> <br>

                            <label> Tanggal Lahir </label>
                            <input type="date" name="tanggal_lahir" class="form-control" value="' . $tanggal_lahir . '"> <br>

                            <label> Asal Kota </label>
                            <input type="text" name="asal_kota" class="form-control" value="' . $asal_kota . '"> <br>
                            
                            <label for="id_naungan"> Naungan </label>
                            <select class="custom-select form-control" name="id_naungan">
                                "' . $option . '"
                            </select>
                    
                    <button class="btn btn-success mt-4" type="submit" name="edit">Update</button><br>
                            <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

                        </div>
                    </form>';
            }

            $tpl = new Template("templates/addform.html");
            $tpl->replace("AddFORM", $data2);

        } 
        else {
            $option = null;
            foreach ($data['naungan'] as $val) {
                list($id, $nama_member) = $val;
                $option .= "<option value='" . $id . "'>" . $nama_member . "</option>";
            }
            
            $data = '
            <form method="POST" action="index.php">
            <br><br>
            <div class="card mb-5">

                <div class="card-header bg-warning">
                    <h1 class="text-dark text-center">Add New Member</h1>
                </div><br>
                    <label> Nama </label>
                    <input type="text" name="nama_member" class="form-control"> <br>

                    <label> Tanggal Lahir </label>
                    <input type="date" name="tanggal_lahir" class="form-control"> <br>

                    <label> Asal Kota </label>
                    <input type="text" name="asal_kota" class="form-control"> <br>
                    
                    <label for="id_naungan"> Naungan </label>
                    <select class="custom-select form-control" name="id_naungan">
                        <option value="" disabled selected hidden>Select Naungan</option>
                        "' . $option . '"
                    </select>
            
                <button class="btn btn-warning mt-4" type="submit" name="submit"> Submit </button><br>
                    <a class="btn btn-secondary" type="submit" name="cancel" href="index.php"> Cancel </a><br>

                </div>
            </form>';

            $tpl = new Template("templates/addform.html");
            $tpl->replace("AddFORM", $data);
            
        }

        $tpl->replace("TITLE", $title);
        $tpl->write();
    }
}