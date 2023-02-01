<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title></title>
</head>
<body>
    <center>
        <h2>Daftar Todo</h2>
        <h>__________________________________________________________</h3>

</center>

<?php
include '../config/koneksi.php';
?>

<table class="table" >
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Todo</th>
                            <th scope="col">Status</th>
                        </tr>
                    <tbody>
                        <?php
                        $sql2   = "select * from todo order by todo asc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $todo        = $r2['todo'];
                            $status       = $r2['status'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $todo ?></td>
                                <td scope="row"><?php echo $status ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
<script>
    window.print();
    </script>
    </body>
    </html>