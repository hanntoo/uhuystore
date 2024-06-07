@extends('layouts.default')
@section('content')
<div class="orders"></div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-bod">
                    <div class="box-title p-2">Tranksasi Barang</div>
                </div>
                <div class="card-body">
                    <div class="tabel-stats order-table ov-h">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Transaction Total</th>
                                <th>Transaction Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->number }}</td>
                                    <td>Rp {{ $item->transaction_total }}</td>
                                    <td>
                                        @if ($item->transaction_status == 'PENDING')
                                        <span class="badge badge-info"></span>
                                        @elseif ($item->transaction_status == 'SUCCESS')
                                        <span class="badge badge-success"></span>
                                        @elseif ($item->transaction_status == 'FAILED')
                                        <span class="badge badge-error"></span>
                                        @else
                                            <span>
                                        @endif
                                                {{ $item->transaction_status }}
                                            </span>
                                    </td>
                                    <td>
                                        <a href="#mymodal"
                                            data-remote =  "{{ route('transactions.show', $item->id) }}"
                                            data-toogle =  "modal"
                                            data-target =  "#mymodal"
                                            data-title =  "Detail Transaksi {{ $item->uuid }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('products.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $item->id)}}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="p-5">Data Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection