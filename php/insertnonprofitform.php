<?php
include '../@Database@/config.php';
$errors = array();

if(isset($_POST['SubmitNonProfitFormationForm']))
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
    $sanitized_question15answer1 = mysqli_real_escape_string($conx, $_POST['question15answer1']);
    $sanitized_question16answer1 = mysqli_real_escape_string($conx, $_POST['question16answer1']);
    $sanitized_question17answer1 = mysqli_real_escape_string($conx, $_POST['question17answer1']);
    $sanitized_question18answer1 = mysqli_real_escape_string($conx, $_POST['question18answer1']);
    $sanitized_question19answer1 = mysqli_real_escape_string($conx, $_POST['question19answer1']);
    $sanitized_question20answer1 = mysqli_real_escape_string($conx, $_POST['question20answer1']);
    $sanitized_question21answer1 = mysqli_real_escape_string($conx, $_POST['question21answer1']);
    $sanitized_question21answer2 = mysqli_real_escape_string($conx, $_POST['question21answer2']);
    $sanitized_question21answer3 = mysqli_real_escape_string($conx, $_POST['question21answer3']);
    $sanitized_question21answer4 = mysqli_real_escape_string($conx, $_POST['question21answer4']);
    $sanitized_question21answer5 = mysqli_real_escape_string($conx, $_POST['question21answer5']);
    $sanitized_question22answer1 = mysqli_real_escape_string($conx, $_POST['question22answer1']);
    $sanitized_question22answer2 = mysqli_real_escape_string($conx, $_POST['question22answer2']);
    $sanitized_question22answer3 = mysqli_real_escape_string($conx, $_POST['question22answer3']);
    $sanitized_question22answer4 = mysqli_real_escape_string($conx, $_POST['question22answer4']);
    $sanitized_question22answer5 = mysqli_real_escape_string($conx, $_POST['question22answer5']);
    $sanitized_question23answer1 = mysqli_real_escape_string($conx, $_POST['question23answer1']);
    $sanitized_question23answer2 = mysqli_real_escape_string($conx, $_POST['question23answer2']);
    $sanitized_question23answer3 = mysqli_real_escape_string($conx, $_POST['question23answer3']);
    $sanitized_question23answer4 = mysqli_real_escape_string($conx, $_POST['question23answer4']);
    $sanitized_question23answer5 = mysqli_real_escape_string($conx, $_POST['question23answer5']);
    $sanitized_question24answer1 = mysqli_real_escape_string($conx, $_POST['question24answer1']);
    $sanitized_question25answer1 = mysqli_real_escape_string($conx, $_POST['question25answer1']);
    $sanitized_question26answer1 = mysqli_real_escape_string($conx, $_POST['question26answer1']);
    $sanitized_question27answer1 = mysqli_real_escape_string($conx, $_POST['question27answer1']);
    $sanitized_question28answer1 = mysqli_real_escape_string($conx, $_POST['question28answer1']);
    $sanitized_question29answer1 = mysqli_real_escape_string($conx, $_POST['question29answer1']);
    $sanitized_question30answer1 = mysqli_real_escape_string($conx, $_POST['question30answer1']);
    $sanitized_question31answer1 = mysqli_real_escape_string($conx, $_POST['question31answer1']);
    $sanitized_question32answer1 = mysqli_real_escape_string($conx, $_POST['question32answer1']);
    $sanitized_question33answer1 = mysqli_real_escape_string($conx, $_POST['question33answer1']);
    $sanitized_question34answer1 = mysqli_real_escape_string($conx, $_POST['question34answer1']);
    $sanitized_question35answer1 = mysqli_real_escape_string($conx, $_POST['question35answer1']);
    $sanitized_question36answer1 = mysqli_real_escape_string($conx, $_POST['question36answer1']);
    $sanitized_question37answer1 = mysqli_real_escape_string($conx, $_POST['question37answer1']);
    $sanitized_question37answer2 = mysqli_real_escape_string($conx, $_POST['question37answer2']);
    $sanitized_question37answer3 = mysqli_real_escape_string($conx, $_POST['question37answer3']);
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
    $sanitized_question49answer1 = mysqli_real_escape_string($conx, $_POST['question49answer1']);
    $sanitized_question50answer1 = mysqli_real_escape_string($conx, $_POST['question50answer1']);
    $sanitized_question51answer1 = mysqli_real_escape_string($conx, $_POST['question51answer1']);
    $sanitized_question52answer1 = mysqli_real_escape_string($conx, $_POST['question52answer1']);
    $sanitized_question53answer1 = mysqli_real_escape_string($conx, $_POST['question53answer1']);
    $sanitized_question54answer1 = mysqli_real_escape_string($conx, $_POST['question54answer1']);
    $sanitized_question55answer1 = mysqli_real_escape_string($conx, $_POST['question55answer1']);
    
    date_default_timezone_set('America/New_York');
    $date = date('F d Y');
    $time = date('h:i:s a');
    
    $sql22 = "SELECT * FROM `nonprofitformationform` WHERE question2answer1 = '$sanitized_question2answer1'";
    
    $result22 = $conx->query($sql22);
    while($row22 = $result22->fetch_assoc()) {
      
      $pulledusername  = $row22["question2answer1"];
    }
    
    if($pulledusername == $sanitized_question2answer1)
    {
        $errors['question2answer1'] = "You can only submit this form once, If you wish to view or edit the form you submitted <a href='../Account/Login/'>login</a> and check it out. If you haven't created an account yet go <a href='../Account/Register/'>here</a> and create an account with this exact first and last name ( $sanitized_question2answer1 ).";
    }else {
    
    $sql = mysqli_query($conx, "INSERT INTO `nonprofitformationform`(
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
        question15answer1,
        question16answer1,
        question17answer1,  
        question18answer1,
        question19answer1,
        question20answer1,
        question21answer1,
        question21answer2,
        question21answer3,
        question21answer4,
        question21answer5,
        question22answer1,
        question22answer2,
        question22answer3,
        question22answer4,
        question22answer5,
        question23answer1,
        question23answer2,
        question23answer3,
        question23answer4,
        question23answer5,
        question24answer1,
        question25answer1,
        question26answer1,
        question27answer1,
        question28answer1,
        question29answer1, 
        question30answer1,
        question31answer1,
        question32answer1,
        question33answer1,  
        question34answer1,
        question35answer1,
        question36answer1,
        question37answer1,
        question37answer2,
        question37answer3,
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
        question49answer1,
        question50answer1,
        question51answer1,
        question52answer1,
        question53answer1,
        question54answer1,
        question55answer1, 
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
            '$sanitized_question15answer1',
            '$sanitized_question16answer1',
            '$sanitized_question17answer1', 
            '$sanitized_question18answer1', 
            '$sanitized_question19answer1',
            '$sanitized_question20answer1',
            '$sanitized_question21answer1',
            '$sanitized_question21answer2', 
            '$sanitized_question21answer3', 
            '$sanitized_question21answer4',
            '$sanitized_question21answer5',
            '$sanitized_question22answer1',
            '$sanitized_question22answer2', 
            '$sanitized_question22answer3', 
            '$sanitized_question22answer4',
            '$sanitized_question22answer5',
            '$sanitized_question23answer1',
            '$sanitized_question23answer2', 
            '$sanitized_question23answer3', 
            '$sanitized_question23answer4',
            '$sanitized_question23answer5',
            '$sanitized_question24answer1',
            '$sanitized_question25answer1', 
            '$sanitized_question26answer1', 
            '$sanitized_question27answer1',
            '$sanitized_question28answer1',
            '$sanitized_question29answer1', 
            '$sanitized_question30answer1',
            '$sanitized_question31answer1',
            '$sanitized_question32answer1',
            '$sanitized_question33answer1', 
            '$sanitized_question34answer1', 
            '$sanitized_question35answer1',
            '$sanitized_question36answer1',
            '$sanitized_question37answer1',
            '$sanitized_question37answer2', 
            '$sanitized_question37answer3', 
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
            '$sanitized_question49answer1',
            '$sanitized_question50answer1',
            '$sanitized_question51answer1', 
            '$sanitized_question52answer1', 
            '$sanitized_question53answer1',
            '$sanitized_question54answer1',
            '$sanitized_question55answer1', 
            '$date $time'
            )") or die(mysqli_error($conx));
            
            $sql2 = mysqli_query($conx, "INSERT INTO `uploadedfilesbyuser`(id, username, firstandlastname, filename, date, status, part1status, part2status, part3status, part4status, part5status, part6status) VALUES ('', '', '$sanitized_question2answer1', '', '$date $time', '0%', '0%', '0%', '0%', '0%', '0%', '0%')") or die(mysqli_error($conx));
            
    $response = 'Success, Your form has been submitted!';
    mysqli_close($conx);
    }
}
?>