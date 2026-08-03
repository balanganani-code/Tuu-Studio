<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "tuustudio"
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
