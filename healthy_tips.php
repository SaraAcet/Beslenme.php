<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sağlıklı Beslenme</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f0f8ff, #e6ffee); /* Yumuşak bir gradient */
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
            font-size: 32px;
        }
        main {
            max-width: 1200px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .card {
            background: #fffbea;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            height: 400px; /* Kartların yüksekliği uzun olacak şekilde ayarlandı */
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .card img {
            width: 100%;
            height: 200px; /* Resimlerin boyutu sabitlendi */
            object-fit: cover;
        }
        .card h3 {
            margin: 15px 10px 10px;
            color: #2e8b57;
            font-size: 18px;
        }
        .card p {
            margin: 10px 20px;
            color: #555;
            font-size: 14px;
            flex-grow: 1; /* Açıklama alanı esnek olacak */
        }
        .card a {
            display: inline-block;
            margin: 15px auto;
            padding: 10px 20px;
            background-color: #2e8b57;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .card a:hover {
            background-color: #3cb371;
        }
    </style>
</head>
<body>

<header>
    <h1>Sağlıklı Beslenme</h1>
</header>

<main>
    <!-- Kartlar -->
    <div class="card">
        <img src="su.webp" alt="Su Tüketimi">
        <h3>Günde Ne Kadar Su İçmelisiniz?</h3>
        <p>Su tüketimi sağlığımızın temel taşlarından biridir. Günlük su ihtiyacınızı belirlemek ve sağlıklı su tüketim alışkanlıklarını öğrenmek için detaylı bilgileri keşfedin.</p>
        <a href="water_tips.php">Devamını Oku</a>
    </div>
    <div class="card">
        <img src="tuz.avif" alt="Tuz Kullanımı">
        <h3>Hayatınızda Tuzu Azaltmanın Yolları</h3>
        <p>Tuz tüketimi sağlığımız üzerinde doğrudan etkilidir. Tuzu azaltarak hipertansiyon ve kalp hastalıkları riskini nasıl düşürebileceğinizi öğrenin.</p>
        <a href="salt_tips.php">Devamını Oku</a>
    </div>
    <div class="card">
        <img src="trend.jpg" alt="Sağlık Trendleri">
        <h3>9 Yeni Sağlık Trendi</h3>
        <p>Sağlıklı yaşam dünyasında öne çıkan yeni trendleri keşfedin. Sağlıklı diyetler, sürdürülebilir beslenme ve daha fazlası hakkında bilgi alın.</p>
        <a href="health_trends.php">Devamını Oku</a>
    </div>
    <div class="card">
        <img src="ideal.webp" alt="Diyet">
        <h3>İdeal Diyetin 10 Yolu</h3>
        <p>Kişiye özel diyet planları oluşturmanın temel prensiplerini öğrenin. Sağlıklı ve dengeli bir diyetin nasıl planlanacağını keşfedin.</p>
        <a href="diet_tips.php">Devamını Oku</a>
    </div>
    <div class="card">
        <img src="mut.avif" alt="Mutluluk Veren Besinler">
        <h3>Mutluluk Veren 8 Besin</h3>
        <p>Günlük hayatınızda mutluluğunuzu artırabilecek besinler hakkında bilgi alın. Serotonin seviyesini artıran mucizevi gıdaları keşfedin.</p>
        <a href="happiness_foods.php">Devamını Oku</a>
    </div>
    <div class="card">
        <img src="kahve.avif" alt="Odaklanma">
        <h3>Odaklanma Kapasitesini Artıracak Beslenme Önerileri</h3>
        <p>Günlük yaşamda konsantrasyonunuzu artırmak için beslenme önerileri. Daha üretken ve enerjik bir hayat için sağlıklı beslenme ipuçlarını keşfedin.</p>
        <a href="focus_tips.php">Devamını Oku</a>
    </div>
    <div class="card">
        <img src="bagıs.avif" alt="Bağışıklık Güçlendirme">
        <h3>Bağışıklık Sistemini Güçlendiren Besinler</h3>
        <p>Bağışıklık sisteminizi güçlendiren mucize besinler. Sağlıklı bir yaşam için bağışıklık desteği sağlayan öneriler burada!</p>
        <a href="immune_boost.php">Devamını Oku</a>
    </div>
    <div class="card">
        <img src="kanser.webp" alt="Kanser Riskini Azaltma">
        <h3>Kanser Riskini Azaltan 7 Beslenme Önerisi</h3>
        <p>Kanser riskini azaltmak için sağlıklı beslenmenin gücünü keşfedin. Antioxidan içeren gıdaların faydaları burada!</p>
        <a href="cancer_prevention.php">Devamını Oku</a>
    </div>
    <div class="card">
        <img src="c.webp" alt="C VİTAMİNİ">
        <h3>C vitamini hakkında bilmeniz gereken 9 bilgi</h3>
        <p>Kanser riskini azaltmak için sağlıklı beslenmenin gücünü keşfedin. Antioxidan içeren gıdaların faydaları burada!</p>
        <a href="cancer_prevention.php">Devamını Oku</a>
    </div>
</main>

</body>
</html>
