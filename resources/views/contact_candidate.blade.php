<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Candidate</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
/* ===== GLOBAL ===== */
*{
    box-sizing:border-box;
    font-family:Segoe UI,sans-serif;
}
body{
    margin:0;
    background:linear-gradient(135deg,#eef2ff,#f8fafc);
}

/* ===== CONTAINER ===== */
.container{
    width:85%;
    margin:auto;
}

/* ===== HEADER TOP BAR ===== */
.top-bar{
    background:#3b3535;
    color:#fff;
    padding:8px 0;
}
.top-flex{
    display:flex;
    justify-content:space-between;
    align-items:center;
    flex-wrap:wrap;
    gap:10px;
}
.social-icons a{
    color:#fff;
    margin-right:12px;
    font-size:16px;
    text-decoration:none;
    white-space:nowrap;
}
.btn-apply{
    color:#fff;
    text-decoration:none;
    font-size:13px;
}
.btn-apply i{color:#ff6600;}

/* ===== MAIN HEADER ===== */
.main-header{
    background:#fff;
    border-bottom:1px solid #eee;
}
.nav-flex{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 0;
    flex-wrap:wrap;
    gap:15px;
}
.logo img{
    height:65px;
}

/* NAV */
.main-nav ul{
    list-style:none;
    display:flex;
    gap:30px;
    padding:0;
    margin:0;
    flex-wrap:wrap;
}
.main-nav a{
    text-decoration:none;
    color:#333;
    font-weight:600;
    letter-spacing:1.8px;
    font-size:14px;
}
.main-nav a:hover{color:#ff6600;}

/* ===== PAGE CENTER ===== */
.page-wrap{
    min-height:calc(100vh - 220px);
    display:flex;
    align-items:center;
    justify-content:center;
    padding:30px 15px;
}

/* ===== FORM ===== */
.form-wrapper{
    background:#fff;
    width:100%;
    max-width:420px;
    padding:28px 22px;
    border-radius:18px;
    box-shadow:0 18px 45px rgba(0,0,0,.2);
}
.form-wrapper h2{
    text-align:center;
    margin-bottom:18px;
    color:#3b2a7a;
    font-size:22px;
}
.candidate-name{
    text-align:center;
    font-size:14px;
    color:#555;
    margin-bottom:15px;
}
.success-msg{
    background:#ecfeff;
    color:#036672;
    padding:10px;
    border-radius:10px;
    margin-bottom:15px;
    text-align:center;
    font-size:14px;
}
.form-group{
    margin-bottom:15px;
}
.form-group input{
    width:100%;
    padding:14px;
    border-radius:10px;
    border:1px solid #d1d5db;
    font-size:15px;
}
.form-group input:focus{
    border-color:#ff4500;
    box-shadow:0 0 0 3px rgba(255,69,0,.18);
    outline:none;
}
button{
    width:100%;
    background:orangered;
    color:#fff;
    border:none;
    padding:14px;
    border-radius:10px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
}
.resume-btn{
    display:block;
    margin-top:14px;
    padding:12px;
    background:#3b2a7a;
    color:#fff;
    border-radius:10px;
    text-align:center;
    text-decoration:none;
    font-size:15px;
}

/* ===== FOOTER ===== */
footer{
    background:#1f2937;
    color:#cbd5e1;
    text-align:center;
    padding:18px 12px;
    font-size:14px;
}

/* ===== MOBILE FIXES ===== */
@media(max-width:768px){

    .container{
        width:95%;
    }

    .top-flex{
        flex-direction:column;
        text-align:center;
    }

    .social-icons{
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
        gap:10px;
    }

    .nav-flex{
        flex-direction:column;
        text-align:center;
    }

    .main-nav ul{
        justify-content:center;
        gap:18px;
    }

    .logo img{
        height:60px;
    }
}

/* SMALL PHONES */
@media(max-width:420px){

    .form-wrapper{
        padding:24px 18px;
    }

    .form-wrapper h2{
        font-size:20px;
    }

    .main-nav a{
        font-size:13px;
        letter-spacing:1.2px;
    }
}
</style>
</head>

<body>

<!-- ===== HEADER ===== -->
<div class="top-bar">
    <div class="container top-flex">

        <div class="social-icons">
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-rss"></i></a>
        </div>

        <div class="apply-btn">
            <a href="javascript:void(0)" class="btn-apply">
                <i class="fa fa-user"></i> APPLY FOR PROFESSIONAL
            </a>
        </div>

    </div>
</div>

<header class="main-header">
    <div class="container nav-flex">
          <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Posturcv">
            </a>
        </div>

        <nav class="main-nav">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/about">ABOUT</a></li>
                <li><a href="{{ route('job') }}">JOBS</a></li>
                <li><a href="/professionals">PROFESSIONALS</a></li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- ===== PAGE CONTENT ===== -->
<div class="page-wrap">
    <div class="form-wrapper">

        <h2>Fill this form before viewing resume</h2>

        <div class="candidate-name">
            Candidate: <strong>{{ $candidate->name }}</strong>
        </div>

        @if(session('success'))
            <div class="success-msg">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('candidate.submit') }}">
            @csrf
            <input type="hidden" name="candidate_id" value="{{ $candidate->id }}">

            <div class="form-group">
                <input type="text" name="company_name" placeholder="Company Name" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Company Email" required>
            </div>

            <div class="form-group">
                <input type="tel" name="phone" placeholder="Phone Number" required>
            </div>

            <button type="submit">Send Request</button>
        </form>

        @if(session('showResume'))
            <a href="{{ route('candidate.resume', session('candidateId')) }}"
               target="_blank" class="resume-btn">
                Open Resume
            </a>
        @endif

    </div>
</div>

<!-- ===== FOOTER ===== -->
 @include('components.footer')

</body>
</html>
