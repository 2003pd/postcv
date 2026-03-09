@php
use Illuminate\Support\Facades\DB;

$companyStats = DB::table('candidate_contacts')
    ->select('company_name', DB::raw('count(*) as total'))
    ->groupBy('company_name')
    ->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
*{box-sizing:border-box;font-family:'Segoe UI', sans-serif}
body{margin:0;background:#f4f6fb}

/* ===== LAYOUT ===== */
.layout{display:flex;min-height:100vh}

/* ===== SIDEBAR ===== */
.sidebar{
    width:260px;
    background:#1e1b4b;
    color:#fff;
    padding:25px 20px;
    position:fixed;
    height:100%;
}
.sidebar h2{text-align:center;margin-bottom:25px}
.sidebar a{
    display:flex;gap:14px;
    padding:12px 15px;
    color:#e5e7eb;
    text-decoration:none;
    border-radius:10px;
    margin-bottom:10px;
}
.sidebar a:hover{background:#312e81;color:#fff}
.logout{background:#ff3d00;color:#fff !important}

/* ===== MAIN ===== */
.main{margin-left:260px;padding:30px;width:100%}

/* ===== GLASS ===== */
.glass-box{
    background:rgba(255,255,255,0.7);
    backdrop-filter:blur(12px);
    border-radius:20px;
    padding:25px;
    box-shadow:0 20px 45px rgba(0,0,0,.18);
}

/* ===== TABLE ===== */
table{border-collapse:collapse;width:100%}
th,td{padding:10px;font-size:14px}
th{background:#f3f4f6}

/* ===== GRID ===== */
.dashboard-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:25px;
    margin-top:20px;
}

/* ===== CARDS ===== */
.card-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
    margin-top:40px;
}
.dash-card{
    background:#fff;
    padding:30px 20px;
    border-radius:18px;
    text-decoration:none;
    color:#333;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}
.dash-card i{font-size:36px;color:#ff3d00;margin-bottom:12px}

@media(max-width:900px){
    .main{margin-left:0}
    .layout{flex-direction:column}
    .dashboard-grid{grid-template-columns:1fr}
}
/* ===== CANDIDATES TABLE ===== */
.candidates-box{
    margin-top:40px;
}

.candidate-table th{
    background:#eef2ff;
    font-weight:600;
}

.candidate-table tr:hover{
    background:#f9fafb;
}

.resume-link{
    color:#2563eb;
    text-decoration:none;
    font-weight:500;
}
.resume-link i{
    margin-right:6px;
}

.muted{
    color:#9ca3af;
    font-size:13px;
}

.btn-danger{
    background:#ef4444;
    border:none;
    color:#fff;
    padding:6px 12px;
    border-radius:6px;
    cursor:pointer;
    font-size:13px;
}
.btn-danger:hover{
    background:#dc2626;
}

/* ===== RECENT CANDIDATE REQUESTS ===== */
.glass-box h3{
    margin-bottom:18px;
    font-size:18px;
    font-weight:600;
    color:#1f2937;
}

.glass-box table{
    width:100%;
    border-collapse:separate;
    border-spacing:0;
    background:#fff;
    border-radius:14px;
    overflow:hidden;
}

/* TABLE HEADER */
.glass-box table th{
    background:#eef2ff;
    color:#1e1b4b;
    font-size:13px;
    font-weight:600;
    text-transform:uppercase;
    padding:12px;
    text-align:left;
}

/* TABLE BODY */
.glass-box table td{
    padding:12px;
    font-size:14px;
    color:#374151;
    border-bottom:1px solid #e5e7eb;
}

/* LAST ROW BORDER FIX */
.glass-box table tr:last-child td{
    border-bottom:none;
}

/* ROW HOVER */
.glass-box table tbody tr:hover{
    background:#f9fafb;
}

/* CENTER EMPTY MESSAGE */
.glass-box table td[colspan]{
    color:#9ca3af;
    font-size:14px;
    padding:18px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .glass-box table{
        font-size:13px;
    }
    .glass-box table th,
    .glass-box table td{
        padding:10px;
    }
}

/* ===========================
   MOBILE RESPONSIVE FIX
=========================== */
@media (max-width: 768px) {

    /* MAIN AREA */
    .main{
        margin-left:0;
        padding:15px;
    }

    /* SIDEBAR AUTO HIDE */
    .sidebar{
        position:relative;
        width:100%;
        height:auto;
    }

    /* GRID STACK */
    .dashboard-grid{
        grid-template-columns:1fr;
    }

    /* CARDS ONE BY ONE */
    .card-grid{
        grid-template-columns:1fr;
        gap:18px;
        margin-top:25px;
    }

    /* GLASS BOX SCROLL */
    .glass-box{
        padding:18px;
        overflow-x:auto;
    }

    /* TABLE RESPONSIVE */
    table{
        min-width:650px;
    }

    th, td{
        font-size:13px;
        padding:8px;
    }

    /* PIE CHART FIX */
    canvas{
        width:100% !important;
        height:auto !important;
    }

    /* BUTTONS */
    .btn-danger{
        padding:5px 10px;
        font-size:12px;
    }
}

/* EXTRA SMALL DEVICES */
@media (max-width: 480px){

    h2{
        font-size:18px;
    }

    h3{
        font-size:16px;
    }

    .dash-card{
        padding:20px 15px;
    }

    .dash-card i{
        font-size:30px;
    }
}



</style>
</head>

<body>

<div class="layout">

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>ADMIN PANEL</h2>
    <a href="{{ url('admin/master/profession') }}"><i class="fa-solid fa-briefcase"></i> Profession</a>
    <a href="{{ url('admin/master/location') }}"><i class="fa-solid fa-location-dot"></i> Location</a>
   
    <a href="{{ url('admin/master/nationality') }}"><i class="fa-solid fa-flag"></i> Nationality</a>
    <a href="{{ url('/admin/candidates') }}"><i class="fa-solid fa-id-card"></i> Candidates</a>
    <a href="{{ url('/admin/candidates/manage') }}"><i class="fa-solid fa-trash-can"></i> Manage Candidates</a>
    <a href="{{ url('/admin/contacts') }}"><i class="fa-solid fa-envelope"></i> Contact Messages</a>
    <a href="/admin/logout" class="logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
</div>

<!-- MAIN -->
<div class="main">

<h2>Admin Dashboard</h2>

<div class="dashboard-grid">

<!-- TABLE -->
<div class="glass-box">
    <h3>Recent Candidate Requests</h3>
    <table>
        <tr>
            <th>#</th><th>Candidate</th><th>Company</th>
            <th>Email</th><th>Phone</th><th>Date</th>
        </tr>
        @forelse($latestContacts as $k=>$row)
        <tr>
            <td>{{ $k+1 }}</td>
            <td>{{ $row->candidate->name ?? '-' }}</td>
            <td>{{ $row->company_name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->created_at->format('d M Y') }}</td>
        </tr>
        @empty
        <tr><td colspan="6" align="center">No data</td></tr>
        @endforelse
    </table>
</div>

<!-- PIE CHART -->
<div class="glass-box">
    <h3 style="text-align:center">Company Wise Requests</h3>
    <canvas id="companyPie"></canvas>
</div>

</div>

<!-- CARDS -->
<div class="card-grid">
    <a href="{{ url('admin/master/profession') }}" class="dash-card">
        <i class="fa-solid fa-briefcase"></i>
        <h3>Profession</h3>
    </a>
    <a href="{{ url('admin/master/location') }}" class="dash-card">
        <i class="fa-solid fa-location-dot"></i>
        <h3>Location</h3>
    </a>
  
    <a href="{{ url('admin/master/nationality') }}" class="dash-card">
        <i class="fa-solid fa-flag"></i>
        <h3>Nationality</h3>
    </a>
</div>




<div class="glass-box candidates-box">
    <h3>All Candidates</h3>

    <table class="candidate-table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Resume</th>
            <th>Actions</th>
        </tr>

        @forelse($candidates as $k=>$c)
        <tr>
            <td>{{ $k+1 }}</td>
            <td>{{ $c->name }}</td>

            <td>
                @if($c->resume)
                    <a class="resume-link"
                       href="{{ route('candidate.resume',$c->id) }}"
                       target="_blank">
                        <i class="fa-solid fa-file-pdf"></i> View Resume
                    </a>
                @else
                    <span class="muted">No Resume</span>
                @endif
            </td>

            <td>
                <form method="POST"
                      action="{{ route('admin.candidate.resume.delete',$c->id) }}"
                      onsubmit="return confirm('Delete resume?')">
                    @csrf @method('DELETE')
                    <button class="btn-danger">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align:center">No candidates found</td>
        </tr>
        @endforelse
    </table>
</div>



</div>
</div>



<script>
new Chart(document.getElementById('companyPie'),{
    type:'pie',
    data:{
        labels:{!! json_encode($companyStats->pluck('company_name')) !!},
        datasets:[{
            data:{!! json_encode($companyStats->pluck('total')) !!},
            backgroundColor:['#6366f1','#22c55e','#f97316','#06b6d4','#ec4899','#a855f7']
        }]
    }
});
</script>

</body>
</html>
