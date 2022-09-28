<?php
$con = mysqli_connect("localhost","root","","instituto");


if(mysqli_connect_errno()){
    echo "Error al conectar MYSQL:" . mysqli_connect_error();
} else {
    echo "Conexion OK<br>";

    $nom = $_POST['nom'];
    $cognom1 = $_POST['cognom1'];
    $cognom2 = $_POST['cognom2'];

    echo "$nom, $cognom1, $cognom2 <br>";

    $sql = "INSERT INTO alumnes (alumne_nom,alumne_cognom1,alumne_cognom2)
    VALUES ('$nom','$cognom1','$cognom2')";

    echo "<br>";

    mysqli_query($con, $sql);
    echo "<br>Registto grabado correctamente<br>";
}
mysqli_close($con);
?>