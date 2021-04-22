<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hello My Server</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="co-6">
                    <form action="welcome.php" method="POST">

                        <h2>Оюутны бүртгэл</h2>
                            <input type="text" name="Овог" placeholder="Эцгийн нэр">
                            <input type="text" name="Нэр" placeholder="Өөрийн нэр">
                            <input type="text" name="Регистер" placeholder="Регистерийн дугаар">
                            <input type="email" name="Имэйл" placeholder="Имэйл хаяг">
                            <input type="number" name="Утас" placeholder="Утасны дугаар">
                            <textarea type="text" name="Хаяг" placeholder="Оршин суугаа хаяг"></textarea>
                        <hr>
                            Хүйс<br>
                            <input type="radio" name="gender" value="Male">Эрэгтэй<br>
                            <input type="radio" name="gender1" value="Female">Эмэгтэй<br>
                        <hr>
                            Хобби<br>
                            <input type="checkbox" name="hobby1" value="Шатар">Шатар тоглох<br>
                            <input type="checkbox" name="hobby2" value="Ном">Ном унших<br>
                            <input type="checkbox" name="hobby3" value="Код">Код бичих<br>
                        <hr>
                            <input type="Password" name="pass" placeholder="Нууц үг">
                            <button type="submit">Бүртгүүлэх</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
