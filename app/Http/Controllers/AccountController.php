<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Http\Resources\Account as AccountResource;
use App\Http\Resources\AccountCollection;

class AccountController extends Controller
{
    public function index() {
        return new AccountCollection(Account::all());
    }

    public function show($id) {
        return new AccountResource(Account::findOrFail($id));
    }

    public function total() {
        $total_credit = Account::where('type', 'Credit')->sum('cost');
        $total_debit = Account::where('type', 'Debit')->sum('cost');

        return response()->json([
            'credit' => $total_credit,
            'debit' => $total_debit,
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'date' => 'required',
            'type' => 'required',
            'cost' => 'required',
        ]);

        $item = Account::create($request->all());

        return (new AccountResource($item))
            ->response()
            ->setStatusCode(201);
    }

    public function delete($id)
    {
        $item = Account::findOrFail($id);
        $item->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
