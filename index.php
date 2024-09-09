<!DOCTYPE html >
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madziwa Teachers college Online Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

<style>
        html {
            scroll-behavior: smooth;
        }

        body {
           background-image: students.jpg;
            background-size: cover;
            background-attachment: fixed;
        }

        .navbar-header {
            position: fixed;
            top: 0;
            width: 100%;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .home-container {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 1100px;
            color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 40px;
            text-shadow: 2px 2px rgb(100, 100, 100);
            background-color: rgba(0, 0, 0, 0.4);
            margin-top: 50px;
        }

        .home-container > img {
            width: 150px;
        }

        .home-container > h1 {
            font-size: 90px;
            font-weight: bold;
        }

        .home-container > p {
            font-size: 25px;
        }

        .contact-Admin-container {
            width: 1100px;
            color: rgb(255, 255, 255);
            text-shadow: 2px 2px rgb(100, 100, 100);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-top: 64px;
        }

        .contact-container > div {
            padding: 30px;
        }

        .details-container {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 50px;
        }

        .details-container > p {
            margin: 10px;
        }

        .details-container > h6 {
            margin: 25px;
        }

        .social {
            margin: 10px 35px;
        }
        
        .social > i {
            font-size: 25px;
            margin-right: 15px;
        }

        .form-container {
            padding: 50px;
        }

        .study-menu-container {
            display: flex;
            flex-direction: column;
            width: 1200px;
            height: 720px;
            margin-top: 50px;
            color: rgb(255, 255, 255);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .menus {
            display: flex;
            flex-wrap: nowrap;
            overflow: auto;
        }

        .card {
            margin: 19px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar-header">
        <a class="navbar-brand ml-3" href="#">Madziwa Teachers College Login System </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Student Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contact Admin</a>
                </li>

            
        
        </ul>
        <a class="nav-link ml-auto" href="./admin.php" style="color: rgb(255, 255, 255);">Adminstrator</a>
        </div>
    </nav>      

    <div class="main">

<div data-spy="scroll" data-target="#navbar-header" data-offset="0">

    <section id="home">
    <div class="home-container row">
    

</section>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line"> Login to Enter</h4>

            </div>
        </div>
        <span style="color: greenyellow;">
        <form name="Admin"method="post">
            <div class="row">
        <div class="col-md-6">
            <label>Reg NO:</label>
            <input type="text" name="regno" class="form-control" />
            <label>Enter Secret Key:</label>
            <input type="password" name="password"class="form-control" />
            <hr>
            <button type="submit" name="submit"class="btn btn-info">
                <span class="glyphicon glyphicon-user"></span> &nbsp;Logged in
            </button>&nbsp;
        </div>
        </div>
        </form>
        <div class="col-md-6">
            <div class="alert alert-info">

            <strong>UPDATES</strong>
            <marque direction="up"scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
                <ul>
                    
            </ul>
            </marque>
            </div>
        </div>
    
    </div>
</div>

<!-- to reduce processing time javascript have to be at the bottom-->
 <script src="assets/js/jsquery-1.11.1.js"></script>
 <!--#BOOTSTRAP SCRIPTS IN HERE-->
 <script src="assets/js/bootstrap.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            // Add active class to navbar links on click
            $(".navbar-nav a").on("click", function(){
                $(".navbar-nav").find(".active").removeClass("active");
                $(this).parent().addClass("active");
            });
        });
    </script>
</body>
</body>
</html>
    
