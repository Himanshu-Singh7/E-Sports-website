<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
.main{
    width: 600px;
    height: 650px;
    margin: auto;
    border:  1px solid red;
    background: black;
    position: relative;
}
.heading{
    width: auto;
    /* border:  1px solid red; */
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;

}
.content{
    width: auto;
    
    margin-top: 40px;
}

.footer{
    width: 300px;
    height: 200px;
    position: absolute;
    bottom: 0;
    left: 0;
    
}

.social{
    display: inline-block;
    width: 200px;
    height: 200px;
    position: absolute;
    bottom: 0;
    right: 0;
    
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
}
.social a{
    margin-left: 20px;
    font-size: 30px;
    color: white;
}
    </style>
</head>
<body>
    <div class="main">
        <div class="heading">

            <h1 style="color: purple; font-family: cursive;font-size: 50px;">PICASSO GAMING</h1>
        </div>

        <div class="content">
             <h4 style="color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;margin-left: 30px;">Here is your e-mail verification code:</h4>
             <span style="color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;margin-left: 30px;">{{$token}}</span>
             <p  style="color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;margin-left: 20px; font-size: 14px; margin-top: 20px;">If you did not request this action, please change your password immediately, we also recommend to change your e-mail password.</p>
        </div>

        <div class="footer">
            <h4 style="color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;margin-left: 30px;margin-top: 20px; margin-bottom: -1px">Best Regards</h6>
            <h5 style="color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;margin-left: 30px;margin-bottom: 10px;">PICASSO ESPORTS TEAM</h6>
            <a style="color: white; font-family: Verdana, Geneva, Tahoma, sans-serif;margin-left: 30px;" href="">www.picasssogaming.com</a>
        </div>

        <div class="social">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-discord"></i></a>
        </div>

    </div>
</body>
</html>