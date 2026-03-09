<!DOCTYPE html>
<html>
<head>
<style>
body{ font-family: DejaVu Sans; }
.box{
    border:1px solid #000;
    padding:20px;
}
</style>
</head>
<body>

<h2>Professional Details</h2>

<div class="box">
<p><b>Profession:</b> {{ $data['profession'] }}</p>
<p><b>Name:</b> {{ $data['name'] }}</p>
<p><b>Email:</b> {{ $data['email'] }}</p>
<p><b>Mobile:</b> {{ $data['mobile'] }}</p>
</div>

</body>
</html>
