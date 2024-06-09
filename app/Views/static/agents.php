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
        // print_r($agents);
        foreach ($agents as $agent) {
            echo "<a href='". site_url('agents/'. $agent['id']). "'>"; // Add this line
            echo "<img src='uploads/icons/". $agent['icon']. "' alt='". $agent['nama']. "' 
                onmouseover=\"showAgentImage('uploads/images/". $agent['agentimage']. "')\"
                onmouseout=\"hideAgentImage()\">";
            echo "</a>"; // Add this line
        }
       ?>
    </div>
    <div class="details" id="details">
        <img src="" alt="" id="details-img">
        <h2 id="details-name"></h2>
        <p class="agent-role" id="details-role"></p>
        <p id="details-description"></p>
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
        gap: 10px;
        width: 40%;
    }
   .grid img {
        width: 100%;
        cursor: pointer;
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

<script>
    function showAgentImage(imageSrc) {
        document.getElementById('details-img').src = imageSrc;
    }

    function hideAgentImage() {
        document.getElementById('details-img').src = ''; // Menghapus URL gambar
    }
</script>

<?=$this->endSection()?>