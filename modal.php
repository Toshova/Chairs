<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div id="my_modal" class="modal">
    <div class="modal_content">
        <span class="close_modal_window">×</span>
        <form method="post" action="mail.php" onsubmit="return checkForm(this)">
            <label for="name">Имя:</label>
            <input maxlength="30" type="text" name="name" />

            <label for="phone">Телефон:</label>
            <input maxlength="30" type="text" name="phone" />

            <label for="mail">E-mail:</label>
            <input id="email" maxlength="30" type="text" name="mail" />

            <label for="message">Наименование товара:</label>
            <input maxlength="30" type="text" name="message" />
            <input type="submit" value="Отправить" />

        </form>

        <script>
            function checkForm(form) {

               let name = form.name.value;
               let n = name.match(/^[A-Za-zА-Яа-я ]*[A-Za-zА-Яа-я ]+$/);
                if (!n) {
                    alert("Имя введено неверно, пожалуйста исправьте ошибку");
                    return false;
                }

                let phone = form.phone.value;
                let p = phone.match(/^[0-9+][0-9- ]*[0-9- ]+$/);
                if (!p) {
                    alert("Телефон введен неверно");
                    return false;
                }

                let re = /^[\w-.]+@[\w-]+\.[a-z]{2,4}$/i;
                let myMail = document.getElementById('email').value;
                let valid = re.test(myMail);
            if (!valid) {
                alert("E-mail введен неверно, пожалуйста исправьте ошибку");
                return false;
            }
            return true;
            }
        </script>
    </div>
</div>

</body>
</html>