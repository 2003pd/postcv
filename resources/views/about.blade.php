<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <style>
        .video-hero{
    position: relative;
    height: 80vh;
    overflow: hidden;
}

.bg-video{
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.video-overlay{
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.55);
}

.video-content{
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
}

.video-content h1{font-size:3rem;}
.video-content p{margin:15px 0;}
/* ===main content ==== */
*{
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

/* ===== FEATURES ===== */
/* ===== FEATURES – ADVANCED UI ===== */

.features{
    background:
      linear-gradient(135deg, rgba(59,130,246,.06), rgba(16,185,129,.06)),
      #fff;
    flex-wrap:wrap;
}

/* Feature card */
.feature-box{
    background:#ffffff;
    padding:35px 25px;
    border-radius:18px;
    box-shadow:0 12px 35px rgba(0,0,0,.08);
    transition:.4s ease;
    position:relative;
    overflow:hidden;
}

/* Gradient glow */
.feature-box::before{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(135deg,#ff6a00,#ffb347);
    opacity:0;
    transition:.4s;
    z-index:-1;
}

/* Hover effects */
.feature-box:hover{
    transform:translateY(-12px) scale(1.02);
    box-shadow:0 20px 45px rgba(0,0,0,.15);
}

.feature-box:hover::before{
    opacity:.08;
}

/* Icon styling (if icon exists) */
.feature-box i{
    font-size:42px;
    color:#ff6a00;
    margin-bottom:18px;
    display:inline-block;
    transition:.3s;
}

.feature-box:hover i{
    transform:rotate(8deg) scale(1.1);
}

/* Title */
.feature-box h3{
    font-size:20px;
    margin-bottom:10px;
    color:#1f2937;
}

/* Text */
.feature-box p{
    font-size:14px;
    color:#6b7280;
    line-height:22px;
}

/* ===== MOBILE FRIENDLY ===== */
@media(max-width:768px){
    .features{
        gap:30px;
        padding:50px 20px;
    }

    .feature-box{
        max-width:100%;
    }
}


/* ===== ICON – ADVANCED UI ===== */

.icon{
    position:relative;
    transition:0.4s ease;
}

/* Gradient glow ring */
.icon::before{
    content:'';
    position:absolute;
    inset:-6px;
    border-radius:50%;
    background:linear-gradient(135deg,#ff3d00,#ff9f1c);
    opacity:0;
    filter:blur(6px);
    transition:.4s;
    z-index:-1;
}

/* Hover animation */
.feature-box:hover .icon{
    transform:translateY(-6px) scale(1.08) rotate(5deg);
    box-shadow:0 15px 30px rgba(255,61,0,.35);
}

/* Show glow on hover */
.feature-box:hover .icon::before{
    opacity:.7;
}

/* Icon color animation */
.feature-box:hover .icon i{
    color:#fff;
}

/* Pulse effect (subtle) */
@keyframes pulse{
    0%{transform:scale(1);}
    50%{transform:scale(1.05);}
    100%{transform:scale(1);}
}

.icon{
    animation:pulse 3.5s infinite;
}

/* ===== MOBILE OPTIMIZATION ===== */
@media(max-width:768px){
    .icon{
        width:54px;
        height:54px;
        font-size:22px;
    }
}


.feature-box h4{
    margin:15px 0 8px;
}

.feature-box p{
    font-size:14px;
    color:#777;
}


/* ===== CTA ===== */
.cta{
    background:#6e6e6e;
    text-align:center;
    color:#fff;
    padding:80px 20px;
}

.cta h1{
    font-size:32px;
    margin-bottom:10px;
}

.cta p{
    font-size:14px;
    margin-bottom:25px;
}

.cta button{
    background:#ff3d00;
    color:#fff;
    border:none;
    padding:12px 30px;
    border-radius:4px;
    cursor:pointer;
}


/* ===== ABOUT SECTION ===== */
.about-wrap{
    display:flex;
    justify-content:space-between;
    gap:60px;
    padding:80px 80px;
    background:#fff;
}

.mission{
    flex:1;
}

.mission h2{
    margin-bottom:15px;
}

.mission p{
    font-size:14px;
    color:#666;
    margin-bottom:15px;
    line-height:1.6;
}

.contact-btn{
    background:#ff3d00;
    border:none;
    color:#fff;
    padding:10px 25px;
    border-radius:4px;
    cursor:pointer;
}


/* ===== ACCORDION ===== */
.accordion{
    flex:1;
}

.accordion h2{
    margin-bottom:15px;
}

.acc-item{
    border:1px solid #ddd;
    margin-bottom:10px;
}

.acc-head{
    padding:12px;
    display:flex;
    align-items:center;
    gap:10px;
    cursor:pointer;
    background:#fff;
}

.acc-btn{
    width:22px;
    height:22px;
    background:#ff3d00;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:bold;
}

.acc-item:not(.active) .acc-btn{
    background:#eee;
    color:#888;
}

.acc-body{
    padding:12px;
    font-size:14px;
    color:#666;
}

.acc-item:not(.active) .acc-body{
    display:none;
}


/* ===== MOBILE ===== */
@media(max-width:900px){
    .features{
        flex-direction:column;
        align-items:center;
    }

    .about-wrap{
        flex-direction:column;
        padding:40px 25px;
    }
}

.image {
    width: 100%;
    height: 80vh;
    background: url("/images/home page banner 1.jpg") no-repeat center center/cover;
    position: relative;
}

/* Dark overlay */
/* .image::after {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
} */

.image-hero {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    padding: 0 16px;
}

.image-hero h1 {
    font-size: 42px;
    margin-bottom: 10px;
}

.image-hero p {
    font-size: 18px;
    max-width: 600px;
}

/* 📱 Mobile */
@media (max-width: 768px) {
    .image {
        height: 45vh;
    }

    .image-hero h1 {
        font-size: 28px;
    }

    .image-hero p {
        font-size: 15px;
        line-height: 1.6;
    }
}

/* 📱 Small phones */
@media (max-width: 480px) {
    .image {
        height: 40vh;
    }

    .image-hero h1 {
        font-size: 24px;
    }

    .image-hero p {
        font-size: 14px;
    }
}
/* ===main content ==== */ 
/* Main Content Section */
.main-content {
    padding: 80px 20px;
    background: linear-gradient(135deg, #f9fafb, #eef2f7);
}

.main-content .container {
    max-width: 1000px;
    margin: auto;
    background: #ffffff;
    padding: 50px;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

/* Heading */
.main-content h2 {
    font-size: 36px;
    color: #1f2937;
    margin-bottom: 25px;
    text-align: center;
    position: relative;
}

.main-content h2::after {
    content: "";
    width: 70px;
    height: 4px;
    background: #2563eb;
    display: block;
    margin: 12px auto 0;
    border-radius: 2px;
}

/* Paragraphs */
.main-content p {
    font-size: 18px;
    line-height: 1.8;
    color: #4b5563;
    margin-bottom: 20px;
    text-align: center;
}

/* Responsive */
@media (max-width: 768px) {
    .main-content .container {
        padding: 30px 20px;
    }

    .main-content h2 {
        font-size: 28px;
    }

     .main-content h3 {
        font-size: 20px;
    }

    .main-content p {
        font-size: 16px;
    }
}




</style>
</head>
<body>
    @include('components.header')
    <!-- ====hero section=== -->
<section class="image">
   
</section>  

<!-- ==== main content ==== --> 
<section class="main-content">
    <div class="container">
        <h2>Welcome to Our Platform</h2>
        <p>
            We are dedicated to connecting job seekers with their dream careers and helping employers find the right talent. Our platform offers a seamless experience for both candidates and recruiters, making the job search and hiring process efficient and effective.
        </p>

        <p>
            With a user-friendly interface, advanced search filters, and personalized job recommendations, we strive to empower individuals to take control of their career paths. Our mission is to create opportunities and foster growth in the professional world.
        </p>

        <p>
            Whether you're looking for your next big opportunity or seeking top talent for your organization, our job platform is here to support you every step of the way.
        </p>
        <h2 style="font-size: 20px;">Click APPLY FOR PROFESSIONALS to join us</h2>
    </div>
</section>




 <!-- ===== FEATURES ROW ===== -->
<section class="features">
    <div class="feature-box">
        <div class="icon">💼</div>
        <h4>Job Search</h4>
        <p>Find thousands of active job openings across multiple industries and locations.</p>
    </div>

    <div class="feature-box">
        <div class="icon">👤</div>
        <h4>Recruiter Access</h4>
        <p>Employers can post jobs, manage applicants, and hire faster with smart tools.</p>
    </div>

    <div class="feature-box">
        <div class="icon">🛡️</div>
        <h4>Secure & Verified</h4>
        <p>All job postings and employers are reviewed to ensure safety and authenticity.</p>
    </div>
</section>


<!-- ===== CTA SECTION ===== -->
<section class="cta"style="background-image: url('images/111.jpg'); background-size: cover; background-position: center;">
    <h1>Build Your Career With Confidence</h1>
    <p>Join thousands of job seekers and employers who trust our platform every day</p>
   
</section>


<!-- ===== MISSION + ACCORDION ===== -->
<section class="about-wrap">

    <div class="mission">
        <h2>Our Mission</h2>
        <p>
            Our mission is to bridge the gap between talent and opportunity by providing
            a reliable and efficient job platform that empowers individuals and businesses alike.
        </p>

        <p>
            We aim to make job searching and hiring faster, smarter, and more transparent
            by using technology that prioritizes user experience and data security.
        </p>

        <p>
            We are committed to helping candidates build meaningful careers and enabling
            companies to find the right talent effortlessly.
        </p>

      
    </div>

    <div class="accordion">
        <h2>Why People Choose Us?</h2>

        <div class="acc-item active">
            <div class="acc-head">
                <span class="acc-btn">−</span>
                Trusted Platform
            </div>
            <div class="acc-body">
                We ensure genuine job postings and verified recruiters to maintain trust and transparency.
            </div>
        </div>

        <div class="acc-item">
            <div class="acc-head">
                <span class="acc-btn">+</span>
                Easy to Use
            </div>
        </div>

        <div class="acc-item">
            <div class="acc-head">
                <span class="acc-btn">+</span>
                Faster Hiring
            </div>
        </div>

        <div class="acc-item">
            <div class="acc-head">
                <span class="acc-btn">+</span>
                Career Focused
            </div>
        </div>
    </div>

</section>





    @include('components.footer')

</body>
</html>