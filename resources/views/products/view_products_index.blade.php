<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        table {
            border-collapse: collapse,
        }

        td,th {
            padding: 10px
        }
    </style>
</head>

<body>
    <div>
        <h1>List Products</h1>
        <form method="post" action={{route('products.store')}}>
            @csrf
            <button type="submit">New Products</button>
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>QTY</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $rows)
                    <tr>
                        <td>@php echo $rows->name @endphp</td>
                        <td>@php echo $rows->description @endphp</td>
                        <td>@php echo $rows->price @endphp</td>
                        <td>@php echo $rows->qty @endphp</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
    
</html>
