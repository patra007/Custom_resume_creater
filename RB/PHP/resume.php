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
$int4 = $_POST["txtint4"];

// objective.php starts here 

$objt1 = $_POST["txtobjt1"];
$objt2= $_POST["txtobjt2"];
$objt3 = $_POST["txtobjt3"];
?>






<!-- Html starts from here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/resume.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="/RB/js/pdf.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>

<body>
<div class="body">
    <div class="container" id="invoice">
        <div class="lside">
            <div class="pinfo">

                <h2> <?php  echo $Name ?>  <br> <span> <?php  echo $Pname ?> </span> </h2>
            </div>
            <!-- personal info -->
            <div class="contact">
                <h3 class="tittle"> Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        <span class="text"> +91 <?php  echo $Phone ?> </span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        <span class="text"> <?php  echo $Email ?> </span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-globe" aria-hidden="true"></i>
                        </span>
                        <span class="text"> <?php  echo $Linkden ?> </span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span>
                        <span class="text"> <?php  echo $Address ?> </span>
                    </li>
                </ul>
            </div>
            <!-- eductaion Details -->
            <div class="contact education">
                <h3 class="tittle"> Education Details</h3>
                <ul>
                    <li>
                        <h5> <?php  echo $year1 ?></h5>
                        <h4><?php  echo $deg1 ?></h4>
                        <h4> <?php  echo $uni1 ?></h4>
                        <h4> <?php  echo $perc1 ?></h4>
                    </li>
                    <li>
                    <h5> <?php  echo $year2 ?></h5>
                        <h4><?php  echo $deg2 ?></h4>
                        <h4> <?php  echo $uni2 ?></h4>
                        <h4> <?php  echo $perc2 ?></h4>
                    </li>
                    <li>
                    <h5> <?php  echo $year3 ?></h5>
                        <h4><?php  echo $deg3 ?></h4>
                        <h4> <?php  echo $uni3 ?></h4>
                        <h4> <?php  echo $perc3 ?></h4>
                    </li>
                    <li>
                    <h5> <?php  echo $year4 ?></h5>
                        <h4><?php  echo $deg4 ?></h4>
                        <h4> <?php  echo $uni4 ?></h4>
                        <h4> <?php  echo $perc4 ?></h4>
                    </li>
                </ul>
            </div>
            <div class="contact language">
                <h3 class="tittle"> languages</h3>
                <ul>
                    <li>
                        <span class="text"> <?php  echo $lang1 ?></span>
                        <span class="percent">
                            <div style="width: <?php  echo $langs1 ?>;" ;>

                            </div>
                        </span>
                    </li>
                    <li>
                        <span class="text"><?php  echo $lang2 ?></span>
                        <span class="percent">
                            <div style="width:<?php  echo $langs2 ?>;">

                            </div>
                        </span>
                    </li>
                    <li>
                        <span class="text"> <?php  echo $lang3 ?></span>
                        <span class="percent">
                            <div style="width: <?php  echo $langs3 ?>;">

                            </div>
                        </span>
                    </li>
                </ul>
            </div>
            <div class="about interest">
                <h3 class="tittle"> Intrest</h3>
                <ul>
                    <li> <?php  echo $int1 ?> </li>
                    <li> <?php  echo $int2 ?> </li>
                    <li> <?php  echo $int3 ?> </li>
                    <li> <?php  echo $int4 ?> </li>
                </ul>
            </div>
        </div>

        <div class="rside">
            <div class="about">
                <h2 class="tittle2">Profile</h2>
                <p>
                <?php  echo $objt1 ?> 
               <br> <?php  echo $objt2 ?> <br><?php  echo $objt3 ?> 
                </p>
            </div>
            <div class="about">
                <h2 class="tittle2">Experience</h2>
                <div class="box">
                    <div class="year_com">
                        <h5><?php  echo $Cyear1 ?></h5>
                        <h5><?php  echo $Cname1 ?></h5>
                    </div>
                    <div class="text">
                        <h4> <?php  echo $prof1 ?></h4>
                        <p> <?php  echo $detl1 ?></p>
                    </div>
                </div>
                <div class="box">
                <div class="year_com">
                        <h5><?php  echo $Cyear2 ?></h5>
                        <h5><?php  echo $Cname2 ?></h5>
                    </div>
                    <div class="text">
                        <h4> <?php  echo $prof2 ?></h4>
                        <p> <?php  echo $detl2 ?></p>
                    </div>
                </div>
                <div class="box">
                <div class="year_com">
                        <h5><?php  echo $Cyear3 ?></h5>
                        <h5><?php  echo $Cname3 ?></h5>
                    </div>
                    <div class="text">
                        <h4> <?php  echo $prof3 ?></h4>
                        <p> <?php  echo $detl3 ?></p>
</div>
                </div>
            </div>
            <div class="about skills">
                <h2 class="tittle2"> Professional Skills</h2>
                <div class="box">
                    <h4><?php  echo $skl1 ?></h4>
                    <div class="percent">
                        <div style="width: <?php  echo $skill1 ?>;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4><?php  echo $skl2 ?></h4>
                    <div class="percent">
                        <div style="width: <?php  echo $skill2 ?>;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4><?php  echo $skl2 ?></h4>
                    <div class="percent">
                        <div style="width: <?php  echo $skill3 ?>;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4><?php  echo $skl3 ?></h4>
                    <div class="percent">
                        <div style="width: <?php  echo $skill4 ?>;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4><?php  echo $skl4 ?></h4>
                    <div class="percent">
                        <div style="width: <?php  echo $skill5 ?>;"></div>
                    </div>
                </div>
            </div>
            <div class="about certi">
                <h2 class="tittle2"> Certificates</h2>
                <div class="certifi">
                   <ul>
                    <li>
                        <h5><?php  echo $certi1 ?></h5>
                    </li>
                    <li>
                        <h5><?php  echo $certi2 ?></h5>
                    </li>
                    <li>
                        <h5><?php  echo $certi3 ?></h5>
                    </li>
                </ul>
                </div>
            </div>
           
                        
                        
                    </div>
        </div>
       
    </div>
    

    </div>
    </div>
    <div class="button">

                    <button class="btn btn-primary" id="download"> Download Pdf</button>
                    <a href="../../RL/welcome.php" id="lg">click here to go to logout page</a>
        
                </div>
</body>

</html>