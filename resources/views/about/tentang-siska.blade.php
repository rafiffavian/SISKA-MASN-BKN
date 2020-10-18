@extends('layouts.master')

@section('content')

<br>
<section class="section">
    <div class="container">
                   
                    <h2>Tentang Siska</h2>
                    <hr style="border: 2px solid black">
                    <ul class="list-group">
                        <p style="font-weight: bold">SISKA MASN (Sistem Kajian Manajemen ASN)</p>
                        
                        <p>
                            Merupakan sistem yang digunakan untuk mengelola hasil kajian yang bersumber dari ASN di Instansi Pemerintah Pusat maupun Instansi Daerah berupa karya ilmiah, karya ilmiah populer, karya non ilmiah,  informasi berupa infografis, foto, video dan karya lain terkait Manajemen ASN.  
                        </p>

                        <p style="font-weight: bold">Tujuan</p>
                        <p>1.&nbsp;&nbsp;&nbsp;Memberikan kesempatan bagi ASN untuk menyampaikan hasil karyanya berupa karya ilmiah, karya ilmiah populer, karya non ilmiah,  informasi berupa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;infografis, foto, video dan karya lain terkait Manajemen ASN </p>
                        <p>2.&nbsp;&nbsp;&nbsp;Tersedianya wadah bagi ASN untuk menyampaikan hasil karyanya terkait Manajemen ASN </p>
                        <p>3.&nbsp;&nbsp;&nbsp;Menyediakan informasi hasil kajian sehingga dapat digunakan sebagai alternatif-alternatif tindakan untuk pengambilan keputusan bidang Manajemen &nbsp;&nbsp;&nbsp;&nbsp; ASN, serta m meningkatkan kualitas kebijakan publik di bidang manajemen ASN, </p>
                        <p>4.&nbsp;&nbsp;&nbsp;Terlaksananya pengelolaan kajian, secara terintegrasi dalam sebuah bank/database/”rumah” kajian</p>
                        <br>
                        <p style="font-weight: bold;text-align: center;">Tentang eKajian</p>

                        <p>Suatu sistem untuk mendiseminasikan buah fikir para ASN ke publik. Buah fikir ini dapat mengambil berbagai bentuk.  Bentuk yang diakomodir oleh eKjaian adalah</p>

                        <p style="font-weight: bold;text-align: center;">Karya Yang Disajikan</p>

                        <p style="font-weight: bold;">Karya Ilmiah</p>
                        <ul>
                            <li>Karya Ilmiah Pendidikan yang terdiri dari: paper, pra skripsi, skripsi, thesis, dan disertasi</li>
                            <li>Karya Ilmiah Penelitian yang terdiri dari: makalah seminar, naskah seminar, naskah bersambung, laporan hasil penelitian, dan artikel jurnal penelitian</li>
                        </ul>
                        <br>
                        <p>Karya ilmiah merupakan karya tulis yang isinya berusaha memaparkan suatu pembahasan secara ilmiah yang dilakukan oleh seorang penulis atau peneliti. Karya ilmiah biasanya ditulis untuk mencari jawaban mengenai sesuatu hal dan untuk membuktikan kebenaran tentang sesuatu yang terdapat dalam objek tulisan.  Menurut Brotowidjoyo, karangan ilmiah adalah karangan ilmu pengetahuan yang menyajikan fakta dan ditulis menurut metodologi penulisan yang baik dan benar. Karya ilmiah dapat juga berarti tulisan yang didasari oleh hasil pengamatan, peninjauan, dan penelitian dalam bidang tertentu, disusun menurut metode tertentu dengan sistematika penulisan yang bersantun bahasa dan isinya, serta dapat dipertanggungjawabkan kebenarannya atau keilmiahannya (Susilo, M. Eko, 1995:11).</p>
                        
                        <p><b>KARYA ILMIAH POPULER&nbsp;:</b>&nbsp;&nbsp;yang terdiri dari essay, artikel dan feature
                            Karya ilmiah populer merupakan karya ilmiah yang bentuk, isi, dan bahasanya menggunakan kaidah-kaidah keilmuan, serta disajikan dalam bahasa yang santai dan mudah dipahami oleh masyarakat awam.
                        </p>

                        <p><b>KARYA NON ILMIAH&nbsp;:</b>&nbsp;&nbsp;yang terdiri dari: dongeng, cerita pendek (cerpen), novel, drama, novel.
                            Karya non-ilmiah adalah karangan yang menyajikan fakta pribadi tentang pengetahuan dan pengalaman dalam kehidupan sehari-hari, bersifat subyektif, tidak didukung fakta umum, dan biasanya menggunakan gaya bahasa yang populer atau biasa digunakan (tidak terlalu formal).
                        </p>

                        <p><b>PHOTO STORY&nbsp;:</b>&nbsp;&nbsp;merupakan koleksi rangkaian foto yang bercerita dan mengulas suatu issue, dan dapat juga merupakan buah fikir yang diperkuat dengan rangkaian foto.
                        </p>

                        <p><b>VIDEO STORY&nbsp;:</b>&nbsp;&nbsp;merupakan dokumentasi video pendek (5-10 menit) yang mengulas suatu permasalahan
                        </p>

                        <p style="font-weight: bold;">PROSES PEMUATAN</p>

                        <p>Materi yang ditampilkan pada eKajian telah melalui proses review oleh mitra bestari yang dikelola oleh  tim eKajian, yaitu :</p>
                        <br>
                        <p style="font-weight: bold;text-align: center;">SUSUNAN TIM PENGELOLA E-KAJIAN  </p>
                        <p style="font-weight: bold;text-align: center;">TAHUN 2020</p>

                    <center><img width="700px" src="{{ asset('images/table_tentang.png') }}" alt=""></center>
                    </ul>
                    <br>
                    <div class="text-right">
                    <a href="{{ route('siska.journal') }}" class="btn btn-primary">Next</a><br>
                    </div>
        
    </div><!-- end container --> <br>
</section>

@endsection