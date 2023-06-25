<?= $this->extend('layout/main.php')?>
<?= $this->section('content')?>

<div class="container mt-5">
    <div class="header">
        <a class="btn btn-outline-primary float-right" href="/profile/create">Add</a>
    </div>
    <table class="table table-bordered table-striped mt-5 text-center">
        <thead class="bg-success">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($profiles as $profile): ?>
                <tr>
                    <td><?= $profile['fname']; ?></td>
                    <td><?= $profile['lname']; ?></td>
                    <td><?= $profile['address']; ?></td>
                    <td><?= $profile['date']; ?></td>

                    <td>
                        <a class="btn btn-outline-success" href="/profile/edit/<?= $profile['id']; ?>">Edit</a>
                        <a class="btn btn-outline-danger" onclick="return confirm('Are you sure')" href="/profile/delete/<?= $profile['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection()?>