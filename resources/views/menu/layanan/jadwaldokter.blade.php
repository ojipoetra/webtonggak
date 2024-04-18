@extends('menu.kerangka')
@section('content')
    <style>
        /* Swipper */
        .swiper-pagination-bullet-active {
            border: none;
            background-color: #72bb36;
        }
    </style>
    <!-- Modal jadwal detail dokter -->
    <!-- Modal -->
    <div class="modal modal-lg fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Praktik RS Tonggak Husada</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- jadwal dokter gazali -->
                <div class="modal-body">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/assets/001-1.jpg" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-md-6 py-1">
                                <h3>dr. Gazali, M.Kes., Sp. A</h3>
                                <h5 class="opacity-75">Spesialis Anak</h5>
                                <hr>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Jam Praktik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Senin</td>
                                            <td>17.00 - 19.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>17.00 - 19.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>17.00 - 19.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>17.00 - 19.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Jum'at</td>
                                            <td>17.00 - 19.00 WIB</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Modal -->
    <div class="modal modal-lg fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Praktik RS Tonggak Husada</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/assets/003-1.jpg" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-md-6 py-1">
                                <h3>dr. Aulia Thabrani, Sp.B.FINACS</h3>
                                <h5 class="opacity-75">Spesialis Bedah</h5>
                                <hr>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Jam Praktik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Senin</td>
                                            <td>16.00 - 19.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>12.00 - 16.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>16.00 - 19.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>12.00 - 16.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Jum'at</td>
                                            <td>12.00 - 16.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>08.00 - 12.00 WIB</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal modal-lg fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Praktik RS Tonggak Husada</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/assets/004-1.jpg" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-md-6 py-1">
                                <h3>dr. Baginda Yusuf Siregar, Sp.PD</h3>
                                <h5 class="opacity-75">Spesialis Penyakit Dalam</h5>
                                <hr>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Jam Praktik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Senin</td>
                                            <td>17.00 - 20.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>17.00 - 20.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>17.00 - 20.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>17.00 - 20.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Jum'at</td>
                                            <td>08.00 - 11.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>13.00 - 15.00 WIB</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal modal-lg fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Praktik RS Tonggak Husada</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/assets/006-1.jpg" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-md-6 py-1">
                                <h3>dr. Supriyono, Sp.B</h3>
                                <h5 class="opacity-75">Spesialis Bedah</h5>
                                <hr>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Jam Praktik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>08.00 - 12.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>12.00 - 16.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>08.00 - 12.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Jum'at</td>
                                            <td>08.00 - 12.00 WIB</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal modal-lg fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Praktik RS Tonggak Husada</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/assets/007-1.jpg" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-md-6 py-1">
                                <h3>dr. Dyan Asih Rachmawati, Sp.OG</h3>
                                <h5 class="opacity-75">Spesialis Kandungan</h5>
                                <hr>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Jam Praktik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Senin</td>
                                            <td>17.00 - 20.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>14.00 - 17.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>16.00 - 19.00 WIB</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>09.00 - 12.00 WIB</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-9" data-aos="fade-up" data-aos-duration="1000">
                <!-- Swipper jadwal -->
                <div class="col py-5 swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="assets/001-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Gazali, M.Kes., Sp. A</h2>
                                        <h5>Spesialis Anak</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop1"><a href="#"
                                                style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="assets/003-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Aulia Thabrani, Sp.B</h2>
                                        <h5>Spesialis Bedah</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop3"><a href="#"
                                                style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="assets/004-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Baginda Yusuf Siregar, Sp.PD</h2>
                                        <h5>Spesialis Penyakit Dalam</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop4"><a href="#"
                                                style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="assets/006-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Supriyono, Sp.B</h2>
                                        <h5>Spesialis Bedah</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop6"><a href="#"
                                                style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row rounded shadow">
                                <div class="col-lg-6">
                                    <img src="assets/007-1.jpg" alt="" class="rounded size-jadwal-foto">
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-3">
                                        <h2>dr. Dyan Asih Rachmawati, Sp.OG</h2>
                                        <h5>Spesialis Kandungan</h5>
                                        <hr>
                                    </div>
                                    <div class="py-2">
                                        <button class="btn-green-sm" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop7"><a href="#"
                                                style="text-decoration: none; color:#fff;">Lihat Jadwal</a></button>
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
                    <img src="assets/logo-circle.png" class="rounded-circle shadow-lg"><b><span class="px-2">RS Tonggak
                            Husada</span></b>
                    <hr>
                </div>

            </div>
            @include('menu.layanan.linklayanan')
        </div>
    </div>
@endsection
