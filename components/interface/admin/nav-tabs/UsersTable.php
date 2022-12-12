<div class="table-holder text-white">
    <h3>Users Table</h3>
    <div class="table-here overflow-auto p-0 m-0">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Zip</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                <?php $index = 1 ?>
                <?php foreach ($result_user as $user) { ?>
                    <tr>
                        <th scope="row"><?php echo $index++ ?></th>
                        <td><?php echo $user['fname'] ?></td>
                        <td><?php echo $user['lname'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['addr'] ?></td>
                        <td><?php echo $user['city'] ?></td>
                        <td><?php echo $user['zip'] ?></td>
                        <td><?php echo $user['gender'] ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>