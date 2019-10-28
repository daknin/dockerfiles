<?php
  $db_host = $_SERVER['DATABASE_HOST'];
  $db_port = $_SERVER['DATABASE_PORT'];
  $db_name = $_SERVER['DATABASE_NAME'];
  $db_user = $_SERVER['DATABASE_USER'];
  $db_pass = $_SERVER['DATABASE_PASS'];

  try {
    $dsn = "pgsql:host=".$db_host.";port=".$db_port.";dbname=".$db_name;
    $dbh = new PDO($dsn, $db_user, $db_pass);
  } catch (PDOException $e) {
    echo "Error! ".$e->getMessage()."<br>";
    die();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>ACARS</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">ACARS</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/stations.php">Stations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/airframes.php">Airframes</a>
        </li>
      </ul>
    </nav>

    <div id="page">