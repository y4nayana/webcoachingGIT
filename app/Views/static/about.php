<?=$this->extend('layout/page_layout')?>

<?=$this->section('header')?>

<style>
    .center-text {
        text-align: center; 
        margin-top: 50px; 
    }

    .guide-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 350px;
        margin: 20px 0;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
    }

    .guide-box {
        text-align: center;
        padding: 20px;
        width: 300px;
    }

    .guide-title {
        font-size: 24px;
        color: white;
        margin-bottom: 10px;
    }

    .guide-description {
        font-size: 16px;
        color: white;
        margin-bottom: 20px;
    }

    .button {
        background-color: #ff4d4d;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
</style>

<body style="background-image: url('image/Homepage.png'); background-size: cover;"></body>

<h1 class="center-text" style="color: white;">Welcome to Game Guides</h1>

<?=$this->endSection()?>

<?=$this->section('content')?>

<div class="guide-container">
    <?php foreach ($homes as $home) {
        if ($home['id'] == 1 || $home['id'] == 2) {
            ?>
            <div class="guide-box">
                <img src="<?php echo base_url('image/' . $home['image']); ?>" alt="<?php echo $home['deskripsi']; ?>" style="width: 100%; height: 150px; object-fit: cover; border-radius: 10px 10px 0 0;">
                <h2 class="guide-title"><?php echo ucfirst(str_replace('.webp', '', $home['nama'])); ?></h2>
                <p class="guide-description"><?php echo $home['deskripsi']; ?></p>
                <a href="<?php echo strtolower(str_replace('.webp', '.html', $home['nama'])); ?>" class="button">View <?php echo ucfirst(str_replace('.webp', '', $home['nama'])); ?></a>
            </div>
            <?php
        } 
    } ?>
</div>
<?=$this->endSection()?>