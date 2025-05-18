<script>
  const code = localStorage.getItem("code_acces");
  const codesAutorises = ["EB001", "EB002", "EB003", "EB004"];
  if (!codesAutorises.includes(code)) {
    window.location.href = "acces.html";
  }
</script>
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
    body { font-family: Arial; padding: 20px; }
    .tab { margin: 10px; padding: 10px; background: #eee; display: inline-block; cursor: pointer; border-radius: 5px; }
    iframe { width: 100%; height: 400px; margin-top: 20px; }
  </style>
  <script>
    function showVideo(id) {
      const videos = document.querySelectorAll('.video');
      videos.forEach(v => v.style.display = 'none');
      document.getElementById(id).style.display = 'block';
    }
  </script>
</head>
<body>
  <h1>Bienvenue dans les formations secrètes</h1>

  <div>
    <div class="tab" onclick="showVideo('ia')">IA</div>
    <div class="tab" onclick="showVideo('muscle')">Muscle</div>
    <div class="tab" onclick="showVideo('poids')">Poids</div>
    <div class="tab" onclick="showVideo('cuisine')">Cuisine</div>
    <div class="tab" onclick="showVideo('homme')">Vrai Homme</div>
    <div class="tab" onclick="showVideo('draguer')">Draguer</div>
  </div>

  <div id="ia" class="video" style="display:none;"><iframe src="https://www.youtube.com/embed/VIDEO_ID1" allowfullscreen></iframe></div>
  <div id="muscle" class="video" style="display:none;"><iframe src="https://www.youtube.com/embed/VIDEO_ID2" allowfullscreen></iframe></div>
  <div id="poids" class="video" style="display:none;"><iframe src="https://www.youtube.com/embed/VIDEO_ID3" allowfullscreen></iframe></div>
  <div id="cuisine" class="video" style="display:none;"><iframe src="https://www.youtube.com/embed/VIDEO_ID4" allowfullscreen></iframe></div>
  <div id="homme" class="video" style="display:none;"><iframe src="https://www.youtube.com/embed/VIDEO_ID5" allowfullscreen></iframe></div>
  <div id="draguer" class="video" style="display:none;"><iframe src="https://www.youtube.com/embed/VIDEO_ID6" allowfullscreen></iframe></div>
</body>
</html>
