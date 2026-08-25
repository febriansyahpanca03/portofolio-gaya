<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Gayatri Dewi',
            'role' => 'Master of Ceremony, Presenter & Content Creator',
            'tagline' => 'Membawakan acara dan konten dengan cara bertutur yang jelas, hangat, dan percaya diri — di panggung, di depan kamera, maupun di layar.',
            'about' => 'Lulusan Ilmu Komunikasi peminatan Broadcasting dari Universitas Bina Sarana Informatika (IPK 3.75/4.00) dengan pengalaman langsung tampil di depan publik maupun kamera, mulai dari Master of Ceremony, presenter, reporter, hingga talent produksi film pendek. Selama magang sebagai Social Media Specialist di Mendadak Space, saya terlibat dalam perencanaan dan produksi konten untuk klien agensi. Saat ini aktif sebagai MC lepas untuk acara kesenian dan keagamaan, sambil terus memperdalam kemampuan public speaking dan produksi konten.',
            'phone' => '0896-9981-8981',
            'phone_link' => '6289699818981',
            'email' => 'gayadewitri04@gmail.com',
            'location' => 'Jatiasih, Kota Bekasi',
            'linkedin' => 'https://www.linkedin.com/in/gayatri-dewi-4032b3382',
            'portfolio_link' => 'https://drive.google.com/file/d/1eL6yYK3GqWHbl1897Th3XNgcEz9dnBh_/view?usp=sharing',
        ];

        $education = [
            'school' => 'Universitas Bina Sarana Informatika',
            'address' => 'Kec. Duren Sawit, Kota Jakarta Timur, DKI Jakarta',
            'period' => 'Sep 2021 — Nov 2025 (Expected)',
            'degree' => 'Sarjana Ilmu Komunikasi, Peminatan Broadcasting',
            'gpa' => 'IPK 3.75 / 4.00',
            'highlights' => [
                'Magang Social Media Specialist di Mendadak Space (Semester 7)',
                'Presenter pada simulasi Berita Televisi (Semester 5)',
                'Penulis Naskah, Voice Over & Talent, Dokumenter "Bali di Tengah Beton" (Semester 5)',
                'Host, Program Talkshow "Ngobrol Seru" (Semester 4)',
                'Asisten Sutradara, Film Pendek "Duniawi" — Broadcasting Award (Semester 4)',
                'Penulis Naskah & Sutradara, Film Pendek "Kehilangan" (Semester 3)',
            ],
        ];

        $skills = [
            'hard' => [
                'Master of Ceremony', 'Public Speaking', 'Presenter Siaran TV',
                'Penulisan Naskah', 'Voice Over', 'CapCut',
                'Microsoft Office & PowerPoint', 'Sistem POS/Kasir', 'English (Basic)',
            ],
            'soft' => [
                'Komunikasi', 'Adaptasi Cepat', 'Kerja Sama Tim', 'Kreativitas', 'Sikap Profesional',
            ],
        ];

        $certifications = [
            ['title' => 'Sertifikat Asisten Produser — BNSP', 'year' => '2025', 'desc' => 'Project Desain Produksi Televisi, peran Asisten Produser.'],
            ['title' => 'Sertifikat Penulis Naskah Televisi — BNSP', 'year' => '2024', 'desc' => 'Project penyusunan naskah televisi.'],
        ];

        $experiences = [
            [
                'title' => 'Freelance Content Creator',
                'place' => 'Mendadak Space',
                'period' => 'Jan 2025 — Mar 2025',
                'description' => 'Membuat konten media sosial untuk klien agensi digital, mulai dari ide konten, pengambilan gambar, hingga editing.',
            ],
            [
                'title' => 'Social Media Specialist (Magang)',
                'place' => 'Mendadak Space',
                'period' => 'Sep 2024 — Jan 2025',
                'description' => 'Merencanakan dan mengeksekusi konten media sosial untuk klien selama program magang. Menerima sertifikat magang Social Media Specialist.',
            ],
            [
                'title' => 'Freelance Talent',
                'place' => 'Mendadak Space',
                'period' => 'Sep 2023 — Mar 2025',
                'description' => 'Berperan sebagai talent dalam berbagai produksi konten dan kampanye digital untuk klien agensi.',
            ],
            [
                'title' => 'Freelance User & Register',
                'place' => 'PT Digioh — Hybrid Event Organizer',
                'period' => 'Jul 2024 — Sekarang',
                'description' => 'Menangani registrasi dan user handling pada penyelenggaraan event korporat, baik offline maupun hybrid.',
            ],
            [
                'title' => 'Freelance Master of Ceremony',
                'place' => 'Sanggar Tari Dwipayana Nusantara',
                'period' => 'Jan 2024 — Sekarang',
                'description' => 'Memandu jalannya acara kesenian dan keagamaan sebagai MC lepas.',
            ],
        ];

        $otherExperiences = [
            ['title' => 'Barista / Content Creator', 'place' => 'Oryca Coffee', 'period' => 'Mei 2023 — Mei 2024'],
            ['title' => 'Barista / Social Media Specialist / Rekrutmen', 'place' => 'Neste Coffee', 'period' => 'Mar 2022 — Mar 2023'],
            ['title' => 'Barista / Content Creator', 'place' => 'Kopi Kulo', 'period' => 'Sep 2021 — Feb 2022'],
        ];

        $organizations = [
            [
                'title' => 'Master of Ceremony / Dokumentasi',
                'place' => 'Banjar Hitakarma Pondok Gede',
                'period' => 'Sep 2023 — Sekarang',
                'description' => 'Menjadi MC pada berbagai kegiatan kesenian dan keagamaan, serta mendokumentasikan jalannya acara.',
            ],
            [
                'title' => 'Ketua',
                'place' => 'Hokori Japanese Club — SMA Tulus Bhakti',
                'period' => 'Mar 2019 — Mar 2020',
                'description' => 'Memimpin kegiatan klub bahasa dan budaya Jepang di tingkat sekolah.',
            ],
        ];

        $projects = [
            [
                'title' => 'Film Pendek "The Deadly Sins"',
                'description' => 'Berperan sebagai talent (karakter Vadia) dalam produksi film pendek Luminera.',
                'tags' => ['Talent', 'Luminera', 'Mei 2025'],
                'link' => '#',
            ],
            [
                'title' => 'Film Pendek "Imagi"',
                'description' => 'Berperan sebagai talent (karakter Arrabela) dalam produksi film pendek Imagi.',
                'tags' => ['Talent', 'Imagi', 'Nov 2024'],
                'link' => '#',
            ],
            [
                'title' => 'Film "Saudari Komang 1"',
                'description' => 'Berperan sebagai talent (karakter Komang) dalam produksi film Starvision.',
                'tags' => ['Talent', 'Starvision', 'Nov 2024'],
                'link' => '#',
            ],
            [
                'title' => 'Dokumenter "Bali di Tengah Beton"',
                'description' => 'Menulis naskah, mengisi voice over, dan berperan sebagai talent dalam tugas produksi dokumenter akhir semester.',
                'tags' => ['Penulis Naskah', 'Voice Over', 'Talent'],
                'link' => '#',
            ],
            [
                'title' => 'Film Pendek "Kehilangan"',
                'description' => 'Menulis naskah dan menyutradarai film pendek untuk kompetisi antar kampus Universitas Bina Sarana Informatika.',
                'tags' => ['Penulis Naskah', 'Sutradara'],
                'link' => '#',
            ],
        ];

        return view('portfolio.index', compact(
            'profile', 'education', 'skills', 'certifications',
            'experiences', 'otherExperiences', 'organizations', 'projects'
        ));
    }
}
