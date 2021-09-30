<?php
    $url = './crb/HomePage.png';
?>

<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom_resume_creater</title>

    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./crb/css/style.css">
    <link rel="stylesheet" href="./RL/Registration.php">
    

</head>
<style>
    body{
        background: url('<?php echo $url ?>') no-repeat;
    }
</style>
<body>



    
    
<!-- header section starts -->


<header class="fixed-top py-3">

    <div class="container d-flex align-items-center justify-content-between">

        <div class="logowithname">
            <img id="logo1" src="./crb/bionic.png" alt="bionic.png" height="40px">
            <h1 id="text1" >BIONIC ENGINEERS</h1>
        </div>
        

        <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>

        <nav class="nav">
            <a href="#home" class="active">home</a>
            <a href="./RL/Registration.php">signIn</a>   

        </nav>

    </div>

</header>

<!-- header section end-->
<section class = "home" id="home">
    <div class="content">
        
        <h1 id="bionic">Bionic Resume Builder</h1>
        <br>
        <a href="./RL/Login.php"><button class="button button4">Create My Resume Now</button></a>
    </div>
</section>

<!-- <Home Section Start> -->




</body>
<!-- js file link  -->
<script src="js/script.js"></script>
</script>

</html>