@extends('front.layout.master')  

@section('content')
    <div class="page-section" id="products">
        <div class="desktop-two-columns-aside">
            <div class="column-aside desktop-only">
                <div class="desktop-one-colum">
                    <div class="column-categories">
                        <div class="categories-title">
                            <h3>Categories</h3>
                        </div>
                        @if(isset($product_categories))
                            @foreach($product_categories as $category_element)
                                <div class="category-button {{isset($category) && $category->id == $category_element->id ? 'active' : ''}}" data-url="{{route('front_category', ['category' => $category_element->id])}}">
                                    <h4>{{$category_element->title}}</h4>
                                </div>
                            @endforeach    
                        @endif
                    </div>                               
                </div>
            </div>  
            <div class="column-main">
                <div class="desktop-one-column">
                    <div class="header-column-main">
                        <div class="total-products">
                            <h5>Mostrando 9 de 9</h5>
                        </div>
                        <div class="filter-products">
                            <select id="filter" class="select-filter" >
                                <option> All Products</option>
                                <option class="filter-option" value="{{route('front_product_sort', ['sort' => 'asc'])}}">Low price first</option>
                                <option class="filter-option" value="{{route('front_product_sort', ['sort' => 'desc'])}}">Hight price first</option>                          
                            </select>                      
                        </div>                
                    </div>
                </div>
                <div class="products-gallery" id="">
                    @if(isset($products))
                        @foreach($products as $product)                        
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="" alt="">                        
                                </div>
                                <div class="product-title">
                                    <h2>{{$product->title}}</h2>
                                </div>
                                <div class="product-price">
                                    <h3>{{$product->base_price}}€</h3>
                                </div>
                                <div class="product-button" >
                                    <button class="product-link-button" data-url="{{route('front_product', ['product' => $product->product_id])}}">Ficha</button>
                                </div>
                            </div>                                                
                        @endforeach
                    @endif              
                </div>
            </div> 
        </div>      
@endsection  


