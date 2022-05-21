<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/table.css">
</head>

<body>
    @include('user')

    <table>
        <tr>
            <th colspan="4">
                <h1>Project Details</h1>
            </th>
        </tr>
        <tr>
            <th>Project Id</th>
            <th>Project Name</th>
            <th>Project Description</th>
            <th>Action</th>
        </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $project['id'] }}</td>
                <td>{{ $project['proj_name'] }}</td>
                <td>{{ $project['proj_des'] }}</td>
                <td>
                    <a href="">Accept</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4">
                <span>
                    {{ $projects->links() }}
                </span>
            </td>
        </tr>
    </table>

</body>

</html>
