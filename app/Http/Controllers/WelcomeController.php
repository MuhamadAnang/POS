<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\TransaksiModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    private $year;
    private $month;

    public function __construct()
    {
        $this->year = Carbon::now()->year;
        $this->month = Carbon::now()->month;
    }

    public function index(): Response
    {
        $transactions = $this->getTenLatestTransactions();
        $expense = $this->getTotalExpenses();
        $revenue = $this->getTotalRevenue();

        $breadcrumb = (object) [
            'title' => "Selamat Datang",
            "list" => ["Home", "Welcome"]
        ];
        $activeMenu = 'dashboard';

        return response()->view('welcome', [
            'year' => $this->year,
            'month' => Carbon::now()->month($this->month)->format('F'),
            
            'revenue' => $revenue,
            'transactions' => $transactions,
            'expense' => $expense,
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu
        ]);
    }

    public function getTenLatestTransactions(): Collection
    {
        $transactions = TransaksiModel::with('detail')
            ->orderBy('penjualan_id', 'desc')
            ->take(10)
            ->get();

        $transactions->each(function ($transaction) {
            $totalHarga = $transaction->detail->sum('harga');
            $transaction->total_harga = $totalHarga;
        });

        return $transactions;
    }


    public function getTotalExpenses(): int
    {
        $expenses = BarangModel::with([
            'stok' => function ($query) {
                $query->whereYear('stok_tanggal', $this->year);
            }
        ])->get();

        $expense = $expenses->each(function ($expense) {
            $totalHarga = $expense->stok->sum('stok_jumlah') * $expense->harga_beli;
            $expense->total_harga = $totalHarga;
        });

        return $expense->sum('total_harga');
    }


    public function getTotalRevenue(): int
    {
        $transactions = TransaksiModel::with(['detail'])
            ->whereYear('penjualan_tanggal', $this->year)
            ->get();


        $transactions->each(function ($transaction) {
            $totalHarga = $transaction->detail->sum('harga');
            $transaction->total_harga = $totalHarga;
        });

        return $transactions->sum('total_harga');
    }
}