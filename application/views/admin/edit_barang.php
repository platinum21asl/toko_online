<div class="container-fluid">
      <h3><i class="fas fa-edit"></i> EDIT DATA BARANG</h3>

      <?php foreach ($barang as $brg) : ?>
            <form action="<?= base_url() . 'admin/data_barang/update' ?>" method="POST">
                  <input type="hidden" class="form-control" id="id_brg" name="id_brg" value="<?= $brg->id_brg; ?>">
                  <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_brg" name="nama_brg" value="<?= $brg->nama_brg; ?>">
                  </div>
                  <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text-area" class="form-control" id="keterangan" name="keterangan" value="<?= $brg->keterangan; ?>">
                  </div>
                  <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $brg->kategori; ?>">
                  </div>
                  <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $brg->harga; ?>">
                  </div>
                  <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok" value="<?= $brg->stok; ?>">
                  </div>
                  <!-- <div class="form-group">
                        <label for="gambar">Gambar Produk</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                  </div> -->

                  <button type="button" class="btn btn-danger" data-dismiss="modal">reset</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

      <?php endforeach; ?>
</div>