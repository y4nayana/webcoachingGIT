<?=$this->extend('layout/page_layout')?>

<?=$this->section('content')?>
<style>
    body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        background: url('/image/Homepage.png') no-repeat center center fixed;
        background-size: cover;
    }

   .agent-detail-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
        background-color: transparent;
        position: relative; /* Add this to make the cover image absolute */
    }

   .agent-description {
        width: 40%;
        margin: 20px;
        text-align: justify;
        color: #f3f3f3;
        z-index: 1; /* Add this to make the description visible on top of the cover image */
    }

   .agent-image {
        width: 50%;
        height: 100%;
        margin: 20px;
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
</style>
<body>
    
    <button class="back-button" onclick="window.history.back()">Kembali</button>
<div class="agent-detail-container">
    <div class="agent-cover"></div>
<div class="agent-description">
    <h2><?= $agent['nama']?></h2>
<p><?= $agent['deskripsi']?></p>
</div>
<div class="agent-image">
    <img src="<?= base_url('uploads/images/'. $agent['agentimage'])?>" alt="<?= $agent['nama']?>">
</div>
</div>
</body>

<?=$this->endSection()?>