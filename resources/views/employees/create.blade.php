<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
</head>
<body>
    <h1>Create Employee</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
            
        @endif
    </div>
    <form action="{{ route('employee.store') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input id="name" name="name"> <br><br>

        <label for="age">Age</label>
        <input id="age" name="age"><br><br>

        <label for="position">Position</label>
        <input id="position" name="position"><br><br>

        <label for="salary">Salary</label>
        <input id="salary" name="salary"><br><br>

        <button type="submit">Create</button>
    </form>
</body>
</html>
