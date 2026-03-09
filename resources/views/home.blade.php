<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>

  /* 🔥 EMERGENCY CHECK */
body {
    border: 5px solid red !important;
}

.hero-wrapper{
    position: relative;
    height: 450px;
     margin-bottom: 120px;
}

.hero-wrapper .carousel,
.hero-wrapper .carousel-inner,
.hero-wrapper .carousel-item{
    height:100%;
}

.hero-wrapper img{
    object-fit: cover;
    height:100%;
}

.search-section{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%, -50%);
    background:rgba(0,0,0,0.6);
    padding:30px 35px;
    border-radius:12px;
    width:85%;
    max-width:1000px;
    color:#fff;
    z-index:10;
}

.search-section h2{
    text-align:center;
    margin-bottom:15px;
    color:#fff;
}

.search-box{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}

.search-box select{
    flex:1;
    padding:10px;
    border-radius:6px;
    border:none;
}

.search-box button{
    background:#ff6600;
    color:#fff;
    border:none;
    padding:0 20px;
    border-radius:6px;
}
.stats-section {
    display: flex;
    justify-content: space-around;
    align-items: center;
    text-align: center;
    padding: 60px 20px;
    background: #f8f8f8;
    flex-wrap: wrap; /* 🔥 allows items to move to next line */
    gap: 20px;
}
@media (max-width: 768px) {
    .stats-section {
        flex-direction: column; /* stack vertically */
        padding: 40px 15px;
    }
}


.stat-box h2{
    font-size:40px;
    margin:15px 0 5px;
    color:#333;
}

.stat-box p{
    letter-spacing:1px;
    color:#888;
}

.icon-circle{
    width:100px;
    height:100px;
    background:#fff;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto;
    font-size:30px;
    color:#444;
}
.professionals-section{
    width:85%;
    margin:60px auto;
    font-family: Arial, sans-serif;
}

.pro-title{
    text-align:center;
    font-size:28px;
    margin-bottom:5px;
}

.pro-sub{
    text-align:center;
    color:#888;
    margin-bottom:40px;
}

.pro-card{
    background:#fff;
    border:1px solid #eee;
    border-radius:6px;
    padding:20px;
    margin-bottom:20px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    transition:0.3s;
}

.pro-card:hover{
    border-color:#ff9800;
}

.pro-left{
    display:flex;
    align-items:center;
    gap:15px;
    width:45%;
}

.pro-left img{
    width:70px;
    height:70px;
    object-fit:cover;
    border-radius:6px;
}

.pro-left h4{
    margin:0 0 5px;
}

.pro-left p{
    margin:0;
    font-size:13px;
    color:#777;
}

.pro-middle{
    width:30%;
    color:#777;
    font-size:14px;
}

.pro-middle span{
    display:block;
    margin-bottom:5px;
}

.rating{
    color:#ffb400;
}

.pro-right{
    width:25%;
    text-align:right;
}

.cat{
    color:#ff9800;
    font-weight:600;
    display:block;
}

.pro-right small{
    color:#999;
}
/* ===worker=== */
.career-banner{
    display:flex;
    background:#3f3b3f;
    height:340px;
    position:relative;
    overflow:hidden;
}

.career-box{
    flex:1;
    position:relative;
    padding:40px 30px;
    color:#fff;
}

.career-box h3{
    font-size:20px;
    font-weight:300;
    line-height:28px;
    z-index:5;
    position:relative;
}

.career-box span{
    font-weight:700;
    font-size:22px;
}

.worker-img{
    position:absolute;
    bottom:0;
    left:50%;
    transform:translateX(-50%);
    height:360px;
    z-index:2;
    opacity:0.9;
}

.see-bar{
    position:absolute;
    bottom:70px;
    left:0;
    right:0;
    background:#ff2a00;
    text-align:center;
    padding:10px 0;
    font-size:12px;
    letter-spacing:2px;
    z-index:3;
}
/* ===our services and professional review== */
body{
  font-family: Arial, sans-serif;
  background:#fff;
}

