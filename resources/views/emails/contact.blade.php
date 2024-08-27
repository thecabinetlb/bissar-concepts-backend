<!-- resources/views/emails/contact.blade.php -->
<p>Name: {{ $name ?? 'No name provided' }}</p>
<p>Email: {{ $email ?? 'No email provided' }}</p>
<p>Message: {{ $content ?? 'No message provided' }}</p>