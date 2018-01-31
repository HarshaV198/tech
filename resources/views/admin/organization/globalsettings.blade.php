@extends('admin/layouts/app')

@section('main-content')

<style>
    .cat-wrapper{
        margin-top: 20px;
        border: 1px solid #ddd;
        padding: 15px;
    }
    .main-label{
        position: relative;
        top: -35px;
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
                            <form action="" type="POST">
                                <div class="cat-wrapper">
                                    <label class="main-label">Address</label>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2 text-right">
                                                    <label>Address 1</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="address1" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Address 2</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="address2" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2  text-right">
                                                    <label>Street</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="street" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>City</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="city" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2  text-right">
                                                    <label>Province/State</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="state" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Postal Code</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="city" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-offset-6 col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Coutry</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="country" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-wrapper">
                                    <label class="main-label">Buisness Profile</label>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-2 text-right">
                                                    <label>Telephone</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="telephone" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Website</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="website" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1  text-right">
                                                    <label>Info on Services</label>
                                                </div>
                                                <div class="col-md-11">
                                                    <textarea rows="4" style="width: 100%;overflow: hidden" name="service_info"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1  text-right">
                                                    <label>Profile Photo</label>
                                                </div>
                                                <div class="col-md-11">
                                                    <input type="file" accept=".png, .jpg, .jpeg" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1  text-right">
                                                    <label>Premium Ad Banner</label>
                                                </div>
                                                <div class="col-md-11">
                                                    <input type="file" accept=".png, .jpg, .jpeg" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-1  text-right">
                                                    <label>Classic Ad Banner</label>
                                                </div>
                                                <div class="col-md-11">
                                                    <input type="file" accept=".png, .jpg, .jpeg" class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-wrapper">
                                    <label class="main-label">Timings</label>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Start Time</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="telephone" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Close Time</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="website" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <label style="margin-top: 4px;cursor: pointer">
                                                    <input type="checkbox" style="margin-right: 5px;position: relative;top: 2px">Open 24 hours
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Lunch Break From</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="telephone" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>To</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="website" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-12">
                                            <label style="width: 10.4%;text-align: right;padding-left: 15px;padding-right: 15px">Working Days</label>
                                            <label style="margin-right: 15px">
                                                <input type="checkbox" name="sun" style="margin-right: 5px;position: relative;top: 2px">Sun
                                            </label>
                                            <label style="margin-right: 15px">
                                                <input type="checkbox" name="sun" style="margin-right: 5px;position: relative;top: 2px">Mon
                                            </label>
                                            <label style="margin-right: 15px">
                                                <input type="checkbox" name="sun" style="margin-right: 5px;position: relative;top: 2px">Tue
                                            </label>
                                            <label style="margin-right: 15px">
                                                <input type="checkbox" name="sun" style="margin-right: 5px;position: relative;top: 2px">Wed
                                            </label>
                                            <label style="margin-right: 15px">
                                                <input type="checkbox" name="sun" style="margin-right: 5px;position: relative;top: 2px">Thu
                                            </label>
                                            <label style="margin-right: 15px">
                                                <input type="checkbox" name="sun" style="margin-right: 5px;position: relative;top: 2px">Fri
                                            </label>
                                            <label style="margin-right: 15px">
                                                <input type="checkbox" name="sun" style="margin-right: 5px;position: relative;top: 2px">Sat
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-12">
                                            <label style="width: 10.4%;text-align: right;padding-left: 15px;padding-right: 15px">Working Days</label>
                                            <input type="text" name="sun" class="form-control" style="width: 72.8%;display:inline-block">
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Weekend/Holyday Hours</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="telephone" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-3 text-right">
                                                    <label>Close Time</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" name="website" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="margin-top: -5px">
                                        <div class="col-md-12">
                                            <label style="width: 10.4%;text-align: right;padding-left: 15px;padding-right: 15px">Default Wait Time</label>
                                            <input type="text" name="sun" class="form-control" style="width: 15%;display:inline-block;position: relative;top: -8px">
                                        </div>
                                    </div>
                                </div>

                                <div class="cat-wrapper">
                                    <label class="main-label">Add Organizartin Location</label>
                                    <div class="form-group">
                                        <label for="">Organization Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Enter location to Search</label>
                                        <input type="text" name="" id="searchmap" class="form-control"><br><br>
                                        <div id="map" style="height: 50vh;width: 100%"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Lat</label>
                                        <input type="text" name="lat" class="form-control" id="lat">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Lng</label>
                                        <input type="text" name="lng" class="form-control" id="lng">
                                    </div>
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
@endsection

@section('footerSection')

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 12.9716, lng: 77.5946},
                zoom: 7
            });


            var marker = new google.maps.Marker({
                position: {lat: 12.9716, lng: 77.5946},
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
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxe0yAiRjHEIbRijl4mh59i3a9zEA6GBI&libraries=places&callback=initMap"
      async defer></script>
@endsection