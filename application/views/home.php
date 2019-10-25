<!DOCTYPE html>
<!--
  Girly by FreeHTML5.co
  Twitter: https://twitter.com/fh5co
  Facebook: https://fb.com/fh5co
  URL: https://freehtml5.co
-->
<html lang="en">
<?php
	include '_partial/header.php';
?>

<body>
  <?php
	include '_partial/navbar.php';
?>
  <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="assets/img/banner-img.jpg" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title"><?php echo $biodata['nama'] ?></h2>
		  <p Style="color:white; font-size:35pt;">~Welcome To My Curriculum Vitae~</p>
	</div>
      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-two-img">
    <div class="row">
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="assets/img/girl1.jpg" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="assets/img/girl2.jpg" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid fh5co-recent-work">
    <div class="container contact-pop">
      <div class="row">
        <div class="col-md-6  pr-0">
          <div class="card"> <img class="card-img w-100" src="<?php echo 'assets/img/biodata/' . $biodata['foto'] ?>" alt="">
            <div class="card-img-overlay"> </div>
          </div>
        </div>
        <div class="col-md-6 pl-0" id="about">
          <div class="content">
            <h3>Hai.. Saya <?php echo $biodata['nama'] ?></h3>
            <h4><?php echo $biodata['profesi'] ?></h4>
            <hr/>
			<table border=0>
				<tr>
					<td>Nama</td><td>:</td> <td><?php echo $biodata['nama'] ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td><td>:</td> <td><?php echo $biodata['jk'] ?></td>
				</tr>
				<tr>
					<td>TTL</td><td>:</td> <td><?php echo $biodata['ttl'] ?></td>
				</tr>
				<tr>
					<td>Alamat</td><td>:</td> <td><?php echo $biodata['alamat'] ?></td>
				</tr>
				<tr>
					<td>Agama</td><td>:</td> <td><?php echo $biodata['agama'] ?></td>
				</tr>
				<tr>
					<td>Status</td><td>:</td> <td><?php echo $biodata['status'] ?></td>
				</tr>
			</table>
			 <hr/>
			 <p><?php echo $biodata['resume'] ?></p>
			 <hr/>
			 <p><?php echo $biodata['keterangan'] ?></p>
            <a href="#contact" class="btn">CONTACT</a> </div>
          </div>
        </div>
      </div>
      <div class="container recent" id="activity">
        <div class="row">
          <h2>Pendidikan</h2>
		  
          <div class="owl-carousel owl-carousel2 owl-theme">
		  <?php
				Foreach($pendidikan as $data){
		  ?>
            <div>
              <div class="card"> <img class="card-img" src="<?php echo "assets/img/pendidikan/". $data->foto ?>" alt="">
                <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
                  <div class="bottom-text">
                    <h5 class="card-title"><?php echo $data->sekolah_asal ?></h5>
                    <p class="card-text"><?php echo $data->tahun_ajaran ?></p>
                  </div>
                </div>
              </div>
            </div>
			<?php 
				}
		  ?>
          </div>
		  
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid recent fh5co-portfolio" id="portfolio">
    <div class="container">
      <h2>Portfolios</h2>
      <div class="row">
	  <?php
		Foreach ($portfolio as $data){
		?>
        <div class="bx bx-1">
		
          <div class="card"> <img class="card-img" src="<?php echo "assets/img/portfolio/". $data->foto ?>" alt="Perpustakaan">
            <div class="card-img-overlay"> <a href="#"><img src="assets/img/heart.png" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title"><?php echo $data->keterangan?></h5>
              </div>
            </div>
          </div>
		  
        </div>
		<?php
		}
		  ?>
          </div>
        </div>
      </div>
    </div>
	<div id="fh5co-skills" class="animate-box">
  <div class="container-fluid fh5co-recent-work activity">
				<hr/>
    <div class="container recent">
     
		<div class="container">
			<center><h2><strong>Spesialis</strong></h2></center>
			<div class="row">
				
			</div>
			<hr/>
			<div class="row">
			<?php foreach ($skill as $s): ?>
				<div class="col-md-6">
				
					<div class="progress-wrap">
						<h3><span class="name-left"><?= $s->nama_skill ?></span><span class="value-right"><?= $s->persentase."%" ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?= $s->persentase."%" ?>">
						  </div>
						</div>
					</div>
				
					<!--<div class="progress-wrap">
						<h3><span class="name-left">WordPress</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">PHP</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Java</span><span class="value-right">70%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:70%">
						  </div>
						</div>
					</div>-->
				</div>
				<?php endforeach; ?>
				<!--<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Design</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Ruby</span><span class="value-right">50%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Python</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">jQuery</span><span class="value-right">60%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:60%">
						  </div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
    </div>
  </div>
  <div class="container-fluid fh5co-about-me" id="testimonial">
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="card"> <img class="card-img d-block w-100" src="assets/img/about-me-img.jpg" alt="">
          <div class="card-img-overlay">
            <h2>Pengalaman</h2>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="carousel-caption d-md-block"> <img src="assets/img/quote-icon.png" alt="">
            <p><?php echo $pengalaman['keterangan'] ?></p>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> <img src="<?php echo "assets/img/pengalaman/".$pengalaman['foto']?>" alt=""><span><?php echo $pengalaman['nama_perusahaan']?></span> </li>
      </ol>
    </div>
  </div>
  <div class="container-fluid fh5co-insta-feed activity">
    <div class="container recent">
      <div class="row mb-5 pb-5">
        <div class="col-lg-6">
          <div class="twit-box">
            <div class="media mb-3"> <img class="align-self-start mr-3 rounded-circle" src="assets/img/twit-girl-img.png" alt="">
              <div class="media-body">
                <h5 class="mb-0 mt-3"><?php echo $sosmed['nama']?></h5>
                <p><?php echo $sosmed['username'] ?></p>
              </div>
            </div>
            <p class="text-justify"> “<?php echo $sosmed['keterangan'] ?></p>
            <div class="clearfix"> <a href="https://www.instagram.com/yollaardnsa_/" class="btn btn-primary mt-2 float-right">Follow</a> </div>
          </div>
        </div>
        <div class="col-lg-6 feed-caro">
          <h2>Profile</h2>
          <div class="owl-carousel owl-carousel4 owl-theme">
            <div>
              <div class="card"> <img class="card-img" src="assets/img/feed-img1.png" alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="assets/img/feed-img2.png"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-center d-block">Media Sosial</h2>
      <div class="row social-links">
        <ul class="nav mx-auto">
          <!--<li class="nav-item"> <a class="nav-link" href="https://www.facebook.com/bagas.mangantahu"><img src="assets/img/facebook.png" alt=""></a> </li>-->
          <li class="nav-item"> <a class="nav-link" href="ttps://www.instagram.com/yollaardnsa_/"><img src="assets/img/ig.png" alt=""></a> </li>
        </ul>
      </div>
    </div>
  </div>
  <?php
	include '_partial/footer.php';
	include '_partial/script.php';
?>

</body>
</html>