<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        input[type=text],input[type=date], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>

<h3>Contact Form</h3>

<div class="container">
    <form method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="math">Math Score</label>
        <input type="text" id="math" name="math">

        <label for="physical">Physical Score</label>
        <input type="text" id="physical" name="physical">

        <label for="chemistry">Chemistry Score</label>
        <input type="text" id="chemistry" name="chemistry">

        <input type="submit" value="Submit">
        <button><a href="index.php">Back</a></button>
    </form>
</div>

</body>
</html>
<?php
include_once "Models/Student.php";
include_once "Services/StudentManager.php";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $student = [
        "name"=>$_REQUEST["name"],
        "math"=>$_REQUEST["math"],
        "physical"=>$_REQUEST["physical"],
        "chemistry" => $_REQUEST["chemistry"],
    ];
    $studentManager = new StudentManager();
    $studentManager->storeStudents($student);
    header("location: index.php");
}