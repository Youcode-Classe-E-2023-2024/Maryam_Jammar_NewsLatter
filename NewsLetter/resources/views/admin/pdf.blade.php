<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 20px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }
        .data {
            font-size: 18px;
            color: #666;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="section">
        <h2>Total Users</h2>
        <div class="data">{{$totalUsers}}</div>
    </div>
    <div class="section">
        <h2>Total Templates</h2>
        <div class="data">{{$totalTemplates}}</div>
    </div>
    <div class="section">
        <h2>Total Subscribers</h2>
        <div class="data">{{$totalSubscribers}}</div>
    </div>
    <div class="section">
        <h2>Latest Users</h2>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($latestUsers as $latestUser)
                <tr>
                    <td>{{$latestUser->name}}</td>
                    <td>{{$latestUser->email}}</td>
                    <td>
                        @foreach($latestUser->roles as $role)
                            {{$role->name}}
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="section">
        <h2>Latest Templates</h2>
        <table>
            <thead>
            <tr>
                <th>Title</th>
                <th>Creator</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($latestTemplates as $latestTemplate)
                <tr>
                    <td>{{$latestTemplate->title}}</td>
                    <td>{{$latestTemplate->creator}}</td>
                    <td>{{$latestTemplate->status}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
