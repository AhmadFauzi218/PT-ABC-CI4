<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data Pengguna &mdash; Apps Pengguna</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="<?= site_url('Pengguna') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
      <h1>Create Pengguna</h1>
    </div>
  </div>

  <div class="section-body">
    <div class="card">
      <div class="card-header">
        <h4>Add Data Acara</h4>
      </div>
      <div class="card-body">
        <form action="<?= site_url('Pengguna') ?>" method="post" autocomplete="off">
          <?= csrf_field() ?>
          <div class="form-group">
            <label>Nama Acara</label>
            <input type="text" name="name_pengguna" class="form-control" required aoutofocus>
          </div>

          <div class="form-group">
            <label>Tanggal Acara</label>
            <input type="date" name="date_pengguna" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Informasi Acara</label>
            <textarea name="info_pengguna" cols="30" rows="10" class="form-control"></textarea>
          </div>

          <div>
            <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</section>
<?= $this->endSection() ?>