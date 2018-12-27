<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Delete<?php echo $layanan->id_layanan ?>">
<i class="fa fa-trash-o"></i> Delete
</button>

<div class="modal modal-danger fade" id="Delete<?php echo $layanan->id_layanan ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Menghapus Layanan</h4>
      </div>
      <div class="modal-body">
        <p>Ingin menghapus layanan ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"> Tutup </button>
        <a href="<?php echo base_url('admin/layanan/delete/' .$layanan->id_layanan) ?>" class="btn btn-outline pull-right"><i class="fa fa-trash-o"></i> Hapus</a>
        <button type="button" class="btn btn-outline pull-right" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>