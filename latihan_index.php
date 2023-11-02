<?php
    $conn = mysqli_connect("localhost","root","","wad_project3");
    $result = mysqli_query($conn,"SELECT * FROM students");

    // var_dump($result);
    // echo"<br/>";
    // echo"<br/>";
    // $data = mysqli_fetch_object($result);
    // var_dump($data);
    // mysqli_fetch_row()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href = "style.css">
</head>
<body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nomor</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        </tr>
    </thead>
    <tbody>

        <?php while ($data = mysqli_fetch_object($result)){
            ?>
        <tr>
            <th scope="row"><?php echo $data->id?></th>
            <td><?php echo $data->nim?></td>
            <td><?php echo $data->name?></td>
            <td><?php echo $data->address?> </td>
        </tr>
        <?php
            }
            ?>
    </tbody>
    </table>
</body>
</html>