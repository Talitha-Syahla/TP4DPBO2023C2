<?php

class Naungan extends DB
{
    function getNaungan()
    {
        $query = "SELECT * FROM naungan";
        return $this->execute($query);
    } 

    function getNaunganById($id)
    {
        $query = "SELECT * FROM naungan WHERE id_naungan=$id";
        return $this->execute($query);
    }

    function addNaungan($data)
    {
        $nama_naungan = $data['nama_naungan'];

        $query = "INSERT INTO naungan VALUES ('', '$nama_naungan')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM naungan where id_naungan=$id";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function update($data)
    {
        $id = $data['id'];
        $nama_naungan = $data['nama_naungan'];

        $query = "UPDATE naungan SET nama_naungan='$nama_naungan' WHERE id_naungan='$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
