<form action="<?= base_url('MyController/update_penerbit');?>" method="POST">

    <!-- judul penerbit -->
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="namaPenerbit" placeholder="Nama Penerbit"
            value="<?=$data_penerbit['nama_penerbit'];?>">
        <input type="hidden" class="form-control" name="kodePenerbit" value="<?=$data_penerbit['kode_penerbit'];?>"
            readonly />
        <label for="floatingInput">Nama Penerbit</label>
    </div>

    <!-- alamat penerbit -->
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="alamatPenerbit" placeholder="Alamat Penerbit"
            value="<?=$data_penerbit['alamat_penerbit'];?>">
        <label for="floatingInput">Alamat Penerbit</label>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal"
            onclick="history.back()">Back</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>