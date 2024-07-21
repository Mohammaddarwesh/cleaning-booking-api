<!DOCTYPE html>
<html>
<head>
    <title>Booking Request</title>
</head>
<body>
    <h1>New Booking Request</h1>
    <p><strong>Frequency:</strong> {{ $data['frequency'] }}</p>
    <p><strong>Date and Time:</strong> {{ $data['date'] }}</p>
    <p><strong>Date and Time:</strong> {{ $data['time'] }}</p>
    <p><strong>Services:</strong> {{ implode(', ', $data['services']) }}</p>
    <p><strong>Estimated Hours:</strong> {{ $data['estimatedHours'] }}</p>
    <h2>Personal Information</h2>
    <p><strong>First Name:</strong> {{ $data['personalInfo']['firstName'] }}</p>
    <p><strong>Last Name:</strong> {{ $data['personalInfo']['lastName'] }}</p>
    <p><strong>Phone:</strong> {{ $data['personalInfo']['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['personalInfo']['email'] }}</p>
    <p><strong>Special Instructions:</strong> {{ $data['personalInfo']['specialInstructions'] }}</p>
    <p><strong>Address:</strong> {{ $data['personalInfo']['address'] }}</p>
    <p><strong>Floor:</strong> {{ $data['personalInfo']['floor'] }}</p>
    <p><strong>Entry Code:</strong> {{ $data['personalInfo']['entryCode'] }}</p>
    <p><strong>City:</strong> {{ $data['personalInfo']['city'] }}</p>
</body>
</html>
