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
        <div class="text-center text-lg border border-black tracking-widest font-semibold w-1/2 h-auto m-auto">
            <p class="text-black">LIST USER</p>          
        </div><br>
        <div class="m-auto p-2 text-center">
            <a href="index.php " class='hover:text-green-400'>⬅️ Back To Index</a>
        </div>
        <div class="table mt-12 m-auto ">
            <table class="border border-collapse border-black">
                <tr>
                    <th class='border border-black w-10 text-red-700 tracking-widest '>No</th>
                    <th class='border border-black w-32 text-red-700 tracking-widest'>Nama</th>
                    <th class='border border-black w-32 text-red-700 tracking-widest'>Kota</th> 
                    <th colspan="2" class='border border-black w-32 text-red-700 tracking-widest'>Opsi</th>
                </tr>
                <?php
                    include "koneksi.php";
                    $no = 1;
                    $ambildata = mysqli_query($conn , "select * from user");
                    while($show = mysqli_fetch_array($ambildata)){
                        echo "
                        <tr>
                            <td class='border border-black  text-center'>$no</td>
                            <td class='border border-black'>$show[nama]</td>
                            <td class='border border-black'>$show[kota]</td>
                            <td class='border border-black underline text-blue-600 hover:text-yellow-400'><a href='update.php?kode=$show[nama]'>Update</a></td>
                            <td class='border border-black underline text-blue-600 hover:text-red-500'><a href='?kode=$show[nama]'> Hapus </a></td>
                        </tr>
                        ";
                        $no++;
                    }
                ?>
            </table>
            <?php
                include "koneksi.php";
                if(isset($_GET['kode'])){
                    mysqli_query($conn, "delete from user where nama='$_GET[kode]'");
                    echo "<p class='text-center'>Data Berhasil Dihapus</p>";
                    echo  "<meta http-equiv=refresh content=2;URL='tampil.php'>";
                }
            ?>   
        </div>
    </div>
</body>
</html>