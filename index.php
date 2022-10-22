<?php
    include "koneksi.php";
    if(isset($_POST['simpan'])){
            $nama =$_POST['nama'];
            $kota =$_POST['kota'];

            $insert = "INSERT INTO user (nama,kota) VALUES ('$nama','$kota')";
            $sql = mysqli_query($conn, $insert);

            if ($sql){
                header('Location: tampil.php?sukses');
            } else {
                echo "failed";
            }
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="m-auto px-2 py-2">
        <div class=" text-center text-lg border border-black tracking-widest font-semibold w-1/2 h-auto m-auto">
            <p class="text-black">CRUD MULU TITID</p>           
        </div>
        <div class="p-2 mt-2 text-center underline text-blue-500 font-mono text-lg">
            <a href="tampil.php">Lihat List Mahasiswa</a>
        </div>
        <div class="table mt-12 m-auto ">
            <form action="" method="post">
                    
                    <label for="fname">Nama:</label><br>
                    <input type="text" id="fname" name="nama" required class="border border-black p-1"><br>

                    <label for="lname">Kota:</label><br>
                    <input type="text" id="lname" name="kota" required class="border border-black p-1"><br>
                    <input type="submit" name="simpan" value="Simpan" class="mt-2 text-white justify-center rounded h-6 w-24 bg-black mx-10 hover:text-blue-600"><br>      
            </form>        
        </div>
    </div>
</body>
</html>