@extends('layouts.app')
@section('content')
<style>
    .modal-title{
        font-size: 20px;
        font-weight: 500;
    }
    .modal-header .close{
        font-size: 14px;
    }
    button:active,button:focus{
        outline: none;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline">
                    <li>
                        <input type="text" class="form-control" placeholder="Search for anything">
                    </li>
                    <li>
                        <select class="form-control">
                            <option value="health">Health</option>
                        </select>
                    </li>
                    <li>
                        <select class="form-control">
                            <option value="india">Within 5kms</option>
                        </select>
                    </li>
                    <li>
                        <select class="form-control">
                            <option value="" selected>Sort Result By</option>
                            <option value="popularity">Popularity</option>
                            <option value="distance">Distance</option></option>
                            <option value="ratings">Ratings</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="list-view-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#list">List View</a></li>
                    <li><a data-toggle="tab" href="#MapView" class="map-tab">Map & List View</a></li>
                </ul>
                <div class="tab-content">
                    <div id="list" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="category-wrapper">
                                    <a href="javascript:void(0)">{{ $category->name }}</a>
                                    <ul class="list-unstyled">

                                        @foreach ($category->subcategories as $cat)
                                            @if (count($cat) !== 0)
                                                <li><a href="{{ route('listview.subcategory', $cat->id) }}">{{ $cat->name }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8 list-wrapper">
                                @if(isset($organizations) && count($organizations))
                                @foreach($organizations as $organization)
                                <div class="list-single">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ Storage::disk('local')->url($organization->profile_pic) }}" alt="img">
                                        </div>
                                        <div class="col-md-6 description">
                                            <h2>{{ $organization->name }}</h2>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{ $organization->address1.' '.$organization->address2  }}
                                            </p>
                                            <p>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                {{ $organization->telephone  }}
                                            </p>
                                            <p>
                                                <i class="fa fa-info" aria-hidden="true"></i>
                                                @foreach($organization->subcategories as $subcategory)
                                                    {{ $subcategory->name}} @if(!$loop->last){{ ',' }}@endif
                                                @endforeach
                                                
                                            </p>
                                        </div>
                                        <div class="col-md-4 description-right">
                                            <ul class="list-unstyled">
                                                
                                                @if ($organization->start_time && $organization->end_time)
                                                    <li>Open from : {{ $organization->start_time }}</li>
                                                    <li>Open until : {{ $organization->end_time }}</li>
                                                @else
                                                    <li>Open: 24 hrs</li>
                                                @endif
                                                
                                                <li>Current wait time : {{ $organization->default_wait_time }}</li>
                                                <li>Distance : 4km</li>
                                            </ul>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#addServiceModal"  class="btn btn-success">Pick token</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                    <p>No result found</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div id="MapView" class="tab-pane fade map-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="wrapper">
                                    @if(isset($organizations) && count($organizations))
                                        @foreach($organizations as $organization)
                                        <div class="description">
                                            <h2>{{ $organization->name }}</h2>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                {{ $organization->address1.' '.$organization->address2  }}
                                            </p>
                                            <p>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                {{ $organization->telephone  }}
                                            </p>
                                            <a href="#" data-toggle="modal" data-target="#addServiceModal"  class="btn btn-success">Pick token</a>
                                        </div>
                                        @endforeach
                                    @else
                                        <p>No result found</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="map-wrapper">
                                    <div id="map" style="height: 100vh;width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade add-service-modal"  id="addServiceModal"   tabindex="-1" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
                <h6 class="modal-title">Pick token:</h6>
            </div>
            <div class="modal-body">
                <form method="POST" action="" data-parsley-validate="" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <lable>Transport</lable>
                        <select class="form-control" required>
                            <option value="" disabled selected></option>
                            <option value="">Car</option>
                            <option value="">Public</option>
                            <option value="">Transit</option>
                            <option value="">Cycle</option>
                            <option value="">Walk</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <lable>Name</lable>
                        <input type="text" name="name" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <lable>Telephone *</lable>
                        <input type="text" name="telephone" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <lable>Email</lable>
                        <input type="email" name="email" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <lable>C field 1</lable>
                        <input type="email" name="email" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <lable>C field 2</lable>
                        <input type="email" name="email" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <lable>C field 3</lable>
                        <input type="email" name="email" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <lable>Transport</lable>
                        <select class="form-control" required>
                            <option value="" disabled selected>Select</option>
                            <option value="">New Account</option>
                            <option value="">Renewal</option>
                            <option value="">Other</option>
                        </select>
                    </div>

                    <div class="btn-class" style="margin-top: 25px">
                        <button type="submit" class="btn btn-success">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 20.5937, lng: 78.9629},
            zoom: 5
        });

        @if($organizations)
            @foreach($organizations as $org)
                lat = {{ $org->lat }}
                lang = {{ $org->lang }}

                var marker = new google.maps.Marker({
                    position: {lat: lat, lng: lang},
                    map: map,
                    draggable: true
                });
            @endforeach
        @endif        
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxe0yAiRjHEIbRijl4mh59i3a9zEA6GBI&callback=initMap"
async defer></script>-->


<script>
    var map;

    function initMap() {

        var Mylat = {{ $data->latitude}}
        var Mylng = {{ $data->longitude}}

        var Mylatlng = new google.maps.LatLng(Mylat, Mylng);

        map = new google.maps.Map(document.getElementById('map'), {
            center: Mylatlng,
            zoom: 12
        });

        var marker = new google.maps.Marker({
            position: Mylatlng,
            map: map,
            title: 'You are here!'                
        }); 

        nearbySearch(Mylatlng);          
    }

    function nearbySearch(Mylatlng){
        radius = 1000;       

        @if($organizations)
            @foreach($organizations as $org)
                lat = {{ $org->lat }}
                lang = {{ $org->lang }}

                var contentString = "{{ $org->name }}";
                var Orglatlng = new google.maps.LatLng(lat, lang);
                icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';                    

                var distance = google.maps.geometry.spherical.computeDistanceBetween(Mylatlng, Orglatlng) / radius;

                if (distance <= 20) {
                    createMarker(Orglatlng, icn, contentString);
                }   
            @endforeach
        @endif             
    }

    function createMarker(latlng, icn, name){

        var infowindow = new google.maps.InfoWindow({
          content: name
        });

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: icn,
            animation: google.maps.Animation.DROP
        });

        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
    }
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxe0yAiRjHEIbRijl4mh59i3a9zEA6GBI&libraries=geometry&callback=initMap" async defer>
  </script>

<script>
$(document).ready(function(){
    $(".map-tab").on('shown.bs.tab', function(){
        var newmapcenter = map.getCenter(); 
        google.maps.event.trigger(map, 'resize');
        map.setCenter(newmapcenter);
      });
});
</script>
@endsection