 <!DOCTYPE html>
 <html>
 <head>
    <title>form Informatika</title>
</head>
<body>
    <h2>Data Mahasiswa Informatika</h2>
        <form action="TM_7Hasil.php"  method="POST" target ="_blank">
        Nama : 
        <input type="textfield" name="nama" required><br><br>
        Alamat :
        <input type="textfield" name="alamat" ><br><br>
        Jenis Kelamin : <br>
        <input type="radio" name="gender" value="Laki-laki" >Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" >Perempuan<br><br>
        Golongan Darah :
        <select name="goldar">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select><br><br>
        Hobby: <br>
        <input type="checkbox" name="hobby" value="Menulis">Menulis<br>
        <input type="checkbox" name="hobby" value="Membaca">Membaca<br>
        <input type="checkbox" name="hobby" value="Menari">Menari<br>
        <input type="checkbox" name="hobby" value="Menonton">Menonton<br>
        <input type="checkbox" name="hobby" value="Melukis">Melukis<br>
        <input type="checkbox" name="hobby" value="Menyanyi">Menyanyi<br><br>
        Keterangan :<br>
        <textarea name="Keterangan" rows="5 cm"  cols="18 cm"></textarea><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
