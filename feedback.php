<?php 
$name=isset ($_POST ['name'])? ($_POST ['name']):''; 
$email=isset ($_POST ['email'])? ($_POST ['email']):''; 
$feedback = isset ($_POST ['feedback'])? ($_POST ['feedback']):'';
$num1=isset ($_POST ['num1'])? ($_POST ['num1']):'';
$num2=isset ($_POST ['num2'])? ($_POST ['num2']):'';
$sum= $num1+$num2;

    print "<p>Name: " . $name. "</p>";
    print "<p>Email: " . $email. "</p>";
    print "<p>Feedback: " . $feedback. "</p>";
    print "<p>Sum is: " . $sum. "</p>";
    

?>

<?php 
$name=isset ($_POST ['name'])? ($_POST ['name']):''; 
$email=isset ($_POST ['email'])? ($_POST ['email']):''; 
$feedback = isset ($_POST ['feedback'])? ($_POST ['feedback']):'';
$num1=isset ($_POST ['num1'])? ($_POST ['num1']):'';
$num2=isset ($_POST ['num2'])? ($_POST ['num2']):'';
$sum= $num1 + $num2;


if (strlen($name)>0 && strlen($email)>0 && strlen($feedback)>0 && $sum==10) {

    print "<h3>Thank you for giving a feedback!</h3>";


} else {
    print "There was error in a form, please try again";
}


?>








