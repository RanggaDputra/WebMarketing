<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<title>Home</title>

<?php
require '../vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml(
    '
<h1>Data Pelanggan</h1>
<h1>Nama Lengkap <?= $user2->name; ?></h1>
<h1>Alamat <?= $user2->alamat; ?></h1>
<h1>No HP <?= $user2->NoHp; ?></h1>
<h1>Kordinat <?= $user2->koordinat; ?></h1>
<img src="<?= base_url("/uploads2/" . $user2->gmbrktp); ?>" width="100%">
<img src="<?= base_url("/uploads2/" . $user2->gmbrktp); ?>" width="100%">
<img src="<?= base_url("/uploads2/" . $user2->gmbrktp); ?>" width="100%">'
);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("detail Pelanggan.pdf", array("Attachment" => 0));
?>





<?= $this->endSection(); ?>