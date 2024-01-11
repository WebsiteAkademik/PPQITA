@extends('layouts.adminuser')

@section('title')
    Dashboard USER
@endsection

@section('content')
    

    
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <center><h2 class="card-title fw-semibold mb-4">SELAMAT ANDA TELAH BERHASIL MELAKUKAN PENDAFTARAN
                        PENERIMAAN PESERTA DIDIK BARU <br>SMK PANCASILA 1 WONOGIRI <br>TAHUN AJARAN 2024 / 2025
                    </h2></center>
                    <h3 class="card-title fw-semibold mb-4">Ketentuan Yang Dilakukan Setelah Melaksanakan Pendaftaran Adalah Sebagai Berikut :</h3>
                    
                        <ol  type="1">
                            <li>
                               <p><strong> Download formulir pendaftaran dan Surat keputusan PPDB </strong>   </p> 
                            </li>
                            <li>
                                <p><strong>Bergabung group Whatsapp PPDB SKAPANSA 2024/2025 </strong></p>
                            </li>        
                            <li>
                                <p><strong>Melakukan regristrasi / daftar ulang sebesar Rp. 1.000.000, 00 ( Satu Juta rupiah ) untuk pembayaran Seragam. Daftar Ulang bisa dicicil sebesar Rp. 300.000, 00 (Tiga Ratus Ribu Rupiah) kekurangannya dipenuhi setelah pengumuman hasil PPDB dengan cara transfer pembayaran melalui Bank BNI No rekening 0628447093 / Bank BRI No rekening 0158-01-025986-50-9 atasnama SMK Pancasila 1 Wonogiri atau datang langsung ke SMK Pancasila 1 Wonogiri. 
                                </strong></p>
                            </li>
                            <li style="">
                                <p><strong> berkas ke SMK Pancasila 1 Wonogiri : </strong>
                                <ul style="list-style-type:circle; padding-left:30px">
                                    <li>Fotocopy Kartu Keluarga</li>
                                    <li>Fotocopy Akta Kelahiran</li>
                                    <li>Fotocopy NISN</li>
                                    <li>Fotocopy PIP/KPS/PKH (Bagi yang memiliki)</li>
                                    <li>Foto Hitam putih ukuran 3X4</li>
                                
                                </ul></p>
                            </li>

                        </ol>
                    

                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No NISN & Nama Calon Siswa</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">No Telp</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Status</h6>
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendaftars as $key => $pendaftar)
                            
                                <a href="{{ route('cetak_pdf', $pendaftar->no_nisn) }}"
                                    class="text-black text-center d-flex align-items-center justify-content-center  bg-warning"
                                    style="padding:10px;border:solid 2px #000000"> 
                                    <i class="fa-solid fa-print"></i> &nbsp; &nbsp;
                                    <strong>CETAK FORMULIR</strong>
                                </a>
                                <br><br>
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h2 class="fw-semibold mb-1">{{ $pendaftar->no_nisn }}</h2>
                                            <h4 class="fw-normal mb-1">{{ $pendaftar->nama_calon_siswa }}</h4>
                                            <br/><span class="fw-normal mb-1">{{ "Nomor Telepon : " . $pendaftar->no_telepon }}</span>
                                            <br/><span class="fw-normal mb-1">{{ "Tempat Lahir : " . $pendaftar->tempat_lahir }}</span>
                                            <br/><span class="fw-normal mb-1">{{ "Tanggal Lahir : " . $pendaftar->tanggal_lahir }}</span>
                                            <br/><span class="fw-normal mb-1">{{ "No KK : " . $pendaftar->no_kartu_keluarga }}</span>
                                            <br/><span class="fw-normal mb-1">{{ "Agama : " . $pendaftar->agama }}</span>
                                            <br/><span class="fw-normal mb-1">{{ "Alamat Rumah : " . $pendaftar->alamat_rumah }}</span>
                                            <br/><span class="fw-normal mb-1">{{ "Nama Ayah : " . $pendaftar->nama_ayah }}</span>
                                      
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $pendaftar->no_telepon }}</p>
                                        </td>
                                        <td class="border-bottom-0">
                                            @php
                                                switch ($pendaftar->status) {
                                                    case 'open':
                                                        echo "<div class='badge text-capitalize' style='background-color: #00569C;'>$pendaftar->status</div>";
                                                        break;
                                                    case 'testing':
                                                        echo "<div class='badge text-capitalize bg-info'>$pendaftar->status</div>";
                                                        break;
                                                    case 'wawancara':
                                                        echo "<div class='badge text-capitalize bg-warning'>$pendaftar->status</div>";
                                                        break;
                                                    case 'diterima':
                                                        echo "<div class='badge text-capitalize bg-success'>$pendaftar->status</div>";
                                                        break;
                                                    case 'tidak diterima':
                                                        echo "<div class='badge text-capitalize bg-danger'>$pendaftar->status</div>";
                                                        break;
                                                }
                                            @endphp
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
