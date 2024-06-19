<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <td>{{ $item->name }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $item->email }}</td>
    </tr>
    <tr>
        <th>No Hp</th>
        <td>{{ $item->number }}</td>
    </tr>
    <tr>
        <th>Total Transaksi</th>
        <td>{{ $item->transaction_total }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{ $item->transaction_status }}</td>
    </tr>
    <tr>
        <th>Pembelian Produk</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                </tr>
                @foreach($item->details as $detail)
                <tr>
                    <td>{{ $detail->product->name }}</td>
                    <td>{{ $detail->product->type }}</td>
                    <td>{{ $detail->product->price }}</td>
                </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>

{{-- <div class="row">
    <div class="col-4">
        <a href="{{ route('transaction.status',$item->id) }} ?status=SUCCESS"
        class="btn btn-success btn-block">
        <i class="fa fa-check"></i>Set Success
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transaction.status',$item->id) }} ?status=FAILED"
        class="btn btn-error btn-block">
        <i class="fa fa-check"></i>Set Failed
        </a>
    </div>
    <div class="col-4">
        <a href="{{ route('transaction.status',$item->id) }} ?status=PENDING"
        class="btn btn-info btn-block">
        <i class="fa fa-check"></i>Set Pending
        </a>
    </div>
</div>  --}}

