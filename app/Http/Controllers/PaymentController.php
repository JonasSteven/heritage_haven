<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.payment.index', [
            'payments' => Payment::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paymentMethod' => 'required'
        ]);

        $input = $request->all();
        Payment::create($input);

        return redirect('/payments')->with('success', 'Payment Added !!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $payments = Payment::find($id);

        return view('admin.payment.show', [
            'payments' => $payments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payments = Payment::find($id);
        
        return view('admin.payment.edit', [
            'payments' => $payments
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $payments = Payment::find($id);

        $request->validate([
            'paymentMethod' => 'required'
        ]);

        $input = $request->all();
        $payments->update($input);

        return redirect('/payments')->with('success', 'Payment Updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Payment::destroy($id);

        return redirect('/payments')->with('success', 'Payment Deleted !!!');
    }
}
