<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Routes</title>
    <style>
    body {
        font: 16px monospace;
        text-align: left;
        cursor: default;
    }

    table, th, td {
        border: 2px solid #222;
        border-collapse: collapse;
    }

    th, td {
        padding: 5px;
    }
    </style>
</head>
<body>
    <h1>Project Routes</h1>
    <table>
        <tr>
            <th>Route</th>
            <th>Method</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach (\Illuminate\Support\Facades\Route::getRoutes()->getRoutes() as $route)

            <tr>
                <td>
                    <a href="{{ $route->uri() }}"
                       target="_blank">
                        {{ $route->uri() }}
                    </a>
                </td>
                <td>
                    {{ implode(', ', $route->methods()) }}
                </td>
                <td>
                    {{ $route->getName() ?? '(anonymous)' }}
                </td>
                <td>
                    {{ $route->getActionName() }}
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
