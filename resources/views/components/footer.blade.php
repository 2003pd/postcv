<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Footer</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

.container{
    width:80%;
    margin:auto;
}

/* ===== FOOTER ===== */
.footer{
    background:black;
    color:#bbb;
    padding-top:60px;
}

.footer-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:50px;
    padding-bottom:50px;
}

.footer-col h4{
    color:#fff;
    margin-bottom:25px;
    font-size:18px;
    cursor:pointer;
}

.footer-col h4 i{
    display:none;
    float:right;
}

/* ===== CONTACT ===== */
.contact-item{
    display:flex;
    align-items:flex-start;
    margin-bottom:18px;
    font-size:14px;
}
.contact-item i{
    width:35px;
    height:35px;
    background:#2f2a2a;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    margin-right:15px;
    flex-shrink:0;
}

/* ===== POSTS ===== */
.post-item{
    display:flex;
    gap:15px;
    margin-bottom:25px;
    border-bottom:1px solid #4a4444;
    padding-bottom:20px;
}
.post-img{
    width:60px;
    height:60px;
    background:#ddd;
    border-radius:50%;
    flex-shrink:0;
}
.post-item p{
    color:#fff;
    font-size:14px;
    line-height:1.4;
}
.post-item small{
    font-size:12px;
    letter-spacing:1px;
}

/* ===== NEWSLETTER ===== */
.newsletter-text{
    margin-bottom:20px;
    font-size:14px;
    line-height:1.6;
}
.newsletter-input{
    width:100%;
    padding:14px;
    background:#2f2a2a;
    border:1px solid #555;
    color:#fff;
    margin-bottom:12px;
    border-radius:4px;
}
.newsletter-btn{
    width:100%;
    padding:14px;
    background:#ff3d00;
    border:none;
    color:#fff;
    font-size:15px;
    cursor:pointer;
    border-radius:4px;
}
.newsletter-msg{
    margin-top:10px;
    font-size:13px;
}

/* ===== BOTTOM ===== */
.footer-bottom{
    background:#322d2d;
    text-align:center;
    padding:20px;
    font-size:14px;
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
    .container{width:95%;}
    .footer-grid{
        grid-template-columns:1fr;
        gap:25px;
    }
    .footer-col h4{
        margin-bottom:15px;
    }
    .footer-col h4 i{
        display:inline;
    }
    .footer-content{
        display:none;
    }
    .footer-col.active .footer-content{
        display:block;
    }
}
.footer-links{
    list-style:none;
}
.footer-links li{
    margin-bottom:12px;
}
.footer-links a{
    color:#bbb;
    text-decoration:none;
    font-size:14px;
}
.footer-links a:hover{
    color:#ff3d00;
}



</style>
</head>

<body>

<footer class="footer">
    <div class="container footer-grid">

        <!-- CONTACT -->
        <div class="footer-col">
            <h4>CONTACT US <i class="fa fa-chevron-down"></i></h4>
            <div class="footer-content">
                <div class="contact-item">
                    <i class="fa fa-map-marker"></i>
                    <span>Posturcv</span>
                </div>
                <div class="contact-item">
                    <i class="fa fa-phone"></i>
                    <span>+971506265425</span>
                </div>
                <div class="contact-item">
                    <i class="fa fa-envelope"></i>
                    <span>support@posturcv.com</span>
                </div>
                <div class="contact-item">
                    <i class="fa fa-clock-o"></i>
                    <span>Monday - Friday 9:00 - 21:00</span>
                </div>
            </div>
        </div>

     <!-- QUICK LINKS -->
<div class="footer-col">
    <h4>QUICK LINKS <i class="fa fa-chevron-down"></i></h4>
    <div class="footer-content">
        <ul class="footer-links">
            <li><a href="/">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Professionals</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/admin/login">Admin Login</a><li>
           
        </ul>
    </div>
</div>

        <!-- NEWSLETTER -->
        <div class="footer-col">
            <h4>GET OUR NEWSLETTER <i class="fa fa-chevron-down"></i></h4>
            <div class="footer-content">
                <p class="newsletter-text">
                    Get timely DIY projects for your home and yard delivered weekly.
                </p>
                <input type="email" id="newsletterEmail" placeholder="Enter your email..." class="newsletter-input">
                <button class="newsletter-btn" onclick="subscribe()">Subscribe</button>
                <div class="newsletter-msg" id="newsletterMsg"></div>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © 2025 <b>Posturcv</b> | All Rights Reserved
    </div>
</footer>

<script>
/* ===== MOBILE ACCORDION ===== */
document.querySelectorAll('.footer-col h4').forEach(header=>{
    header.addEventListener('click',()=>{
        if(window.innerWidth <= 768){
            header.parentElement.classList.toggle('active');
        }
    });
});


/* ===== NEWSLETTER VALIDATION ===== */


function subscribe(){
    let email = document.getElementById('newsletterEmail').value;
    let msg = document.getElementById('newsletterMsg');

    if(!email || !email.includes('@')){
        msg.style.color = 'orange';
        msg.innerText = 'Please enter a valid email address';
        return;
    }

    msg.style.color = '#4caf50';
    msg.innerText = 'Thank you for subscribing!';
    document.getElementById('newsletterEmail').value = '';
}
</script>

</body>
</html>
