<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>RENTCARS</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
	<!--header section start -->
    <div id="index.html" class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="logo"><a href="index.html"><img style="width: 100px" src="images/logo3.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-9">
                    <div class="menu_text">
                        <ul>
                            <li><a href="index.html">Home</a></li>                                                    
                            <li>
                              <span  style="font-size:18px;cursor:pointer; color: #ffffff;" onclick="openNav()">
                                Menu
                              </span> 
                            </li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="login.php">Log In</a></li>
                            <li><a href="#"><img src="images/search-icon.png"></a></li>
                            <div id="myNav" class="overlay">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                              <div class="overlay-content">
                                <a href="mobil.php">Mobil</a>
                                <a href="merk.php">Merk</a>
                                <a href="jenis_perawatan">Jenis Perawatan</a>
                                <a href="perawatan.php">Perawatan</a>
                                <a href="riwayat_sewa.php">Riwayat Sewa</a>
                                <a href="user.php">Users</a>
                              </div>
                            </div> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div id="sewa_table" style="margin-top: 10em;" class="col-md-12">
                <h3 class="text-left text-black">
                    Hi, Admin.
                </h3> 
                <h3 class="text-center text-warning">
                    Riwayat Sewa
                </h3> 
                <div align="left">
                    <button 
                    type="button" 
                    data-toggle="modal" 
                    data-target="#add_data_mobil" 
                    class="btn btn-warning">Tambah</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                tanggal_mulai
                            </th>
                            <th>
                                tanggal_akhir
                            </th>
                            <th>
                                tujuan
                            </th>
                            <th>
                                noktp
                            </th>
                            <th>
                                users_id
                            </th>
                            <th>
                                mobil_id
                            </th>
                        </tr>
                    </thead>
                    <?php
                    include "koneksi.php";
                    $id = 1;
                    $query = mysqli_query($kon, 'SELECT * FROM sewa');
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $id++ ?></td>
                            <td><?php echo $data['tanggal_mulai'] ?></td>
                            <td><?php echo $data['tanggal_akhir'] ?></td>
                            <td><?php echo $data['tujuan'] ?></td>
                            <td><?php echo $data['noktp'] ?></td>
                            <td><?php echo $data['users_id'] ?></td>
                            <td><?php echo $data['mobil_id'] ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    
    <?php
    $connect = mysqli_connect("localhost", "root", "", "dbrental");
    if(!empty($_POST))
    {
    $output = '';
    $tanggal_mulai = mysqli_real_escape_string($connect, $_POST["tanggal_mulai"]);
    $tanggal_akhir = mysqli_real_escape_string($connect, $_POST["tanggal_akhir"]);
    $tujuan = mysqli_real_escape_string($connect, $_POST["tujuan"]);
    $noktp = mysqli_real_escape_string($connect, $_POST["noktp"]);
    $users_id = mysqli_real_escape_string($connect, $_POST["users_id"]);
    $mobil_id = mysqli_real_escape_string($connect, $_POST["mobil_id"]);
    $query = "
    INSERT INTO sewa(tanggal_mulai, tanggal_akhir, tujuan, noktp, users_id, mobil_id)  
     VALUES('$tanggal_mulai', '$tanggal_akhir', '$tujuan', '$noktp', '$users_id', '$mobil_id')
    ";
    if(mysqli_query($connect, $query))
    {
    $output .= '<label class="text-success">Data Berhasil Masuk</label>';
    $select_query = "SELECT * FROM sewa ORDER BY id DESC";
    }
    echo $output;
    }
    ?>

    <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Kelompok 2 SI13</h2>
                  <p class="ipsum_text">NURUL AFIDAH RAMADHANTi, MUHAMMAD RIFKY RASYA, RIKA KARMILA, SALMA FATHIA</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Links</h2>
                  <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="https://github.com/nurulafidah/P6-OOP-Aggregation">Praktikum 6</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="https://github.com/nurulafidah/P7-CI">Praktikum 7</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="https://github.com/nurulafidah/P8-Form-CI">Praktikum 8</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="https://github.com/nurulafidah/P9-Database">Praktikum 9</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="https://github.com/nurulafidah/P10-Form-Processing">Praktikum 10</span></a></div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Follow Us</h2>
                <div class="image-icon"><img src="images/fb-icon.png"><span class="fb_text"><a href="#">Facebook</a></span></div>
                <div class="image-icon"><img src="images/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div>
                <div class="image-icon"><img src="images/in-icon.png"><span class="fb_text"><a href="#">Linkedin</a></span></div>
                <div class="image-icon"><img src="images/youtube-icon.png"><span class="fb_text"><a href="#">Youtube</a></span></div>            
                <div class="image-icon"><img src="images/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
                </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="adderess_text">Newsletter</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
          </div>
          </div>
          </div>
          </div>
      </div>
    </div>
  <!-- section footer end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright">2022 STT TERPADU NURUL FIKRI | <a href="https://html.design">Free html  Templates</a></p>
    </div>
  </div>

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
       
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>  
<script>
    $(document).ready(function() {
    // Begin Aksi Insert
    $('#insert_form').on("click", function(event){  
        event.preventDefault();  
        if($('#tanggal_mulai').val() == "")  
        {  
        alert("Mohon Isi Tanggal Mulai Sewa ");  
        }  
        else if($('#tanggal_akhir').val() == '')  
        {  
        alert("Mohon Isi Akhir Sewa");  
        }  
        else if($('#tujuan').val() == '')  
        {  
        alert("Mohon Isi Tujuan");  
        }  
        else if($('#noktp').val() == '')  
        {  
        alert("Mohon Isi Nomor KTP");  
        }  
        else if($('#users_id').val() == '')  
        {  
        alert("Mohon Isi ID User");  
        }  
        else if($('#mobil_id').val() == '')  
        {  
        alert("Mohon Isi ID Mobil");  
        }  
  
        else 
        {  
        $.ajax({  
            url:"sewa.php",  
            method:"POST",  
            data:$('#insert_form').serialize(),  
            beforeSend:function(){  
            $('#insert').val("Inserting");  
            },  
            success:function(data){  
            $('#insert_form')[0].reset();  
            $('#add_data_sewa').modal('hide');  
            $('#sewa_table').html(data);  
            }  
        });  
        }  
        });
        //END Aksi Insert
    });

</script>
</body>
</html>