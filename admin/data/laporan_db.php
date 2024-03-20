<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-3">
                <h3>LAPORAN DATA Buku</h3>
                <h4>APLIKASI PERPUSTAKAAN DIGITAL SMK MTS BATAM</h4>
                <span>Data Ini merupakan data keseluruhan member perpustakaan</span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="../laporan.php" class="btn btn-success my-3">Kembali</a>
            </div>
        </div>

        <div class="row">
            <div class="col my-3">
                <table class="table">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">ID buku</th>
                            <th scope="col">judul</th>
                            <th scope="col">penulis</th>
                            <th scope="col">penerbit</th>
                            <th scope="col">tahunterbit</th>
                            <th scope="col">buku</th>
                            <th scope="col">foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../koneksi/koneksi.php';

                        $data = mysqli_query($koneksi, "SELECT * FROM buku");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $d['IDbuku']; ?></th>
                                <td><?php echo $d['judul']; ?></td>
                                <td><?php echo $d['penulis']; ?></td>
                                <td><?php echo $d['penerbit']; ?></td>
                                <td><?php echo $d['tahunterbit']; ?></td>
                                <td><?php echo $d['buku']; ?></td>
                                <td><?php echo $d['foto']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>Mengetahui:</p>
                <p>Kepala Sekolah</p>
                <p class="mt-5"><b>Biden Sinaga, MM</b></p>
            </div>
        </div>


    </div>

    <script>
        window.print();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>