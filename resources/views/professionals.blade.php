<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Professionals</title>

<style>
/* ===== GLOBAL ===== */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:#f4f6fb;
    font-family:'Segoe UI', Georgia, serif;
    color:#333;
}

/* ===== WRAPPER ===== */
.wrapper{
    width:90%;
    max-width:1200px;
    margin:50px auto;
}

/* ===== SEARCH BAR ===== */
.search-box{
    display:flex;
    flex-wrap:wrap;
    gap:15px;
    background:#fff;
    padding:20px;
    border-radius:14px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    margin-bottom:40px;
}

.search-box select,
.search-box input{
    flex:1;
    min-width:180px;
    padding:12px 15px;
    border-radius:8px;
    border:1px solid #ddd;
    font-size:14px;
    transition:.3s;
}

.search-box select:focus,
.search-box input:focus{
    outline:none;
    border-color:#ff4a00;
    box-shadow:0 0 0 3px rgba(255,74,0,.15);
}

.search-box button{
    background:#ff4a00;
    color:#fff;
    border:none;
    padding:12px 25px;
    border-radius:8px;
    cursor:pointer;
    font-size:15px;
    transition:.3s;
}

.search-box button:hover{
    background:#e23f00;
    transform:translateY(-1px);
}

/* ===== GRID ===== */
/* GRID LAYOUT */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:24px;
    padding:20px;
}

/* MAIN CARD */
.candidate-card{
    background:#ffffff;
    border-radius:16px;
    padding:22px;
    box-shadow:0 8px 24px rgba(0,0,0,.08);
    transition:.3s ease;
    position:relative;
}

.candidate-card:hover{
    transform:translateY(-6px);
    box-shadow:0 14px 40px rgba(0,0,0,.12);
}

/* NAME */
.candidate-card h2{
    font-size:22px;
    margin:0;
    color:#111827;
}

/* PROFESSION */
.candidate-card small{
    display:block;
    margin-top:4px;
    color:#6b7280;
    font-size:14px;
}

/* DETAILS */
.candidate-card p{
    font-size:14px;
    margin:8px 0;
    color:#374151;
}

.candidate-card strong{
    color:#111827;
}

/* COUNTRY TAG */
.tag{
    display:inline-block;
    background:#eef2ff;
    color:#4338ca;
    padding:6px 14px;
    border-radius:999px;
    font-size:13px;
    font-weight:500;
    margin-top:12px;
}

/* INNER CONTACT CARD */
.candidate-card a{
    text-decoration:none;
}

