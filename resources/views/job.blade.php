<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job</title>
    <style>
      
/* job pat */
.job-section{
    padding:70px 40px;
    background:#f9f9f9;
    text-align:center;
}

.job-section h2{
    margin-bottom:25px;
}

/* Search Box */
.job-search-box{
    display:flex;
    gap:15px;
    justify-content:center;
    flex-wrap:wrap;
    margin-bottom:40px;
}

.job-search-box input,
.job-search-box select{
    padding:12px;
    width:200px;
    border:1px solid #ddd;
    border-radius:4px;
}

.job-search-box button{
    background:#ff3d00;
    color:#fff;
    border:none;
    padding:12px 30px;
    border-radius:4px;
    cursor:pointer;
}

/* Job Cards */
.job-list{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
    gap:25px;
    max-width:1100px;
    margin:auto;
}

.job-card{
    background:#fff;
    padding:20px;
    border-radius:6px;
    text-align:left;
    box-shadow:0 8px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.job-card:hover{
    transform:translateY(-6px);
}

.job-card h3{
    margin-bottom:5px;
}

.job-card span{
    display:block;
    color:#777;
    margin:10px 0;
}

.job-card button{
    background:#ff3d00;
    color:#fff;
    border:none;
    padding:8px 20px;
    border-radius:4px;
    cursor:pointer;
}
/* ===== ADVANCED JOB UI ===== */

.job-card{
    border-left:4px solid transparent;
}

.job-card:hover{
    border-left-color:#ff3d00;
    box-shadow:0 15px 40px rgba(0,0,0,.12);
}

.job-search-box input:focus,
.job-search-box select:focus{
    outline:none;
    border-color:#ff3d00;
    box-shadow:0 0 0 3px rgba(255,61,0,.15);
}

.job-search-box button:hover{
    background:#e63600;
    transform:scale(1.05);
}

/* ===== STATS SECTION ===== */
.stats-section{
    background:linear-gradient(135deg,#ff3d00,#ff8f00);
    color:#fff;
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
    padding:70px 40px;
    text-align:center;
}

.stat-box h3{
    font-size:34px;
    margin-bottom:8px;
}

.stat-box p{
    opacity:.9;
}

/* ===== WHY CHOOSE US ===== */
.why-section{
    padding:80px 40px;
    background:#fff;
    text-align:center;
}

.why-section h2{
    margin-bottom:45px;
}

.why-grid{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
}

.why-card{
    background:#f9f9f9;
    padding:30px 20px;
    border-radius:10px;
    transition:.4s;
}

.why-card span{
    font-size:36px;
    display:block;
    margin-bottom:15px;
}

.why-card h4{
    margin-bottom:10px;
}

.why-card p{
    color:#666;
    font-size:14px;
}

.why-card:hover{
    background:#fff;
    transform:translateY(-10px);
    box-shadow:0 20px 45px rgba(0,0,0,.12);
}

/* ===== MOBILE FRIENDLY ===== */
@media(max-width:992px){
    .stats-section{
        grid-template-columns:repeat(2,1fr);
    }
    .why-grid{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:600px){
    .job-search-box input,
    .job-search-box select{
        width:100%;
    }

    .stats-section{
        grid-template-columns:1fr;
        gap:20px;
    }

    .why-grid{
        grid-template-columns:1fr;
    }

    .job-section{
        padding:50px 20px;
    }
}


    </style>
</head>
<body>
@include('components.header')


<!-- ===job plat=== -->
<section class="job-section">
  <h2>Find Your Job</h2>

  <div class="job-search-box">
    <input type="text" id="searchInput" placeholder="Search job...">

    <select id="countryFilter" onchange="updateJobCities()">
      <option value="">All Countries</option>
      <option>India</option>
      <option>Palastine</option>
      <option>USA</option>
      <option>UK</option>
      <option>UAE</option>
      <option>Canada</option>
      <option>Australia</option>
      <option>Germany</option>
      <option>France</option>
      <option>Italy</option>
      <option>Spain</option>
      <option>Pakistan</option>
      <option>Bangladesh</option>
      <option>Nepal</option>
      <option>Sri Lanka</option>
      <option>Saudi Arabia</option>
      <option>Qatar</option>
      <option>Oman</option>
      <option>Kuwait</option>
      <option>Mexico</option>
    </select>

    <select id="cityFilter">
      <option value="">All Cities</option>
    </select>

    <button onclick="filterJobs()">Search</button>
  </div>

  <div class="job-list">

    <div class="job-card" data-title="Web Developer" data-country="India" data-city="Noida">
      <h3>Web Developer</h3>
      <span>📍 Noida, India</span>
    </div>

    <div class="job-card" data-title="UI UX Designer" data-country="India" data-city="Bengaluru">
      <h3>UI/UX Designer</h3>
      <span>📍 Bengaluru, India</span>
    </div>

    <div class="job-card" data-title="Data Analyst" data-country="USA" data-city="New York">
      <h3>Data Analyst</h3>
      <span>📍 New York, USA</span>
    </div>
    

       <div class="job-card" data-title="Data info" data-country="Palastine" data-city="Gaza">
      <h3>Data Analyst</h3>
      <span>📍 Gaza, Palastine</span>
    </div>

    <div class="job-card" data-title="dev Oops " data-country="Palastine" data-city="nablus">
      <h3>Data Analyst</h3>
      <span>📍 Nablus, Palastine</span>
    </div>



    <div class="job-card" data-title="Cloud Engineer" data-country="USA" data-city="Houston">
      <h3>Cloud Engineer</h3>
      <span>📍 Houston, USA</span>
    </div>

    <div class="job-card" data-title="Graphic Designer" data-country="UAE" data-city="Dubai">
      <h3>Graphic Designer</h3>
      <span>📍 Dubai, UAE</span>
    </div>

    <div class="job-card" data-title="SEO Specialist" data-country="UK" data-city="London">
      <h3>SEO Specialist</h3>
      <span>📍 London, UK</span>
    </div>

    <div class="job-card" data-title="PHP Developer" data-country="Germany" data-city="Berlin">
      <h3>PHP Developer</h3>
      <span>📍 Berlin, Germany</span>
    </div>

    <div class="job-card" data-title="Digital Marketer" data-country="Canada" data-city="Toronto">
      <h3>Digital Marketer</h3>
      <span>📍 Toronto, Canada</span>
    </div>

    <div class="job-card" data-title="Mobile App Developer" data-country="Australia" data-city="Sydney">
      <h3>Mobile App Developer</h3>
      <span>📍 Sydney, Australia</span>
    </div>

    <div class="job-card" data-title="HR Executive" data-country="France" data-city="Paris">
      <h3>HR Executive</h3>
      <span>📍 Paris, France</span>
    </div>

  </div>
</section>

<!-- ===== STATS SECTION ===== -->
<section class="stats-section">
    <div class="stat-box">
        <h3>10K+</h3>
        <p>Jobs Posted</p>
    </div>
    <div class="stat-box">
        <h3>5K+</h3>
        <p>Professionals</p>
    </div>
    <div class="stat-box">
        <h3>120+</h3>
        <p>Companies</p>
    </div>
    <div class="stat-box">
        <h3>98%</h3>
        <p>Success Rate</p>
    </div>
</section>


<!-- ===== WHY CHOOSE US ===== -->
<section class="why-section">
    <h2>Why Choose Our Platform?</h2>

    <div class="why-grid">
        <div class="why-card">
            <span>🚀</span>
            <h4>Verified Jobs</h4>
            <p>All jobs are verified to ensure trust and reliability.</p>
        </div>

        <div class="why-card">
            <span>💼</span>
            <h4>Top Companies</h4>
            <p>Work with reputed companies across the globe.</p>
        </div>

        <div class="why-card">
            <span>⚡</span>
            <h4>Fast Hiring</h4>
            <p>Quick response and faster hiring process.</p>
        </div>

        <div class="why-card">
            <span>📱</span>
            <h4>Mobile Friendly</h4>
            <p>Apply for jobs easily from any device.</p>
        </div>
    </div>
</section>

@include('components.footer')
  <script>
const jobCities = {
  "India": ["Noida","Delhi","Mumbai","Pune","Bengaluru","Chennai","Hyderabad","Kolkata"],
    "Palastine": ["Gaza","Ramallah","Nablus","Hebron","Bethlehem"],
  "USA": ["New York","Houston","Chicago","Los Angeles","San Francisco","Seattle","Boston","Miami"],
  "UK": ["London","Manchester","Birmingham","Leeds","Glasgow","Edinburgh","Liverpool","Bristol","Sheffield"],
  "UAE": ["Dubai","Abu Dhabi","Sharjah","Ajman","Fujairah","Ras Al Khaimah","Umm Al Quwain","Dibba"],
  "Canada": ["Toronto","Vancouver","Calgary","Montreal","Ottawa","Edmonton","Winnipeg","Quebec City"],
  "Australia": ["Sydney","Melbourne","Brisbane","Perth","Adelaide","Canberra","Gold Coast","Newcastle"],
  "Germany": ["Berlin","Munich","Hamburg","Frankfurt","Stuttgart","Cologne","Düsseldorf","Leipzig"],
  "France": ["Paris","Lyon","Marseille","Nantes","Toulouse","Bordeaux","Nice","Strasbourg"],
  "Italy": ["Rome","Milan","Venice","Florence","Naples","Turin","Bologna","Genoa"],
  "Spain": ["Madrid","Barcelona","Valencia"],
  "Pakistan": ["Karachi","Lahore","Islamabad"],
  "Bangladesh": ["Dhaka","Chittagong"],
  "Nepal": ["Kathmandu","Pokhara"],
  "Sri Lanka": ["Colombo","Kandy"],
  "Saudi Arabia": ["Riyadh","Jeddah"],
  "Qatar": ["Doha","Al Rayyan","Al Wakrah","Al Khor","Umm Salal"],
  "Oman": ["Muscat","Salalah","Seeb","Sur"," Sohar","Nizwa"],
  "Kuwait": ["Kuwait City","Salmiya","Fahaheel","Jahra"," Hawalli"],
  "Mexico": ["Mexico City","Guadalajara"]
};

function updateJobCities() {
  const country = document.getElementById("countryFilter").value;
  const citySelect = document.getElementById("cityFilter");

  citySelect.innerHTML = '<option value="">All Cities</option>';

  if (jobCities[country]) {
    jobCities[country].forEach(city => {
      const option = document.createElement("option");
      option.value = city;
      option.textContent = city;
      citySelect.appendChild(option);
    });
  }
}

function filterJobs() {
  const keyword = document.getElementById("searchInput").value.toLowerCase();
  const country = document.getElementById("countryFilter").value.toLowerCase();
  const city = document.getElementById("cityFilter").value.toLowerCase();

  document.querySelectorAll(".job-card").forEach(job => {
    const title = job.dataset.title.toLowerCase();
    const jobCountry = job.dataset.country.toLowerCase();
    const jobCity = job.dataset.city.toLowerCase();

    let show = true;

    if (keyword && !title.includes(keyword)) show = false;
    if (country && jobCountry !== country) show = false;
    if (city && jobCity !== city) show = false;

    job.style.display = show ? "block" : "none";
  });
}
</script>



</body>
</html>