 <?php

 if($this->session->flashdata('sukses'))
 {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
 }
 ?>

 <p>
    <a href="<?php echo base_url('admin/iklan/tambah') ?>" title="Tambah Iklan Baru" class="btn btn-success">
      <i class="fa fa-plus"></i> Tambah Baru
    </a>
  </p>

 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Gambar</th>
                  <th>Link Iklan</th>
                  <th>Isi Iklan</th>
                  <th>Posisi Iklan</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php $i=1; foreach ($iklan as $iklan) { ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$iklan->gambar) ?>" width="60" class="img img-thumbnail"></td>
                  <td><?php echo $iklan->isi_iklan ?></td>
                  <td><?php echo $iklan->link_iklan ?></td>
                  <td><?php echo $iklan->posisi_iklan ?></td>
                  <td><?php echo $iklan->tanggal_post ?></td>
                  <td>
                    
                    <a href="<?php echo base_url('admin/iklan/edit/' .$iklan->id_iklan) ?>" title="Edit Iklan" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit </a>
                  

                    <?php 
                      include('delete.php');
                    ?>                   

                  </td>
                </tr>

                <?php $i++; }?>
              </tbody>
            </table>