.candidate-card .card{
    margin-top:18px;
    padding:14px;
    background:linear-gradient(135deg,#4f46e5,#6366f1);
    border-radius:12px;
    text-align:center;
    color:#fff;
    transition:.3s ease;
}

.candidate-card .card h2{
    font-size:16px;
    margin:0;
    color:#fff;
}

.candidate-card .card p{
    margin:4px 0 0;
    font-size:13px;
    color:#e0e7ff;
}

.candidate-card .card:hover{
    transform:scale(1.03);
    box-shadow:0 10px 30px rgba(79,70,229,.4);
}

/* EMPTY STATE */
.grid p{
    grid-column:1/-1;
    text-align:center;
    font-size:16px;
    color:#6b7280;
}


/* remove underline everywhere */
.card a{
    text-decoration:none;
    color:inherit;
}

/* tag */
.tag{
    display:inline-block;
    margin-top:14px;
    background:#ebe9ff;
    padding:7px 16px;
    border-radius:30px;
    color:#3b2a7a;
    font-size:12px;
    font-weight:600;
}

/* ===== CONTACT LINK CARD ===== */
.card a .card{
    margin-top:15px;
    padding:15px;
    border-radius:12px;
    background:#fff;
    box-shadow:0 6px 15px rgba(0,0,0,.08);
    transition:.3s;
}

.card a .card:hover{
    background:#ff4a00;
    color:#fff;
}

/* ===== EMPTY MESSAGE ===== */
.grid > p{
    grid-column:1/-1;
    text-align:center;
    font-size:16px;
    color:#777;
    padding:40px 0;
}

/* ===== MOBILE ===== */
@media(max-width:768px){

    .wrapper{
        margin:30px auto;
    }

    .search-box{
        flex-direction:column;
    }

    .search-box button{
        width:100%;
    }

    .card{
        padding:22px;
    }
}
.wrapper{
    background: #f9f9f9;
    padding: 70px 40px;
    border-radius: 18px;
    box-shadow: 0 20px 50px rgba(255,61,0,0.35);
    position: relative;
    overflow: hidden;
}

/* Soft glow overlay */
.wrapper::before{
    content:"";
    position:absolute;
    inset:0;
    background:
        radial-gradient(circle at top left, rgba(255,255,255,0.35), transparent 60%),
        radial-gradient(circle at bottom right, rgba(0,0,0,0.2), transparent 60%);
    pointer-events:none;
}

/* Wrapper content stays above overlay */
.wrapper > *{
    position:relative;
    z-index:1;
}

/* Mobile Friendly */
@media(max-width:768px){
    .wrapper{
        padding:50px 22px;
        border-radius:14px;
    }
}

@media(max-width:480px){
    .wrapper{
        padding:40px 18px;
    }
}



/* ===== RELATED PROFESSION SECTION ===== */

.related-profession{
    padding:80px 40px;
    background:linear-gradient(135deg,#f8fafc,#eef2ff);
    text-align:center;
}

.related-profession h2{
    font-size:32px;
    color:#0b4c7c;
    margin-bottom:10px;
}

.related-profession .sub-text{
    color:#6b7280;
    margin-bottom:45px;
    font-size:15px;
}

/* GRID */
.profession-grid{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:30px;
}

/* CARD */
.profession-card{
    background:#fff;
    padding:35px 20px;
    border-radius:18px;
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    transition:.4s ease;
    cursor:pointer;
    position:relative;
    overflow:hidden;
}

.profession-card::before{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(135deg,#ff3d00,#ff9c1a);
    opacity:0;
    transition:.4s;
}

.profession-card:hover::before{
    opacity:.08;
}

.profession-card:hover{
    transform:translateY(-10px);
    box-shadow:0 25px 55px rgba(0,0,0,0.15);
}

/* ICON */
.prof-icon{
    width:70px;
    height:70px;
    margin:auto;
    border-radius:50%;
    background:#eef2ff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
    margin-bottom:18px;
    transition:.4s;
}

.profession-card:hover .prof-icon{
    background:#ff3d00;
    color:#fff;
}

/* TEXT */
.profession-card h4{
    font-size:18px;
    color:#111827;
    margin-bottom:6px;
}

.profession-card span{
    font-size:14px;
    color:#6b7280;
}

/* ===== MOBILE FRIENDLY ===== */
@media(max-width:768px){
    .related-profession{
        padding:60px 20px;
    }

    .related-profession h2{
        font-size:26px;
    }

    .prof-icon{
        width:60px;
        height:60px;
        font-size:26px;
    }
}

.company-search {
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    padding: 70px 20px;
    color: #fff;
}

.search-container {
    max-width: 900px;
    margin: auto;
    text-align: center;
}

.company-search h2 {
    font-size: 36px;
    margin-bottom: 15px;
}

.company-search p {
    font-size: 17px;
    line-height: 1.6;
    margin-bottom: 30px;
    color: #e0e0e0;
}

.features {
    list-style: none;
    padding: 0;
    margin-bottom: 35px;
}

.features li {
    font-size: 16px;
    margin: 10px 0;
}

.search-btn {
    display: inline-block;
    padding: 14px 35px;
    background: #00c6ff;
    color: #000;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 30px;
    transition: 0.3s ease;
}

.search-btn:hover {
    background: #00a2d4;
    color: #fff;
}
.candidate-list {
    padding: 70px 20px;
    background: #f9fafc;
}

.candidate-list .section-title {
    text-align: center;
    margin-bottom: 40px;
}

.candidate-grid {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
}

.candidate-card {
    background: #fff;
    padding: 30px 20px;
    text-align: center;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: 0.3s ease;
}

.candidate-card:hover {
    transform: translateY(-8px);
}

.candidate-card img {
    width: 110px;
    height: 110px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 15px;
}

.candidate-card h3 {
    font-size: 18px;
    margin-bottom: 5px;
    color: #222;
}

.candidate-card .profession {
    font-size: 14px;
    font-weight: 600;
    color: #4f46e5;
    margin-bottom: 5px;
}

.candidate-card .expertise {
    font-size: 14px;
    color: #666;
    margin-bottom: 15px;
}

.view-btn {
    display: inline-block;
    padding: 10px 22px;
    background: #4f46e5;
    color: #fff;
    font-size: 14px;
    text-decoration: none;
    border-radius: 25px;
    transition: 0.3s;
}

.view-btn:hover {
    background: #3730a3;
}

/* ===== MODAL OVERLAY ===== */
.modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.65);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

/* ===== MODAL BOX ===== */
.modal-content {
    background: #ffffff;
    width: 420px;
    max-width: 90%;
    padding: 25px 22px;
    border-radius: 14px;
    position: relative;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
    animation: popupScale 0.25s ease;
}



.close-btn {
    position: absolute;
    top: 12px;
    right: 15px;

    font-size: 34px;        /* 👈 SIZE BADHA DIYA */
    font-weight: bold;
    line-height: 1;

    color: #333;
    cursor: pointer;

    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;
    transition: 0.2s;
}

.close-btn:hover {
    background: #f2f2f2;
    color: #000;
}

/* ===== ANIMATION ===== */
@keyframes popupScale {
    from {
        transform: scale(0.85);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

/* ===== CLOSE BUTTON ===== */
.close-btn {
    position: absolute;
    top: 12px;
    right: 14px;
    font-size: 32px;
    font-weight: bold;
    cursor: pointer;
    color: #444;
    width: 36px;
    height: 36px;
    line-height: 36px;
    text-align: center;
    border-radius: 50%;
    transition: 0.2s ease;
}

.close-btn:hover {
    background: #f2f2f2;
    color: #000;
}

/* ===== TEXT STYLING ===== */
.modal-content h2 {
    margin: 0 0 12px;
    font-size: 22px;
    color: #222;
}

.modal-content p {
    margin: 6px 0;
    font-size: 14.5px;
    color: #444;
}

.modal-content strong {
    color: #000;
}

/* ===== RESUME CARD ===== */
.resume-link {
    text-decoration: none;
}

.resume-link .card {
    margin-top: 18px;
    padding: 14px;
    border-radius: 12px;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: #fff;
    text-align: center;
    cursor: pointer;
    transition: 0.3s ease;
}

.resume-link .card h2 {
    font-size: 16px;
    margin: 0;
    color: #fff;
}

.resume-link .card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
}

/* ===== MOBILE RESPONSIVE ===== */
@media (max-width: 480px) {
    .modal-content {
        width: 92%;
        padding: 20px;
    }

    .modal-content h2 {
        font-size: 20px;
    }
}
/* ===== CANDIDATE GRID ===== */
.candidate-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 18px;
    margin-top: 25px;
}

/* ===== CANDIDATE CARD ===== */
.candidate-card {
    background: #ffffff;
    padding: 18px 16px;
    border-radius: 14px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    cursor: pointer;
    transition: 0.25s ease;
    position: relative;
}

.candidate-card h2 {
    margin: 0 0 6px;
    font-size: 18px;
    color: #222;
}

.candidate-card p {
    margin: 4px 0;
    font-size: 14.5px;
    color: #555;
}

/* ===== HOVER EFFECT ===== */
.candidate-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.15);
}

