<head>
    <title>Belajar PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css">
</head>

<body>
    <h3>Program Membuat Luas Lingkaran</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Jari Jari</label><br>
        <input type="number" name="jarijari"><br>
        <button type="submit">Submit</button>
    </form>
    <hr>
    <p>Hasil</p>
    <hr>
<?php
    
    $jariJari = isset($_POST['jarijari']) ? $_POST['jarijari'] : null;
    if ($jariJari != null ){
        $hasil = pi() * pow($jariJari, 2);
        echo "Luas Lingkaran = " . $hasil;
    }

?>
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js"></script>
<script>
    <?php 
    session_start();
    if (isset($_SESSION["messages"])){
    ?>

        Swal.fire({
            text: "<?php echo $_SESSION["messages"] ?>",
            icon: "<?php echo $_SESSION['status']?>"
            });


</script>
<?php
    unset($_SESSION["messages"]);
    unset($_SESSION["status"]);
}

?>
</body>


