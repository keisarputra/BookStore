<div class="card ps-3 pe-3 pb-3">
    <div class="card-header text-center">
        <h1 style="text-align:center; margin-bottom:20px">Selamat datang di halaman daftar penerbit</h1>
    </div>
    <?= $this->session->flashdata('pesan');?>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary col-12 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Penerbit
    </button>

    <table class="table" id="myTable">
        <thead>
            <tr class="table-dark">
                <th scope="col">#</th>
                <th scope="col">Kode Penerbit</th>
                <th scope="col">Nama Penerbit</th>
                <th scope="col">Alamat Penerbit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
        $no = 1;
        foreach($data_penerbit as $row) { ?>
            <tr class="table-primary">
                <th scope="row"><?= $no++;?></th>
                <td><?= $row['kode_penerbit'];?></td>
                <td><?= $row['nama_penerbit'];?></td>
                <td><?= $row['alamat_penerbit'];?></td>
                <td><a href="<?=base_url('MyController/show_edit_page_penerbit/').$row['kode_penerbit'];?>"
                        class="btn btn-light btn-sm me-2">Edit</i>
                        <a href="<?= base_url('MyController/hapus_penerbit/').$row['kode_penerbit'];?>"
                            class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')"><i
                                class="fa fa-trash-o" aria-hidden="true"> Hapus</i>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>