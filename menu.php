<?php

//Databse connection
$user = 'root';
$password = 'Amnabibi2020@';
$pdo = new PDO('mysql:host=localhost:3306;dbname=hellofresh', $user, $password);

$result = $pdo->query('SELECT * FROM food_menu');
$menu = array();
$menu = $result->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <title>Food Menu</title>
    <style>
        .container {
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
    }
    
    .card {
        width: calc(33.33% - 20px);
        margin: 10px;
        background-color: #f0f0f0;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .card img {
        width: 100%;
        height: 200px; /* Set a fixed height */
        object-fit: cover; /* Maintain aspect ratio */
    }
    
    .card-content {
        padding: 20px;
    }
    
    .card-title {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    
    .card-description {
        font-size: 1rem;
        color: #666;
    }

    /* Responsive styles */
    @media only screen and (max-width: 768px) {
        .card {
            width: calc(50% - 20px);
        }
    }

    @media only screen and (max-width: 480px) {
        .card {
            width: 100%;
        }
    }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="menu.html">Home</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="about Us.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

    <header>
        <h1>Mood for Food</h1>
    </header>
    <div class="container">
        <?php foreach($menu as $item) { ?>
        <div class="card">
            <img src="admin/images/<?php echo $item["image"]?>" alt="Card Image">
            <div class="card-content">
                <h2 class="card-title"><?php echo $item["name"] ?></h2>
                <p class="card-description">Description for Card 1 goes here.</p>
                <p class="price">€ <?php echo $item["price"] ?></p>
            </div>
        </div>
        <?php } ?>
    </div>

</body>
</html>
