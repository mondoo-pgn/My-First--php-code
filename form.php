<?php 

$_formiin_medeelel = $_POST;
$_email_hayag = $_formiin_medeelel ['email'];
$_ner = $_POST ['Name'];
$_message = $_formiin_medeelel ['message'];
print_r(  $_email_hayag  );
echo "<hr>";
print_r($_ner);
echo "<hr>";
print_r($_message);
echo "<hr>";
print_r($_formiin_medeelel);

?>

<h1>
<?php
echo $_ner;
print_r ("<br/>"); ?>
<span class= "Email"> <?php echo $_email_hayag ;?></span>
</h1>





