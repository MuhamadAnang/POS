@extends('layouts.template')
@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="card-title font-weight-bold">Dashboard</h1>
    </div>
    <div class="card-body">

        {{-- Card --}}
        <div class="row bg-light py-3 justify-content-center align-items-center">
            <div class="col">
                <div class="card border " style="background-color:darkgray">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-md">Jumlah Pendapatan {{ $year }}</h5>
                    </div>
                    <div class="card-body py-4">
                        <h1 class="font-weight-bold text-lg">Rp. {{ number_format($revenue, 2, ',', '.') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border" style="background-color:darkgray">
                    <div class="card-header">
                        <h5 class="font-weight-bold text-md">Total Pengeluaran {{ $year }}</h5>
                    </div>
                    <div class="card-body py-4">
                        <h4 class="font-weight-bold text-lg">Rp. {{ number_format($expense, 2, ',', '.') }}</h4>
                    </div>
                </div>
            </div>
        </div>

        {{-- Chart --}}
        <div class="row mt-3">
            <div class="card col bg-light ml-md-3 p-3" style="height: 36rem">
                <div class="card-header border-0">
                    <h5 class="font-weight-bold">Transaksi Terakhir</h5>
                </div>
                <div class="card-body overflow-auto">
                    <table class="table table-unbordered table-striped">
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td>
                                    <div>
                                        <h5 class="font-weight-bold text-md">{{ $transaction->pembeli }}</h5>
                                        <small>{{ DateTime::createFromFormat('Y-m-d H:i:s', $transaction->penjualan_tanggal)->format('Y-m-d') }}</small>
                                    </div>
                                </td>
                                <td>
                                    <div>

                                        <h5 class="font-weight-bold text-md">Rp.
                                            {{ number_format($transaction->total_harga, 2, ',', '.') }}
                                        </h5>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection


@push('js')
@endpush