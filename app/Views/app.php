<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
  <title><?= $site->name ?></title>
</head>

<body onload="showMessage()">
  <?php if (!$paid) : ?>
    <div class="modal fade" id="messageModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Selamat Datang</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Aplikasi ini ditampilkan melalui server Actudent. Silakan follow Instagram kami di
            <a href="https://instagram.com/actudent_" target="_blank" rel="noopener noreferrer"><strong>@actudent_</strong></a>
            sebagai bentuk apresiasi, atau hubungi kami dengan mengklik tombol di bawah jika anda
            ingin berhenti menerima pesan ini.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="button" onclick="callMe()" class="btn btn-primary">Hubungi Kami</button>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <iframe class="content" id="site-content" src="<?= $site->url ?>" frameborder="0"></iframe>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="assets/main.js"></script>

</body>

</html>