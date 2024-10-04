<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="TODAY.php">
    <label for="age">Enter your age:</label>
    <input type="number" name="age" id="age">
    <input type="submit" value="Submit">
</form>

</body>
</html>
<?php


// $myArray[0] = "John";
// $myArray[1] = "<strong>PHP</strong>";
// $myArray[2] = 21;
// echo "$myArray[0] is $myArray[2] and knows $myArray[1]";


//MULTI DIMENSIONALARRAY

// $people=array(
// 'online'=>array('David', 'Amy'),
// 'offline'=>array('John', 'Rob', 'Jack'),
// 'away'=>array('Arthur', 'Daniel'),
// );
// echo $people['away'][0]

// $age = 18;

// if ($age < 18) {
//     echo "You are a minor.";
// } elseif ($age == 18) {
//     echo "You are exactly 18 years old!";
// } else {
//     echo "You are an adult.";
// }



// $x=10;
// $y=20;
// if($x>=$y){
//     echo $x;
// }
//     else{
//         echo $y;
//     }





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];  


    if ($age ==10) {
        echo "Abana";
    } 
    elseif ($age >= 11 && $age <= 18) {
        echo "Abangavu";
    } 
    elseif ($age >= 19 && $age <= 35) {
        echo "Urubyiruko";
    } 
    elseif ($age >= 36 && $age <= 65) {
        echo "Abakuze";
    } 
   
    else {
        echo "Invaled input";
    }
}



?>