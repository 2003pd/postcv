<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Resume</title>
<style>
body{
    font-family: DejaVu Sans, sans-serif;
}
h1{ color:#3b2a7a; }
</style>
</head>
<body>

<h1>{{ $candidate->name }}</h1>

<p><strong>Profession:</strong> {{ $candidate->profession }}</p>
<p><strong>Expertise:</strong> {{ $candidate->expertise }}</p>
<p><strong>Country:</strong> {{ $candidate->country }}</p>
<p><strong>Email:</strong> {{ $candidate->email }}</p>

</body>
</html>
