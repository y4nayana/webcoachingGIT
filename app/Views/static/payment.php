<?=$this->extend('layout/page_layout')?>

<?=$this->section('header')?>

<body style="background-image: url('image/kasbah.png'); background-size: cover;"></body>

<style>
    .center-text {
        text-align: center; 
        margin-top: 50px; 
    }

    .guide-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400px;
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

<h1 class="center-text" style="color: white;">Payment</h1>

<?=$this->endSection()?>

<?=$this->section('content')?>

<div class="guide-container">
<?php foreach ($homes as $home) {
        if ($home['id'] == 3 || $home['id'] == 4 || $home['id'] == 5) {
            ?>
        <div class="guide-box">
            <img src="<?= base_url('image/' . $home['image']) ?>" alt="<?= $home['deskripsi'] ?>" class="img-thumbnail">
            <h2 class="guide-title"><?= ucfirst(str_replace('.webp', '', $home['nama'])) ?></h2>
            <p class="guide-description"><?= $home['deskripsi'] ?></p>
            <button class="button pay-btn" data-id="<?= $home['id'] ?>">Pay <?= ucfirst(str_replace('.webp', '', $home['nama'])) ?></button>
        </div>
        <?php
        } 
    } ?>
</div>

<script>
    $(document).ready(function() {
        $('.pay-btn').click(function() {
            var optionId = $(this).data('id');
            $.post('<?= base_url('coaching/topup') ?>', { id: optionId }, function(response) {
                if (response.success) {
                    alert('Top up successful');
                    window.location.href = '<?= base_url('coaching') ?>';
                } else {
                    alert('Top up failed');
                }
            });
        });
    });
</script>

<?=$this->endSection()?>