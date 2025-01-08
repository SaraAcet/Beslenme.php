<?php
$host = 'localhost';
$dbname = 'nutrition_website';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantısı başarısız: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$username, $email, $password])) {
        session_start();
        $_SESSION['user_id'] = $conn->lastInsertId();
        $_SESSION['username'] = $username;
        header('Location: index.php'); // Anasayfaya yönlendir
        exit;
    } else {
        echo "Kayıt sırasında bir hata oluştu.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Ol</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('sena.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .form-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: rgba(30, 60, 49, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin: 10px 0 5px;
        }
        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background: rgba(46, 93, 75, 0.9);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .form-container button:hover {
            background: rgba(34, 115, 78, 0.9);
        }
        .form-container a {
            color: white;
            text-decoration: underline;
            text-align: center;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Üye Ol</h1>
        <form method="post">
            <label>Kullanıcı Adı:</label>
            <input type="text" name="username" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Şifre:</label>
            <input type="password" name="password" required>
            <button type="submit">Üye Ol</button>
        </form>
        <a href="login.php">Zaten üye misiniz? Giriş Yap</a>
    </div>
</body>
</html>
