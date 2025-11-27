<?php
// Contact form handler
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $company = trim($_POST['company'] ?? '');
    $serviceInput = $_POST['service'] ?? '';
    if (is_array($serviceInput)) {
        $serviceArray = array_filter(array_map('trim', $serviceInput));
        $service = !empty($serviceArray) ? implode(', ', $serviceArray) : '';
    } else {
        $service = trim($serviceInput);
    }
    $budget = trim($_POST['budget'] ?? '');
    $timeline = trim($_POST['timeline'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Basic validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Prepare email content
        $to = 'info@aibitsol.com';
        $subject = 'New Contact Form Submission - ' . $name;
        
        $email_body = "New contact form submission:\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Phone: " . ($phone ?: 'Not provided') . "\n";
        $email_body .= "Company: " . ($company ?: 'Not provided') . "\n";
        $email_body .= "Service Interest: " . ($service ?: 'Not specified') . "\n";
        $email_body .= "Budget: " . ($budget ?: 'Not specified') . "\n";
        $email_body .= "Timeline: " . ($timeline ?: 'Not specified') . "\n";
        $email_body .= "Message:\n$message\n";
        
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Send email
        if (mail($to, $subject, $email_body, $headers)) {
            // Redirect to success page
            header('Location: /?page=contact&success=1');
            exit;
        } else {
            $errors[] = 'Failed to send message. Please try again.';
        }
    }
    
    // If there are errors, redirect back with error message
    if (!empty($errors)) {
        $error_message = implode(', ', $errors);
        header('Location: /?page=contact&error=' . urlencode($error_message));
        exit;
    }
} else {
    // If not POST request, redirect to contact page
    header('Location: /?page=contact');
    exit;
}
?>