<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üyelere Özel Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('sena.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background: rgba(30, 60, 49, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .container h1 {
            margin-bottom: 20px;
        }
        .container a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background: rgba(46, 93, 75, 0.9);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .container a:hover {
            background: rgba(34, 115, 78, 0.9);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hoş Geldiniz, <?= htmlspecialchars($_SESSION['username']); ?></h1>
        <p>Buradan ekiple iletişim kurabilirsiniz.</p>
        <a href="contact_team.php">Ekiple Görüş</a>
        <a href="logout.php">Çıkış Yap</a>
    </div>
</body>
</html>
