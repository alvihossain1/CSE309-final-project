<div class="table-holder text-white">
    <h3>Purchased Shows</h3>
    <div class="table-here overflow-auto p-0 m-0">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Purchase ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Show ID</th>
                    <th scope="col">Show Name</th>
                    <th scope="col">Ticket Price</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Venue Selection</th>
                    <th scope="col">Payment Method</th>

                </tr>
            </thead>
            <tbody>
                <?php $index = 1 ?>
                <?php foreach ($result_purchased as $user) { ?>
                    <tr>
                        <th scope="row"><?php echo $index++ ?></th>
                        <td><?php echo $user['purchaseID'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['showID'] ?></td>
                        <td><?php echo $user['showName'] ?></td>
                        <td><?php echo $user['showTicketPrice'] ?></td>
                        <td><?php echo $user['showAmount'] ?></td>
                        <td><?php echo $user['venueSelection'] ?></td>
                        <td><?php echo $user['paymentMethod'] ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>