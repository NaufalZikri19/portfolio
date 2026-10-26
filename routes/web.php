<?php

use Illuminate\Support\Facades\Route;

$projectsData = [
    'gumbreg' => [
        'title' => 'GumbregQuickBook',
        'subtitle' => 'Sistem Reservasi Lapangan Tenis',
        'category' => 'Aplikasi Web',
        'image' => 'images/gumbreg.png',
        'overview' => 'GumbregQuickBook adalah aplikasi web khusus yang dirancang untuk mempermudah alur pemesanan dan pengelolaan jadwal lapangan tenis secara end-to-end. Platform ini dilengkapi asisten cerdas berbasis Google Gemini AI Chatbot untuk menjawab pertanyaan pengunjung, meniadakan risiko jadwal bentrok (double-booking), serta memberikan alur reservasi yang instan.',
        'challenge' => 'Klub olahraga lokal sebelumnya mengelola pemesanan lapangan secara manual melalui pesan instan dan buku catatan fisik. Hal ini sering menimbulkan konflik jadwal ganda, keterlambatan konfirmasi, serta tingginya beban admin dalam melayani pertanyaan umum berulang kali.',
        'solution' => 'Saya merancang sistem web dari tahap arsitektur hingga deployment, mencakup pengembangan fitur berbasis Laravel & MySQL, kalender reservasi real-time, manajemen akses (RBAC), serta integrasi Google Gemini AI Chatbot untuk layanan tanya-jawab otomatis dan interaktif.',
        'impact' => 'Menghilangkan konflik jadwal hingga 0%, memangkas beban tanya-jawab admin hingga 60% berkat Google Gemini AI Chatbot, dan mendongkrak efisiensi reservasi secara menyeluruh.',
        'tech' => ['Laravel', 'MySQL', 'Google Gemini AI', 'Tailwind CSS', 'JavaScript']
    ],
    'sirimby' => [
        'title' => 'Sirimby - Fresh Milk',
        'subtitle' => 'Implementasi Odoo ERP',
        'category' => 'Sistem ERP',
        'image' => 'images/sirimby.png',
        'overview' => 'Implementasi Odoo ERP terpadu untuk Sirimby, usaha peternakan dan pengolahan susu sapi murni asal Desa Glempang. Sistem ini mendigitalisasi seluruh rantai operasional mereka, mulai dari pencatatan produksi susu harian, stok bahan baku, hingga manajemen penjualan dan inventaris.',
        'challenge' => 'Sebelumnya, Sirimby mengelola pencatatan produksi harian, stok gudang, dan penjualan secara terpisah menggunakan buku manual dan spreadsheet. Hal ini mengakibatkan ketidaksesuaian stok, keterlambatan rekapitulasi data keuangan, serta inefisiensi seiring meningkatnya skala distribusi.',
        'solution' => 'Saya mengonfigurasi dan mengkustomisasi modul Odoo ERP yang disesuaikan dengan alur bisnis Sirimby. Meliputi modul pelacakan batch produksi harian, penilaian inventaris otomatis, serta integrasi Point of Sale (POS) untuk melayani transaksi langsung ke pelanggan.',
        'impact' => 'Menyederhanakan operasional harian dan memangkas pekerjaan rekapitulasi manual hingga 40%. Manajemen kini memiliki visibilitas stok secara real-time dan akurasi pemenuhan pesanan meningkat hingga 95%.',
        'tech' => ['Odoo', 'PostgreSQL', 'Python', 'JavaScript', 'HTML', 'CSS']
    ],
];

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/project/{slug}', function ($slug) use ($projectsData) {
    if (!array_key_exists($slug, $projectsData)) {
        abort(404);
    }
    return view('portfolio.case-study', ['project' => $projectsData[$slug]]);
});
