
<?php
// calculate.php

header('Content-Type: application/json');

// Read input JSON from POST body
$input = json_decode(file_get_contents('php://input'), true);
$grades = isset($input['grades']) ? $input['grades'] : [];

// Function to map score to grade
function getGrade($score) {
    if ($score >= 95) return "A+";
    if ($score >= 90) return "A";
    if ($score >= 85) return "B+";
    if ($score >= 80) return "B";
    if ($score >= 75) return "C+";
    if ($score >= 70) return "C";
    if ($score >= 65) return "D+";
    if ($score >= 60) return "D";
    return "F";
}

$result = [];

foreach ($grades as $score) {
    $grade = getGrade($score);
    if (!isset($result[$grade])) {
        $result[$grade] = 0;
    }
    $result[$grade]++;
}

echo json_encode($result);
?>
