<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="css/bootstrap.bundle.min.js"></script>
        <link rel="icon" href="book_world.png">
        <link rel="stylesheet" href="book.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
        <title>BooksWorld</title>
        <?php   
            session_start();
            $_SESSION['name']=$_POST['name'];
        ?>
    </head>
    <body style="background-color:black;">
    <nav class="navbar navbar-expand-md fixed-top bg-light">
            <div class="container-fluid">
            <a href="book.html" class="navbar-brand"><img src="book_world.png" style="width:50px;height:50px"></a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar"><span class="navbar-toggler-icon"></span></button>
                <ul class="navbar-nav nav-pills collapse navbar-collapse" id="navbar">
                    <li class="nav-item"><a class="nav-link active" href="home.php"><span class="text-dark">Home</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="fiction.html"><span class="text-dark">Fiction Books</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="comic.html"><span class="text-dark">Comic Books</span></a></li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">Non Fiction Books</button>
                        <ul class="dropdown-menu">
                            <li><a href="historical.html" class="dropdown-item text-dark">Historical Non-Fiction Books</a></li>
                            <li><a href="science_nonfiction.html" class="dropdown-item text-dark">Science Non-Fiction Books</a></li>
                            <li><a href="philosophy_nonfiction.html" class="dropdown-item text-dark">Philosophical Non-Fiction Books</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="biography.html"><span class="text-dark">Biographies/Autobiographies</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="fixed-top" style="left:25%;right:25%;width:600px;text-align:center;">
            <div class="toast show" style="width:100%">
                    <div class="toast-header" style="width:100%;background-color:lightgray;width:100%">
                        <div class="me-auto"></div>
                        <button class="btn-close" data-bs-dismiss="toast" data-bs-target=".toast"></button>
                    </div>
                    <div class="toast-body" style="font-size:25px;width:100%;background-color:lightgray">
                        Hello <?php echo $_SESSION['name']; ?>!Welcome To BooksWorld<br>
                        Let's Make A Trip Of World With Books
                    </div>
            </div>
        </div>
        <section style="border-bottom:5px solid rgb(37, 37, 37);width:100%">
            <div class="s1">
                <div style="padding-top:50px;">You Can Read Some Famous Books Summaries Here...</div>
                <div><img src="book_read.jpg" style="width:500px;height:250px"></div>
            </div>
        </section>
        <section style="border-bottom:5px solid rgb(37, 37, 37);width:100%">
            <div class="s2">
                <div><img src="recommend.jpg" style="width:500px;height:250px"></div>
                <div style="padding-top:50px;">You Can Recommend Us Books That You Know</div>
            </div>
        </section>
        <section style="border-bottom:5px solid rgb(37, 37, 37);padding-bottom:20px;padding-top:20px;width:100%;">
            <div class="text mb-3">
                You Can Have The Followning Types Of Book Summaries
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <center><h5 class="card-title"><b>Comic Books</b></h5></center>
                        </div>
                        <img src="comic.jpeg" style="width:100%;height:280px;">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <center><h5 class="card-title"><b>Fiction Books</b></h5></center>
                        </div>
                        <img src="fiction.jpg" style="width:100%;height:280px;">
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <center><h5 class="card-title"><b>Non Fiction Books</b></h5></center>
                        </div>
                        <img src="nonfiction.jpeg" style="width:100%;height:125px;">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Historical Non-Fiction Books</b></li>
                                <li class="list-group-item"><b>Science Non-Fiction Books</b></li>
                                <li class="list-group-item"><b>Philosophical Non-Fiction Books</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <center><h5 class="card-title"><b>Biographies/Autobiographies</b></h5></center>
                        </div>
                        <img src="biography.jpg" style="width:100%;height:280px">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <footer>
            <section style="background-color: black;">
                <div class="footer">
                    <div class="aboutus">
                        <h3><u>About Us</u></h3>
                        <p>This website mainly gives you reviews of some famous books.<br>
                           You can choose a better book which suits for you by reading reviews here.<br>
                           We also provided e-commerce website links<br>
                           where you can buy books that you like.<br>
                           You can also recommend us books that you know so that<br>
                           we can add much book reviews in our website.</p>
                    </div>
                    <div class="supportus">
                        <h3><u>Contact Us</u></h3>
                            Email:&nbsp;<a href="mailto: booksworld@gmail.com">booksworld@gmail.com</a><br>
                            Follow us on:
                                <a href="" class="text-light"><i class="fa-brands fa-facebook"></i></a>&nbsp;
                                <a href="" class="text-light"><i class="fa-brands fa-twitter"></i></a>&nbsp;
                                <a href="" class="text-light"><i class="fa-brands fa-instagram"></i></a>&nbsp;
                    </div>
                </div>
            </section>
        </footer>
    </body>
</html>
<?php require "details.php"; ?>