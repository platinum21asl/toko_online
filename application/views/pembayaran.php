<div class="container-fluid">
      <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8">
                  <div class="btn btn-sm btn-success">
                        <?php $grand_total = 0;
                        if ($keranjang = $this->cart->contents()) {
                              foreach ($keranjang as $item) {
                                    $grand_total = $grand_total + $item['subtotal'];
                              }
                              echo "<h5>Total Belanjan Anda: Rp. " . number_format($grand_total, 0, ',', '.');
                        ?>
                  </div> <br><br>
                  <h3>Input Alamat Pengiriman dan Pemnbayaran</h3>
                  <form action="<?= base_url() ?>dashboard/proses_pesanan" method="post">
                        <div class="form-group">
                              <label for="">Nama Lengkap</label>
                              <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="">Alamat Lengkap</label>
                              <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="">Nomor Telepon</label>
                              <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="">Jasa Pengiriman</label>
                              <select name="" id="" class="form-control">
                                    <option value="">JNE</option>
                                    <option value="">TIKI</option>
                                    <option value="">POS Indonesia</option>
                                    <option value="">GOJEK</option>
                                    <option value="">GRAB</option>
                              </select>
                        </div>
                        <div class="form-group">
                              <label for="">Pilih Bamk</label>
                              <select name="" id="" class="form-control">
                                    <option value="">BCA - 0000</option>
                                    <option value="">BRI - 0000</option>
                                    <option value="">BNI - 0000</option>
                                    <option value="">MANDIRI - 0000</option>
                              </select>
                        </div>
                        <button class="btn btn-sm btn-primary mb-3" type="submit">Pesan</button>
                  </form>
            <?php    } else {
                              echo "Keranjang Belanja Anda Masih Kosong";
                        }  ?>
            </div>


            <div class="col-md-2">

            </div>
      </div>
</div>