<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <title>History Journal</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="contacts_styles.css">
    </head>

    <body>
        <div class="Header">
            <div class="Logo_Name">
                <img src="Logo.png" class="Logo">
                <div class="Title">
                    Журнал по истории
                </div>
                <div class="Header_burger">
                    <a href="#" class="Burger_trigger">
                        <img src="burger_line.png" alt="" class="Line">
                        <img src="burger_line.png" alt="" class="Line">
                        <img src="burger_line.png" alt="" class="Line">
                    </a>
                </div>
            </div>

            <div class="Menu_wrapper">
                <div class="Menu">
                    <div class="Menu_text">
                        <a href="index.html" class="Menu_item">Главная</a>
                        <a href="authors.html" class="Menu_item">Авторам</a>
                        <a href="archive.html" class="Menu_item">Архив</a>
                        <a href="contacts.php" class="Menu_item">Контакты</a>
                    </div>
                </div>
            </div>

        </div>

        <section class="Contacts">
            <div class="Contacts_headl">
                <h1>Наши контакты</h1>
            </div>
            <div class="Info_Form_wrapper">
                <div class="Contact_info">
                    <div class="Info_txt">
                        <p>Номер телефона: +7 777 777 77 77</p><br>
                        <p>Электронная почта: <a href="" class="Contacts_refs">History_Journal@gmail.com</a></p><br>
                        <div class="Socials">
                            <p class="Socials_txt">Социальные сети: </p>
                            <div class="Contacts_icons">
                                <a href="https://vk.com"><img src="VK.png" alt="" class="Icon"></a>
                                <a href="https://web.telegram.org/a/"><img src="Telegram.png" alt="" class="Icon"></a>
                                <a href="https://www.whatsapp.com"><img src="WhatsApp.png" alt="" class="Icon"></a>
                            </div>
                        </div>
                    </div>
                    <img src="phone.png" alt="" id="Phone">
                </div>
                <div class="Feedback">
                    <p class="Info_txt Feedb">Есть вопросы или хотите оставить отзыв?</p>
                    <form id="Form">
                        <input name="Name" type="text" class="Formstyle" placeholder="Ваше имя" required maxlength="50">
                        <input name="Mail" type="email" class="Formstyle" placeholder="Почта" maxlength="20">
                        <input name="Phone_number" type="tel" class="Formstyle Number" placeholder="Номер телефона" maxlength="10">
                        <textarea name="Comment" type="text" class="Formstyle Commentary" placeholder="Сообщение" required maxlength="256"></textarea>

                        <button id="Send_button"><div class="Info_txt">Отправить</div></button>
                    </form>
                </div>
            </div>

        </section>

        <div class="Footer">
            <img src="Logo.png" alt="" class="Logo_f">
        </div>

        <script src="animation/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="telegram_bot.js"></script>
        <script src="burger_script.js"></script>
    </body>
</html>