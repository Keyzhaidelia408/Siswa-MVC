<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("location:login.php");
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Navigation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        body h2{
            color: #83B4FF;
            font-size: 2em;
            transition: color 0.3s ease, color 0.3s ease;
        }

        h2:hover{
            color: #618264;
        }

        .navbar {
            width: 100%;
            background-color: #55AD9B;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 0;
        }

        .nav-list {
            list-style: none;
            margin: 10px;
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-items {
            display: flex;
        }

        .nav-item {
            margin: 0 15px;
        }

        .nav-item a {
            display: block;
            padding: 14px 20px;
            text-decoration: none;
            color: #fff;
            border-radius: 30px 5px;
            font-size: 16px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-item a:hover {
            background-color: #618264;
            color: #fff;
            border-radius: 30px 5px;
        }

        .logout {
            margin-right: 20px;
        }

        .welcome-message {
            font-size: 24px;
            color: #4F6F52;
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <h2>WELCOME TO INDEX</h2>
    <nav class="navbar">
        <ul class="nav-list">
            <div class="nav-items">
                <li class="nav-item"><a href="bacasiswa2.php">Siswa</a></li>
                <li class="nav-item"><a href="bacamapel.php">Mapel</a></li>
                <li class="nav-item"><a href="bacauser.php">User</a></li>
            </div>
            <li class="nav-item logout"><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</body>
</html>