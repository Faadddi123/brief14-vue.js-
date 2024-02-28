<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\MyNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Inertia\Inertia;

class RestaurantController extends Controller
{

    public function showCreateForm()
    {
        $user = Auth::user();
        $invoice = [
            'amount' => 100, // Example data
            'description' => 'Purchase invoice', // Example data
        ];
        
        // Check if the user is authenticated before triggering the notification
        if ($user) {
            $user->notify(new MyNotification());
 // Replace MyNotification with the actual name of your notification class
        }
        return Inertia::render('Restaurants/make');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'openingHours' => 'required|string',
            'closingHours' => 'required|string',
        ]);

        // Process the form data
        // You can perform any necessary operations here, such as saving to the database

        // Redirect back to the create form with a success message
        return redirect()->back()->with('success', 'Restaurant created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
