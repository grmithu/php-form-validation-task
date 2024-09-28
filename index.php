<?php 
  ob_start();
  include "db.php"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
    <meta name="description" title="Golam Rabbani Mithu">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>



<section>
    <div class="container mt-5 col-md-8">
        
        <h2 class="text-center text-dark">Submit Information</h2>

        <form id="submissionForm" action="submit.php" method="post">
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="buyer">Buyer:</label>
                <input type="text" class="form-control" id="buyer" name="buyer" maxlength="20" required>
            </div>
            <div class="form-group">
                <label for="receipt_id">Receipt ID:</label>
                <input type="text" class="form-control" id="receipt_id" name="receipt_id" required>
            </div>
            <div class="form-group">
                <label for="items">Items:</label>
                <input type="text" class="form-control" id="items" name="items" required>
            </div>
            <div class="form-group">
                <label for="buyer_email">Buyer Email:</label>
                <input type="email" class="form-control" id="buyer_email" name="buyer_email" required>
            </div>
            <div class="form-group">
                <label for="note">Note:</label>
                <textarea class="form-control" id="note" name="note" maxlength="200" required></textarea>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group mb-2">
                <label for="entry_by">Entry By:</label>
                <input type="number" class="form-control" id="entry_by" name="entry_by" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
</section>

   

    <script src="js/custom.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

<?php
    ob_end_flush();
?>    

</body>
</html>