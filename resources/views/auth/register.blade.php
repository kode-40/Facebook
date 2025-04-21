@extends('layouts.auth')
@section('title')
register
@endsection

@section('content')
<p style="color: blue;font-size: 60px;margin-left: 40%;"><b>facebook</b></p>

<div1 style="background-color: white; margin-top: 55%;width: 34%;margin-left: -25%; border-radius: 10px; margin-top: 750px;">
<p style="padding-left: 10px;margin-bottom: -3%;font-size: 23px;text-align: center;margin-top: 15px;"><b>Buat Akun Baru</b></p>
<p style="padding-left: 10px;text-align: center;">Ini cepat dan mudah.</p>
<hr>
<p><span class="error"></span></p>
<form method="post" action="{{ route('register-post') }}" style="padding-left: 15px;">
    @csrf
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="md-4">
            <input type="text" name="nama_depan" class="form-control" placeholder="Nama depan">
            <span class="error">* </span>
        </div></div>
        <div class="col-md-6">
            <div class="md-4">
            <input type="text" name="nama_belakang" class="form-control" placeholder="Nama belakang">
            <span class="error">* </span>
        </div></div>
    </div></div>

    <p style="font-size: 80%;">Tanggal Lahir</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="md-3">
    <select name="date" class="form-select" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select></div></div>
    <div class="col-md-4">
        <div class="md-3">
    <select name="month" class="form-select" required>
    <option value="1">Januari</option>
    <option value="2">Februari</option>
    <option value="3">Maret</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Agustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
    </select></div></div>
    <div class="col-md-4">
        <div class="md-3">
    <select name="year" class="form-select" required>
    <option value="1990">1990</option>
    <option value="1991">1991</option>
    <option value="1992">1992</option>
    <option value="1993">1993</option>
    <option value="1994">1994</option>
    <option value="1995">1995</option>
    <option value="1996">1996</option>
    <option value="1997">1997</option>
    <option value="1998">1998</option>
    <option value="1999">1999</option>
    <option value="2000">2000</option>
    <option value="2001">2001</option>
    <option value="2002">2002</option>
    <option value="2003">2003</option>
    <option value="2004">2004</option>
    <option value="2005">2005</option>
    <option value="2006">2006</option>
    <option value="2007">2007</option>
    <option value="2008">2008</option>
    <option value="2009">2009</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    </select></div></div></div></div>


    <p style="font-size: 80%;">Jenis Kelamin</p>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="md-3">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="md-3">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="md-3">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Khusus"> Khusus
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative">
                <input type="email" name="email" class="w-100" placeholder="Nomor seluler atau email" required>
                <span class="required">*</span>
            </div>
            <div class="col-12 position-relative">
                <input type="password" name="password" class="w-100" placeholder="Kata sandi baru" required>
                <span class="required">*</span>
            </div>
        </div>
    </div>
    <br>
    <p style="font-size: 12px;font-family: Arial, Helvetica, sans-serif;color: gray;">Orang yang menggunakan layanan kami dapat mengunggah informasi kontak <br>
        Anda ke Facebook.Pelajari selengkapnya</p>
    <p style="font-size: 12px;font-family: Arial, Helvetica, sans-serif;color: gray ;">Dengan mengklik Daftar, Anda menyetujui Ketentuan, Kebijakan Privasi, dan <br>
        Kebijakan Cookie kami. Anda akan menerima Notifikasi SMS dari kami dan bisa <br>
        berhenti kapan saja.</p><br>  
    <button type="submit" name="submit" value="submit" cursor="pointer"
    style="margin-left: 25%;background-color:rgb(50, 194, 88);border-radius:7px; color: white; cursor: pointer;width:50%; height:40px">
    <b>Daftar</b></button>
    <p style="text-align: center;color: royalblue;cursor:pointer">Sudah memiliki akun?</p>
</form>
</div1>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ asset('style_register.css') }}">
<style>
    .error {color: red;}
    .radio-label {
        margin-left: 5px;
    }
    .radio-button {
        margin-right: -120px;
        margin-left: 110px;
    }
    .custom-col-md-11 {
        width: 95%;
        height: 40px;
    }
</style>
@endpush
