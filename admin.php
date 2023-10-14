<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة تحذير امني | Add News</title>
    <link rel="stylesheet" href="index.css">
</head>
<style>
    *::-webkit-scrollbar{
   width: 15px;
   height: 5px;
}

*::-webkit-scrollbar-track{
   background-color: silver;
}

*::-webkit-scrollbar-thumb{
   background-color: teal;
}
    body{
        background: url(background.jpg);
        background-size: cover;
    }
    p{
        color: whitesmoke;
    }
    h2{
        color:grey;
    }
    div{
        background-color: whitesmoke;
        box-shadow: black;
    }
    img{
        margin-bottom: 30px;
    }
    input{
         text-align: center;
         color: #141E46;
      }
    .main{
        margin-top: 50px;
    }
</style>
<body>
    <center>
        <div class="main">
             <form action="insert.php" method= "post" enctype="multipart/form-data">
                <h2>: قم بإضافة تحذير امني </h2>
                <img src="background5.jpg" alt="" width="60%" >
                <input type="text" name='name'required placeholder="الفئة المستهدفة" class="box">
                <br>
                <input type="text" name='info1' required placeholder="التفاصيل" class="box">
                <br>
                <input type="text" name='info2' required placeholder=" يستهدف ؟" class="box">
                <br>
                <input type="text" name='info3' required placeholder="المسببات" class="box">
                <br>
                <input type="text" name='info4' required placeholder="تأثير الثغرة" class="box">
                <br>
                <input type="text" name='info5' required placeholder="طرق الوقاية" class="box">
                <br>
                <input type="text" name='info6' required placeholder="التاريخ" class="box">
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">اختيار صورة للخبر </label>
                <button name='upload'>رفع الخبر</button>
                <br><br>
                <a href="news.php">للتحكم بكل الاخبار</a>
                <br> <br>
                <a href="info.php">لعرض الاخبار الأمنية</a>
            </form>
        </div>
        <p>Developer By: KHALID ALFAIFI </p>
    </center>
</body>
</html>