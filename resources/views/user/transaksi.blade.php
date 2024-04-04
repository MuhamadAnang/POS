@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-header"></h3>
        <div class="card-body">
            @empty($transaksi)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i>Kesalahan!</h5>
                Data yang anda cari tidak ditemukan.
            </div>
            @else
            <h2 class="text-primary font-weight-bold">Transaksi : {{$transaksi->penjualan_kode}}</h2>
            <div class="rounded p-4 bg-black mt-3">
                <div class="row">
                    <div class="col">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th class="h2 text-primary font-weight-bold">TOKOKU</th>
                                    <td class="text-right">Opo Ae Enek</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="rounded p-4 mt-3 bg-light">
                <div class="row">
                    <div class="col">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th class="h4 font-weight-bold">Transaksi</th>
                                    <td class="text-right h4 font-weight-bold">Pegawai</td>
                                </tr>
                                <tr>
                                    <td>{{ $transaksi->penjualan_kode}}</td>
                                    <td class="text-right">sebagai: <span class="font-weight-bold">{{$transaksi->user->level->level_nama}}</span></td>
                                </tr>
                                <tr>
                                    <td>{{ date('d-m-Y - H:i:s', strtotime($transaksi->penjualan_tunggal))}}</td>
                                    @if($transaksi->updated_by != null)
                                    <td class="text-right">Diedit oleh: <span class="font-weight-bold">{{$transaksi->updateBy->nama}}</span>
                                    </td>
                                    @endif
                                </tr>
                                @if($transaksi->updateed_by != null)
                                <tr>
                                    <td></td>
                                    <td class="text-right">Diedit pada: <span class="font-weight-bold">{{$transaksi->updated_at}}</span></td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="rounded p-4 mt-3 bg-light">
                <div class="row">
                    <div class="col">
                        <h5 class="font-weight-bold">Detail Transaksi</h5>
                        <p class="text-muted">Detail pembelian yang sudah dilakukan</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-borderless overflow-auto">
                            <thead>
                                <tr class="border-bottom">
                                    <th scope="col">Barang</th>
                                    <th scope="col" class="text-center">Jumlah Barang</th>
                                    <th scope="col" class="text-center">Harga Satuan</th>
                                    <th scope="col" class="text-center">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transaksi->detail as detail)
                                <tr>
                                    <td>{{ $detail->barang->barang_nama}}</td>
                                    <td class="text-center">{{ $detail->jumlah }}</td>
                                    <td class="text-center">{{ $detail->barang->harga_jual }}</td>
                                    <td class="text-center">{{ $detail->harga }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-3 overflow-auto">
                    <div class="col">
                        <div class="col-5 float-right justify-content-center item-align-center d-flex">
                            <div class="col-9 pr-4">
                                <table class="table table-md table-border-borderless">
                                    <tbody>
                                        <tr>
                                            <th>Subtotal</th>
                                            @php
                                            $subtotal = $transaksi->detail->sum('harga');
                                            @endphp
                                            <td class="text-right">{{$subtotal}}</td>
                                        </tr>
                                        <tr>
                                            <th>Diskon</th>
                                            <td class="text-right">-</td>
                                        </tr>
                                        <tr>
                                            <th>Pajak</th>
                                            <td class="text-right font-weight">-</td>
                                        </tr>
                                        <tr class="border-top">
                                            <th>Total</th>
                                            <td class="text-right font-weight-bold">{{$subtotal}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endempty
            <a href="{{ url('transaksi') }}" class="btn btn-sm btn-primary mt-2 float-right">
                <i class="bi bi-arrow-90deg-left mr-2"></i>Kembali
            </a>
        </div>
    </div>
</div>
@endsection

@push('css')
@endpush
@push('js')
@endpush