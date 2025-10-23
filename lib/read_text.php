<?php
function readTextFile($filename) {
    if (!file_exists($filename)) {
        return false;
    }
    return file_get_contents($filename);
}
?>