/* ===== POPUP CLICKABLE CARD ===== */
.popup-card {
    border-left: 4px solid #6a11cb;
}

/* ===== MOBILE RESPONSIVE ===== */
@media (max-width: 480px) {
    .candidate-card {
        padding: 15px;
    }

    .candidate-card h2 {
        font-size: 17px;
    }
}
/* ===== NAME ===== */
.candidate-card h2 {
    font-size: 20px;
    font-weight: 600;
    color: #111827;
    margin-bottom: 6px;
    letter-spacing: 0.3px;
}

/* ===== PROFESSION ===== */
.candidate-card p:nth-of-type(1) {
    font-size: 14px;
    font-weight: 500;
    color: #4f46e5;   /* highlight */
    margin-bottom: 4px;
}

/* ===== EXPERTISE ===== */
.candidate-card p:nth-of-type(2) {
    font-size: 13.5px;
    color: #6b7280;
    line-height: 1.5;
}

/* ===== TEXT HOVER EFFECT ===== */
.candidate-card:hover h2 {
    color: #ff4a00;
}

.candidate-card:hover p:nth-of-type(1) {
    color: #3730a3;
}

/* ===== MODAL NAME ===== */
#candidateModal h2#modalName {
    font-size: 26px;
    font-weight: 700;
    color: #111827;
    margin-bottom: 18px;
    text-align: center;
}

/* ===== LABEL TEXT (Profession, Email etc.) ===== */
#candidateModal p strong {
    font-weight: 600;
    color: #374151;
    font-size: 14px;
}

/* ===== VALUE TEXT ===== */
#candidateModal p span {
    font-weight: 400;
    color: #6b7280;
    font-size: 14px;
}

/* ===== PARAGRAPH SPACING ===== */
#candidateModal p {
    margin: 10px 0;
    line-height: 1.6;
}

/* ===== EMAIL HIGHLIGHT ===== */
#modalEmail {
    color: #2563eb;
    font-weight: 500;
    word-break: break-all;
}

/* ===== COUNTRY / NATIONALITY ===== */
#modalCountry,
#modalNationality {
    font-weight: 500;
    color: #111827;
}

/* ===== GENDER ===== */
#modalGender {
    text-transform: capitalize;
    font-weight: 500;
    color: #4f46e5;
}



</style>
</head>

