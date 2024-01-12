<?php

// read json
$database = file_get_contents(__DIR__ . '/albums.json');

// decode to php
$albums = json_decode($database);

// overlay
if (isset($_GET['albumTitle'])) {
  $albumTitle = $_GET['albumTitle'];
  foreach ($albums as $album) {
      if ($album->title === $albumTitle) {
          echo json_encode($album);
          die;
      }
  }
}

// encode to json
header('Content-Type: application/json');
echo json_encode($albums);