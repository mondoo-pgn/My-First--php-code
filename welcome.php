<h1><?php echo "Шалгаж байна !"; ?></h1>
<?php
// print_r($_POST);
echo "<hr/>";
$Surmane=$_POST[Овог];

//print_r($Surmane);
//echo"<br/>";
$name=$_POST[Нэр];
//print_r($name);
//echo"<br/>";
$Regis=$_POST[Регистер];
//print_r($Regis);
//echo"<br/>";
$email=$_POST[ Имэйл];
//print_r($email);
//echo"<br/>";
$mobile=$_POST[Утас];
//print_r($mobile);
//echo"<br/>";
$address=$_POST[Хаяг];
//print_r($address);
if (strlen($Surmane) == 0) {                  //usgiin urt ni 0-tei tentsuu baiwal
    echo "Эцгийн нэр хоосон байна";
    echo "<br/>";
    die;
}else if ($name == "") {                    // eswel ner ni hooson bwl 
    echo "Өөрийн нэр хоосон байна";
    echo "<br/>";
    die;
}else if ($Regis == "") {
    echo "Регистер хоосон байна";
    echo "<br/>";
    die;
}

echo $Surmane, "<br/>";
echo $name, "<br/>";
echo $Regis, "<br/>";
?>



