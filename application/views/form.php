<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM SISWA</title>
</head>
<body>
    <header>
        <h2> Form Data Siswa</h2>
    </header>
    <form method="post" action="<?php echo base_url(); ?>dilemas/output">
    <pre>
        Nama Siswa: <input type="text" name="nama"><br>
        NIS: <input type="text" name="nis"><br>
        Kelas: <input type="text" name="kelas"><br>
        Tanggal Lahir: <input type="date" name="tanggal"><br>
        Tempat Lahir: <input type="text" name="tempat"><br>
        Alamat: <input type="text" name="alamat"><br>
        Jenis Kelamin: <input type="radio" name="kelamin" value="perempuan"> Perempuan <br>
        <input type="radio" name="kelamin" value="laki-laki"> Laki-Laki <br>
        Agama: <select name="agama">
            <option name=""></option>
            <option name="Islam">Islam</option>
            <option name="Kristen">Kristen</option>
            <option name="Katholik">Katholik</option>
            <option name="Budha">Budha</option>
            <option name="Hindu">Hindu</option>
            <option name="Protestan">Protestan</option>
            <option name="Khonghuncu">Khonghuncu</option>
        </select>
        <br><br><br>
    <input type="submit" value="Submit"/> <input type="reset" value="Cancel"/>
    </pre>
    </form>
</body>
</html>