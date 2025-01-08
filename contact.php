<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f0f8ff, #e6ffee);
            color: #333;
        }
        header {
            background-color: #2e8b57;
            color: white;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        section {
            margin-bottom: 40px;
        }
        section h2 {
            color: #2e8b57;
            margin-bottom: 20px;
            text-align: center;
        }
        /* Ekibimiz kısmı */
        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .team-member {
            text-align: center;
            flex: 1 1 300px;
            max-width: 300px;
        }
        .team-member img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .team-member h3 {
            margin: 15px 0 5px;
            font-size: 18px;
            color: #2e8b57;
        }
        .team-member p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
        .contact-info {
            margin-top: 40px;
            text-align: center;
        }
        .contact-info p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.6;
        }
        footer {
            background-color: #2e8b57;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>İletişim</h1>
</header>

<main>
    <section>
        <h2>Ekibimiz</h2>
        <div class="team">
            <!-- Birinci Ekip Üyesi -->
            <div class="team-member">
                <img src="senaa.jpg" alt="Ekip Üyesi 1">
                <h3>SENA BABUÇ</h3>
                <p>Beslenme Uzmanı</p>
                <p>Email: sena.babuc@example.com</p>
                <p>Telefon: +90 555 123 45 67</p>
            </div>
            <!-- İkinci Ekip Üyesi -->
            <div class="team-member">
                <img src="helin.jpg" alt="Ekip Üyesi 2">
                <h3>HELİN BORA</h3>
                <p>Sağlık Danışmanı</p>
                <p>Email: helin.bora@example.com</p>
                <p>Telefon: +90 555 987 65 43</p>
            </div>
            <!-- Üçüncü Ekip Üyesi -->
            <div class="team-member">
                <img src="ayse.jpg" alt="Ekip Üyesi 3">
                <h3>AYŞEGÜL FISTIK</h3>
                <p>Yazar ve Editör</p>
                <p>Email: aysegul.fistik@example.com</p>
                <p>Telefon: +90 555 543 21 09</p>
            </div>
        </div>
    </section>

    <section class="contact-info">
        <h2>Genel İletişim</h2>
        <p>Email: info@example.com</p>
        <p>Telefon: +90 312 123 45 67</p>
        <p>Adres: Sağlık Mahallesi, Beslenme Sokak, No:10, Ankara, Türkiye</p>
    </section>
</main>

<footer>
    &copy; 2025 Beslenme ve Sağlık
</footer>

</body>
</html>
