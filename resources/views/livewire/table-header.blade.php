<div>
    <thead>
        <tr>
            @foreach ($headerColumns as $headerColumn)
                <th>{{ $headerColumn }}</th>
            @endforeach
        </tr>
    </thead>
</div>

<style>
    thead th {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

</style>
