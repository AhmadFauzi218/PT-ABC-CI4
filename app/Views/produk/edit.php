<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data Gawe &mdash; Apps Produk</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('gawe') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            <h1>Update Produk</h1>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Update Data Acara</h4>
            </div>
            <div class="card-body">
                <form action="<?= site_url('produk/' . $produk->id) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama Acara</label>
                        <input type="text" name="nama_produk" value="<?= $produk->nama_produk ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tgl_masuk" value="<?= $produk->tgl_masuk ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Harga Produk</label>
                        <textarea name="harga_produk" cols="30" rows="10" class="form-control"><?= $produk->harga_produk ?></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Update</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>