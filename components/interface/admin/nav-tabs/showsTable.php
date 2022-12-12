<div class="table-holder text-white">
    <h3>Shows Table</h3>
    <div class="table-here overflow-auto p-0 m-0">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Show ID</th>
                    <th scope="col">Show Name</th>
                    <th scope="col">Show Genre</th>
                    <th scope="col">Show Date</th>
                    <th scope="col">Show Time</th>
                    <th scope="col">Show Venue</th>
                    <th scope="col">Show Ticket Price</th>
                    <th scope="col">Hall Name</th>
                </tr>
            </thead>

            <tbody>
                <?php $index = 1 ?>
                <?php foreach ($result_shows as $show) { ?>
                    <tr>
                        <th scope="row"><?php echo $index++ ?></th>
                        <td><?php echo $show['showID'] ?></td>
                        <td><?php echo $show['showName'] ?></td>
                        <td><?php echo $show['showGenre'] ?></td>
                        <td><?php echo $show['showDate'] ?></td>
                        <td><?php echo $show['showTime'] ?></td>
                        <td><?php echo $show['showVenue'] ?></td>
                        <td><?php echo $show['showTicketPrice'] ?></td>
                        <td><?php echo $show['hallName'] ?></td>
                    </tr>
                <?php } ?>


            </tbody>
        </table>
    </div>
</div>