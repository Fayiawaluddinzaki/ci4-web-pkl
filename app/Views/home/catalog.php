<?= $this->extend('home/comp/headfoot'); ?>
<?= $this->Section('website'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<title><?= $judul ?></title>
<div style="margin-top: 60px;">
  <!-- Start: Bootstrap DataTables -->
  <div class="bootstrap_datatables">
    <div class="container py-5">
      <header class="text-center text-black">
        <h1 class="display-4">Product Catalog</h1>
      </header>
      <div class="row py-5">
        <div class="col-lg-10 mx-auto">
          <div class="card rounded shadow border-0">
            <div class="card-body p-5 bg-white rounded">
              <div class="table-responsive">
                <table id="example" style="width:100%" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>                      
                      <th>Nama Produk</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/f1-shake-mix-choco.png" alt="" width="250"></td>                   
                      <td>F1 shake mix choco</td>
                      <td>Rp.456.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/f1-shake-mix-chocomint.png" alt="" width="250"></td>                   
                      <td>F1 shake mix chocomint</td>
                      <td>Rp.456.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/f1-shake-mix-cookies-and-cream.png" alt="" width="250"></td>                   
                      <td>F1 shake mix cookies and cream</td>
                      <td>Rp.456.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/f1-shake-mix-vanilla.png" alt="" width="250"></td>                   
                      <td>F1 shake mix vanilla</td>
                      <td>Rp.456.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/f1-shake-mix-wildberry.png" alt="" width="250"></td>                   
                      <td>F1 shake mix wildberry</td>
                      <td>Rp.456.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/nrg.png" alt="" width="250"></td>                   
                      <td>Herbal Nature's Raw Guarana</td>
                      <td>Rp.296.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/herbal-tea-concentrate.png" alt="" width="250"></td>                   
                      <td>Herbal Tea Concentrate Original</td>
                      <td>Rp.441.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/greentea-pomegranate.png" alt="" width="250"></td>                   
                      <td>Pomegranate Teao</td>
                      <td>Rp.585.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/niteworks.png" alt="" width="250"></td>                   
                      <td>Niteworks Lemon</td>
                      <td>Rp.707.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/herbalifeline.png" alt="" width="250"></td>                   
                      <td>Herbalifeline</td>
                      <td>Rp.553.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/celluloss.png" alt="" width="250"></td>                   
                      <td>Cell-U-Loss</td>
                      <td>Rp.269.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/nutrition-active.png" alt="" width="250"></td>                   
                      <td>Nutrition Active</td>
                      <td>Rp.413.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/0242_ppp.png" alt="" width="180" class="mx-5"></td>                   
                      <td>Personalized Protein Powder</td>
                      <td>Rp.449.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/mixed-fiber.png" alt="" width="250"></td>                   
                      <td>Herbalife Mixed Fiber Apple</td>
                      <td>Rp.396.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/hac.png" alt="" width="250" class="mx-5"></td>                   
                      <td>Herbal Aloe Concentrate Original</td>
                      <td>Rp.441.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/hac-mandarin.png" alt="" width="250"></td>                   
                      <td>Herbal Aloe Concentrate Mandarin</td>
                      <td>Rp.441.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/hac-mango.png" alt="" width="250"></td>                   
                      <td>Herbal Aloe Concentrate Mango</td>
                      <td>Rp.441.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/herbal-aloe-bodywash.png" alt="" width="250"></td>                   
                      <td>Herbal Aloe Everyday Body Wash</td>
                      <td>Rp.243.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/polishing-citrus-cleanser.png" alt="" width="250"></td>                   
                      <td>Polishing Citrus Cleanser</td>
                      <td>Rp.328.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/aloe-shooting-cleanser.png" alt="" width="250"></td>                   
                      <td>Soothing Aloe Cleanser</td>
                      <td>Rp.328.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/berry-scrub.png" alt="" width="250"></td>                   
                      <td>Instant Reveal Berry Scrub</td>
                      <td>Rp.258.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/mint-clay-mask.png" alt="" width="250"></td>                   
                      <td>Purifying Mint Clay Mask</td>
                      <td>Rp.278.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/_energizing-toner.png" alt="" width="250"></td>                   
                      <td>Energizing Herbal Toner</td>
                      <td>Rp.250.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/energizing-toner-150.png" alt="" width="250"></td>                   
                      <td>Daily Glow Moisturizer</td>
                      <td>Rp.554.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/energizing-toner-150.png" alt="" width="250"></td>                   
                      <td>Herbalife SKIN Energizing Toner</td>
                      <td>Rp.637.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/eye-cream.png" alt="" width="250"></td>                   
                      <td>Hydrating Eye Cream</td>
                      <td>Rp.518.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/eye-gel.png" alt="" width="250"></td>                   
                      <td>Firming Eye Gel</td>
                      <td>Rp.518.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/spf-30.png" alt="" width="250"></td>                   
                      <td>Herbalife SKIN Protective SPF-30</td>
                      <td>Rp.554.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/night-cream.png" alt="" width="250"></td>                   
                      <td>Replenishing Night Cream</td>
                      <td>Rp.554.000</td>   
                    </tr>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><img src="/view/assets/img/hblf/minimizing-serum.png" alt="" width="250"></td>                   
                      <td>Line Minimizing Serum</td>
                      <td>Rp.739.000</td>   
                    </tr>                                       
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End: Bootstrap DataTables -->
</div>

<!-- javascript untuk search dan tabel statis -->
<script>
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>
<script>
  src = "https://code.jquery.com/jquery-3.5.1.js"
</script>
<script>
  src = "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"
</script>
<script>
  src = "https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"
</script>

<?= $this->endSection('website');?>