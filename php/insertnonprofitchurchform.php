<?php
include '../@Database@/config.php';
$errors = array();

if(isset($_POST['SubmitNonProfitChurchFormationForm']))
{
    $_GET  = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $response = '';
    
    $sanitized_question1answer1 = mysqli_real_escape_string($conx, $_POST['question1answer1']);
    $sanitized_question2answer1 = mysqli_real_escape_string($conx, $_POST['question2answer1']);
    $sanitized_question2answer2 = mysqli_real_escape_string($conx, $_POST['question2answer2']);
    $sanitized_question2answer3 = mysqli_real_escape_string($conx, $_POST['question2answer3']);
    $sanitized_question3answer1 = mysqli_real_escape_string($conx, $_POST['question3answer1']);
    $sanitized_question4answer1 = mysqli_real_escape_string($conx, $_POST['question4answer1']);
    $sanitized_question4answer2 = mysqli_real_escape_string($conx, $_POST['question4answer2']);
    $sanitized_question4answer3 = mysqli_real_escape_string($conx, $_POST['question4answer3']);
    $sanitized_question4answer4 = mysqli_real_escape_string($conx, $_POST['question4answer4']);
    $sanitized_question4answer5 = mysqli_real_escape_string($conx, $_POST['question4answer5']);
    $sanitized_question5answer1 = mysqli_real_escape_string($conx, $_POST['question5answer1']);
    $sanitized_question5answer2 = mysqli_real_escape_string($conx, $_POST['question5answer2']);
    $sanitized_question5answer3 = mysqli_real_escape_string($conx, $_POST['question5answer3']);
    $sanitized_question6answer1 = mysqli_real_escape_string($conx, $_POST['question6answer1']);
    $sanitized_question7answer1 = mysqli_real_escape_string($conx, $_POST['question7answer1']);
    $sanitized_question8answer1 = mysqli_real_escape_string($conx, $_POST['question8answer1']);
    $sanitized_question9answer1 = mysqli_real_escape_string($conx, $_POST['question9answer1']);
    $sanitized_question10answer1 = mysqli_real_escape_string($conx, $_POST['question10answer1']);
    $sanitized_question10answer2 = mysqli_real_escape_string($conx, $_POST['question10answer2']);
    $sanitized_question10answer3 = mysqli_real_escape_string($conx, $_POST['question10answer3']);
    $sanitized_question10answer4 = mysqli_real_escape_string($conx, $_POST['question10answer4']);
    $sanitized_question10answer5 = mysqli_real_escape_string($conx, $_POST['question10answer5']);
    $sanitized_question11answer1 = mysqli_real_escape_string($conx, $_POST['question11answer1']);
    $sanitized_question11answer2 = mysqli_real_escape_string($conx, $_POST['question11answer2']);
    $sanitized_question11answer3 = mysqli_real_escape_string($conx, $_POST['question11answer3']);
    $sanitized_question11answer4 = mysqli_real_escape_string($conx, $_POST['question11answer4']);
    $sanitized_question11answer5 = mysqli_real_escape_string($conx, $_POST['question11answer5']);
    $sanitized_question12answer1 = mysqli_real_escape_string($conx, $_POST['question12answer1']);
    $sanitized_question13answer1 = mysqli_real_escape_string($conx, $_POST['question13answer1']);
    $sanitized_question14answer1 = mysqli_real_escape_string($conx, $_POST['question14answer1']);
    $sanitized_question14answer2 = mysqli_real_escape_string($conx, $_POST['question14answer2']);
    $sanitized_question14answer3 = mysqli_real_escape_string($conx, $_POST['question14answer3']);
    $sanitized_question14answer4 = mysqli_real_escape_string($conx, $_POST['question14answer4']);
    $sanitized_question14answer5 = mysqli_real_escape_string($conx, $_POST['question14answer5']);
    $sanitized_question15answer1 = mysqli_real_escape_string($conx, $_POST['question15answer1']);
    $sanitized_question15answer2 = mysqli_real_escape_string($conx, $_POST['question15answer2']);
    $sanitized_question15answer3 = mysqli_real_escape_string($conx, $_POST['question15answer3']);
    $sanitized_question15answer4 = mysqli_real_escape_string($conx, $_POST['question15answer4']);
    $sanitized_question15answer5 = mysqli_real_escape_string($conx, $_POST['question15answer5']);
    $sanitized_question16answer1 = mysqli_real_escape_string($conx, $_POST['question16answer1']);
    $sanitized_question16answer2 = mysqli_real_escape_string($conx, $_POST['question16answer2']);
    $sanitized_question16answer3 = mysqli_real_escape_string($conx, $_POST['question16answer3']);
    $sanitized_question16answer4 = mysqli_real_escape_string($conx, $_POST['question16answer4']);
    $sanitized_question16answer5 = mysqli_real_escape_string($conx, $_POST['question16answer5']);
    $sanitized_question17answer1 = mysqli_real_escape_string($conx, $_POST['question17answer1']);
    $sanitized_question18answer1 = mysqli_real_escape_string($conx, $_POST['question18answer1']);
    $sanitized_question19answer1 = mysqli_real_escape_string($conx, $_POST['question19answer1']);
    $sanitized_question20answer1 = mysqli_real_escape_string($conx, $_POST['question20answer1']);
    $sanitized_question21answer1 = mysqli_real_escape_string($conx, $_POST['question21answer1']);
    $sanitized_question22answer1 = mysqli_real_escape_string($conx, $_POST['question22answer1']);
    $sanitized_question23answer1 = mysqli_real_escape_string($conx, $_POST['question23answer1']);
    $sanitized_question24answer1 = mysqli_real_escape_string($conx, $_POST['question24answer1']);
    $sanitized_question25answer1 = mysqli_real_escape_string($conx, $_POST['question25answer1']);
    $sanitized_question26answer1 = mysqli_real_escape_string($conx, $_POST['question26answer1']);
    $sanitized_question27answer1 = mysqli_real_escape_string($conx, $_POST['question27answer1']);
    $sanitized_question28answer1 = mysqli_real_escape_string($conx, $_POST['question28answer1']);
    $sanitized_question29answer1 = mysqli_real_escape_string($conx, $_POST['question29answer1']);
    $sanitized_question30answer1 = mysqli_real_escape_string($conx, $_POST['question30answer1']);
    $sanitized_question30answer2 = mysqli_real_escape_string($conx, $_POST['question30answer2']);
    $sanitized_question30answer3 = mysqli_real_escape_string($conx, $_POST['question30answer3']);
    $sanitized_question31answer1 = mysqli_real_escape_string($conx, $_POST['question31answer1']);
    $sanitized_question32answer1 = mysqli_real_escape_string($conx, $_POST['question32answer1']);
    $sanitized_question33answer1 = mysqli_real_escape_string($conx, $_POST['question33answer1']);
    $sanitized_question34answer1 = mysqli_real_escape_string($conx, $_POST['question34answer1']);
    $sanitized_question35answer1 = mysqli_real_escape_string($conx, $_POST['question35answer1']);
    $sanitized_question36answer1 = mysqli_real_escape_string($conx, $_POST['question36answer1']);
    $sanitized_question37answer1 = mysqli_real_escape_string($conx, $_POST['question37answer1']);
    $sanitized_question38answer1 = mysqli_real_escape_string($conx, $_POST['question38answer1']);
    $sanitized_question39answer1 = mysqli_real_escape_string($conx, $_POST['question39answer1']);
    $sanitized_question40answer1 = mysqli_real_escape_string($conx, $_POST['question40answer1']);
    $sanitized_question41answer1 = mysqli_real_escape_string($conx, $_POST['question41answer1']);
    $sanitized_question42answer1 = mysqli_real_escape_string($conx, $_POST['question42answer1']);
    $sanitized_question43answer1 = mysqli_real_escape_string($conx, $_POST['question43answer1']);
    $sanitized_question44answer1 = mysqli_real_escape_string($conx, $_POST['question44answer1']);
    $sanitized_question45answer1 = mysqli_real_escape_string($conx, $_POST['question45answer1']);
    $sanitized_question46answer1 = mysqli_real_escape_string($conx, $_POST['question46answer1']);
    $sanitized_question47answer1 = mysqli_real_escape_string($conx, $_POST['question47answer1']);
    $sanitized_question48answer1 = mysqli_real_escape_string($conx, $_POST['question48answer1']);
    
    date_default_timezone_set('America/New_York');
    $date = date('F d Y');
    $time = date('h:i:s a');
    
    $sql22 = "SELECT * FROM `nonprofitchurchformationform` WHERE question2answer1 = '$sanitized_question2answer1'";
    
    $result22 = $conx->query($sql22);
    while($row22 = $result22->fetch_assoc()) {
      
      $pulledusername  = $row22["question2answer1"];
    }
    
    if($pulledusername == $sanitized_question2answer1)
    {
        $errors['question2answer1'] = "You can only submit this form once, If you wish to view or edit the form you submitted <a href='../Account/Login/'>login</a> and check it out. If you haven't created an account yet go <a href='../Account/Register/'>here</a> and create an account with this exact first and last name ( $sanitized_question2answer1 ).";
    }else {
    
    $sql = mysqli_query($conx, "INSERT INTO `nonprofitchurchformationform`(
        id, 
        question1answer1,  
        question2answer1,
        question2answer2,
        question2answer3,
        question3answer1,  
        question4answer1,
        question4answer2,
        question4answer3,
        question4answer4,
        question4answer5,
        question5answer1,
        question5answer2,
        question5answer3,
        question6answer1,
        question7answer1,
        question8answer1,
        question9answer1,
        question10answer1,
        question10answer2,
        question10answer3,
        question10answer4,
        question10answer5,
        question11answer1,
        question11answer2,
        question11answer3,
        question11answer4,
        question11answer5,
        question12answer1,
        question13answer1,
        question14answer1,
        question14answer2,
        question14answer3,
        question14answer4,
        question14answer5,
        question15answer1,
        question15answer2,
        question15answer3,
        question15answer4,
        question15answer5,
        question16answer1,
        question16answer2,
        question16answer3,
        question16answer4,
        question16answer5,
        question17answer1,
        question18answer1,
        question19answer1,
        question20answer1,
        question21answer1,
        question22answer1,
        question23answer1,
        question24answer1,
        question25answer1,
        question26answer1,
        question27answer1,
        question28answer1,
        question29answer1,
        question30answer1,
        question30answer2,
        question30answer3,
        question31answer1,
        question32answer1,
        question33answer1,
        question34answer1,
        question35answer1,
        question36answer1,
        question37answer1,
        question38answer1,
        question39answer1,
        question40answer1,
        question41answer1,
        question42answer1,
        question43answer1,
        question44answer1,
        question45answer1,
        question46answer1,
        question47answer1,
        question48answer1,
        date
        ) 
        VALUES (
            '', 
            '$sanitized_question1answer1', 
            '$sanitized_question2answer1',
            '$sanitized_question2answer2',
            '$sanitized_question2answer3',
            '$sanitized_question3answer1', 
            '$sanitized_question4answer1', 
            '$sanitized_question4answer2',
            '$sanitized_question4answer3',
            '$sanitized_question4answer4',
            '$sanitized_question4answer5', 
            '$sanitized_question5answer1', 
            '$sanitized_question5answer2',
            '$sanitized_question5answer3',
            '$sanitized_question6answer1',
            '$sanitized_question7answer1', 
            '$sanitized_question8answer1', 
            '$sanitized_question9answer1',
            '$sanitized_question10answer1',
            '$sanitized_question10answer2',
            '$sanitized_question10answer3', 
            '$sanitized_question10answer4', 
            '$sanitized_question10answer5',
            '$sanitized_question11answer1',
            '$sanitized_question11answer2',
            '$sanitized_question11answer3', 
            '$sanitized_question11answer4', 
            '$sanitized_question11answer5',
            '$sanitized_question12answer1',
            '$sanitized_question13answer1',
            '$sanitized_question14answer1',
            '$sanitized_question14answer2',
            '$sanitized_question14answer3',
            '$sanitized_question14answer4',
            '$sanitized_question14answer5',
            '$sanitized_question15answer1',
            '$sanitized_question15answer2',
            '$sanitized_question15answer3',
            '$sanitized_question15answer4',
            '$sanitized_question15answer5',
            '$sanitized_question16answer1',
            '$sanitized_question16answer2',
            '$sanitized_question16answer3',
            '$sanitized_question16answer4',
            '$sanitized_question16answer5',
            '$sanitized_question17answer1',
            '$sanitized_question18answer1',
            '$sanitized_question19answer1',
            '$sanitized_question20answer1',
            '$sanitized_question21answer1',
            '$sanitized_question22answer1',
            '$sanitized_question23answer1',
            '$sanitized_question24answer1',
            '$sanitized_question25answer1',
            '$sanitized_question26answer1',
            '$sanitized_question27answer1',
            '$sanitized_question28answer1',
            '$sanitized_question29answer1',
            '$sanitized_question30answer1',
            '$sanitized_question30answer2',
            '$sanitized_question30answer3',
            '$sanitized_question31answer1',
            '$sanitized_question32answer1',
            '$sanitized_question33answer1',
            '$sanitized_question34answer1',
            '$sanitized_question35answer1',
            '$sanitized_question36answer1',
            '$sanitized_question37answer1',
            '$sanitized_question38answer1',
            '$sanitized_question39answer1',
            '$sanitized_question40answer1',
            '$sanitized_question41answer1',
            '$sanitized_question42answer1',
            '$sanitized_question43answer1',
            '$sanitized_question44answer1',
            '$sanitized_question45answer1',
            '$sanitized_question46answer1',
            '$sanitized_question47answer1',
            '$sanitized_question48answer1',
            '$date $time'
            )") or die(mysqli_error($conx));
            
            $sql2 = mysqli_query($conx, "INSERT INTO `uploadedchurchfilesbyuser`(id, username, firstandlastname, filename, date, status, part1status, part2status, part3status, part4status, part5status, part6status, part7status) VALUES ('', '', '$sanitized_question2answer1', '', '$date $time', '0%', '0%', '0%', '0%', '0%', '0%', '0%', '0%')") or die(mysqli_error($conx));
    
    $response = 'Success, Your form has been submitted!';
    mysqli_close($conx);
    }
}
?>