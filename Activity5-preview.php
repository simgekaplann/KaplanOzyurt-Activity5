<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
if(empty(($_POST)["your_name"]) == false){
echo "Welcome " .$_POST["your_name"];

}
else{
    echo "Wrong!";
}


?>
<br /> <br />
<?php
if(empty(($_POST)["user_name"]) == false){
echo "Welcome " .$_POST["user_name"];

}
else{
    echo "Wrong!";
}


?>


<br /> <br />




<?php
if(empty(($_POST)["password"]) == false){
echo "Welcome " .$_POST["password"];

}
else{
    echo "Wrong!";
}


?>

<br /> <br />



<br /> <br />
<?php
if(empty(($_POST)["address"]) == false){
echo "Welcome " .$_POST["address"];

}
else{
    echo "Wrong!";
}


?>


<br /> <br />
<?php
if(isset($_POST["country"]) && !empty($_POST["country"])) {
    $selected_country = $_POST["country"];
    echo "Selected country: " . $selected_country;
} else {
    echo "No country selected!";
}
?>


<br /> <br />
<br /> <br />
<?php
if(empty(($_POST)["zip_code"]) == false){
echo "Welcome " .$_POST["zip_code"];

}
else{
    echo "Wrong!";
}


?>


<br /> <br />
<?php
if(empty(($_POST)["email"]) == false){
echo "Welcome " .$_POST["email"];

}
else{
    echo "Wrong!";
}


?>

<br /> <br />

<br /> <br />
<?php
if(empty(($_POST)["male"]) == false && empty(($_POST)["female"]) == false){
echo "Wrong";

}
else if(empty(($_POST)["male"]) == false){
    echo "Welcome " .$_POST["male"];

}else if(empty(($_POST)["female"]) == false){
    echo "Welcome " .$_POST["female"];
}
else{
    echo "Wrong!";
}


?>





<br /> <br />
<?php
if(isset($_POST["language"])) {
    $languages = $_POST["language"];
    if(in_array("English", $languages)) {
        echo "Welcome English!";
    } elseif(in_array("French", $languages)) {
        echo "Welcome French!";
    } elseif(in_array("Germany", $languages)) {
        echo "Welcome Germany!";
    } else {
        echo "Wrong!";
    }
} else {
    echo "No language selected!";
}
?>



<br /> <br />
<?php
if(empty(($_POST)["about"]) == false){
echo "About: " .$_POST["about"];

}

else{
    echo "Wrong!";
}


?>



</body>
</html>