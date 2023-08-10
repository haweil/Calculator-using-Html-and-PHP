<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
    <link rel="stylesheet" href="style.css">

<body>
    <div class="container">
        <h1>My Own Calculator</h1>
        <form action="project/calc.inc.php" method="post">
            <div class="form-group">
                <label for="num1">First Number:</label>
                <input type="number" name="num1" id="num1" placeholder="First Number" required>
            </div>
            <div class="form-group">
                <label for="oper">Operation:</label>
                <select name="oper" id="oper">
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="div">Division</option>
                    <option value="mul">Multiplication</option>
                    <option value="mod">Modulo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="num2">Second Number:</label>
                <input type="number" name="num2" id="num2" placeholder="Second Number" required>
            </div>
            <button type="submit" name="submit">Calculate</button>
        </form>
    </div>
</body>

</html>