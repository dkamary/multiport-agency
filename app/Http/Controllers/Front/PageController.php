<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\ContactSubmission;
use App\Jobs\SendContactEmailJob;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmissionMail;

class PageController extends Controller
{
    /**
     * Show the email test form.
     */
    public function testEmailForm(): View
    {
        return view('pages.test-email');
    }

    /**
     * Send a real-time test email and return errors if any.
     */
    public function sendTestEmail(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $recipient = $request->input('email');

        // Création d'une fausse soumission pour le test
        $submission = new ContactSubmission([
            'name' => 'Diagnostic Test',
            'email' => config('mail.from.address'),
            'subject' => 'SMTP Configuration Diagnostic',
            'message' => 'This is a real-time test message to verify your SMTP settings.'
        ]);

        try {
            // Envoi DIRECT sans passer par les Jobs
            Mail::to($recipient)->send(new ContactSubmissionMail($submission));

            return back()->with('success', "Test email sent successfully to $recipient!");
        } catch (\Exception $e) {
            // On capture l'erreur précise pour le debug
            return back()->with('error', "Mail sending failed. Error: " . $e->getMessage())
                         ->withInput();
        }
    }
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function services(): View
    {
        return view('pages.services');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Get the contact form partial.
     */
    public function getContactForm(): View
    {
        return view('pages.partials.contact-form');
    }

    /**
     * Handle contact form submission.
     */
    public function submitContact(Request $request)
    {
        // 1. Honeypot check: si "website" est rempli, c'est un robot
        if ($request->filled('website')) {
            if ($request->ajax()) {
                return response()->json(['message' => 'Bot detected.'], 422);
            }
            return back()->with('error', 'Bot detected.');
        }

        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
                'consent' => 'accepted',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->ajax()) {
                return response()->json([
                    'message' => 'The given data was invalid.',
                    'errors' => $e->errors(),
                ], 422);
            }
            throw $e;
        }

        // 2. Spam filter: détection de mots-clés indésirables
        $spamKeywords = [
            'casino', 'porn', 'sex', 'viagra', 'buy cheap', 'crypto', 'investment', 
            'pussy', 'dating', 'adult', 'click here', 'get rich', 'marketing agency', 
            'seo service', 'http://', 'https://', 'www.' // Souvent le spam contient des liens
        ];

        foreach ($spamKeywords as $keyword) {
            if (stripos($validated['message'], $keyword) !== false) {
                if ($request->ajax()) {
                    return response()->json(['message' => 'Your message has been identified as potential spam.'], 422);
                }
                return back()->with('error', 'Your message has been identified as potential spam. Please refine your message.');
            }
        }

        $submission = ContactSubmission::create($validated);

        SendContactEmailJob::dispatch($submission);

        if ($request->ajax()) {
            return response()->json(['message' => 'Your message has been sent successfully!']);
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function faq(): View
    {
        return view('pages.faq');
    }
}
