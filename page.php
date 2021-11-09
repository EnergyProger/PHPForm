<?php include ('validation/validator.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/page.css">
</head>
<body>
<div class="main__block">
    <table class="main__table">
        <tr>
            <th>Прізвище</th>
            <th>Ім'я</th>
            <th>По батькові</th>
            <th>Фото</th>
            <th>Вiк</th>
            <th>Освiта</th>
            <th>Досвiд</th>
            <th>Про себе</th>
        </tr>
        <tr>
            <?php foreach($_SESSION['dataOutput'] as $key=>$value):?>
                <?php if($key == 3):?>
                    <td align="center"><img style="width: 400px;" src="img/<?php echo $value;?>" alt=""></td>
                    <?php else:?>
                <td align="center"><?php echo $value;?></td>
                <?php endif;?>
            <?php endforeach; ?>
           
           
           
        </tr>
        <!--  -->
    </table>
   </div>
</body>
</html>