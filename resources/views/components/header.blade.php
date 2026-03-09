<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif;}

        .container{
            width:80%;
            margin:auto;
        }

        /* ===== TOP BAR ===== */
        .top-bar{
            background:#3b3535;
            padding:8px 0;
        }
        .top-flex{
            display:flex;
            justify-content:space-between;
            align-items:center;
            flex-wrap:wrap;
        }
        .social-icons a{
            color:#fff;
            margin-right:12px;
            font-size:15px;
        }
        .btn-apply{
            color:#fff;
            text-decoration:none;
            font-size:13px;
        }
        .btn-apply i{
            color:#ff6600;
            margin-right:5px;
        }

        /* ===== MAIN HEADER ===== */
        .main-header{
            background:#fff;
            border-bottom:1px solid #eee;
        }
        .nav-flex{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:22px 0;
            flex-wrap:wrap;
        }
        .logo img{
            height:80px;
        }

        /* MENU */
        .main-nav ul{
            list-style:none;
            display:flex;
            gap:45px;
            flex-wrap:wrap;
        }
        .main-nav ul li a{
            text-decoration:none;
            color:#333;
            font-size:15px;
            letter-spacing:2.5px;
            font-weight:600;
        }
        .main-nav ul li a.active,
        .main-nav ul li a:hover{
            color:#ff6600;
        }

        /* ===== MODAL FORM ===== */
        #applyModal{
            display:none;
            position:fixed;
            inset:0;
            background:rgba(0,0,0,.6);
            z-index:9999;
            padding:20px;
        }
        #applyModal .box{
    background:#fff;
    width:420px;
    max-width:100%;
    max-height:90vh;   /* ✅ poora form dikhega */
    overflow-y:auto;  /* ✅ submit tak scroll */
    margin:40px auto;
    padding:20px;
    border-radius:10px;
    position:relative;
}
        #applyModal input,
        #applyModal textarea{
            width:100%;
            padding:12px;
            margin-bottom:12px;
            border:1px solid #ccc;
            border-radius:5px;
        }
        #applyModal label{
            font-size:14px;
            font-weight:600;
            display:block;
            margin-bottom:5px;
        }
        #applyModal button{
            background:#ff6600;
            color:#fff;
            border:none;
            padding:12px;
            border-radius:5px;
            cursor:pointer;
            width:100%;
            font-size:16px;
        }

        /* ===== MOBILE RESPONSIVE ===== */
        @media(max-width:768px){
            .container{
                width:95%;
            }

            .top-flex{
                flex-direction:column;
                gap:10px;
                text-align:center;
            }

            .nav-flex{
                flex-direction:column;
                gap:20px;
                text-align:center;
            }

            .logo img{
                height:65px;
            }

            .main-nav ul{
                justify-content:center;
                gap:20px;
            }

            .main-nav ul li a{
                font-size:14px;
                letter-spacing:1.5px;
            }
        }

        @media(max-width:480px){
            .social-icons a{
                font-size:18px;
                margin-right:8px;
            }

            .btn-apply{
                font-size:12px;
            }

            #applyModal .box{
                padding:20px;
                margin:40px auto;
            }

            #applyModal h3{
                font-size:18px;
                text-align:center;
            }
        }
        /* ===== HAMBURGER MENU ===== */
.menu-toggle{
    display:none;
    font-size:26px;
    cursor:pointer;
    color:#333;
}

/* MOBILE MENU */
@media(max-width:768px){

    .menu-toggle{
        display:block;
    }

    .main-nav{
        width:100%;
        display:none;
    }

    .main-nav ul{
        flex-direction:column;
        gap:0;
        background:#fff;
        border-top:1px solid #eee;
        margin-top:10px;
    }

    .main-nav ul li{
        border-bottom:1px solid #eee;
    }

    .main-nav ul li a{
        display:block;
        padding:14px 0;
    }

    .main-nav.show{
        display:block;
    }
}

/* ===== TOP BAR MOBILE SOCIAL MENU ===== */
.top-toggle{
    display:none;
    color:#fff;
    font-size:22px;
    cursor:pointer;
}

/* Default desktop */
.mobile-social a{
    display:inline-block;
    text-decoration:none;
}
.mobile-social a span{
    display:none;
}

/* MOBILE */
@media(max-width:768px){

    .top-flex{
        flex-direction:row;
    }

    .top-toggle{
        display:block;
    }

    .mobile-social{
        display:none;
        width:100%;
        background:#3b3535;
        margin-top:10px;
    }

    .mobile-social a{
        display:flex;
        align-items:center;
        gap:10px;
        padding:12px 15px;
        border-top:1px solid rgba(255,255,255,0.15);
        color:#fff;
        font-size:15px;
        text-decoration:none;
    }

    .mobile-social a i{
        width:22px;
        text-align:center;
        font-size:16px;
    }

    .mobile-social.show{
        display:block;
    }
}
/* Modal background */
.modal {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    padding: 15px;
}
.modal-content {
    width: 100%;
    max-width: 420px;
    max-height: 90vh;   /* ✅ phone friendly */
    overflow-y: auto;  /* ✅ form scroll */
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    position: relative;
}
#formError{
    display:none;
    color:red;
    font-size:13px;
    margin-bottom:10px;
}
.form-label {
    display: block;
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 6px;
    color: #333;
}

