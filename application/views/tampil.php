<html>
    <head>
        <title>Data Siswa</title>
    </head>
        <body>
            <h2>DATA SISWA</h2>
            <hr>
            Nama Siswa: <?php echo $_POST["nama"]; ?><br>
            NIS: <?php echo $_POST["nis"]; ?><br>
            Kelas: <?php echo $_POST["kelas"]; ?><br>
            Tanggal Lahir: <?php echo $_POST["tanggal"]; ?><br>
            Tempat Lahir: <?php echo $_POST["tempat"]; ?><br>
            Alamat: <?php echo $_POST["alamat"]; ?><br>
            Jenis Kelamin: <?php echo $_POST["kelamin"]; ?><br>
            Agama: <?php echo $_POST["agama"]; ?><br>

            <a href="form.php">Masukkan Data Siswa</a>
        </body>
</html>