<div class="container-fluid">
      <div class="card">
            <div class="card-header">
                  Detail Produk
            </div>
            <div class="card-body">
                  <?php foreach ($barang as $brg) : ?>
                        <div class="row">
                              <div class="col-md-4">
                                    <img src="<?= base_url() . '/uploads/' . $brg->gambar ?>" alt="" class="card-img-top">
                              </div>
                              <div class="col-md-8">
                                    <table class="table">
                                          <tr>
                                                <td>Nama Produk</td>
                                                <td><strong><?= $brg->nama_brg; ?></strong></td>
                                          </tr>
                                          <tr>
                                                <td>Keterangan</td>
                                                <td><strong><?= $brg->keterangan; ?></strong></td>
                                          </tr>
                                          <tr>
                                                <td>kategori</td>
                                                <td><strong><?= $brg->kategori; ?></strong></td>
                                          </tr>
                                          <tr>
                                                <td>stok</td>
                                                <td><strong><?= $brg->stok; ?></strong></td>
                                          </tr>
                                          <tr>
                                                <td>harga</td>
                                                <td><strong>
                                                            <div class="btn btn-sm btn-success">Rp. <?= number_format($brg->harga, 0, ',', '.') ?></div>
                                                      </strong></td>
                                          </tr>
                                    </table>
                                    <?= anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, ' <div class="btn btn-sm btn-primary">
                                    Tambah ke keranjang
                              </div>'); ?>
                                    <?= anchor('dashboard/index/', ' <div class="btn btn-sm btn-danger">
                                    kembali
                              </div>'); ?>


                              </div>
                        </div>
                  <?php endforeach; ?>
            </div>
      </div>
</div>