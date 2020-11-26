<?php include ("head.php"); ?>
<body>

  <header>
    <h1>suivi-carbu</h1>
    <h2>ajout d'un plein</h2>
  </header>

  <main class="formulaire">
    <form action="ajout--traitement.php" method="post">
      
      <label for="prix-au-litre">Prix payé <br> (au litre)</label>
      <input type="text" name="prix-au-litre" id="prix-au-litre" step="0.001" required>

      <label  for="volume-plein">Volume total du plein <br> (en litres)</label>
      <input type="text" name="volume-plein" id="volume-plein" step="0.01" required>

      <label  for="kilometres-parcourus">Kilomètres parcourus <br> (depuis le dernier plein)</label>
      <input type="text" name="kilometres-parcourus" id="kilometres-parcourus" step="0.01" required>

      <button>ajouter</button>

    </form>
  </main>
  
</body>
</html>