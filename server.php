<?php

// read json
$database = file_get_contents(__DIR__ . '/albums.json');

// decode to php
$albums = json_decode($database);

// encode to json
header('Content-Type: application/json');
echo json_encode($albums);