<body>
  @include('components.header')
  
<section class="company-search">
    <div class="search-container">
        <h2>Find the Right Candidate for Your Company</h2>
        <p>
            Companies can easily search and filter candidates by
            <strong>profession, expertise, country, and experience</strong>.
            Save time and hire smarter with our powerful candidate search.
        </p>

        <ul class="features">
            <li>🔍 Search by Profession & Skills</li>
            <li>🌍 Filter Candidates by Country</li>
            <li>📄 View Resume & Profile</li>
            <li>⚡ Fast & Easy Hiring Process</li>
        </ul>

        <a href="{{ route('professionals') }}" class="search-btn">
            Search Candidates
        </a>
    </div>
</section>

<div class="wrapper">
<h2 class="section-title">Available Candidate Profiles</h2>
<!-- ===== SEARCH BAR ===== -->
<form method="GET" action="{{ route('professionals') }}" class="search-box">

<select name="country">
 <option value="">Select Country</option>
 <option value="afghan">Afghan</option>
 <!-- A -->
  <option value="afghanistan">Afghanistan</option>
  <option value="albania">Albania</option>
  <option value="algeria">Algeria</option>
  <option value="andorra">Andorra</option>
  <option value="angola">Angola</option>
  <option value="antigua_barbuda">Antigua and Barbuda</option>
  <option value="argentina">Argentina</option>
  <option value="armenia">Armenia</option>
  <option value="australia">Australia</option>
  <option value="austria">Austria</option>
  <option value="azerbaijan">Azerbaijan</option>

  <!-- B -->
  <option value="bahamas">Bahamas</option>
  <option value="bahrain">Bahrain</option>
  <option value="bangladesh">Bangladesh</option>
  <option value="barbados">Barbados</option>
  <option value="belarus">Belarus</option>
  <option value="belgium">Belgium</option>
  <option value="belize">Belize</option>
  <option value="benin">Benin</option>
  <option value="bhutan">Bhutan</option>
  <option value="bolivia">Bolivia</option>
  <option value="bosnia_herzegovina">Bosnia and Herzegovina</option>
  <option value="botswana">Botswana</option>
  <option value="brazil">Brazil</option>
  <option value="brunei">Brunei</option>
  <option value="bulgaria">Bulgaria</option>
  <option value="burkina_faso">Burkina Faso</option>
  <option value="burundi">Burundi</option>

  <!-- C -->
  <option value="cambodia">Cambodia</option>
  <option value="cameroon">Cameroon</option>
  <option value="canada">Canada</option>
  <option value="cape_verde">Cape Verde</option>
  <option value="central_african_republic">Central African Republic</option>
  <option value="chad">Chad</option>
  <option value="chile">Chile</option>
  <option value="china">China</option>
  <option value="colombia">Colombia</option>
  <option value="comoros">Comoros</option>
  <option value="congo">Congo</option>
  <option value="costa_rica">Costa Rica</option>
  <option value="croatia">Croatia</option>
  <option value="cuba">Cuba</option>
  <option value="cyprus">Cyprus</option>
  <option value="czech_republic">Czech Republic</option>

  <!-- D -->
  <option value="denmark">Denmark</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominica">Dominica</option>
  <option value="dominican_republic">Dominican Republic</option>

  <!-- E -->
  <option value="ecuador">Ecuador</option>
  <option value="egypt">Egypt</option>
  <option value="el_salvador">El Salvador</option>
  <option value="equatorial_guinea">Equatorial Guinea</option>
  <option value="eritrea">Eritrea</option>
  <option value="estonia">Estonia</option>
  <option value="ethiopia">Ethiopia</option>

  <!-- F -->
  <option value="fiji">Fiji</option>
  <option value="finland">Finland</option>
  <option value="france">France</option>

  <!-- G -->
  <option value="gabon">Gabon</option>
  <option value="gambia">Gambia</option>
  <option value="georgia">Georgia</option>
  <option value="germany">Germany</option>
  <option value="ghana">Ghana</option>
  <option value="greece">Greece</option>
  <option value="grenada">Grenada</option>
  <option value="guatemala">Guatemala</option>
  <option value="guinea">Guinea</option>
  <option value="guinea_bissau">Guinea-Bissau</option>
  <option value="guyana">Guyana</option>

  <!-- H -->
  <option value="haiti">Haiti</option>
  <option value="honduras">Honduras</option>
  <option value="hungary">Hungary</option>

  <!-- I -->
  <option value="iceland">Iceland</option>
  <option value="india">India</option>
  <option value="indonesia">Indonesia</option>
  <option value="iran">Iran</option>
  <option value="iraq">Iraq</option>
  <option value="ireland">Ireland</option>
  <option value="israel">Israel</option>
  <option value="italy">Italy</option>

  <!-- J -->
  <option value="jamaica">Jamaica</option>
  <option value="japan">Japan</option>
  <option value="jordan">Jordan</option>

  <!-- K -->
  <option value="kazakhstan">Kazakhstan</option>
  <option value="kenya">Kenya</option>
  <option value="kiribati">Kiribati</option>
  <option value="north_korea">North Korea</option>
  <option value="south_korea">South Korea</option>
  <option value="kuwait">Kuwait</option>
  <option value="kyrgyzstan">Kyrgyzstan</option>

  <!-- L -->
  <option value="laos">Laos</option>
  <option value="latvia">Latvia</option>
  <option value="lebanon">Lebanon</option>
  <option value="lesotho">Lesotho</option>
  <option value="liberia">Liberia</option>
  <option value="libya">Libya</option>
  <option value="liechtenstein">Liechtenstein</option>
  <option value="lithuania">Lithuania</option>
  <option value="luxembourg">Luxembourg</option>

  <!-- M -->
  <option value="madagascar">Madagascar</option>
  <option value="malawi">Malawi</option>
  <option value="malaysia">Malaysia</option>
  <option value="maldives">Maldives</option>
  <option value="mali">Mali</option>
  <option value="malta">Malta</option>
  <option value="marshall_islands">Marshall Islands</option>
  <option value="mauritania">Mauritania</option>
  <option value="mauritius">Mauritius</option>
  <option value="mexico">Mexico</option>
  <option value="micronesia">Micronesia</option>
  <option value="moldova">Moldova</option>
  <option value="monaco">Monaco</option>
  <option value="mongolia">Mongolia</option>
  <option value="montenegro">Montenegro</option>
  <option value="morocco">Morocco</option>
  <option value="mozambique">Mozambique</option>
  <option value="myanmar">Myanmar</option>

  <!-- N -->
  <option value="namibia">Namibia</option>
  <option value="nauru">Nauru</option>
  <option value="nepal">Nepal</option>
  <option value="netherlands">Netherlands</option>
  <option value="new_zealand">New Zealand</option>
  <option value="nicaragua">Nicaragua</option>
  <option value="niger">Niger</option>
  <option value="nigeria">Nigeria</option>
  <option value="north_macedonia">North Macedonia</option>
  <option value="norway">Norway</option>

  <!-- O -->
  <option value="oman">Oman</option>

  <!-- P -->
  <option value="pakistan">Pakistan</option>
  <option value="palau">Palau</option>
  <option value="palestine">Palestine</option>
  <option value="panama">Panama</option>
  <option value="papua_new_guinea">Papua New Guinea</option>
  <option value="paraguay">Paraguay</option>
  <option value="peru">Peru</option>
  <option value="philippines">Philippines</option>
  <option value="poland">Poland</option>
  <option value="portugal">Portugal</option>

  <!-- Q -->
  <option value="qatar">Qatar</option>

  <!-- R -->
  <option value="romania">Romania</option>
  <option value="russia">Russia</option>
  <option value="rwanda">Rwanda</option>

  <!-- S -->
  <option value="saint_kitts_nevis">Saint Kitts and Nevis</option>
  <option value="saint_lucia">Saint Lucia</option>
  <option value="saint_vincent">Saint Vincent and the Grenadines</option>
  <option value="samoa">Samoa</option>
  <option value="san_marino">San Marino</option>
  <option value="sao_tome_principe">São Tomé and Príncipe</option>
  <option value="saudi_arabia">Saudi Arabia</option>
  <option value="senegal">Senegal</option>
  <option value="serbia">Serbia</option>
  <option value="seychelles">Seychelles</option>
  <option value="sierra_leone">Sierra Leone</option>
  <option value="singapore">Singapore</option>
  <option value="slovakia">Slovakia</option>
  <option value="slovenia">Slovenia</option>
  <option value="solomon_islands">Solomon Islands</option>
  <option value="somalia">Somalia</option>
  <option value="south_africa">South Africa</option>
  <option value="south_sudan">South Sudan</option>
  <option value="spain">Spain</option>
  <option value="sri_lanka">Sri Lanka</option>
  <option value="sudan">Sudan</option>
  <option value="suriname">Suriname</option>
  <option value="sweden">Sweden</option>
  <option value="switzerland">Switzerland</option>
  <option value="syria">Syria</option>

  <!-- T -->
  <option value="taiwan">Taiwan</option>
  <option value="tajikistan">Tajikistan</option>
  <option value="tanzania">Tanzania</option>
  <option value="thailand">Thailand</option>
  <option value="timor_leste">Timor-Leste</option>
  <option value="togo">Togo</option>
  <option value="tonga">Tonga</option>
  <option value="trinidad_tobago">Trinidad and Tobago</option>
  <option value="tunisia">Tunisia</option>
  <option value="turkey">Turkey</option>
  <option value="turkmenistan">Turkmenistan</option>
  <option value="tuvalu">Tuvalu</option>

  <!-- U -->
  <option value="uganda">Uganda</option>
  <option value="ukraine">Ukraine</option>
  <option value="united_arab_emirates">United Arab Emirates</option>
  <option value="united_kingdom">United Kingdom</option>
  <option value="united_states">United States</option>
  <option value="uruguay">Uruguay</option>
  <option value="uzbekistan">Uzbekistan</option>

  <!-- V -->
  <option value="vanuatu">Vanuatu</option>
  <option value="vatican_city">Vatican City</option>
  <option value="venezuela">Venezuela</option>
  <option value="vietnam">Vietnam</option>

  <!-- Y -->
  <option value="yemen">Yemen</option>

  <!-- Z -->
  <option value="zambia">Zambia</option>
  <option value="zimbabwe">Zimbabwe</option>
