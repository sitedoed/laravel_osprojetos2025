<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Salvar no banco
        Contact::create($validated);

        // Enviar email (opcional)
        // Mail::to('dev@osprojetos.com.br')->send(new ContactFormMail($validated));

        return redirect()->back()->with('success', 'Obrigado pelo contato! Retornaremos em breve.');
    }
}