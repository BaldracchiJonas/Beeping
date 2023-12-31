<div>
    <table>
        <livewire:table-header :headerColumns=$headerColumns />

        <tbody>
            @foreach ($ordersArray as $order)
                <livewire:table-row :row=$order />
            @endforeach
        </tbody>
    </table>
</div>

<style>
    table {
        margin: 0 auto;
        margin-top: 2%;
        margin-bottom: 2%;
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
