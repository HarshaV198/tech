@extends('admin/layouts/app')

@section('main-content')

<style>
    .cat-wrapper{
        margin-top: 20px;
        border: 1px solid #ddd;
        padding: 15px;
        position: relative;
        padding-top: 25px;
    }
    .main-label{
        position: absolute;
        top: -20px;
        padding: 5px 10px;
        background: #fff;
        font-size: 18px;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Global settings
        </h1>
    <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><i class="fa fa-cog" style="margin-right: 5px"></i>Global Settings</li>
    </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="col-md-offset-1 col-md-10">
                            <form method="POST" action="{{ url('/global_setting/store') }}" data-parsley-validate="" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="cat-wrapper">
                                    <label class="main-label">Address</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address 1</label>
                                                <input type="text" name="address1" class="form-control" value="{{ $organization->address1 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address 2</label>
                                                <input type="text" name="address2" class="form-control" value="{{ $organization->address2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Street</label>
                                                <input type="text" name="street" class="form-control" value="{{ $organization->street }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" value="{{ $organization->city }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Province/State</label>
                                                <input type="text" name="state" class="form-control" value="{{ $organization->state }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" name="postal_code" class="form-control" value="{{ $organization->postal_code }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Coutry</label>
                                                <input type="text" name="country" class="form-control" value="{{ $organization->country }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-wrapper">
                                    <label class="main-label">Buisness Profile</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="text" name="telephone" class="form-control" value="{{ $organization->telephone }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" name="website" class="form-control" value="{{ $organization->website }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Info on Services</label>
                                                <textarea class="form-control" rows="4" style="width: 100%;overflow: hidden" name="service_info" value="{{ $organization->service_info }}">{{ $organization->service_info }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Profile Photo</label>
                                                @if(isset($organization->profile_pic) && $organization->profile_pic)
                                                    <img style="display: block;margin-bottom: 10px;height: 200px; width: 200px;object-fit: cover" src="{{ Storage::disk('local')->url($organization->profile_pic) }}">
                                                @else
                                                    <img style="display: block;margin-bottom: 10px;height: 200px; width: 200px;object-fit: cover" src="{{ asset('img/placeholder.gif') }}">
                                                @endif
                                                <input type="file" accept=".png, .jpg, .jpeg" name="profile_pic" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Premium Ad Banner</label>
                                                @if(isset($organization->premium_banner) && !empty($organization->premium_banner))
                                                    <img style="display: block;margin-bottom: 10px;height: 200px; width: 200px;object-fit: cover" src="{{ Storage::disk('local')->url($organization->premium_banner) }}">
                                                @else
                                                    <img style="display: block;margin-bottom: 10px;height: 200px; width: 200px;object-fit: cover" src="{{ asset('img/placeholder.gif') }}">
                                                @endif
                                                <input type="file" accept=".png, .jpg, .jpeg" name="premium_banner" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Classic Ad Banner</label>
                                                @if(isset($organization->classic_banner) && $organization->classic_banner)
                                                    <img style="display: block;margin-bottom: 10px;height: 200px; width: 200px;object-fit: cover" src="{{ Storage::disk('local')->url($organization->classic_banner) }}">
                                                @else
                                                    <img style="display: block;margin-bottom: 10px;height: 200px; width: 200px;object-fit: cover" src="{{ asset('img/placeholder.gif') }}">
                                                @endif
                                                <input type="file" accept=".png, .jpg, .jpeg" name="classic_banner" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-wrapper">
                                    <label class="main-label">Category</label>
                                    <div class="row">
                                        <div class="col-md-3 form-group">
                                            <label>Select Category</label>
                                            <select name="category" class="form-control category-change" required>
                                                <option value="" selected disabled>Select Category</option>
                                                @if(isset($categories) && count($categories))
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}" @if($organization->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 sub-categories-blk">
                                            <label style="display:block">Select Sub-Category</label>
                                            @if(isset($categories) && count($categories))
                                                @foreach($categories as $category)
                                                    <div class="category-{{$category->id}} sub-category" @if(isset($organization->category_id) && !empty($organization->category_id)) @if($organization->category_id != $category->id) style="display: none" @endif @else @if(!$loop->first) style="display: none"  @endif @endif >
                                                        @foreach($category->subcategories as $subcategory)
                                                            <label style="margin-right: 20px;cursor: pointer">
                                                                @if(isset($subcategory->name) && !empty($subcategory->name))
                                                                    <input @if($organization->subcategories->contains($subcategory->id)) checked @endif  type="checkbox" name="subcategories[{{$subcategory->id}}]" style="margin-right: 5px;position: relative;top: 2px" value="{{ $subcategory->id }}">{{ $subcategory->name }}
                                                                @else
                                                                    <span>No Sub-Category</span>
                                                                @endif
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                @endforeach
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-wrapper">
                                    <label class="main-label">Timings</label>
                                    <div class="row" style="margin-top: -5px">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Start Time</label>
                                                <input type="text" name="start_time" class="form-control" @if($organization->full_day) {{ 'disabled' }} @endif  value="{{ $organization->start_time }}">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Close Time</label>
                                                <input type="text" name="end_time" class="form-control" @if($organization->full_day) {{ 'disabled' }} @endif value="{{ $organization->end_time }}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group" style="margin-top: 24px">
                                                <label style="margin-top: 4px;cursor: pointer">
                                                    <input id="fullDay" type="checkbox" style="margin-right: 5px;position: relative;top: 2px" name="full_day" value="1" @if($organization->full_day) {{ 'checked' }} @endif>Open 24 hours
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Lunch Break From</label>
                                                <input type="text" name="lunch_break_from" class="form-control"  value="{{ $organization->lunch_break_from }}">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>To</label>
                                                <input type="text" name="lunch_break_to" class="form-control" value="{{ $organization->lunch_break_to }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label style="display: block">Working Days</label>
                                                <?php
                                                    $working_days = json_decode($organization->working_days);
                                                ?>
                                                <label style="margin-right: 15px">
                                                    <input @if(isset($working_days->sun)) checked @endif  type="checkbox" name="working_days[sun]" value="1" style="margin-right: 5px;position: relative;top: 2px">Sun
                                                </label>
                                                <label style="margin-right: 15px">
                                                    <input @if(isset($working_days->mon)) checked @endif type="checkbox" name="working_days[mon]" value="1" style="margin-right: 5px;position: relative;top: 2px">Mon
                                                </label>
                                                <label style="margin-right: 15px">
                                                    <input @if(isset($working_days->tue)) checked @endif type="checkbox" name="working_days[tue]" value="1" style="margin-right: 5px;position: relative;top: 2px">Tue
                                                </label>
                                                <label style="margin-right: 15px">
                                                    <input @if(isset($working_days->wed)) checked @endif type="checkbox" name="working_days[wed]" value="1" style="margin-right: 5px;position: relative;top: 2px">Wed
                                                </label>
                                                <label style="margin-right: 15px">
                                                    <input @if(isset($working_days->thu)) checked @endif type="checkbox" name="working_days[thu]" value="1" style="margin-right: 5px;position: relative;top: 2px">Thu
                                                </label>
                                                <label style="margin-right: 15px">
                                                    <input @if(isset($working_days->fri)) checked @endif type="checkbox" name="working_days[fri]" value="1" style="margin-right: 5px;position: relative;top: 2px">Fri
                                                </label>
                                                <label style="margin-right: 15px">
                                                    <input @if(isset($working_days->sat)) checked @endif type="checkbox" name="working_days[sat]" value="1" style="margin-right: 5px;position: relative;top: 2px">Sat
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>Stat Holydays</label>
                                                <input type="text" name="holydays" class="form-control" placeholder="Ex: 12/06/2017,13/06/2017" value="{{ $organization->holydays }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Weekend/Holyday Hours</label>
                                                <input type="text" name="holyday_starttime" class="form-control" value="{{ $organization->holyday_starttime }}">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Close Time</label>
                                                <input type="text" name="holyday_endtime" class="form-control" value="{{ $organization->holyday_endtime }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Default Wait Time</label>
                                            <input type="text" name="default_wait_time" class="form-control" value="{{ $organization->default_wait_time }}" placeholder="In min ex: 30 Min">
                                        </div>
                                    </div>
                                </div>

                                <div class="cat-wrapper">
                                    <label class="main-label">Add Organizatin Location</label>
                                    <div class="form-group">
                                        <label for="">Enter location to Search</label>
                                        <input type="text" name="google_location" id="searchmap" class="form-control" value="{{ $organization->google_location }}"><br><br>
                                        <div id="map" style="height: 50vh;width: 100%"></div>
                                    </div>
                                    <input type="hidden" name="lat" value="{{ $organization->lat }}" class="form-control" id="lat" >
                                    <input type="hidden" name="lng" value="{{ $organization->lang }}" class="form-control" id="lng">
                                </div>
                                <div class="form-group" style="margin-top: 30px">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function(){
        $('.category-change').change(function(){
            var val = $(this).val();
            console.log(val);
            $('.sub-categories-blk').find('.sub-category').hide();
            $('.sub-categories-blk').find('.category-'+val).show();
        });
        $('#fullDay').on('click',function(){
            if($(this).is(':checked')){
                $('input[name="start_time"]').val('');
                $('input[name="start_time"]').prop('disabled',true);
                $('input[name="end_time"]').val('');
                $('input[name="end_time"]').prop('disabled',true);
            }
            else{
                $('input[name="start_time"]').prop('disabled',false);;
                $('input[name="end_time"]').prop('disabled',false);;
            }
            
        });
        $('input[type=file]').on('change',function(){
            readURL($(this));
        });
    
        function readURL(input) {
          if (input[0] && input[0]['files']) {
              $.each(input[0]['files'], function (index, file) {
                  var reader = new FileReader();
                  reader.fileName = file.name;
                  reader.onload = function (e) {
                      input.parent().find('img').attr('src', e.target.result);
                  };
                  reader.readAsDataURL(file);
              });
          }
        }
    });
</script>
@endsection

@section('footerSection')

    <script>
        function initMap() {
            var lat = 12.9716;
            var lang = 77.5946;
            @if($organization->lat && $organization->lang)
                lat = {{ $organization->lat }}
                lang = {{ $organization->lang }}
            @endif
            
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: lat , lng: lang},
                zoom: 16
            });


            var marker = new google.maps.Marker({
                position: {lat: lat, lng: lang},
                map: map,
                draggable: true
            });

            var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

            google.maps.event.addListener(searchBox, 'places_changed', function(){

                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                var i, place;

                for (i =0; place = places[i]; i++) {
                    bounds.extend(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                }

                map.fitBounds(bounds);
                map.setZoom(15);
            });

            google.maps.event.addListener(marker, 'position_changed', function(){
                
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                $('#lat').val(lat);
                $('#lng').val(lng);
            });

            var input = document.getElementById('searchmap');
            google.maps.event.addDomListener(input, 'keydown', function (event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                }
            });

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxe0yAiRjHEIbRijl4mh59i3a9zEA6GBI&libraries=places&callback=initMap"
      async defer></script>
@endsection