<?php
    $name = urldecode($_GET['name']) . '! ';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Получить поздравление</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header>
        <div class="wrapper top_nav">
            <div class="container">
                <div class="logo">
                  logo   
                </div>
                <nav class="top_menu">
                    <ul>
                        <li><a href="">Услуги</a></li>
                        <li><a href="">Сделано</a></li>
                        <li><a href="">Контакты</a></li>
                    </ul>
                </nav>
            </div>        
        </div>
    </header-->
    <div class="firstPage">
        <div class="hb">
            <h1>Хей! <?=$name ?> У тебя День Рождения!</h1>
            <button class="btn btn_action">Получить поздравление</button>
            <div class="cont"> 
                <div class="circleContainer">
                    <div class="circleContainer__one">
                         <div class="circleContainer__two"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let button = document.querySelector('.btn');
            
        button.addEventListener('click',()=>{
            confirm('С Днем Рождения! Счастья, здоровья, всех благ!');
        }); 
            
    </script>    
</body>
</html> 
