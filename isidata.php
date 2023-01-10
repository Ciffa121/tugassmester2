<?php
   
    $database = new PDO("mysql:host=localhost;dbname=datasiswa", 'root', '');
    $query = $database->query("SELECT * FROM tbdatasiswa WHERE nis=nis");
    $data = $query->fetch();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
<h5>SILAHKAN ISI DATA</h5>
    <div class="container-sm">
    <form action="index.php" method="post">
        <input type="hidden" name="nis" value="<?= $nis ?>">
        <div>
            <label>Nis</label>
            <input type="text" name="nis" value="<?= $data['nis'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            <label>Kelas</label>
            <input type="text" name="kelas" value="<?= $data['kelas'] ?>"class="form-control" id="floatingInput">
        </div>
        <div><br>
            
            
            
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>     