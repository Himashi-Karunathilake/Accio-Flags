<html>
 
<head>
    <title>Results</title>
    <h1 style="text-align:center;">Results</h1>
</head>
 
<body style="background-color: #e7fa9d; text-align: center;">
 

        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";

            if ($totalCorrect != 5) {echo "Not all your answers are correct. Please try again.";}
             else {echo "RHVtYmxlZG9yZSBpcyBodXJ0ISBVc2UgdGhlIHNwZWxsIGZvciBtaW5vciBpbmp1cmllcyEh";}
            
        ?>
	
	</div>
 
</body>
 
</html>