<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstName"> First Name</label>
            <input type="text" id="firstName" name="firstName" placeholder="Shivam">
            <br>
            <label for="lastName"> First Name</label>
            <input type="text" id="lastName" name="lastName" placeholder="Singh">
            <br><br>
            <label for="favoritepet">Favourtie Pet?</label>
            <br>
            <select name="favoritepet" id="favoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>