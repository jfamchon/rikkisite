<?php include 'header.html'; ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html"><i class="ion-ios-arrow-forward"></i></a></span> <span>Réalisations<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Réalisations</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container-fluid px-md-4">
				<div class="row">
                
                 <?php 
                 
                    $arrayGallery = array();
                    $arraySousGallery_1 = array(1, "tada", "tadatada");
                    $arraySousGallery_2 = array(2, "tada", "tadatada");
                    $arraySousGallery_3 = array(3, "tada", "tadatada");
                    $arraySousGallery_4 = array(4, "tada", "tadatada");
                    $arraySousGallery_5 = array(5, "tada", "tadatada");
                    $arraySousGallery_6 = array(6, "tada", "tadatada");
                    $arraySousGallery_7 = array(7, "tada", "tadatada");
                    $arraySousGallery_8 = array(8, "tada", "tadatada");
                    $arraySousGallery_9 = array(9, "tada", "tadatada");
                    $arraySousGallery_10 = array(10, "tada", "tadatada");
                    $arraySousGallery_11 = array(11, "tada", "tadatada");
                    $arraySousGallery_12 = array(12, "tada", "tadatada");
                    
                    $arrayGallery = array($arraySousGallery_1, $arraySousGallery_2, $arraySousGallery_3, $arraySousGallery_4, $arraySousGallery_5, $arraySousGallery_6, $arraySousGallery_7, $arraySousGallery_8, $arraySousGallery_9, $arraySousGallery_10, $arraySousGallery_11, $arraySousGallery_12);
                    foreach($arrayGallery as $gallery){
                     $name = "gallery-".$gallery[0].".jpg";
                ?>
                
                 <div class="col-md-3 ftco-animate">
                   <div class="work mb-4 img d-flex align-items-end" style="background-image: url(images/<?php echo $name; ?>)">
                  	<a href="images/<?php echo $name; ?>" class="icon image-popup d-flex justify-content-center align-items-center" alt="bottier toiture">
      	    		     <span class="fa fa-expand"></span>
      	    		</a>
                      	<div class="desc w-100 px-4">
          	              <div class="text w-100 mb-3">
          	              	<span><?php echo $gallery[1]; ?></span>
          	              	<h2><?php echo $gallery[2]; ?></h2>
          	              </div>
                        </div>
                    </div>
                  </div>
             
                <?php } ?>
        </div>   
		</div>
		</section>

    
<?php include 'footer.html'; ?>