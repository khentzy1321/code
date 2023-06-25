<?= $this->extend('layout/main.php')?>
<?= $this->section('content')?>

<div class="container mt-5">
    <div class="content" style="width: 40%; margin: 0 auto;">
    <Header class="text-center"><h2 >Add Profile</h2></Header>

    <form action="<?php echo base_url('profile/store/'); ?>" method="post">
    <div class="input-group mb-3">

        <input type="text" class="form-control" name="fname" placeholder="First name" >
    </div> 
    <div class="input-group mb-3">
  
        <input type="text" class="form-control" name="lname" placeholder="Last name">
    </div>
     <div class="input-group mb-3">
 
        <input type="text" class="form-control" name="address" placeholder="Address" >
    </div> 
    <div class="input-group mb-3">
      
        <input type="date" class="form-control" name="date" placeholder="Date" >
    </div>
    <button class="btn btn-outline-success" type="submit">Submit</button>
    <a class="btn btn-outline-secondary" href="/profile">back</a>
</form>
    </div>

</div>

<?= $this->endSection()?>