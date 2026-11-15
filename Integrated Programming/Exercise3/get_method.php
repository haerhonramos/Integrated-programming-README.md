
<!DOCTYPE html>
<html>
<head>
    <title>PHP GET Method</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 150px;
        }

        input {
            padding: 8px;
        }

        button {
            padding: 8px 15px;
        }
    </style>
</head>
<body>

    <h2>Simple PHP GET Method</h2>

    <form method="GET">
        <label>Enter your name:</label><br><br>

        <input type="text" name="name" placeholder="Enter your name" required>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET["name"])) {
        $name = htmlspecialchars($_GET["name"]);

        echo "<h3>Hello, " . $name . "!</h3>";
        echo "<p>Your data was submitted using the GET method.</p>";
    }
    ?>

</body>
</html>