.form-select {
    width: 100%;
    padding: 12px 14px;
    border-radius: 8px;
    border: 1px solid #dcdcdc;
    font-size: 14px;
    background-color: #fff;
    cursor: pointer;
    transition: all 0.2s ease;
}

/* focus effect */
.form-select:focus {
    outline: none;
    border-color: #22c55e; /* green accent */
    box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.15);
}

/* hover */
.form-select:hover {
    border-color: #b5b5b5;
}

/* disabled option style */
.form-select option[disabled] {
    color: #9ca3af;
}

/* mobile fix */
@media (max-width: 600px) {
    .form-select {
        font-size: 13px;
        padding: 10px 12px;
    }
}
/* normal menu items */
.main-nav ul li{
    text-align:center;
    padding:18px 0;
    border-bottom:1px solid #eee;
}

/* 🔥 Logout ko bhi same line system me lao */
.logout-item{
    text-align:center;      /* center like others */
    padding:18px 0;         /* same vertical spacing */
}

/* Logout button look */
.logout-btn{
    background:#ff6a00;
    color:#fff;
    border:none;
    padding:8px 22px;
    border-radius:8px;
    font-size:14px;
    font-weight:600;
    cursor:pointer;
}




    </style>
</head>

<body>

<!-- ===== TOP BAR ===== -->
<div class="top-bar">
    <div class="container top-flex">

        <!-- Mobile Social Toggle -->
        <div class="top-toggle" onclick="toggleTopSocial()">
            <i class="fa fa-bars"></i>
        </div>

        <!-- Social Icons -->
        <div class="social-icons mobile-social">
            <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="#"><i class="fa fa-google-plus"></i> Google+</a>
            <a href="#"><i class="fa fa-pinterest"></i> Pinterest</a>
            <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fa fa-rss"></i> RSS Feed</a>
        </div>

        <!-- Apply Button -->
        <div class="apply-btn">
            <a href="javascript:void(0)" class="btn-apply" onclick="openForm()">
                <i class="fa fa-user"></i> APPLY FOR PROFESSIONAL
            </a>
        </div>

    </div>
</div>


<!-- ===== MAIN NAVBAR ===== -->
<header class="main-header">
    <div class="container nav-flex">

        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Posturcv">
            </a>
        </div>
<div class="menu-toggle" onclick="toggleMenu()">
    <i class="fa fa-bars"></i>
</div>

        <nav class="main-nav">
            <ul>
                <li><a class="active" href="{{ url('/home') }}">HOME</a></li>
                <li><a href="{{ route('about') }}">ABOUT US</a></li>
                <li><a href="{{ route('job') }}">JOBS</a></li>
                <li><a href="{{ route('professionals') }}">PROFESSIONALS</a></li>
                <li><a href="{{ route('contact') }}">CONTACT</a></li>

      <li class="logout-item">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </li>

            </ul>
        </nav>

    </div>
</header>   

<!-- ===== APPLY FORM POPUP ===== -->
<div id="applyModal">
    <div class="box">
        <span onclick="closeForm()" style="position:absolute;right:15px;top:10px;cursor:pointer;font-size:18px;">✖</span>

        <h3>Apply as Professional</h3><br>

       <div class="form-wrapper">
@if(session()->has('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif



    <form id="candidateForm" action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="text" name="profession" placeholder="Profession" required>
        <input type="text" name="expertise" placeholder="Expertise (eg: Laravel, Nurse)" required>
        <input type="text" name="country" placeholder="Country" required>
        <input type="text" name="nationality" placeholder="Nationality" required>
          
        
    <label>Gender</label>
<select name="gender" required>
    <option value="" disabled selected>Select Gender</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
</select>




        <label>Email</label>
        <input type="email" name="email" required>

        <label>Photo</label>
        <input type="file" name="photo" accept="image/*">


        <label>Resume</label>
        <input type="file" name="resume" accept=".pdf,.doc,.docx" required>

        <p id="formError">⚠️ Please fill all fields before submitting</p>

        <button type="submit">Submit</button>
    </form>
</div>


    </div>
</div>

<script>
function openForm(){
    document.getElementById('applyModal').style.display='block';
}
function closeForm(){
    document.getElementById('applyModal').style.display='none';
}

function toggleMenu(){
    document.querySelector('.main-nav').classList.toggle('show');
}
function toggleTopSocial(){
    document.querySelector('.mobile-social').classList.toggle('show');
}



document.getElementById("candidateForm").addEventListener("submit", function(e) {
    const inputs = this.querySelectorAll("input[required]");
    let isValid = true;

    inputs.forEach(input => {
        if (!input.value.trim()) {
            isValid = false;
        }
    });

    if (!isValid) {
        e.preventDefault(); // form submit stop
        document.getElementById("formError").style.display = "block";
    }
});





</script>

</body>
</html>
