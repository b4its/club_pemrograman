<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <?php 
    include_once('koneksi.php');
    $id = $_GET['id'];
    $querySQL = 'select * from mahasiswa where id="' . $id. '"';
    $execute = mysqli_query($db, $querySQL);
    while($data = mysqli_fetch_array($execute)){
    ?>
    <div class="container-fluid">
        <div class="row col-6 mt-4 p-4">
            <h3>Edit Mahasiswa</h3>
            <form action="prosesUpdateMahasiswa.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukkan nama anda" value="<?php echo $data['nama'] ?>" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1" placeholder="Masukkan kelas anda" value="<?php echo $data['kelas']?>">
                </div>
                <input type="text" name="id" value="<?php echo $data['id'] ?>" hidden>
                <div class="d-flex flex-row gap-4">
                    <button type="submit" class="btn btn-warning">Ubah</button>
                    <a href="dataMahasiswa.php" class="btn btn-primary">Kembali</a>
                </div>
            </form>

        </div>
    </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

