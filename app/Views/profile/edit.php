<?= $this->extend('layout/main.php')?>
<?= $this->section('content')?>

<div class="container mt-5">
    <div class="content " style="width: 40%; margin: 0 auto;">
    <Header class="text-center"><h2> Edit Profile</h2></Header>
    <form action="<?php echo base_url('profile/update/' . $profile['id']); ?>" method="post">
    <div class="input-group mb-3">
   
        <input type="text" class="form-control" name="fname" value="<?php echo $profile['fname']; ?>">
    </div> 
    <div class="input-group mb-3">
   
        <input type="text" class="form-control" name="lname" value="<?php echo $profile['lname']; ?>">
    </div>
     <div class="input-group mb-3">
   
        <input type="text" class="form-control" name="address" value="<?php echo $profile['address']; ?>">
    </div> 
    <div class="input-group mb-3">
    
        <input type="date" class="form-control" name="date" value="<?php echo $profile['date']; ?>">
    </div>
    <button class="btn btn-outline-success" type="submit">Submit</button>
    <a class="btn btn-outline-secondary" href="/profile">back</a>
</form>
    </div>
  

</div>

<?= $this->endSection()?>