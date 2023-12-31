<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data pengguna &mdash; Apps Pengguna</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
  <div class="section-header">
    <h1>Data Pengguna</h1>
    <div class="section-header-button">
      <!-- <a href="<?= site_url('Pengguna/add') ?>" class="btn btn-primary btn-sm">Add Data</a> -->
    </div>
  </div>

  <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Sucess!</b>
        <?= session()->getFlashdata('success') ?>
      </div>
    </div>
  <?php endif ?>

  <?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Error !</b>
        <?= session()->getFlashdata('error') ?>
      </div>
    </div>
  <?php endif ?>

  <div class="section-body">
    <div class="card">
      <div class="card-header">
        <h4>Data Pengguna</h4>
      </div>
      <div class="card-body">
        <a href="<?= site_url('Pengguna/add') ?>" class="btn btn-primary btn-sm mb-2">Add Data</a>
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody>
              <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Tanggal Masuk</th>
                <th>Informasi Pengguna</th>
                <th>Action</th>
              </tr>
              <?php foreach ($pengguna as $key => $value) : ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $value->name_pengguna ?></td>
                  <td><?= date('d/m/Y', strtotime($value->date_pengguna)) ?></td>
                  <td><?= $value->info_pengguna ?></td>
                  <td>
                    <a href="<?= site_url('Pengguna/edit/' . $value->id_pengguna) ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt">Edit</i></a>
                    <form action="<?= site_url('Pengguna/' . $value->id_pengguna) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data ?')">
                      <?= csrf_field() ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn btn-danger btn-sm"><i class="fas fa-trash">Delete</i></button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div> -->
    </div>
  </div>
</section>
<?= $this->endSection() ?>