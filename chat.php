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
    $message = $_POST['message'];
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO messages (user_id, message) VALUES (?, ?)");
    $stmt->execute([$user_id, $message]);
}

$messages = $conn->query("SELECT * FROM messages WHERE user_id = {$_SESSION['user_id']} ORDER BY created_at ASC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sohbet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('sena.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .chat-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(30, 60, 49, 0.8);
            border-radius: 10px;
        }
        .chat-box {
            max-height: 400px;
            overflow-y: auto;
            background: white;
            color: black;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .chat-message {
            margin: 5px 0;
        }
        .form-container {
            display: flex;
            gap: 10px;
        }
        .form-container textarea {
            flex: 1;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }
        .form-container button {
            padding: 10px 20px;
            background: rgba(46, 93, 75, 0.9);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container button:hover {
            background: rgba(34, 115, 78, 0.9);
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <h1>Ekiple Sohbet</h1>
        <div class="chat-box">
            <?php foreach ($messages as $msg): ?>
                <div class="chat-message"><?= htmlspecialchars($msg['message']); ?></div>
            <?php endforeach; ?>
        </div>
        <form class="form-container" method="post">
            <textarea name="message" rows="3" placeholder="Mesajınızı yazın..." required></textarea>
            <button type="submit">Gönder</button>
        </form>
    </div>
</body>
</html>
