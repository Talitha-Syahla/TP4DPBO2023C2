<?php
class MemberView
{
    public function render($data)
    {
        $dataMember = null;
        foreach ($data['member'] as $val) {
            
            list($id, $nama_member, $tanggal_lahir, $asal_kota) = $val;
            $dataMember .= "<tr>
            <td>" . $id . "</td>
            <td>" . $nama_member . "</td>
            <td>" . $tanggal_lahir . "</td>
            <td>" . $asal_kota . "</td>
            <td>" . $val['nama_naungan'] . "</td>
            <td>
                <a class='btn btn-success' href='index.php?id_edit=$id'>Edit</a>
                <a class='btn btn-danger' href='index.php?id_delete=$id'>Delete</a>
            </td>
            </tr>";
        }

        $tpl = new Template("templates/index.html");

        $tpl->replace("DATA_TABEL", $dataMember);
        $tpl->write();
    }
}