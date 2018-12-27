<?php
//Notifikasi
 if($this->session->flashdata('sukses'))
 {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
 }
echo validation_errors('<div class="alert alert-warning">','</div>');

echo form_open(base_url('admin/profile'));
?>
<div class="col-md-6">
	
	<div class="form-grup">
		<label> Nama User </label>
		<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $user->nama ?>" required>
	</div>
	<div class="form-grup">
		<label> Email User </label>
		<input type="text" name="email" class="form-control" placeholder="Alamat Email" value="<?php echo $user->email ?>" required>
	</div>
	<div class="form-grup">
		<label> Level Hak Akses User </label>
		<input type="text" name="akses_level" class="form-control" value="<?php echo $user->akses_level ?>" readonly>
	</div>
	
</div>
<div class="col-md-6">
	<div class="form-grup">
		<label> Username </label>
		<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $user->username ?>" readonly>
	</div>
	<div class="form-grup">
		<label> Password </label>
		<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>" required>
	</div><br>

	<div class="form-grup">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan">
		<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
	</div>
</div>
<?php
echo form_close();
?>