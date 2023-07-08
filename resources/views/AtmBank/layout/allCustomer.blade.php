<div class="container p-5 m-5">
    <div class="row justify-content-center align-items-center g-2 p-5">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Account Number</th>
                            <th scope="col">Account Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer as $item)
                            <tr class="">
                                <td scope="row">{{ $item->firstname . ' ' . $item->lastname }}</td>
                                <td>{{ $item->Accoutn . $item->id }}</td>
                                <td>

                                    @if ($item->Account === 202320240000)
                                        <span class="text-warning">Pending</span>
                                    @else
                                        <span class="text-success">Active</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>