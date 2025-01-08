<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

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
    $team_member = $_POST['team_member'];
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO messages (user_id, team_member, message) VALUES (?, ?, ?)");
    if ($stmt->execute([$user_id, $team_member, $message])) {
        echo "<script>alert('Mesaj başarıyla gönderildi.');</script>";
    } else {
        echo "<script>alert('Mesaj gönderilirken bir hata oluştu.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ekiple Görüş</title>
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
            max-width: 600px;
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
        .form-container select, .form-container textarea, .form-container button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
        }
        .form-container button {
            background: rgba(46, 93, 75, 0.9);
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .form-container button:hover {
            background: rgba(34, 115, 78, 0.9);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Ekiple Görüş</h1>
        <form method="post">
            <label>Ekip Üyesi:</label>
            <select name="team_member" required>
                <option value="SENA BABUÇ">SENA BABUÇ</option>
                <option value="HELİN BORA">HELİN BORA</option>
                <option value="AYŞEGÜL FISTIK">AYŞEGÜL FISTIK</option>
            </select>
            <label>Mesajınız:</label>
            <textarea name="message" rows="5" required></textarea>
            <button type="submit">Gönder</button>
        </form>
    </div>
</body>
</html>
