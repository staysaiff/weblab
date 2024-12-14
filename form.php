<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capture all the submitted form data
    $fullname = $_POST["fullname"] ?? "";
    $game_username = $_POST["game_username"] ?? "";
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";
    $gender = $_POST["gender"] ?? "";
    $birthdate = $_POST["birthdate"] ?? "";
    $country = $_POST["country"] ?? "";
    $bio = $_POST["bio"] ?? "";
    $game_genre = $_POST["game_genre"] ?? [];
    $platform_preference = $_POST["Platform_preference"] ?? [];
    $terms_and_conditions = isset($_POST["Terms_and_Conditions"]);

    // Display the captured data
    echo "<div style='background-color: rgba(0, 0, 0, 0.8); color: #fff; padding: 20px; border-radius: 10px; margin-bottom: 20px;'>";
    echo "<h3>Submitted Data:</h3>";
    echo "<p><strong>Full Name:</strong> " . htmlspecialchars($fullname) . "</p>";
    echo "<p><strong>Game Username:</strong> " . htmlspecialchars($game_username) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
    echo "<p><strong>Confirm Password:</strong> " . htmlspecialchars($confirm_password) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($birthdate) . "</p>";
    echo "<p><strong>Country:</strong> " . htmlspecialchars($country) . "</p>";
    echo "<p><strong>Biography:</strong> " . nl2br(htmlspecialchars($bio)) . "</p>";
    echo "<p><strong>Game Genre:</strong> " . implode(", ", $game_genre) . "</p>";
    echo "<p><strong>Platform Preference:</strong> " . implode(", ", $platform_preference) . "</p>";
    echo "<p><strong>Terms and Conditions Accepted:</strong> " . ($terms_and_conditions ? "Yes" : "No") . "</p>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gaming Registration Form</title>
<style>
/* Apply a background image and center it */
body {
    font-family: Arial, sans-serif;
    background: url('https://img.freepik.com/free-vector/abstract-realistic-technology-particle-background_52683-33063.jpg?t=st=1734065802~exp=1734069402~hmac=9074be90063b8910710d3da9e219fb08ffaf3bae96f2d416dd198e6d1f76ba99&w=1800') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 20px;
    color: #fff;
}

/* Main heading style */
h1 {
    color: #fff;
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 40px;
}

/* Center the form and add a semi-transparent background */
table {
    width: 100%;
    max-width: 700px;
    margin: 0 auto;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}

/* Cell padding and layout */
td {
    padding: 12px;
}

/* Label styling */
label {
    color: #f3f3f3;
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
}

/* Form input elements styling */
input[type="text"], input[type="email"], input[type="password"],
select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    margin-bottom: 18px;
    background-color: #333;
    color: #f1f1f1;
}

/* Specific styling for checkboxes and radio buttons */
input[type="radio"], input[type="checkbox"] {
    margin-right: 5px;
    accent-color: #4CAF50; /* Stylish checkbox color */
}

/* Styling for radio buttons and checkboxes in a block layout */
td input[type="radio"], td input[type="checkbox"] {
    margin-right: 10px;
    margin-bottom: 10px;
}

/* Submit button with hover effect */
input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Error message styling */
.error {
    color: #ff0000;
    font-size: 14px;
}

/* Responsive design adjustments */
@media (max-width: 600px) {
    table {
        width: 100%;
        padding: 15px;
    }

    h1 {
        font-size: 2rem;
    }

    input[type="submit"] {
        width: 100%;
    }
}
</style>
</head>
<script>
    function validate() {
        var fullname = document.getElementById("fullname");
        var register_number = document.getElementById("game_username");

        // Validate fields
        if (fullname.value.trim() === "" || register_number.value.trim() === "") {
            alert("Give your proper Name & User Name for Game");
            return false; // Prevent form submission
        }

      
        return true;
    }
</script>
<body>
<h1>Gaming Registration Form</h1>
<table>
<form action="#" method="post" onsubmit="return validate()">
<tr>
<td><label for="fullname">Full Name:</label></td>
<td><input type="text" id="fullname" name="fullname" ></td>
</tr>
<tr>
    <td><label for="game_username">Game Username:</label></td>
    <td><input type="text" id="game_username" name="game_username" ></td>
</tr>
<tr>
<td><label for="email_address">Email Address:</label></td>
<td><input type="email" id="email" name="email" ></td>
</tr>
<tr>
<td><label for="password">Password:</label></td>
<td><input type="password" id="password" name="password" ></td>
</tr>
<tr>
<td><label for="confirm_password">Confirm Password:</label></td>
<td><input type="password" id="confirm_password" name="confirm_password" ></td>
</tr>
<tr>
<td><label>Gender:</label></td>
<td>
    <label for="male">
        <input type="radio" id="male" name="gender" value="male" >
        Male
    </label>
    <label for="female">
        <input type="radio" id="female" name="gender" value="female" >
        Female
    </label>
    <label for="other">
        <input type="radio" id="other" name="gender" value="other" >
        Other
    </label>
</td>
</tr>
<tr>
<td><label for="birthdate">Date of Birth:</label></td>
<td><input type="date" id="birthdate" name="birthdate" ></td>
</tr>
<tr>
<td><label for="country">Country:</label></td>
<td>
<select id="country" name="country" >
<option value="">Select a country</option>
<option value="IN">India</option>
<option value="uk">United Kingdom</option>
<option value="canada">Canada</option>
<option value="australia">Australia</option>
<option value="other">Other</option>
</select>
</td>
</tr>
<tr>
<td><label for="game_genre">Game Genre:</label></td>
<td>
<label for="Action">
    <input type="checkbox" id="Action" name="game_genre[]" value="Action"> Action
</label>
<label for="RPG">
    <input type="checkbox" id="RPG" name="game_genre[]" value="RPG"> RPG
</label>
<label for="Adventure">
    <input type="checkbox" id="Adventure" name="game_genre[]" value="Adventure"> Adventure
</label>
<label for="Racing">
    <input type="checkbox" id="Racing" name="game_genre[]" value="Racing"> Racing
</label>
</td>
</tr>
<tr>
<td><label for="Platform_preference">Platform preference:</label></td>
<td>
<label for="PC">
    <input type="checkbox" id="PC" name="Platform_preference[]" value="PC"> PC
</label>
<label for="Console">
    <input type="checkbox" id="Console" name="Platform_preference[]" value="Console"> Console
</label>
<label for="Mobile">
    <input type="checkbox" id="Mobile" name="Platform_preference[]" value="Mobile"> Mobile
</label>
</td>
</tr>
<tr>
<td><label for="Terms_and_Conditions">Terms and Conditions:</label></td>
<td>
<input type="checkbox" id="Terms_and_Conditions" name="Terms_and_Conditions">
<label for="Terms_and_Conditions">I Agree to the terms and conditions</label>
</td>
</tr>
<tr>
<td><label for="bio">Security Questions:</label></td>
<td><textarea id="bio" name="bio" rows="4"></textarea></td>
</tr>
<tr>
<td colspan="2" style="text-align: center;">
<input type="submit" value="Submit">
</td>
</tr>
</form>
</table>
</body>
</html>
