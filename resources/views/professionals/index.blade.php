<!DOCTYPE html>
<html>
<head>
<title>Select Profession</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f5f5f5;
}

.container{
    width:90%;
    margin:40px auto;
}

h2{ margin-bottom:30px; }

.grid{
    display:grid;
    grid-template-columns: repeat(4,1fr);
    gap:30px;
    margin-bottom: 30px;
    
}

.card{
    background:#fff;
    padding:35px 20px;
    text-align:center;
    border-radius:18px;
    box-shadow:0 15px 30px rgba(0,0,0,0.15);
    cursor:pointer;
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}
</style>

</head>
<body>
    @include('components.header')

<div class="container">
    <h2>Select Profession</h2>

    <div class="grid">
        @foreach($professions as $p)
        <div class="card" onclick="goForm('{{ $p }}')">
            {{ $p }}
        </div>
        @endforeach
    </div>
</div>
@include('components.footer')
<script>
function goForm(prof){
    window.location.href = "/professionals/form/" + prof;
}
</script>

</body>
</html>
