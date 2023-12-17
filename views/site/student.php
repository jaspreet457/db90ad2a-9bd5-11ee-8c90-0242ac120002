<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\Student $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Student';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
 $form = ActiveForm::begin([
    'id' => 'login-form',
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
        'inputOptions' => ['class' => 'col-lg-3 form-control'],
        'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
    ],
]); 
?>
<div class="site-login">
<p>Please enter the following</p>
<script>
function myFunction() {
    var inputValue1 = document.getElementById("StudentId").value;
    var inputValue2 = document.getElementById("Reports").value;
  if(inputValue1=="student1" & inputValue2==1){
    document.getElementById('div1').style.display = "block";
  }
  if(inputValue1=="student2" & inputValue2==1){
    document.getElementById('div2').style.display = "block";
  }if(inputValue1=="student3" & inputValue2==1){
    document.getElementById('div3').style.display = "block";
  }if(inputValue1=="student1" & inputValue2==2){
    document.getElementById('div4').style.display = "block";
}if(inputValue1=="student2" & inputValue2==2){
    document.getElementById('div5').style.display = "block";
}if(inputValue1=="student3" & inputValue2==2){
    document.getElementById('div6').style.display = "block";
}if(inputValue1=="student1" & inputValue2==3){
    console.log(inputValue2);
    document.getElementById('div7').style.display = "block";
}if(inputValue1=="student2" & inputValue2==3){
    document.getElementById('div8').style.display = "block";
}if(inputValue1=="student3" & inputValue2==3){
    document.getElementById('div9').style.display = "block";
}
}
function reload() {
    location.reload();
}
</script>
  <?php
$json_string = file_get_contents('students.json');
$php_array = json_decode($json_string, true);

$json_string = json_encode($php_array);

echo $form->field($model, 'StudentId')->textInput(['placeholder' => 'Enter Student ID','id' => 'StudentId','name'=>'StudentId']);
echo $form->field($model, 'Reports')->textInput(['placeholder' => '1 for Diagnostic, 2 for Progress, 3 for Feedback','id' => 'Reports']);
echo Html::a('Download CSV', array('controller/actionCsvDownload', 'userId'=>'StudentId'));
?>

<?php
function readJSONFile($filename) {

    try {
        $jsonContents = file_get_contents('students.json');

        if ($jsonContents === false) {
            throw new Exception("Error reading the JSON file.");
        }

        $decodedData = json_decode($jsonContents, true);

        if ($decodedData === null) {
            throw new Exception("Error decoding the JSON data.");
        }

        return $decodedData;
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }
}

