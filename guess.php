<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Guessing Game</h1>
        <?php
            // Generate a random number between 1 and 100
            $randomNumber = rand(1, 100);

            // Get the user's guess from the form
            $userGuess = $_POST['guess'];

            // Check if the user's guess matches the random number
            if ($userGuess == $randomNumber) {
                echo '<div class="alert alert-success" role="alert">Congratulations! You guessed the correct number.</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Sorry, your guess was incorrect. The correct number was ' . $randomNumber . '.</div>';
            }
        ?>
        <a href="index.php" class="btn btn-primary">Play Again</a>
    </div>
</body>
</html>