@foreach($countries as $country)
<option value="{{ $country }}">{{ $country }}</option>
@endforeach


</select>

<select name="profession">
 <option value="">Select Profession</option>
 <option value="software_developer">Software Developer</option>
    <option value="web_developer">Web Developer</option>
    <option value="frontend_developer">Frontend Developer</option>
    <option value="backend_developer">Backend Developer</option>
    <option value="fullstack_developer">Full Stack Developer</option>
    <option value="mobile_app_developer">Mobile App Developer</option>
    <option value="android_developer">Android Developer</option>
    <option value="ios_developer">iOS Developer</option>
    <option value="game_developer">Game Developer</option>
    <option value="blockchain_developer">Blockchain Developer</option>
    <option value="web3_developer">Web3 Developer</option>
    <option value="ai_engineer">AI Engineer</option>
    <option value="ml_engineer">Machine Learning Engineer</option>
    <option value="data_scientist">Data Scientist</option>
    <option value="data_analyst">Data Analyst</option>
    <option value="cloud_engineer">Cloud Engineer</option>
    <option value="devops_engineer">DevOps Engineer</option>
    <option value="cyber_security_expert">Cyber Security Expert</option>
    <option value="ethical_hacker">Ethical Hacker</option>
    <option value="qa_tester">QA Tester</option>
    <option value="automation_tester">Automation Tester</option>
    <option value="software_architect">Software Architect</option>
    <option value="it_support">IT Support Specialist</option>
    <option value="system_admin">System Administrator</option>
    <option value="network_engineer">Network Engineer</option>

    <!-- Design & Creative -->
    <option value="ui_ux_designer">UI/UX Designer</option>
    <option value="graphic_designer">Graphic Designer</option>
    <option value="visual_designer">Visual Designer</option>
    <option value="product_designer">Product Designer</option>
    <option value="motion_designer">Motion Designer</option>
    <option value="animation_designer">Animation Designer</option>
    <option value="2d_animator">2D Animator</option>
    <option value="3d_animator">3D Animator</option>
    <option value="illustrator">Illustrator</option>
    <option value="concept_artist">Concept Artist</option>
    <option value="brand_designer">Brand Designer</option>
    <option value="logo_designer">Logo Designer</option>
    <option value="typography_designer">Typography Designer</option>

    <!-- Media -->
    <option value="photographer">Photographer</option>
    <option value="videographer">Videographer</option>
    <option value="video_editor">Video Editor</option>
    <option value="reel_editor">Reel Editor</option>
    <option value="cinematographer">Cinematographer</option>
    <option value="film_editor">Film Editor</option>
    <option value="sound_designer">Sound Designer</option>
    <option value="audio_engineer">Audio Engineer</option>
    <option value="music_producer">Music Producer</option>
    <option value="voice_over_artist">Voice Over Artist</option>

    <!-- Writing & Content -->
    <option value="content_writer">Content Writer</option>
    <option value="copywriter">Copywriter</option>
    <option value="technical_writer">Technical Writer</option>
    <option value="script_writer">Script Writer</option>
    <option value="screenwriter">Screenwriter</option>
    <option value="blog_writer">Blog Writer</option>
    <option value="ghost_writer">Ghost Writer</option>
    <option value="editor">Editor</option>
    <option value="proofreader">Proofreader</option>

    <!-- Marketing -->
    <option value="digital_marketer">Digital Marketer</option>
    <option value="seo_specialist">SEO Specialist</option>
    <option value="sem_specialist">SEM Specialist</option>
    <option value="social_media_manager">Social Media Manager</option>
    <option value="performance_marketer">Performance Marketer</option>
    <option value="email_marketer">Email Marketer</option>
    <option value="growth_hacker">Growth Hacker</option>
    <option value="brand_strategist">Brand Strategist</option>
    <option value="marketing_consultant">Marketing Consultant</option>
    <option value="influencer_marketer">Influencer Marketer</option>

    <!-- Business -->
    <option value="entrepreneur">Entrepreneur</option>
    <option value="startup_founder">Startup Founder</option>
    <option value="business_analyst">Business Analyst</option>
    <option value="product_manager">Product Manager</option>
    <option value="project_manager">Project Manager</option>
    <option value="operations_manager">Operations Manager</option>
    <option value="hr_manager">HR Manager</option>
    <option value="recruiter">Recruiter</option>
    <option value="sales_manager">Sales Manager</option>
    <option value="account_manager">Account Manager</option>
    <option value="customer_support">Customer Support Executive</option>

    <!-- Finance -->
    <option value="accountant">Accountant</option>
    <option value="chartered_accountant">Chartered Accountant</option>
    <option value="financial_analyst">Financial Analyst</option>
    <option value="investment_advisor">Investment Advisor</option>
    <option value="stock_trader">Stock Trader</option>
    <option value="crypto_trader">Crypto Trader</option>
    <option value="tax_consultant">Tax Consultant</option>

    <!-- Education -->
    <option value="teacher">Teacher</option>
    <option value="professor">Professor</option>
    <option value="online_tutor">Online Tutor</option>
    <option value="course_creator">Course Creator</option>
    <option value="education_consultant">Education Consultant</option>

    <!-- Healthcare -->
    <option value="doctor">Doctor</option>
    <option value="nurse">Nurse</option>
    <option value="physiotherapist">Physiotherapist</option>
    <option value="nutritionist">Nutritionist</option>
    <option value="fitness_trainer">Fitness Trainer</option>
    <option value="yoga_instructor">Yoga Instructor</option>
    <option value="mental_health_counselor">Mental Health Counselor</option>

    <!-- Legal -->
    <option value="lawyer">Lawyer</option>
    <option value="legal_advisor">Legal Advisor</option>
    <option value="corporate_lawyer">Corporate Lawyer</option>
    <option value="paralegal">Paralegal</option>

    <!-- E-commerce & Freelance -->
    <option value="shopify_expert">Shopify Expert</option>
    <option value="amazon_seller">Amazon Seller</option>
    <option value="dropshipper">Dropshipper</option>
    <option value="freelancer">Freelancer</option>
    <option value="virtual_assistant">Virtual Assistant</option>

    <!-- Construction & Architecture -->
    <option value="architect">Architect</option>
    <option value="interior_designer">Interior Designer</option>
    <option value="civil_engineer">Civil Engineer</option>
    <option value="site_engineer">Site Engineer</option>

    <!-- Misc -->
    <option value="event_planner">Event Planner</option>
    <option value="wedding_planner">Wedding Planner</option>
    <option value="travel_consultant">Travel Consultant</option>
    <option value="tour_guide">Tour Guide</option>
    <option value="fashion_designer">Fashion Designer</option>
    <option value="makeup_artist">Makeup Artist</option>
    <option value="stylist">Stylist</option>
 @foreach($professions as $p)
 <option value="{{ $p }}" {{ request('profession')==$p?'selected':'' }}>{{ $p }}</option>
 @endforeach
