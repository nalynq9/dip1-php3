<!-- Grade
    score >= 80 grade A
    score >= 70 && score < 80 grade B
    score >= 60 && score < 70 grade C
    score >= 50 && score < 60 grade D
    score < 50 grade F
-->

<form method="POST" action="phpapp303.php">
    <label>Score: </label>
    <input type="text" name="score">
    <input type="submit" value="ok">
</form>
<hr />

<?php   
    $score = $_POST['score'];
    $grade;
    if($score >= 80 && $score <= 100){
        $grade = 'A';
        //echo "grade A";
    }elseif($score >= 70 && $score < 80){
        $grade = 'B';
        //echo "grade B";
    }elseif($score >= 60 && $score < 70){
        $grade = 'C';
        //echo "grade C";
    }elseif($score >= 50 && $score < 60){
        $grade = 'D';
        //echo "grade D";
    }elseif($score < 50){
        $grade = 'F';
        //echo "grade F";
    }else{
        $grade = 'ERROR';
        //echo "ERROR";
    }
    echo "<h1 style='color:red'>score = $score , Grade is $grade<//h1>" ;