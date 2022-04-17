<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<style>
    fieldset{
        width: 25%;
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
        <legend>Input Mahasiswa</legend>
        
             <table>
             <section>
            <?php echo validation_errors(); ?>
            <form action="<?= base_url('mahasiswa/print'); ?>" method="post">
            <table>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th> : </th>
                    <td><input type="text" name="Nama" id="Nama"> </td>
                  
                </tr>

                <tr>
                    <th>NIM</th>
                    <th> : </th>
                    <td><input type="text" name="NIM" id="NIM"> </td>
                  
                </tr>

                <tr>
                    <th>Kelas</th>
                    <th> : </th>
                    <td><input type="text" name="kls" id="kls"> </td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <th> : </th>
                    <td><input type="date" name="lahir" id="lahir"> </td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <th> : </th>
                    <td><input type="text" name="tempat" id="tempat"> </td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <th> : </th>
                    <td><input type="text" name="alamat" id="alamat"> </td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <th> : </th>
                    <td><input type="radio" name="jenis" value="Laki-laki">Laki-laki
                    <input type="radio" name="jenis" value="Perempuan">Perempuan</td>
                </tr>

                <tr>
                    <th>Agama</th>
                    <th> : </th>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">--Pilih--</option>
                            <option value="ISLAM"> ISLAM </option>
                            <option value="KATOLIK"> KATOLIK </option>
                            <option value="KRISTEN"> KRISTEN </option>
                            <option value="BUDDHA"> BUDDHA </option>
                            <option value="HINDU"> HINDU </option>
                            <option value="KHONGHUCU"> KHONGHUCU </option>
                    </td>
                </tr>  
                <tr> 
                    <td colspan="3" align="center"> <input type="submit" value="Submit"> </td>         
                </tr>
            </table>
                    
            </form>
            </section>
            </div class="clear">
         </center>
             </table>
        </form>
    </fieldset>
</body>
</html>