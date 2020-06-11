<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Chelsea+Market&family=Playfair+Display&family=Rubik:wght@700&display=swap" rel="stylesheet">
    <title>Second Income</title>
</head>
<body>
    <div class="container-navbar nav-height">
        <nav class="navbar navbar-default navbar-fixed-top topnav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand brand-header" href="/">
                        <img src="./Images/logo.png" height="25px" alt="second income" />
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li><a class="active" href='booking.php'>Partner Us</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="consultation-container">
        <div class="container mt30">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="consult-content">
                        <h2>Channel Partner</h2>
                        <p>A CP will be an existing and established business owner looking for diversification. He can become a franchise owner and recruit BPs under him and promote the business within his network. He will be entitled for revenue sharing, incentives and ESOPs in the company.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-form padding-30">
                        <h3>Just Say Hello!</h3>
                        <p>Just us know more about you.</p>
                        <br />
                        <div class="row">
                            <form action="mail.php" method="post" name="contact-form">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="contact-input" name="name" placeholder="First Name" required />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" class="contact-input" name="phone" placeholder="Phone" required />
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" class="contact-input" name="email" placeholder="Email" required />
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="contact-input" placeholder="Message" name="message" required style="height:60px"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" name="submit" class="btn btn-contact-send">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <br />
            <br />
            <br />
            <br />

        </div>
    </div>

    <div class="footer-container" style="padding:55px 0 10px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-left">
                        <h2><a href='/'>SecondIncome</a></h2>
                        <p><i class="fa fa-copyright"></i> Copyrights SecondIncome 2020. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="site-links">
                        <p class="text-center"><a href='/'>Home</a></p>
                        <p class="text-center"><a href='booking.php'>Services</a></p>
                        <p class="text-center"><a href='blog.php'>Blog</a></p>
                        <p class="text-center"><a href='contact.php'>Contact</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-right">
                        <p class="address"><i class="fa fa-phone"></i>&nbsp; <span>90352 00026</span></p>
                        <p class="address" style="min-height:40px"><i class="fa fa-map-marker"></i>&nbsp; <span>#4, Dwarka Mai, 2nd Cross, Avani Sringeri Nagar, BG Road, Bengaluru.560076</span></p>
                        <p class="social-menus">
                            <a href='https://www.fb.com'><i class="fa fa-facebook"></i></a>
                            <a href='https://www.fb.com'><i class="fa fa-instagram"></i></a>
                            <a href='https://www.twitter.com'><i class="fa fa-twitter"></i></a>
                            <a href='https://linkedin.com'><i class="fa fa-linkedin"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="container second-footer">
            <p class="text-center">Designed and developed by <a style="text-decoration:none" target="_blank" href="https://popcon.design">Popcon design studio</a>, 2020.</p>
        </div>
    </div>
</body>
</html>