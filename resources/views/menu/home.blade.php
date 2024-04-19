@extends('menu.kerangka')
@section('content')
    <div class="container-fluid swiper mySwiper">
        <div class="swiper-wrapper">
            <img src="assets/rstonggakhusada.jpg" alt="" class="img-fluid swiper-slide">
            <img src="assets/rstonggakhusada002.jpg" alt="" class="img-fluid swiper-slide">
            <img src="assets/rstonggakhusada.jpg" alt="" class="img-fluid swiper-slide">
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
    </div>

    {{-- info kamar inap --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 my-3 rounded-2 bg-white px-4 py-4 shadow-sm">
                <h3 class="text-center py-2">Info Ruangan Kosong <a type="button"><span class="badge bg-green fs-6"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update</span></a></h3>
                {{-- @foreach ($infokamar as $item)
                    <h2>HHDJHS</h2>
                @endforeach --}}
                <table class="table striped">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">Kelas</th>
                            <th scope="col">Kamar</th>
                            <th scope="col" class="text-center">Terisi</th>
                            <th scope="col" class="text-center">Tersedia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infokamar as $data)
                            <tr>
                                <td>{{ $data->kelas }}</td>
                                <td>{{ $data->Kamar }}</td>
                                <td class="text-center">{{ $data->jumlahTerisi }} Bed </td>
                                <td class="text-center">{{ $data->jumlahKosong }} Bed </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Kelas</th>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tersedia</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>DELUX</td>
                                <td>R.Selamat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DELUX</td>
                                <td>R.Sehat</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>VIP</td>
                                <td>R.Sejahtera</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>VIP</td>
                                <td>R.Bahagia</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>VIP</td>
                                <td>R.Bersama</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>BANGSAL</td>
                                <td>R.Adenium</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>BANGSAL</td>
                                <td>R.Camelia</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>BANGSAL</td>
                                <td>R.Bugenvil</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>BANGSAL</td>
                                <td>R.Edelweis</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>BANGSAL</td>
                                <td>R.Dandalion</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- Lihat Jadwal Dokter --}}
    <div class="container-fluid" id="drkami">
        <div class="row">
            <div class="col-lg-12 py-3 text-center">
                <img src="assets/DOKTER.png" alt="" class="w-75">
                <a class="line-none">
                    <h1 class="bi bi-chevron-double-down animate__animated animate__bounce text-black"></h1>
                </a>
                <a href="{{ url('jadwal-dokter') }}"><button class="btn-green-sm fw-bold">Lihat jadwal
                        dokter</button></a>
            </div>
        </div>
    </div>

    <!-- SAMBUTAN -->
    <div class="container-fluid py-5 bg-abu" id="sambutan" data-aos="fade-up" data-aos-duration="1000">
        <div class="row py-5">
            <div class="col-lg-6 align-self-center d-flex justify-content-center">
                <img src="assets/dr.putri.png" alt="dr.putri" class="w-75">
            </div>
            <div class="col-lg-6 px-3 align-self-center">
                <h3 class="line-judul-left">Sambutan</h3>
                <p><b><i>RS Tonggak Husada</i></b>, Lahir dari Komitmen akan kesehatan seluruh Masyarakat
                    Indonesia khusus
                    nya Kabupaten Serang dan sekitar,
                <p>Rumah Sakit Kami dilengkapi dengan Tenaga Medis yang handal dan Profesional serta terus
                    mengembangkan
                    seluruh aspek Layanan Kesehatan dan Mengedepankan kualitas, Menjunjung tinggi
                    Profesionalisme,
                    Kompetensi, dan Keselamatan, serta memberikan Pelayanan yang melebihi kepuasan pelanggan.
                </p>
                <p><i><b>"Kesembuhan Anda Prioritas Kami"</b></i></p>
                </p>
                <blockquote class="blockquote mb-0">
                    <footer class="blockquote-footer"><b>dr. Putri Larosa</b> <cite title="Source Title">Direktur RS Tonggak
                            Husada</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
    <!-- LATAR BELAKANG -->
    <div class="container-fluid py-5 bg-abu2" id="latarbelakang" data-aos="fade-up" data-aos-duration="1000">
        <div class="row py-5 ">
            <div class="col-lg-6 px-3 align-self-center text-end ">
                <h3 class="line-judul-right">Latar Belakang</h3>
                <p>Berawal dari Klinik yang terletak dijalan Bojonegara Kp. Tonggak Ds. Kertasana Serang,
                    bernama Klinik
                    Bedah Tonggak Husada, dirintis sejak <b><i>Tahun 2014</i></b> oleh <b>dr. Supriyono.,
                        Sp.B</b></p>
                <p>Memiliki Misi memberikan Pelayanan Kesehatan yang cepat, tepat dan Profesional khususnya
                    dalam Pelayanan
                    Bedah.</p>
            </div>
            <div class="col-lg-6 align-self-center d-flex justify-content-center">
                <img src="assets/dr.all.png" alt="dr. supriyanto  & dr.putri larosa" class="w-75">
            </div>
        </div>
    </div>
    <!-- VISI & MISI -->
    <div class="container-fluid py-5 bg-abu" id="latarbelakang" data-aos="fade-up" data-aos-duration="1000">
        <div class="row py-5 ">
            <div class="col-lg-6 px-5 align-self-center text-start ">
                <h3 class="line-right" style="border-bottom: 3px solid #72bb36; width: 150px">Visi & Misi</h3>
                <p>Visi</p>
                <p> Menjadi Rumah Sakit Yang Unggul Dalam Pelayanan Bedah</b></p>
                <p>Misi</p>
                <p>Memberikan Pelayanan Kesehatan Cepat, Tepat, Dan Profesional</p>
            </div>
            <div class="col-lg-6 d-flex flex-column">
                <h3 style="border-bottom: 3px solid #72bb36; width: 120px">Budaya</h3>
                <p>Jujur, Ramah, Sopan, Dan Bersahabat Semangat, Antusias Dan Peduli Tertib, Rapi Dan Resik</p>
            </div>
        </div>
    </div>

    <!-- ASURANSI -->
    <div class="container py-5 text-center" id="asuransi" data-aos="fade-up" data-aos-duration="1000">
        <div class="py-5">
            <div class="row">
                <h3 class="line-judul">Rekanan Asuransi</h3>
                <div class="col-2"><img src="assets/001.png" class="w-100"></div>
                <div class="col-2"><img src="assets/002.png" class="w-100"></div>
                <div class="col-2"><img src="assets/003.png" class="w-100"></div>
                <div class="col-2"><img src="assets/004.png" class="w-100"></div>
                <div class="col-2"><img src="assets/005.png" class="w-100"></div>
                <div class="col-2"><img src="assets/006.png" class="w-100"></div>
            </div>
            <div class="row">
                <div class="col-2"><img src="assets/007.png" class="w-100"></div>
                <div class="col-2"><img src="assets/008.png" class="w-100"></div>
                <div class="col-2"><img src="assets/009.png" class="w-100"></div>
                <div class="col-2"><img src="assets/010.png" class="w-100"></div>
                <div class="col-2"><img src="assets/011.png" class="w-100"></div>
                <div class="col-2"><img src="assets/012.png" class="w-100"></div>
            </div>
            <div class="row">
                <div class="col-2"><img src="assets/013.png" class="w-100"></div>
                <div class="col-2"><img src="assets/014.png" class="w-100"></div>
                <div class="col-2"><img src="assets/015.png" class="w-100"></div>
                <div class="col-2"><img src="assets/016.png" class="w-100"></div>
                <div class="col-2"><img src="assets/017.png" class="w-100"></div>
                <div class="col-2"><img src="assets/018.png" class="w-100"></div>
            </div>
            <div class="row">
                <div class="col-2"><img src="assets/019.png" class="w-100"></div>
                <div class="col-2"><img src="assets/020.png" class="w-100"></div>
                <div class="col-2"><img src="assets/021.png" class="w-100"></div>
                <div class="col-2"><img src="assets/022.png" class="w-100"></div>
                <div class="col-2"><img src="assets/023.png" class="w-100"></div>
                <div class="col-2"><img src="assets/024.png" class="w-100"></div>
            </div>
            <div class="row">
                <div class="col-2"><img src="assets/025.png" class="w-100"></div>
                <div class="col-2"><img src="assets/026.png" class="w-100"></div>
                <div class="col-2"><img src="assets/027.png" class="w-100"></div>
                <div class="col-2"><img src="assets/028.png" class="w-100"></div>
            </div>
        </div>
    </div>

    {{-- Youtube --}}
    <div class="container py-1 px-1">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="text-center">
                    <h5>Company Profile</h5>
                    <h2 class="py-3 color-green fw-bold">RS Tonggak Husada</h2>
                </div>
                <div class="container-ytb-hero">
                    <iframe class="rounded shadow" src="https://www.youtube.com/embed/GROSKVsqzoQ"
                        title="rstonggakhusada" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- PETA LOKASI -->
    <div class="container-fluid py-5 text-center" id="lokasi" data-aos="fade-up" data-aos-duration="1000">
        <div class="py-5">
            <h3 class="line-judul">Peta Lokasi</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.9909174078557!2d106.0741623140418!3d-5.995981660578327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41926737e57b97%3A0x23cc36d9f5a703de!2sRS%20Tonggak%20Husada!5e0!3m2!1sid!2sid!4v1669108870195!5m2!1sid!2sid"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <!-- FOOTER -->
    <div class="container-fluid py-5 bg-green text-white">
        <div class="py-5 px-2">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <h4 class="py-1">RS TONGGAK HUSADA</h4>
                    <p>Jl. Raya Bojonegara No.8, Kertasana, Kec. Bojonegara, Kota Cilegon, Banten</p>
                    <hr>
                    <p>Copyright &copy; 2023 rstonggakhusada</p>
                </div>
                <div class="col-lg-4 align-self-center">
                    <h4 class="py-3"> Hubungi kami</h4>
                    <hr>
                    <div class="col">
                        <i class="bi bi-telephone-fill text-white text-start"> (0254) 8494205</i><br>
                        <i class="bi bi-whatsapp text-white text-start"> +62812-2289-0288</i><br>
                        <i class="bi bi-envelope-fill text-white text-start"> tonggak_husada@yahoo.com</i><br>
                        <hr>
                        <a href="https://www.instagram.com/rs_tonggakhusada/"
                            class="bi bi-instagram text-white text-start" target="_blank"></a>
                        <a href="https://www.facebook.com/tito.boleno" class="bi bi-facebook text-white text-start mx-1"
                            target="_blank"></a>
                        <a href="https://www.youtube.com/@rstonggakhusada4193" class="bi bi-youtube text-white text-start"
                            target="_blank"></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Jam Buka</h4>
                    <hr>
                    <p>Senin - Minggu 24 Jam
                    <p><b>IGD</b> 24 Jam</p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/+6285100579666" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    {{-- POP UP BOX --}}
    <div class="popbox hide" id="popbox">
        <div aria-label='Close' class="pop-overlay"
            onclick='document.getElementById("popbox").style.display="none";removeClassonBody();' role="button"
            tabindex="0" />
        <div class="pop-content">
            <a rel="noopener noreferrer" title="box">
                <div class="popcontent">
                    <a href="#"><img src="assets/PROMO USG WEB.png" alt="banner" width="100%"
                            height="" /></a>
                </div>
            </a>
            <button aria-label='Close' class='popbox-close-button'
                onclick='document.getElementById("popbox").style.display="none";removeClassonBody();'>&times;</button>
        </div>
    </div>
@endsection
