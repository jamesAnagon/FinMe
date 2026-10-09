<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Account;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {   
        $transactions = auth()->user()->transactions;
        return view('transactions.index', [
            'transactions' => $transactions
        ]);
    }

    public function create()
    {   
        $accounts = auth()->user()->accounts;
        $categories = auth()->user()->categories;
        return view('transactions.create', [
            'accounts' => $accounts,
            'categories' => $categories
        ]);
    }

    public function store(TransactionRequest $request)
    {
        $validated = $request -> validated();
        $validated['user_id'] = auth() -> id();
        Transaction::create($validated);
        return redirect()->route('transactions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
