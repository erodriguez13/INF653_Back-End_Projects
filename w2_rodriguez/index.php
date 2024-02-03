<?php 

print_r($_GET);
print_r($_POST);
$firstname= htmlspecialchars($_GET['first']);
$lastname = htmlspecialchars($_GET['last']);
$age = htmlspecialchars ($_Get['age']);
echo $firstname;
echo $lastname;
echo $age;

$firstname= filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
$lastname= filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
$age= filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);

if(isset($_GET["first"]) && isset($_GET["last"]) && isset($_GET["age"])){
$firstname = $_GET['first'];
$lastname= $_GET['last'];
$age = $_GET['age'];
if(!empty($firstname) && !empty($lastname) && !empty($age))
{   echo $firstname;
    echo $lastname;
    echo $age;
}else{
    echo "You are missing at least one of the input data!!!";
}}
else {echo "Not Set!";}

if(isset($_GET["first"]) && isset($_GET["last"]) && isset($_GET["age"])){
$greeting = "Hello, my name is ". $firstname. " ". $lastname. ".";

if ($age>17)
   {$voting_info= " I am old enough to vote in the United States.";}
   else
    {$voting_info= " I am not old enought to vote yet.";}
$age_days = $age*365;
$age_days_info= " I am ". $age_days." days old." ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA Compatible" content "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Getting Data</title>
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <h1> Can You Vote? </h1>
    <?php $date = date('l, F j, Y');
    echo $date."<br>"."<br>";
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for = "first"> First name :</label>
        
        <input type = "text" id = "first" name = "first" autocomplete="off">
     
        <label for = "last">Last name :</label>
        <input type ="text" id = "last" name ="last" autocomplete="off">

        <label for = "age">Age :</label>
        <input type = "number" id = "age" name = "age" min ="0" max="110">
        
            <div>
                <button type = "submit" >Submit</button>
                <button type="submit" formmethod="post"> Submit using POST</button>
                <button type = "reset"> Reset </button>
            </div>
    </form> 
    <output>
    <?php
    echo "<br>".$greeting."<br>";

    echo $voting_info."<br>";
    echo $age_days_info;
    ?>
    </output>
</body>

</html>
