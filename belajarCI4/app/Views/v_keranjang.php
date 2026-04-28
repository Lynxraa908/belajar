<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="pagetitle">
</div>

<section class="section">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Daftar Keranjang</h5>

      <table class="table">
        <thead>
          <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Produk 1</td>
            <td>10000</td>
            <td>2</td>
            <td>20000</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</section>

<?= $this->endSection() ?>