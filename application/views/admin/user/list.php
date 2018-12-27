 <?php

 if($this->session->flashdata('sukses'))
 {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
 }
 ?>

 <p>
    <a href="<?php echo base_url('admin/user/tambah') ?>" title="Tambah User Baru" class="btn btn-success">
      <i class="fa fa-plus"></i> Tambah Baru
    </a>
  </p>

 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Username - Level</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php $i=1; foreach ($user as $user) { ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $user->nama ?>
                  </td>
                  <td><?php echo $user->email ?></td>
                  <td><?php echo $user->username ?> - <?php echo $user->akses_level ?></td>
                  <td>
                    
                    <a href="<?php echo base_url('admin/user/edit/' .$user->id_user) ?>" title="Edit User" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit </a>
                  

                    <?php 
                      include('delete.php');
                    ?>                   

                  </td>
                </tr>

                <?php $i++; }?>
              </tbody>
            </table>