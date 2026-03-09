<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Results</title>

<style>
/* ===== COMMON ===== */
body{
    background:#f4f7fb;
    font-family:Segoe UI, sans-serif;
}

/* ===== RESULT SECTION ===== */
.result-section{
    max-width:1100px;
    margin:40px auto;
    padding:0 20px;
}

.result-section h2{
    font-size:26px;
    color:#2d1b69;
    margin-bottom:25px;
    text-align:center;
}

/* ===== EMPTY STATE ===== */
.empty-msg{
    background:#fff;
    padding:40px;
    text-align:center;
    border-radius:14px;
    color:#777;
    box-shadow:0 10px 25px rgba(0,0,0,.1);
}

/* ===== RESULT GRID ===== */
.result-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(280px, 1fr));
    gap:22px;
}

/* ===== RESULT CARD ===== */
.result-card{
    background:#fff;
    padding:22px;
    border-radius:16px;
    box-shadow:0 12px 35px rgba(0,0,0,.12);
    transition:.3s;
    position:relative;
}

.result-card:hover{
    transform:translateY(-6px);
}

/* ===== NAME ===== */
.result-card h3{
    margin:0 0 10px;
    font-size:20px;
    color:#3b2a7a;
}

/* ===== INFO ===== */
.result-card p{
    margin:6px 0;
    font-size:14px;
    color:#555;
}

/* ===== BADGE ===== */
.badge{
    display:inline-block;
    background:#eef2ff;
    color:#4f46e5;
    padding:4px 10px;
    border-radius:20px;
    font-size:12px;
    margin-bottom:10px;
}

/* ===== ACTION BUTTONS ===== */
.card-actions{
    margin-top:15px;
    display:flex;
    gap:10px;
}

.card-actions a{
    flex:1;
    text-align:center;
    padding:8px;
    border-radius:6px;
    font-size:13px;
    text-decoration:none;
    color:white;
    background:orangered;
    transition:.3s;
}

.card-actions a.view{
    background:#4f46e5;
}

.card-actions a:hover{
    opacity:.85;
}

/* ===== PROFESSION SECTION ===== */
.profession-section{
    max-width:1100px;
    margin:60px auto;
    padding:0 20px;
}

.profession-section h2{
    text-align:center;
    font-size:24px;
    color:#2d1b69;
    margin-bottom:25px;
}

/* ===== PROFESSION GRID ===== */
.profession-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(160px,1fr));
    gap:16px;
}

.profession-card{
    background:#fff;
    padding:14px;
    border-radius:12px;
    text-align:center;
    text-decoration:none;
    color:#444;
    font-size:14px;
    box-shadow:0 8px 20px rgba(0,0,0,.1);
    transition:.3s;
}

.profession-card:hover{
    background:#4f46e5;
    color:white;
    transform:translateY(-4px);
}
/* =====card===== */
.job-section{
    padding:60px 20px;
    background:#f5f7fb;
}

.job-section h2{
    text-align:center;
    margin-bottom:40px;
    color:#222;
}

.job-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:25px;
    max-width:1100px;
    margin:auto;
}

.job-card{
    background:#fff;
    padding:22px;
    border-radius:14px;
    box-shadow:0 15px 35px rgba(0,0,0,.1);
    transition:.3s;
}

.job-card:hover{
    transform:translateY(-6px);
}

.job-card h3{
    margin:0 0 8px;
    color:#3b2a7a;
}

.company{
    font-weight:600;
    color:#333;
}

.location{
    color:#666;
    margin:8px 0 15px;
}

.tag{
    display:inline-block;
    background:orangered;
    color:#fff;
    padding:6px 12px;
    border-radius:20px;
    font-size:12px;
}

</style>
</head>

<body>

@include('components.header')

<!-- ===== SEARCH RESULT ===== -->
<div class="result-section">

    <h2>Search Results</h2>

    @if($professionals->count() == 0)
        <div class="empty-msg">
             Professionals found for your search.
        </div>
    @else
        <div class="result-grid">
            @foreach($professionals as $p)
                <div class="result-card">

                    <span class="badge">
                        {{ $p->profession ?? 'Professional' }}
                    </span>

                    <h3>{{ $p->name }}</h3>

                    <p><b>Email:</b> {{ $p->email ?? 'N/A' }}</p>
                    <p><b>Phone:</b> {{ $p->phone ?? 'N/A' }}</p>
                    <p><b>Country:</b> {{ $p->country ?? 'N/A' }}</p>

                    <div class="card-actions">
                        <a href="{{ route('contact.candidate',$p->id) }}">Contact</a>
                        <a href="{{ route('candidate.resume',$p->id) }}"
                           target="_blank"
                           class="view">
                            View Resume
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    @endif

</div>

<!-- ===== PROFESSION LIST ===== -->
<section class="profession-section">

    <h2>Browse by Profession</h2>

    <div class="profession-grid">
        @foreach($professions as $p)
            <a href="{{ route('search',['profession'=>$p->name]) }}"
               class="profession-card">
                {{ $p->name }}
            </a>
        @endforeach
    </div>

</section>
<div class="job-section">
    <h2>Latest Job Openings</h2>

    <div class="job-grid">

        <div class="job-card">
            <h3>Frontend Developer</h3>
            <p class="company">Google India</p>
            <p class="location">📍 Bangalore, India</p>
            <span class="tag">Full Time</span>
        </div>

        <div class="job-card">
            <h3>Backend Developer</h3>
            <p class="company">Amazon</p>
            <p class="location">📍 Hyderabad, India</p>
            <span class="tag">Remote</span>
        </div>

        <div class="job-card">
            <h3>UI/UX Designer</h3>
            <p class="company">Adobe</p>
            <p class="location">📍 Noida, India</p>
            <span class="tag">Contract</span>
        </div>

        <div class="job-card">
            <h3>Data Analyst</h3>
            <p class="company">Flipkart</p>
            <p class="location">📍 Bangalore, India</p>
            <span class="tag">Full Time</span>
        </div>

        <div class="job-card">
            <h3>Digital Marketing Executive</h3>
            <p class="company">Zomato</p>
            <p class="location">📍 Delhi, India</p>
            <span class="tag">Part Time</span>
        </div>

        <div class="job-card">
            <h3>Mobile App Developer</h3>
            <p class="company">Paytm</p>
            <p class="location">📍 Noida, India</p>
            <span class="tag">Full Time</span>
        </div>

    </div>
</div>


@include('components.footer')

</body>
</html>
