<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" href="auto.css" type="text/css">
    
</head>
<body>
    <div id="baner">
    <h1>SAMOCHODY</h1>
    </div>
    
    <div id="panellewy">
    <h2>Wykaz samochodów</h2>
        
        
        <?php
        
  $serwer = 'localhost';
  $login = 'root';
  $haslo = '';
  $baza ='komis';
        $do_bazy = mysqli_connect($serwer,$login,$haslo,$baza);
        if(mysqli_connect_errno())
        {echo"wystapil blad polacxzenia z baza";}
        $wynik=mysqli_query($do_bazy,"SELECT `id`,`marka`,`model` FROM `samochody`");
        while($row=mysqli_fetch_array($wynik))
        {    
            echo "<ul>";
            echo "<li>";
            echo $row['id'].$row['marka']."".$row['model'];"<br>";
            echo "</li>";
            echo "</ul>";
        }
        
        
         mysqli_close($do_bazy);
        ?>
        
       <h2>Zamówienia</h2>         
    

      <?php  
        $baza=mysqli_connect('localhost','root','','Komis');
        if(mysqli_connect_errno())
        {echo"wystapil blad polacxzenia z baza";}
        $wynik=mysqli_query($baza,"SELECT `Samochody_id`,`Klient`FROM `zamowienia`");
        while($row=mysqli_fetch_array($wynik))
        {    
            echo "<ul>";
            echo "<li>";
            echo $row['Samochody_id']."".$row['Klient'];"<br>";
            echo "</li>";
            echo "</ul>";
        }
        mysqli_close($baza);
        ?>
    </div>  
    <div id="panelprawy">
    
    <h2>Pełne dane:Fiat</h2>
    
        <?php  
        $baza=mysqli_connect('localhost','root','','Komis');
        if(mysqli_connect_errno())
        {echo"wystapil blad polacxzenia z baza";}
        $wynik=mysqli_query($baza,'SELECT * FROM `samochody` WHERE `marka` = "fiat"');
        while($row = mysqli_fetch_array($wynik))
        {    
            echo "<ol>" ;
            echo $row['id']." / ".$row['marka']." / ".$row['model']." / ".$row['rocznik']." / ".$row['kolor']." / ".$row['stan']."";"<br>";
            echo "</ol>";
        }
        mysqli_close($baza);
        ?>
        
        
        
        
    </div>
    <div id="stopka">
    <table>
    <tr>
        <td><a href="kwerendy.txt">Kwerendy</a></td>
        <td>Autor : "Nr pesel"</td>
        <td> <img src="auto.png"></td>
        </tr>
    </table>
    </div>
</body>
</html>

 