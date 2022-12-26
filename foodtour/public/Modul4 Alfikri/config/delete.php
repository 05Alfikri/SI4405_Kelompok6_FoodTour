<?php
require 'db.php';

$id = $_GET['id_mobil'];

function delete()
{
  global $id;
  global $db;

  $findFile = mysqli_query($db, "SELECT foto_mobil FROM showroom_alfikri_table WHERE id_mobil = $id");
  $photoFile = mysqli_fetch_row($findFile)[0];

  $deleteRow = "DELETE FROM showroom_alfikri_table WHERE id_mobil = $id";

  mysqli_query($db, $deleteRow);
  unlink('../assets/images/uploaded/' . $photoFile);
  return mysqli_affected_rows($db);
}

if (delete($id)) {
  header("Location: ../pages/ListCar-alfikri.php");
  exit;
}