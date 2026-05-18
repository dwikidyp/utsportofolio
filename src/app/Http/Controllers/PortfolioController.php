<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    /**
     * Home page
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Projects page
     */
    public function projects()
    {
        $projects = [
            [
                'id'       => 1,
                'title'    => 'Sistem Desain Elevate',
                'category' => 'uiux',
                'tags'     => ['UI/UX', '2024'],
                'desc'     => 'Membangun fondasi visual yang konsisten untuk platform SaaS skala global dengan fokus pada aksesibilitas.',
            ],
            [
                'id'       => 2,
                'title'    => 'Identitas Visual Aurora',
                'category' => 'branding',
                'tags'     => ['BRANDING', '2023'],
                'desc'     => 'Rebranding untuk agensi kreatif yang mengedepankan kesederhanaan dan ketajaman visi di pasar modern.',
            ],
            [
                'id'       => 3,
                'title'    => 'Dashboard Analitik Flux',
                'category' => 'webdev',
                'tags'     => ['WEB DEV', '2024'],
                'desc'     => 'Interface aplikasi web yang kompleks namun intuitif, dirancang untuk mengelola data real-time dalam jumlah besar.',
            ],
            [
                'id'       => 4,
                'title'    => 'Aplikasi Gaya Hidup Zen',
                'category' => 'uiux',
                'tags'     => ['UI/UX', '2023'],
                'desc'     => 'Pengalaman mobile yang tenang dan terfokus, menghilangkan distraksi visual untuk meningkatkan kesejahteraan pengguna.',
            ],
        ];

        return view('pages.projects', compact('projects'));
    }

    /**
     * Projects page
     */
    public function progress()
    {
        $progress = [
            [
                'id'       => 1,
                'title'    => 'Sistem Desain Elevate',
                'category' => 'uiux',
                'tags'     => ['UI/UX', '2024'],
                'desc'     => 'Membangun fondasi visual yang konsisten untuk platform SaaS skala global dengan fokus pada aksesibilitas.',
            ],
            [
                'id'       => 2,
                'title'    => 'Identitas Visual Aurora',
                'category' => 'branding',
                'tags'     => ['BRANDING', '2023'],
                'desc'     => 'Rebranding untuk agensi kreatif yang mengedepankan kesederhanaan dan ketajaman visi di pasar modern.',
            ],
            [
                'id'       => 3,
                'title'    => 'Dashboard Analitik Flux',
                'category' => 'webdev',
                'tags'     => ['WEB DEV', '2024'],
                'desc'     => 'Interface aplikasi web yang kompleks namun intuitif, dirancang untuk mengelola data real-time dalam jumlah besar.',
            ],
            [
                'id'       => 4,
                'title'    => 'Aplikasi Gaya Hidup Zen',
                'category' => 'uiux',
                'tags'     => ['UI/UX', '2023'],
                'desc'     => 'Pengalaman mobile yang tenang dan terfokus, menghilangkan distraksi visual untuk meningkatkan kesejahteraan pengguna.',
            ],
        ];

        return view('pages.progress', compact('progress'));
    }

    /**
     * Contact page
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission
     */
    public function send(Request $request)
    {
        $validated = $request->validate([
            'nama'   => 'required|string|min:2|max:100',
            'email'  => 'required|email|max:100',
            'subjek' => 'required|string|min:3|max:200',
            'pesan'  => 'required|string|min:10|max:2000',
        ], [
            'nama.required'   => 'Nama lengkap wajib diisi.',
            'email.required'  => 'Alamat email wajib diisi.',
            'email.email'     => 'Format email tidak valid.',
            'subjek.required' => 'Subjek wajib diisi.',
            'pesan.required'  => 'Pesan wajib diisi.',
            'pesan.min'       => 'Pesan minimal 10 karakter.',
        ]);

        // Simpan pesan ke database
        Message::create([
            'nama'   => $validated['nama'],
            'email'  => $validated['email'],
            'subjek' => $validated['subjek'],
            'pesan'  => $validated['pesan'],
            'status' => 'unread',
        ]);

        return redirect()
            ->route('contact')
            ->with('success', 'Pesan Anda telah berhasil dikirim. Saya akan merespons dalam 24 jam kerja!');
    }
}