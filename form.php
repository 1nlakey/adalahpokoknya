<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <form action="proses.php" method="POST">
        <label for="name">Nama Lengkap</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="nim">NIM</label><br>
        <input type="text" id="nim" name="nim" required><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="jKelamin">Jenis Kelamin</label><br>
        <input type="radio" id="jLaki" name="jKelamin" value="Laki-laki" required>
        <label for="jLaki">Laki-laki</label><br>
        <input type="radio" id="jPerempuan" name="jKelamin" value="Perempuan" required>
        <label for="jPerempuan">Perempuan</label><br>
        <select name="prodi" id="prodi" required>
            <option value="">Pilih Program Studi</option>
            <option value="si">Sistem Informasi</option>
            <option value="pti">Pendidikan Teknologi Informasi</option>
        </select><br>
        <label>Hobi</label><br>
        <input type="checkbox" id="hobi_membaca" name="hobi_1" value="membaca">
        <label for="hobi_membaca">Membaca Buku</label><br>
        <input type="checkbox" id="hobi_game" name="hobi_2" value="game">
        <label for="hobi_game">Bermain Game</label><br>
        <input type="checkbox" id="hobi_menonton" name="hobi_3" value="menonton">
        <label for="hobi_menonton">Menonton Film</label><br>
        <input type="submit" value="Daftar">
        <input type="reset" value="Reset">
    </form>
</body>
</html>