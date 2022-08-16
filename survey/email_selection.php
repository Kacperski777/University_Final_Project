<?php




$selection_list = $_POST['selection_list'];
$choice_1 = $_POST['selection_1'];
$choice_2 = $_POST['selection_2'];
$choice_3 = $_POST['selection_3'];
$choice_4 = $_POST['selection_4'];
$choice_5 = $_POST['selection_5'];
$choice_6 = $_POST['selection_6'];
$choice_7 = $_POST['selection_7'];
$choice_8 = $_POST['selection_8'];
$message = $selection_list . " " . $choice_1 . " " .  $choice_2 . " " .  $choice_3 . " " .  $choice_4 . " " . $choice_5 . " " .  $choice_6 . " " .  $choice_7 . " " .  $choice_8;
$to = 'kacper@slik1-18.wbs.uni.worc.ac.uk';
$subject = 'New Survey Submission, Selection-List';

if(mail($to, $subject, $message)){
      header('Location: https://slik1-18.wbs.uni.worc.ac.uk/comp_pro_10/contact_complete.html');
} else{
    echo("Error");
}


?>