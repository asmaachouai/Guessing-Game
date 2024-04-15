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
        <p>Guess a number between 1 and 100:</p>
        <form action="guess.php" method="post">
            <input type="number" name="guess" class="form-control" min="1" max="100" required>
            <br>
            <button type="submit" class="btn btn-primary">Submit Guess</button>
        </form>
    </div>
</body>
</html>