</select>

<input type="text" name="name" placeholder="Search by name" value="{{ request('name') }}">

<button type="submit" style="background:orangered;color:#fff;border:none;padding:12px;border-radius:8px;cursor:pointer;font-size:15px;" >Search</button>

</form>

<!-- ===== CARDS ===== -->
 
<div class="grid">

@forelse($candidates as $c)
<div class="candidate-card popup-card"
 onclick='openPopup(
    @json($c->id),
    @json($c->name),
    @json($c->profession),
    @json($c->expertise),
    @json($c->email),
    @json($c->gender),
    @json($c->country),
    @json($c->nationality)
 )'>

    <h2>{{ $c->name }}</h2>
    <p>{{ $c->profession }}</p>
    <p>{{ $c->expertise }}</p>

</div>
@empty
<p>No candidates found</p>
@endforelse








</div>

</div>

<section class="candidate-list">
   

    <div class="candidate-grid">

        <!-- Candidate Card -->
        <div class="candidate-card">
            <img src="images/user.jpg" alt="Candidate Photo">
            <h3>Rahul Sharma</h3>
            <p class="profession">Laravel Developer</p>
            <p class="expertise">Laravel • PHP • MySQL</p>
            
        </div>

        <div class="candidate-card">
            <img src="images/user2.jpg" alt="Candidate Photo">
            <h3>Anjali Verma</h3>
            <p class="profession">Registered Nurse</p>
            <p class="expertise">Patient Care • ICU • Emergency</p>
            
        </div>

        <div class="candidate-card">
            <img src="images/user3.jpg" alt="Candidate Photo">
            <h3>Mohammad Ali</h3>
            <p class="profession">Civil Engineer</p>
            <p class="expertise">AutoCAD • Site Management</p>
           
        </div>
        <div class="candidate-card">
            <img src="images/user3.jpg" alt="Candidate Photo">
            <h3>Mohammad Ali</h3>
            <p class="profession">Civil Engineer</p>
            <p class="expertise">AutoCAD • Site Management</p>
           
        </div>

    </div>
