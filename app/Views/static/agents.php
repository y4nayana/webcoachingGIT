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
            echo "<img src='uploads/icons/" . $agent['icon'] . "' alt='" . $agent['nama'] . "' 
                onmouseover=\"showAgentImage('uploads/images/" . $agent['agentimage'] . "')\"
                onmouseout=\"hideAgentImage()\">";
        }
        ?>

        <!-- // $agents = array(
        //     array("Brimstone", "uploads/icons/Brimstone_icon.webp", "uploads/images/Brimstone.png"),
        //     array("Phoenix", "uploads/icons/Phoenix_icon.webp", "uploads/images/Phoenix.png"),
        //     array("Sage", "uploads/icons/Sage_icon.webp", "uploads/images/Sage.png"),
        //     array("Sova", "uploads/icons/Sova_icon.webp", "uploads/images/Sova.png"),
        //     array("Viper", "uploads/icons/Viper_icon.webp", "uploads/images/Viper.png"),
        //     array("Cypher", "uploads/icons/Cypher_icon.webp", "uploads/images/Cypher.png"),
        //     array("Reyna", "uploads/icons/Reyna_icon.webp", "uploads/images/Reyna.png"),
        //     array("Killjoy", "uploads/icons/Killjoy_icon.webp", "uploads/images/Killjoy.png"),
        //     array("Breach", "uploads/icons/Breach_icon.webp", "uploads/images/Breach.png"),
        //     array("Omen", "uploads/icons/Omen_icon.webp", "uploads/images/Omen.png"),
        //     array("Jett", "uploads/icons/Jett_icon.webp", "uploads/images/Jett.png"),
        //     array("Raze", "uploads/icons/Raze_icon.webp", "uploads/images/Raze.png"),
        //     array("Skye", "uploads/icons/Skye_icon.webp", "uploads/images/Skye.png"),
        //     array("Yoru", "uploads/icons/Yoru_icon.webp", "uploads/images/Yoru.png"),
        //     array("Astra", "uploads/icons/Astra_icon.webp", "uploads/images/Astra.png"),
        //     array("Kay/O", "uploads/icons/KAYO_icon.webp", "uploads/images/Kay_o.png"),
        //     array("Chamber", "uploads/icons/Chamber_icon.webp", "uploads/images/Chamber.png"),
        //     array("Neon", "uploads/icons/Neon_icon.webp", "uploads/images/Neon.png"),
        //     array("Fade", "uploads/icons/Fade_icon.webp", "uploads/images/Fade.png"),
        //     array("Harbor", "uploads/icons/Harbor_icon.webp", "uploads/images/Harbor.png"),
        //     array("Gekko", "uploads/icons/Gekko_icon.webp", "uploads/images/Gekko.png"),
        //     array("Deadlock", "uploads/icons/Deadlock_icon.webp", "uploads/images/Deadlock.png"),
        //     array("Iso", "uploads/icons/Iso_icon.webp", "uploads/images/Iso.png"),
        //     array("Clove", "uploads/icons/Clove_icon.webp", "uploads/images/Clove.png"),
        // );

        // Menampilkan gambar agen dengan menggunakan loop -->
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
