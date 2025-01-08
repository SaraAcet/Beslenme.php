<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
   
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('sena.jpg') no-repeat center center fixed; /* Arka plan resmi */
            background-size: cover; /* Resmi tam ekran kaplayacak şekilde ölçekle */
            color: white; /* Yazı rengi */
        }
        header {
            background-color: rgba(30, 60, 49, 0.8); /* Hafif saydam koyu yeşil */
            color: white;
            padding: 20px;
            text-align: center;
        }
        .top-right-menu {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 15px; /* Linkler arasındaki boşluk */
        }
        .menu-link {
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 8px 12px;
            background-color: rgba(46, 93, 75, 0.9); /* Hafif saydam yeşil */
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .menu-link:hover {
            background-color: rgba(34, 115, 78, 0.9); /* Hover efekti */
        }
        .content {
            text-align: center;
            margin-top: 150px;
            padding: 20px;
        }
        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.8;
        }
        footer {
            background-color: rgba(30, 60, 49, 0.8);
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<body>



<!-- Sağ Üst Menü -->
<div class="top-right-menu">
    <a href="index.php" class="menu-link">Anasayfa</a>
    <a href="calorie_calculator.php" class="menu-link">Kalori Hesaplama</a>
    <a href="ideal_weight.php" class="menu-link">İdeal Kilo</a>
    <a href="healthy_tips.php" class="menu-link">Sağlıklı Beslenme</a>
    <a href="about.php" class="menu-link">Hakkımızda</a>
    <a href="contact.php" class="menu-link">İletişim</a>
    <a href="register.php" class="menu-link">Üye Ol</a>
    <a href="login.php" class="menu-link">Giriş Yap</a>
</div>

<!-- Ana İçerik -->
<div class="content">
   
 
</div>

<footer>
    &copy; 2025 Beslenme ve Sağlık - Tüm Hakları Saklıdır
</footer>

</body>
</html>
