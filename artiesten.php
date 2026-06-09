<?php

$per_page = 100;
$total_artists = 2000;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($page < 1) {
    $page = 1;
}

$total_pages = ceil($total_artists / $per_page);

$start = (($page - 1) * $per_page) + 1;
$end = min($start + $per_page - 1, $total_artists);

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Teun Kleine & Lucas Reiff">
    <meta name="description" content="Top 2000 Artiesten">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 2000 - Artiesten</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="singles.php">Singles</a></li>
            <li><a class="active" href="artiesten.php">Artiesten</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<main class="content-grid">

    <section class="artist-grid">

        <?php for ($i = $start; $i <= $end; $i++) : ?>

            <article class="artist-card">

                <img
                    src="img/artistimage.webp"
                    alt="Artiest <?= $i; ?>">

                <h2>Artiest #<?= $i; ?></h2>

                <p>
                    Deze artiest was in "..." geboren, en heeft "..." singles!
                </p>

            </article>

        <?php endfor; ?>

    </section>

</main>

<footer>

    <div class="pagination">

        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>

            <a
                class="<?= ($i === $page) ? 'active-page' : ''; ?>"
                href="artiesten.php?page=<?= $i; ?>">
                <?= $i; ?>
            </a>

        <?php endfor; ?>

    </div>

</footer>

</body>
</html>