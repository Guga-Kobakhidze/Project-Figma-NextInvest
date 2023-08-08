<?php include "functions.php" ?>
<?php include "./assets/variables.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Invest</title>
    <link rel="stylesheet" href="./assets/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <script src="./assets/script.js" defer></script>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header_section">
                <div>
                    <a href="./index.php" class="Logo">NEW INVEST</a>
                </div>
                <div class="menu_content">
                    <ul class="navigation">
                        <?php get_header_menu(); ?>
                    </ul>
                    <div class="login_buttons">
                        <button class="btn btn2" type="submit">Login</button>
                        <button class="btn btn2" type="submit">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </header>