</section>


<section class="related-profession">
    <h2>Related Professions</h2>
    <p class="sub-text">Explore similar professionals you might be interested in</p>

    <div class="profession-grid">

        <div class="profession-card">
            <div class="prof-icon">💻</div>
            <h4>Web Developer</h4>
            <span>Frontend / Backend</span>
        </div>

        <div class="profession-card">
            <div class="prof-icon">🎨</div>
            <h4>Graphic Designer</h4>
            <span>UI / Branding</span>
        </div>

        <div class="profession-card">
            <div class="prof-icon">📊</div>
            <h4>Data Analyst</h4>
            <span>Business Intelligence</span>
        </div>

        <div class="profession-card">
            <div class="prof-icon">📣</div>
            <h4>Digital Marketer</h4>
            <span>SEO / Ads</span>
        </div>

    </div>
</section>




<div id="candidateModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close-btn" onclick="closePopup()">×</span>

        <h2 id="modalName"></h2>

        <p><strong>Profession:</strong> <span id="modalProfession"></span></p>
        <p><strong>Expertise:</strong> <span id="modalExpertise"></span></p>
        <p><strong>Email:</strong> <span id="modalEmail"></span></p>
        <p><strong>Gender:</strong> <span id="modalGender"></span></p>
        <p><strong>Country:</strong> <span id="modalCountry"></span></p>
        <p><strong>Nationality:</strong> <span id="modalNationality"></span></p>

        <!-- ✅ DIRECT RESUME BUTTON -->
        <a id="resumeLink" target="_blank" class="resume-link">
            <div class="card">
                <h2>View Resume</h2>
            </div>
        </a>
    </div>
