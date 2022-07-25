<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <!-- Navbar content -->
    <div class="container-fluid">
        <a href="?r=fpengembaliancreate" class="btn btn-primary">Tambah</a>
    </div>
</nav>

<table class="table table-striped table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">ID Pengembalian</th>
        <th scope="col">ID Anggota</th>
        <th scope="col">ID Buku</th>
        <th scope="col">Nama Anggota</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Kategori</th>
        <th scope="col">Tanggal Pengembalian</th>
        <th scope="col" style="text-align:center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="SELECT * FROM tpengembalian";
        $query= mysqli_query($db, $sql);
        $nomor=1;
        while($isi=mysqli_fetch_array($query)){
        ?>
        <tr>
            <th scope="row"><?= $nomor; ?></th>
            <td><?= $isi['idpengembalian']; ?></td>
            <td><?= $isi['idanggota']; ?></td>
            <td><?= $isi['idbuku']; ?></td>
            <td><?= $isi['namaanggota']; ?></td>
            <td><?= $isi['judulbuku']; ?></td>
            <td><?= $isi['pengarang']; ?></td>
            <td><?= $isi['kategori']; ?></td>
            <td><?= $isi['tglkembali']; ?></td>
            <td style="text-align:center">
                <!-- Example single danger Button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?r=fpengembalianedit&id=<?=$isi['idpengembalian']?>">Edit</a></li>
                        <li><a class="dropdown-item" href="?r=fpengembaliandelete&id=<?=$isi['idpengembalian']?>"
                            onclick="return confirm ('Apakah Anda yakin akan menghapus ID Pengembalian :<?=$isi['idpengembalian']?>?')">
                            Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        <?php
        $nomor++;
        }
        mysqli_close($db);
        ?>
    </tbody>
</table>