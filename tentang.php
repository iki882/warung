<?php
$services = [
    [
        "title" => "Food Ordering",
        "description" => "Customers can order traditional Indonesian food online."
    ],
    [
        "title" => "Delivery Service",
        "description" => "Food can be delivered directly to the customer location."
    ],
    [
        "title" => "Reservation",
        "description" => "Customers can reserve tables before visiting the restaurant."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Nusantara Services</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Warung Nusantara Services</h1>
    <p>Traditional Indonesian Food Website</p>
</header>

<div class="container">

    <?php foreach($services as $service): ?>
        <div class="card">
            <h2><?php echo $service['title']; ?></h2>
            <p><?php echo $service['description']; ?></p>
        </div>
    <?php endforeach; ?>

</div>

<footer>
    <p>&copy; 2026 Warung Nusantara</p>
</footer>

</body>
</html>