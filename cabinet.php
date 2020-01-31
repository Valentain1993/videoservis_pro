<?php
    //var_dump($_COOKIE);
    if ( !isset($_COOKIE['email']) OR trim($_COOKIE['email']) ==''){
        header("Location: index.html");
        exit; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Видеосервис</title>
</head>
<body>
    <header class='header'>

        <div class="header_logo">
            <div class='header_logo-img'></div>
            <h1 class='header_logo_h1'>Видеосервис</h1>
        </div>

        <div class="header_search">
        <form method="POST">
            <label>
                <input type='text' class='header_search-input' placeholder="Поиск...">
            </label>
            <button class='header_search-button'>Найти</button>
        </form>
        </div>
        
        <div class="header_lk">
            <input type='text' id='header_lk-name' name="name">
            <input type='text' id='header_lk-pass' name="pass">
            
            <button id='header_lk-exit'>Выйти</button>
        </div>
    </header>
    
    <main>

        <nav class='main_nav'>
            <div class='main_nav-movie_container'>
                <a href='index.html' class='main_nav-movie'>Фильмы</a>
            </div>
            <div class='main_nav-TVchannels_container'>
                <a href='TVchannels.html' class='main_nav-TVchannels'>Телеканалы</a class='main_nav-movie'>
            </div class='main_nav-movie_container'>
        </nav>
        
        <section class='container-new'>
        <h2 class='container-new_h2'>Новинки</h2>
        <div class='new'>

            <div class='new_mult'>
                <img src='img/new_mult-img.png' class='new_mult-img'>
                <a href='#' class="new_mult-text">Мульт в кино. Выпуск №103. Некогда грустить!</a>
            </div>

            <div class='new_batman'>
                <img src='img/new_batman-img.png' class='new_batman-img'>
                <a href='#' class="new_batman-text">Новый Бэтмен</a>
            </div>

            <div class='new_golliwud'>
                <img src='img/new_golliwud-img.png' class='new_golliwud-img'>
                <a href='#' class="new_golliwud-text">Однажды... в Голливуде</a>
                <div class='new_golliwud-info hide-wrap'>Фильм повествует о череде событий, произошедших в Голливуде в 1969 году, на закате его «золотого века». Известный актер Рик Далтон и его дублер Клифф Бут пытаются найти свое место в стремительно меняющемся мире киноиндустрии.</div>
            </div>
            

            <div class='new_strippers'>
                <img  src='img/new_strippers-img.png'class='new_strippers-img'>
                <a href='#' class="new_strippers-text">Стриптизёрши</a>
            </div>

        </div>
        </section>  
        
        <section class='container-genres'>

            <h2 class='container-genres-h2'>Жанры</h2>

            <div class='genres'>
    
                <a href='#'>
                    <div class='genres_comedies'>
                        <img src='img/genres_comedies-img.png' class='genres_img'>
                        <h3 class='genres_h3'>Комедии</h3>
                    </div>
                </a>

                <a href='#'>
                    <div class='genres_dramas'>
                        <img src='img/genres_dramas-img.png' class='genres_img'>
                        <h3 class='genres_h3'>Драмы</h3 class='genres_h3'>
                    </div>
                
                <a href='#'>
                    <div class='genres_fantasy'>
                        <img src='img/genres_fantasy-img.png' class='genres_img'>
                        <h3 class='genres_h3'>Фантастика</h3 class='genres_h3'>
                    </div>
                </a>

                <a href='#'>
                    <div class='genres_horror'>
                        <img src='img/genres_horror-img.png' class='genres_img'>
                        <h3 class='genres_h3'>Ужасы</h3>
                    </div>
                </a>

            </div>
        </section>

        <section class='comments'>
            <div class='text-comment'></div>
        </section>

        

    </main>

    <footer class='footer'>
        <div class='footer-logo'>
            <img src='img/footer-logo.png'>
        </div>
        <div class='footer-copy'>
            <p class='footer-copy-adres'>426057, Россия, Удмуртская Республика, г. Ижевск, ул. Карла Маркса, 246 (ДК «Металлург»)</p>
            <p class='footer-copy-tel'>+7 (3412) 93-88-61, 43-29-29</p>
            <a href='htc-cs.ru' class="footer-copy-site">htc-cs.ru</a>
        </div>
    </footer>

    <script src='logout.js'></script>
    <script src='script.js'></script>
    <script src='script-wrap.js'></script>
    <script src='ajax.js'></script>
    <script src='get_user_data.js'></script>

</body>

</html>