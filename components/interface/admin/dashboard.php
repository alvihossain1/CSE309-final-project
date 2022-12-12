<?php 
    $conn = mysqli_connect("localhost", "root", "", "theatre_db");

    if ($conn === false) {
        die("ERROR: Could not connect" . mysqli_connect_error());
    }

    $text = "";

    $sql = "SELECT * FROM user_t";
    $result_user = mysqli_query($conn, $sql);
    $total_users = mysqli_num_rows($result_user);

    $sql = "SELECT * FROM user_purchase_t";
    $result_purchased = mysqli_query($conn, $sql);
    $total_purchased = mysqli_num_rows($result_purchased);

    $sql = "SELECT * FROM shows_t";
    $result_shows = mysqli_query($conn, $sql);
    $total_shows = mysqli_num_rows($result_shows);


    mysqli_close($conn);

?>

<div class="tiles-container my-4">
    <div class="row m-0 p-0">
        <div class="col-md-6 thecol">
            <div class="tiles h-100">
                <div class="small-tiles w-100">
                    <h4>Total Users Registered</h4>
                    <h4><?php echo $total_users ?></h4>

                </div>
                <div class="small-tiles w-100">
                    <h4>Weekly Tickets Bought</h4>
                    <h4>--</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 thecol">
            <div class="tiles h-100">
                <div class="small-tiles">
                    <h4>Total Puchased Tickets</h4>
                    <h4><?php echo $total_purchased ?></h4>
                </div>
                <div class="small-tiles">
                    <h4>Weekly Registered</h4>
                    <h4>--</h4>
                </div>
            </div>
        </div>        
        <div class="thecol">
            <div class="tiles h-100">
                <div class="small-tiles w-100">
                    <h4>Total No. of Shows</h4>
                    <h4><?php echo $total_shows ?></h4>
                </div>
                <div class="small-tiles w-100">
                    <h4>Monthly Chart</h4>
                </div>
            </div>
        </div>

    </div>
</div>