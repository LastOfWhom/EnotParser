<?php

$pdo = new PDO('mysql:host=localhost;dbname=parser;charset=utf8;', 'root', '' );

$sql = 'SELECT * FROM curse';
$statement = $pdo->prepare($sql);
$statement->execute();
$dbCurse = $statement->fetchAll(PDO::FETCH_ASSOC);
$file = file_get_contents('https://www.cbr-xml-daily.ru/daily_json.js?');
$curse = json_decode($file);

if(!empty($dbCurse) != 0){

    foreach ($curse->Valute as $item) {
        $sql = "UPDATE Curse SET ID = '$item->ID', CharCode = '$item->CharCode', Nominal = '$item->Nominal',Name = '$item->Name', Value = '$item->Value', Previous = '$item->Previous'  
        WHERE ID = '$item->ID' ";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $curse = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
else{
    foreach ($curse->Valute as $item){
        $sql = "INSERT INTO Curse (ID, NumCode, CharCode, Nominal, Name, Value, Previous) VALUES (:ID, :NumCode, :CharCode, :Nominal, :Name, :Value, :Previous)";
        $statement = $pdo->prepare($sql);

        $statement->bindParam(':ID', $item->ID);
        $statement->bindParam(':NumCode', $item->NumCode);
        $statement->bindParam(':CharCode', $item->CharCode);
        $statement->bindParam(':Nominal', $item->Nominal);
        $statement->bindParam(':Name', $item->Name);
        $statement->bindParam(':Value', $item->Value);
        $statement->bindParam(':Previous', $item->Previous);
        $statement->execute();
        $curse = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
$filename = date("Y-m-d H-i-s").'php';
file_put_contents($filename, '');


