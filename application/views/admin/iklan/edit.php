<?php
// Error Warning
echo validation_errors('<div class="alert alert-warning">','</div>');

// Error Upload
if(isset($error_upload)) {
	echo '<div class="alert alert-warning">'.$errors_upload.'</div>';
}
// form Open
echo form_open_multipart(base_url('admin/iklan/edit/'.$iklan->id_iklan));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Upload Gambar</label>
		<input type="file" name="gambar" class="form-control">			
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Posisi Iklan</label>
		<select name="posisi_iklan" class="form-control">
			<option value="Homepage">Homepage</option>
			<option value="Galeri" <?php if($iklan->posisi_iklan=="Galeri") { echo "selected"; } ?>>Galeri</option>
		</select>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group form-group-lg">
		<label>Link Iklan</label>
		<input type="url" name="iklan" class="form-control" placeholder="Iklan" value="<?php echo $iklan->link_iklan ?>">
		
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Isi Iklan</label>
		<textarea name="isi_iklan" class="form-control" placeholder="Isi Iklan"><?php echo $iklan->isi_iklan ?></textarea>			
	</div>


	<div class="form-group text-right">
		<button type="submit" name="submit" class="btn btn-success btn-lg">
			<i class="fa fa-save"></i> Simpan Iklan
		</button>

		<button type="reset" name="reset" class="btn btn-success btn-lg">
			<i class="fa fa-times"></i> Reset
		</button>
	</div>
</div>
<?php
// form close
echo form_close();
?>