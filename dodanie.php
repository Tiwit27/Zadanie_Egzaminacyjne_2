<?php
$conn = mysqli_connect("localhost", "root", "", "ee09") or die("Bład połączenia z bazą danych");
$num = $_POST['num'];
$rat1 = $_POST['rat1'];
$rat2 = $_POST['rat2'];
$rat3 = $_POST['rat3'];
$zapytanie = "INSERT INTO ratownicy(nrKaretki, ratownik1, ratownik2, ratownik3) VALUES ('$num', '$rat1', '$rat2', '$rat3')";
$zap = mysqli_query($conn, $zapytanie);
echo "Do bazy zostało wysłane zapytanie: ".$zapytanie;
?>