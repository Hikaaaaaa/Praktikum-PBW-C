<!DOCTYPE HTML>
<html>
    <head>
        <title>Praktikum 7 PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
        if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $tugas = $_POST['tugas'];
            $uts = $_POST['uts'];
            $uas = $_POST['uas'];

            $akhir = round((($tugas+$uts+$uas)/3),2);
    ?>
    
        <h1>Nilai Akhir Mahaiswa</h1>
        <div class="box-tampil">
            <div class="result">
                <table>
                    <tr>
                        <td><h3><?php echo $nama ?></h3></td>
                        <td><h3>||</h3></td>
                        <td><h3><?php echo $nim ?></h3></td>
                    </tr>
                    <tr>
                        <td>Nilai Tugas</td>
                        <td>=</td>
                        <td><?php echo $tugas ?></td>
                    </tr>
                    <tr>
                        <td>Nilai UTS</td>
                        <td>=</td>
                        <td><?php echo $uts ?></td>
                    </tr>
                    <tr>
                        <td>Nilai UAS</td>
                        <td>=</td>
                        <td><?php echo $uas ?></td>
                    </tr>
                    <tr>
                        <td>Nilai Akhir</td>
                        <td>=</td>
                        <td><h2><?php echo $akhir ?></h2></td>
                    </tr>
                </table>
            </div>
            <div class="final">
                <table>
                <tr>
                    <td colspan="3" rowspan="2">
                        <h2>
                        <?php
                            if($akhir >= 80){
                                echo "Anda Lulus Dengan Predikat A";
                            }
                            elseif($akhir >= 70){
                                echo "Anda Lulus Dengan Predikat B";
                            }
                            elseif($akhir >= 60){
                                echo "Anda Lulus Dengan Predikat C";
                            }
                            else{
                                echo "Maaf Anda Dinyatakan Tidak Lulus";
                            }
                        ?>
                        </h2>
                    </td>  
                </tr>
                </table>
            </div>
        </div>
    <?php
        }
    ?>
    </body>
</html>