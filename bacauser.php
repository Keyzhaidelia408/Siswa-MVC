<?php
session_start();
include('cruduser.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #95D2B3;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #4F6F52;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #55AD9B;
            color: #fff;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 10px;
            text-align: center;
            background-color: #55AD9B;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #618264;
        }

        .button-container {
            text-align: center;
        }
        
        .links{
            margin-left: 750px;
        }

        .user-info{
            margin-left: 150px;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data User</h2>
        <div class="user-info">
            <?php
            if (isset($_SESSION['namauser'])) {
                echo "User : " . $_SESSION['namauser'] . "<br><br>";
            } else {
                echo "User tidak dikenal. <br><br>";
            }

            $sql = "SELECT * FROM user";
            $data = bacaUser($sql);
            if ($data == null) {
                echo "Record tidak ditemukan";
            }
            ?>
        </div>
        <div class="links">
            <a href='logout.php' class="button logout">Logout</a>
            <a href='tambahuser.php' class="button tambah">Tambah User</a>
            <a href='index.php' class="button menu">Menu Utama</a>
        </div>
        <?php if ($data != null) : ?>
            <table border="1">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th colspan="2">Aksi</th>
                </tr>
                <?php foreach ($data as $user) : ?>
                    <tr>
                        <td><?php echo $user['Username']; ?></td>
                        <td><?php echo $user['Password']; ?></td>
                        <td><?php echo $user['Nama']; ?></td>
                        <td><a href="ubahuser.php?Username=<?php echo $user['Username']; ?>">Edit</a></td>
                        <td><a href="proseshapususer.php?Username=<?php echo $user['Username']; ?>">Hapus</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
        
    </div>
</body>
</html>