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
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="category-section">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="row category-row">
                    <div class="col-md-4 category-single">
                        <a href="javascript:void(0)">Health</a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">Gynacologist</a></li>
                            <li><a href="javascript:void(0)">Pediatritian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 category-single">
                        <a href="javascript:void(0)">Food</a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">Gynacologist</a></li>
                            <li><a href="javascript:void(0)">Pediatritian</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 category-single">
                        <a href="javascript:void(0)">Fitness</a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">Gynacologist</a></li>
                            <li><a href="javascript:void(0)">Pediatritian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 category-single">
                        <a href="javascript:void(0)">Styling</a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">Gynacologist</a></li>
                            <li><a href="javascript:void(0)">Pediatritian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 category-single">
                        <a href="javascript:void(0)">Government</a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">Gynacologist</a></li>
                            <li><a href="javascript:void(0)">Pediatritian</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 category-single">
                        <a href="javascript:void(0)">Banking/Finacial</a>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">General Physian</a></li>
                            <li><a href="javascript:void(0)">Gynacologist</a></li>
                            <li><a href="javascript:void(0)">Pediatritian</a></li>
                            <li><a href="javascript:void(0)">General Physian</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection