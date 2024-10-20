<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <div class="row col-6 mt-4 p-4">
            <h3>Tambahkan Mahasiswa</h3>
            <form action="prosesTambahMahasiswa.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukkan nama anda">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" id="exampleFormControlInput1" placeholder="Masukkan kelas anda">
                </div>
                <div class="d-flex flex-row gap-4">
                    <button type="submit" class="btn btn-success">Tambahkan</button>
                    <a href="dataMahasiswa.php" class="btn btn-primary">Kembali</a>
                </div>
            </form>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

