@extends('layouts.template')

@section('content')

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($transaksi)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
            Data yang Anda cari tidak ditemukan.
        </div>
        @else
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-black"></div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <ul class="list-unstyled float-end">
                                        <li class="font-weight-bold" style="font-size: 30px; color: blue;">Si Maap Berkah</li>
                                        <li>Toko ne wong sholeh</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row text-center">
                                <h3 class="text-uppercase text-center mt-3">Transaksi {{ $transaksi->penjualan_kode }}</h3>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th class="h4 font-weight-bold">Customer</th>
                                            <td class="text-right h4 font-weight-bold">Pegawai</td>
                                        </tr>
                                        <tr>
                                            <td>{{ $transaksi->pembeli }}</td>
                                            <td class="text-right">Dibuat oleh: <span class="font-weight-bold">{{ $transaksi->user->nama }}</span></td>
                                        </tr>
                                        <tr>
                                            <td>{{ $transaksi->penjualan_kode }}</td>
                                            <td class="text-right">Sebagai: <span class="font-weight-bold">{{ $transaksi->user->level->level_name }}</span></td>
                                        </tr>
                                        <tr>
                                            <td>{{ date('d-m-Y - H:i:s', strtotime($transaksi->penjualan_tanggal)) }}</td>
                                            @if ($transaksi->updated_by != null)
                                            <td class="text-right">Diedit oleh: <span class="font-weight-bold">{{ $transaksi->updatedBy->nama }}</span>
                                            </td>
                                            @endif
                                        </tr>
                                        @if ($transaksi->updated_by != null)
                                        <tr>
                                            <td></td>
                                            <td class="text-right">Diedit pada: <span class="font-weight-bold">{{ $transaksi->updated_at }}<span class="font-weight-bold"></td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
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
                                                    <td>{{ $transaksi->pembeli }}</td>
                                                    <td class="text-right">Dibuat oleh: <span class="font-weight-bold">{{ $transaksi->user->nama }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>{{ $transaksi->penjualan_kode }}</td>
                                                    <td class="text-right">Sebagai: <span class="font-weight-bold">{{ $transaksi->user->level->level_name }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td>{{ date('d-m-Y - H:i:s', strtotime($transaksi->penjualan_tanggal)) }}</td>
                                                    @if ($transaksi->updated_by != null)
                                                    <td class="text-right">Diedit oleh: <span class="font-weight-bold">{{ $transaksi->updatedBy->nama }}</span>
                                                    </td>
                                                    @endif
                                                </tr>
                                                @if ($transaksi->updated_by != null)
                                                <tr>
                                                    <td></td>
                                                    <td class="text-right">Diedit pada: <span class="font-weight-bold">{{ $transaksi->updated_at }}<span class="font-weight-bold"></td>
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
                                                @foreach ($transaksi->detail as $detail)
                                                <tr>
                                                    <td>{{ $detail->barang->barang_nama }}</td>
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
                                    <div class="col ">
                                        <div class="col-5 float-right justify-content-center items-align-center d-flex">
                                            <div class="col-9 pr-4">
                                                <table class="table table-md table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th>Subtotal</th>
                                                            @php
                                                            $subtotal = $transaksi->detail->sum('harga');
                                                            @endphp
                                                            <td class="text-right">{{ $subtotal }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Diskon</th>
                                                            <td class="text-right">-</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pajak</th>
                                                            <td class="text-right">-</td>
                                                        </tr>
                                                        <tr class="border-top">
                                                            <th>Total</th>
                                                            <td class="text-right font-weight-bold">{{ $subtotal }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endempty
        <a href="{{ url('transaksi') }}" class="btn btn-sm btn-primary mt-2 float-right"><i class="bi bi-arrow-90deg-left mr-2"></i>Kembali</a>
    </div>
</div>
@endsection

@push('css')
@endpush
@push('js')
@endpush