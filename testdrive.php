<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize form inputs
    $fullName = htmlspecialchars($_POST['fullName']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $license = htmlspecialchars($_POST['license']);
    $address = htmlspecialchars($_POST['address']);
    $pincode = htmlspecialchars($_POST['pincode']);
    $testDate = htmlspecialchars($_POST['testDate']);
    $testTime = htmlspecialchars($_POST['testTime']);

    // Get the selected cars (Checkboxes)
    $selectedCars = isset($_POST['car']) ? $_POST['car'] : [];

    // Optional: Validate the email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Optional: Handle cases where no car is selected
    if (empty($selectedCars)) {
        echo "Please select at least one car.";
        exit;
    }

    // Display the booking confirmation
    echo "<h2>Test Drive Booking Successful!</h2>";
    echo "<p>Thank you, <strong>$fullName</strong>. Your test drive has been booked with the following details:</p>";
    echo "<ul>";
    echo "<li><strong>Full Name:</strong> $fullName</li>";
    echo "<li><strong>Phone Number:</strong> $phone</li>";
    echo "<li><strong>Email Address:</strong> $email</li>";
    echo "<li><strong>Driving License Number:</strong> $license</li>";
    echo "<li><strong>Address:</strong> $address</li>";
    echo "<li><strong>Pincode:</strong> $pincode</li>";
    echo "<li><strong>Test Drive Date:</strong> $testDate</li>";
    echo "<li><strong>Test Drive Time:</strong> $testTime</li>";
    echo "<li><strong>Selected Cars:</strong></li>";
    echo "<ul>";
    foreach ($selectedCars as $car) {
        echo "<li>$car</li>";
    }
    echo "</ul>";
    echo "</ul>";

} else {
    // If the form was not submitted correctly, redirect back to the form page
    header("Location: test-drive-form.html");  // Update this to match your HTML file's name
    exit;
}
?>
