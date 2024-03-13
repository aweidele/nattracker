<?php include("config.php"); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Tracker</title>
  </head>
  <body>
    <h1><?php echo "Tracker!"; ?></h1>
    <table>
      <thead>
        <th>Type</th>
        <th>Date / Time</td>
        <th>Water</th>
        <th>Output</th>
        <th>Consistency</th>
        <th>Notes</th>
        <th>ID</th>
      </thead>
      <tbody>
<?php
  $sql = "SELECT * FROM tracker ORDER BY date";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
        <tr>
          <td><?php echo $row["type"]; ?></td>
          <td><?php echo $row["date"]; ?></td>
          <td><?php echo $row["water"]; ?></td>
          <td><?php echo $row["output"]; ?></td>
          <td><?php echo $row["consistency"]; ?></td>
          <td><?php echo $row["notes"]; ?></td>
          <td><?php echo $row["id"]; ?></td>
        </tr>
<?php
    }
  }
?>
      </tbody>
    </table>
  </body>
</html>