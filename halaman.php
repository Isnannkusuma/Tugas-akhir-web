<?php include("inc_header.php")?>
        <?php
        $katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci']:"";
        ?>
        <h1>Halaman Admin</h1>
        <p>
          <a href="halaman_input.php">
            <input type="button" value="Buat Halaman" class="btn btn-primary">
          </a>
        </p>
        <form class="row g-3" method="get">
          <div class="col-auto">
            <label for="search" class="visually-hidden">Search</label>
            <input type="text" class="form-control" name="Masukan Kata Kunci" placeholder="Masukan Kata Kunci" value="<?php echo $katakunci?>">
          </div>
          <div class="col-auto">
            <input type="submit" name="Cari" value="Cari Tulisan" class="btn btn-secondary">
            
          </div>
        </form>
        <table class=" table-striped table-hover">
          <thead>
            <tr>
                <th class="col-1">#</th>
                <th>Judul</th>
                <th>Kutipan</th>
                <th class="col-1">Aksi</th>
            </tr>
          </thead>
          <tbody>
                <tr>
                    <td>1</td>
                    <td>Lorem Ipsum10</td>
                    <td>Lorem Ipsum8</td>
                    <td>
                        <span class="badge text-bg-warning">Edit</span>
                        <span class="badge text-bg-danger">Delete</span>
                    </td>
                </tr>
          </tbody>
        </table>
        <?php include("inc_footer.php")?>