<form action="<?= base_url('MyController/update_buku');?>" method="POST">

    <!-- kode buku -->
    <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="kodeBuku" value="<?=$data_buku['kode_buku'];?>" readonly />
            <label for="floatingKode">Kode Buku</label>
        </div>

        <!-- judul buku -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="judulBuku" placeholder="Judul Buku"
                value="<?=$data_buku['judul_buku'];?>">
            <label for="floatingInput">Judul Buku</label>
        </div>

        <!-- tahun terbit -->
        <div class="form-floating mb-3">
            <select class="form-control" id="floatingYear" name="tahunTerbit">
                <?php for($a=2021;$a<=2023;$a++) {
                    if($a == $data_buku['tahun_terbit']){?>
                <option value="<?=$a;?>" selected><?=$a;?></option>
                <?php }else{ ?>
                <option value="<?=$a;?>"><?=$a;?>
                </option>
                <?php }}?>
            </select>
            <label for="floatingYear">Tahun Terbit</label>
        </div>

        <!-- penerbit -->
        <div class="form-floating mb-3">
            <select class="form-control" id="floatingPenerbit" name="kodePenerbit">
                <?php 
                $kode = $data_buku['kode_penerbit'];
                foreach($data_penerbit as $row) {
                    if($row['kode_penerbit'] == $kode) {?>
                <option value="<?=$row['kode_penerbit'];?>" selected><?=$row['nama_penerbit'];?></option>
                <?php }else{ ?>
                <option value="<?=$row['kode_penerbit'];?>"><?=$row['nama_penerbit'];?></option>
                <?php }}?>
            </select>
            <label for="floatingPenerbit">Penerbit</label>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal" onclick="history.back()">Back</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>