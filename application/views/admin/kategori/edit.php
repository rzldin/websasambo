<?php 

// Error Warning
 echo validation_errors('<div class="alert alert-warning">','</div>');
//attribut
$attribut = 'class="form-horizontal"';

//form open
echo form_open(base_url('admin/kategori/edit/' .$kategori->id_kategori),$attribut);
?>
<div class="form-group">
    <label class="col-sm-3 control-label">Nama Kategori</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" required="required" value="<?php echo $kategori->nama_kategori ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Urutan Kategori</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" name="urutan" placeholder="Urutan" value="<?php echo $kategori->urutan ?>">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label"></label>
    <div class="col-sm-9">
      <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
    </div>
  </div>
<?php
//form close
echo form_close();
?>