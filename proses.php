<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
</head>
<body>
    <h1>Pendaftaran Berhasil</h1>
    <h2>Data Mahasiswa</h2>
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo ": " . htmlspecialchars($_POST['name']); ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo ": " . htmlspecialchars($_POST['nim']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo ": " . htmlspecialchars($_POST['email']); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php
                    if(htmlspecialchars($_POST["jKelamin"]) == "Laki-Laki") {
                        echo ": Pria Jantan";
                    } else {
                        echo ": Wanita Anggun";
                    } ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?php 
                    if(htmlspecialchars($_POST["prodi"]) == "si") {
                        echo ": Sistem Informasi";
                    } else {
                        echo ": Pendidikan Teknologi Informasi";
                    } ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>
                <?php
                if (isset(($_POST['hobi_1']))) {
                    echo ": Membaca Buku ";
                }
                if (isset(($_POST['hobi_2']))) {
                    echo "Bermain Game ";
                }
                if (isset(($_POST['hobi_3']))) {
                    echo "Menonton Film ";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>