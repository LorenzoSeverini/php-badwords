<!-- print the result of the form  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print php form</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: darkgrey;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        p {
            margin: 1rem 0;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 50%;
            border: 1px solid black;
            border-radius: 5px;
            padding: 1rem;
            background-color: darkgreen;
        }

        .card p {
            color: black;
            font-size: 2rem;
        }
    </style>

</head>

<body>
    <!-- main -->
    <main>
        <div class="card">
            <!-- print the result of the form  -->
            <?php

            // get paragraph and word from the form
            $paragraph = $_GET["paragraph"];
            $word = $_GET["word"];

            // print paragraph and length
            echo "<p>Paragraph: " . $paragraph . "</p>";
            echo "<p>Length: " . strlen($paragraph) . "</p>";

            // print paragraph with the word censored and length
            echo "<p>Paragraph: " . str_replace($word, "****", $paragraph) . "</p>";
            echo "<p>Length: " . strlen(str_replace($word, "****", $paragraph)) . "</p>";

            ?>
        </div>
    </main>

</body>

</html>