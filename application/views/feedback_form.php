<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Feedback Form, CODEIGNITER in Village 88">
        <title>Feedback Form</title>
        <link rel="stylesheet" href="/assets/css/style.css">
    </head>
    <body>
        <div class="container">
<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
            <h1>Feedback Form</h1>
            <form action="/feedback/submit_feedback" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="course">Course:</label>
                <select id="course_title" name="course_title" >
                    <option value="PHP track">PHP track</option>
                    <option value="JS track">JS track</option>
                    <option value="Web fundamentals track">Web fundamentals track</option>
                </select>
                <label for="score">Given Score:</label>
                <select id="score" name="score" >
                    <?php for ($i = 1; $i <= 10; $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
                
                <label for="reason">Reason:</label>
                <textarea id="reason" name="reason" ></textarea>
                
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>