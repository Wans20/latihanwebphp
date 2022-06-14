<?php 
require_once("config/koneksi_db.php"); 
require_once("config/config.php");
?>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Landing Page</title>
	<link rel="stylesheet" href="assets/bootstrap5/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/style.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>
<section id="blog">
		<div class="container-fluid d-flex flex-column align-items-center p-2">
			<h1 class="text-opacity-100 pb-3 text-center">=== My Blog ===</h1>
			<?php 
            $id_blog=$_GET['id'];
            $dtblog=mysqli_query($koneksi,"select*from mst_blog where id_blog = $id_blog");
						while($blog=mysqli_fetch_array($dtblog)){
                            $id=$blog['id_kategori'];
                            $ktg=mysqli_query($koneksi,"select nm_kategori from mst_kategoriblog where id_kategori=$id");
                            if($ktg1=mysqli_fetch_array($ktg)){
						?>
			<div class="row mb-4">
                <div class="col-md-2"></div>
				<div class="col-md-8">
                    <h4><?=$blog['judul'];?></h4>
                    <span class="bi bi-calender-date">
                        <?=$blog['date_input'];?>
                        Created By:<?=$blog['author'];?>
                        <b>#<?=$ktg1['nm_kategori'];?></b>
                    </span><hr>
                    <img src="asset/img/<?=$blog['image'];?>" width="400px" class="img-responsive center-block d-block mx-auto">
                    <p class="text-center"><?=$blog['isi'];?></p>
				</div>
                <div class="col-md-2"></div>
			</div>
            <?php 
            }
        } 
        ?>
		</div>
	</section>
    <!-- js -->
    <script src="assets/bootstrap5/js/bootstrap.bundle.min.js"></script>