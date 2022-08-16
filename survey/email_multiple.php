<?php




$multiple_choice = $_POST['multiple_choice'];
$choice_1 = $_POST['choice_1'];
$choice_2 = $_POST['choice_2'];
$choice_3 = $_POST['choice_3'];
$choice_4 = $_POST['choice_4'];
$message = $multiple_choice . " " . $choice_1 . " " .  $choice_2 . " " .  $choice_3 . " " .  $choice_4;
$to = 'kacper@slik1-18.wbs.uni.worc.ac.uk';
$subject = 'New Survey Submission, Multiple-Choice';

if(mail($to, $subject, $message)){
	header('Location: https://slik1-18.wbs.uni.worc.ac.uk/comp_pro_10/contact_complete.html');
} else{
    echo("Error");
}


?>