<html>
<head>
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Prime Number Checker Result</h2>

    <?php
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $integerInput = $_POST["integerInput"];
        if (isPrime($integerInput)) {
            echo "<p>The number $integerInput is a prime number.</p>";
        } else {
            echo "<p>The number $integerInput is not a prime number.</p>";
        }
    }
    ?>
    <p><a href="Prac.html">Go back to input form</a></p>
</body>
</html>