@extends('mylayouts.app')

@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb bibit_bg align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-6">
                <div class="breadcrumb_tittle">
                    <h2>Permintaan bibit</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Isi data-data dibawah ini</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" method="post" action="/minta" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="penanggungjawab">Nama</label>
                                <input class="form-control" name="penanggungjawab" id="penanggungjawab" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan nama'"
                                    placeholder='Masukkan nama'>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" name="alamat" id="alamat" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan alamat'"
                                    placeholder='Masukkan alamat'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input class="form-control" name="nik" id="nik" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan NIK'"
                                    placeholder='Masukkan NIK'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="telp">Nomor HP</label>
                                <input class="form-control" name="telp" id="telp" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan nomor hp'"
                                    placeholder='Masukkan nomor hp'>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="tujuan">Tujuan</label>
                                <textarea class="form-control w-100" name="tujuan" id="tujuan" cols="30" rows="9"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan tujuan anda'"
                                    placeholder='Masukkan tujuan anda'></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="bibit_id">Bibit</label>
                                <select name="bibit_id" id="bibit_id" class="form-control @error('bibit_id') is-invalid @enderror">
                                    <option selected> Pilih..</option>
                                    @foreach ($bibits as $bibit)
                                    <option value="{{$bibit->id}}">
                                        {{$bibit->bibit}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="jumlah_bibit">Jumlah bibit</label>
                                <input class="form-control" name="jumlah_bibit" id="jumlah_bibit" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan jumlah bibit'"
                                    placeholder='Masukkan jumlah bibit'>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="luas_lahan">Luas lahan</label>
                                <input class="form-control" name="luas_lahan" id="luas_lahan" type="text"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Masukkan luas lahan (hektar)'"
                                    placeholder='Masukkan luas lahan (hektar)'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="ktp">Scan KTP</label>
                                <input class="form-control-file" name="ktp" id="ktp" type="file">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="spptpbb">Scan SPPT PBB</label>
                                <input class="form-control-file" name="spptpbb" id="spptpbb" type="file">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="permohonan">Scan Surat Permohonan</label>
                                <input class="form-control-file" name="permohonan" id="permohonan" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" value="upload" class="button button-contactForm btn_1">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>00 (440) 9865 562</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
<div class="d-none d-sm-block mb-5 pb-4">
    <div id="map" style="height: 480px;"></div>
    <script>
        function initMap() {
var uluru = {lat: -25.363, lng: 131.044};
var grayStyles = [
  {
    featureType: "all",
    stylers: [
      { saturation: -90 },
      { lightness: 50 }
    ]
  },
  {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
];
var map = new google.maps.Map(document.getElementById('map'), {
  center: {lat: -31.197, lng: 150.744},
  zoom: 9,
  styles: grayStyles,
  scrollwheel:  false
});
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG75lfPH76m8GvmnxVb1IpdYnGx8K3Fug&callback=initMap">
    </script>

</div>

<script src="http://maps.google.com/maps/api/js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('js/gmaps.js')}}"></script>
<script>
    var map = new GMaps({
      el: '#map',
      lat: -12.043333,
      lng: -77.028333
    });
</script>
@endsection