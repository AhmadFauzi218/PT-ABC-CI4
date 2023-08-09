<?= $this->extend('anggota/layout/default') ?>
<?= $this->section('title') ?>
<title>Data Gawe &mdash; Apps UASCI4</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>PT ABC</h1>

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
                <h4>PT. ABC CI4</h4>
            </div>
            <div class="card-body">
                <!-- <a href="<?= site_url('produk/add') ?>" class="btn btn-primary btn-sm mb-2">Add Data</a> -->
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Tanggal Masuk Produk</th>
                                <th>Harga Produk</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($produk as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value->nama_produk ?></td>
                                    <td><?= date('d/m/Y', strtotime($value->tgl_masuk)) ?></td>
                                    <td><?= $value->harga_produk ?></td>
                                    <td>
                                        <!-- <a href="<?= site_url('produk/edit/' . $value->id) ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt">Edit</i></a>
                                        <form action="<?= site_url('produk/' . $value->id) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data ?')">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm"><i class="fas fa-trash">Delete</i></button>
                                        </form> -->
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