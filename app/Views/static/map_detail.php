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
        flex-wrap: wrap;
    }

    .map-detail-minimap {
        width: 40%;
        margin: 20px;
    }

    .map-detail-content {
        width: 50%;
        margin: 20px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
        border-radius: 10px;
        color: aliceblue;
    }

    .back-button {
        margin-top: 20px;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .agent-recommendation {
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 5px;
    }

    .agent-icon {
        width: 60px;
        height: 60px;
        margin: 5px;
        position: relative; /* Tambahkan ini */
    }

    .agent-icon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .agent-icon a {
        position: absolute; /* Tambahkan ini */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: block; /* Tambahkan ini */
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 5px;
    }
</style>
</head>
<body>
    <button class="back-button" onclick="window.history.back()">Kembali</button>
    <div class="map-detail-container">
        <div class="map-detail-minimap">
            <img src="/uploads/minimap/<?= $map['minimap'] ?>" alt="Minimap" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="map-detail-content">
            <h1><?= $map['nama'] ?></h1>
            <p><?= $map['deskripsi'] ?></p>
            <div class="agent-recommendation">
                <h4 class="center-text" style="color: white;">Agent Recommendation</h4>
                <div class="grid-container">
                    <?php foreach ($agents as $agent) { ?>
                        <div class="agent-icon">
                            <a href="/agents/<?= $agent['id'] ?>">
                                <img src="/uploads/icons/<?= $agent['icon'] ?>" alt="<?= $agent['nama'] ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>

<?=$this->endSection()?>
