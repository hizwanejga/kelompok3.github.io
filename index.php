<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurnalisme Modern</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Memastikan scroll smooth dan snapping antar slide seperti aplikasi presentasi */
        html {
            scroll-behavior: smooth;
            scroll-snap-type: y mandatory;
        }
        section {
            scroll-snap-align: start;
            height: 100vh;
        }
    </style>
</head>
<body class="bg-slate-900 text-white font-sans overflow-x-hidden">

    <div class="fixed right-5 top-1/2 transform -translate-y-1/2 z-50 flex flex-col gap-3">
        <a href="#slide1" class="w-3 h-3 rounded-full bg-blue-500 hover:scale-125 transition-all"></a>
        <a href="#slide2" class="w-3 h-3 rounded-full bg-emerald-500 hover:scale-125 transition-all"></a>
        <a href="#slide3" class="w-3 h-3 rounded-full bg-amber-500 hover:scale-125 transition-all"></a>
        <a href="#slide4" class="w-3 h-3 rounded-full bg-purple-500 hover:scale-125 transition-all"></a>
        <a href="#slide5" class="w-3 h-3 rounded-full bg-rose-500 hover:scale-125 transition-all"></a>
    </div>

    <?php
    // Data Konten menggunakan Array PHP agar manajemen teks lebih rapi dan dinamis
    $kelebihan_mojo = [
        "Lebih Ekonomis Dibanding Jurnalisme Tradisional",
        "Mudah Dilakukan",
        "Portabel",
        "Jumlah Pemilik Smartphone yang Tinggi"
    ];

    $multimedia_mindset = ["Video", "Audio", "Teks", "Grafis"];

    $tantangan_teknologi = ["Disrupsi Model Bisnis", "Keamanan Siber & Peretasan", "Kesenjangan Digital (Digital Divide)", "Algoritma 'Echo Chamber'"];
    $etika_digital = ["Akurasi vs Kecepatan", "Transparansi Penggunaan AI", "Deepfake & Manipulasi Visual", "Privasi & Data Besar (Big Data)"];

    $peran_ai = [
        "Penulisan berita otomatis (robot journalism)",
        "Analisis data besar (big data)",
        "Personalisasi konten sesuai minat audiens",
        "Editing video & teks secara otomatis",
        "Verifikasi fakta (deteksi hoaks)",
        "Distribusi berita lebih tepat saran"
    ];

    $newsroom_modern = [
        "Digunakan dalam newsroom modern",
        "Automasi berita sederhana (cuaca, olahraga)",
        "Kolaborasi AI dan jurnalis",
        "Meningkatkan efisiensi kerja",
        "Mendukung pengambilan keputusan berbasis data"
    ];
    ?>

    <section id="slide1" class="flex flex-col justify-center items-center px-8 md:px-24 bg-gradient-to-br from-slate-900 to-blue-950">
        <div class="max-w-4xl text-center">
            <div class="text-blue-400 font-bold tracking-wide uppercase text-sm mb-4">
    <span class="block text-base font-extrabold mb-1 text-teal-400">Kelompok 3:</span>
    <ul class="flex flex-wrap justify-center gap-x-4 gap-y-1 text-xs md:text-sm opacity-80 normal-case">
        <li>• Hizwan Ramadhan (06520230175)</li>
        <li>• Muh. Ramdani Fajar Rahman (06520220192)</li>
        <li>• Ade Nilwanda (06520230122)</li>
        <li>• Andi Maharatih AR (06520230129)</li>
        <li>• Nasywa Fadyah Zainal (06520230121)</li>
        <li>• Nur Aziza (06520230166)</li>
        <li>• Nursyariah Ilman (06520230118)</li>
        <li>• Nurul Azizah Wismi (06520230161)</li>
    </ul>
