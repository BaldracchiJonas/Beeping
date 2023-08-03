<div>
    <table>
        <thead>
            <tr>
                <th>Order Reference</th>
                <th>Customer Name</th>
                <th>Total Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->order->order_ref }}</td>
                <td>{{ $order->order->customer_name }}</td>
                <td>{{ number_format($order->qty * $order->product->cost, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    table {
        margin: 0 auto;
    }

    thead th {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:nth-child(odd) {
        background-color: #e0e0e0;
    }

    td {
        padding: 10px;
    }
</style>
