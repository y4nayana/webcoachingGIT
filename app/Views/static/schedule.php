<?=$this->extend('layout/page_layout')?>

<?=$this->section('header')?>

<body style="background-image: url('image/lotus.jpg'); background-size: cover;"></body>

<style>
    .center-text {
        text-align: center; 
        margin-top: 50px; 
    }
</style>
<div class="center-text" >
    <h1>Add Schedule</h1>
</div>
<?=$this->endSection()?>

<?=$this->section('content')?>
<form action="/addschedule" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label" style="color: white;">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label" style="color: white;">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="jam" class="form-label" style="color: white;">Jam</label>
        <input type="time" class="form-control" id="jam" name="jam">
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label" style="color: white;">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal">
    </div>
    <div class="mb-3">
        <label for="nama_coach" class="form-label" style="color: white;">Nama Coach</label>
        <select class="form-select" id="nama_coach" name="nama_coach">
            <option value="KingJameds">KingJameds</option>
            <option value="Slash">Slash</option>
            <option value="Yana">Yana</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="keterangan_coach" class="form-label" style="color: white;">Keterangan Coach</label>
        <textarea class="form-control" id="keterangan_coach" name="keterangan_coach" rows="3"></textarea>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add Schedule</button>
    </div>
</form>
<?=$this->endSection()?>
