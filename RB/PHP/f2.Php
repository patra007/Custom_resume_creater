<?php
$Name = $_POST["txtname"];
$Pname = $_POST["txtpname"];
$Email = $_POST["txtemail"];
$Phone = $_POST["txtnum"];
$Linkden = $_POST["txtlnkdn"];
$Address = $_POST["txtadd"];


?>






<!-- Html starts from here -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/f2style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="title">
        </div>
        <div class="content">
            <form action="edu.php" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">
                           <h3> Skills</h3>
                        </span>
                        <div class="list">
                            <div class="skil">


                                <div class="skills">
                                    <h5><input type="text" name="txtskl1" placeholder="Enter your skill 1" required></h5>

                                </div>
                                <div class="stext">
                                    <h4><input type="text"name="txtskill1" placeholder="skill in %.eg: 60%" required></h4>
                                </div>
                            </div>
                            <div class="skil">
                                <div class="skills">
                                    <h5><input type="text"name="txtskl2" placeholder="Enter your skill 2" required></h5>

                                </div>
                                <div class="stext">
                                    <h4><input type="text"name="txtskill2" placeholder=" skill in %.eg: 60%" required></h4>
                                </div>

                            </div>
                            <div class="skil">
                                <div class="skills">
                                    <h5><input type="text"name="txtskl3" placeholder="Enter your skill 3" ></h5>

                                </div>
                                <div class="stext">
                                    <h4><input type="text"name="txtskill3" placeholder=" skill in %.eg: 60% " ></h4>
                                </div>
                            </div>
                            <div class="skil">
                                <div class="skills">
                                    <h5><input type="text"name="txtskl4" placeholder="Enter your skill 4" ></h5>

                                </div>
                                <div class="stext">
                                    <h4><input type="text"name="txtskill4" placeholder=" skill in %.eg: 60%" ></h4>
                                </div>
                            </div>
                            <div class="skil">
                                <div class="skills">
                                    <h5><input type="text"name="txtskl5" placeholder="Enter your skill 5" ></h5>

                                </div>
                                <div class="stext">
                                    <h4><input type="text"name="txtskill5" placeholder=" skill in %.eg: 60%" ></h4>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="input-box">
                        <span class="details">
                           <h3> Languages known</h3>
                        </span>
                        <div class="list">
                            <div class="lang">


                                <div class="lskills">
                                    <h5><input type="text" name="txtlang1" placeholder="Enter your lang 1" required></h5>

                                </div>
                                <div class="ltext">
                                    <h4><input type="text"name="txtlangs1" placeholder="lang in %.eg: 60%" required></h4>
                                </div>
                            </div>
                            <div class="lang">


                                <div class="lskills">
                                    <h5><input type="text" name="txtlang2"placeholder="Enter your lang 1" required></h5>

                                </div>
                                <div class="ltext">
                                    <h4><input type="text"name="txtlangs2" placeholder="lang in %.eg: 60%" required></h4>
                                </div>
                            </div>
                            <div class="lang">


                                <div class="lskills">
                                    <h5><input type="text"name="txtlang3" placeholder="Enter your lang 2" required></h5>

                                </div>
                                <div class="ltext">
                                    <h4><input type="text"name="txtlangs3" placeholder="lang in %.eg: 60%" required></h4>
                                </div>
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
                </form>
        </div>
    </div>
</body>


</html>