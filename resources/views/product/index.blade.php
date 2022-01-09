<html>

<body>
    @extends('layouts.app')
    @section('content')
    <h1>{{$listname}}</h1>

    <p>
        <a href='/product/create'>Create New Product</a>
    </p>

    @if (count($products) > 0)
    <table>
        <th>ID</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <!-- Iterate through tasks. -->
        @foreach ($products as $product)
        <tr>
            <!-- Show task. -->
            <td>
                <div>{{ $product->id }}</div>
            </td>
            <td>
                <div>{{ $product->description }}</div>
            </td>
            <td>
                <div>{{ $product->quantity }}</div>
            </td>
            <td>
                <div>{{ $product->price }}</div>
            </td>
            <td>
                <a href="/product/detail/{{ $product->id }}">detail</a>
            </td>
            <td>
                <form action="/product/delete" method="POST">
                    <input type="hidden" name="id" value="{{$product->id}}" />
                    <!-- For safety, the csrf token ensures the post request is 
            from the current application and not a 3rd party -->
                    {{ csrf_field() }}
                    <input type="submit" value="Delete" />
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    @endif
    @endsection
</body>

</html>