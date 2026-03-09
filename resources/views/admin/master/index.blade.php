<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>{{ ucfirst($type) }} Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
*{box-sizing:border-box;font-family:Segoe UI,sans-serif}

body{
    margin:0;
    background:#f4f6fb;
}

.top-bar{
    background:#fff;
    padding:18px 30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
}

.top-bar h2{margin:0;color:#333}

.back-btn{
    text-decoration:none;
    background:#ff3d00;
    color:#fff;
    padding:8px 14px;
    border-radius:6px;
    font-size:14px;
}

.container{
    max-width:900px;
    margin:30px auto;
    padding:0 15px;
}

.card{
    background:#fff;
    padding:25px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    margin-bottom:25px;
}

.add-form{
    display:flex;
    gap:10px;
}

.add-form input{
    flex:1;
    padding:12px 14px;
    border:1px solid #ddd;
    border-radius:8px;
}

.add-form input:focus{border-color:#ff3d00;outline:none}

.btn-add{
    background:#ff3d00;
    color:#fff;
    border:none;
    border-radius:8px;
    padding:12px 18px;
    cursor:pointer;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:12px;
    border-bottom:1px solid #eee;
    font-size:14px;
}

th{
    background:#ff3d00;
    color:#fff;
    text-align:left;
}

.row-form{
    display:flex;
    gap:10px;
}

.row-form input{
    flex:1;
    padding:8px 10px;
    border:1px solid #ddd;
    border-radius:6px;
}

.btn-update{
    background:#4caf50;
    color:#fff;
    border:none;
    padding:8px 14px;
    border-radius:6px;
    cursor:pointer;
}

.btn-delete{
    background:#f44336;
    color:#fff;
    padding:8px 14px;
    border-radius:6px;
    text-decoration:none;
}

.action-box{display:flex;gap:8px}
</style>
</head>

<body>

<!-- TOP BAR -->
<div class="top-bar">
    <h2>{{ ucfirst($type) }} Manager</h2>
    <a href="{{ url('/admin/dashboard') }}" class="back-btn">← Dashboard</a>
</div>

<div class="container">

<!-- ADD FORM -->
<div class="card">
<form method="POST" action="{{ url('admin/master/store') }}" class="add-form">
@csrf
<input type="hidden" name="type" value="{{ $type }}">
<input name="name" placeholder="Enter {{ ucfirst($type) }}" required>
<button class="btn-add">Add</button>
</form>
</div>

<!-- LIST -->
<div class="card">

<table>
<tr>
    <th>{{ ucfirst($type) }} Name</th>
    <th width="200">Action</th>
</tr>

@foreach($data as $d)
<tr>
<form method="POST" action="{{ url('admin/master/update/'.$d->id) }}">
@csrf
<td>
    <input name="name" value="{{ $d->name }}">
</td>
<td>
    <div class="action-box">
        <button class="btn-update">Update</button>
        <a class="btn-delete"
           href="{{ url('admin/master/delete/'.$d->id) }}"
           onclick="return confirm('Delete this {{ $type }}?')">
           Delete
        </a>
    </div>
</td>
</form>
</tr>
@endforeach

</table>

</div>

</div>

</body>
</html>
