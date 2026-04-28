<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="pagetitle">
  
</div>

<section class="section">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Produk</h5>

      <table class="table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Produk 1</td>
            <td>10000</td>
          </tr>
        </tbody>
      </table>

    </div>
  </div>
</section>

<?= $this->endSection() ?>