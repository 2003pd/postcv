<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <style>


.contact-section{
    padding:80px 40px;
    background:#f9f9f9;
    text-align:center;
}

.contact-section h2{
    font-size:32px;
    margin-bottom:10px;
}

.contact-sub{
    color:#777;
    margin-bottom:40px;
}

.contact-wrap{
    max-width:1000px;
    margin:auto;
    display:flex;
    gap:40px;
    background:#fff;
    padding:40px;
    border-radius:6px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

/* Info */
.contact-info{
    flex:1;
    text-align:left;
}

.contact-info h3{
    margin-bottom:15px;
}

.contact-info p{
    color:#555;
    margin-bottom:10px;
    font-size:14px;
}

/* Form */
.contact-form{
    flex:1;
    display:flex;
    flex-direction:column;
    gap:15px;
}

.contact-form input,
.contact-form textarea{
    padding:12px;
    border:1px solid #ddd;
    border-radius:4px;
    font-size:14px;
}

.contact-form input:focus,
.contact-form textarea:focus{
    outline:none;
    border-color:#ff3d00;
}

.contact-form button{
    background:#ff3d00;
    color:#fff;
    border:none;
    padding:12px;
    cursor:pointer;
    border-radius:4px;
    transition:0.3s;
}

.contact-form button:hover{
    background:#e63600;
}

/* Mobile */
@media(max-width:768px){
    .contact-wrap{
        flex-direction:column;
        padding:25px;
    }

    .contact-info{
        text-align:center;
    }
}

/* ===== ADVANCED ENHANCEMENTS ===== */

/* Section gradient overlay */
.contact-section{
    background:
      linear-gradient(135deg, rgba(255,61,0,.08), rgba(255,153,0,.08)),
      #f9f9f9;
}

/* Card glass effect */
.contact-wrap{
    position:relative;
    overflow:hidden;
}

.contact-wrap::before{
    content:'';
    position:absolute;
    top:-80px;
    right:-80px;
    width:200px;
    height:200px;
    background:linear-gradient(135deg,#ff3d00,#ff9800);
    border-radius:50%;
    opacity:.15;
}

.contact-wrap::after{
    content:'';
    position:absolute;
    bottom:-100px;
    left:-100px;
    width:250px;
    height:250px;
    background:linear-gradient(135deg,#3b82f6,#06b6d4);
    border-radius:50%;
    opacity:.12;
}

/* Headings glow */
.contact-section h2{
    font-weight:700;
    letter-spacing:.5px;
    color:#1f2937;
}

.contact-info h3{
    position:relative;
    padding-bottom:8px;
}

.contact-info h3::after{
    content:'';
    width:50px;
    height:3px;
    background:#ff3d00;
    position:absolute;
    left:0;
    bottom:0;
}

/* Info icons hover */
.contact-info p{
    transition:.3s;
}

.contact-info p:hover{
    color:#ff3d00;
    transform:translateX(5px);
}

/* Inputs animation */
.contact-form input,
.contact-form textarea{
    transition:.3s;
}

.contact-form input:focus,
.contact-form textarea:focus{
    box-shadow:0 0 0 3px rgba(255,61,0,.15);
}

/* Button premium effect */
.contact-form button{
    position:relative;
    overflow:hidden;
}

.contact-form button::after{
    content:'';
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:100%;
    background:linear-gradient(
        120deg,
        transparent,
        rgba(255,255,255,.4),
        transparent
    );
    transition:.6s;
}

.contact-form button:hover::after{
    left:100%;
}

.contact-form button:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 25px rgba(255,61,0,.35);
}

/* Success message style */
.contact-section p[style*="green"]{
    margin-top:20px;
    background:#ecfdf5;
    color:#065f46 !important;
    padding:12px;
    border-radius:6px;
    font-size:14px;
}

/* ===== MOBILE EXTRA POLISH ===== */
@media(max-width:480px){
    .contact-section{
        padding:60px 15px;
    }

    .contact-section h2{
        font-size:26px;
    }

    .contact-sub{
        font-size:14px;
    }

    .contact-wrap{
        gap:25px;
    }

    .contact-form input,
    .contact-form textarea{
        font-size:13px;
    }
}



  

        </style>
</head>
<body>
@include('components.header')
<section class="image" style="background-image: url('images/contect us.jpg'); height:300px; background-size: cover; background-position: center;">
    <div class="overlay" style="background-color: rgba(0, 0, 0, 0.5); height: 100%; display: flex; justify-content: center; align-items: center;">
        <h1 style="color: white; font-size: 36px;">Contact Us</h1>
    </div>




<section class="contact-section">

    <h2>Get In Touch</h2>
    <p class="contact-sub">
        Have questions or need help? Fill out the form and we’ll get back to you soon.
    </p>

    <div class="contact-wrap">

        <!-- Contact Info -->
        <div class="contact-info">
            <h3>Contact Information</h3>
            <p>📍 Address: Your City, India</p>
            <p>📧 Email: support@example.com</p>
            <p>📞 Phone: +91 98765 43210</p>
        </div>

        <!-- Contact Form -->
     <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="tel" name="phone" placeholder="Phone" required>
    <textarea name="message" rows="4" placeholder="Message"></textarea>

    <button type="submit">Send Message</button>
</form>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif


    </div>

</section>



@include('components.footer')
</body>
</html>