<?=$this->extend('layout/page_layout')?>

<?=$this->section('header')?>
<body style="background-image: url('image/kasbah.png'); background-size: cover;"></body>

<style>
    .center-text {
        text-align: center; 
        margin-top: 50px; 
    }
</style>
<div class="center-text">
    <h1>Coaching Schedule</h1>
    <h2>Token Coaching: <?= $coaching_tokens ?></h2>
</div>
<?=$this->endSection()?>

<?=$this->section('content')?>
<?php if ($message != ''): ?>
    <div class="alert alert-info"><?= $message ?></div>
<?php endif; ?>

<?php if (in_groups('User')): ?>
    <a href="<?= base_url('schedule') ?>" class="btn btn-primary">Add Schedule</a>
<?php endif; ?>

<link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

<?php if (in_groups('User')): ?>
<table class="table" id="datakomen">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jam Coaching</th>
      <th scope="col">Tanggal Coaching</th>
      <th scope="col">Nama Coach</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($coaching as $key => $schedule): ?>
        <tr>
        <th scope="row"><?= $key + 1 ?></th>
        <td><?= $schedule['nama'] ?></td>
        <td><?= $schedule['email'] ?></td>
        <td><?= $schedule['jam'] ?></td>
        <td><?= $schedule['tanggal'] ?></td>
        <td><?= $schedule['nama_coach'] ?></td>
        <td><?= $schedule['keterangan_coach'] ?></td>
        <td><?= $schedule['status'] ?></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>

<?php if (in_groups('Coach')): ?>
<table class="table" id="datakomen">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Jam Coaching</th>
      <th scope="col">Tanggal Coaching</th>
      <th scope="col">Nama Coach</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Action</th> 
    </tr>
  </thead>
  <tbody>
    <?php foreach ($coaching as $key => $schedule): ?>
      <tr data-schedule-id="<?= $schedule['id'] ?>">
        <th scope="row"><?= $key + 1 ?></th>
        <td><?= $schedule['nama'] ?></td>
        <td><?= $schedule['email'] ?></td>
        <td><?= $schedule['jam'] ?></td>
        <td><?= $schedule['tanggal'] ?></td>
        <td><?= $schedule['nama_coach'] ?></td>
        <td><?= $schedule['keterangan_coach']?></td>
        </td>
        <td class="status-col">
            <button type="button" class="btn btn-success accept-btn">Accept</button>
            <button type="button" class="btn btn-danger decline-btn">Decline</button>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>

<script>
$(document).ready(function() {
    $('.accept-btn').click(function() {
        var row = $(this).closest('tr');
        var scheduleId = row.data('schedule-id');
        $.post('<?= base_url('coaching/accept') ?>', { id: scheduleId }, function(response) {
            row.find('.status-col').text('Accepted');
        });
    });

    $('.decline-btn').click(function() {
        var row = $(this).closest('tr');
        var scheduleId = row.data('schedule-id');
        $.post('<?= base_url('coaching/decline') ?>', { id: scheduleId }, function(response) {
            row.find('.status-col').html('<button type="button" class="btn btn-primary">Reschedule</button>');
        });
    });
});
</script>
<?=$this->endSection()?>
