<?php
function readJsonFile($filename, $assoc = true) {
    if (!file_exists($filename)) {
        return false;
    }

    $jsonContent = file_get_contents($filename);
    return json_decode($jsonContent, $assoc);
}
?>





