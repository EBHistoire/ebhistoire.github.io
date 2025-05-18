<?php
session_start();
if (!isset($_SESSION['code_acces'])) {
    header("Location: acces.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formations Secrètes</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      text-align: center;
    }
    h1 {
      font-size: 24px;
      margin-bottom: 30px;
    }
    .tabs {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }
    .tab {
      background-color: #3498db;
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
    }
    .tab:hover {
      background-color: #2980b9;
    }
    .video {
      display: none;
      max-width: 100%;
    }
    iframe {
      width: 100%;
      height: 400px;
      border: none;
      border-radius: 10px;
    }

    @media (orientation: landscape) {
      iframe {
        height: 500px;
      }
    }

    input[type="search"] {
      width: 60%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
  </style>

  <script>
    function showVideo(id) {
      document.querySelectorAll('.video').forEach(v => v.style.display = 'none');
      document.getElementById(id).style.display = 'block';
    }

    function rechercher() {
      const recherche = document.getElementById("search").value.toLowerCase();
      document.querySelectorAll('.tab').forEach(tab => {
        const texte = tab.textContent.toLowerCase();
        tab.style.display = texte.includes(recherche) ? "inline-block" : "none";
      });
    }
  </script>
</head>
<body>

  <h1>Bienvenue dans les Formations Secrètes</h1>

  <input type="search" id="search" placeholder="Rechercher une formation..." oninput="rechercher()">

  <div class="tabs">
    <div class="tab" onclick="showVideo('ia')">IA</div>
    <div class="tab" onclick="showVideo('muscle')">Muscle</div>
    <div class="tab" onclick="showVideo('poids')">Poids</div>
    <div class="tab" onclick="showVideo('cuisine')">Cuisine</div>
    <div class="tab" onclick="showVideo('homme')">Vrai Homme</div>
    <div class="tab" onclick="showVideo('draguer')">Draguer</div>
  </div>

  <div id="ia" class="video"><iframe src="https://www.youtube.com/embed/VIDEO_ID1" allowfullscreen></iframe></div>
  <div id="muscle" class="video"><iframe src="https://www.youtube.com/embed/VIDEO_ID2" allowfullscreen></iframe></div>
  <div id="poids" class="video"><iframe src="https://www.youtube.com/embed/VIDEO_ID3" allowfullscreen></iframe></div>
  <div id="cuisine" class="video"><iframe src="https://www.youtube.com/embed/VIDEO_ID4" allowfullscreen></iframe></div>
  <div id="homme" class="video"><iframe src="https://www.youtube.com/embed/VIDEO_ID5" allowfullscreen></iframe></div>
  <div id="draguer" class="video"><iframe src="https://www.youtube.com/embed/VIDEO_ID6" allowfullscreen></iframe></div>

</body>
</html>
