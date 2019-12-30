<html>
<head>
    <title>Potęgowanie</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>

    <a href="index.html"><img src="projekt.jpg"></a><br><br><br>
    <b>POTĘGOWANIE</b><br>
    
    <form method="post" action="strona2.php">
        <i>Podaj podstawę potęgi:</i>
         <input type="number" name="liczba1" /><br/>
        <i>Podaj dodatni, całkowity wykładnik potęgi:</i>
         <input type="number" name="liczba2" /><br/>
        <input type="submit" value="POTĘGOWANIE" name="oblicz"/>
        </form>
        <?php
        if (empty($_POST['liczba1']) || (empty($_POST['liczba2'])
         && $_POST['liczba2']!=0)) {
            echo "Wpisz podstawę i wykładnik potęgi";
        }
        else {
         if ($_POST['liczba2']>=0) {    
         echo "Wynik działania wynosi: ";
         echo pow($_POST['liczba1'], $_POST['liczba2']);
         }
         else {
         echo "Wykładnik potęgi musi być dodatni";
         }
        }  
        ?>



</body>




</html>