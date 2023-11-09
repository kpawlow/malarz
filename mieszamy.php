<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Untitled-1</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styl_1.css">
  </head>

  <body>
    <?php
    require_once 'polaczenie.php';
    ?>
    <div id="baner">To jest baner</div>
    <div id="lewy">To jest lewy</div>
    <div id="srodek">
      <?php
      $sql = "SELECT * FROM `farby`;";
      $result = mysqli_query($kutno, $sql);
      if (!$result){
        die("Błędne zapytanie" . mysqli_error($kutno));
      }
if ($result->num_rows > 0){
  echo "<table>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "nr farby: " . $row["id_farby"]; 
    echo "kolor: " . $row["kolor"]; 
  }
  echo "</table>";
} else {
  echo "Brak wyników";
}
      ?>
    </div>
    <div id="prawy"><img src="./obraz.png" alt=""></div>
    <div id="stopka"><h3>MALARZ</h3>
      <p>Stronę opracował: Krzysztof Pawłwoski</p>
    </div>
  </body>
</html>