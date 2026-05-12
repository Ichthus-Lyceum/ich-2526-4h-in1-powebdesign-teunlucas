
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Music Hub</title>
<style>
  body {
    margin: 0;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    background-color: #121212;
    color: #fff;
  }

  header {
    background-color: #1f1f1f;
    padding: 20px;
    text-align: center;
  }

  header h1 {
    margin: 0;
    font-size: 2.5em;
    letter-spacing: 2px;
  }

  nav {
    margin-top: 15px;
  }

  nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 15px;
    font-weight: 600;
  }

  nav a:hover {
    color: #1db954;
  }

  .hero {
    background: linear-gradient(135deg, #1f1f1f, #333);
    padding: 50px 20px;
    text-align: center;
  }

  .hero h2 {
    font-size: 2em;
    margin-bottom: 20px;
  }

  .search-box {
    margin-top: 20px;
  }

  .search-box input {
    padding: 10px 20px;
    font-size: 1em;
    border: none;
    border-radius: 25px;
    width: 300px;
    max-width: 80%;
  }

  .sections {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 40px 20px;
  }

  .section {
    background-color: #1f1f1f;
    margin: 15px;
    padding: 20px;
    border-radius: 15px;
    width: 300px;
  }

  .section h3 {
    margin-top: 0;
    margin-bottom: 15px;
  }

  .cards {
    display: flex;
    flex-direction: column;
  }

  .card {
    background-color: #2c2c2c;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 10px;
  }

  footer {
    background-color: #1f1f1f;
    text-align: center;
    padding: 20px;
    margin-top: 40px;
  }

  @media(max-width: 768px){
    .sections {
      flex-direction: column;
      align-items: center;
    }
    .section {
      width: 90%;
    }
  }
</style>
</head>
<body>

<header>
  <h1>Music Hub</h1>
  <nav>
    <a href="#">Home</a>
    <a href="#">Discover</a>
    <a href="#">Genres</a>
    <a href="#">Top Charts</a>
    <a href="#">About</a>
  </nav>
</header>

<section class="hero">
  <h2>Feel the Rhythm, Live the Music</h2>
  <div class="search-box">
    <input type="text" placeholder="Search for artists, songs, albums..." />
  </div>
</section>

<div class="sections">
  <div class="section">
    <h3>Featured Playlists</h3>
    <div class="cards">
      <div class="card">Chill Vibes</div>
      <div class="card">Top Hits 2024</div>
      <div class="card">Workout Mix</div>
    </div>
  </div>
  <div class="section">
    <h3>New Releases</h3>
    <div class="cards">
      <div class="card">Artist A - Album X</div>
      <div class="card">Artist B - Album Y</div>
      <div class="card">Artist C - Album Z</div>
    </div>
  </div>
  <div class="section">
    <h3>Genres</h3>
    <div class="cards">
      <div class="card">Pop</div>
      <div class="card">Rock</div>
      <div class="card">Hip-Hop</div>
    </div>
  </div>
</div>

<footer>
  <p>&copy; 2024 Music Hub. All rights reserved.</p>
</footer>

</body>
</html>