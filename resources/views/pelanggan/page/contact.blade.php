@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4 align-items-center">
        <div class="col-md-6">
            <div class="content-text">
                CV. Noorani Jaya merupakan perusahaan yang berdedikasi dalam menyediakan solusi percetakan kemasan produk
                berkualitas tinggi. Dengan pengalaman lebih dari 10 tahun di industri, kami telah menjadi mitra terpercaya
                bagi berbagai merek terkemuka dalam berbagai sektor industri.

                Kami menyediakan beragam produk kemasan custom, dari standing pouch, box/dus kemasan, paper bowl, paper bag,
                dll. Kami memiliki tim desainer berbakat yang dapat menciptakan desain kemasan yang menarik dan efektif
                untuk meningkatkan daya tarik produk Anda di pasaran. Dengan menggunakan peralatan percetakan mutakhir, kami
                memberikan hasil cetakan berkualitas tinggi dengan warna yang tajam dan detail yang presisi.

                Kami bangga telah bekerja sama dengan berbagai merek terkenal dari berbagai industri, termasuk makanan dan
                minuman, produk kecantikan, dan produk konsumen lainnya. Kami berkomitmen untuk mendukung inisiatif
                lingkungan dengan menyediakan opsi kemasan ramah lingkungan dan menggunakan praktik produksi yang
                berkelanjutan.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/tentang kami cv noorani.png') }}" style="width:100%" alt="">
        </div>
    </div>

    <!--- <div class="d-flex justify-content-lg-between mt-5">
            <div class="d-flex align-items-center gap-4">
                <i class="fa fa-users fa-2x"></i>
                <p class="m-0 fs-5">+ 300 Pelanggan</p>
            </div>
        </div> --->

    <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
    <hr class="mb-5">
    <div class="row  mb-md-5">
        <div class="col-md-5">
            <div><img src="{{ asset('assets/images/nama cv.jpg') }}" style="width: 100%; height:50vh; border-radius:10px;"
                    alt=""></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik dan saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami
                        dapat memberikan
                        apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.
                    </p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" value=""
                                placeholder="Masukan email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
