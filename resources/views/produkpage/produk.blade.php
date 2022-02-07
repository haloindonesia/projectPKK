@extends('layout.app')
@section('content')
<div class="container box-breadcrumb">
    <h5 class="mt-1 mb-1">Home > Category > Handphone > Iphone 13 Pro </h5>
</div>
    <div class="info-produk py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="photo-produk">
                        <div class="photo-active">
                            <img src="{{ asset('library')}}/iphone13promax.png" alt="">
                        </div>
                        <div class="mt-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="option-photo">
                                        <img src="{{ asset('library')}}/iphone13promax.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="option-photo">
                                        <img src="{{ asset('library')}}/iphone13promax.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="option-photo">
                                        <img src="{{ asset('library')}}/iphone13promax.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="option-photo">
                                        <img src="{{ asset('library')}}/iphone13promax.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="title-produk">
                        iPhone 13 Resmi iBox 512GB Garansi Indo
                    </h1>
                    <div class="terjual">
                        <img src="{{ asset('library')}}/star.png" class="bintang" alt=""> 4,5 / 5
                        <span class="ml-2">165 Terjual</span>
                    </div>
                    <div class="harga">
                        <h2 class="mt-2"> $1000 > $500</h2>
                    </div>
                    <div class="pengiriman">
                        <h2 class="mt-2"> Pengiriman</h2>
                    </div>
                    <div class="row">
                        <div class="col-6 mt-1 lokasi-lapak"> 
                            <h4>Lokasi Lapak</h4> 
                            <p>Jln. Babakan Irigasi gg amd 3 Rt 4 Rw 3 No 231</p>
                        </div>
                        <div class="col-6 mt-1">
                            <h4>Lokasi Penjual</h4>
                            <p>Jln. Babakan Irigasi gg amd 3 Rt 4 Rw 3 No 231 <button class="btn btn-outline-primary waves-effect"> ganti</button></p>
                        </div>
                    </div>
                    <!-- Split dropright button -->
                    <div class="btn-group dropright mt-2">
                    <button type="button" class="btn btn-secondary">
                        <span class="jastip pr-1">J&T</span> JNT Regular <span class="hari"> 2-4 Hari </span> RP 10.000
                    </button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropright</span>
                    </button>
                    <div class="dropdown-menu">
                        <!-- Dropdown menu links -->
                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cart-halo ml-2" style="background: #fff; border: 1px solid rgb(187, 187, 187); border-radius:15px;">
                        <div class="txt-cart pl-3 pr-0 py-3">
                            <div class="title-cart">
                                <h1>iPhone 13 Resmi iBox 512GB Garansi Indo</h1>
                            </div>
                            <div class="produk-info-price mt-1">
                                <h4> $1000 > <u>$500</u></h4>
                            </div>
                            <div class="produk-add-form mt-2">
                                <h5>warna :</h5>
                                <div class="container">
                                    <button class="btn btn-primary">Merah</button>
                                    <button class="btn btn-outline-dark">Merah</button>
                                    <button class="btn btn-outline-dark">Merah</button>
                                    <button class="btn btn-outline-dark">Merah</button>
                                    <button class="btn btn-outline-dark">Merah</button>
                                </div>
                                <h5 class="mt-1">size :</h5>
                                <div class="container">
                                    <button class="btn btn-primary">128GB</button>
                                    <button class="btn btn-outline-dark">516GB</button>
                                    <button class="btn btn-outline-dark">1TB</button>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" style="width: 100%">Pesan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spek-barang pt-3 pb-3 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1> Informasi Barang </h1>
                    <hr class="unline-produk">
                </div>
                <div class="col-md-6">
                    <h2>Kondisi Barang</h2>
                    <div class="info-baru"> baru </div>
                    <h3 class="mt-3">
                        Spesifikasi
                    </h3>
                    <div class="spek mt-2">
                        <p>Kategori : <span>Handphone</span></p>
                        <p>Berat : <span>500 gram</span></p>
                        <p>Asal Barang : <span>Lokal</span></p>
                        <p>Brand : <span>Apple</span></p>
                        <p>Display Size : <span>6,2 inch</span></p>
                    </div>
                    <h3 class="mt-3">
                        Deskripsi
                    </h3>
                    <p >HP Baru dapet langsung dari iBox </p>
                </div>
            </div>
        </div>
    </div>
    <div class="info-lapak pt-3 pb-3 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1> Informasi Barang </h1>
                    <hr class="unline-produk">
                </div>
                <div class="col-md-6">
                    <div class="profil-lapak">
                        <div class="row">
                            <div class="col-2">
                                <div class="poto-profil">
                                    <img src="{{ asset('library')}}/ibox.png" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <h3>iBox Bandung</h3>
                                <h5>Bandung</h5>
                                <div class="tag tag-tt mr-2 text-center">Trusted</div>
                                <div class="tag tag-ss text-center">Super seller</div>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-outline-primary waves-effect"> Kunjungi Pelapak</button>
                            </div>
                        </div>
                        <div class="info-kepuasan p-2 mt-1">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="kepuasan"><h2 class="text-center mt-2">100%</h2></div>
                                        </div>
                                        <div class="col-8">
                                            <h3>Kepuasan Pelangan</h3>
                                            <div>254 Feedback Positif</div>
                                            <div>dari 254 Feedback</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 border-left">
                                    <div class="row">
                                        <div class="col-4">
                                            <h1>AVG</h1>
                                        </div>
                                        <div class="col-8">
                                            <h3>± 6 Jam</h3>
                                            <p>dari waktu pemesanan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="mt-3">Catatan Pelapak</h2>
                        <p>
                            Catatan Pelapak tetap tunduk terhadap Aturan penggunaan Halo Indonesia.
                            Semua barang yang berada di lapak ini langsung di dapatkan dari iBox
                            
                            Kebijakan Pengembalian Produk
                            
                            Syarat utk klaim garansi :
                            
                            Segel baut harus utuh dan tidak rusak (tidak menerima alasan apapun)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-ulasan pt-3 pb-3 mt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1> Informasi Barang </h1>
                    <hr class="unline-produk">
                </div>
                <div class="col-6">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="667" height="160" viewBox="0 0 667 160">
                        <defs>
                            <clipPath id="clip-ulasan">
                                <rect width="667" height="160"/>
                            </clipPath>
                            <image id="image" width="40" height="40" xlink:href="data:image/png;base64,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"/>
                        </defs>
                        <g id="ulasan" clip-path="url(#clip-ulasan)">
                            <rect width="667" height="160" fill="#fff"/>
                            <g id="Group_11" data-name="Group 11" transform="translate(-602 -2144)">
                            <g id="Rectangle_113" data-name="Rectangle 113" transform="translate(602 2144)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="667" height="160" rx="5" stroke="none"/>
                                <rect x="0.5" y="0.5" width="666" height="159" rx="4.5" fill="none"/>
                            </g>
                            <path id="Exclusion_8" data-name="Exclusion 8" d="M-3920,125a59.625,59.625,0,0,1-23.355-4.715,59.8,59.8,0,0,1-19.072-12.859,59.8,59.8,0,0,1-12.858-19.072A59.625,59.625,0,0,1-3980,65a59.625,59.625,0,0,1,4.715-23.355,59.8,59.8,0,0,1,12.858-19.072,59.8,59.8,0,0,1,19.072-12.859A59.625,59.625,0,0,1-3920,5a59.627,59.627,0,0,1,23.355,4.715,59.8,59.8,0,0,1,19.072,12.859,59.8,59.8,0,0,1,12.859,19.072A59.625,59.625,0,0,1-3860,65a59.625,59.625,0,0,1-4.715,23.355,59.8,59.8,0,0,1-12.859,19.072,59.8,59.8,0,0,1-19.072,12.859A59.626,59.626,0,0,1-3920,125Zm0-117a57.064,57.064,0,0,0-57,57,57.064,57.064,0,0,0,57,57,57.065,57.065,0,0,0,57-57A57.065,57.065,0,0,0-3920,8Z" transform="translate(4602 2159)" fill="#ecfc0e"/>
                            <text id="_100_" data-name="100%" transform="translate(635 2237)" font-size="36" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="0" y="0">100%</tspan></text>
                            <use id="Star" transform="translate(758 2184)" xlink:href="#image"/>
                            <use id="Star-2" data-name="Star" transform="translate(796 2184)" xlink:href="#image"/>
                            <use id="Star-3" data-name="Star" transform="translate(832 2184)" xlink:href="#image"/>
                            <use id="Star-4" data-name="Star" transform="translate(870 2184)" xlink:href="#image"/>
                            <use id="Star-5" data-name="Star" transform="translate(910 2184)" xlink:href="#image"/>
                            <text id="Dari_53_ulasan" data-name="Dari 53 ulasan" transform="translate(761 2249)" fill="#acadb9" font-size="18" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="0" y="0">Dari 53 ulasan</tspan></text>
                            <line id="Line_17" data-name="Line 17" y2="120" transform="translate(966 2164.5)" fill="none" stroke="rgba(176,176,194,0.45)" stroke-width="1"/>
                            <text id="_5_4_3_2_1" data-name="5
                      4
                      3
                      2
                      1" transform="translate(982 2179)" fill="#3e4160" font-size="18" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="0" y="0">5</tspan><tspan x="0" y="25">4</tspan><tspan x="0" y="50">3</tspan><tspan x="0" y="75">2</tspan><tspan x="0" y="100">1</tspan></text>
                            <use id="Star-6" data-name="Star" transform="translate(994 2165) scale(0.375)" xlink:href="#image"/>
                            <use id="Star-7" data-name="Star" transform="translate(994 2190) scale(0.375)" xlink:href="#image"/>
                            <use id="Star-8" data-name="Star" transform="translate(994 2215) scale(0.375)" xlink:href="#image"/>
                            <use id="Star-9" data-name="Star" transform="translate(994 2240) scale(0.375)" xlink:href="#image"/>
                            <use id="Star-10" data-name="Star" transform="translate(994 2265) scale(0.375)" xlink:href="#image"/>
                            <rect id="Rectangle_114" data-name="Rectangle 114" width="186" height="12" rx="6" transform="translate(1021 2167)" fill="#ffb547"/>
                            <rect id="Rectangle_115" data-name="Rectangle 115" width="186" height="12" rx="6" transform="translate(1021 2192)" fill="#ebebf1"/>
                            <rect id="Rectangle_116" data-name="Rectangle 116" width="186" height="12" rx="6" transform="translate(1021 2217)" fill="#ebebf1"/>
                            <rect id="Rectangle_117" data-name="Rectangle 117" width="186" height="12" rx="6" transform="translate(1021 2242)" fill="#ebebf1"/>
                            <rect id="Rectangle_118" data-name="Rectangle 118" width="186" height="12" rx="6" transform="translate(1021 2267)" fill="#ebebf1"/>
                            <text id="_100_2" data-name="100%" transform="translate(1219 2178)" fill="#acadb9" font-size="12" font-family="Montserrat-SemiBold, Montserrat" font-weight="600"><tspan x="0" y="0">100%</tspan></text>
                            </g>
                        </g>
                    </svg>
                    <h3 class="mt-3">photo dari pembeli</h3>
                    <div class="container mt-1">
                        <div class="row photo-ulasan">
                            <div class="col-sm">
                                <img src="{{ asset('library')}}/iphone13promax.png" alt="">
                            </div>
                            <div class="col-sm">
                                <img src="{{ asset('library')}}/iphone13promax.png" alt="">
                            </div>
                            <div class="col-sm">
                                <img src="{{ asset('library')}}/iphone13promax.png" alt="">
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-3">Daftar ulasan</h3>
                    <button class="btn btn-primary"> Semua </button>
                    <button class="btn btn-outline-dark"> terbaru </button>
                    <button class="btn btn-outline-dark"> dengan foto </button>
                    <br>
                    <button class="btn btn-outline-dark mt-1"> 5 <img style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt=""> </button>
                    <button class="btn btn-outline-dark mt-1"> 4 <img style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt=""> </button>
                    <button class="btn btn-outline-dark mt-1"> 3 <img style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt=""> </button>
                    <button class="btn btn-outline-dark mt-1"> 2 <img style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt=""> </button>
                    <button class="btn btn-outline-dark mt-1"> 1 <img style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt=""> </button>
                    <div class="ulasan mt-3">
                        <div class="row">
                            <div class="col-2">
                                <img class="avatar" src="{{asset('library')}}/avatar.png" alt="">
                            </div>  
                            <div class="col-10">
                                <h3>Dinda Citra Kirana</h1> 
                                    <img class="mb-2"style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt="">
                                    <img class="mb-2"style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt="">
                                    <img class="mb-2"style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt="">
                                    <img class="mb-2"style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt="">
                                    <img class="mb-2"style="width: 15px ; " src="{{asset ('library')}}/Star.png" alt="">
                                
                                <h5><b>Barangnya bagus banget !!!</b></h5>
                                <p>Diposting 01 Des, 2021 <br> harga bersahabat..baterai masi mantap 100%..layar mulus..kamera okeh,, mantap pokonya dan pengiriman cepat pelapak juga ramah</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection