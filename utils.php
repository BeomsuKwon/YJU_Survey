<?php

function logger($str) {
    echo "<script>console.dir('$str');</script>";
}

function alert($str) {
    echo "<script>alert('$str');</script>";
}