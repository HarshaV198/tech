@extends('layouts.app')
@section('content')
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
                                                <li><a href="javascript:void(0)">{{ $cat->name }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8 list-wrapper">
                                <div class="list-single">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="http://via.placeholder.com/150" alt="img">
                                        </div>
                                        <div class="col-md-6 description">
                                            <h2>Name of buisness</h2>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                305, Sy 3/12 Uttarahalli Mn Rd + 
                                            </p>
                                            <p>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                9943254394
                                            </p>
                                            <p>
                                                <i class="fa fa-info" aria-hidden="true"></i>
                                                General Physian, Child care,Dental ,Family care
                                            </p>
                                        </div>
                                        <div class="col-md-4 description-right">
                                            <ul class="list-unstyled">
                                                <li>Open from : 9AM</li>
                                                <li>Open until : 9AM</li>
                                                <li>Current wait time : 34min</li>
                                                <li>Distance : 4km</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-single">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="http://via.placeholder.com/150" alt="img">
                                        </div>
                                        <div class="col-md-6 description">
                                            <h2>Name of buisness</h2>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                305, Sy 3/12 Uttarahalli Mn Rd + 
                                            </p>
                                            <p>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                9943254394
                                            </p>
                                            <p>
                                                <i class="fa fa-info" aria-hidden="true"></i>
                                                General Physian, Child care,Dental ,Family care
                                            </p>
                                        </div>
                                        <div class="col-md-4 description-right">
                                            <ul class="list-unstyled">
                                                <li>Open from : 9AM</li>
                                                <li>Open until : 9AM</li>
                                                <li>Current wait time : 34min</li>
                                                <li>Distance : 4km</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-single">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="http://via.placeholder.com/150" alt="img">
                                        </div>
                                        <div class="col-md-6 description">
                                            <h2>Name of buisness</h2>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                305, Sy 3/12 Uttarahalli Mn Rd + 
                                            </p>
                                            <p>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                9943254394
                                            </p>
                                            <p>
                                                <i class="fa fa-info" aria-hidden="true"></i>
                                                General Physian, Child care,Dental ,Family care
                                            </p>
                                        </div>
                                        <div class="col-md-4 description-right">
                                            <ul class="list-unstyled">
                                                <li>Open from : 9AM</li>
                                                <li>Open until : 9AM</li>
                                                <li>Current wait time : 34min</li>
                                                <li>Distance : 4km</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-single">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="http://via.placeholder.com/150" alt="img">
                                        </div>
                                        <div class="col-md-6 description">
                                            <h2>Name of buisness</h2>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                305, Sy 3/12 Uttarahalli Mn Rd + 
                                            </p>
                                            <p>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                9943254394
                                            </p>
                                            <p>
                                                <i class="fa fa-info" aria-hidden="true"></i>
                                                General Physian, Child care,Dental ,Family care
                                            </p>
                                        </div>
                                        <div class="col-md-4 description-right">
                                            <ul class="list-unstyled">
                                                <li>Open from : 9AM</li>
                                                <li>Open until : 9AM</li>
                                                <li>Current wait time : 34min</li>
                                                <li>Distance : 4km</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="MapView" class="tab-pane fade map-tab">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="wrapper">
                                    <div class="description">
                                        <h2>Name of buisness</h2>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <p>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            305, Sy 3/12 Uttarahalli Mn Rd + 
                                        </p>
                                        <p>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            9943254394
                                        </p>
                                        <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                    </div>
                                    <div class="description">
                                        <h2>Name of buisness</h2>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <p>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            305, Sy 3/12 Uttarahalli Mn Rd + 
                                        </p>
                                        <p>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            9943254394
                                        </p>
                                        <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                    </div>
                                    <div class="description">
                                            <h2>Name of buisness</h2>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                305, Sy 3/12 Uttarahalli Mn Rd + 
                                            </p>
                                            <p>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                9943254394
                                            </p>
                                            <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                        </div>
                                        <div class="description">
                                                <h2>Name of buisness</h2>
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                </ul>
                                                <p>
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    305, Sy 3/12 Uttarahalli Mn Rd + 
                                                </p>
                                                <p>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    9943254394
                                                </p>
                                                <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                            </div>
                                            <div class="description">
                                                    <h2>Name of buisness</h2>
                                                    <ul class="list-inline">
                                                        <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star active-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                    </ul>
                                                    <p>
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                        305, Sy 3/12 Uttarahalli Mn Rd + 
                                                    </p>
                                                    <p>
                                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                                        9943254394
                                                    </p>
                                                    <a href="javascript:void(0)" class="btn btn-success">Pick token</a>
                                                </div>
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
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 12.9716, lng: 77.5946},
        zoom: 7
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxe0yAiRjHEIbRijl4mh59i3a9zEA6GBI&callback=initMap"
  async defer></script>
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