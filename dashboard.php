<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Zeitung</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Online Zeitung</h1>
        <input type="text" id="search" placeholder="Suche nach Artikeln...">
    </header>
    <main>
        <section id="articles">
            <?php
                $articles = [
                    ["title" => "Politik heute", "content" => "Neueste Entwicklungen in der Politik...", "category" => "Politik"],
                    ["title" => "Sport Highlights", "content" => "Die spannendsten Momente des Spiels...", "category" => "Sport"],
                    ["title" => "Wirtschaft im Wandel", "content" => "Wie sich die Märkte verändern...", "category" => "Wirtschaft"]
                ];

                foreach ($articles as $article) {
                    echo "<article class='card'>";
                    echo "<h2>{$article['title']}</h2>";
                    echo "<p>{$article['content']}</p>";
                    echo "<span class='category'>{$article['category']}</span>";
                    echo "<button>Weiterlesen</button>";
                    echo "</article>";
                }
            ?>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
