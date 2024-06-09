<?=$this->extend('layout/page_layout')?>

<?=$this->section('header')?>

<style>
    .center-text {
        text-align: center; 
        margin-top: 50px; 
    }
</style>

<body style="background-image: url('image/Homepage.png'); background-size: cover;"></body>

<h1 class="center-text" style="color: white;">Welcome to Game Guides</h1>

<?=$this->endSection()?>

<?=$this->section('content')?>
<?=$this->endSection()?>