</div>



<!-- 
<div id="candidateModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close-btn" onclick="closePopup()">×</span>

        <h2 id="modalName"></h2>

        <p><strong>Profession:</strong> <span id="modalProfession"></span></p>
        <p><strong>Expertise:</strong> <span id="modalExpertise"></span></p>
        <p><strong>Email:</strong> <span id="modalEmail"></span></p>
        <p><strong>Gender:</strong> <span id="modalGender"></span></p>
        <p><strong>Country:</strong> <span id="modalCountry"></span></p>
      <p><strong>Nationality:</strong> <span id="modalNationality"></span></p>

<a id="resumeLink" class="resume-link">
    <div class="card">
        <h2>View Resume</h2>
    </div>
</a> -->


    </div>
</div>





@include('components.footer')



<script>
// function openPopup(id, name, profession, expertise, email, gender, country, nationality) {

//     document.getElementById('modalName').innerText = name;
//     document.getElementById('modalProfession').innerText = profession;
//     document.getElementById('modalExpertise').innerText = expertise;
//     document.getElementById('modalEmail').innerText = email;
//     document.getElementById('modalGender').innerText = gender;
//     document.getElementById('modalCountry').innerText = country;
//     document.getElementById('modalNationality').innerText = nationality;

//     // ✅ Resume link dynamic
//      document.getElementById('resumeLink').href =
//         "/contact-candidate/" + id;

//     document.getElementById('candidateModal').style.display = 'flex';
// }

// function closePopup() {
//     document.getElementById('candidateModal').style.display = 'none';
// }


function openPopup(id, name, profession, expertise, email, gender, country, nationality) {

    document.getElementById('modalName').innerText = name;
    document.getElementById('modalProfession').innerText = profession;
    document.getElementById('modalExpertise').innerText = expertise;
    document.getElementById('modalEmail').innerText = email;
    document.getElementById('modalGender').innerText = gender;
    document.getElementById('modalCountry').innerText = country;
    document.getElementById('modalNationality').innerText = nationality;

    document.getElementById('resumeLink').href = `/candidate-resume/${id}`;

    // ✅ YAHI FIX HAI
    document.getElementById('candidateModal').style.display = 'flex';
}

function closePopup() {
    document.getElementById('candidateModal').style.display = 'none';
}



</script>




</body>
</html>
