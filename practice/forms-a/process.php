<?php

$answer = $_POST['answer'];

if ($answer == 'pumpkin') {
    $result = 'Correct!';
} else {
    $result = 'Incorrect!';
}

require 'process-view.php';
