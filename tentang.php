<?php

include 'auth/config.php';

// Vision
$vision = "To introduce Indonesian traditional food to the world.";

// Mission
$missions = [
    "Provide authentic Indonesian food",
    "Give the best customer service",
    "Support local culinary culture"
];

// Team
$team = [
    [
        "name" => "Muhammad Rizqi Pratama",
        "role" => "Web Developer"
    ],
    [
        "name" => "Andi Saputra",
        "role" => "UI Designer"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Warung Nusantara</title>

    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
    <nav>
        <button>
            <a href="Transaction/layanan.php">Layanan</a>
        </button>

        <button>
            <a href="Transaction/hubungi.php">Hubungi</a>
        </button>

        <button>
            <a href="Transaction/order.php">Order</a>
        </button>
    </nav>
</header>

<section class="about">
    <h2>About Us</h2>

    <p>
        Warung Nusantara is a website that provides information
        about Indonesian traditional food and online food services.
    </p>
</section>

<section class="vision">
    <h2>Our Vision</h2>

    <p><?php echo $vision; ?></p>
</section>

<section class="mission">
    <h2>Our Mission</h2>

    <ul>
        <?php foreach($missions as $mission): ?>
            <li><?php echo $mission; ?></li>
        <?php endforeach; ?>
    </ul>
</section>

<section class="team">
    <h2>Our Team</h2>

    <div class="team-container">

        <?php foreach($team as $member): ?>
            <div class="card">
                <h3><?php echo $member['name']; ?></h3>
                <p><?php echo $member['role']; ?></p>
            </div>
        <?php endforeach; ?>

    </div>
</section>

<footer>
    <p>&copy; 2026 Warung Nusantara</p>
</footer>

</body>
</html>