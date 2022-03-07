<?php 
    require 'connection.php';

    if (!isset($_SESSION['loggedin'])) {
        header('Location: formLogin.php');
        exit;
    }

    $result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Daftar Users Registered</h1>
            <div>
                <a href="homePage.php" class="btn btn-danger my-5">Back</a>
                <a href="createUser.php" class="btn btn-warning my-5">Create User</a>
                <a href="logout.php" class="btn btn-primary my-5">Logout</a>
            </div>
        </div>
        <?php if($_SESSION['message'] ?? false): ?>
            <div class="alert alert-success">
                <?= $_SESSION['message'] ?? '' ; sleep(5); unset($_SESSION['message'])?>
            </div>
        <?php endif; ?>
        
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['name']?></td>
                    <td><?= $row['email']?></td>
                    <td>
                        <a href="formEdit.php?id=<?= $row['id']?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</body>
</html>