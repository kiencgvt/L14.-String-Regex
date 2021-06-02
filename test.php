<?php

$pattern = '/^0\d{9}$/';
$subject = "0123456789";
if (preg_match($pattern, $subject)) {
    echo "Khớp";
} else {
    echo "Không khớp";
}