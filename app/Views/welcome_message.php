<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- STYLES -->
</head>

<style>
    .header{
        display: flex;
        align-items: center;
        width: 90%;
        height: 50px;
        margin:  auto;
        justify-content: space-between;
    }
    .logo{
        float: left;
    }
    nav{
        text-align: right;
    }  
    nav a{
        text-decoration: none;
        letter-spacing: 3px;
        color: white;
    }
    nav ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    nav ul li{
        display: inline-block;
        margin-left: 10px;
    } 
     nav ul li:first-child{
    
        margin-left: 0;
    }
    .get{
        position: absolute;
        top: 50%;
        left:50% ;
        transform: translate(-50%, -50%);
    }
    body{
        background-image: url('https://1.bp.blogspot.com/-iCnFX7eWVjs/XR9NQutHXcI/AAAAAAAAJ9k/ISWH3UXgJF8QJdsV6P9wh3agzOwOF_aYgCLcBGAs/s1600/cat-1285634_1920.png');
    }
    .logo img{
        width: 50px;
        height: 40px;
        border-radius: 50%;
    }

</style>
<body>
<header>
<div class="header">
        <div class="logo">
            <img src="https://cdn.dribbble.com/users/1070235/screenshots/5325568/lightning_sewer.png" alt="logo">
        </div>
 
    <nav>
        <ul>
            <li><a href="/profile">List</a></li>
            <li><a href="/">Home</a></li>
        </ul>
    </nav>
    </div>
</header>

<section class="mt-5">
    <div class="welcome text-center mt-5 text-white">
        <h3 class="mt-5">WELCOME <br> This is a CRUD Exam</h3>
    </div>
    <div class=" get text-center mt-5">
    <a class="btn btn-outline-success btn-info" href="/profile">Get Started</a>
    </div>
  
</section>


</body>
</html>
