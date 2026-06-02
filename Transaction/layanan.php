
<?php
$layanan = [
    [
        "nama" => "Delivery",
        "gambar" => "assets/img/delivery.jpg",
        "deskripsi" => "Kami menyediakan layanan antar makanan langsung ke rumah anda."
    ],

    [
        "nama" => "Catering",
        "gambar" => "assets/img/catering.jpg",
        "deskripsi" => "Melayani catering acara ulang tahun, sekolah, dan keluarga."
    ],

    [
        "nama" => "Reservasi",
        "gambar" => "assets/img/reservasi.jpg",
        "deskripsi" => "Reservasi tempat makan untuk acara keluarga dan teman."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

<header>

    <div class="container">
        <img src="../assets/img/Logo-warung3.png"
             class="logo"
             alt="Logo Warung"
             width="90px">
             
    </div>

    <nav>
        <a href="../tentang.php">tentang</a>
        <a href="../order.php">Order</a>
       
    </nav>

</header>

<h1 class="judul-layanan">
    Layanan Warung Nusantara
</h1>

<section class="layanan-container">

<?php foreach($layanan as $item) : ?>

    <div class="layanan-card">

        <h2>
            <?php echo $item['nama']; ?>
        </h2>

        <img src="<?php echo $item['gambar']; ?>"
             class="img"
             alt="<?php echo $item['nama']; ?>">

        <p>
            <?php echo $item['deskripsi']; ?>
        </p>

        <button class="btn">
            Pilih Layanan
        </button>

    </div>

<?php endforeach; ?>

</section>

<footer>
    <p>
        &copy; 2025 Warung Nusantara
    </p>
</footer>

</body>
</html>
