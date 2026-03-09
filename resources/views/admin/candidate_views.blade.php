<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Candidate Views</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body{
            background:#f4f6fb;
            font-family: Arial, sans-serif;
            padding:30px;
        }

        h2{margin-bottom:20px;}

        .card{
            background:#fff;
            padding:25px;
            border-radius:10px;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
            margin-bottom:30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th, td{
            padding:12px;
            text-align:left;
            border-bottom:1px solid #eee;
            font-size:14px;
        }

        th{
            background:#ff3d00;
            color:#fff;
        }

        tr:hover{
            background:#fafafa;
        }
    </style>
</head>

<body>

<h2>Candidate Viewed By Companies</h2>

<!-- ===== GRAPH CARD ===== -->
<div class="card">
    <canvas id="viewChart" height="100"></canvas>
</div>

<!-- ===== TABLE CARD ===== -->
<div class="card">

<table>
    <tr>
        <th>ID</th>
        <th>Company</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Candidate ID</th>
        <th>Date</th>
    </tr>

    @foreach($views as $v)
    <tr>
        <td>{{ $v->id }}</td>
        <td>{{ $v->company_name }}</td>
        <td>{{ $v->email }}</td>
        <td>{{ $v->phone }}</td>
        <td>{{ $v->candidate_id }}</td>
        <td>{{ \Carbon\Carbon::parse($v->created_at)->format('d M Y') }}</td>
    </tr>
    @endforeach

</table>

</div>

<script>
const labels = [
@foreach($chartData as $c)
    "{{ \Carbon\Carbon::parse($c->date)->format('d M') }}",
@endforeach
];

const data = [
@foreach($chartData as $c)
    {{ $c->total }},
@endforeach
];

new Chart(document.getElementById('viewChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Views Per Day',
            data: data,
        }]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                ticks: { stepSize: 1 }
            }
        }
    }
});
</script>

</body>
</html>
