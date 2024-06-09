<?=$this->extend('layout/page_layout')?>

<?=$this->section('content')?>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f3f3f3; /* Ganti sesuai kebutuhan */
    }

    .map-detail-container {
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .map-detail-content {
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5); /* Ubah sesuai kebutuhan */
        padding: 20px;
        border-radius: 10px;
    }
</style>

<div class="map-detail-container" style="background-image: url('/uploads/maps/<?= $map['map'] ?>');">
    <div class="map-detail-content">
        <h1>Detail Map: <?= $map['nama'] ?></h1>
        <!-- Tampilkan detail lainnya sesuai kebutuhan -->
    </div>
</div>
<?=$this->endSection()?>
