<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
    <div class="container" style="margin: 20px;">
        <div class="card">
            <div class="card-header bg-primary">
                <strong>Edit Data Siswa</strong>
            </div>
            <div class="card-body">
                <?php foreach ($siswa_edit as $key => $data):
                    ?>
                <form method="post" action="<?php echo base_url('C_Index/updateData/'.$data['noinduk']) ?>">
                    <div class="form-group">
                        <label for="noinduk">No Induk</label>
                        <input readonly="readonly" type="text" name="noinduk" id="noinduk" class="form-control" value="<?php echo $data['noinduk'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="hobi">Hobi</label>
                        <input type="text" name="hobi" id="hobi" class="form-control" value="<?php echo $data['hobi'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $data['alamat'] ?>" />
                    </div>
 
                    <button class="btn btn-success" type="submit" onclick="return confirm('Yakin data anda sudah benar?')">Submit</button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>">Batal</a>
                </form>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>