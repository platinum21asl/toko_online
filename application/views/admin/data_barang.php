<div class="container-fluid">

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-plus fa-sm"></i> Tambah Barang
      </button>

      <table class="table tablet-bordered">
            <tr>
                  <th>NO</th>
                  <th>NAMA BARANG</th>
                  <th>KETERANGAN</th>
                  <th>KATEGORI</th>
                  <th>HARGA</th>
                  <th>STOK</th>
                  <th colspan="3">AKSI</th>
            </tr>
            <?php $no = 1;
            foreach ($barang as $brg) : ?>
                  <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $brg->nama_brg; ?></td>
                        <td><?= $brg->keterangan; ?></td>
                        <td><?= $brg->kategori; ?></td>
                        <td><?= $brg->harga; ?></td>
                        <td><?= $brg->stok; ?></td>
                        <td>
                              <?= anchor('admin/data_barang/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success">
                                    <i class="fas fa-search-plus"></i>
                              </div>'); ?>

                        </td>
                        <td> <?= anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">
                                   
                                   <i class="fa fa-edit"></i>
                             </div>'); ?>

                        </td>
                        <td onclick="return confirm('Apakah anda yakin ingin hapus?')">
                              <?= anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                              </div>'); ?>
                        </td>
                  </tr>
            <?php endforeach; ?>
      </table>
</div>


<!-- Modal Tambah Barang -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <form action="<?= base_url() . 'admin/data_barang/tambah_aksi' ?>" method="POST" enctype="multipart/form-data">
                              <div class="form-group">
                                    <label for="nama_brg">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_brg" name="nama_brg">
                              </div>
                              <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text-area" class="form-control" id="keterangan" name="keterangan">
                              </div>
                              <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori" class="form-control">
                                          <option value="Elektronik">Elektronik</option>
                                          <option value="Pakaian Pria">Pakaian Pria</option>
                                          <option value="Pakaian Wanita">Pakaian Wanita</option>
                                          <option value="Pakaian Anak-anak">Pakaian Anak-anak</option>
                                          <option value="Peralatan Olahraga">Peralatan Olahraga</option>
                                    </select>
                              </div>
                              <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga">
                              </div>
                              <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="text" class="form-control" id="stok" name="stok">
                              </div>
                              <div class="form-group">
                                    <label for="gambar">Gambar Produk</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                              </div>


                              <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">reset</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>