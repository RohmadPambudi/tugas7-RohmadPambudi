<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<style>
    fieldset{
        width: 20%;
        margin: auto;
        border-radius: 5px;
    }

    select {
        width: 100%;
    }
</style>
    <body>
        <center>
        <div id="get">
    <fieldset>
        <legend>Output Mahasiswa</legend>
            
            <section>
            <table>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td><?= $Nama; ?></td>
                </tr>

                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td><?= $NIM; ?></td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                    <td><?= $kls; ?></td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td><?= $lahir; ?></td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td><?= $tempat; ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td><?= $alamat; ?></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td><?= $jenis; ?></td>
                </tr>

                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td><?= $agama; ?></td>
                </tr>

                <tr>
                <td colspan="3" align="center">
                        <a href="<?= base_url('mahasiswa');?>"><h4>Kembali</h4></a>
                    </td>
                </tr>
            </table>
            </section>
            </div class="clear">
        </center>
    </body>
</html>