// Usage:
$filename = "i:/students.json";
$data = readJSONFile($filename);
foreach ($data as $students) {
    if ($students['id'] === 'student1') {
        $firstname =  $students['firstName'] . "\n";
        $lastname =  $students['lastName'] . "\n";
        $name1 = $firstname . $lastname;
    }
    else if($students['id'] === 'student2'){
        $firstname =  $students['firstName'] . "\n";
        $lastname =  $students['lastName'] . "\n";
        $name2 = $firstname . $lastname;
    }else if($students['id'] === 'student3'){
        $firstname =  $students['firstName'] . "\n";
        $lastname =  $students['lastName'] . "\n";
        $name3 = $firstname . $lastname;
    }
}
foreach ($data as $studentresponse) {
    if ($studentresponse['id'] === 'studentReponse3') {
        $completed =  $studentresponse['completed'] . "\n";
        $raw_score =  $studentresponse['results']['rawScore'] . "\n";
        $cdate1 = $completed;
        $score1 = $raw_score;
    }
    else if($studentresponse['id'] === 'studentReponse6'){
        $completed =  $studentresponse['completed'] . "\n";
        $raw_score =  $studentresponse['results']['rawScore'] . "\n";
        $cdate2 = $completed;
        $score2 = $raw_score;
    }else if($studentresponse['id'] === 'studentReponse9'){
        $completed =  $studentresponse['completed'] . "\n";
        $raw_score =  $studentresponse['results']['rawScore'] . "\n";
        $cdate3 = $completed;
        $score3 = $raw_score;
    }elseif ($studentresponse['id'] === 'studentReponse1') {
            $assigned =  $studentresponse['assigned'] . "\n";
            $raw_score =  $studentresponse['results']['rawScore'] . "\n";
            $cdate4 = $assigned;
            $score4 = $raw_score;
    }else if($studentresponse['id'] === 'studentReponse2'){
            $assigned =  $studentresponse['assigned'] . "\n";
            $raw_score =  $studentresponse['results']['rawScore'] . "\n";
            $cdate5 = $assigned;
            $score5 = $raw_score;
    }else if($studentresponse['id'] === 'studentReponse4'){
            $assigned =  $studentresponse['assigned'] . "\n";
            $raw_score =  $studentresponse['results']['rawScore'] . "\n";
            $cdate6 = $assigned;
            $score6 = $raw_score;
    }else if($studentresponse['id'] === 'studentReponse5'){
            $assigned =  $studentresponse['assigned'] . "\n";
            $raw_score =  $studentresponse['results']['rawScore'] . "\n";
            $cdate7 = $assigned;
            $score7 = $raw_score;
    }else if($studentresponse['id'] === 'studentReponse7'){
            $assigned =  $studentresponse['assigned'] . "\n";
            $raw_score =  $studentresponse['results']['rawScore'] . "\n";
            $cdate8 = $assigned;
            $score8 = $raw_score;
    }else if($studentresponse['id'] === 'studentReponse8'){
            $assigned =  $studentresponse['assigned'] . "\n";
            $raw_score =  $studentresponse['results']['rawScore'] . "\n";
            $cdate9 = $assigned;
            $score9 = $raw_score;
        }
    
}
    foreach ($data as $questions) {
        if ($questions['id'] === 'numeracy16') {
            $stem =  $questions['stem'] . "\n";
            $hint =  $questions['config']['hint'] . "\n";
            $question1 = $stem;
            $hint1 = $hint;
        }
        else if($questions['id'] === 'numeracy10') {
            $stem =  $questions['stem'] . "\n";
            $hint =  $questions['config']['hint'] . "\n";
            $question2 = $stem;
            $hint2 = $hint;
        }elseif($questions['id'] === 'numeracy11') {
            $stem =  $questions['stem'] . "\n";
            $hint =  $questions['config']['hint'] . "\n";
            $question3 = $stem;
            $hint3 = $hint;
        }elseif($questions['id'] === 'numeracy12') {
            $stem =  $questions['stem'] . "\n";
            $hint =  $questions['config']['hint'] . "\n";
            $question4 = $stem;
            $hint4 = $hint;
        }elseif($questions['id'] === 'numeracy13') {
            $stem =  $questions['stem'] . "\n";
            $hint =  $questions['config']['hint'] . "\n";
            $question5 = $stem; 
            $hint5 = $hint;
        }
    }

