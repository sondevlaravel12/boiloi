@extends('frontend.main_master')
@section('title')
category
@endsection
@section('content')
<div class="row">
    <!-- ============================================== CONTENT ============================================== -->
    <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">

    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
        {{-- tabs --}}

        <div class="more-info-tab clearfix ">

            {{-- <nav class="nav nav-tabs nav-tab-line pull-left">
                <div class="container-fluid">
                  <ul class="nav navbar-nav ">
                    <li class=""><a href="{{ route('categories.products.index') }}">Tat ca san pham</a></li>
                    @foreach ($categories as $cat)
                    <li class="{{ $cat->id==$category->id?'active':'' }}"><a href="{{ route('categories.products.show',$cat) }}">{{ $cat->name }}</a></li>
                    @endforeach

                  </ul>
                </div>
            </nav> --}}
            @include('frontend.category._head_menu')
            {{-- <form class="navbar-form navbar-right" action="/action_page.php">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form> --}}
        </div>
        {{-- end tabs --}}

        {{-- content of tabs --}}
        <div class="tab-content outer-top-xs">


                {{--fillter, sort and paginate tab header--}}
                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-12 col-md-4">
                            <div class="filter-tabs">
                                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Xem theo luới</a> </li>
                                <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>Xem theo list</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-sm-6 col-md-4 text-right pull-right">
                            <div class="pagination-container">
                                {{ $products->links('frontend.partial.custom_paginate')  }}
                            </div>
                            <!-- /.pagination-container -->
                          </div>
                    </div>
                </div>
                {{--end fillter, sort and paginate tab header--}}

                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">

                        {{-- filter as grid --}}
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-sm-6 col-md-4 wow fadeInUp">
                                        <div class="products">
                                        <div class="product">
                                            <div class="product-image">
                                            <div class="image"> <a href="{{ route('products.show', [$product, $product->slug]) }}"><img  src="{{ $product->getFirstImageUrl('medium') }}" alt=""></a> </div>
                                            <!-- /.image -->
                                            </div>
                                            <!-- /.product-image -->

                                            <div class="product-info text-left">
                                            <h3 class="name"><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="description"></div>
                                            <div class="product-price"> <span class="price"> {{ $product->discount_price }} </span> <span class="price-before-discount">{{ $product->base_price }}</span> </div>
                                            <!-- /.product-price -->

                                            </div>
                                            <!-- /.product-info -->
                                            <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Thêm vào giỏ hàng</button>
                                                </li>
                                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                </ul>
                                            </div>
                                            <!-- /.action -->
                                            </div>
                                            <!-- /.cart -->
                                        </div>
                                        <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    @endforeach


                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.category-product -->

                        </div>
                        {{-- end filter as grid --}}

                        {{-- filter as list --}}
                        <div class="tab-pane "  id="list-container">
                            <div class="category-product">
                                @foreach ($products as $product)
                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">
                                        <div class="product-list product">
                                        <div class="row product-list-row">
                                            <div class="col col-sm-4 col-lg-4">
                                            <div class="product-image">
                                                <div class="image"> <img src="{{ $product->getFirstImageUrl('medium') }}" alt=""> </div>
                                            </div>
                                            <!-- /.product-image -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col col-sm-8 col-lg-8">
                                            <div class="product-info">
                                                <h3 class="name"><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h3>
                                                <div class="rating rateit-small"></div>
                                                <div class="product-price"> <span class="price"> {{ $product->discount_price }} </span> <span class="price-before-discount">{{ $product->base_price }}</span> </div>
                                                <!-- /.product-price -->
                                                <div class="description m-t-10">{{ $product->short_description }}</div>
                                                <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                        <button class="btn btn-primary cart-btn" type="button">Thêm vào giỏ hàng</button>
                                                    </li>
                                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                                    </ul>
                                                </div>
                                                <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->

                                            </div>
                                            <!-- /.product-info -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.product-list-row -->
                                        <div class="tag new"><span>new</span></div>
                                        </div>
                                        <!-- /.product-list -->
                                    </div>
                                    <!-- /.products -->
                                </div>
                                @endforeach


                            </div>
                        </div>
                        {{-- end filter as list --}}

                    </div>
                    {{-- paginate in footer box --}}
                    <div class="clearfix filters-container">
                        <div class="text-right">
                        <div class="pagination-container">
                            {{ $products->links('frontend.partial.custom_paginate')  }}
                        </div>
                        <!-- /.pagination-container --> </div>
                        <!-- /.text-right -->
                    </div>
                    {{-- end paginate in footer box --}}
                </div>

        </div>
    </div>

    </div>
        <!-- /.tab-content -->
</div>
@include('frontend.body.brands')
@endsection