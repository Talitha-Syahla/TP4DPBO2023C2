<?php

class Member extends DB
{
    function getMember()
    {
        $query = "SELECT * FROM member";
        return $this->execute($query);
    }

    function getMemberJoin()
    {
        $query = "SELECT * FROM member JOIN naungan ON member.id_naungan=naungan.id_naungan ORDER BY member.id_member";
        return $this->execute($query);
    }

    function getMemberById($id)
    {
        $query = "SELECT * FROM member WHERE id_member=$id";
        return $this->execute($query);
    }

    function addMember($data)
    {
        $nama_member = $data['nama_member'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $asal_kota = $data['asal_kota'];
        $id_naungan = $data['id_naungan'];

        $query = "INSERT INTO member VALUES ('', '$nama_member', '$tanggal_lahir', '$asal_kota', $id_naungan)";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM member where id_member=$id";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data)
    {
        $id = $data['id'];
        $nama_member = $data['nama_member'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $asal_kota = $data['asal_kota'];
        $id_naungan = $data['id_naungan'];

        $query = "UPDATE member SET nama_member='$nama_member', tanggal_lahir='$tanggal_lahir', asal_kota='$asal_kota', id_naungan = $id_naungan WHERE id_member='$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}


?>