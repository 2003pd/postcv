<!DOCTYPE html>
<html>
<head>
<title>All Candidates</title>
<style>
body{background:#f4f6fb;font-family:Segoe UI;margin:0;padding:0}
.wrapper{max-width:1000px;margin:30px auto;padding:15px}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px}
.card{background:#fff;padding:18px;border-radius:12px;box-shadow:0 10px 25px rgba(0,0,0,.08)}
.card h3{margin:0 0 6px}
.tag{background:#eef;color:#3b2a7a;padding:5px 12px;border-radius:20px;font-size:12px}
.back{display:inline-block;margin-bottom:20px;text-decoration:none;background:#ff3d00;color:#fff;padding:8px 14px;border-radius:6px}
</style>
</head>
<body>

<div class="wrapper">

<a href="/admin/dashboard" class="back">← Dashboard</a>
<h2>All Candidates</h2>

<div class="grid">
@foreach($candidates as $c)
 <div class="card">
    <h3>{{ $c->name }}</h3>
    <p>{{ $c->profession }}</p>
    <p>{{ $c->email }}</p>
    <span class="tag">{{ $c->country }}</span>
 </div>
@endforeach
</div>

</div>
</body>
</html>
