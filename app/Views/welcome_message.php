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
        <div class="container about-page">
            <div class="isi" style="background: transparent;"> 
                <h3 style="margin: 0 25px 0 0;">Tentang Jurnal ini</h3>
                <h3 style="margin: 25px 0 20px 0;">Jurnal Pengandian Masyarakat Indonesia</h3>
                <p><b>Jurnal Pengabdian Masyarakat Indonesia (JPMI)</b> adalah jurnal nasional yang berisi hasil-hasil kegiatan pengabdian 
                    dan pemberdayaan masyarakat berupa penerapan berbagai bidang ilmu diantaranya pendidikan, teknik, pertanian, sosial humaniora, 
                    komputer dan kesehatan. JPMI terbit dua bulan sekali, yaitu Februari, April, Juni, Agustus, Oktober, dan Desember.</p>
                <p style="margin-top: 2%; margin-bottom: 2%;">JPMI terdaftar di LIPI dengan P-ISSN : <a>2775-3034</a>  dan E-ISSN : <a>2775-3026</a></p>
            </div>
            <div class="info" style="background: transparent;">
                <div class="issn">
                    <h6>ISSN</h6>
                    <p>P-ISSN&nbsp;&nbsp;:&nbsp;&nbsp;<a href="http://issn.pdii.lipi.go.id/issn.cgi?daftar&1612845747&1&&">2775-3034</a><p>
                    <p>e-ISSN&nbsp;&nbsp;:&nbsp;&nbsp;<a href="http://issn.pdii.lipi.go.id/issn.cgi?daftar&1612845747&1&&">2775-3026</a></p>
                </div>
                <hr>
                <div class="submit-here">
                    <img src="<?=site_url('/')?>img/submit.png" />
                </div>
            </div>
        </div>
    </section> 
    <section class="footer" id="footer"> 
        <div class="container" style="">
            <div class="col-md-10 tester" style="">
                <p>P-ISSN : <a>2775-3034</a>  dan E-ISSN : <a>2775-3026</a></p>
                <p>JPMI Terindeks Oleh :</p> 
                <div></div>
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