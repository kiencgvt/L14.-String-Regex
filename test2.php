<?php

$pattern = '/?!(^[a-z]{6,8})$/';
$subject = "aaaaaa";
if (preg_match($pattern, $subject)) {
    echo "Khớp";
} else {
    echo "Không khớp";
}