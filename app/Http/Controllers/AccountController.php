<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = auth()->user()->accounts;

        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:50'],
            'initial_balance' => ['required', 'numeric', 'min:0'],
            'icon' => ['nullable', 'string', 'max:50'],
        ]);

        $validated['user_id'] = auth()->id();

        // New account starts with its initial balance
        $validated['balance'] = $validated['initial_balance'];

        // Active by default
        $validated['is_active'] = true;

        Account::create($validated);

        return redirect()
            ->route('accounts.index')
            ->with('success', 'Account created successfully.');
    }
    public function show(Account $account)
    {
        abort_unless($account->user_id === auth()->id(), 403);

        return view('accounts.show', compact('account'));
    }
}