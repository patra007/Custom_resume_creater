<?php
// index.php
$Name = $_POST["txtname"];
$Pname = $_POST["txtpname"];
$Email = $_POST["txtemail"];
$Phone = $_POST["txtnum"];
$Linkden = $_POST["txtlnkdn"];
$Address = $_POST["txtadd"];

// f2.php



$skl1 = $_POST["txtskl1"];
$skl2 = $_POST["txtskl2"];
$skl3 = $_POST["txtskl3"];
$skl4 = $_POST["txtskl4"];
$skl5 = $_POST["txtskl5"];
$skill1 = $_POST["txtskill1"];
$skill2 = $_POST["txtskill2"];
$skill3 = $_POST["txtskill3"];
$skill4 = $_POST["txtskill4"];
$skill5 = $_POST["txtskill5"];


$lang1 = $_POST["txtlang1"];
$lang2 = $_POST["txtlang2"];
$lang3 = $_POST["txtlang3"];

$langs1 = $_POST["txtlangs1"];
$langs2 = $_POST["txtlangs2"];
$langs3 = $_POST["txtlangs3"];

?>






<!-- Html starts from here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
    <link rel="stylesheet" href="../css/edu.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <form action="exp.php" method="post">
            <div class="user-details">
                <div class="input-box"> <span class="details">
                        EDUCATION DETAILS
                    </span>
                    <div class="edu">
                        <h3>Master Degree Details</h3>
                        <div class="year">
                            <h4><input type="text" name="txtyear1" placeholder="year eg: 2018-2022" ></h4>

                        </div>
                        <div class="degre">
                            <h4><input type="text" name="txtdeg1"placeholder=" Master Degree" ></h4>
                        </div>
                        <div class="education">
                            <h4><input type="text" name="txtuni1"placeholder=" University" ></h4>
                        </div>
                        <div class="cgpa">
                            <h4><input type="text"name="txtperc1" placeholder=" Percentage Obtained" ></h4>
                        </div>
                    </div>
                    <div class="edu">
                        <h3>Bachelor Degree Details</h3>
                        <div class="year">
                            <h4><input type="text" name="txtyear2"placeholder="year eg: 2018-2022" required></h4>

                        </div>
                        <div class="degre">
                            <h4><input type="text"name="txtdeg2" placeholder=" Bachelor Degree" required></h4>
                        </div>
                        <div class="education">
                            <h4><input type="text" name="txtuni2"placeholder=" University" required></h4>
                        </div>
                        <div class="cgpa">
                            <h4><input type="text"name="txtperc2" placeholder=" Percentage Obtained" required></h4>
                        </div>
                    </div>
                    <div class="edu">
                        <h3>PUC Details</h3>
                        <div class="year">
                            <h4><input type="text"name="txtyear3" placeholder="year eg: 2018-2022" required></h4>

                        </div>
                        <div class="degre">
                            <h4><input type="text"name="txtdeg3" placeholder=" PUC" required></h4>
                        </div>
                        <div class="education">
                            <h4><input type="text"name="txtuni3" placeholder=" University" required></h4>
                        </div>
                        <div class="cgpa">
                            <h4><input type="text"name="txtperc3" placeholder=" Percentage Obtained" required></h4>
                        </div>

                    </div>
                    <div class="edu">
                        <h3>School Details</h3>
                        <div class="year">
                            <h4><input type="text"name="txtyear4" placeholder="year eg: 2018-2022" required></h4>

                        </div>
                        <div class="degre">
                            <h4><input type="text"name="txtdeg4" placeholder="  10th" required></h4>
                        </div>
                        <div class="education">
                            <h4><input type="text"name="txtuni4" placeholder=" School Board" required></h4>
                        </div>
                        <div class="cgpa">
                            <h4><input type="text"name="txtperc4" placeholder=" Percentage Obtained" required></h4>
                        </div>
                    </div>

                </div>
                <div class="button">
                    
                    <div class="Next">
                        <input type="submit" value="Next">
                    </div>
                    
                    
                </div>
            </div>

            <input type="hidden" name="txtname" value="<?php echo $Name; ?>">
<input type="hidden" name="txtpname" value="<?php echo $Pname; ?>">
<input type="hidden" name="txtemail" value="<?php echo $Email; ?>">
<input type="hidden" name="txtnum" value="<?php echo $Phone; ?>">
<input type="hidden" name="txtlnkdn" value="<?php echo $Linkden; ?>">
<input type="hidden" name="txtadd" value="<?php echo $Address; ?>">

<input type="hidden" name="txtskl1" value="<?php echo $skl1; ?>">
<input type="hidden" name="txtskl2" value="<?php echo $skl2; ?>">
<input type="hidden" name="txtskl3" value="<?php echo $skl3; ?>">
<input type="hidden" name="txtskl4" value="<?php echo $skl4; ?>">
<input type="hidden" name="txtskl5" value="<?php echo $skl5; ?>">
<input type="hidden" name="txtskill1" value="<?php echo $skill1; ?>">
<input type="hidden" name="txtskill2" value="<?php echo $skill2; ?>">
<input type="hidden" name="txtskill3" value="<?php echo $skill3; ?>">
<input type="hidden" name="txtskill4" value="<?php echo $skill4; ?>">
<input type="hidden" name="txtskill5" value="<?php echo $skill5; ?>">

<input type="hidden" name="txtlang1" value="<?php echo $lang1; ?>">
<input type="hidden" name="txtlang2" value="<?php echo $lang2; ?>">
<input type="hidden" name="txtlang3" value="<?php echo $lang3; ?>">

<input type="hidden" name="txtlangs1" value="<?php echo $langs1; ?>">
<input type="hidden" name="txtlangs2" value="<?php echo $langs2; ?>">
<input type="hidden" name="txtlangs3" value="<?php echo $langs3; ?>">


        </form>

    </div>
</body>

</html>