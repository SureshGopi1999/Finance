<?php
require('function.php');

// Retrieve the loan number
$loanno = $_POST['loanno'];

// Folder to store uploaded documents
$uploadDir = 'documents/';

// Ensure the directory exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Array of file inputs
$fileInputs = ['aadhar', 'cheque', 'ec', 'pan', 'paper', 'doc', 'rc'];

// Array to store file paths for database insertion
$filePaths = [];

// Handle each file upload
foreach ($fileInputs as $input) {
    if (isset($_FILES[$input]) && $_FILES[$input]['error'] === UPLOAD_ERR_OK) {
        // Get the file's original name and path
        $fileName = basename($_FILES[$input]['name']);
        $targetFilePath = $uploadDir . $fileName;

        // Move the file to the uploads directory
        if (move_uploaded_file($_FILES[$input]['tmp_name'], $targetFilePath)) {
            $filePaths[$input] = $targetFilePath; // Save file path
        } else {
            $filePaths[$input] = null; // Mark as failed
        }
    } else {
        $filePaths[$input] = null; // No file uploaded for this input
    }
}

// Insert file paths into the database
$db = new data(); // Assuming `data` is your class
$res = $db->docupload(
    'document_upload',
    $loanno,
    $filePaths['aadhar'],
    $filePaths['cheque'],
    $filePaths['ec'],
    $filePaths['pan'],
    $filePaths['paper'],
    $filePaths['doc'],
    $filePaths['rc']
);

if ($res) {
    echo "Documents uploaded and data saved successfully!";
} else {
    echo "Error saving document data!";
}
?>
