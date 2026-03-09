<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>

 .dual-card-section {
    padding: 60px 20px;
    text-align: center;
    background: #f9f9f9;
}

.dual-card-section h2 {
    margin-bottom: 40px;
    font-size: 28px;
}

.card-wrapper {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}

.role-card {
    width: 320px;
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.role-card:hover {
    transform: translateY(-6px);
}

.role-card h3 {
    font-size: 22px;
    margin-bottom: 10px;
}

.role-card p {
    color: #666;
    margin-bottom: 20px;
}

.role-card .btn {
    display: inline-block;
    padding: 10px 25px;
    border-radius: 25px;
    text-decoration: none;
    color: #fff;
    background: #0d6efd;
}

.company-card .btn {
    background: #198754;
}

.btn-apply {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    border-radius: 25px;
    background: #0d6efd;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
}

.btn-apply:hover {
    background: #0b5ed7;
}
  /* form css */


  .modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    z-index: 999;
}

.modal-box {
    background: #fff;
    width: 400px;
    padding: 25px;
    border-radius: 12px;
    margin: 8% auto;
    position: relative;
}

.modal-box input {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
}

.close {
    position: absolute;
    right: 15px;
    top: 10px;
    cursor: pointer;
}

.btn-submit {
    width: 100%;
    padding: 10px;
    background: #198754;
    color: #fff;
    border: none;
    border-radius: 8px;
}
#mainHeader {
    display: none;
}
.simple-navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 40px;
    background: #ffffff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.nav-logo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.nav-logo img {
    width: 150px;
    height: auto;
    transition: 0.3s;
}


.nav-logo span {
    font-size: 20px;
    font-weight: 600;
    color: #27ae60;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 25px;
}

.nav-links li a {
    text-decoration: none;
    color: #333;
    font-size: 15px;
    font-weight: 500;
    transition: 0.3s;
}

.nav-links li a:hover {
    color: #27ae60;
}

.welcome-section {
    min-height: 70vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #e8f5e9, #ffffff);
    padding: 40px 20px;
}

.welcome-box {
    text-align: center;
    background: #ffffff;
    padding: 50px 40px;
    border-radius: 16px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    max-width: 600px;
}

.welcome-box h1 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #2c3e50;
}

.welcome-box h1 span {
    color: #27ae60;
}

.welcome-box p {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
}


#mainHeader {
    display: none;
}




.simple-navbar {
    display: flex;
}

/* ===== RESPONSIVE CSS FOR PHONES & TABLETS ===== */

/* Tablets / Small Screens */
@media (max-width: 768px) {
    .dual-card-section {
        padding: 40px 15px;
    }

    .dual-card-section h2 {
        font-size: 24px;
        margin-bottom: 30px;
    }

    .card-wrapper {
        flex-direction: column;   /* Cards stack vertically */
        gap: 20px;
        align-items: center;
    }

    .role-card {
        width: 90%;               /* Cards take almost full width */
        padding: 25px 20px;
    }

    .role-card h3 {
        font-size: 20px;
    }

    .role-card p {
        font-size: 14px;
    }

    .btn, .btn-apply {
        padding: 10px 20px;
        font-size: 14px;
    }
}

/* Phones / Extra Small Screens */
@media (max-width: 480px) {
    .dual-card-section {
        padding: 30px 10px;
    }

    .dual-card-section h2 {
        font-size: 20px;
    }

    .role-card {
        padding: 20px 15px;
    }

    .welcome-box {
        padding: 30px 20px;
    }

    .welcome-box h1 {
        font-size: 28px;
    }

    .welcome-box p {
        font-size: 14px;
    }

    .modal-box {
        width: 90%;             /* Modal fits screen */
        margin: 15% auto;
        padding: 20px;
    }

    .btn-submit {
        padding: 10px;
        font-size: 14px;
    }

    .nav-logo img {
        width: 120px;           /* Logo smaller */
    }

    .nav-links {
        gap: 15px;
        font-size: 14px;
    }
}
/* ===== WHY SECTION ===== */
.why-posturcv{
    padding:70px 20px;
    background:#ffffff;
    text-align:center;
}

.why-posturcv h2{
    font-size:32px;
    margin-bottom:50px;
    color:#2c3e50;
}

.why-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
    max-width:1100px;
    margin:0 auto;
}

.why-card{
    background:#f9f9f9;
    padding:30px 25px;
    border-radius:16px;
    box-shadow:0 10px 25px rgba(0,0,0,0.07);
    transition:.3s;
}

