<?php

$pattern = '/^[CAP][0-9]{4}[GHIKLM]$/';
$subject = "P0323A";
if (preg_match($pattern, $subject)) {
    echo "Khớp";
} else {
    echo "Không khớp";
}