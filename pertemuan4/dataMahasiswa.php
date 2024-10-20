<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center aligns-item-center text-center col-8 mx-auto mt-4">
            <div class="d-flex flex-row justify-content-between">
                <h4 class="text-start">Data Mahasiswa</h4>
                <a href="tambahkanMahasiswa.php" class="btn btn-primary">Tambahkan Mahasiswa</a>
            </div>

            
            <table class="table">
                <thead>
                <?php
                        include_once('koneksi.php');
                        $querySQL = 'select * from mahasiswa';
                        $execute = mysqli_query($db, $querySQL);

                        if (mysqli_num_rows($execute) > 0){

                            
                    ?>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>

                </thead>
                <tbody>
                        <?php
                        while($kolom = mysqli_fetch_assoc($execute)){
                        
                        ?>
                    <tr>
                        <th scope="row"><?php echo $kolom['id'] ?></th>
                        <td><?php echo $kolom['nama'] ?></td>
                        <td><?php echo $kolom['kelas'] ?></td>
                        <td>
                            <a href="editMahasiswa.php?id=<?php echo $kolom['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="prosesHapusMahasiswa.php?id=<?php echo $kolom['id'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                            }

                        } else {
                            echo "<p>data tidak dapat ditemukan";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

