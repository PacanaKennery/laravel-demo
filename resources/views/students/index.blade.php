<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>

    <h1>Student Page</h1>
    <a href="/subjects">View Subjects</a>
<br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>