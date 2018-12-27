<?php
// Error Warning
echo validation_errors('<div class="alert alert-warning">','</div>');

// Error Upload
if(isset($error_upload)) {
	echo '<div class="alert alert-warning">'.$errors_upload.'</div>';
}
// form Open
echo form_open_multipart(base_url('admin/berita/tambah'));
?>

<div class="col-md-8">
	<div class="form-group form-group-lg">
		<label>Judul Berita</label>
		<input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" value="<?php echo set_value('judul_berita') ?>" required>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group form-group-lg">
		<label>Status Berita</label>
		<select name="status_berita" class="form-control">
			<option value="Publish">Publish</option>
			<option value="Draft">Draft</option>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<label>Jenis Berita</label>
		<select name="jenis_berita" class="form-control">
			<option value="Berita">Berita</option>
			<option value="Profil">Profil</option>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<label>Kategori Berita</label>
		<select name="id_kategori" class="form-control">

			<?php foreach ($kategori as $kategori) { ?>
			<option value="<?php echo $kategori->id_kategori ?>">
				<?php echo $kategori->nama_kategori ?>
			</option>
			<?php } ?>
		</select>
	</div>
</div>

<div class="col-md-4">
	<div class="form-group">
		<label>Upload Gambar</label>
		<input type="file" name="gambar" class="form-control" required>			
	</div>
</div>

<div class="col-md-12">
	<div class="form-group">
		<label>Isi Berita</label>
		<textarea name="isi_berita" class="form-control tinymce" placeholder="Isi Berita"><?php echo set_value('isi_berita') ?></textarea>			
	</div>

	<div class="form-group">
		<label>Keyword Berita</label>
		<textarea name="keywords" class="form-control" placeholder="Keywords Berita"><?php echo set_value('keywords') ?></textarea>			
	</div>

	<div class="form-group text-right">
		<button type="submit" name="submit" class="btn btn-success btn-lg">
			<i class="fa fa-save"></i> Simpan Berita
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