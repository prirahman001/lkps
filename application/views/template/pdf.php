<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mahasiswa</title>
    <style>
      .abu {
        background-color: #D3D3D3;
      }

      .table, .table th, .table td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      .table th, .table td {
        padding: 5px;
          text-align: center;
      }
    </style>
</head>
  <body>
    <?php
    $this->load->view('Kerjasama/Kerjasama_pdf');
    $this->load->view('Mahasiswa/mahasiswa_pdf');
     ?>
  </body>
</html>
