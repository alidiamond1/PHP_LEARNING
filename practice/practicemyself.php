<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Information Form</h2>
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="grade">Grade:</label>
                <input type="number" id="grade" name="grade" min="0" max="100" required>
            </div>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get form data
            $name = htmlspecialchars($_POST["name"]);
            $age = (int)$_POST["age"];
            $grade = (int)$_POST["grade"];

            // Calculate grade status
            $status = "";
            if ($grade >= 90) {
                $status = "A (Excellent)";
            } elseif ($grade >= 80) {
                $status = "B (Very Good)";
            } elseif ($grade >= 70) {
                $status = "C (Good)";
            } elseif ($grade >= 60) {
                $status = "D (Pass)";
            } else {
                $status = "F (Fail)";
            }

            // Display results
            echo "<div class='result'>";
            echo "<h3>Student Information:</h3>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age years old</p>";
            echo "<p><strong>Grade:</strong> $grade</p>";
            echo "<p><strong>Status:</strong> $status</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