.why-card:hover{
    transform:translateY(-6px);
}

.why-card h3{
    font-size:20px;
    margin-bottom:12px;
    color:#198754;
}

.why-card p{
    font-size:15px;
    color:#555;
    line-height:1.6;
}

/* ===== RESPONSIVE ===== */
@media(max-width:900px){
    .why-grid{
        grid-template-columns:1fr 1fr;
    }
}

@media(max-width:600px){
    .why-grid{
        grid-template-columns:1fr;
    }
    .why-posturcv h2{
        font-size:26px;
    }
}
/* ===== NAVBAR ===== */
.simple-navbar{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:14px 30px;
    background:#ffffff;
    box-shadow:0 4px 20px rgba(0,0,0,0.06);
    position:sticky;
    top:0;
    z-index:1000;
}

/* LEFT */
.nav-logo{
    width:140px;
}

/* CENTER MENU */
.nav-menu{
    list-style:none;
    display:flex;
    gap:28px;
    padding:0;
    margin:0;
}

.nav-menu li a{
    text-decoration:none;
    font-size:14px;
    letter-spacing:1px;
    color:#333;
    font-weight:600;
    transition:.3s;
}

.nav-menu li a:hover{
    color:#ff6a00;
}

/* RIGHT */
.nav-right{
    display:flex;
    align-items:center;
    gap:14px;
}

.nav-user-img{
    width:36px;
    height:36px;
    border-radius:50%;
    object-fit:cover;
    border:2px solid #198754;
}

.nav-btn{
    background:#1e6cff;
    color:#fff;
    padding:10px 18px;
    border-radius:22px;
    text-decoration:none;
    font-size:13px;
    font-weight:600;
    transition:.3s;
}

.nav-btn:hover{
    background:#1557cc;
}

/* ===== RESPONSIVE ===== */
@media(max-width:992px){
    .nav-menu{
        display:none;
    }
}

@media(max-width:600px){
    .simple-navbar{
        padding:12px 18px;
    }
    .nav-btn{
        padding:8px 14px;
        font-size:12px;
    }
}
    </style>
<body>



<header id="mainHeader" style="display:none;">
    @include('components.header')
</header>

<nav class="simple-navbar">
    <!-- LEFT : LOGO -->
    <div class="nav-left">
        <img src="images/logo.png" alt="PosturCV Logo" class="nav-logo">
    </div>

    <!-- CENTER : MENU -->
    <ul class="nav-menu">
        <li><a href="/">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Jobs</a></li>
      
        <li><a href="#">Contact</a></li>
    </ul>

    <!-- RIGHT : IMAGE + BUTTON -->
    <div class="nav-right">
        
        <a href="#" class="nav-btn">Apply for Professional</a>
    </div>
</nav>



<!-- <section class="welcome-section">
    <div class="welcome-box">
        <h1>Welcome to <span>PosturCV</span></h1>
        <p>Your trusted platform to connect with professionals and companies.</p>
    </div>
</section> -->

<!-- ===== WHY CHOOSE POSTURCV ===== -->
<section class="why-posturcv">
    <h2>Why Choose PosturCV?</h2>

    <div class="why-grid">
        <div class="why-card">
            <h3>Verified Professionals</h3>
            <p>
                Connect only with trusted and verified professionals
                who genuinely match your requirements.
            </p>
        </div>

        <div class="why-card">
            <h3>Smart Matching</h3>
            <p>
                Our platform helps companies find the right talent
                faster with intelligent profile matching.
            </p>
        </div>

        <div class="why-card">
            <h3>Simple & Secure</h3>
            <p>
                Easy onboarding, secure data handling, and a smooth
                experience for both professionals and companies.
            </p>
        </div>
    </div>
</section>

<!-- section for entry -->
<section class="dual-card-section">
    <h2>Choose How You Want to Continue</h2>

    <div class="card-wrapper">
        <!-- User Card -->
        <div class="role-card user-card">
            <h3>For Professional</h3>
            <p>Find services, professionals and get help easily.</p>
   <!-- <a href="javascript:void(0)" class="btn-apply" onclick="userSelected()">
    <i class="fa fa-user"></i> Create Your Profile
