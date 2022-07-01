<?php if ($level == "admin" ) { ?>
    <?= $this->include('admin/template/header')?>
    <?= $this->include('admin/template/topbar')?>
    
    <?= $this->renderSection('kontainer') ?>
    
    <?= $this->include('admin/template/sidebar')?>
    <?= $this->include('admin/template/footer')?>
    <?= $this->include('tambahan')?>
<?php } else { ?>
<?= $this->include('template/header')?>
<?= $this->include('template/nav')?>

<?= $this->renderSection('kontainer') ?>

<?= $this->include('template/footer')?>
<?php } ?>