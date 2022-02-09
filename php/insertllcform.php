<?php
include '../@Database@/config.php';
$errors = array();

if(isset($_POST['SubmitLlcFormationForm']))
{
    $_GET  = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $response = '';
    
    $sanitized_question1answer1 = mysqli_real_escape_string($conx, $_POST['question1answer1']);
    $sanitized_question2answer1 = mysqli_real_escape_string($conx, $_POST['question2answer1']);
    $sanitized_question3answer1 = mysqli_real_escape_string($conx, $_POST['question3answer1']);
    $sanitized_question4answer1 = mysqli_real_escape_string($conx, $_POST['question4answer1']);
    $sanitized_question5answer1 = mysqli_real_escape_string($conx, $_POST['question5answer1']);
    $sanitized_question6answer1 = mysqli_real_escape_string($conx, $_POST['question6answer1']);
    $sanitized_question7answer1 = mysqli_real_escape_string($conx, $_POST['question7answer1']);
    $sanitized_question8answer1 = mysqli_real_escape_string($conx, $_POST['question8answer1']);
    $sanitized_question9answer1 = mysqli_real_escape_string($conx, $_POST['question9answer1']);
    $sanitized_question9answer2 = mysqli_real_escape_string($conx, $_POST['question9answer2']);
    $sanitized_question9answer3 = mysqli_real_escape_string($conx, $_POST['question9answer3']);
    $sanitized_question9answer4 = mysqli_real_escape_string($conx, $_POST['question9answer4']);
    $sanitized_question9answer5 = mysqli_real_escape_string($conx, $_POST['question9answer5']);
    $sanitized_question10answer1 = mysqli_real_escape_string($conx, $_POST['question10answer1']);
    $sanitized_question10answer2 = mysqli_real_escape_string($conx, $_POST['question10answer2']);
    $sanitized_question10answer3 = mysqli_real_escape_string($conx, $_POST['question10answer3']);
    $sanitized_question11answer1 = mysqli_real_escape_string($conx, $_POST['question11answer1']);
    $sanitized_question12answer1 = mysqli_real_escape_string($conx, $_POST['question12answer1']);
    $sanitized_question13answer1 = mysqli_real_escape_string($conx, $_POST['question13answer1']);
    $sanitized_question13answer2 = mysqli_real_escape_string($conx, $_POST['question13answer2']);
    $sanitized_question13answer3 = mysqli_real_escape_string($conx, $_POST['question13answer3']);
    $sanitized_question13answer4 = mysqli_real_escape_string($conx, $_POST['question13answer4']);
    $sanitized_question13answer5 = mysqli_real_escape_string($conx, $_POST['question13answer5']);
    $sanitized_question14answer1 = mysqli_real_escape_string($conx, $_POST['question14answer1']);
    $sanitized_question15answer1 = mysqli_real_escape_string($conx, $_POST['question15answer1']);
    $sanitized_question16answer1 = mysqli_real_escape_string($conx, $_POST['question16answer1']);
    $sanitized_question17answer1 = mysqli_real_escape_string($conx, $_POST['question17answer1']);
    $sanitized_question18answer1 = mysqli_real_escape_string($conx, $_POST['question18answer1']);
    
    date_default_timezone_set('America/New_York');
    $date = date('F d Y');
    $time = date('h:i:s a');
    
    $sql22 = "SELECT * FROM `llcformationform` WHERE question1answer1 = '$sanitized_question1answer1'";
    
    $result22 = $conx->query($sql22);
    while($row22 = $result22->fetch_assoc()) {
      
      $pulledusername  = $row22["question1answer1"];
    }
    
    if($pulledusername == $sanitized_question1answer1)
    {
        $errors['question1answer1'] = "You can only submit this form once, If you wish to view or edit the form you submitted <a href='../Account/Login/'>login</a> and check it out. If you haven't created an account yet go <a href='../Account/Register/'>here</a> and create an account with this exact first and last name ( $sanitized_question1answer1 ).";
    }else {
    
    $sql = mysqli_query($conx, "INSERT INTO `llcformationform`(
        id, 
        question1answer1,  
        question2answer1,
        question3answer1,
        question4answer1,
        question5answer1,  
        question6answer1,
        question7answer1,
        question8answer1,
        question9answer1,
        question9answer2,
        question9answer3,
        question9answer4,
        question9answer5,
        question10answer1,
        question10answer2,
        question10answer3,
        question11answer1,
        question12answer1,
        question13answer1,
        question13answer2,
        question13answer3,
        question13answer4,
        question13answer5,
        question14answer1,
        question15answer1,
        question16answer1,
        question17answer1,
        question18answer1,
        date
        ) 
        VALUES (
            '', 
            '$sanitized_question1answer1', 
            '$sanitized_question2answer1',
            '$sanitized_question3answer1',
            '$sanitized_question4answer1',
            '$sanitized_question5answer1', 
            '$sanitized_question6answer1', 
            '$sanitized_question7answer1',
            '$sanitized_question8answer1',
            '$sanitized_question9answer1',
            '$sanitized_question9answer2', 
            '$sanitized_question9answer3', 
            '$sanitized_question9answer4',
            '$sanitized_question9answer5',
            '$sanitized_question10answer1',
            '$sanitized_question10answer2', 
            '$sanitized_question10answer3', 
            '$sanitized_question11answer1',
            '$sanitized_question12answer1',
            '$sanitized_question13answer1',
            '$sanitized_question13answer2', 
            '$sanitized_question13answer3', 
            '$sanitized_question13answer4',
            '$sanitized_question13answer5',
            '$sanitized_question14answer1',
            '$sanitized_question15answer1', 
            '$sanitized_question16answer1', 
            '$sanitized_question17answer1',
            '$sanitized_question18answer1',
            '$date $time'
            )") or die(mysqli_error($conx));
            
            $sql2 = mysqli_query($conx, "INSERT INTO `uploadedllcfilesbyuser`(id, firstandlast, filename, date, status, part1status, part2status, part3status, part4status) VALUES ('', '$sanitized_question1answer1', 'LLC Formation Form', '$date $time', '0%', '0%', '0%', '0%', '0%')") or die(mysqli_error($conx));
    
    $response = 'Success, Your form has been submitted!';
    mysqli_close($conx);
    }
}
?>