<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>

    <link rel="stylesheet" href="../assets/style.css">
</head>

<body class="page1 post">

    <h2 class="h2">Pesanan Pembelian</h2>

    <button>
        <p id="menu"></p>
    </button>

    <button>
        <p id="harga"></p>
    </button>

    <div class="konfirmasi">
        <button type="button" onclick="konfirmasi()">
            Konfirmasi
        </button>

        <button type="button" onclick="hapus()">
            Hapus
        </button>
    </div>

<script>

    const urlParams = new URLSearchParams(window.location.search);

    document.getElementById("menu").innerText =
        "Menu: " + urlParams.get("menu");

    document.getElementById("harga").innerText =
        "Harga: Rp " + urlParams.get("harga");

    function konfirmasi() {
        alert("Pesanan berhasil dikonfirmasi");
    }

    function hapus() {
        alert("Pesanan dihapus");
    }

</script>

</body>
</html>