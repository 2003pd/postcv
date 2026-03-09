<style>
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background: #f5f7fb;
    }

    h2 {
        margin-bottom: 15px;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .back-btn {
        text-decoration: none;
        padding: 10px 16px;
        background: linear-gradient(135deg, #22c55e, #16a34a);
        color: #fff;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.3s;
        box-shadow: 0 5px 15px rgba(34,197,94,0.3);
    }

    .back-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(34,197,94,0.4);
    }

    .table-wrapper {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 700px;
    }

    th {
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: #fff;
        padding: 12px;
        text-align: left;
        font-weight: 600;
        font-size: 14px;
    }

    td {
        padding: 12px;
        font-size: 14px;
        color: #444;
        border-bottom: 1px solid #eee;
        vertical-align: top;
    }

    tr:hover {
        background: #f3f4ff;
    }

    td:nth-child(4) {
        max-width: 300px;
        white-space: pre-wrap;
    }

    .date {
        color: #666;
        font-size: 13px;
    }
</style>

<h2>
    Contact Messages
    <a href="{{ url('admin/dashboard') }}" class="back-btn">← Back to Dashboard</a>
</h2>

<div class="table-wrapper">
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Date</th>
        </tr>

        @foreach($contacts as $c)
        <tr>
            <td>{{ $c->name }}</td>
            <td>{{ $c->email }}</td>
            <td>{{ $c->phone }}</td>
            <td>{{ $c->message }}</td>
            <td class="date">{{ $c->created_at->format('d M Y') }}</td>
        </tr>
        @endforeach
    </table>
</div>
