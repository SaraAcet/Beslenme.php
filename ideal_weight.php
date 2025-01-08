<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İdeal Kilo Hesaplama</title>
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
            max-width: 500px;
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
        .form-container input, .form-container select {
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
        .form-container .back-link {
            display: inline-block;
            margin-top: 10px;
            text-align: center;
            color: white;
            text-decoration: underline;
            font-size: 14px;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>İdeal Kilo Hesaplama</h1>
        <form method="post">
            <label for="gender">Cinsiyet:</label>
            <select name="gender" id="gender" required>
                <option value="male">Erkek</option>
                <option value="female">Kadın</option>
            </select>

            <label for="height">Boy (cm):</label>
            <input type="number" name="height" id="height" required>

            <button type="submit">Hesapla</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $gender = $_POST['gender'];
            $height = $_POST['height'];

            // İdeal kilo hesaplama (Devine formülü)
            if ($gender === 'male') {
                $ideal_weight = 50 + 0.9 * ($height - 152);
            } else {
                $ideal_weight = 45.5 + 0.9 * ($height - 152);
            }

            echo "<div class='result'>İdeal Kilonuz: " . round($ideal_weight, 2) . " kg</div>";
        }
        ?>

        <a href="index.php" class="back-link">Anasayfaya Dön</a>
    </div>
</body>
</html>
