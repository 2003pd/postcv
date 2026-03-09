<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Company Login / Register</title>

<style>
*{
    box-sizing:border-box;
}
body{
    font-family: Arial, sans-serif;
    height:100vh;
    background:#f0f2f5;
    margin:0;
}
.modal{
    display:flex;
    justify-content:center;
    align-items:center;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.6);
    padding:15px;
}
.modal-box{
    background:#fff;
    width:100%;
    max-width:420px;
    padding:26px;
    border-radius:14px;
    box-shadow:0 10px 30px rgba(0,0,0,0.25);
    position:relative;
}
.modal-box h2{
    margin-bottom:18px;
    text-align:center;
    font-size:22px;
}
.modal-box input{
    width:100%;
    padding:14px;
    margin-bottom:14px;
    border:1px solid #ccc;
    border-radius:6px;
    font-size:16px;
}
.password-wrap{
    position:relative;
}
.password-wrap span{
    position:absolute;
    right:14px;
    top:50%;
    transform:translateY(-50%);
    cursor:pointer;
    font-size:14px;
    color:#555;
}
.modal-box button{
    width:100%;
    padding:14px;
    background:#198754;
    color:#fff;
    border:none;
    border-radius:6px; /* rectangle */
    font-size:16px;
    cursor:pointer;
}
.modal-box button:hover{
    background:#146c43;
}
.close{
    position:absolute;
    top:12px;
    right:14px;
    cursor:pointer;
    font-size:22px;
}
.note{
    font-size:14px;
    text-align:center;
    color:#666;
    margin-top:16px;
    cursor:pointer;
}
.forgot{
    text-align:right;
    margin-top:8px;
}
.forgot a{
    font-size:14px;
    color:#198754;
    text-decoration:none;
}
.hidden{
    display:none;
}

/* Mobile */
@media (max-width: 480px) {
    .modal-box{
        padding:22px;
        border-radius:12px;
    }
    .modal-box h2{
        font-size:20px;
    }
}
</style>
</head>
<body>

<div class="modal">
    <div class="modal-box">
        <span class="close" onclick="window.location.href='/'">✖</span>

        <h2 id="formTitle">Company Register</h2>

        {{-- ERROR MESSAGE --}}
        @if(session('error'))
            <p style="color:red;text-align:center;font-size:14px;">
                {{ session('error') }}
            </p>
        @endif

        <form action="{{ route('company.join') }}" method="POST">
            @csrf

            <input type="email" name="email" placeholder="Email" required>

            <div class="password-wrap">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span onclick="togglePassword()">👁</span>
            </div>

            <input type="hidden" name="mode" id="mode" value="register">

            <div id="registerFields">
                <input type="text" name="company_name" placeholder="Company Name">
                <input type="text" name="phone_number" placeholder="Phone Number">
            </div>

            <button type="submit">Continue</button>

            <div class="forgot" id="forgotBox" style="display:none;">
                <a href="/forgot-password">Forgot Password?</a>
            </div>
        </form>

        <div class="note" onclick="toggleForm()">
            Already have an account? <b>Login</b>
        </div>
    </div>
</div>

<script>
let isLogin = false;

function toggleForm() {
    isLogin = !isLogin;

    document.getElementById('registerFields').classList.toggle('hidden');

    document.getElementById('formTitle').innerText =
        isLogin ? 'Company Login' : 'Company Register';

    document.querySelector('.note').innerHTML =
        isLogin
        ? "New company? <b>Register</b>"
        : "Already have an account? <b>Login</b>";

    document.getElementById('mode').value =
        isLogin ? 'login' : 'register';

    document.getElementById('forgotBox').style.display =
        isLogin ? 'block' : 'none';
}

function togglePassword() {
    const pwd = document.getElementById('password');
    pwd.type = pwd.type === 'password' ? 'text' : 'password';
}
</script>

</body>
</html>
