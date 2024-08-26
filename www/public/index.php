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

<body>
<h1>Quiz</h1>
<form action="uppgift.php" method="post">
    <label>I vilket språk programmerar vi i på kursen?<br>    
        <input type="radio" name="qOne" value="php">PHP<br>
        <input type="radio" name="qOne" value="asp">ASP<br>
        <input type="radio" name="qOne" value="jsp">JSP<br><br>
    </label>
    <label>Vilket land är bäst?<br>  
        <input type="radio" name="qTwo" value="sve">Sverige<br>
        <input type="radio" name="qTwo" value="dan">Danmark<br>
        <input type="radio" name="qTwo" value="nor">Norge<br><br>
    </label>
    <label>Vilket klass går jag i?<br>
        <input type="radio" name="qThree" value="est2">Estet 2<br>
        <input type="radio" name="qThree" value="edt1">EDT 1<br>
        <input type="radio" name="qThree" value="te3">Teknik 3<br><br>
    </label>
    <label>När dog Gustav Vasa?<br>
        <input type="radio" name="qFour" value="2000">2000<br>
        <input type="radio" name="qFour" value="1560">1560<br>
        <input type="radio" name="qFour" value="1434">1434<br><br>
    </label>
    <input type="submit" value="Skicka" />
</form> 
</body>

</html>