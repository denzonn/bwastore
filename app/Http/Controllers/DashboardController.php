<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $transaction = TransactionDetail::with([
            'transaction.user',
            'product.galleries',
        ])->whereHas('product', function ($product) {
            $product->where('users_id', auth()->user()->id);
        });

        $revenue = $transaction->get()->reduce(function ($carry, $item) {
            return $carry + $item->price;
        });

        $costumer = User::count();

        return view('pages.dashboard', [
            'transaction_count' => $transaction->count(),
            'transaction_data' => $transaction->get(),
            'revenue' => $revenue,
            'costumer' => $costumer,
        ]);
    }
}