.section-title{
  text-align:center;
  font-size:32px;
  margin-top:60px;
  margin-bottom:5px;
}

.section-sub{
  text-align:center;
  color:#aaa;
  margin-bottom:40px;
}

/* ===== SERVICES ===== */

.services-grid{
  width:80%;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:40px;
}

.service-box{
  text-align:center;
}

.icon-circle{
  width:90px;
  height:90px;
  margin:auto;
  border-radius:50%;
  background:#ffe6dc;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:32px;
  color:#ff4a00;
  box-shadow:0 0 0 8px #fff, 0 0 0 12px #ffe6dc;
}

.service-box h3{
  margin-top:20px;
  font-size:20px;
}

.service-box p{
  color:#777;
  font-size:14px;
  line-height:22px;
}

/* ===== REVIEWS ===== */
/* ===== REVIEWS GRID ===== */
.reviews-grid{
  width:85%;
  margin:60px auto;
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:28px;
}

/* ===== REVIEW CARD ===== */
.review-box{
  background:linear-gradient(180deg,#ffffff,#f8fafc);
  border-radius:18px;
  padding:26px 24px;
  position:relative;
  box-shadow:0 18px 40px rgba(0,0,0,.12);
  transition:.35s ease;
  overflow:hidden;
}

/* Color accent bar */
.review-box::before{
  content:'';
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:5px;
  background:linear-gradient(90deg,#6366f1,#22d3ee,#ec4899);
}

/* Speech bubble arrow */
.review-box::after{
  content:'';
  position:absolute;
  bottom:-14px;
  left:34px;
  width:0;
  height:0;
  border-left:14px solid transparent;
  border-right:14px solid transparent;
  border-top:14px solid #ffffff;
}

/* Quote icon */
.review-box span.quote{
  position:absolute;
  top:14px;
  right:18px;
  font-size:46px;
  color:#e5e7eb;
}

/* Review text */
.review-box p{
  font-style:italic;
  color:#475569;
  font-size:15px;
  line-height:1.7;
  margin-bottom:22px;
}

/* Name */
.review-box .name{
  display:block;
  margin-top:10px;
  font-weight:700;
  font-size:14px;
  letter-spacing:1px;
  color:#1e3a8a;
}

/* Role */
.review-box small{
  color:#64748b;
  font-size:13px;
}

/* Hover effect */
.review-box:hover{
  transform:translateY(-10px);
  box-shadow:0 28px 60px rgba(0,0,0,.18);
}

/* ===== TABLET ===== */
@media(max-width:1024px){
  .reviews-grid{
    width:90%;
    grid-template-columns:repeat(2,1fr);
  }
}

/* ===== MOBILE ===== */
@media(max-width:600px){
  .reviews-grid{
    width:95%;
    margin:40px auto;
    grid-template-columns:1fr;
  }

  .review-box{
    padding:22px 18px;
  }

  .review-box p{
    font-size:14px;
  }

  .review-box::after{
    left:24px;
  }
}



@media (max-width: 768px){

/* === HERO FIX === */
.hero-wrapper{
    height:auto;
}

.hero-wrapper img{
    width:100%;
}

/* === SEARCH BOX FIX === */
.search-section{
    width:92%;
    padding:20px;
}

.search-box{
    flex-direction:column;
}

.search-box select,
.search-box button{
    width:100%;
}

/* === STATS FIX === */
.stats-section{
    flex-wrap:wrap;
    gap:30px;
    padding:40px 0;
}

.icon-circle{
    width:80px;
    height:80px;
    font-size:24px;
}

.stat-box h2{
    font-size:30px;
}

/* === PROFESSIONALS FIX === */
.professionals-section{
    width:95%;
}

.pro-card{
    flex-direction:column;
    text-align:left;
}

.pro-left,
.pro-middle,
.pro-right{
    width:100%;
    margin-bottom:10px;
}

.pro-right{
    text-align:left;
}

/* === CAREER / WORKER FIX === */
.career-banner{
    flex-direction:column;
    height:auto;
}

.worker-img{
    position:relative;
    height:260px;
    margin:auto;
}

.see-bar{
    position:relative;
    bottom:0;
}

/* === SERVICES FIX === */
.services-grid{
    width:95%;
    grid-template-columns:1fr;
}

/* === REVIEWS FIX === */
/* /* ===== PROFESSIONAL REVIEWS ===== */
.reviews-section{
    padding:70px 15px;
    background:linear-gradient(135deg,#0f172a,#1e293b);
    color:#e5e7eb;
}

.section-title{
    text-align:center;
    font-size:34px;
    font-weight:800;
    letter-spacing:1px;
    margin-bottom:8px;
    color:#ffffff;
}

.section-sub{
    text-align:center;
    font-size:15px;
    text-transform:uppercase;
    letter-spacing:2px;
    color:#94a3b8;
    margin-bottom:55px;
}

/* GRID */
.reviews-grid{
    max-width:1200px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:30px;
}

/* CARD */
.review-box{
    background:linear-gradient(180deg,#1e293b,#0f172a);
    padding:28px 26px;
    border-radius:22px;
    position:relative;
    box-shadow:0 20px 40px rgba(0,0,0,.45);
    transition:.4s ease;
    overflow:hidden;
}

/* Glow border */
.review-box::before{
    content:"";
    position:absolute;
    inset:0;
    border-radius:22px;
    padding:2px;
    background:linear-gradient(135deg,#38bdf8,#6366f1,#ec4899);
    -webkit-mask:
        linear-gradient(#000 0 0) content-box,
        linear-gradient(#000 0 0);
    -webkit-mask-composite:xor;
            mask-composite:exclude;
}

/* Quote icon */
.review-box::after{
    content:"❝";
    position:absolute;
    top:16px;
    right:20px;
    font-size:58px;
    color:rgba(255,255,255,.06);
}

/* Text */
.review-box p{
    font-size:15px;
    line-height:1.7;
    color:#e5e7eb;
    margin-bottom:18px;
}

/* Name */
.review-box .name{
    display:block;
    font-size:14px;
    font-weight:700;
    letter-spacing:1.4px;
    color:#38bdf8;
}

/* Role */
.review-box small{
    font-size:13px;
    color:#94a3b8;
}

/* Hover */
.review-box:hover{
    transform:translateY(-10px) scale(1.02);
    box-shadow:0 30px 60px rgba(0,0,0,.65);
}

/* ===== MOBILE ===== */
@media(max-width:768px){
    .reviews-section{
        padding:55px 12px;
    }

    .section-title{
        font-size:26px;
    }

    .section-sub{
        font-size:13px;
        margin-bottom:35px;
    }

    .review-box{
        padding:24px 20px;
    }

    .review-box p{
        font-size:14px;
    }
}

/* SMALL PHONES */
@media(max-width:420px){
    .section-title{
        font-size:23px;
        
    }
}
 */

}

.candidate-profile {
    background: 	#F7F0E1;
    padding: 70px 20px;
}

.profile-container {
    max-width: 1000px;
    margin: auto;
    text-align: center;
}

.candidate-profile h2 {
    font-size: 36px;
    color: #222;
    margin-bottom: 12px;
}

.candidate-profile p {
    font-size: 17px;
    color: #555;
    margin-bottom: 45px;
}

.profile-features {
    display: flex;
    gap: 25px;
    flex-wrap: wrap;
    justify-content: center;
    margin-bottom: 40px;
}

.feature-box {
    background: #fff;
    padding: 30px 25px;
    width: 280px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.07);
    transition: 0.3s;
}

.feature-box:hover {
    transform: translateY(-8px);
}

.feature-box h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.feature-box p {
    font-size: 15px;
    color: #666;
}

.profile-btn {
    display: inline-block;
    padding: 14px 40px;
    background: #4f46e5;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 30px;
    transition: 0.3s;
}

.profile-btn:hover {
    background: #3730a3;
}

/* ===== RESULTS SECTION ===== */
.results-section{
  padding: 60px 0;
  background: #f9fafb;
}

.results-container{
  width: 85%;
  max-width: 1100px;
  margin: auto;
}

.results-title{
  text-align: center;
  font-size: 28px;
  margin-bottom: 30px;
  color: #222;
}

/* ===== RESULT CARD ===== */
.result-card{
  background: #fff;
  border-radius: 10px;
  padding: 18px 22px;
  margin-bottom: 18px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0 8px 25px rgba(0,0,0,0.06);
  transition: 0.3s;
}

.result-card:hover{
  transform: translateY(-4px);
  box-shadow: 0 14px 35px rgba(0,0,0,0.12);
}

/* LEFT */
.result-left{
  display: flex;
  align-items: center;
  gap: 15px;
  width: 45%;
}

.result-left img{
  width: 65px;
  height: 65px;
  border-radius: 8px;
  object-fit: cover;
}

.result-left h4{
  margin: 0;
  font-size: 17px;
}

.result-left .profession{
  margin: 4px 0 0;
  font-size: 14px;
  color: #777;
}

/* MIDDLE */
.result-middle{
  width: 30%;
  font-size: 14px;
  color: #555;
}

.result-middle span{
  display: block;
  margin-bottom: 6px;
}

.result-middle .nationality{
  font-weight: 600;
  color: #ff7a00;
}

/* RIGHT */
.result-right{
  width: 25%;
  text-align: right;
}

.view-btn{
  display: inline-block;
  padding: 8px 18px;
  background: #ff6a00;
  color: #fff;
  font-size: 14px;
  border-radius: 25px;
  text-decoration: none;
  transition: 0.3s;
}

.view-btn:hover{
  background: #e65c00;
}

/* ===== EMPTY STATE ===== */
.no-results{
  text-align: center;
  padding: 70px 20px;
  color: #888;
}

.no-results i{
  font-size: 40px;
  margin-bottom: 15px;
  color: #ff6a00;
}

.no-results p{
  font-size: 16px;
}

/* ===== RESPONSIVE ===== */
@media(max-width: 768px){
  .result-card{
    flex-direction: column;
    align-items: flex-start;
  }

  .result-left,
  .result-middle,
  .result-right{
    width: 100%;
    margin-bottom: 10px;
  }

  .result-right{
    text-align: left;
  }
}


</style>
</head>
<body>
   @include('components.header')



<div class="hero-wrapper">

    <!-- 🔥 Bootstrap Carousel Background -->
  <div id="bgCarousel" class="carousel slide carousel-fade"
     data-bs-ride="carousel"
     data-bs-interval="3000">

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('images/Home Page Banner 1.jpg') }}" class="d-block w-100">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Home Page Banner 2.jpg') }}" class="d-block w-100">
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/Home Page Banner 3.jpg') }}" class="d-block w-100">
        </div>

    </div>
</div>



    <!-- 🔍 Search Section Overlay -->
   <section class="search-section">
    <h2>SEARCH FOR PROFESSIONALS</h2>

    <p id="formError" style="color:#ffb3b3; display:none; text-align:center;">
        Please select at least one option to search
    </p>

   <div id="searchForm" class="search-box">


        <!-- PROFESSION -->
       <select id="profession">
    <option value="">All Professions</option>

    @foreach($professions as $item)
        <option value="{{ $item->profession }}">
            {{ $item->profession }}
        </option>
    @endforeach

    <!-- OTHERS OPTION -->
    <option value="others">Others</option>
</select>


        <!-- COUNTRY -->
        <select id="country">
            <option value="">All Countries</option>
            @foreach($countries as $item)
                <option value="{{ $item->country }}">{{ $item->country }}</option>
            @endforeach
        </select>

        <!-- NATIONALITY -->
        <select id="nationality">
            <option value="">All Nationalities</option>
            @foreach($nationalities as $item)
                <option value="{{ $item->nationality }}">{{ $item->nationality }}</option>
            @endforeach
        </select>
<button type="button" onclick="fetchResults()">Search</button>


</div>
</section>

<!-- RESULTS SECTION -->
<section class="results-section">
  <div class="results-container">

    <h2 class="results-title">Search Results</h2>

    <div id="results">

      <!-- CARD -->
      <div class="result-card">
        <div class="result-left">
          <img src="https://i.pravatar.cc/150?img=12" alt="">
          <div>
            <h4>Rahul Sharma</h4>
            <p class="profession">Developer</p>
          </div>
        </div>

        <div class="result-middle">
          <span><i class="fa fa-map-marker"></i> India</span>
          <span class="nationality">Indian</span>
        </div>

        <div class="result-right">
          
        </div>
      </div>

      <!-- EMPTY STATE -->
      <!--
      <div class="no-results">
        <i class="fa fa-search"></i>
        <p>No professionals found</p>
      </div>
      -->

    </div>
  </div>
</section>



</div>


<section class="candidate-profile">
    <div class="profile-container">
        <h2>Create Your Professional Profile</h2>
        <p>
            Candidates can easily create their profile, showcase their
            skills, upload resume, and get discovered by top companies.
        </p>

        <div class="profile-features">
            <div class="feature-box">
                <h3>📝 Build Your Profile</h3>
                <p>Add personal details, profession, and expertise</p>
            </div>

            <div class="feature-box">
                <h3>📄 Upload Resume</h3>
                <p>Upload your latest CV for recruiters to view</p>
            </div>

            <div class="feature-box">
                <h3>🌍 Get Discovered</h3>
                <p>Companies can search and contact you directly</p>
            </div>
        </div>

        <!-- <a href="#" class="profile-btn">
            Create Your Profile
        </a> -->
         <div class="profile-btn">
            <a href="javascript:void(0)" class="btn-apply" onclick="openForm()">
                <i class="fa fa-user"></i>     Create Your Profile
            </a>
        </div>
    </div>
</section>


<section class="stats-section">

  <div class="stat-box">
    <div class="icon-circle"><i class="fa fa-briefcase"></i></div>
    <h2 class="counter" data-target="42">0</h2>
    <p>ALL JOBS</p>
  </div>

  <div class="stat-box">
    <div class="icon-circle"><i class="fa fa-thumbs-up"></i></div>
    <h2 class="counter" data-target="12">0</h2>
    <p>JOBS FILLED</p>
  </div>

  <div class="stat-box">
    <div class="icon-circle"><i class="fa fa-user"></i></div>
    <h2 class="counter" data-target="48">0</h2>
    <p>PROFESSIONALS</p>
  </div>

  <div class="stat-box">
    <div class="icon-circle"><i class="fa fa-users"></i></div>
    <h2 class="counter" data-target="64">0</h2>
    <p>MEMBERS</p>
  </div>

</section>
<section class="professionals-section">

  <h2 class="pro-title">Our Professionals</h2>
  <p class="pro-sub">Latest added</p>

  <!-- CARD -->
  <div class="pro-card">
    <div class="pro-left">
      <img src="https://i.pravatar.cc/150?img=3" alt="">
      <div>
        <h4>Debbie Bidart</h4>
        <p>Paint Removal from Exterior or Interior Surfaces</p>
      </div>
    </div>

    <div class="pro-middle">
      <span><i class="fa fa-location-arrow"></i> Melbourne, AU</span>
      <div class="rating">★★★★☆ <small>12 Reviews</small></div>
    </div>

    <div class="pro-right">
      <span class="cat">Painting</span>
      <small>Posted 1 month ago</small>
    </div>
  </div>

  <!-- CARD -->
  <div class="pro-card">
    <div class="pro-left">
      <img src="https://i.pravatar.cc/150?img=5" alt="">
      <div>
        <h4>Construction Inc.</h4>
        <p>Strives to meet the consumer's needs.</p>
      </div>
    </div>

    <div class="pro-middle">
      <span><i class="fa fa-location-arrow"></i> New York, US</span>
      <div class="rating">★★★☆☆ <small>7 Reviews</small></div>
    </div>

    <div class="pro-right">
      <span class="cat">Bathroom Design</span>
      <small>Posted 2 months ago</small>
    </div>
  </div>

</section>
<section class="career-banner">

  <div class="career-box">
    <h3>For<br><span>Designers</span></h3>

    <img src="images/worker1.png" class="worker-img" alt="">

    <div class="see-bar">SEE HERE</div>
  </div>

  <div class="career-box">
    <h3>For<br><span>Civil Engineers</span></h3>

    <img src="images/worker2.png" class="worker-img" alt="">

    <div class="see-bar">SEE HERE</div>
  </div>

  <div class="career-box">
    <h3>For<br><span>Engineers</span></h3>

    <img src="images/worker3.png" class="worker-img" alt="">

    <div class="see-bar">SEE HERE</div>
  </div>

</section>
<!-- ===our servics==and profeessional reeview== -->

<!-- ===== OUR SERVICES ===== -->
<section class="services-section">
  <h2 class="section-title">Our Services</h2>
  <p class="section-sub">services we provided</p>

  <div class="services-grid">

    <div class="service-box">
      <div class="icon-circle">💼</div>
      <h3>Professionals</h3>
      <p>We use the latest technology to test new and innovated products so we can protect.</p>
    </div>

    <div class="service-box">
      <div class="icon-circle">⚙️</div>
      <h3>Engineering Professionals</h3>
      <p>Consulting engineering is a professional service that provides independent expertise.</p>
    </div>

    <div class="service-box">
      <div class="icon-circle">♻️</div>
      <h3>Environmental Professionals</h3>
      <p>Managing, protecting and restoring the environment are integral to our services.</p>
    </div>

  </div>
</section>


<!-- ===== PROFESSIONAL REVIEWS ===== -->
<section class="reviews-section">
  <h2 class="section-title">Professional Reviews</h2>
  <p class="section-sub">what clients say about our experts</p>

  <div class="reviews-grid">

    <div class="review-box">
      <p>I hired a highly skilled professional through this platform and the experience was outstanding.</p>
      <span class="name">MICHAEL SMITH</span>
      <small>Business Consultant</small>
    </div>

    <div class="review-box">
      <p>This platform helped me find the perfect professional for my requirements.</p>
      <span class="name">BRADLEY COOPER</span>
      <small>Startup Founder</small>
    </div>

    <div class="review-box">
      <p>The platform ensures verified experts and delivers consistent service quality.</p>
      <span class="name">HANNA PINKMAN</span>
      <small>Operations Manager</small>
    </div>

    <div class="review-box">
      <p>Hiring professionals through this platform saved me time and effort.</p>
      <span class="name">ERICK FOX</span>
      <small>Project Director</small>
    </div>

  </div>
</section>


    @include('components.footer')


<script>
function fetchResults() {

    const profession  = document.getElementById('profession').value;
    const country     = document.getElementById('country').value;
    const nationality = document.getElementById('nationality').value;

    fetch(`/home-search?profession=${profession}&country=${country}&nationality=${nationality}`)
        .then(res => res.json())
        .then(data => {

            let html = '';

            if (data.length === 0) {
                html = '<p style="text-align:center;">No professionals found</p>';
            } else {
                data.forEach(user => {
                    html += `
                        <div class="pro-card">
                            <div class="pro-left">
                                <img src="https://i.pravatar.cc/150?u=${user.id}">
                                <div>
                                    <h4>${user.name}</h4>
                                    <p>${user.profession ?? 'N/A'}</p>
                                </div>
                            </div>
                            <div class="pro-middle">
                                <span><i class="fa fa-location-arrow"></i> ${user.country ?? ''}</span>
                            </div>
                            <div class="pro-right">
                                <span class="cat">${user.nationality ?? ''}</span>
                            </div>
                        </div>
                    `;
                });
            }

            document.getElementById('results').innerHTML = html;
        });
}


document.addEventListener("DOMContentLoaded", () => {

  const counters = document.querySelectorAll('.counter');
  const speed = 200; // lower = faster

  counters.forEach(counter => {

    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count  = +counter.innerText;

      const increment = Math.ceil(target / speed);

      if (count < target) {
        counter.innerText = count + increment;
        setTimeout(updateCount, 30);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  });

});




</script>



</body>
</html>