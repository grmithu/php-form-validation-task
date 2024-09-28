<?php

include "db.php"; // Include your database connection file

class SubmissionHandler {
    private $conn;
    private $data;

    public function __construct($conn, $data) {
        $this->conn = $conn;
        $this->data = $this->sanitizeInput($data);
    }

    // Sanitize input function
    private function sanitizeInput($data) {
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars(strip_tags(trim($value)));
        }
        return $data;
    }

    // Validate input data
    private function validate() {
        if (!is_numeric($this->data['amount'])) {
            return "Amount must be a number.";
        }
        if (!preg_match("/^[\w\s]{1,20}$/", $this->data['buyer'])) {
            return "Buyer must be text and max 20 characters.";
        }
        if (!filter_var($this->data['buyer_email'], FILTER_VALIDATE_EMAIL)) {
            return "Please provide a valid email format.";
        }
        if (str_word_count($this->data['note']) > 30) {
            return "Note can't be more than 30 words.";
        }
        if (!ctype_digit($this->data['phone'])) {
            return "Phone must be numeric.";
        }
        if (!ctype_digit($this->data['entry_by'])) {
            return "Entry_by must be numeric.";
        }
        return true;
    }

    // Insert submission into the database
    public function insertSubmission() {
        // Validate the data
        $validation_result = $this->validate();
        if ($validation_result !== true) {
            die($validation_result);
        }

        // Set additional fields
        $buyer_ip = $_SERVER['REMOTE_ADDR'];
        $entry_at = date('Y-m-d');

        // Prepare SQL query
        $sql = "INSERT INTO submissions 
            (amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, entry_at, entry_by)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Use prepared statements to prevent SQL injection
        if ($stmt = $this->conn->prepare($sql)) {
            $stmt->bind_param(
                "dsssssssssi",
                $this->data['amount'],
                $this->data['buyer'],
                $this->data['receipt_id'],
                $this->data['items'],
                $this->data['buyer_email'],
                $buyer_ip,
                $this->data['note'],
                $this->data['city'],
                $this->data['phone'],
                $entry_at,
                $this->data['entry_by']
            );

            // Execute the query
            if ($stmt->execute()) {
                header("Location: report.php"); // Redirect on success
            } else {
                die("Error inserting data: " . $this->conn->error);
            }
        } else {
            die("Error preparing statement: " . $this->conn->error);
        }
    }
}

// Initialize form data
$data = [
    'amount' => $_POST['amount'],
    'buyer' => $_POST['buyer'],
    'receipt_id' => $_POST['receipt_id'],
    'items' => $_POST['items'],
    'buyer_email' => $_POST['buyer_email'],
    'note' => $_POST['note'],
    'city' => $_POST['city'],
    'phone' => $_POST['phone'],
    'entry_by' => $_POST['entry_by']
];

// Create an instance of SubmissionHandler and insert the submission
$submissionHandler = new SubmissionHandler($conn, $data);
$submissionHandler->insertSubmission();

?>
