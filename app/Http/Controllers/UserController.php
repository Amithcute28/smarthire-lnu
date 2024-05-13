<?php

namespace App\Http\Controllers;
use Inertia\Response;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\NewUserRequest;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->new_user == 0) {
            return Inertia::render('NewUser', [
                'users' => UserResource::collection(User::where('id', '=', auth()->user()->id)->get()),
            ]);
        }
        return Inertia::render('Dashboard');
    }


    public function newUserUpdate(NewUserRequest $request): RedirectResponse
{
    try {
        $user = Auth::user();

        $user->update([
            'name' => $request->name,
            'new_user' => 1,
        ]);

        return redirect()->route('dashboard');
    } catch (\Exception $e) {
        // Log the error
        Log::error('Error updating user: ' . $e->getMessage());
        // Return an error response or redirect to a specific page
        return back()->withError('An error occurred while updating the user.');
    }
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
        //
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
