<?php
include '../auth/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>

    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <div class="container">
        <img src="../assets/img/Logo-warung3.png"
             class="logo"
             alt="Logo Warung"
             width="90px">
    </div>

    <header>
        <nav>
            <button>
                <a href="../tentang.php">Tentang</a>
            </button>

            <button>
                <a href="../order.php">Order</a>
            </button>

        </nav>
    </header>

    <section class="hubungi">

        <h1>Hubungi Kami</h1>

        <p>
            Silakan hubungi kami jika ada pertanyaan,
            kritik, saran, atau pemesanan makanan.
        </p>

        <div class="kontak">
            <h2>Informasi Kontak</h2>

            <p>📞 WhatsApp : +62 881-0232-57130</p>
            <p>📧 Email : warungnusantara@gmail.com</p>
            <p>📍 Alamat : Jl. Muara Desa. Kopo Kec. Kutawaringin KAB. Bandung</p>
            <p>🕒 Jam buka : 08.00 - 22.00</p>
        </div>

        <div class="form-pesan">

            <h2>Kirim Pesan</h2>

            <form>

                <input type="text"
                       placeholder="Masukkan Nama"
                       required>

                <br><br>

                <input type="email"
                       placeholder="Masukkan Email"
                       required>

                <br><br>

                <textarea
                    placeholder="Tulis pesan anda..."
                    rows="6"
                    cols="40"
                    required>
                </textarea>

                <br><br>

                <button type="submit">
                    Kirim Pesan
                </button>

            </form>
        </div>

    </section>

    <footer>
        <p>
            &copy; 2025 Warung Nusantara
        </p>
    </footer>

</body>
</html>
