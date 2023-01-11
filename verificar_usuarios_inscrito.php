<?php
$rut = [
'16594026-1',
'15539070-6',
'10867598-5',
'19730715-3',
'10749193-7',
'19385338-2',
'10625441-9',
'12174880-0',
'13865965-8',
'24116297-4',
'11422085-K',
'13191371-0',
'16771051-4',
'11186639-2',
'9834464-0',
'12937641-4',
'18318832-1',
'13863869-3',
'26430647-7',
'13005523-0',
'14117670-6',
'14107116-5',
'12004784-1',
'9116099-4',
'13284024-5',
'16773103-1',
'25471059-8',
'22744966-7',
'22601654-6',
'15009104-7',
'16940244-2',
'9834464-0',
'13497372-2',
'20218526-6',
'17937898-7',
'15593242-0',
'11749072-6',
'13211007-7',
'17487186-8',
'15535064-4',
'16769889-1',
'22372077-3',
'24211532-5',
'13865159-2',
'21226096-7',
'21796677-9',
'22676339-2',
'18582168-4',
'14309355-7',
'12834131-5',
'11618888-0',
'24830572-K',
'18900438-9',
'9479059-K',
'16594072-5',
'12618428-K'
];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gesinel1_capacitaciones";
$i=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("conexion fallida: " . $conn->connect_error);
}
for ($i=0 ;$i<count($rut);$i++){
    $a= $rut[$i];
    
$sql = "SELECT rut, nombres, apaterno FROM usuarios where rut='$a'";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           // echo "" . $row["rut"]. " - Name: " . $row["nombres"]. " " . $row["apaterno"]. "<br>";
             }
        } else {
            echo $a."<br>";
        }
}
$conn->close();

?>