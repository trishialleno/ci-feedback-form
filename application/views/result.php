<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Submitted Submission, PHP in Village 88">
        <title>Submitted Feedback Result</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    </head>
    <body>
        <div class="container">
            <h1>Feedback Result</h1>
            <h3>Details:</h3>
            <p><span>Name:</span> <?= $name ?></p>
            <p><span>Course:</span> <?= $course_title ?></p>
            <p><span>Score:</span> <?= $score ?></p>
            <p><span>Reason:</span> <?= $reason ?></p>
        </div>
    </body>
</html>