</div>
            <h1 class="text-4xl md:text-6xl font-extrabold mt-2 mb-6 bg-gradient-to-r from-blue-400 to-teal-400 bg-clip-text text-transparent">
                Mobile Journalism (Mojo)
            </h1>
            <p class="text-lg text-slate-300 leading-relaxed mb-8">
                Konsep dalam dunia jurnalisme yang mengandalkan penggunaan perangkat mobile, khususnya smartphone, dalam proses peliputan dan distribusi berita. Menjadikannya pilihan yang sangat menarik dalam dunia jurnalisme modern.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <?php foreach ($kelebihan_mojo as $index => $item): ?>
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-blue-500/20 shadow-lg">
                        <span class="text-blue-400 font-bold text-xl block mb-2">0<?= $index+1 ?></span>
                        <p class="text-sm font-medium"><?= $item ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="slide2" class="flex flex-col justify-center items-center px-8 md:px-24 bg-gradient-to-br from-slate-900 to-emerald-950">
        <div class="max-w-4xl text-center w-full">
            <h2 class="text-4xl md:text-5xl font-extrabold mt-2 mb-12 bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-transparent">
                Multimedia Mindset
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <?php foreach ($multimedia_mindset as $item): ?>
                    <div class="bg-emerald-950/40 p-8 rounded-2xl border-2 border-emerald-500/30 hover:border-emerald-400 transition-all transform hover:-translate-y-2 group">
                        <div class="w-12 h-12 bg-emerald-500/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-emerald-500 transition-all">
                            <span class="text-emerald-300 group-hover:text-slate-900 font-bold">✓</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-200"><?= $item ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="slide3" class="flex flex-col justify-center items-center px-8 md:px-24 bg-gradient-to-br from-slate-900 to-amber-950">
        <div class="max-w-5xl w-full">
            <div class="text-center mb-10">
                <h2 class="text-4xl md:text-5xl font-extrabold mt-2 bg-gradient-to-r from-amber-400 to-orange-400 bg-clip-text text-transparent">
                    Tantangan & Etika Produksi Berita
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-slate-800/40 p-6 rounded-2xl border border-amber-500/20">
                    <h3 class="text-2xl font-bold text-amber-400 mb-4 border-b border-amber-500/20 pb-2">Tantangan Teknologi</h3>
                    <ul class="space-y-3">
                        <?php foreach ($tantangan_teknologi as $item): ?>
                            <li class="flex items-start gap-2 text-slate-300">
                                <span class="text-amber-400 mt-1">⚠️</span> <span><?= $item ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="bg-slate-800/40 p-6 rounded-2xl border border-orange-500/20">
                    <h3 class="text-2xl font-bold text-orange-400 mb-4 border-b border-orange-500/20 pb-2">Etika Berita Digital</h3>
                    <ul class="space-y-3">
                        <?php foreach ($etika_digital as $item): ?>
                            <li class="flex items-start gap-2 text-slate-300">
                                <span class="text-orange-400 mt-1">⚖️</span> <span><?= $item ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="slide4" class="flex flex-col justify-center items-center px-8 md:px-24 bg-gradient-to-br from-slate-900 to-purple-950">
        <div class="max-w-4xl w-full">
            <div class="text-center mb-10">
                <h2 class="text-4xl md:text-5xl font-extrabold mt-2 bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                    Peran Artificial Intelligence (AI)
                </h2>
                <p class="text-slate-400 mt-2">AI berperan penting dalam dunia jurnalistik modern, antara lain:</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php foreach ($peran_ai as $item): ?>
                    <div class="flex items-center gap-4 bg-purple-950/30 p-4 rounded-xl border border-purple-500/20">
                        <div class="w-8 h-8 bg-purple-500/20 rounded-lg flex items-center justify-center text-purple-300 font-bold">🤖</div>
                        <p class="text-slate-200 font-medium text-sm md:text-base"><?= $item ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="slide5" class="flex flex-col justify-center items-center px-8 md:px-24 bg-gradient-to-br from-slate-900 to-rose-950">
        <div class="max-w-3xl w-full text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold mt-2 mb-10 bg-gradient-to-r from-rose-400 to-red-400 bg-clip-text text-transparent">
                Implementasi Jurnalisme Masa Depan
            </h2>
            <div class="bg-slate-800/60 rounded-2xl border border-rose-500/20 p-8 text-left space-y-4 shadow-2xl">
                <?php foreach ($newsroom_modern as $index => $item): ?>
                    <div class="flex items-center gap-4 border-b border-slate-700/50 pb-3 last:border-0 last:pb-0">
                        <span class="w-8 h-8 bg-rose-500/20 text-rose-400 font-bold flex items-center justify-center rounded-full text-sm">
                            <?= $index + 1 ?>
                        </span>
                        <p class="text-slate-200 font-medium text-base md:text-lg"><?= $item ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</body>
</html>