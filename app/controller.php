<?php

require_once '../app/config/Connection.php';

$conn = new Connection();

$notes = $conn->getNotes();

echo "<pre>";
echo print_r($notes);
echo "</pre>";