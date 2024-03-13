<?php 
  header('Content-Type: application/json; charset=utf-8');
  include("config.php"); 
  $records = [];
  $sql = "SELECT * FROM tracker ORDER BY date, type";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $record = [
        "id"          => $row["id"],
        "date"        => $row["date"],
        "water"       => $row["water"],
        "output"      => $row["output"],
        "consistency" => $row["consistency"],
        "notes"       => $row["notes"],
        "type"        => $row["type"]
      ];
      array_push($records,$record);
    }
  }

  echo JSON_ENCODE($records);
?>