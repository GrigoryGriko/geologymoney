<?php
usleep(50000);

if (!$_SESSION['USER_LOGIN_IN']) {
    top_guest('Восстановление пароля', 'guest/style/recovery_passwordstyle'); //здесь javascript на смену кнопки

    $year = date("Y"); //Текущий год

    echo '
        <div class="main_background">
            <div class="form_flexbox">
                <div class="left_side">
                    <p class="stroketext_heading_ls">Восстановление пароля</p>

                    <p class="stroketext_1_ls">Введите логин либо E-mail</p> 
                    <p class="type_input"><input type="text" id="Login_or_Email" onfocus="this.className=\'onfocus\'" onblur="this.className=\'onblur\'">

                    <div id="button_login_container_ajax">
                        <button class="button_login" onclick="post_query(\'gform\', \'rec\', \'Login_or_Email\');">
                            Восстановить пароль
                        </button>
                    </div>

                    <a class="recovery_password" href="/login">Авторизоваться</a>
                </div>


                <div class="right_side">
                <p class="text_1">Впервые здесь?</p>
                <img src="../img/guest/login/image_create_account.png" width="180px" height="180">
                <p class="text_2">Регистрация совершенно бесплатна!</p>
                
                <a href="/register"><button class="button_register">Создать аккаунт</button></a>

                <p class="text_3">Приятный бонус после регистрации!</p>
                </div>
            </div>

            <div class="footer_left_main_background">© '.$year.' <a href="/">GeologyMoney</a> - All right Reserved.</div>
        </div>

        <div class="blackout" style="display: none">
            <div class="captcha_window">

                <div class="captcha_image_1">
                        <img class="style_image--captcha" src="../guest/resource/captcha_text.php" width="280px" height="65" alt="капча">
                </div>
                <div class="captcha_image_2">
                    <img class="style_image--captcha" src="../guest/resource/captcha.php" width="280px" height="60" alt="капча">
                </div>

                <p class="type_captcha"><input class="input_captcha" type="number" placeholder="Введите капчу (число от 0 до 5)" id="captcha" onfocus="this.className=\'onfocus\'" onblur="this.className=\'onblur\'"></p>

                <button id="button_captcha" onclick="post_query(\'gform\', \'login\', \'Login_or_Email*+*password*+*captcha*+*captcha_on\'); field_captcha_hide();">Подтвердить</button>

            </div>
        </div>

        ';
    bottom_guest();
}
else if($_SESSION['USER_LOGIN_IN']) {
    top_auth('Главная');
    bottom_auth();
}

else {
    exit('Непредвиденная ошибка');
}

?>