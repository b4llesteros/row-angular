@extends('front.layout.master')   

@section('content')

        <main>
            <div class="page-section" id="product">
                <div class="desktop-two-columns mobile-one-column mobile-one-main-column">
                    <div class="column left-column">
                        <div class="desktop-one-column mobile-one-column">
                            <div class="column">
                                <div class="product-image">
                                    <img src="" alt="">
                                </div>
                            </div>    
                        </div>
                        <div class="desktop-five-columns mobile-four-columns">
                            <div class="column">
                                <div class="product-image-little">
                                    <img src="" alt="">
                                </div>                            
                            </div> 
                            <div class="column">
                                <div class="product-image-little">
                                    <img src="" alt="">
                                </div>                            
                            </div> 
                            <div class="column">
                                <div class="product-image-little">
                                    <img src="" alt="">
                                </div>                            
                            </div> 
                            <div class="column">
                                <div class="product-image-little">
                                    <img src="" alt="">
                                </div>                            
                            </div> 
                            <div class="column">
                                <div class="product-image-little">
                                    <img src="" alt="">
                                </div>                            
                            </div> 
                        </div>                
                    </div>

                    <div class="form-container">
                        <form action="{{route("front_cart_store")}}" id="form" class="cart-form">
                            <input type="hidden" name="price_id" value="{{isset($product->prices->first()->id) ? $product->prices->first()->id:''}}">   
                            <div class="column right-column">
                                <div class="desktop-one-column mobile-one-column">
                                    <div class="column">
                                        <div class="product-title">
                                            <h1>{{$product->title}}</h1>
                                        </div>                            
                                    </div>
                                </div>

                                <div class="desktop-one-column mobile-one-column">
                                    <div class="column">
                                        <div class="product-category">
                                            <h3>{{$product->category->title}}</h3>
                                        </div>                            
                                    </div>
                                </div>

                                <div class="desktop-one-column mobile-one-column">
                                    <div class="column">
                                        <div class="product-price">
                                            <h2>{{$product->prices->first()->base_price}}</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="desktop-one-column mobile-one-column">
                                    <div class="column">
                                        <div class="product-description">
                                            <h3>{!!$product->description!!}</h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="desktop-one-column mobile-one-column">
                                    <div class="column">
                                        <div class="column-quantity">
                                            <div class="plus-minus-container">
                                                <div class="quantity-form-button">
                                                    <button  class="plus-minus-button" data-type="minus">-</button>
                                                </div>
                                                <div class="quantity-input">
                                                    <input name="amount" id="amount" class="plus-minus-input" type="number" value="1" data-min="0">
                                                </div>
                                                <div class="quantity-form-button">
                                                    <button  class="plus-minus-button" data-type="plus"><span>+</span></button>
                                                </div>  
                                            </div>                         
                                        </div>                               
                                    </div>    
                                </div>

                                <div class="desktop-one-column mobile-one-column">
                                    <div class="column">
                                        <div class="container">
                                            <ul class="container-tabs">
                                                <li class="tab tab--active" data-tab="description" >Descripción</li>
                                                <li class="tab" data-tab="specs">Característica</li>
                                                <li class="tab" data-tab="opinions">Opiniones</li>
                                            </ul>
                                        </div>
                                        <div class="container-content">
                                            <div class="content content--active" data-tab="description">
                                                <span>{!!$product->description!!}</span>
                                            </div>
                                            <div class="content" data-tab="specs">
                                                <span>{!!$product->spec!!}</span>
                                            </div>
                                            <div class="content" data-tab="opinions">
                                                <span>{!!$product->opinions!!}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="desktop-one-column mobile-one-column">
                                    <div class="column">
                                        <div class="desktop-one-column mobile-one-column mobile-one-column-buttons">
                                            <div class="column">
                                                <div class="add-button">
                                                    <button class="add-to-cart">Añadir a la cesta</button>
                                                </div>
                                                <div class="buy-button">
                                                    <button>Comprar</button>
                                                </div>
                                            </div>                                         
                                        </div>
                                    </div>                    
                                </div>
                                <div class="desktop-one-column">
                                    <div class="column">
                                        <div class="add-button-notification">
                                            <div class="add-button-notification-svg">
                                                <svg viewBox="0 0 24 24">
                                                    <path d="M9 20C9 21.11 8.11 22 7 22S5 21.11 5 20 5.9 18 7 18 9 18.9 9 20M17 18C15.9 18 15 18.9 15 20S15.9 22 17 22 19 21.11 19 20 18.11 18 17 18M7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L21.16 4.96L19.42 4H19.41L18.31 6L15.55 11H8.53L8.4 10.73L6.16 6L5.21 4L4.27 2H1V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.11 5.9 17 7 17H19V15H7.42C7.29 15 7.17 14.89 7.17 14.75M18 2.76L16.59 1.34L11.75 6.18L9.16 3.59L7.75 5L11.75 9L18 2.76Z" />
                                                </svg>
                                            </div>
                                            <div class="add-button-notification-title">
                                                <span>Añadido a la cesta</span>
                                            </div>                                
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>         
                </div>  
            </div>       
        </main>
        
@endsection