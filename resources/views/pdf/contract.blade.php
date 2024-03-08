<!-- resources/views/pdf/contract.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract PDF</title>
    <style>
        /* Add your custom styles for the PDF content */
    </style>
</head>
<body>
    <h1>Contract Details</h1>
    <p>Name: {{ $contract->first_name }} {{ $contract->last_name }}</p>
    <p>Address: {{ $contract->address }}</p>
    <p>Phone Number: {{ $contract->phone_number }}</p>
    <p>Email Address: {{ $contract->email_address }}</p>
    <p>Identification: {{ $contract->identification }}</p>
    <p>Date of Birth: {{ $contract->date_of_birth }}</p>
    <p>Company/Position: {{ $contract->company_position }}</p>
    <p>Witnesses: {{ $contract->witnesses }}</p>
    <p>Effective Date: {{ $contract->effective_date }}</p>
    <p>Payment Information: {{ $contract->payment_information }}</p>
    <p>Jurisdiction: {{ $contract->jurisdiction }}</p>
    <p>Signature: {{ $contract->signature_party1 }}</p>
    <p>Notary Public: {{ $contract->notary_public }}</p>
    <p>Terms Conditions: {{ $contract->terms_conditions }}</p>
    <p>File Type: {{ $contract->file_type }}</p>

    <!-- Add more contract details as needed -->
</body>
</html>