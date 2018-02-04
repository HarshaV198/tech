@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2">
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
            <div class="col-md-offset-2">
                <div class="row category-row">

                    @if (count($categories) !== 0)
                        @foreach ($categories as $category)
                            <div class="col-md-4 category-single">
                                <a href="{{ route('listview.category', $category->id) }}">{{ $category->name }}</a>
                                <ul class="list-unstyled">
                                    @if (count($category->subcategories) !== 0)
                                        @foreach ($category->subcategories as $subcategory)
                                            <li><a href="{{ route('listview.subcategory', $subcategory->id) }}">{{ $subcategory->name }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
