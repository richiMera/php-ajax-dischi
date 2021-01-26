<?php
  include __DIR__ . "/db.php";
  header("Content-type: application/json");

  $filterDb = [];
  $genre = strtolower($_GET["genre"]);
  if(empty($genre)) {
    $filterDb = $discs;
  } else {
    foreach ($discs as $disc ) {
      if(strtolower($disc["genre"]) == $genre) {
        $filterDb[] = $disc;
      }
    }
  }

  echo json_encode($filterDb);
 ?>
