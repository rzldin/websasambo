<body> 
  <?php foreach($berita as $key => $value) { ?>

    <div class="container-single">
      <div class="gambar-single" style="background-image: url(<?php echo base_url('assets/upload/image/'.$value->gambar); ?>">
        <div class="overlay-single">
          <div class="title-single">
             <span class="author-name-single"><a href=""><?php echo $value->nama; ?></a></span>
                  &nbsp;|&nbsp; 
            <span class="upload-time-single"><a href=""><?php echo $value->tanggal_post; ?></a></span>
            <br>
            <h1><?php echo $value->judul_berita ?></h1>
          </div>
        </div>
      </div>

          <div class="isi-single">
          <?php echo $value->isi_berita ?>

          </div>
    <!--container-single-->
    </div>
    <?php } ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>