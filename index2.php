<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="style.css">


    <title>Kumala Hotel</title>
  </head>
  <body>
        <!-- Navbar -->
            <header>
                <a href="index.html" class="logo">Kumala</a>
                <ul>
                    <li><a href="index.html">Home</li></a>
                    <li><a href="#">Profil</li></a>
                    <li><a href="#">Services</li></a>
                    <li><a href="#">Contact</li></a>
                    <li class="btn btn-info utility"><a href="sign-up.html"><span class="join">JOIN US</span></li></a>
                </ul>
            </header>
        <!-- akhir navbar -->

        <!-- jumbotron -->
        <div class="jumbotron">
            
                <H1 class="tagline">  Melihat<span class="bold"> hidup </span>dari sudut pandang <br> yang <span class="bold"> berbeda </span> <br>
                   </H1>
            
        </div>
      <!-- akhir jumbotron -->

        <!-- content -->
        <div class="container">

          <!-- panel -->
          <div class="row justify-content-center">
            <div class="col-lg-10 info-panel">
              <div class="row">
                <div class="col-lg">
                  <div class="pilih-hotel">
                      <select name="hotel-book" id="hotel" class="clean">
                        <option selected = "selected">Pilih hotel</option>
                        <option value="Jakarta">Hotel Kumala Jakarta</option>
                        <option value="surabaya">Hotel Kumala Surabaya</option>
                        <option value="banyuwangi">Hotel Kumala Banyuwangi</option>
                      </select>
                  </div>
                </div>
                <div class="col-lg">
                  <div class="pilih-paket">
                      <select name="hotel-book" id="hotel" class="clean">
                        <option selected = "selected">Pilih paket</option>
                        <option value="Jakarta">Standard suite room</option>
                        <option value="surabaya">Premium suite room </option>
                        <option value="surabaya">Presidential suite room </option>
                      </select>
                  </div>
                </div>
                <div class="col-lg">
                  <a href="sign-up.html" class="btn btn-info tombol ">BOOK NOW</a>
                </div>
              </div>
            </div>
          </div>
          <!-- akhir panel -->

          <!-- content -->
          <div class="row">
            <div class="col">
              <div class="kontainer-pantai"> <img class="pantai" src="img/gambar1.jpg" alt=""> </div> 
            </div>
            <div class="col teks-pantai">
              ENJOY A <span class="luxury">LUXURY</span> EXPERIENCE <br>
              <span class="deskripsi"><p> pengalaman terbaik yang belum pernah anda rasakan</p>   </span>
              <div class="btn btn-info">GALLERY</div>
            </div>
          </div>
          <!-- akhir content -->
      <div class="rangkaian">
        <div class="row">
      
          <div class="col">
            <div class="deksripsi">
              <H2>Relax your resort</H2>
                <p>Kumala Privilege
                  Kumala Privilege is a personal loyalty program by Hotel Kumala Indonesia. Offering members exclusive benefits as well as the possibility to earn cashback and point reward from all unit Hotel Kumala Indonesia. Get the best rate guaranteed from our website!</p>
            </div> 
          </div>
          
            <div class="col">
              <img class="gambar1" src="img/gambar1.jpg" alt="">
            </div>

          </div>
        </div>
        
        <div class="row">
          <div class="col">
            <h1 class = "pesan-teks"> Pesan</h1>
            <form action="" method="post">
              <table>
                <tr>
                  <td width="130">masukkan pesan</td>
                  <td> <textarea  name="text" id="" cols="120" rows="1"></textarea> </td>
                </tr>
                <tr>
                  <td><input type="submit" value="simpan" name="proses"></td>
                </tr>
              </table>
            </form>
          </div>
        </div>
    </div>
        <!-- akhir content -->
        <?php
          include "config.php";

          $text = $_POST["text"];
          echo $text;

        ?>
        <!-- footer -->
            
              
            <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">KUMALA HOTEL</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Banyuwangi lateng jl belitung no.29
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">087755726499</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="">ojangpetak@gmail.com</a>
                            <br><br>
                            <a href="https://www.instagram.com/fauzan.dz_/?hl=id">Instagram: fauzan</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Branch</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Banyuwangi</a></li>
                        <li><a class="text-decoration-none" href="#">Jakarta</a></li>
                        <li><a class="text-decoration-none" href="#">Surabaya</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">location</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2022 Kumala hotel
                            | Designed by <a rel="sponsored" href="#" target="_blank">Fauzan</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
              
            
          
        <!-- akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">window.addEventListener("scroll",function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky",window.scrollY > 0)})</script>
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


