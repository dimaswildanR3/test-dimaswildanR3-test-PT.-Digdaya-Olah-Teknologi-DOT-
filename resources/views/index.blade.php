@extends('layouts.app')

@section('content')
<body style="background: #f3f3f3">

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3></h3>
                    <hr>
                    <div class="form-group">
                        <label class="font-weight-bold">PROVINSI </label>
                        <select class="form-control provinsi" name="province_origin">
                            <option value="0">-- pilih provinsi --</option>
                            @foreach ($provinces as $province => $value)
                                <option value="{{ $province  }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">KOTA / KABUPATEN </label>
                        <select class="form-control kota" name="city_origin">
                            <option value="">-- pilih kota --</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
       


<script>
    $(document).ready(function(){
        //ajax select kota
        $('select[name="province_origin"]').on('change', function () {
            let id = $(this).val();
            if (id) {
                jQuery.ajax({
                    url: '/cities/'+id,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        $('select[name="city_origin"]').empty();
                        $('select[name="city_origin"]').append('<option value="">-- pilih kota --</option>');
                        $.each(response, function (key, value) {
                            $('select[name="city_origin"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                });
            } else {
                $('select[name="city_origin"]').append('<option value="">-- pilih kota --</option>');
            }
        });
    });
</script>
</body>
</html>
@endsection