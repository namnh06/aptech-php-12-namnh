<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $project = $_GET["project"];
    if ($name === "NAM" && $project = "News Website") {
        echo "OK";
    } else {
        echo "NO";
    }
}
?>