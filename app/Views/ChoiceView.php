<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R-P_S</title>
</head>
<body>

<h1>Rock-Paper-Scissors</h1>

<div class="container">
    <h4>Pick one:</h4>
    <form action="/index.php" method="post">
        <label class="playerChoice">
            <input type="radio" name="playerChoice" value="rock"><img src="app/Views/images/rock.png" alt="Hand-rock">
        </label>
        <label class="playerChoice">
            <input type="radio" name="playerChoice" value="paper"><img src="app/Views/images/paper.png" alt="Hand-paper">
        </label>
        <label class="playerChoice">
            <input type="radio" name="playerChoice" value="scissors"><img src="app/Views/images/scissors.png" alt="Hand-Scissors">
        </label>
        <br><br>
        <input type="submit" value="Play">
        <br>
    </form>
</div>
</body>
</html>



