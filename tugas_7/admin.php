<?php 
    session_start();
    $id = $_SESSION['id'];
    $nama = $_SESSION['nama'];
    $username = $_SESSION['username'];
    $level = $_SESSION['level'];
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="col-md-6 mx-auto my-5">
      <div class="tab-content" id="myTabContent">
            <div class="card border-dark">
                <div class="card-header">
                    <h3 class="mb-0 my-2">Selamat Datang <?php echo $nama; ?>!</h3>
                    <a href="input.php"><u>+Tambah Data<u></a>
                </div>
                <div class="card-body">
                    <table border="1">
                        <thead>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th colspan="2">Tindakan</th>
                        </thead>
                        <tbody>
                            <?php
                                include("koneksi.php");
                                $sql = "SELECT * FROM user";
                                $query = mysqli_query($db, $sql);
                                while($data = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>".$data['id']."</td>";
                                echo "<td>".$data['nama']."</td>";
                                echo "<td>".$data['username']."</td>";
                                echo "<td>".$data['level']."</td>";

                                echo "<td><a href='edit.php?uname=".$data['id']."'>Edit</a></td>";
                                echo "<td><a href='hapus.php?uname=".$data['id']."'>Hapus</a></td>";
                                echo "</td>";
                                echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                    <a href="logout.php"><u>Logout<u></a>
                </div>
            </div>
      </div>  
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
