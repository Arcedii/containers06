<?php
// Функция для отображения содержимого страницы
function displayPage($page) {
    switch ($page) {
        case 'about':
            echo "<h2>О нас</h2>";
            echo "<p>Мы - крутая компания, которая делает крутые вещи!</p>";
            break;
        case 'contact':
            echo "<h2>Контакты</h2>";
            echo "<p>Наш email: example@example.com</p>";
            break;
        default:
            echo "<h2>Главная</h2>";
            echo "<p>Добро пожаловать на наш сайт!</p>";
            break;
    }
}

// Определение страницы
$page = isset($_GET['page']) ? $_GET['page'] : '';

// HTML-разметка
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой одностраничный сайт</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header, nav, main, footer {
            margin: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        article {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Мой одностраничный сайт</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="?page=home">Главная</a></li>
            <li><a href="?page=about">О нас</a></li>
            <li><a href="?page=contact">Контакты</a></li>
        </ul>
    </nav>
    
    <main>
        <section>
            <?php displayPage($page); ?>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Мой сайт</p>
    </footer>
</body>
</html>
