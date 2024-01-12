<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
    <center>
        <h2>Form Biodata Diri</h2>
        <!-- form -->
        <form method = "POST" action="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type = 'text' name = 'nama'></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type = 'date' name = 'tanggal_lahir'></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td><input type = 'radio' name = 'Jk' value ='Laki-laki'> Laki - laki
                        <input type = 'radio' name = 'Jk' value ='Perempuan'> Perempuan
                </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td>agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama">
                        <option value=".....">.........</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="budha">budha</option>
                        <option value="konghuchu">konghuchu</option>
                        <option value="atheis">atheis</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pendidikan">
                        <option value=".....">.........</option>
                        <option value="pelajar">SD</option>
                        <option value="karyawan">SMP</option>
                        <option value="guru">SMA/SMK</option>
                        <option value="guru">Mahasiswa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status">
                        <option value=".....">.........</option>
                        <option value="pelajar">Pelajar</option>
                        <option value="karyawan">Karyawan</option>
                        <option value="guru">Guru</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type = 'text' name = 'Hobi'></td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td><input type = 'text' name = 'cita_cita'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type = "submit" name = "simpan" value = 'kirim'></td>
                </tr>
            </table>
</form>
    </center>
</body>
</html>
<?php 

if(isset($_POST['simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['tanggal_lahir'];
    $c = $_POST['Jk'];
    $d = $_POST['alamat'];
    $e = $_POST['agama'];
    $f = $_POST['pendidikan'];
    $g = $_POST['status'];
    $h = $_POST['Hobi'];
    $i = $_POST['cita_cita'];
    
    

    echo "========= Biodata Diri ===========<br>";
    echo "==================================<br>";
    echo "Nama = $a <br>";
    echo "Tanggal lahir = $b <br>";
    echo "Jenis kelamin = $c <br>";
    echo "Alamat = $d <br>";
    echo "Agama = $e <br>";
    echo "Pendidikan terakhir = $f <br>";
    echo "Status = $g <br>";
    echo "Hobi = $h <br>";
    echo "Cita-cita = $i <br>";

}

?>