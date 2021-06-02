<?php

$pattern = '/^[_a-z0-9]{6,}$/';
$subject = "abcde";
if (preg_match($pattern, $subject)) {
    echo "Khớp";
} else {
    echo "Không khớp";
}