<!DOCTYPE html>
<html>
<head>
<title>Manage Candidates</title>
<style>
body{background:#f4f6fb;font-family:Segoe UI;margin:0;padding:0}
.wrapper{max-width:1000px;margin:30px auto;padding:15px}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px}
.card{background:#fff;padding:18px;border-radius:12px;box-shadow:0 10px 25px rgba(0,0,0,.08)}
.actions{margin-top:10px;display:flex;gap:10px}
.delete{background:#e53935;color:#fff;border:none;padding:8px 14px;border-radius:6px;cursor:pointer}
.back{display:inline-block;margin-bottom:20px;text-decoration:none;background:#ff3d00;color:#fff;padding:8px 14px;border-radius:6px}
</style>
</head>
<body>

<div class="wrapper">

<a href="/admin/dashboard" class="back">← Dashboard</a>
<h2>Manage Candidates</h2>

<div class="grid">
@foreach($candidates as $c)
 <div class="card">
    <h3>{{ $c->name }}</h3>
    <p>{{ $c->profession }}</p>
    <p>{{ $c->email }}</p>

    <div class="actions">
        <form method="POST" action="{{ route('admin.candidate.delete',$c->id) }}"
              onsubmit="return confirm('Delete this candidate?')">
            @csrf
            @method('DELETE')
            <button class="delete">Delete</button>
        </form>
    </div>
 </div>
@endforeach
</div>

</div>
</body>
</html>
