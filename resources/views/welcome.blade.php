<html>
    <body>
        <h1>{{$firstname}} {{$lastname}}</h1>
    @if (count($products) > 0)
    <table>
        <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        </tr>
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
         <a href="/home/detail/{{ $product->id }}">detail</a>

            </td>
        </tr>
        @endforeach
    </table>
    @endif
    </body>
</html>
