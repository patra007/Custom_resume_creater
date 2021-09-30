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
// edu.php starts here
$year1 = $_POST["txtyear1"];
$year2 = $_POST["txtyear2"];
$year3 = $_POST["txtyear3"];
$year4 = $_POST["txtyear4"];

$deg1 = $_POST["txtdeg1"];
$deg2 = $_POST["txtdeg2"];
$deg3 = $_POST["txtdeg3"];
$deg4 = $_POST["txtdeg4"];

$uni1 = $_POST["txtuni1"];
$uni2 = $_POST["txtuni2"];
$uni3 = $_POST["txtuni3"];
$uni4 = $_POST["txtuni4"];

$perc1 = $_POST["txtperc1"];
$perc2 = $_POST["txtperc2"];
$perc3 = $_POST["txtperc3"];
$perc4 = $_POST["txtperc4"];

// exp.php starts here 
$Cyear1 = $_POST["txtCyear1"];
$Cyear2 = $_POST["txtCyear2"];
$Cyear3 = $_POST["txtCyear3"];


$Cname1 = $_POST["txtCname1"];
$Cname2 = $_POST["txtCname2"];
$Cname3 = $_POST["txtCname3"];


$prof1 = $_POST["txtprof1"];
$prof2 = $_POST["txtprof2"];
$prof3 = $_POST["txtprof3"];


$detl1 = $_POST["txtdetl1"];
$detl2 = $_POST["txtdetl2"];
$detl3 = $_POST["txtdetl3"];

// obj.php starts here 

$certi1 = $_POST["txtcerti1"];
$certi2 = $_POST["txtcerti2"];
$certi3 = $_POST["txtcerti3"];


$int1 = $_POST["txtint1"];
$int2 = $_POST["txtint2"];
$int3 = $_POST["txtint3"];
$int4 = $_POST["txtint3"];


?>






<!-- Html starts from here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/objective.css">
    <title>Objective</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <form action="resume.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">
                           <h3> Ojective</h3>
                        </span>
                        <div class="objt">
                            
                            <div class="objt1">
                                <h4><input type="text"name="txtobjt1" placeholder="1st Sentence" ></h4>
    
                            </div>
                            <div class="objt1">
                                <h4><input type="text"name="txtobjt2" placeholder=" 2nd Sentence" ></h4>
                            </div>
                            <div class="objt1">
                                <h4><input type="text" name="txtobjt3"placeholder=" 3rd Sentence"  ></h4>
                            </div>
                            
                        </div>
                           
                    </div>
                </div>
                                <!-- index.php here -->
            <input type="hidden" name="txtname" value="<?php echo $Name; ?>">
<input type="hidden" name="txtpname" value="<?php echo $Pname; ?>">
<input type="hidden" name="txtemail" value="<?php echo $Email; ?>">
<input type="hidden" name="txtnum" value="<?php echo $Phone; ?>">
<input type="hidden" name="txtlnkdn" value="<?php echo $Linkden; ?>">
<input type="hidden" name="txtadd" value="<?php echo $Address; ?>">
 <!-- f2.php starts here -->
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

<!-- edu.php starts here -->


<input type="hidden" name="txtyear1" value="<?php echo $year1; ?>">
<input type="hidden" name="txtyear2" value="<?php echo $year2; ?>">
<input type="hidden" name="txtyear3" value="<?php echo $year3; ?>">
<input type="hidden" name="txtyear4" value="<?php echo $year4; ?>">

<input type="hidden" name="txtdeg1" value="<?php echo $deg1; ?>">
<input type="hidden" name="txtdeg2" value="<?php echo $deg2; ?>">
<input type="hidden" name="txtdeg3" value="<?php echo $deg3; ?>">
<input type="hidden" name="txtdeg4" value="<?php echo $deg4; ?>">

<input type="hidden" name="txtuni1" value="<?php echo $uni1; ?>">
<input type="hidden" name="txtuni2" value="<?php echo $uni2; ?>">
<input type="hidden" name="txtuni3" value="<?php echo $uni3; ?>">
<input type="hidden" name="txtuni4" value="<?php echo $uni4; ?>">

<input type="hidden" name="txtperc1" value="<?php echo $perc1; ?>">
<input type="hidden" name="txtperc2" value="<?php echo $perc2; ?>">
<input type="hidden" name="txtperc3" value="<?php echo $perc3; ?>">
<input type="hidden" name="txtperc4" value="<?php echo $perc4; ?>">
<!-- exp.php starts here  -->
<input type="hidden" name="txtCyear1" value="<?php echo $Cyear1; ?>">
<input type="hidden" name="txtCyear2" value="<?php echo $Cyear2; ?>">
<input type="hidden" name="txtCyear3" value="<?php echo $Cyear3; ?>">


<input type="hidden" name="txtCname1" value="<?php echo $Cname1; ?>">
<input type="hidden" name="txtCname2" value="<?php echo $Cname2; ?>">
<input type="hidden" name="txtCname3" value="<?php echo $Cname3; ?>">


<input type="hidden" name="txtprof1" value="<?php echo $prof1; ?>">
<input type="hidden" name="txtprof2" value="<?php echo $prof2; ?>">
<input type="hidden" name="txtprof3" value="<?php echo $prof3; ?>">


<input type="hidden" name="txtdetl1" value="<?php echo $detl1; ?>">
<input type="hidden" name="txtdetl2" value="<?php echo $detl2; ?>">
<input type="hidden" name="txtdetl3" value="<?php echo $detl3; ?>">
<!-- obj.php starts here  -->
<input type="hidden" name="txtcerti1" value="<?php echo $certi1; ?>">
<input type="hidden" name="txtcerti2" value="<?php echo $certi2; ?>">
<input type="hidden" name="txtcerti3" value="<?php echo $certi3; ?>">


<input type="hidden" name="txtint1" value="<?php echo $int1; ?>">
<input type="hidden" name="txtint2" value="<?php echo $int2; ?>">
<input type="hidden" name="txtint3" value="<?php echo $int3; ?>">
<input type="hidden" name="txtint4" value="<?php echo $int4; ?>">

<div class="button">
                        
                        <div class="Next">
                            <input type="submit" value="SUBMIT">
                        </div>
                        
                        
                    </div>

            </form>
            
        </div>     
    </div>
</body>
</html>
