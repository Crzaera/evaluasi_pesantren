<?php
include '../config/koneksi.php';

$todo        = "";
$status       = "";
$error      = "";
$sukses     = "";

if (isset($_POST['simpan'])) {
    $todo        = $_POST['todo'];
    $status       = $_POST['status'];

    if ($todo && $status) {

        $sql1   = "insert into todo(todo,status) values ('$todo','$status')";
        $q1     = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Berhasil memasukan data baru";
        } else {
            $error      = "Gagal memasukan data";
        }
    } else {
        $error = "Silahkan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

    </style>
</head>

<body>
    <div class="mx-auto">
        
        <div class="card">
            <div class="card-header">
                Create
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="todo" class="col-sm-2 col-form-label">todo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="todo" name="todo" value="<?php echo $todo ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" id="status">
                                <option value="">- Pilih Status -</option>
                                <option value="Sedang Dikerjakan" <?php if ($status == "Sedang Dikerjakan") echo "selected" ?>>On Going</option>
                                <option value="Selesai" <?php if ($status == "Selesai") echo "selected" ?>>Complete</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                        <a href="index.php"><button type="button" class="btn btn-warning">Kembali</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>