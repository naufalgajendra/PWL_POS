<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
    <tr>
    
    <td>ID</td>
    <td>Username</td>
    <td>Nama</td>
    <td>ID Level Pengguna</td>
    </tr>
    <tr>
    
    <td>{{ $data->user_id }}</td>
    <td>{{ $data->username }}</td>
    <td>{{ $data->nama }}</td>
    <td>{{ $data->level_id }}</td>
    </tr>
    
    </table>
    </body>
</html>
