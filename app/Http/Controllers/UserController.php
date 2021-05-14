<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;
use App\Models\User;
use App\Models\Animal;
use App\Models\State;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buy = User::getTotalBuys();

        return view('admin.consultaCompra', compact('buy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $user = new User();
            $user->userName = $request->name;
            $user->userLastName = $request->lastName;
            $user->userEmail = $request->mail;
            $user->userPhone = $request->phone;
            $user->save();

            $payment = new Payment();
            $payment->paymentMethod_paymentMethodId = $request->method;
            $payment->user_userId = $user->id;
            $payment->animal_animalId = $request->mascot;
            $payment->save();

            Animal::where('animalId', $request->mascot)
                ->update([ 'state_stateId' => State::getState('bought') ]);

            return back()->with('successAnimalPayment', 'Insertado correctamente');
        } catch (Exception $e) {
            return back()->withErrors([
                'message' => $e
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
