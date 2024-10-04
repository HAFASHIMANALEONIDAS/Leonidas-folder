<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "imyirondoro";

// Guhuza database
$conn = new mysqli($servername, $username, $password, $dbname);

// Kugenzura niba connection ikora neza
if ($conn->connect_error) {
    die("Kwihuza byanze: " . $conn->connect_error);
}

// Gufata amakuru aturuka muri form
$izina = $_POST['izina'];
$imyaka = $_POST['imyaka'];
$email = $_POST['email'];

// Gutegura SQL yo kubika amakuru
$sql = "INSERT INTO abantu (izina, imyaka, email) VALUES ('$izina', '$imyaka', '$email')";

// Kugenzura niba amakuru yabitswe neza
if ($conn->query($sql) === TRUE) {
    echo "Amakuru yawe yabitswe neza!";
} else {
    echo "Ikibazo: " . $conn->error;
}

// Gufunga connection
$conn->close();
?>