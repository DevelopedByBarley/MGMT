<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request): RedirectResponse
    {
        Contact::create($request->validated());

        return redirect()->route('home')->with('success', 'Köszönöm az üzeneted! Hamarosan felveszem veled a kapcsolatot.');
    }
}
