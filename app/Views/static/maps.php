<?=$this->extend('layout/page_layout')?>

<?=$this->section('header')?>
<style>
    .center-text {
        text-align: center; 
        margin-top: 50px; /* Atur margin atas */
    }
</style>

<body style="background-image: url('image/Homepage.png'); background-size: cover;"></body>

<?=$this->endSection()?>

<?=$this->section('content')?>
<div class="container-flex">
    <div class="grid">
        <?php
        foreach ($maps as $map) {
            echo "
            <div class='map-container'>
                <a href='/maps/{$map['id']}'>
                    <img src='uploads/maps/" . $map['map'] . "' alt='" . $map['nama'] . "'>
                    <div class='map-name-center'>
                        <span class='map-name-text'>" . $map['nama'] . "</span>
                    </div>
                </a>
            </div>";
        }
        ?>
    </div>
</div>

<style>
    .container-flex {
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        color: white; /* Pastikan teks berwarna putih */
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 10px;
        width: 90%;
        height: 90%;
    }
    .map-container {
        position: relative;
        text-align: center;
        overflow: hidden;
    }
    .map-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .map-container:hover img {
        transform: scale(1.1);
    }
    .map-name-center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 10px 20px;
        border-radius: 10px;
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }
    .map-container:hover .map-name-center {
        opacity: 1;
    }
    .map-name-text {
        font-size: 20px;
        font-weight: bold;
    }
    .details {
        width: 60%;
        padding: 20px;
        text-align: center;
    }
    #details-img {
        max-width: 60%;
        height: auto;
    }
    h1, h2, p {
        color: white; /* Warna teks putih */
    }
</style>

<?=$this->endSection()?>
