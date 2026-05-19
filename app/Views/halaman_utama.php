<p>Layanan Pengaduan Masyarakat</p>

<form action="tambah_laporan" method="post">
  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama"><br>

  <label for="alamat">Alamat:</label><br>
  <input type="text" id="alamat" name="alamat">

  <p>Jenis Pengaduan</p>
  <input type="radio" id="barang_hilang" name="tipe_laporan" value="barang_hilang">
  <label for="barang_hilang">Barang Hilang</label><br>
  <input type="radio" id="pencurian" name="tipe_laporan" value="pencurian">
  <label for="pencurian">Pencurian</label><br>
  <input type="radio" id="lainnya" name="tipe_laporan" value="lainnya">
  <label for="lainnya">Lainnya</label><br>

  <br>
  <label for="deskripsi">Deskripsi</label><br>
  <input type="textarea" id="deskripsi" name="deskripsi">
  <br><br>
  <input type="submit" value="Kirim">
</form>

<p>List Laporan</p>
<table border=1>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tipe Laporan</th>
        <th>Deskripsi</th>
    </tr>
    <?php foreach($dataLaporan as $r): ?>
        <tr>
            <td><?= esc($r->id) ?></td>
            <td><?= esc($r->nama) ?></td>
            <td><?= esc($r->alamat) ?></td>
            <td><?= esc($r->tipe_laporan) ?></td>
            <td><?= esc($r->deskripsi) ?></td>
        </tr>
    <?php endforeach; ?>
</table>