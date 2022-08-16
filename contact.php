<?php




$free_text = $_POST['contact'];
$to = 'kacper@slik1-18.wbs.uni.worc.ac.uk';
$subject = 'New Query Submission';

if(mail($to, $subject, $free_text)){
    header('Location: https://slik1-18.wbs.uni.worc.ac.uk/comp_pro_10/contact_complete.html');
} else{
    echo("Error");
}


?>