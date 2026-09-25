<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>
</head>
<body>

    <h1>Personal Task Manager</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="/tasks/create">+ Add New Task</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->task_name }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <a href="/tasks/{{ $task->id }}/edit">Edit</a>

                        <form action="/tasks/{{ $task->id }}"
      method="POST"
      style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No tasks yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>