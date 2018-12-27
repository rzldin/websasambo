 <?php

 if($this->session->flashdata('sukses'))
 {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
 }
 ?>

 <p>
    <a href="<?php echo base_url('admin/layanan/tambah') ?>" title="Tambah Layanan Baru" class="btn btn-success">
      <i class="fa fa-plus"></i> Tambah Baru
    </a>
  </p>

 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Gambar</th>
                  <th>Nama Layanan Iklan</th>
                  <th>Status</th>
                  <th>Penulis</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php $i=1; foreach ($layanan as $layanan) { ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$layanan->gambar) ?>" width="60" class="img img-thumbnail"></td>
                  <td><?php echo $layanan->judul_layanan ?></td>
                  <td><?php echo $layanan->status_layanan ?></td>
                  <td><?php echo $layanan->nama ?></td>
                  <td><?php echo $layanan->tanggal_post ?></td>
                  <td>
                    
                    <a href="<?php echo base_url('admin/layanan/edit/' .$layanan->id_layanan) ?>" title="Edit Layanan" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit </a>
                  

                    <?php 
                      include('delete.php');
                    ?>                   

                  </td>
                </tr>

                <?php $i++; }?>
              </tbody>
            </table>