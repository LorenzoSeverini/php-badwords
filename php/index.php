<!-- PHP ez 1  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- css -->
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
        }

        header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-color: red;
        }

        h1 {
            color: black;
            font-size: 4rem;
            padding: 1rem;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: calc(100vh - 85px - 53px);
            background-color: grey;
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

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        input {
            margin: 1rem 0;
            padding: 0.5rem;
            width: 50%;
            border: 1px solid black;
            border-radius: 5px;
        }

        button {
            margin: 1rem 0;
            padding: 0.5rem;
            border: 1px solid black;
            border-radius: 5px;
            background-color: red;
            color: white;
            font-weight: bold;
        }

        button:hover {
            cursor: pointer;
        }

        a {
            color: red;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-color: red;
        }
    </style>

</head>

<body>

    <header>
        <!-- welcome to php -->
        <h1>Welcome To PHP!🦆</h1>
    </header>

    <main>
        <div class="card">
            <!-- form to get the paragraph and the word -->
            <form action="print.php" method="get">
                <label for="paragraph">Paragraph</label>
                <input type="text" name="paragraph" id="paragraph" placeholder="Insert a paragraph">
                <label for="word">Word</label>
                <input type="text" name="word" id="word" placeholder="choose a word to delete inserted in the p">
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>

    <footer>
        <!-- footer -->
        <p>PHP 1 🫡</p>
    </footer>


</body>

</html>