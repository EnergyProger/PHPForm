<?php include('validation/validator.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taskphp2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
        <?php if(isset($_SESSION['errorMessage'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorMessage'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorMessage']);?>

  <form action="validation/validator.php" method="POST" enctype="multipart/form-data">
  
        <?php if(isset($_SESSION['errorSurname'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorSurname'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorSurname']);?>
        <div class="row">
            <label for="surName">Прізвище</label>
            <input type="text" id="surName" name="surName" placeholder="Ваше прізвище...">
        </div>
       
        <?php if(isset($_SESSION['errorFirstname'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorFirstname'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorFirstname']);?>
        <div class="row">
            <label for="firstName">Ім'я</label>
            <input type="text" id="firstName" name="firstName" placeholder="Ваше ім'я...">
        </div>

         <?php if(isset($_SESSION['errorFathername'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorFathername'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorFathername']);?>
        <div class="row">
            <label for="fatherName">По батькові</label>
            <input type="text" id="fatherName" name="fatherName" placeholder="Вас по батькові">
        </div>

        <?php if(isset($_SESSION['errorFile'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorFile'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorFile']);?>
       <div class="row">
            <label for="photoInpt">Фото</label>
            <input type="file" id="photoInpt" name="photoInpt">
       </div>

     
        <?php if(isset($_SESSION['errorAge'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorAge'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorAge']);?>
       <div class="row">
            <label for="age">Вік</label>
            <input type="text" id="age" name="age" placeholder="Ваш вік...">
       </div>

       <?php if(isset($_SESSION['errorEducation'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorEducation'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorEducation']);?>
       <div class="row">
            <label for="education">Освіта</label>
            <input type="text" id="education" name="education" placeholder="Ваша освіта...">
       </div>
       
       <?php if(isset($_SESSION['errorExperience'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorExperience'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorExperience']);?>
        <div class="row">
            <label for="experience">Стаж роботи</label>
            <input type="text" id="experience" name="experience" placeholder="Ваш стаж роботи...">
        </div>


        <?php if(isset($_SESSION['errorAbout'])):?>
            <div class="error">
                <p><?php echo $_SESSION['errorAbout'];?></p>
            </div>
        <?php endif;?>
        <?php unset($_SESSION['errorAbout']);?>
        <div class="row">
            <label for="about">Коротко про себе</label>
            <textarea id="about" name="about" placeholder="Коротко про себе..." style="height:200px"></textarea>
        </div>
    
        <input type="submit" name="btn-output" value="Відправити">
  
  </form>


</div>
</body>
</html>
