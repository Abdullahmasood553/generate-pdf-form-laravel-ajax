l<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Customer Details</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">
</head>
<body>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $fname }}</td>
                <td>{{ $lname }}</td>
                <td>{{ $email }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>