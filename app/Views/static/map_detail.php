<?=$this->extend('layout/page_layout')?>

<?=$this->section('content')?>
<style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        background: url('/uploads/maps/<?= $map['map'] ?>') no-repeat center center fixed;
        background-size: cover;
    }

    .map-detail-container {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .map-detail-content {
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
    }
</style>
</head>
<body>
    <div class="map-detail-container">
        <div class="map-detail-content">
            <h1>Detail Map: <?= $map['nama'] ?></h1>
            <!-- Tampilkan detail lainnya sesuai kebutuhan -->
        </div>
    </div>
</body>

<?=$this->endSection()?>