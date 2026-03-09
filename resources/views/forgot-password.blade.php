<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body{
    min-height:100vh;
    background:#f0f2f5;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:15px;
}

.box{
    width:100%;
    max-width:420px;
    background:#fff;
    padding:25px 22px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.box h3{
    text-align:center;
    margin-bottom:15px;
}

.box p{
    font-size:14px;
    text-align:center;
    margin-bottom:15px;
    color:#555;
}

.alert{
    background:#ffe0e0;
    color:#b00020;
    padding:10px;
    border-radius:6px;
    font-size:14px;
    margin-bottom:12px;
    text-align:center;
}

input{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:6px;
    font-size:15px;
}

button{
    width:100%;
    margin-top:15px;
    padding:12px;
    background:#198754;
    color:#fff;
    border:none;
    border-radius:6px;
    font-size:16px;
    cursor:pointer;
}

button:active{
    transform:scale(0.98);
}

.back{
    text-align:center;
    margin-top:15px;
}

.back a{
    color:#198754;
    text-decoration:none;
    font-size:14px;
}
</style>
</head>

<body>

<div class="box">
    <h3>Forgot Password</h3>
    <p>Enter your registered email to reset password</p>

    @if(session('error'))
        <div class="alert">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('company.forgot.submit') }}">
        @csrf
        <input type="email" name="email" placeholder="Enter registered email" required>
        <button type="submit">Continue</button>
    </form>

    <div class="back">
        <a href="/login">← Back to Login</a>
    </div>
</div>

</body>
</html>
