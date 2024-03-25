@extends('menu.kerangka')
@section('content')
    <!-- CONTENT -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
                <!-- Swipper jadwal -->
                <div class="col py-5 swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="/assets/001-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Gazali, M.Kes., Sp. A</h2>
                                        <h5>Spesialis Anak</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><a href="#" style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="/assets/003-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Aulia Thabrani, Sp.B</h2>
                                        <h5>Spesialis Bedah</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"><a href="#" style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="/assets/004-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Baginda Yusuf Siregar, Sp.PD</h2>
                                        <h5>Spesialis Penyakit Dalam</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop4"><a href="#" style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="/assets/006-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Supriyono, Sp.B</h2>
                                        <h5>Spesialis Bedah</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop6"><a href="#" style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="/assets/007-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Dyan Asih Rachmawati, Sp.OG</h2>
                                        <h5>Spesialis Kandungan</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop7"><a href="#" style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- <img src="../img/documention/perawatan01.jpeg" class="img-fluid img-thumbnail"> -->
                <div class="col py-3">
                    <h1>JADWAL DOKTER</h1>
                    <p>Yuk temui Jadwal Doktermu disini</p>
                    <img src="/assets/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak Husada</span></b>
                    <hr>
                </div>

            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                <div class="list-group">
                    <button type="button" class="rounded-top btn-green-top" aria-current="true">
                        <b>DAFTAR LAYANAN</b>
                    </button>
                    <a href="poliklinik-anak" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Anak</button></a>
                    <a href="poliklinik-penyakit-dalam" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Penyakit Dalam</button></a>
                    <a href="poliklinik-bedah-umum" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Bedah Umum</button></a>
                    <a href="poliklinik-kebidanan-dan-kandungan" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Kebidanan dan Kandungan</button></a>
                    <a href="poliklinik-umum" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Umum</button></a>
                    <a href="poliklinik-gigi" class="a-none"><button type="button" class="list-group-item list-group-item-action">Poliklinik Gigi</button></a>
                    <a href="jadwal-dokter" class="a-none"><button type="button" class="list-group-item list-group-item-action active-green">Jadwal Dokter</button></a>
                </div>
            </div>
        </div>

    </div>

<a href="https://wa.me/+6285100579666" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>





<script src="../assets/js/jquery-3.6.1.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection
