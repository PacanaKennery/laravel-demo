<!DOCTYPE html>
<html>
<head>
    <title>Subjects</title>
</head>
<body>

    <h1>Subject List</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Units</th>
        </tr>

        @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->name }}</td>
                <td>{{ $subject->code }}</td>
                <td>{{ $subject->units }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>