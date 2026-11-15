
<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $birthday = htmlspecialchars($_POST["birthday"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $address = htmlspecialchars($_POST["address"]);

    $message = "Registration Successful! Welcome, " . $name;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        body {
            font-family: Arial;
            background-color: #e8eef7;
            margin: 0;
            padding: 30px;
        }

        .form-box {
            background: white;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #234b8c;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #aaa;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #234b8c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #163466;
        }

        .success {
            color: green;
            text-align: center;
            margin-top: 15px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="form-box">

    <h2>Registration Form</h2>

    <form method="POST" onsubmit="return checkForm()">

        <label>Full Name</label>
        <input type="text" name="name" id="name"
               value="Hanz Aerhon Ramos" required>

        <label>Username</label>
        <input type="text" name="username" id="username"
               value="hanzramos" required>

        <label>Email Address</label>
        <input type="email" name="email" id="email"
               value="hanzramos@example.com" required>

        <label>Birthday</label>
        <input type="date" name="birthday" id="birthday" required>

        <label>Gender</label>
        <select name="gender" id="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Prefer not to say">Prefer not to say</option>
        </select>

        <label>Address</label>
        <textarea name="address" id="address" rows="3" required></textarea>

        <button type="submit">Register</button>

    </form>

    <?php if ($message != "") { ?>
        <div class="success">
            <?php echo $message; ?>
        </div>
    <?php } ?>

</div>

<script>
    function checkForm() {
        let name = document.getElementById("name").value;
        let username = document.getElementById("username").value;
        let email = document.getElementById("email").value;
        let birthday = document.getElementById("birthday").value;
        let gender = document.getElementById("gender").value;
        let address = document.getElementById("address").value;

        if (name == "" || username == "" || email == "" ||
            birthday == "" || gender == "" || address == "") {
            alert("Please complete all fields!");
            return false;
        }

        return true;
    }
</script>

</body>
</html>
