<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hakkımızda</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #e6ffee, #f0f8ff); /* Yumuşak bir gradient */
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
            justify-content: center;
            gap: 20px;
        }
        .team-member {
            text-align: center;
            flex: 1;
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
            margin: 0;
            font-size: 14px;
            color: #555;
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
    <h1>Hakkımızda</h1>
</header>

<main>
    <section>
        <h2>Biz Kimiz?</h2>
        <p>
            Sağlıklı yaşam ve beslenme konularında rehberlik eden, bireylerin daha sağlıklı bir yaşam sürdürmesine yardımcı olmayı amaçlayan bir ekibiz.
            Misyonumuz, dengeli ve sürdürülebilir beslenme alışkanlıklarını teşvik ederek herkesin daha iyi bir yaşam kalitesine ulaşmasını sağlamaktır.
        </p>
    </section>

    <section>
        <h2>Ekibimiz</h2>
        <div class="team">
            <!-- Birinci Ekip Üyesi -->
            <div class="team-member">
                <img src="senaa.jpg" alt="Ekip Üyesi 1">
                <h3>SENA BABUÇ</h3>
                <p>Beslenme Uzmanı</p>
            </div>
            <!-- İkinci Ekip Üyesi -->
            <div class="team-member">
                <img src="helin.jpg" alt="Ekip Üyesi 2">
                <h3>HELİN BORA</h3>
                <p>Sağlık Danışmanı</p>
            </div>
            <!-- Üçüncü Ekip Üyesi -->
            <div class="team-member">
                <img src="ayse.jpg" alt="Ekip Üyesi 3">
                <h3>AYŞEGÜL FISTIK</h3>
                <p>Yazar ve Editör</p>
            </div>
        </div>
    </section>

    <section>
        <h2>Misyonumuz</h2>
        <p>
            Sağlıklı yaşam hakkında doğru bilgiye erişimi kolaylaştırmak ve insanlara dengeli beslenme alışkanlıkları kazandırmak için buradayız.
            Uygulamalarımız, hesaplama araçlarımız ve uzman içeriklerimizle kullanıcılarımıza en iyi hizmeti sunmayı hedefliyoruz.
        </p>
    </section>

    <section>
        <h2>Vizyonumuz</h2>
        <p>
            İnsanların hayatlarına pozitif bir etki yaparak, dünya çapında sağlıklı yaşam ve beslenme bilincinin artırılmasına öncülük etmek.
            Sağlıklı yaşam konusundaki yenilikçi yaklaşımımızla kullanıcılarımıza en iyi deneyimi sunmayı amaçlıyoruz.
        </p>
    </section>
</main>

<footer>
    &copy; 2025 Beslenme ve Sağlık
</footer>

</body>
</html>
