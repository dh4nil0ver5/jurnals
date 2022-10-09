<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal</title>
    <link rel="stylesheet" href="<?=site_url('/')?>css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
</head>
<body>
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href=""><i class="fa fa-facebook-official" ></i></a></li>
                <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container" id="container">
            <h1><a href="">JURNAL</a></h1> 
            <div class="treeview">
                <div class="dropdown">
                    <button class="dropbtn">HOME</button>
                </div> 
                <div class="dropdown">
                    <button class="dropbtn">TERKINI</button>
                </div> 
                <div class="dropdown">
                    <button class="dropbtn">ARSIP</button>
                </div> 
                <div class="dropdown">
                    <button class="dropbtn">PENGUMUMAN</button>
                </div> 
                <div class="dropdown">
                    <button class="dropbtn">TENTANG KAMI</button>
                    <div class="dropdown-content">
                        <a href="#">Penyerahan Naskah</a> 
                    </div>
                </div>
                <div class="dropdown">
                    <a class="dropbtn" id="login" href="<?=site_url('/login')?>">LOGIN</a>
                </div>
            </div> 
        </div>
    </header>
    <section class="banner">
        <h2>Welcome to Journal</h2>
    </section>
    <section class="about" id="TERKINI">
        <div class="container">
            <h3>ABOUT</h3>
        </div>
    </section>
    <section class="service" id="ARSIP">
        <h3>SERVICE</h3>
    </section>
    <section class="contact" id="PENGUMUMAN">
        <h3>CONTACT</h3>
    </section>
    <section class="contact" id="TENTANG_KAMI">
        <h3>CONTACT</h3>
    </section>
    <section class="footer" id="footer"> 
        <div class="container">
            <div class="col-md-10">
                <p>P-ISSN : 2775-3034  dan E-ISSN : 2775-3026</p>
                <p>JPMI Terindeks Oleh :</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
    <div id="btn_back_to_top" class="btns" onclick="topFunction()">
        <i class="fa fa-arrow-up" aria-hidden="true" style="display: none;"></i>
        <i class="fa fa-arrow-down" aria-hidden="true"></i>
    </div>
    <script src="js/index.js"></script>
</body>
</html>