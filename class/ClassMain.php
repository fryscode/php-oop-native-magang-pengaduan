<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>P2TP2A Karawang</title>
        <link rel="shortcut icon" href="/pengaduan/img/sipesan.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/pengaduan/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/pengaduan/assets/css/all.min.css">
        <link rel="stylesheet" href="/pengaduan/assets/css/style.css">
        <script src="/pengaduan/assets/js/popper.min.js"></script>
        <script src="/pengaduan/assets/js/jquery-3.3.1.min.js"></script>
        <script src="/pengaduan/assets/js/bootstrap.min.js"></script>
        <script src="/pengaduan/assets/js/all.min.js"></script>
        <script src="/pengaduan/assets/js/Chart.bundle.js"></script>


    
    </head>

    <body>
   <?php
   require_once "ClassAkses.php";
  // require_once "ClassPetugas.php";
    class Main{

        function FormLogin(){
            echo '<div class="bg-login">
            <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
          <aside class="col-xs-4">
            <p style="margin-top:70px;"></p>
             <div class="card" style="background:#d3d3d3;">
                <article class="card-body"> 
                <h5 class="card-title mb-4 mt-1 text-center">Silahkan Masuk Log</h5>
            <form action="login.php" method=post>
              <div class="form-group">
                <label>ID Petugas</label>
                <input type="text" name="id_ptgs" class="form-control" placeholder="ID Petugas" required>
                </div>
              <div class="form-group">
               
                <label>Kata Sandi</label>
                <input type="password" name="password" class="form-control" placeholder="********" required>
                </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary col-xs-6 col-md-6">
                Masuk Log</button>
                &nbsp;
                <button type="reset" class="btn btn-primary col-xs-4 col-md-4">Batal</button>
                <br><br><br>
                <a class="float-left" href="index.php">Kembali</a>
                </div>
            </form>
     </article
  </div>
  </div>
  </div>';
        }
        function HalamanUtama(){
            echo '<nav class="navbar fixed-top navbar-expand-md" id="halaman-utama">
            <a class="navbar-brand" href="index.php"><img src="img/sipesan.png" style="width:92px;"href="index.php" style="font-family:kaushan;"> 
            <span style="text-decoration:none;color:white;">SIpesan</span></a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#nv">
              <span class="navbar-toggler-icon"></span>
              
            </button>
            <div class="collapse navbar-collapse" id="nv">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php"><i class="fa fa-home"fa-fw aria-hidden="true"></i> Home</a></li>

                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" id="pengaduan" data-toggle="dropdown" aria-hashpopup="true"
                  aria-expanded="false">Profile</a>  
                  <div class="dropdown-menu nav-item" aria-labelledby="pengaduan">  
                  <a class="dropdown-item" href="#sejarah"><i class="fa fa-book"fa-fw aria-hidden="true"></i> Sejarah</a>
                 
                    
                    </div>
                    </li>

                <li class="nav-item">
                  <a class="nav-link" href="form_pengaduan.php"><i class="fa fa-book"fa-fw aria-hidden="true"></i> Pengaduan</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="proses_pengaduan.php"><i class="fa fa-check-square"fa-fw aria-hidden="true"></i> Proses Pengaduan</a></li>  
                  <li class="nav-item">
                  <a class="nav-link" href="about.php"><i class="fa fa-code"fa-fw aria-hidden="true"></i> Tentang Program</a>
                  </li>  
               
              </ul>
              <ul class="nav navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="login.php"><span class="fa fa-arrow-circle-right"fa-fw aria-hidden="true"></span> Masuk Log</a></li>
              </ul>
            </div>  
          </nav>
          ';
          
        }
        function Isi(){
          //self::HalamanAdmin();
          echo ' 
                <div>
                <br><br><br><br><br>
                <img src="img/tl.png" class="mx-auto d-block" style="width:100%;height:850px;">
                <div>
                <br>
                <hr class="mt-5 mb-5" style="box-shadow:5px 5px 5px #d3d3d3;">
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-4 col-sm-12 mb-3">
                <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
                <img src="img/web1.svg" class="card-img-top mx-auto" style="width:90px;height:100px;">  
                <div class="card-body">
                   <h3 class="card-title text-center">Akses</h3>
                   <hr style="box-shadow:5px 5px 5px #d3d3d3;">
                  <p class="card-text">Masyarakat Langsung Mengakses Website dengan Smartphone maupun PC</p>
                 </div>
              </div>
              </div>
              

              <div class="col-md-4 col-sm-6 mb-3">
              <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
              <img src="img/form1.svg" class="card-img-top mx-auto" style="width:90px;height:100px;">  
              <div class="card-body">
                  
                 <h3 class="card-title text-center">Isi Form</h3>
                 <hr style="box-shadow:5px 5px 5px #d3d3d3;">
                <p class="card-text">Masyarakat Mengisi Form Pengaduan Lengkap, Biodata Data Diri, Dan Bukti
                Lain-Lain Yang Diperlukan</p>
               </div>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
              <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
              <img src="img/admin1.svg" class="card-img-top mx-auto" style="width:90px;height:100px;">  
              <div class="card-body">
                  
                 <h3 class="card-title text-center">On Process</h3>
                 <hr style="box-shadow:5px 5px 5px #d3d3d3;">
                <p class="card-text">Petugas Terdekat Akan Memvalidasi Kebenaran Dengan Terjun Langsung Ke Tempat Perkara</p>
               </div>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
              <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
              <img src="img/tlp1.svg" class="card-img-top mx-auto" style="width:170px;height:100px;"> 
              
              <div class="card-body">
                  
                 <h3 class="card-title text-center">Verifikasi</h3>
                 <hr style="box-shadow:5px 5px 5px #d3d3d3;">
                <p class="card-text">Kemudian Admin Akan Menghubungi Pelaporan Yang Telah Diterima
                Dari Nomor Yang Telah Terdaftar Saat Melakukan Pengaduan dan Telah Tervalidasi oleh Petugas </p>
               </div>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
              <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
              <img src="img/web1.svg" class="card-img-top mx-auto" style="width:90px;height:100px;">  
              <div class="card-body">
                  
                 <h3 class="card-title text-center">Status Proses Pengaduan</h3>
                 <hr style="box-shadow:5px 5px 5px #d3d3d3;">
                <p class="card-text">Pelapor Akses Kembali Website Dan Melakukan Cek Pengaduan Melalui Link <a href="proses_pengaduan.php">DI SINI</a>
                Dengan Memasukan No.Pengaduan Yang Telah Di Dapatkan Saat Isi Form Pengaduan</p>
               </div>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-3">
              <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
              <img src="img/mediasi1.svg" class="card-img-top mx-auto" style="width:90px;height:100px;">  
              <div class="card-body">
                  
                 <h3 class="card-title text-center">Mediasi</h3>
                 <hr style="box-shadow:5px 5px 5px #d3d3d3;">
                <p class="card-text">Setelah Data Pengaduan Telah Diperiksa dan Dikonfirmasi, Petugas Akan Memberikan 4 Pilihan Seperti Pendampingan Spiritual,
                Hukum, Psikis Atau Medis Terkait Kekerasan Yang Dilaporkan</p>
               </div>
            </div>
            </div>

            </div>
            </div>
              
              

                <br>
                <hr class="mt-5 mb-5" style="box-shadow:5px 5px 5px #d3d3d3;">
                
               ';
               echo '<div class="container">
               <div class="row">
                   <div class="col-md-12 col-sm-12">
                       <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;" id="sejarah">
       
                           <div class="mySlides">
                               <img src="img/tl.png" class="card-img-top mx-auto img-thumbnail">
                           </div>
                           <div class="mySlides">
                               <img src="img/bg.jpeg" class="card-img-top mx-auto img-thumbnail">
                           </div>
                           <div class="mySlides">
                               <img src="img/bg.jpeg" class="card-img-top mx-auto img-thumbnail">
                           </div>
       
                           <div>
                               <span class="dot"></span>
                               <span class="dot"></span>
                               <span class="dot"></span>
                           </div>
                           <script>
                               var slideIndex = 0;
                               showSlides();
       
                               function showSlides() {
       
                                   var i;
       
                                   var slides = document.getElementsByClassName("mySlides");
                                   var dots = document.getElementsByClassName("dot");
                                   for (i = 0; i < slides.length; i++) {
                                       slides[i].style.display = "none";
                                   }
                                   slideIndex++;
                                   if (slideIndex > slides.length) {
                                       slideIndex = 1;
                                   }
                                   for (i = 0; i < dots.length; i++) {
                                       dots[i].className = dots[i].className.replace(" active", "");
                                   }
                                   slides[slideIndex - 1].style.display = "block";
                                   dots[slideIndex - 1].className += " active";
                                   setTimeout(showSlides, 5000); // Change image every 2 seconds
                               }
                           </script>
       
       
       
                           <div class="card-body">
                               <h3 class="card-title">Sejarah DP3A Kab. Karawang</h3>
                               <hr>
                               <p class="card-text text-justify">Pada hakekatnya manusia diciptakan menjadi perempuan dan laki-laki agar bisa saling melengkapi guna membangun sinergi dan untuk keberlangsungan umat manusia. Tetapi dalam perkembangannya terjadi dominasi oleh satu pihak, sehingga
                                   menimbulkan diskriminasi antara perempuan dan laki-laki. Secara statistik, pada umumnya kaum perempuan mendapatkan posisi yang kurang menguntungkan dalam berbagai aspek kehidupan.</p>
                               <p class="card-text text-justify">Disini lain, rendahnya kesejahteraan dan perlindungan anak menimbulkan tindak kekerasan, banyaknya anak yang dipekerjakan, dilacurkan, Angka Partisipasi Sekolah (APS) rendah, Angka Kematian Bayi (AKB) tinggi, gizi kurang, gizi
                                   anak kurang yodium, dan 60% anak tidak memiliki akte kelahiran. Situasi ini merupakan hasil akumulasi dari nilai sosial kultural dari suatu masyarakat.</p>
                               <p class="card-text text-justify">Pancasila, UUD 1945, GBHN, dan atau RPJM sebagai Landasan Hukum, menempatkan perempuan dan anak sebagai mahluk ciptaan Tuhan dengan keluhuran harkat dan martabatnya, dan sebagai warga negara memiliki kedudukan, hak, kewajiban,
                                   tanggungjawab, peranan dan kesempatan yang sama dengan laki-laki untuk berperan dalam berbagai bidang kehidupan dan segenap kegiatan pembangunan.</p>
                               <p class="card-text text-justify">Program pemerintah dalam pemberdayaan perempuan telah menginjak tahun ke tigapuluh empat, yaitu dilaksanakan sejak tahun 1978. Untuk mewujudkan keberhasilan pemberdayaan perempuan tersebut, maka pemerintah telah mengembangkan kebijakan
                                   dan strategi melalui tahapan pembangunan lima tahunan (Pelita) yang telah dilakukan sejak tahun 1978 hingga saat ini di sebut era reformasi.</p>
                               <p class="card-text text-justify">Kementerian (nama resmi: Kementerian Negara) adalah lembaga Pemerintah Indonesia yang membidangi urusan tertentu dalam pemerintahan. Kementerian berkedudukan di ibukota negara yaitu Jakarta dan berada di bawah dan bertanggung jawab
                                   kepada presiden.
                                   <p class="card-text text-justify">Landasan hukum kementerian adalah Bab V Pasal 17 UUD 1945 yang menyebutkan bahwa:
                                       <ol>
                                           <li>Presiden dibantu oleh menteri-menteri negara.</li>
                                           <li>Menteri-menteri itu diangkat dan diperhentikan oleh Presiden.</li>
                                           <li>Setiap menteri membidangi urusan tertentu dalam pemerintahan.</li>
                                           <li>Pembentukan, pengubahan, dan pembubaran kementerian negara diatur dalam undang-undang.
                                           </li>
                                       </ol>
                                   </p>
                                   <p class="card-text text-justify">Lebih lanjut, kementerian diatur dalam Undang-Undang Nomor 39 Tahun 2008 tentang Kementerian Negara dan Peraturan Presiden Nomor 47 Tahun 2009 tentang Pembentukan dan Organisasi Kementerian Negara.</p>
                                   <p class="card-text text-justify">Pembentukan kementerian dilakukan paling lama 14 hari kerja sejak presiden mengucapkan sumpah/janji. Urusan pemerintahan yang nomenklatur kementeriannya secara tegas disebutkan dalam UUD 194 harus dibentuk dalam satu kementerian
                                       tersendiri. Untuk kepentingan sinkronisasi dan koordinasi urusan kementerian, presiden juga dapat membentuk kementerian koordinasi. Jumlah seluruh kementerian maksimal 34 kementerian.</p>
                                   <p class="card-text text-justify">Kementerian yang membidangi urusan pemerintahan selain yang nomenklatur kementeriannya secara tegas disebutkan dalam UUD 1945 dapat diubah oleh presiden. Pemisahan, penggabungan, dan pembubaran kementerian tersebut dilakukan
                                       dengan pertimbangan Dewan Perwakilan Rakyat (DPR), kecuali untuk pembubaran kementerian yang menangani urusan agama, hukum, keamanan, dan keuangan harus dengan persetujuan DPR.
                                   </p>
                                   <p class="card-text text-justify">Kementerian Pemberdayaan Perempuan dan Perlindungan Anak termasuk Kementerian yang menangani urusan pemerintahan dalam rangka penajaman, koordinasi, dan sinkronisasi program pemerintah. Susunan organisasi kementerian yang menangani
                                       urusan pemerintahan dalam rangka penajaman, koordinasi, dan sinkronisasi program pemerintah yaitu sebagai berikut:</p>
                                   <p class="card-text text-justify">
                                       <ul>
                                           <li>Pemimpin: Menteri</li>
                                           <li>Pembantu pemimpin: Sekretariat kementerian</li>
                                           <li>Pelaksana: Deputi kementerian</li>
                                           <li>Pengawas: Inspektorat kementerian</li>
                                       </ul>
                                   </p>
                                   <p class="card-text text-justify">Tahapan pembangunan pemberdayaan perempuan adalah sebagai berikut:</p>
                                   <p class="card-text text-justify">
                                       <ol>
                                           <li>Tahun 1978-1983, Menteri Muda Urusan Peranan Wanita (MENMUD UPW), oleh Ny. Lasijah Soetanto.</li>
                                           <li>Tahun 1983-1987, Menteri Negara Urusan Peranan Wanita (MENUPW), oleh Ny. Lasijah Soetanto.</li>
                                           <li>Tahun 1987-1988, Menteri Negara Urusan Peranan Wanita (MENUPW), oleh Ny. A. Sulasikin Moerpratomo.</li>
                                           <li>Tahun 1988-1993, Menteri Negara Urusan Peranan Wanita (MENUPW), oleh Ny. A. Sulasikin Moerpratomo.</li>
                                           <li>Tahun 1993-1998, Menteri Negara Urusan Peranan Wanita (MENUPW), oleh Ny. Mien Soegandi. Dalam GBHN 1993-1998 mengamanatkan bahwa melalui upaya pembangunan, potensi sumberdaya nasional diarahkan menjadi kekuatan ekonomi,
                                               sosial budaya, politik, dan keamanan yang nyata, didukung oleh SDM yang berkualitas, yang memiliki ilmu pengetahuan dan teknologi (iptek) serta kemampuan manajemen. Dengan demikian, aspirasi, peranan, dan kepentingan
                                               SDM termasuk perempuan sebagai penggerak pembangunan nasional, dipadukan kedalam gerak pembangunan bangsa melalui peran aktif dalam seluruh kegiatan pembangunan.</li>
                                           <li>Tahun 1998-1999, Menteri Negara Peningkatan Peranan Wanita (MENPERTA), oleh Ny. Tuty Alawiyah AS.</li>
                                           <li>Tahun 1999-2001, Menteri Negara Pemberdayaan Perempuan (MenegPP), oleh Ny. Khofifah Indar Parawansa.</li>
                                           <li>Tahun 2001-2004, Menteri Negara Pemberdayaan Perempuan (Kementerian PP), oleh Ny. Sri Redjeki Sumarjoto, SH.</li>
                                           <li>Tahun 2004-2009, Menteri Negara Pemberdayaan Perempuan (Kementerian Negara PP), oleh Prof. DR. Meutia Hatta Swasono.</li>
                                           <li>Tahun 2009-2014, Menteri Negara Pemberdayaan Perempuan dan Perlindungan Anak (Kementerian PP dan PA), oleh Linda Amalia Sari Gumelar, S.IP.</li>
                                           <li>Tahun 2014-2019, Menteri Negara Pemberdayaan Perempuan dan Perlindungan Anak (Kementerian PP dan PA ), oleh PROF. DR. YOHANA SUSANA YEMBISE, DIP. APLING, MA.</li>
                                       </ol>
                                   </p>
                                   <p class="card-text text-justify"><i>[Sumber]: <a href="https://www.kemenpppa.go.id/index.php/page/view/3#" target=_blank>Kementrian Pemberdayaan
                                       Perempuan dan Perlindungan Anak
                                   </a> </i></p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>';              
        }
        function Footer(){
          echo' <footer class="page-footer font-small pt-4" style="background:#008b8b;">
          <div class="container mt-auto col-lg-12 col-sm-12">
              <ul class="list-unstyled list-inline text-center">
                  <li class="list-inline-item">
                      <a class="btn-floating btn-fb mx-1">
                          <i class="fab fa-facebook-f"> </i>
                      </a>
                  </li>
                  <li class="list-inline-item">
                      <a class="btn-floating btn-tw mx-1">
                          <i class="fab fa-twitter"> </i>
                      </a>
                  </li>
                  <li class="list-inline-item">
                      <a class="btn-floating btn-gplus mx-1">
                          <i class="fab fa-google-plus-g"> </i>
                      </a>
                  </li>
                  <li class="list-inline-item">
                      <a class="btn-floating btn-li mx-1">
                          <i class="fab fa-linkedin-in"> </i>
                      </a>
                  </li>
                  <li class="list-inline-item">
                      <a class="btn-floating btn-dribbble mx-1">
                          <i class="fab fa-dribbble"> </i>
                      </a>
                  </li>
              </ul>
  
          </div>
          <div class="footer-copyright text-center py-3" style="background:#003f3f; color: blanchedalmond;">
  
              <p class="mb-1" style="font-size: 12px;font-family: signika;"><b>App This Over The Cooperation of DP3A Karawang And STMIK Kharisma Karawang</b></p>
              <p class="mb-1" style="font-size:14px;font-family: kaushan;"><b>&copy; Copyright
                  <script type="text/javascript">
                      document.write(new Date().getFullYear());
                  </script>. Pusat Pelayanan Terpadu Pemberdayaan Perempuan dan Anak (P2TP2A) Kab. Karawang</b></p>
          </div>
      </footer>';
        }
        function HalamanAdmin(){
          //$no=1;
            echo '<nav class="navbar navbar-expand-md" id="halaman-admin">
              <a class="navbar-brand" href="#"><img src="" style="width:70px;"></a>
              <ul class="nav navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="../logout.php"><span class="fa fa-arrow-circle-right"fa-fw aria-hidden="true"></span> Keluar Log</a></li>
              </ul>
              </nav>
              
              
              <nav class="navbar navbar-expand-lg" id="menu-2">
              <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#nv-admin">
              <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="nv-admin">  
              <ul class="navbar-nav" id="mn-admin">
                
              <li class="nav-item">
                <a class="nav-link" href="form_admin.php"><i class="fa fa-home"fa-fw aria-hidden="true"></i> Home</a></li>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="pengaduan" data-toggle="dropdown" aria-hashpopup="true"
                aria-expanded="false">Data Master</a>  
                <div class="dropdown-menu nav-item" aria-labelledby="pengaduan">  
                <a class="dropdown-item" href="lihat_pengaduan.php"><i class="fa fa-book"fa-fw aria-hidden="true"></i> Pengaduan</a>
                <a class="dropdown-item" href="lihat_petugas.php"><i class="fa fa-book"fa-fw aria-hidden="true"></i> Petugas</a>
                <a class="dropdown-item" href="lihat_wilayah.php"><i class="fa fa-book"fa-fw aria-hidden="true"></i> Wilayah</a>  
                  
                  </div>
                  </li>
                  
                  <!-- notifikasi -->
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="notfikasi" aria-hashpopup="true" 
                  aria-expanded="false" href="#"> Notifikasi <span class="badge badge-danger" id="angka"></span> </a>
                  <div class="dropdown-menu nav-item" aria-labeledby="notifikasi">
                  
                  <div class="col-md-6 col-lg-12">
                    <div class="card dropdown-item">
                      <div class="card-body" id="notifikasi">
                      <ul>  
                      <p class="card-text card-title text-justify">Notifikasi</p>
                        
                        </ul>
                      </div>
                    </div>  
                    </div>
                  </div>
                  </li>
                  <!--end--> 
                      
                  <li class="nav-item">
                  <a class="nav-link" href="abouta.php"><i class="fa fa-code"fa-fw aria-hidden="true"></i> Tentang Program</a>
                  </li>
                  <li class="nav-item">
                  <p class="nav-link" style="cursor:pointer;"><i class="fas fa-user-lock" fa-fw aria-hidden="true"></i> Hai '.$_SESSION['grup'].', '.$_SESSION['nm'].'</p></li>
                  </ul>
                  
                  </div>
                  </nav>
              
               ';
               echo "";     
        }

        function HalamanPetugas(){
          $this->koneksi = new Akses;
          $this->koneksi->link;
          //$data = mysqli_query($this->koneksi->link,"select * from pengaduan where validasi = 'Unverified' ");
          //$row = mysqli_num_rows($data);
          echo '<nav class="navbar navbar-expand-md" id="halaman-admin">
              <a class="navbar-brand" href="#"><img src="" style="width:70px;"></a>
              <ul class="nav navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="../logout.php"><span class="fa fa-arrow-circle-right"fa-fw aria-hidden="true"></span> Keluar Log</a></li>
              </ul>
              </nav>
              
              
              <nav class="navbar navbar-expand-lg" id="menu-2">
              <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#nv-admin">
              <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse" id="nv-admin">  
              <ul class="navbar-nav" id="mn-admin">
                
              <li class="nav-item">
                <a class="nav-link" href="form_petugas.php"><i class="fa fa-home"fa-fw aria-hidden="true"></i> Home</a></li>
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="pengaduan" data-toggle="dropdown" aria-hashpopup="true"
                aria-expanded="false">Data Master</a>  
                <div class="dropdown-menu nav-item" aria-labelledby="pengaduan">  
                <a class="dropdown-item" href="lihat_pgdn_ptgs.php"><i class="fa fa-book"fa-fw aria-hidden="true"></i> Pengaduan</a>
                
                  
                  
                  </div>
                  </li>
                  
                  <!-- validasi -->
                  <li class="nav-item dropdown">
                  <a class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" id="notifikasi" aria-hashpopup="true" 
                  aria-expanded="false" href="#"> Notifikasi <span class="badge badge-danger" id="count"></span> </a>
                  <div class="dropdown-menu nav-item"  aria-labeledby="notifikasi">
                  
                  <div class="col-md-6 col-lg-12">
                    <div class="card dropdown-item">
                      <div class="card-body" id="ntf">
                      <ul>  
                      <p class="card-text card-title text-justify">Notifikasi</p>
                        
                        
                        </ul>
                      </div>
                    </div>  
                    </div>

                  </div>
                  </li>
                  <!--end-->

                  

                  <li class="nav-item">
                  <a class="nav-link" href="aboutp.php"><i class="fa fa-code"fa-fw aria-hidden="true"></i> Tentang Program</a>
                  </li>
                  <li class="nav-item">
                  <p class="nav-link" style="cursor:pointer;"><i class="fas fa-user-lock" fa-fw aria-hidden="true"></i> Hai '.$_SESSION['grup'].', '.$_SESSION['nm'].'</p></li>
                  </ul>
                  
                  </div>
                  </nav>
              
               '; 
                            
               /*echo '<!-- validasi -->
               <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="validasi" aria-hashpopup="true" 
               aria-expanded="false" href="#"> Validasi <span class="badge badge-danger"></span> </a>
               <div class="dropdown-menu nav-item" aria-labeledby="validasi">
               
               <div class="col-md-6 col-lg-12">
                 <div class="card dropdown-item">
                   <div class="card-body">
                   <ul>  
                   <p class="card-text card-title text-justify">Validasi</p>
                     <hr>
                     <a href="#">No.Registrasi : TICK07080001</a>
                     <li class="card-text t-1 btn btn-danger">Unverified</li>
                     <hr>
                     <a href="#">No.Registrasi : TICK07080002</a>
                     <li class="card-text t-1 btn btn-success">Verified</li>
                     <hr>
                     </ul>
                   </div>
                 </div>  
                 </div>

               </div>
               </li>
               <!-- end -->';*/
        }
        function TentangProgram(){
           // self::HalamanUtama();
            
            echo '<div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
    
    
    
                        <div class="card-body" style="background:  #404a49;color:blanchedalmond;">
                            <h4 class="card-title">Informasi Tentang Program</h4>
                            <p class="card-title">Aplikasi Sitem Pengaduan Tindak Kekerasan ini merupakan hasil Penelitian Lapangan (Magang) Mahasiswa Informatika Tahun Akademik 2019/2020
                            </p>
                            <hr style="box-shadow:5px 5px 5px #d3d3d3;">
                            <center>
                                <img src=/pengaduan/img/dd2.png class="card-img-top text-center img-responsive img-thumbnail" style="width:150px;height:120px;">
                                <img src=/pengaduan/img/Logo.png class="card-img-top text-center img-responsive img-thumbnail" style="width:150px;height:120px;">
                            </center>
                            <br><br>
    
                            <p class="card-text">Nama Mahasiswa &nbsp;&emsp;&emsp;&emsp; : Ilham Bagus A W (43E57006165024)</p>
                            <p class="card-text">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : Kinar&emsp;&emsp;&emsp;&emsp;&emsp;(43E57006165030)</p>
                            <p class="card-text">Tema Penelitian &nbsp;&emsp;&emsp;&emsp;&emsp;: Aplikasi Sistem Pengaduan Tindak Kekerasan Berbasis Web (Studi Kasus : Dinas Pemberdayaan Perempuan dan Perlindungan &nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Anak
                                (DP3A Karawang)</p>
                            <p class="card-text">Pembimbing Akademik &nbsp;&emsp;: Yessy Yanitasari, S.T., M.Kom</p>
                            <p class="card-text">Pembimbing Teknis&emsp;&emsp;&emsp;: Amid Mulyana, S.E., M.M </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
        }

     function FormTambahAdmin(){
       self::HalamanAdmin();
       $this->koneksi = new Akses;
       $this->koneksi->link;
       $data = mysqli_query($this->koneksi->link,"select max(id) from petugas");
       $dt = mysqli_fetch_array($data);
       
       if ($dt) {
        $nilaikode = substr($dt[0], 6);
        // menjadikan $nilaikode ( int )
        $kode = (int) $nilaikode;
        // setiap $kode di tambah 1
        $kode = $kode + 1;
        $format = "P2TP2A".str_pad($kode, 3, "0", STR_PAD_LEFT);
         } else {
        $format = "P2TP2A001";
         }
      
       echo'<br><br>';
       echo '
          <center>
          <h4 style="font-family:signika;">Tambah Data Petugas Baru</h4>
          <div class="col-md-6 grid-margin">
            <div class="card">
              <div class="card-body">
                <form method="POST" action="simpan_pgs.php">
                      <div class="from-group row">
                        <label class="col-sm-3 col-form-label">ID Petugas</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="id" value="'.$format.'" readonly>
                        <p class="text-left" style="font-size:12px;font-style:italic;color:red">ID Petugas Akan Terisi Otomatis</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" required>
                        </div>
                      </div>
                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                      <select class="form-control" name="jk" required>
                      <option value=""></option>
                      <option value="L">Laki-Laki</option>
                      <option vlaue="P">Perempuan</option>
                      </select>
                      </div>
                    </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">E-mail</label>
                        <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No. Telp</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="telp" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" required>
                        </div>
                      </div>

                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Grup</label>
                      <div class="col-sm-9">
                      <select class="form-control" name="grup" required>
                      <option value=""></option>
                      <option value="petugas">Petugas</option>
                      <option value="admin">Admin</option>
                      </select>
                      </div>
                    </div>
                     
                      <button class="btn btn-primary col-md-2" type="submit">Tambah</button> 
                      <button class="btn btn-danger col-md-2" type="reset">Batal</button>                
                </form>
              </div>
            </div>
          </div>
          <center>';
        
     }
     function FormEditPetugas(){
      $this->koneksi = new Akses;
      $this->koneksi->link;
      self::HalamanAdmin(); 
      $id = base64_decode($_GET['key']);
      $data = mysqli_query($this->koneksi->link,"select * from petugas where id = '$id'");
      $fdata = mysqli_fetch_array($data);
      echo '<center>
          <h4 style="font-family:signika;">Tambah Data Petugas Baru</h4>
          <div class="col-md-6 grid-margin">
            <div class="card">
              <div class="card-body">
                <form method="POST" action="simpan_edit_petugas.php">
                      <div class="from-group row">
                        <label class="col-sm-3 col-form-label">ID Petugas</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="id" value="'.$fdata[0].'" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" value="'.$fdata[1].'" required>
                        </div>
                      </div>
                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-9">
                      <select class="form-control" name="jk" required>
                      <option value=""></option>
                      <option value="L">Laki-Laki</option>
                      <option vlaue="P">Perempuan</option>
                      </select>
                      </div>
                    </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat" value="'.$fdata[3].'" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">E-mail</label>
                        <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="'.$fdata[4].'" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No. Telp</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="telp" value="'.$fdata[5].'" required>
                        </div>
                      </div>
                      

                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Grup</label>
                      <div class="col-sm-9">
                      <select class="form-control" name="grup" required>
                      <option value=""></option>
                      <option value="petugas">Petugas</option>
                      <option value="admin">Admin</option>
                      </select>
                      </div>
                    </div>
                     
                      <button class="btn btn-primary col-md-2" type="submit">Edit</button> 
                      <a class="btn btn-danger col-md-2" href="lihat_petugas.php">Batal</a>                
                </form>
              </div>
            </div>
          </div>
          <center>';
          echo '<br><br><br>';
          self::Footer();
     }
     function FormEditPengaduan(){
      $this->koneksi = new Akses;
      $this->koneksi->link;
      self::HalamanAdmin(); 
      echo '<br><br><br>';
      $id = base64_decode($_GET['key']);
      $data = mysqli_query($this->koneksi->link,"select * from pengaduan where id_pengaduan = '$id'");
      $fdata = mysqli_fetch_array($data);

      echo '<center>
          <h4 style="font-family:signika;">Edit Proses Pengaduan</h4>
          <div class="col-md-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <form method="POST" action="simpan_edit_pengaduan.php">
                      <div class="form-row">
                      <div class="form-group col-md-2">
                        <label class="">ID Pengaduan</label>
                        <input type="text" class="form-control" name="idp" value="'.$fdata['id_pengaduan'].'" readonly>
                        </div>
                      
                      <div class="form-group col-md-2">
                        <label class="">Nama Pelaku</label>
                        <input type="text" class="form-control" name="nama" value="'.$fdata['nm_pelaku'].'" readonly>
                        </div>
            
                     
                      
                      <div class="form-group col-md-2">
                        <label class="">Tanggal Lapor</label>
                        <input type="text" class="form-control" name="tgl" value="'.$fdata['tgl'].'" readonly>
                        </div>
                  
                      <div class="form-group col-md-4">
                      <label class="">Status Proses</label>
                      <select class="form-control" name="status" required>
                      <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                      <option value="Diterima">Diterima</option>
                      <option value="Selesai">Selesai</option>
                      </select>
                      </div>
                    </div>
                     
                      <button class="btn btn-primary col-md-1" type="submit">Edit</button> 
                      <a class="btn btn-danger col-md-1" href="lihat_pengaduan.php">Batal</a>                
                </form>
              </div>
            </div>
          </div>
          <center>';

          echo '<br><br><br>';
          self::Footer();
     }
     
     function FormChangePs(){
      $this->koneksi = new Akses;
      $this->koneksi->link;
     self::HalamanAdmin();
     //$this->ptgs = new Petugas; 
      $id=base64_decode($_GET['key']);
      //$cek = mysqli_query($this->koneksi->link,"SELECT * from petugas where id = '$id' ");
      //$test = mysqli_fetch_array($cek); 
    //  echo $id;
      echo '<center>
      <h4 style="font-family:signika;">Ubah Password</h4>
      <div class="col-md-6 grid-margin">
        <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
          <div class="card-body">
            <form method="POST" action="simpan_edit_ps.php?i='.urlencode(base64_encode($id)).'">
                  
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Masukan Email</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" required>
                    <p class="text-left" style="font-size:11px;font-style:italic;color:red">Masukan Email Pada Saat Pembuatan Akun Petugas</p>
                    
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Kata Sandi Baru</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="passwordbr" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Konfirmasi Kata Sandi</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="passwordcf" required>
                    </div>
                  </div>
                 
                  <button class="btn btn-primary col-md-2" type="submit">Edit</button> 
                  <a class="btn btn-danger col-md-2" href="lihat_petugas.php">Batal</a>                
            </form>
          </div>
        </div>
      </div>
      <center>';
      echo'<br><br><br>';
      
      //self::Footer();
     
     }

     function FormHapusPetugas(){
       echo "<body onload= 'return HapusPetugas()';>";
       $id = base64_decode($_GET['key']);
       echo "<form name=delete method=GET>";
       echo "<input type='hidden' value='$id' name=ptgs>";
       echo "</body>";
     }

     function FormPengaduan(){
      $this->koneksi = new Akses;
      $this->koneksi->link;
      //$sql = mysqli_query($this->koneksi->link,"select * from biodata where nik = '$nik'");
      $data = mysqli_query($this->koneksi->link,"select max(id_pengaduan) from pengaduan");
       $dt = mysqli_fetch_array($data);
       
       if ($dt) {
        $nilaikode = substr($dt[0], 8);
        // menjadikan $nilaikode ( int )
        $kode = (int) $nilaikode;
        // setiap $kode di tambah 1
        $kode = $kode + 1;
        $format = "TICK".date('my').str_pad($kode, 3, "0", STR_PAD_LEFT);
         } else {
        $format = "TICK".date('my')."001";
         }
      
      self::HalamanUtama();
      
       echo'<br><br><br><br><br><br><br>
     
       ';
        echo'<div class="container">
        <div class="row">
            <div class="card col-lg-12" style="box-shadow:5px 5px 5px #d3d3d3;">
                <h3 class="card-title card-text text-center">Form Pengaduan Masyarakat</h3>
                <div class="card-body">
                    <div class="col-md-12 col-lg-12 mb-3">
                        
                    
                                <h5>I. DATA UMUM</h5>
                                <br><br>
                                
                                <!--awal form-->

                                <form id="pgdn" method="POST" action="bio.php">

                                <div class="form-row">
                                <div class="form-group col-md-4">
                                <label class="">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="321512xxxxxxxxxx">
                            </div>

                                <div class="form-group col-md-4">
                                    <label class="">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="">Jenis Kelamin</label>
                                    <select class="form-control" name="jkl" id="jkl" >
                                      <option value="">-- Jenis Kelamin --</option>  
                                      <option value="L">Laki-Laki</option>
                                      <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Alamat (Kecamatan)</label>
                                        <select class="form-control" name="almt"id="almt" >
                                        
                                                <option value="">-- Kecamatan --</option>';

                                                $sql = mysqli_query ($this->koneksi->link,"SELECT * FROM kecamatan ORDER BY nama_wil ASC");
                                                while($fdata = mysqli_fetch_array($sql)) {
                                                  echo "<option value='".$fdata['nama_wil']."'>".$fdata['nama_wil']."</option>";
                                                }
                                           echo '</select>
                                    </div>';

                                    echo '<div class="form-group col-md-4">
                                        <label for="">Kelurahan</label>
                                        <input type="text" class="form-control" name="kel" id="kel" placeholder="contoh: Adiarsa Barat"  >
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="">RT</label>
                                        <input type="text" class="form-control" name="rt" id="rt" placeholder="contoh: 01" >

                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="">RW</label>
                                        <input type="text" class="form-control" name="rw" id="rw" placeholder="contoh: 02">

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Pendidikan</label>
                                        <select class="form-control" name="pddkn" id="pddkn" >
                                                    <option value="">-- Pendidikan --</option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                    <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                    <option value="D1/D2/D3">D1/D2/D3</option>
                                                    <option value="S1/S2">S1/S2</option>
                                                </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="">Umur</label>
                                        <input type="text" class="form-control" name="umr"id="umur" placeholder="contoh : 20" >

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="">No. Telepon</label>
                                        <input type="text" class="form-control" name="notelp" id="telp" placeholder="contoh : 0823xxxxxxxx" >

                                    </div>
                                    <div class="form-group col-md-6">
                                <label class="">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="pkj" placeholder="contoh : Ibu rumah tangga/PNS/dll"  >
                            </div>
                                </div>

                          
                                <br>
                            <h5>II. INFORMAN KASUS</h5>
                                <br>

                                    <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label class="">No.Registrasi</label>
                                    <input type="text" class="form-control" name="idp" value="'.$format.'" readonly>
                                    <p class="text-left" style="font-size:12px;font-style:italic;color:red">Simpan No.Registrasi Untuk Cek Status Proses Laporan Anda</p>
                                </div>

                                    <div class="form-group col-md-4">
                                    <label class="">Pihak Sebagai</label>
                                    <select class="form-control" name="pihak" id="pihak">
                                    <option value="">-- Pihak Sebagai --</option>
                                    <option value="pelapor">Pelapor</option>
                                      <option value="korban">Korban</option>
                                    </select>
                                </div>
                
                                    <div class="form-group col-md-4">
                                    <label class="">Jenis Kasus</label>
                                    <input type="text" class="form-control" name="jnk" id="jnk" placeholder=" contoh: KDRT/Pelecehan/Bullying dll">
                                </div>
                                </div>
                                
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="">Nama Pelaku</label>
                                    <input type="text" class="form-control" name="nmp" id="nmp">
                                </div>

                                <div class="form-group col-md-4">
                                <label class="">Jenis Kelamin</label>
                                <select class="form-control" name="jk" id="jk" >
                                <option value="">-- Jenis Kelamin --</option>  
                                <option value="L">Laki-Laki</option>
                                  <option value="P">Perempuan</option>
                                </select>
                            </div>
                            
                            <div class="form-group col-md-4">
                            <label class="">Umur</label>
                            <input type="text" class="form-control" name="umur" id="umurp" placeholder="contoh: 20" >
                            </div>
                                </div>

                                <div class="form-row">
                                

                                <div class="form-group col-md-6">
                                        <label for="">Pendidikan</label>
                                        <select class="form-control" name="pddk" id="pddk" >
                                                    <option value="">-- Pendidikan --</option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                    <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                    <option value="D1/D2/D3">D1/D2/D3</option>
                                                    <option value="S1/S2">S1/S2</option>
                                                </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label class="">Pekerjaan</label>
                                    <input type="text" class="form-control" name="job" id="job" placeholder="contoh : Ibu rumah tangga/Pegawai Swasta/PNS dll" >
                                </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Alamat (Kecamatan)</label>
                                        <select class="form-control" name="almtp" id="almtp" >
                                        
                                                <option value="">-- Kecamatan --</option>';

                                                $sql = mysqli_query ($this->koneksi->link,"SELECT * FROM kecamatan ORDER BY nama_wil ASC");
                                                while($fdata = mysqli_fetch_array($sql)) {
                                                  echo "<option value='".$fdata['nama_wil']."'>".$fdata['nama_wil']."</option>";
                                                }
                                           echo '</select>
                                    </div>';

                                    echo '<div class="form-group col-md-4">
                                        <label for="">Kelurahan</label>
                                        <input type="text" class="form-control" name="kelp" id="kelp" placeholder="contoh : Adiarsa Barat"  >
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="">RT</label>
                                        <input type="text" class="form-control" name="rtp" id="rtp" placeholder="contoh : 01" >

                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="">RW</label>
                                        <input type="text" class="form-control" name="rwp" id="rwp" placeholder="contoh : 02"  >

                                    </div>
                                </div>

                                <div class="form-row">
                                
                                    <div class="form-group col-md-4">
                                        <label class="">Hubungan Dg Korban</label>
                                        <input type="text" class="form-control" name="hbgn" id="hbgn" placeholder="contoh : Bapak/Ibu/Mantan Suami/Teman dll." >
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label class="">Tanggal</label>
                                        <input type="date" class="form-control" name="tgl" id="tgl">
                                    </div>
                                </div>

                               
                                
                                <input type="hidden" name="validasi" value="Unverified">
                                <input type="hidden" name="status" value="Menunggu Konfirmasi">
                                
                                
                                <button type="submit" class="btn btn-primary" id="lapor">Submit</button>
                                </form>

                          
                            

                        </div>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="card-foorter text-muted">
                            <b><i>Catatan :</i></b> Informasi pribadi Anda tidak akan disebarluaskan dengan cara dan tujuan apapun.        
                            Kami memperoleh informasi pribadi Anda berupa nama lengkap, alamat, nomor telepon, dan profesi saat melakukan pengaduan / pelaporan.
                                    
                        </div>
                    </div>
                   
                </div>
                
            </div>
        </div>
    </div>

    ';
    echo '<script>
    $(document).ready(function(){
      $("#pgdn").submit(function() {
               //   e.preventDefault();
                  var a = $("#nik").val();
                  var b = $("#nama").val();
                  var c = $("#jkl").val();
                  var d = $("#almt").val();
                  var e = $("#kel").val();
                  var f = $("#rt").val();
                  var g = $("#rw").val();
                  var h = $("#pddkn").val();
                  var i = $("#umur").val();
                  var j = $("#telp").val();
                  var z = $("#pkj").val();
                  var k = $("#pihak").val();
                  var l = $("#jnk").val();
                  var m = $("#nmp").val();
                  var n = $("#jk").val();
                  var o = $("#umurp").val();
                  var p = $("#pddk").val();
                  var q = $("#job").val();
                  var r = $("#almtp").val();
                  var s = $("#kelp").val();
                  var t = $("#rtp").val();
                  var u = $("#rwp").val();
                  var v = $("#hbgn").val();
                  var w = $("#tgl").val();
      
      
                  if (a == "") {
                      alert("Nik Harus Di isi");
                      $("#nik").css("background-color", "#FEE");
                      $("#nik").focus();
                      return false;
                  }
                  else {
                    $("#nik").css("background-color", "#ffffff");
                  }
      
                  if (b == "") {
                      alert("Nama Harus di Isi");
                      $("#nama").css("background-color", "#FEE");
                      $("#nama").focus();
                      return false;
                  }
                  else {
                    $("#nama").css("background-color", "#ffffff");
                  }
      
                  if (c == "") {
                      alert("Pilih Jenis Kelamin");
                      $("#jkl").css("background-color", "#FEE");
                      $("#jkl").focus();
                      return false;
                  } 
                  else {
                    $("#jkl").css("background-color", "#ffffff");
                  }
      
                  if ((d == "") && (e == "") && (f == "") && (g == "")) {
                      alert("Pilih Kecamatan lengkap");
                      $("#almt").css("background-color", "#FEE");
                      $("#kel").css("background-color", "#FEE");
                      $("#rt").css("background-color", "#FEE");
                      $("#rw").css("background-color", "#FEE");
                      $("#almt").focus();
                      return false;
                  }
                  else {
                    $("#almt").css("background-color", "#ffffff");
                    $("#kel").css("background-color", "#ffffff");
                    $("#rt").css("background-color", "#ffffff");
                    $("#rw").css("background-color", "#ffffff");
                  }

                  if (h == "") {
                      alert("Pilih Pendidikan");
                      $("#pddkn").css("background-color", "#FEE");
                      $("#pddkn").focus();
                      return false;
                  }
                  else {
                    $("#pddkn").css("background-color", "#ffffff");
                  }
      
                  if (i == "") {
                      alert("Umur Tidak Boleh Kosong");
                      $("#umur").css("background-color", "#FEE");
                      $("#umur").focus();
                      return false;
                  }
                  else {
                    $("#umur").css("background-color", "#ffffff");
                  }

                  if (j == "") {
                      alert("Isi No.telepon");
                      $("#telp").css("background-color", "#FEE");
                      $("#telp").focus();
                      return false;
                  }
                  else {
                    $("#telp").css("background-color", "#ffffff");
                  }

                  if (z == "") {
                      alert("Isi Pekerjaan");
                      $("#pkj").css("background-color", "#FEE");
                      $("#pkj").focus();
                      return false;
                  }
                  else {
                    $("#pkj").css("background-color", "#ffffff");
                  }

                  if (k == "") {
                      alert("Pihak Harus Di Isi");
                      $("#pihak").css("background-color", "#FEE");
                      $("#pihak").focus();
                      return false;
                  }

                  else {
                    $("#pihak").css("background-color", "#ffffff");
                  }

                  if (l == "") {
                      alert("Isi Jenis Kasus");
                      $("#jnk").css("background-color", "#FEE");
                      $("#jnk").focus();
                      return false;
                  }
                  else {
                    $("#jnk").css("background-color", "#ffffff");
                  }
                  if (m == "") {
                      alert("Isi Nama Pelaku");
                      $("#nmp").css("background-color", "#FEE");
                      $("#nmp").focus();
                      return false;
                  }
                  else {
                    $("#nmp").css("background-color", "#ffffff");
                  }

                  if (n == "") {
                      alert("Pilih Jenis Kelamin");
                      $("#jk").css("background-color", "#FEE");
                      $("#jk").focus();
                      return false;
                  }
                  else {
                    $("#jk").css("background-color", "#ffffff");
                  }

                  if (o == "") {
                      alert("Isi Umur Pelaku");
                      $("#umurp").css("background-color", "#FEE");
                      $("#umurp").focus();
                      return false;
                  }
                  else {
                    $("#umurp").css("background-color", "#ffffff");
                  }

                  if (p == "") {
                      alert("Pilih Pendidikan");
                      $("#pddk").css("background-color", "#FEE");
                      $("#pddk").focus();
                      return false;
                  }
                  else {
                    $("#pdk").css("background-color", "#ffffff");
                  }

                  if (q == "") {
                      alert("Isi Pekerjaan Pelaku");
                      $("#job").css("background-color", "#FEE");
                      $("#job").focus();
                      return false;
                  }
                  else {
                    $("#job").css("background-color", "#ffffff");
                  }

                  if ((r == "") && (s == "") && (t == "") && (u == "")) {
                      alert("Pilih Kecamatan lengkap");
                      $("#almtp").css("background-color", "#FEE");
                      $("#kelp").css("background-color", "#FEE");
                      $("#rtp").css("background-color", "#FEE");
                      $("#rwp").css("background-color", "#FEE");
                      $("#almtp").focus();
                      return false;
                  }
                  else {
                    $("#almtp").css("background-color", "#ffffff");
                    $("#kelp").css("background-color", "#ffffff");
                    $("#rtp").css("background-color", "#ffffff");
                    $("#rwp").css("background-color", "#ffffff");
                  }

                  if (v == "") {
                      alert("Isi Hubungan Dg Korban");
                      $("#hbgn").css("background-color", "#FEE");
                      $("#hbgn").focus();
                      return false;
                  }
                  else {
                    $("#hbgn").css("background-color", "#ffffff");
                  }

                  if (w == "") {
                      alert("Lengkapi Tanggal Lapor");
                      $("#tgl").css("background-color", "#FEE");
                      $("#tgl").focus();
                      return false;
                  }
                  else {
                    $("#tgl").css("background-color", "#ffffff");
                  }
                  
                });
                
              });
         
    </script>';
    /*  pattern="[0-9]+"  pattern="[a-zA-Z\s]+"';*/
    
     }

     function FormHapusPengaduan(){
      echo "<body onload= 'return HapusPengaduan()';>";
      $id = base64_decode($_GET['key']);
      echo "<form name=delete method=GET>";
      echo "<input type='hidden' value='$id' name=pgdn>";
      echo "</body>";
     }
     function FormValidasi(){
        self::HalamanPetugas();
        $this->koneksi = new Akses;
      $this->koneksi->link;
      $idv = mysqli_query($this->koneksi->link,"select max(id_verifikasi) from verifikasi");
       $dt = mysqli_fetch_array($idv);
       
       if ($dt) {
        $nilaikode = substr($dt[0], 8);
        // menjadikan $nilaikode ( int )
        $kode = (int) $nilaikode;
        // setiap $kode di tambah 1
        $kode = $kode + 1;
        $format = "VERF".date('my').str_pad($kode, 3, "0", STR_PAD_LEFT);
         } else {
        $format = "VERF".date('my')."001";
         }
         $tanggal = date('Y-m-d H:i:s');
         //echo $tanggal;
        $petugas = $_SESSION['id_ptgs'];
        
        echo'<br><br>';
       $id = base64_decode($_GET['id']);
       $nik = base64_decode($_GET['nik']);
       $data = mysqli_query($this->koneksi->link,"SELECT biodata.nama, biodata.alamat,biodata.no_telp,
       pengaduan.tgl,pengaduan.jenis_kasus FROM pengaduan,biodata where pengaduan.id_pengaduan = '$id' and biodata.nik ='$nik'");
       $fdata = mysqli_fetch_array($data);
       
       echo '<div class="container">
       <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
             <div class="card-header bg-success text-white">
            <h3 class="card-title card-text text-center">Validasi Laporan</h3>
            </div>
           
            <div class="card-body">
            <form method="POST" action="simpan_validasi.php?id='.base64_encode($id).'&nik='.base64_encode($nik).'">

            <div class="form-row">
            <div class="form-group col-md-2">
                <label class="">Nama Korban / Pelapor</label>
                <input class="form-control" value="'.$fdata['nama'].'" name="nm" readonly>
            </div>

            <div class="form-group col-md-4">
                <label class="">Alamat</label>
                <input class="form-control" type="text" value="'.$fdata['alamat'].'" name="almt" readonly>
            </div>

            <div class="form-group col-md-2">
                <label class="">No.Telepon</label>
                <input class="form-control" name="tlp" value="'.$fdata['no_telp'].'" readonly>
            </div>

            <div class="form-group col-md-2">
            <label class="">Jenis Kasus</label>
            <input class="form-control" name="tlp" value="'.$fdata['jenis_kasus'].'"readonly>
        </div>

        <div class="form-group col-md-2">
            <label class="">Tanggal Pelaporan</label>
            <input class="form-control" name="tgl" value="'.$fdata['tgl'].'"readonly>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-3">
        <label for="">Jenis Kekerasan</label>
        <select class="form-control" name="vjenis" required>
                    <option value="">-- Jenis Kekerasan --</option>
                    <option value="Fisik">Fisik</option>
                    <option value="Psikis">Psikis</option>
                    <option value="Seksual">Seksual</option>
                    <option value="Eksploitasi">Eksploitasi</option>
                    <option value="Penelantaran">Penelantaran</option>
                    
                </select>
    </div>
        
   
       <div class="form-group col-md-2">
          <label for="">Verifikasi Wilayah</label>
          <select class="form-control" name="vkec" required>                              
          <option value="">-- Kecamatan --</option>';
          $sql = mysqli_query ($this->koneksi->link,"SELECT * FROM kecamatan ORDER BY nama_wil ASC");
          while($fdata = mysqli_fetch_array($sql)) {
          echo "<option value='".$fdata['id_kec']."'>".$fdata['nama_wil']."</option>";
      }
        echo '</select>
            </div>';

        echo '
        </div>
                      <input type="hidden" value="'.$petugas.'" name="lptgs">
                      <input type="hidden" value="'.$tanggal.'" name="vtgl">
                      <input type="hidden" value="'.$format.'" name="vid">

                        <button class="btn btn-primary" type="submit">Verifikasi Laporan</button>
                        <a class="btn btn-danger" href="laporan_palsu.php?id='.base64_encode($id).'&nik='.base64_encode($nik).'">Laporan Tidak Valid</a>
                    </form>
            </div>
            </div>
       </div> <br>';

        //$riwayat = mysqli_query($this->koneksi->link,"SELECT biodata.nik,biodata.nama,biodata.jk,biodata.alamat,biodata.email,biodata.no_telp,
        //pengaduan.validasi,pengaduan.id_pengaduan from biodata,pengaduan where pengaduan.id_pengaduan='$id' and biodata.nik='$nik'");
         $histori = mysqli_query($this->koneksi->link,"SELECT biodata.nama, pengaduan.id_pengaduan,pengaduan.nik,pengaduan.validasi,pengaduan.status
         from biodata, pengaduan where biodata.nik='$nik' and pengaduan.nik='$nik'");
         $row = mysqli_num_rows($histori);
  
       echo'<div class="container">
       <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
             <div class="card-header bg-primary text-white">
            <h3 class="card-title card-text text-center">Riwayat Laporan</h3>
            </div>
    
            <div class="card-body">
            <div class="table-responsive pt-3">
            <table class="table table-hover table-bordered table-sm">
               <thead class="text-center" style="background:#bebebe;color:white;">
                   <th>No</th>
                   <th>ID</th>
                   <th>NIK</th>
                   <th>Nama</th>
                   <th>Validasi</th>
                   <th>Status</th>
                  
                   
               </thead>';
             $no = 1;
             while($fdata = mysqli_fetch_array($histori)){
               echo '<tbody>
                     <tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$fdata['id_pengaduan'].'</td>';
                    echo '<td>'.$fdata['nik'].'</td>';
                    echo '<td>'.$fdata['nama'].'</td>';
                    echo '<td>'.$fdata['validasi'].'</td>';
                    echo '<td>'.$fdata['status'].'</td>';
                    echo '</tr>
               </tbody>';
               $no++;
             }
            echo '</table>
            <p>Pernah Melakukan Pengaduan Sebanyak : '.$row.' Kali</p>
            <a href="cetak_histori.php?id='.base64_encode($id).'&nik='.base64_encode($nik).'" class="btn btn-primary" target=_blank>Cetak History</a> 
            </div></div></div></div>
             
            </div>
        
            </div>
       </div>';
       
     }
     function ProsesPengaduanAdmin(){
      self::HalamanAdmin();
      $this->koneksi = new Akses;
      $this->koneksi->link;
      echo'<br><br>';
     $id = base64_decode($_GET['id']);
     $nik = base64_decode($_GET['nik']); 
     $data = mysqli_query($this->koneksi->link,"SELECT biodata.nama, biodata.alamat,biodata.no_telp,pengaduan.nm_pelaku,pengaduan.status,
     pengaduan.tgl,pengaduan.jenis_kasus FROM pengaduan,biodata where pengaduan.id_pengaduan = '$id' and biodata.nik ='$nik'");
     $fdata = mysqli_fetch_array($data);
     
     echo '<div class="container">
     <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
           <div class="card-header bg-success text-white">
          <h3 class="card-title card-text text-center">Proses Laporan</h3>
          </div>
         
          <div class="card-body">
          <form method="POST" action="simpan_status_laporan.php?id='.$id.'&nik='.$nik.'">

          <div class="form-row">
          <div class="form-group col-md-2">
              <label class="">Nama Korban / Pelapor</label>
              <input class="form-control" value="'.$fdata['nama'].'" name="nm" readonly>
          </div>

          <div class="form-group col-md-2">
          <label class="">Nama Pelaku</label>
          <input class="form-control" value="'.$fdata['nm_pelaku'].'" name="nm" readonly>
        </div>
        
        <div class="form-group col-md-4">
              <label class="">Alamat Pelapor</label>
              <input class="form-control" type="text" value="'.$fdata['alamat'].'" name="almt" readonly>
          </div>

          <div class="form-group col-md-4">
              <label class="">No.Telepon</label>
              <input class="form-control" name="tlp" value="'.$fdata['no_telp'].'" readonly>
          </div>
      </div>

      <div class="form-row">
      <div class="form-group col-md-2">
              <label class="">Jenis Kasus</label>
              <input class="form-control" name="tlp" value="'.$fdata['jenis_kasus'].'"readonly>
          </div>
          <div class="form-group col-md-2">
              <label class="">Tanggal Pelaporan</label>
              <input class="form-control" name="tgl" value="'.$fdata['tgl'].'"readonly>
          </div>
          <div class="form-group col-md-4">
          <label class="">Status Proses</label>
          <select class="form-control" name="status" required>
          <option value=""></option>
          <option value="Menunggu Konfirmasi">Menuggu Konfirmasi</option>
          <option value="Diterima">Diterima</option>
          <option value="Selesai">Selesai</option>
          </select>
          </div>
      </div>

                      <button class="btn btn-primary" type="submit">Edit Status Laporan</button>
                      
                  </form>
          </div>
          </div>
     </div>';
     }

     function ProsesPengaduan(){
       self::HalamanUtama();
       echo'<br><br><br><br><br><br><br>';
       echo '<div class="container">
       <div class="row">
           <div class="card col-lg-12" style="box-shadow:5px 5px 5px #d3d3d3;">
               <h3 class="card-title card-text text-center">Status Proses Pengaduan</h3>
               <div class="card-body">
                   <div class="col-md-12 col-lg-12 mb-3">
                       <form action="cek_pengaduan.php" method="GET">
                           <div class="form group">
                               <label class="">Masukan No.Registrasi</label>
                               <input type="text" class="form-control" placeholder="Masukan No.Registrasi" name="cari" required>
                               <br><br>
                               <div class="justify-content-item">
                                   <button class="btn btn-success">Cek Status</button>
                                   <button class="btn btn-danger">Batal</button>
                               </div>

                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>';
     }

     function Chart(){
      $this->koneksi = new Akses;
      $this->koneksi->link; 
      $sql = mysqli_query($this->koneksi->link,"select * from verifikasi where jenis='Fisik'");
      $datapsikis= mysqli_query($this->koneksi->link,"select * from verifikasi where jenis='Psikis'");
      $dataseksual = mysqli_query($this->koneksi->link,"select * from verifikasi where jenis='Seksual'");
      $datas = mysqli_query($this->koneksi->link,"select * from verifikasi where jenis='Eksploitasi'");
      $datap = mysqli_query($this->koneksi->link,"select * from verifikasi where jenis='Penelantaran'");
      $fsql=mysqli_num_rows($sql);
      $fdatapsikis=mysqli_num_rows($datapsikis);
      $fdataseksual =mysqli_num_rows($dataseksual);
      $fdatas=mysqli_num_rows($datas);
      $fdatap=mysqli_num_rows($datap);
      //echo $fsql;
      echo '<br><br><br>
       ';
        echo  '  <div class="container">
                      <div class="row">
                      <div class="col-sm-6 item-content-center">
                      <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;">
                      <div class="card-body">        
                      <canvas id="myChart" height:40vh width:50vw></canvas> 
                       </div>
                    </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="card" style="box-shadow:5px 5px 5px #d3d3d3;"> 
                      <div class="card-body">
                         <h4>Data Pengaduan</h4>

                          <div class="d-flex d-flex-row justify-content-center">   
                              <div class="p-2 text-muted">Fisik
                              <h5>'.$fsql.'</h5></div>
                              <div class="p-2 text-muted">Psikis
                              <h5>'.$fdatapsikis.'</h5></div>
                              <div class="p-2 text-muted">Seksual
                              <h5>'.$fdataseksual.'</h5></div>
                              <div class="p-2 text-muted">Eksploitasi
                              <h5>'.$fdatas.'</h5></div>
                              <div class="p-2 text-muted">Penelantaran
                              <h5>'.$fdatap.'</h5></div>
                            </div>
                            <hr>

                            </div>
                    </div>
                    </div>
   
       </div>
       </div>
      
        ';

       
        
        echo "<script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: ['Fisik', 'Psikis', 'Seksual','Eksploitasi','Penelantaran'],
              datasets: [{
                  label: '',
                  data: [$fsql,$fdatapsikis,$fdataseksual,$fdatas,$fdatap],
                  backgroundColor: [
                      'rgba(255, 99, 132,1)',
                      'rgba(54, 162, 235,1)',
                      'rgba(255, 206, 86,1)',
                      'rgba(75, 192, 192,1)',
                      'rgba(153, 102, 255,1)',
                  
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      
                  ],
                  borderWidth: 1
              }]
          },
          options: {
            title : {
              display : true,
              text : 'Pengaduan Tindak Kekerasan',
              scales: {
                  yAxes: [{
                      ticks: {
                          
                          stepSize: 1
                          
                      }
                  }]
                }
              }
          }
        });
            
        </script>
";


        


     }
    
      function FormTambahWilayah(){

        $this->koneksi = new Akses;
        $this->koneksi->link;
        $idk = mysqli_query($this->koneksi->link,"select max(id_kel) from kelurahan");
        $dt = mysqli_fetch_array($idk);
        
        if ($idk) {
         $nilai = substr($dt[0], 9);
         // menjadikan $nilaikode ( int )
         $kode = (int) $nilai;
         // setiap $kode di tambah 1
         $kode = $kode + 1;
         $formatk = "3215312".str_pad($kode, 3, "0", STR_PAD_LEFT);
          } else {
         $formatk = "3215312"."001";
          }

         
         

        $idw = mysqli_query($this->koneksi->link,"select max(id_kec) from kecamatan");
        $dt = mysqli_fetch_array($idw);
        
        if ($dt) {
         $nilaikode = substr($dt[0], 3);
         // menjadikan $nilaikode ( int )
         $kode = (int) $nilaikode;
         // setiap $kode di tambah 1
         $kode = $kode + 1;
         $format = "321".str_pad($kode, 3, "0", STR_PAD_LEFT);
          } else {
         $format = "321"."001";
          }

          

          echo '<div class="container">
                <div class="card">
                  <div class="card-header bg-success">
                    <h5 class="card-title text-center text-white">Tambah Wilayah</h5>
                  </div>

                  <div class="card-body">
                    
                  <form method="POST" action="simpan_wilayah.php">
                      
                  <div class="form-row">
                        <div class="form-group col-md-2">
                          <label class="">ID Kecamatan</label>
                          <input type="text" class="form-control" name="idkec" value="'.$format.'" readonly>
                        </div>

                        <div class="form-group col-md-2">
                          <label class="">Nama Kecamatan</label>
                          <input type="text" class="form-control" name="kec">
                        </div>

                        <div class="form-group col-md-2">
                        <label class="">ID Kelurahan</label>
                        <input type="text" class="form-control" value="'.$formatk.'" name="idkel" readonly>
                      </div>

                      <div class="form-group col-md-2">
                        <label class="">Nama Kelurahan</label>
                        <input type="text" class="form-control" name="kel">
                      </div>
                        
                      </div>

                      <button class="btn btn-primary">Tambah Wilayah</button>&nbsp;&nbsp;&nbsp;
                      <a href="lihat_wilayah.php" class="btn btn-danger">Batal</a>
                    </form>
                  
                  </div>
                </div>
          
          </div>';
      }

      function FormEditWilayah(){

        $this->koneksi = new Akses;
        $this->koneksi->link;
        $idkec = base64_decode($_GET['key']);
        $idkel = base64_decode($_GET['kel']);


        $edit = mysqli_query($this->koneksi->link,"SELECT kecamatan.id_kec,kecamatan.nama_wil,kelurahan.id_kel,kelurahan.nama from kecamatan,kelurahan 
        where kecamatan.id_kec='$idkec' and kelurahan.id_kel='$idkel'");
        $fedit = mysqli_fetch_array($edit);
        echo '<div class="container">
        <div class="card">
          <div class="card-header bg-success">
            <h5 class="card-title text-center text-white">Edit Wilayah</h5>
          </div>

          <div class="card-body">
            
          <form method="POST" action="simpan_edit_wilayah.php">
              
          <div class="form-row">
                <div class="form-group col-md-2">
                  <label class="">ID Kecamatan</label>
                  <input type="text" class="form-control" name="idkec" value="'.$fedit['id_kec'].'" readonly>
                </div>

                <div class="form-group col-md-2">
                  <label class="">Nama Kecamatan</label>
                  <input type="text" class="form-control" value="'.$fedit['nama_wil'].'" name="kec">
                </div>

                <div class="form-group col-md-2">
                <label class="">ID Kelurahan</label>
                <input type="text" class="form-control" value="'.$fedit['id_kel'].'" name="idkel" readonly>
              </div>

              <div class="form-group col-md-2">
                <label class="">Nama Kelurahan</label>
                <input type="text" class="form-control" value="'.$fedit['nama'].'" name="kel">
              </div>
                
              </div>

              <button class="btn btn-primary">Edit Wilayah</button>&nbsp;&nbsp;&nbsp;
              <a href="lihat_wilayah.php" class="btn btn-danger">Batal</a>
            </form>
          
          </div>
        </div>
  
  </div>';
      }

      function FormHapusWilayah(){
        echo "<body onload= 'return HapusWilayah()';>";
        $id = base64_decode($_GET['key']);
        echo "<form name=delete method=GET>";
        echo "<input type='hidden' value='$id' name=wil>";
        echo "</body>";
      }

      function CetakPengaduan(){

        require_once '../assets/pdf/fpdf.php';

        $this->koneksi = new Akses;
        $this->koneksi->link;
//require_once 'assets/pdf/dash.php';


$pdf = new FPDF('L','mm','A3');
$pdf->AddPage();


$pdf->SetTitle('Data Pengaduan');
$pdf->Cell(35);
//$pdf->Image('img/dd2.png',50,6,40);
$pdf->Cell(50);
$pdf->SetFont('Times','B',14);
$pdf->Cell(30,7,'',0,1,'C');
$pdf->Cell(120);
$pdf->Cell(150,7,'PUSAT PELAYANAN TERPADU',0,1,'C');
$pdf->Cell(10);
$pdf->Cell(365,7,'PEMBERDAYAAN PEREMPUAN DAN ANAK',0,1,'C');
$pdf->SetFont('Times','',12);
$pdf->Cell(385,5,'KABUPATEN KARAWANG',0,1,'C');
$pdf->SetX(140); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(210,7,'Sekretariat : Komplek Islamic Center Al-Jihad - Telp.(0267) 8451683 - Karawang','0','1');

$pdf->SetY(50);
$pdf->SetX(135); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(210,7,'LAPORAN KEKERASAN YANG DITANGANI P2TP2A KABUPATEN KARAWANG ','0','1');



$pdf->SetLineWidth(1);
$pdf->Line(10,45,410,45);
$pdf->SetLineWidth(0);
$pdf->Line(10,46,410,46);

$pdf->SetY(10);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(25,6,'Printed On: '.date('d-m-Y'),0);
//$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'R');
//$pdf->AliasNbPages();

$pdf->Cell(10,40,'',0,1,'C');
$pdf->SetY(65);
$pdf->SetX(15); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(10,6,'No',1,0,'C');
$pdf->Cell(25,6,'TGL',1,0,'C');
$pdf->Cell(10,6,'P/L',1,0,'C');
$pdf->Cell(20,6,'UMUR',1,0,'C');
$pdf->Cell(65,6,'ALAMAT',1,0,'C');
$pdf->Cell(30,6,'PENDIDIKAN',1,0,'C');
$pdf->Cell(30,6,'PEKERJAAN',1,0,'C');
$pdf->Cell(45,6,'JENIS KASUS',1,0,'C');
$pdf->Cell(35,6,'NAMA PELAKU',1,0,'C');
$pdf->Cell(10,6,'P/L',1,0,'C');
$pdf->Cell(20,6,'UMUR',1,0,'C');
$pdf->Cell(30,6,'PENDIDIKAN',1,0,'C');
$pdf->Cell(30,6,'PEKERJAAN',1,0,'C');
$pdf->Cell(25,6,'STATUS',1,0,'C');

$from = $_POST['from'];
$end = $_POST['end'];
$pdf->SetFont('Times','',10);

$sql = mysqli_query($this->koneksi->link,"SELECT pengaduan.tgl,biodata.jk,biodata.umur,biodata.alamat,biodata.pekerjaan,biodata.pendidikan,pengaduan.jenis_kasus,
pengaduan.nm_pelaku,pengaduan.jk,pengaduan.umur,pengaduan.pendidikan,pengaduan.pekerjaan,pengaduan.hubungan from biodata,pengaduan where biodata.nik=pengaduan.nik and (tgl between '$from' and '$end')");
$no = 1;
while($data = mysqli_fetch_array($sql)){
    $pdf->Ln();
    $pdf->SetX(15); 
    $pdf->Cell(10,6,$no,1,0,'C');
    $pdf->Cell(25,6,$data['tgl'],1,0,'C');
    $pdf->Cell(10,6,$data['jk'],1,0,'C');
    $pdf->Cell(20,6,$data['umur'].' '.'Tahun',1,0,'C');
    $pdf->Cell(65,6,$data['alamat'],1,0,'C');
    $pdf->Cell(30,6,$data['pendidikan'],1,0,'C');
    $pdf->Cell(30,6,$data['pekerjaan'],1,0,'C');
    $pdf->Cell(45,6,$data['jenis_kasus'],1,0,'C');
    $pdf->Cell(35,6,$data['nm_pelaku'],1,0,'C');
    $pdf->Cell(10,6,$data['jk'],1,0,'C');
    $pdf->Cell(20,6,$data['umur'].' '.'Tahun',1,0,'C');
    $pdf->Cell(30,6,$data['pendidikan'],1,0,'C');
    $pdf->Cell(30,6,$data['pekerjaan'],1,0,'C');
    $pdf->Cell(25,6,$data['hubungan'],1,0,'C');
    $no++;  
}

$pdf->SetY(120);
$pdf->SetX(100); 
$sql = mysqli_query($con,"select petugas.nama_ptgs from verifikasi,petugas where verifikasi.id=petugas.id and id_verifikasi='VERF1119001'");
$data = mysqli_fetch_array($sql);
//$pdf->Cell(0,10,'(.......................................................)',0,0,'C');
$pdf->SetY(130);
$pdf->SetX(110);
$pdf->SetFont('Times','B',12);
$pdf->SetX(135);
//$pdf->Cell(0,7,'Ilham Bagus A.W',0,0);


//$pdf->Line(20, 25, 198, 25);
//$pdf->SetLineWidth(0.8);
//$pdf->SetDash(6, 6);

ob_end_clean();
$pdf->Output();
      }

      function CetakValidasi(){

        $this->koneksi = new Akses;
        $this->koneksi->link;
        require_once '../assets/pdf/fpdf.php';

 // $con = mysqli_connect("localhost","root","kinar!@#","p2tp2a");

$nik = base64_decode($_GET['nik']);
$id = base64_decode($_GET['id']);
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetTitle('Riwayat Laporan');

$pdf->Cell(100);
$pdf->Image('../img/p2tp2a.jpeg',7,7,32,32);
$pdf->Cell(100);
$pdf->SetFont('Times','B',14);
$pdf->Cell(30,7,'',0,1,'C');
$pdf->SetY(10);
$pdf->Cell(50);
$pdf->Cell(90,7,'PUSAT PELAYANAN TERPADU',0,1,'C');
$pdf->Cell(10);
$pdf->Cell(165,7,'PEMBERDAYAAN PEREMPUAN DAN ANAK',0,1,'C');
$pdf->SetFont('Times','',12);
$pdf->Cell(185,5,'KABUPATEN KARAWANG',0,1,'C');
$pdf->SetX(38); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(210,7,'Sekretariat : Komplek Islamic Center Al-Jihad - Telp.(0267) 8451683 - Karawang','0','1');


$pdf->SetLineWidth(1);
$pdf->Line(10,40,198,40);
$pdf->SetLineWidth(0);
$pdf->Line(10,41,198,41);


$pdf->SetY(15);
$pdf->SetFont('Arial','I',8);
//$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'R');
//$pdf->AliasNbPages();

$pdf->Cell(10,40,'',0,1,'C');
$pdf->SetX(10); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(10,6,'No',1,0,'C');
$pdf->Cell(25,6,'ID Pengaduan',1,0,'C');
$pdf->Cell(40,6,'NIK Pelapor',1,0,'C');
$pdf->Cell(35,6,'Nama Pelapor',1,0,'C');
$pdf->Cell(40,6,'Validasi',1,0,'C');
$pdf->Cell(40,6,'Status',1,0,'C');


$pdf->SetFont('Times','',10);

$sql = mysqli_query($this->koneksi->link,"SELECT biodata.nama, pengaduan.id_pengaduan,pengaduan.nik,pengaduan.validasi,pengaduan.status
from biodata, pengaduan where biodata.nik='$nik' and pengaduan.nik='$nik'");
$no = 1;
while($data = mysqli_fetch_array($sql)){
    $pdf->Ln();
    $pdf->SetX(10); 
    $pdf->Cell(10,6,$no,1,0,'C');
    $pdf->Cell(25,6,$data['id_pengaduan'],1,0,'C');
    $pdf->Cell(40,6,$data['nik'],1,0,'C');
    $pdf->Cell(35,6,$data['nama'],1,0,'C');
    $pdf->Cell(40,6,$data['validasi'],1,0,'C');
    $pdf->Cell(40,6,$data['status'],1,0,'C');
    $no++;  
}

$pdf->SetY(100);
$pdf->SetFont('Arial','B',8);
$pdf->SetX(143); 
$pdf->Cell(143,6,'Karawang ,'.date('d F Y'),0);


$pdf->SetY(120);
$pdf->SetX(130); 
//$sql = mysqli_query($con,"select petugas.nama_ptgs from verifikasi,petugas where verifikasi.id=petugas.id and id_verifikasi='VERF1119001'");
//$data = mysqli_fetch_array($sql);
$pdf->Cell(0,10,'(.......................................................)',0,0,'C');
$pdf->SetY(130);
$pdf->SetX(110);
$pdf->SetFont('Times','B',12);
//$pdf->SetX(135);
//$pdf->Cell(0,7,'Ilham Bagus A.W',0,0);
ob_end_clean();
$pdf->Output('I','Riwayat Laporan '.$nik.'.pdf');

      }

    }

   
   
   ?>     
    </body>       
       <script type="text/javascript">
       
        $(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
 $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
     
    $('#ntf').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('#count').html(data.unseen_notification);
    }
   }
  });
 }
 load_unseen_notification();

 function load_unseen(view = '')
 {
  $.ajax({
   url:"fetchadmin.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('#notifikasi').html(data.notif);
    if(data.unseen > 0)
    {
     $('#angka').html(data.unseen);
    }
   }
  });
 }

 load_unseen();

  $(document).click(function(){
  $('#count').html('');
  $('#angka').html('');
  load_unseen_notification('yes');
  load_unseen('yes');
 });
 
        
  setInterval(function(){ 
  load_unseen_notification()
  load_unseen()
 }, 5000);
 
});  

        </script>          
    </html>