<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function page($slug)
    {
        switch ($slug) {
            case 'mata-kuliah':
                $data['title'] = 'Mata Kuliah';
                $data['content'] = '<p class="mb-4">Mata kuliah Praktikum CMS (Content Management System) merupakan mata kuliah yang mempelajari tentang pengelolaan dan pengembangan website menggunakan sistem manajemen konten. Dalam perkuliahan ini, mahasiswa diperkenalkan pada konsep dasar CMS, fungsi, serta manfaatnya dalam mempermudah proses pembuatan website tanpa harus membangun sistem secara keseluruhan dari awal. Melalui pendekatan praktikum, mahasiswa dapat memahami alur kerja pengelolaan website secara langsung dan lebih aplikatif.</p>
                                    <p class="mb-4">Pada mata kuliah ini, mahasiswa mempelajari berbagai tahapan dalam penggunaan CMS, mulai dari proses instalasi, konfigurasi server, pengaturan tema, manajemen pengguna, hingga pengelolaan konten website. Selain itu, mahasiswa juga dikenalkan dengan penggunaan plugin atau extension untuk menambahkan fitur tertentu sesuai kebutuhan website. Kegiatan praktikum dilakukan secara bertahap agar mahasiswa mampu memahami penerapan CMS dalam pengembangan website modern, baik untuk kebutuhan pribadi, bisnis, maupun organisasi.</p>
                                    <p class="mb-4">Melalui mata kuliah Praktikum CMS, mahasiswa diharapkan mampu memiliki keterampilan teknis dalam membangun dan mengelola website secara mandiri. Mata kuliah ini juga bertujuan untuk meningkatkan kreativitas dan kemampuan problem solving mahasiswa dalam menghadapi kebutuhan pengembangan media digital yang terus berkembang. Dengan penguasaan CMS, mahasiswa diharapkan dapat menerapkan ilmunya dalam dunia kerja, khususnya pada bidang pengembangan web, manajemen konten digital, dan teknologi informasi.</p>';
                $data['image'] = 'hero.jpg';
                break;
            case 'dosen':
                $data['title'] = 'Dosen';
                $data['content'] = '<h2 class="mb-4 font-bold uppercase">Anief Fauzan Rozi, S.Kom., M.Eng., MCE.</h2>
                                    <p class="mb-4">Saat ini menjadi dosen, pelaku tridharma perguruan tinggi di Program Studi Sistem Informasi, Fakultas Teknologi Informasi, Universitas Mercu Buana Yogyakarta.</p>
                                    <p class="mb-4">Selain itu juga terlibat sebagai tenaga ahli / praktisi di beberapa Perusahaan Software House salah satunya adalah Maliya Syahid Consultant.</p>
                                    <p class="mb-4">Sebagai dosen dan praktisi, saat ini terlibat di dalam riset-riset dan proyek yang berkaitan dengan artificial intelligence khususnya bidang decision support system.</p>
                                    <p class="mb-4">Bidang keahlian yang ditekuni adalah manajemen proyek sistem informasi dan decision support system.</p>';
                $data['image'] = 'dosen.png';
                break;
            case 'asisten-dosen':
                $data['title'] = 'Asisten Dosen';
                $data['content'] = '<h2 class="mb-4 font-bold uppercase">Ignatius Betanto Budi Puttanto, S.Kom., MCF</h2>
                                    <p class="mb-4">Betanto Puttanto merupakan asisten dosen pada mata kuliah Praktikum CMS di Program Studi Sistem Informasi, Fakultas Teknologi Informasi, Universitas Mercu Buana Yogyakarta. Aktif dalam mendampingi kegiatan praktikum, membantu mahasiswa memahami implementasi Content Management System, serta memberikan arahan terkait pengembangan website dan sistem informasi berbasis web.</p>
                                    <p class="mb-4">Selain aktif di lingkungan akademik, juga memiliki pengalaman dalam bidang pengembangan web, manajemen teknologi informasi, serta pengelolaan proyek digital. Memiliki kemampuan dalam pengembangan website modern menggunakan berbagai teknologi seperti Laravel, Tailwind CSS, JavaScript, LeafletJS, dan implementasi sistem berbasis GIS maupun dashboard interaktif. Selain itu, juga memiliki pengalaman profesional di bidang manajemen teknis dan pengendalian proyek teknologi informasi.</p>
                                    <p class="mb-4">Bidang yang ditekuni meliputi web development, manajemen sistem informasi, project controlling, serta pengembangan solusi digital berbasis teknologi modern. Memiliki ketertarikan pada pengembangan media digital, user interface website, serta implementasi teknologi informasi yang mendukung kebutuhan organisasi dan transformasi digital.</p>';
                $data['image'] = 'asdos.png';
                break;
            default:
                $data['title'] = 'Halaman Tidak Ditemukan';
                $data['content'] = '<p class="mb-4">Halaman yang Anda cari tidak ditemukan.</p>';
                $data['image'] = 'default-hero.jpg';
                break;
        }
        return view('page', compact('data'));
    }
    public function category($slug)
    {
        switch ($slug) {
            case 'materi':
                $data['title'] = 'Materi';

                for ($i = 1; $i <= 18; $i++) {
                    $data['child']['title'][] = 'Materi Praktikum CMS ' . $i;
                    $data['child']['image'][] = 'book.png';
                    $data['child']['content'][] = 'Pembahasan materi praktikum CMS ke-' . $i . ' mengenai pengelolaan website, konfigurasi sistem, dan pengembangan fitur berbasis Content Management System.';
                }

                break;

            case 'pengumuman':
                $data['title'] = 'Pengumuman';

                for ($i = 1; $i <= 6; $i++) {
                    $data['child']['title'][] = 'Pengumuman Praktikum CMS ' . $i;
                    $data['child']['image'][] = 'announcement.png';
                    $data['child']['content'][] = 'Informasi pengumuman praktikum CMS ke-' . $i . ' mengenai jadwal, materi, dan informasi penting lainnya.';
                }
                break;

            default:
                $data['title'] = 'Kategori Tidak Ditemukan';
                break;
        }
        return view('category', compact('data'));
    }
    public function article($slug)
    {
        $data['title'] = 'Materi Praktikum CMS';
        $data['content'] = '<p>Isi materi Praktikum CMS</p>';
        $data['image'] = 'book.png';
        return view('article', compact('data'));
    }
}
