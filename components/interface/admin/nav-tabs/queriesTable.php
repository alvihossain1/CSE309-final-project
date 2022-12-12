<div class="table-holder text-white">
    <h3>Queries Submission</h3>
    <div class="table-here overflow-auto p-0 m-0">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comments</th>
                    <th scope="col">Submission Date</th>

                </tr>
            </thead>
            <tbody>
                <?php $index = 1 ?>
                <?php foreach ($result_queries as $user) { ?>
                    <tr>
                        <th scope="row"><?php echo $index++ ?></th>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['comments'] ?></td>
                        <td><?php echo $user['submission_date'] ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>