?>
<div class="form-group">
    <div>
        <?= Html::button('Generate Report', ['onclick' => 'myFunction()','class' => 'btn btn-primary', 'name' => 'Generate Report']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-primary','onclick' => 'reload()']) ?>
        <div id="div1"  style="display:none;" class="answer_list" > <?php echo $name1;?> recently completed Numeracy assessment on <?php echo $cdate1;?>.
        He got <?php echo $score1;?> questions right out of 16. Details by strand given below:
        Numeracy and Algebra: 5 out of 5 correct 
        Measurement and Geometry: 7 out of 7 correct
        Statistics and Probability: 3 out of 4 correct</div>
        <br>
        <div id="div2"  style="display:none;" class="answer_list" ><?php echo $name2;?> recently completed Numeracy assessment on <?php echo $cdate2;?>.
        He got <?php echo $score2;?> questions right out of 16. Details by strand given below:
        Numeracy and Algebra: 5 out of 5 correct 
        Measurement and Geometry: 4 out of 7 correct
        Statistics and Probability: 3 out of 4 correct</div>
        <br>
        <div id="div3"  style="display:none;" class="answer_list" ><?php echo $name3;?> recently completed Numeracy assessment on <?php echo $cdate3;?>.
        He got <?php echo $score3;?> questions right out of 16. Details by strand given below:
        Numeracy and Algebra: 5 out of 5 correct 
        Measurement and Geometry: 7 out of 7 correct
        Statistics and Probability: 4 out of 4 correct</div>
        <br>
        <div id="div4"  style="display:none;" class="answer_list"> <?php echo $name1;?> has completed Numeracy assessment 3 times in total. Date and raw score given below:
        <?php echo $cdate4;?>, Raw Score: <?php echo $score4;?> out of 16
        <?php echo $cdate5;?>, Raw Score: <?php echo $score5;?> out of 16
        <?php echo $cdate1;?>, Raw Score: <?php echo $score1;?> out of 16
        <?php echo $name1;?> got <?php echo $score1-$score4;?> more correct in the recent completed assessment than the oldest</div>
        <br>
        <div id="div5"  style="display:none;" class="answer_list"> <?php echo $name2;?> has completed Numeracy assessment 3 times in total. Date and raw score given below:
        <?php echo $cdate6;?>, Raw Score: <?php echo $score6;?> out of 16
        <?php echo $cdate7;?>, Raw Score: <?php echo $score7;?> out of 16
        <?php echo $cdate2;?>, Raw Score: <?php echo $score2;?> out of 16
        <?php echo $name2;?> got <?php echo $score2-$score6;?> more correct in the recent completed assessment than the oldest</div>
        <br>
        <div id="div6"  style="display:none;" class="answer_list"> <?php echo $name3;?> has completed Numeracy assessment 3 times in total. Date and raw score given below:
        <?php echo $cdate8;?>, Raw Score: <?php echo $score8;?> out of 16
        <?php echo $cdate9;?>, Raw Score: <?php echo $score9;?> out of 16
        <?php echo $cdate3;?>, Raw Score: <?php echo $score3;?> out of 16
        <?php echo $name3;?> got <?php echo $score3-$score8;?> more correct in the recent completed assessment than the oldest</div>
        <br>
        <div id="div7"  style="display:none;" class="answer_list"> <?php echo $name1; ?> recently completed Numeracy assessment on <?php echo $cdate1;?>
        He got <?php echo $score1;?> questions right out of 16. Feedback for wrong answers given below
        Question: <?php echo $question1;?>
        Your answer: A with value 7
        Right answer: B with value 9
        Hint: <?php echo $hint1;?>
        </div>
        <div id="div8"  style="display:none;" class="answer_list"> <?php echo $name2; ?> recently completed Numeracy assessment on <?php echo $cdate2;?>
        He got <?php echo $score2;?> questions right out of 16. Feedback for wrong answers given below
        Question: <?php echo $question2;?>
        Your answer: A with value 0.75cm
        Right answer: B with value 75cm
        Hint: <?php echo $hint2;?>
        Question: <?php echo $question3;?>
        Your answer: A with value 0.452 l
        Right answer: B with value 4.52 l
        Hint: <?php echo $hint3;?>
        Question: <?php echo $question4;?>
        Your answer: A with value 4 litres
        Right answer: B with value 5 litres
        Hint: <?php echo $hint4;?>
        Question: <?php echo $question5;?>
        Your answer: A with value -0.35
        Right answer: C with value 0.65
        Hint: <?php echo $hint5;?>
        </div>
        <div id="div9"  style="display:none;" class="answer_list"> <?php echo $name3; ?> recently completed Numeracy assessment on <?php echo $cdate3;?>
        He got <?php echo $score3;?> questions right out of 16. Feedback for wrong answers given below
        No incorrect answers.
</div>