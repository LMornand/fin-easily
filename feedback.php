<?php
if (isset($_POST['score'])) {
    $score = $_POST['score'];
    $feedbackFile = 'feedback_data.txt';
    file_put_contents($feedbackFile, $score . PHP_EOL, FILE_APPEND);
    http_response_code(200);
    echo 'Feedback received and stored successfully';
} else {
    http_response_code(400);
    echo 'Error: Feedback score is missing';
}
?>
