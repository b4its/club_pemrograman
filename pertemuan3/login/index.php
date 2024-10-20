<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <form action="prosesLogin.php" method="POST">
            <label for="username">Username</label><br>
            <input type="text" name="username"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <button type="submit">Submit</button>
        </form>
    </div>

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