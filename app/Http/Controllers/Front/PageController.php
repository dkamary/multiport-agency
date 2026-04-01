<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\ContactSubmission;
use App\Jobs\SendContactEmailJob;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
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
     * Handle contact form submission.
     */
    public function submitContact(Request $request): RedirectResponse
    {
        // 1. Honeypot check: si "website" est rempli, c'est un robot
        if ($request->filled('website')) {
            return back()->with('error', 'Bot detected.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'consent' => 'accepted',
        ]);

        // 2. Spam filter: détection de mots-clés indésirables
        $spamKeywords = [
            'casino', 'porn', 'sex', 'viagra', 'buy cheap', 'crypto', 'investment', 
            'pussy', 'dating', 'adult', 'click here', 'get rich', 'marketing agency', 
            'seo service', 'http://', 'https://', 'www.' // Souvent le spam contient des liens
        ];

        foreach ($spamKeywords as $keyword) {
            if (stripos($validated['message'], $keyword) !== false) {
                return back()->with('error', 'Your message has been identified as potential spam. Please refine your message.');
            }
        }

        $submission = ContactSubmission::create($validated);

        SendContactEmailJob::dispatch($submission);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function faq(): View
    {
        return view('pages.faq');
    }
}
