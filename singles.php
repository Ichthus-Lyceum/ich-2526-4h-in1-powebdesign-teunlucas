<?php

$per_page = 100;
$total_singles = 2000;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($page < 1) {
    $page = 1;
}

$total_pages = ceil($total_singles / $per_page);

$start = (($page - 1) * $per_page) + 1;
$end = min($start + $per_page - 1, $total_singles);

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Teun Kleine & Lucas Reiff">
    <meta name="description" content="Top 2000 Singles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 2000 - Singles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <nav>
        <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="singles.php">Singles</a></li>
            <li><a href="artiesten.php">Artiesten</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<main class="content-grid">

    <section class="results-grid">

        <?php for ($i = $start; $i <= $end; $i++) : ?>

            <?php $artist_number = rand(1, 2000); ?>

                <article class="song-item">

                    <button type="button" onclick="togglePlay(this)">
                        ▶
                    </button>

                    <div>
                        <h2>Single #<?= $i; ?></h2>
                        <p>Artiest #<?= $artist_number; ?></p>

                        <audio class="audio-player" src="aud/bohemianrhapsody.mp3"></audio>
                    </div>

                </article>

        <?php endfor; ?>

    </section>

</main>

<footer>

    <div class="pagination">

        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>

            <a
                class="<?= ($i === $page) ? 'active-page' : ''; ?>"
                href="singles.php?page=<?= $i; ?>">
                <?= $i; ?>
            </a>

        <?php endfor; ?>

    </div>

</footer>

<script>
function togglePlay(button) {

    const item = button.closest(".song-item");
    const audio = item.querySelector(".audio-player");

    // pauze alle andere audio's
    document.querySelectorAll(".audio-player").forEach(a => {
        if (a !== audio) {
            a.pause();
            a.currentTime = 0;
        }
    });

    if (audio.paused) {
        audio.play();
        button.textContent = "⏸";
    } else {
        audio.pause();
        button.textContent = "▶";
    }
}
</script>

</body>
</html>