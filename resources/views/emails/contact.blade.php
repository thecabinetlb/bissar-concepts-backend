<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body>
    <p>Name: {{ $contact['name'] }}</p>
    <p>Email: {{ $contact['email'] }}</p>
    <p>Message: {{ $contact['content'] }}</p>
</body>
</html>