</a> -->
<a href="javascript:void(0)"
   onclick="userSelected()"
   style="
     background:#198754;
     color:#ffffff;
     padding:12px 22px;
     border-radius:6px;
     font-size:15px;
     cursor:pointer;
     display:inline-flex;
     align-items:center;
     gap:8px;
     text-decoration:none;
     border:none;
   ">
   <i class="fa fa-user"></i> Create Your Profile
</a>


        </div>

        <!-- Company Card -->
        <div class="role-card company-card">
            <h3>For Company</h3>
            <p>List your services and grow your business with us.</p>
            <!-- <a href="javascript:void(0)" class="btn" onclick="companySelected()">
    Join as Company
</a> -->
<button type="button"
    onclick="window.location.href='/login'"
    style="
        background:#198754;
        color:#ffffff;
        padding:12px 22px;
        border-radius:6px;
        font-size:15px;
        cursor:pointer;
        display:inline-flex;
        align-items:center;
        gap:8px;
        border:none;
    ">
    Login as a company
</button>


        </div>
    </div>

<!-- <section class="welcome-section">
    <div class="welcome-box">
        <h1>Welcome to <span>PosturCV</span></h1>
        <p>Your trusted platform to connect with professionals and companies.</p>
    </div>
</section>  -->






</section>
<div id="companyModal" class="modal">
    <div class="modal-box">
        <span class="close" onclick="closeCompanyForm()">✖</span>

        <h3>Register Your Company</h3>

          @if(session('success'))
        <div class="success-msg">
            {{ session('success') }}
        </div>
    @endif

        <form action="{{ route('company.store') }}" method="POST">
            @csrf

            <input type="text" name="company_name" placeholder="Company Name" required>
            <input type="text" name="owner_name" placeholder="Owner Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>

            <button type="submit" class="btn-submit">Submit</button>
            <br><br>
          <button type="button" class="btn-submit" onclick="window.location.href='/login'">
    Login as a company
</button>


        </form>
    </div>
</div>

  <!-- ===== SUCCESS MODAL ===== -->
@if(session('success'))
<div id="successModal" class="modal" style="display:block">
    <div class="modal-box" style="text-align:center">
        <span class="close" onclick="closeSuccess()">✖</span>

        <h2 style="color:#198754;margin-bottom:10px;">🎉 Success!</h2>
        <p style="font-size:15px;color:#555;">
            {{ session('success') }}
        </p>

        <button class="btn-submit" style="margin-top:15px" onclick="closeSuccess()">
            OK
        </button>
    </div>
</div>
@endif
  



@include('components.footer')

{{-- ===== SUCCESS MESSAGE MODAL (SAME PAGE) ===== --}}
@if(session('success'))
<div id="successModal" class="modal" style="display:block">
    <div class="modal-box" style="text-align:center">
        <span class="close" onclick="closeSuccess()">✖</span>

        <h2 style="color:#198754;margin-bottom:10px;">🎉 Applied!</h2>
        <p style="font-size:15px;color:#555;">
            {{ session('success') }}
        </p>

        <button class="btn-submit" style="margin-top:15px" onclick="closeSuccess()">
            OK
        </button>
    </div>
</div>
@endif



<script>
/* ========= COMPANY MODAL ========= */
function openCompanyForm() {
    document.getElementById('companyModal').style.display = 'block';
}

function closeCompanyForm() {
    document.getElementById('companyModal').style.display = 'none';
}

/* ========= SHOW HEADER & HIDE OLD NAV ========= */
function showHeader() {
    const header = document.getElementById('mainHeader');
    const oldNav = document.querySelector('.simple-navbar');

    if (header) header.style.display = 'block';
    if (oldNav) oldNav.style.display = 'none'; // 🔥 yahi missing tha
}

/* ========= PROFESSIONAL ========= */
function userSelected() {
    showHeader();

    if (typeof openForm === "function") {
        openForm();
    }
}

/* ========= COMPANY ========= */
function companySelected() {
    showHeader();
    openCompanyForm();
}

/* ========= PAGE LOAD ========= */
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("companyModal");
    if (modal) modal.style.display = "none";
});



function closeSuccess(){
    const modal = document.getElementById('successModal');
    if(modal) modal.style.display = 'none';

    // instant redirect on OK / ✖
    window.location.href = "/professionals";
}

@if(session('success'))
// auto redirect after 3 seconds
setTimeout(function () {
    window.location.href = "/professionals";
}, 3000);
@endif



function closeSuccess(){
    const modal = document.getElementById('successModal');
    if(modal) modal.style.display = 'none';
}



</script>


</body>
</html> 