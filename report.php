<?php   
	include "db.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>All Submission Report</h2>
    
                <form method="get" action="">
                    <label for="user_id">Search by User ID: </label>
                    <input type="text" id="user_id" name="user_id">
                    <button type="submit">Search</button>
                </form>

                <table class="table table-bordered table-stripped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Buyer</th>
                            <th scope="col">Receipt ID</th>
                            <th scope="col">Items</th>
                            <th scope="col">Buyer Email</th>
                            <th scope="col">Buyer IP</th>
                            <th scope="col">Note</th>
                            <th scope="col">City</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Entry By</th>
                            <th scope="col">Entry At</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php 

                            $sql = "SELECT * FROM submissions ORDER BY id DESC";
                            
                            $result = mysqli_query($conn, $sql);    
                            while ($row = mysqli_fetch_assoc($result)) 
                        { ?>
                           
                           <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['amount']; ?></td>
                                <td><?php echo $row['buyer']; ?></td>
                                <td><?php echo $row['receipt_id']; ?></td>
                                <td><?php echo $row['items']; ?></td>
                                <td><?php echo $row['buyer_email']; ?></td>
                                <td><?php echo $row['buyer_ip']; ?></td>
                                <td><?php echo $row['note']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['entry_by']; ?></td>
                                <td><?php echo $row['entry_at']; ?></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</section>



</body>
</html>

