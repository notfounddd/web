<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Запара А.Е.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                <div class="col-9">
                    <div class="nav_text">Ну типо тот самый весельчак Санечка, хз надеюсь хватит</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="h2">Крч к нам попал чел, который вышел из академа и он негр, но рофлы выкупает вообщем тип зачетный, мб куданить его фотку закину xd.<br><br> Чтоб скучно на проверке небыло воткну анекдот<br>
                    Для тех, кто не знает, что такое бипки
                    Стоят пассажиры в аэропорту, посадочный досмотр проходят. Дошла очередь до мужика с чемоданом.
                    — Пожалуйста, приготовьте чемодан к осмотру.
                    — Не могу.
                    — Почему?
                    — А у меня там бипки!
                    — А что это?
                    — Ну, отсосёте — покажу!
                    Служба безопасности шутку не поняла, вызвала наряд полиции:
                    — Гражданин, открывайте чемодан.
                    — Но я не могу!
                    — Почему не можете?
                    — Потому что у меня там бипки!
                    — «Бипки»? Что это?
                    — Так отсосите мне, и я покажу!
                    Отобрали чемодан, а открыть никто не может. Повезли мужика в СИЗО. В камере сидельцы расспрашивают:
                    — Братуха, за что тебя?
                    — Да чемодан отказался открывать.
                    — А что там?
                    — Да бипки там.
                    — Какие нахуй «бипки»?
                    — Ну отсосите мне, тогда и расскажу.
                    И вот угодил мужик в лазарет, с побоями да синяками по всему телу, весь перебинтован, еле дышит. Следователи вызвали группу специалистов для вскрытия чемодана. Час, два, три пыхтели. Кое-как разворотили, смотрят — а там бипки.
                </h2>
            </div>
            <div class="col-2">
                <div class="row my_photo"></div>
                <div class="row">
                    <p class="title_photo">Tegra Biks</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="button_js col-6">
                    <button class="button_js button-49" id="my_button" role="button">Fuckme</button>
                    <p id="demo"></p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <form method="POST" action="profile.php">
                <input class="form" type="text" name="title" placeholder="Hadder for post">
                <textarea name="text" cols="30" rows="10" placeholder="Enter text for post ..."></textarea>
                <button type="submit" class="btn_red" name="submin">Save post</button>
            </form>
        </div>
        <script type="text/javascript" src="js/button.js"></script>
</body>

</html>

<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];
    if (!$title || !$main_text) die ("Заполните все поля");
    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}
?>