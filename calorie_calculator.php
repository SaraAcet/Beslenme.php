<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kalori Hesaplama</title>
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
        <h1>Kalori Hesaplama</h1>
        <form method="post">
            <label for="age">Yaş:</label>
            <input type="number" name="age" id="age" required>

            <label for="gender">Cinsiyet:</label>
            <select name="gender" id="gender" required>
                <option value="male">Erkek</option>
                <option value="female">Kadın</option>
            </select>

            <label for="weight">Kilo (kg):</label>
            <input type="number" name="weight" id="weight" step="0.1" required>

            <label for="height">Boy (cm):</label>
            <input type="number" name="height" id="height" required>

            <label for="activity">Aktivite Düzeyi:</label>
            <select name="activity" id="activity" required>
                <option value="1.2">Az veya hiç egzersiz</option>
                <option value="1.375">Hafif egzersiz (haftada 1-3 gün)</option>
                <option value="1.55">Orta düzey egzersiz (haftada 3-5 gün)</option>
                <option value="1.725">Yoğun egzersiz (haftada 6-7 gün)</option>
                <option value="1.9">Çok yoğun egzersiz (fiziksel iş veya çift antrenman)</option>
            </select>

            <button type="submit">Hesapla</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $weight = $_POST['weight'];
            $height = $_POST['height'];
            $activity = $_POST['activity'];

            // Kalori hesaplama (BMR formülü)
            if ($gender === 'male') {
                $bmr = 88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age);
            } else {
                $bmr = 447.6 + (9.2 * $weight) + (3.1 * $height) - (4.3 * $age);
            }

            // Aktivite düzeyine göre toplam kalori
            $total_calories = $bmr * $activity;

            echo "<div class='result'>Günlük Kalori İhtiyacınız: " . round($total_calories, 2) . " kcal</div>";
        }
        ?>
    </div>
</body>
</html>
