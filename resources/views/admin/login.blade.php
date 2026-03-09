<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{
    box-sizing:border-box;
    font-family: 'Segoe UI', sans-serif;
}

body{
    margin:0;
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#ffffff;
}

.login-box{
    background:#fff;
    padding:40px 35px;
    width:360px;
    border-radius:12px;
    box-shadow:0 15px 35px rgba(0,0,0,0.15);
}

.login-box h2{
    text-align:center;
    margin-bottom:25px;
    color:#333;
}

.input-group{
    margin-bottom:18px;
}

.input-group input{
    width:100%;
    padding:12px 14px;
    border:1px solid #ddd;
    border-radius:8px;
    outline:none;
    font-size:14px;
    transition:0.2s;
}

.input-group input:focus{
    border-color:#ff3d00;
    box-shadow:0 0 0 2px rgba(255,61,0,0.1);
}

button{
    width:100%;
    padding:12px;
    background:#ff3d00;
    color:#fff;
    border:none;
    border-radius:8px;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#e63600;
}

.error{
    background:#ffe2dc;
    color:#b71c1c;
    padding:10px;
    border-radius:6px;
    text-align:center;
    margin-bottom:15px;
    font-size:14px;
}
</style>
</head>

<body>

<div class="login-box">

    <h2>Admin Login</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/admin/login">
        @csrf

        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit">Login</button>
    </form>

</div>

</body>
</html>
