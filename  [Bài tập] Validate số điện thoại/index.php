<?php

$pattern = '/^\(\d{2}\)-\(0\d{9}\)$/';
$subject = "(a8)-(22222222)";
if (preg_match($pattern, $subject)) {
    echo "Khớp";
} else {
    echo "Không khớp";
}