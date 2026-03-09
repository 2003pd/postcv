<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<style>
form{
    width:400px;
    margin:80px auto;
    background:#fff;
    padding:30px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}
input,button{
    width:100%;
    padding:10px;
    margin-top:15px;
}
</style>
</head>
<body>

<form method="POST" action="{{ route('profession.pdf') }}">
@csrf

<h3>{{ $profession }} Form</h3>

<input type="hidden" name="profession" value="{{ $profession }}">

<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="mobile" placeholder="Mobile" required>

<button type="submit">Generate PDF</button>

</form>

</body>
</html>
