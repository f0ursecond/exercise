<?php
include 'koneksi.php';
    if(isset($_POST['sumbit'])){
        
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
       
        $insert = "insert into user (nama,kelas,jurusan) VALUES ('$nama','$kelas','$jurusan')";
        $sql = mysqli_query($conn, $insert);

        if($sql){
            header('Location: tampil.php?sukses');
        } else {
            echo "failed";
        }
    }
?>