<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<h1>Valutan i kronor</h1>
<form action="uppgift.php" method="post">
    <label>Currency</label><br/>
    <input name="currency" type="text" size="20"> <br>
    <input name="submit" type="submit" value="Skicka">
</form>
</body>

<body>
<h1>Namn och ålder</h1>
<form action="uppgift.php" method="post">
    <label>Namn</label><br/>
    <input name="namn" type="text" size="20"> <br>
    <label>Ålder</label><br/>
    <input name="ålder" type="text" size="20"> <br>
    <input name ="submit" type="submit" value="Skicka">
</form>
</body>

<body>
<h1>Matematik-test</h1>

<form action="uppgift.php" method="post">
   <fieldset>
       <legend>Kalkylator</legend>
       <input type="number" name="n1"> +
       <input type="number" name="n2">
       <br>
       <input type="submit" value="Beräkna">
   </fieldset>
</form>

</body>
</html>