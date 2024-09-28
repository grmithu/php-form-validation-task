<?php   
	include "db.php"; 
?>

<?php



// Sanitize input function
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

// Validate input data
function validate($data) {
    if (!is_numeric($data['amount'])) {
        return "Amount must be a number.";
    }
    if (!preg_match("/^[\w\s]{1,20}$/", $data['buyer'])) {
        return "Buyer must be text and max 20 characters.";
    }
    if (!filter_var($data['buyer_email'], FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }
    if (str_word_count($data['note']) > 30) {
        return "Note can't be more than 30 words.";
    }
    if (!ctype_digit($data['phone'])) {
        return "Phone must be numeric.";
    }
    if (!ctype_digit($data['entry_by'])) {
        return "Entry_by must be numeric.";
    }

    return true;
}

    // Sanitize form data
    $amount = sanitizeInput($_POST['amount']);
    $buyer = sanitizeInput($_POST['buyer']);
    $receipt_id = sanitizeInput($_POST['receipt_id']);
    $items = sanitizeInput($_POST['items']);
    $buyer_email = sanitizeInput($_POST['buyer_email']);
    $note = sanitizeInput($_POST['note']);
    $city = sanitizeInput($_POST['city']);
    $phone = sanitizeInput($_POST['phone']);
    $entry_by = sanitizeInput($_POST['entry_by']);

    // Form data array
    $data = compact('amount', 'buyer', 'receipt_id', 'items', 'buyer_email', 'note', 'city', 'phone', 'entry_by');

    // Validate form data
    $validation_result = validate($data);
    if ($validation_result !== true) {
        die($validation_result);
    }

    // Insert data into database
    $buyer_ip = $_SERVER['REMOTE_ADDR'];
    $entry_at = date('Y-m-d');








    // How to Insert a Collection of Data into DB
    $sql = "INSERT INTO submissions (amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, entry_at, entry_by)
            VALUES ('$amount', '$buyer', '$receipt_id', '$items', '$buyer_email', '$buyer_ip', '$note', '$city', '$phone', '$entry_at', '$entry_by')";

    $submitUser = mysqli_query($conn, $sql);
    
    if ($submitUser) {
        // echo "Data submitted successfully!";
        header("Location: report.php");
    } 
    else {
        die ("MySQL Connection Error: " . mysqli_error($conn));
    }

// mysqli_close($conn);

