@extends('layouts.template')

@section('title', 'Kontak Kami')

@section('content')
<body class="bg-gray-100">
    <div class="p-8"> <!-- Tambahkan padding pada seluruh konten utama -->
        <div class="flex flex-row justify-between items-start space-x-8"> <!-- Gunakan Tailwind untuk tata letak -->
            <div class="w-1/2"> <!-- Alokasikan setengah ruang untuk peta -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127649.77334841427!2d103.9879258595236!3d1.1204763915052334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989031788ed4d%3A0x8a2c987a6dd8a5!2sBatam%20Centre%20Mall!5e0!3m2!1sid!2sid!4v1695353378656!5m2!1sid!2sid"
                    class="w-full h-96 border-0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div class="w-1/2"> <!-- Alokasikan setengah ruang untuk detail -->
                <section id="contact-info" class="mb-4"> <!-- Gunakan margin-bottom untuk jarak antar-seksi -->
                    <h1 class="text-3xl font-bold">Hubungi Kami</h1> <!-- Kelas Tailwind untuk ukuran dan gaya -->
                    <h2 class="text-xl text-gray-700">#ComeSeeUs</h2>
                    <p class="mt-2 text-gray-600">Kunjungi Kami untuk informasi lebih lanjut atau saran teknis.</p>
                </section>
                
                <section id="contact-details" class="bg-gray-100 p-4 rounded"> <!-- Latar belakang dan border radius -->
                    <div class="details">
                        <h2 class="text-2xl font-semibold">Informasi Kontak</h2>
                        <h3 class="text-lg font-medium">Kunjungi Tempat Kami</h3>
                        <ul class="mt-2 space-y-2"> <!-- Spasi antar item dalam daftar -->
                            <li class="flex items-center"> <!-- Tambahkan ikon di sebelah kiri -->
                                <i class="bx bxs-id-card text-xl mr-2"></i>
                                <p>Apple Store</p>
                            </li>
                            <li class="flex items-center">
                                <i class="bx bxs-envelope text-xl mr-2"></i>
                                <p>ApStore@gmail.boss.co</p>
                            </li>
                            <li class="flex items-center">
                                <i class="bx bxs-phone text-xl mr-2"></i>
                                <p>+62812367819 - Call Centre</p>
                            </li>
                            <li class="flex items-center">
                                <i class="bx bxs-time-five text-xl mr-2"></i>
                                <p>09:30 PM - 17:00 AM</p>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="pb-8"> <!-- Menambahkan padding di bagian bawah -->
    </div>
</body>
@endsection
