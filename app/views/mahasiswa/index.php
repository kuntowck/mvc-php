<div class="container mt-5">
   <h3>Daftar Mahasiswa</h3>

   <?php foreach ($data['mhs'] as $mhs) : ?>
      <ul>
         <li><?= $mhs['nama']; ?></li>
         <li><?= $mhs['nim']; ?></li>
         <li><?= $mhs['email']; ?></li>
         <li><?= $mhs['jurusan']; ?></li>
      </ul>
   <?php endforeach; ?>
</div>