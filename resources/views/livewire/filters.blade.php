<div>
    <!-- Sidebar-->
    <div class="cz-sidebar rounded-lg box-shadow-lg" id="shop-sidebar">
        <div class="cz-sidebar-header box-shadow-sm">
            <button class="close ml-auto" type="button" data-dismiss="sidebar" aria-label="Close"><span class="d-inline-block font-size-xs font-weight-normal align-middle">Close sidebar</span><span class="d-inline-block align-middle ml-2" aria-hidden="true">&times;</span></button>
        </div>
        <div class="cz-sidebar-body">
            <!-- Categories-->
            <div class="widget widget-categories mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Categorías</h3>
                <div class="accordion mt-n1" id="shop-categories">
                    @foreach ($categories as $category)
                        <div class="card">
                            <div class="card-header">
                                <h3 class="accordion-heading"><a class="collapsed" href="#{{$category->code}}" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="shoes">{{$category->name}}<span class="accordion-indicator"></span></a></h3>
                            </div>
                            <div class="collapse" id="{{$category->code}}" data-parent="#shop-categories">
                                <div class="card-body">
                                    <div class="widget widget-links cz-filter">
                                        <div class="input-group-overlay input-group-sm mb-2">
                                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Buscar">
                                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                                        </div>
                                        <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="{{ url('search-products/'.$category->id) }}"><span class="cz-filter-item-text">Ver todos</span><span class="font-size-xs text-muted ml-3">{{$category->products->count()}}</span></a></li>
                                            @if($category->product_class)
                                                @foreach($category->product_class as $product_class)
                                                    <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">{{$product_class->name}}</span><span class="font-size-xs text-muted ml-3"></span></a></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--
                        <div class="card">
                            <div class="card-header">
                                <h3 class="accordion-heading"><a class="collapsed" href="#shoes" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="shoes">Shoes<span class="accordion-indicator"></span></a></h3>
                            </div>
                            <div class="collapse" id="shoes" data-parent="#shop-categories">
                                <div class="card-body">
                                    <div class="widget widget-links cz-filter">
                                        <div class="input-group-overlay input-group-sm mb-2">
                                            <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                                            <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                                        </div>
                                        <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">View all</span><span class="font-size-xs text-muted ml-3">1,953</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Pumps &amp; High Heels</span><span class="font-size-xs text-muted ml-3">247</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Ballerinas &amp; Flats</span><span class="font-size-xs text-muted ml-3">156</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sandals</span><span class="font-size-xs text-muted ml-3">310</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Sneakers</span><span class="font-size-xs text-muted ml-3">402</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Boots</span><span class="font-size-xs text-muted ml-3">393</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Ankle Boots</span><span class="font-size-xs text-muted ml-3">50</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Loafers</span><span class="font-size-xs text-muted ml-3">93</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Slip-on</span><span class="font-size-xs text-muted ml-3">122</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Flip Flops</span><span class="font-size-xs text-muted ml-3">116</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Clogs &amp; Mules</span><span class="font-size-xs text-muted ml-3">24</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Athletic Shoes</span><span class="font-size-xs text-muted ml-3">31</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Oxfords</span><span class="font-size-xs text-muted ml-3">9</span></a></li>
                                            <li class="widget-list-item cz-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="cz-filter-item-text">Smart Shoes</span><span class="font-size-xs text-muted ml-3">18</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    -->
                </div>
            </div>
            <!-- Price range-->
            <div class="widget mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Precio</h3>
                <div class="cz-range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                    <div class="cz-range-slider-ui"></div>
                    <div class="d-flex pb-1">
                        <div class="w-50 pr-2 mr-2">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input class="form-control cz-range-slider-value-min" type="text">
                            </div>
                        </div>
                        <div class="w-50 pl-2">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input class="form-control cz-range-slider-value-max" type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filter by Brand-->
            <div class="widget cz-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Marca</h3>
                <div class="input-group-overlay input-group-sm mb-2">
                    <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                    <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                </div>
                <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="adidas">
                            <label class="custom-control-label cz-filter-item-text" for="adidas">Adidas</label>
                        </div><span class="font-size-xs text-muted">425</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="ataylor">
                            <label class="custom-control-label cz-filter-item-text" for="ataylor">Ann Taylor</label>
                        </div><span class="font-size-xs text-muted">15</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="armani">
                            <label class="custom-control-label cz-filter-item-text" for="armani">Armani</label>
                        </div><span class="font-size-xs text-muted">18</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="banana">
                            <label class="custom-control-label cz-filter-item-text" for="banana">Banana Republic</label>
                        </div><span class="font-size-xs text-muted">103</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="bilabong">
                            <label class="custom-control-label cz-filter-item-text" for="bilabong">Bilabong</label>
                        </div><span class="font-size-xs text-muted">27</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="birkenstock">
                            <label class="custom-control-label cz-filter-item-text" for="birkenstock">Birkenstock</label>
                        </div><span class="font-size-xs text-muted">10</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="klein">
                            <label class="custom-control-label cz-filter-item-text" for="klein">Calvin Klein</label>
                        </div><span class="font-size-xs text-muted">365</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="columbia">
                            <label class="custom-control-label cz-filter-item-text" for="columbia">Columbia</label>
                        </div><span class="font-size-xs text-muted">508</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="converse">
                            <label class="custom-control-label cz-filter-item-text" for="converse">Converse</label>
                        </div><span class="font-size-xs text-muted">176</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="dockers">
                            <label class="custom-control-label cz-filter-item-text" for="dockers">Dockers</label>
                        </div><span class="font-size-xs text-muted">54</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="fruit">
                            <label class="custom-control-label cz-filter-item-text" for="fruit">Fruit of the Loom</label>
                        </div><span class="font-size-xs text-muted">739</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="hanes">
                            <label class="custom-control-label cz-filter-item-text" for="hanes">Hanes</label>
                        </div><span class="font-size-xs text-muted">92</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="choo">
                            <label class="custom-control-label cz-filter-item-text" for="choo">Jimmy Choo</label>
                        </div><span class="font-size-xs text-muted">17</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="levis">
                            <label class="custom-control-label cz-filter-item-text" for="levis">Levi's</label>
                        </div><span class="font-size-xs text-muted">361</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="lee">
                            <label class="custom-control-label cz-filter-item-text" for="lee">Lee</label>
                        </div><span class="font-size-xs text-muted">264</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="wearhouse">
                            <label class="custom-control-label cz-filter-item-text" for="wearhouse">Men's Wearhouse</label>
                        </div><span class="font-size-xs text-muted">75</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="newbalance">
                            <label class="custom-control-label cz-filter-item-text" for="newbalance">New Balance</label>
                        </div><span class="font-size-xs text-muted">218</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="nike">
                            <label class="custom-control-label cz-filter-item-text" for="nike">Nike</label>
                        </div><span class="font-size-xs text-muted">810</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="navy">
                            <label class="custom-control-label cz-filter-item-text" for="navy">Old Navy</label>
                        </div><span class="font-size-xs text-muted">147</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="polo">
                            <label class="custom-control-label cz-filter-item-text" for="polo">Polo Ralph Lauren</label>
                        </div><span class="font-size-xs text-muted">64</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="puma">
                            <label class="custom-control-label cz-filter-item-text" for="puma">Puma</label>
                        </div><span class="font-size-xs text-muted">370</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="reebok">
                            <label class="custom-control-label cz-filter-item-text" for="reebok">Reebok</label>
                        </div><span class="font-size-xs text-muted">506</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="skechers">
                            <label class="custom-control-label cz-filter-item-text" for="skechers">Skechers</label>
                        </div><span class="font-size-xs text-muted">209</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="hilfiger">
                            <label class="custom-control-label cz-filter-item-text" for="hilfiger">Tommy Hilfiger</label>
                        </div><span class="font-size-xs text-muted">487</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="armour">
                            <label class="custom-control-label cz-filter-item-text" for="armour">Under Armour</label>
                        </div><span class="font-size-xs text-muted">90</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="urban">
                            <label class="custom-control-label cz-filter-item-text" for="urban">Urban Outfitters</label>
                        </div><span class="font-size-xs text-muted">152</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="vsecret">
                            <label class="custom-control-label cz-filter-item-text" for="vsecret">Victoria's Secret</label>
                        </div><span class="font-size-xs text-muted">238</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="wolverine">
                            <label class="custom-control-label cz-filter-item-text" for="wolverine">Wolverine</label>
                        </div><span class="font-size-xs text-muted">29</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="wrangler">
                            <label class="custom-control-label cz-filter-item-text" for="wrangler">Wrangler</label>
                        </div><span class="font-size-xs text-muted">115</span>
                    </li>
                </ul>
            </div>
            <!-- Filter by Size-->
            <div class="widget cz-filter mb-4 pb-4 border-bottom">
                <h3 class="widget-title">Talla</h3>
                <div class="input-group-overlay input-group-sm mb-2">
                    <input class="cz-filter-search form-control form-control-sm appended-form-control" type="text" placeholder="Search">
                    <div class="input-group-append-overlay"><span class="input-group-text"><i class="czi-search"></i></span></div>
                </div>
                <ul class="widget-list cz-filter-list list-unstyled pt-1" style="max-height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-xs">
                            <label class="custom-control-label cz-filter-item-text" for="size-xs">XS</label>
                        </div><span class="font-size-xs text-muted">34</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-s">
                            <label class="custom-control-label cz-filter-item-text" for="size-s">S</label>
                        </div><span class="font-size-xs text-muted">57</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-m">
                            <label class="custom-control-label cz-filter-item-text" for="size-m">M</label>
                        </div><span class="font-size-xs text-muted">198</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-l">
                            <label class="custom-control-label cz-filter-item-text" for="size-l">L</label>
                        </div><span class="font-size-xs text-muted">72</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-xl">
                            <label class="custom-control-label cz-filter-item-text" for="size-xl">XL</label>
                        </div><span class="font-size-xs text-muted">46</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-39">
                            <label class="custom-control-label cz-filter-item-text" for="size-39">39</label>
                        </div><span class="font-size-xs text-muted">112</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-40">
                            <label class="custom-control-label cz-filter-item-text" for="size-40">40</label>
                        </div><span class="font-size-xs text-muted">85</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-41">
                            <label class="custom-control-label cz-filter-item-text" for="size-40">41</label>
                        </div><span class="font-size-xs text-muted">210</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-42">
                            <label class="custom-control-label cz-filter-item-text" for="size-42">42</label>
                        </div><span class="font-size-xs text-muted">57</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-43">
                            <label class="custom-control-label cz-filter-item-text" for="size-43">43</label>
                        </div><span class="font-size-xs text-muted">30</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-44">
                            <label class="custom-control-label cz-filter-item-text" for="size-44">44</label>
                        </div><span class="font-size-xs text-muted">61</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-45">
                            <label class="custom-control-label cz-filter-item-text" for="size-45">45</label>
                        </div><span class="font-size-xs text-muted">23</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-46">
                            <label class="custom-control-label cz-filter-item-text" for="size-46">46</label>
                        </div><span class="font-size-xs text-muted">19</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-47">
                            <label class="custom-control-label cz-filter-item-text" for="size-47">47</label>
                        </div><span class="font-size-xs text-muted">15</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-48">
                            <label class="custom-control-label cz-filter-item-text" for="size-48">48</label>
                        </div><span class="font-size-xs text-muted">12</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center mb-1">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-49">
                            <label class="custom-control-label cz-filter-item-text" for="size-49">49</label>
                        </div><span class="font-size-xs text-muted">8</span>
                    </li>
                    <li class="cz-filter-item d-flex justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="size-50">
                            <label class="custom-control-label cz-filter-item-text" for="size-50">50</label>
                        </div><span class="font-size-xs text-muted">6</span>
                    </li>
                </ul>
            </div>
            <!-- Filter by Color-->
            <div class="widget">
                <h3 class="widget-title">Color</h3>
                <div class="d-flex flex-wrap">
                    <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="custom-control-input" type="checkbox" id="color-blue-gray">
                        <label class="custom-option-label rounded-circle" for="color-blue-gray"><span class="custom-option-color rounded-circle" style="background-color: #b3c8db;"></span></label>
                        <label class="d-block font-size-xs text-muted mt-n1" for="color-blue-gray">Blue-gray</label>
                    </div>
                    <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="custom-control-input" type="checkbox" id="color-burgundy">
                        <label class="custom-option-label rounded-circle" for="color-burgundy"><span class="custom-option-color rounded-circle" style="background-color: #ca7295;"></span></label>
                        <label class="d-block font-size-xs text-muted mt-n1" for="color-burgundy">Burgundy</label>
                    </div>
                    <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="custom-control-input" type="checkbox" id="color-teal">
                        <label class="custom-option-label rounded-circle" for="color-teal"><span class="custom-option-color rounded-circle" style="background-color: #91c2c3;"></span></label>
                        <label class="d-block font-size-xs text-muted mt-n1" for="color-teal">Teal</label>
                    </div>
                    <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="custom-control-input" type="checkbox" id="color-brown">
                        <label class="custom-option-label rounded-circle" for="color-brown"><span class="custom-option-color rounded-circle" style="background-color: #9a8480;"></span></label>
                        <label class="d-block font-size-xs text-muted mt-n1" for="color-brown">Brown</label>
                    </div>
                    <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="custom-control-input" type="checkbox" id="color-coral-red">
                        <label class="custom-option-label rounded-circle" for="color-coral-red"><span class="custom-option-color rounded-circle" style="background-color: #ff7072;"></span></label>
                        <label class="d-block font-size-xs text-muted mt-n1" for="color-coral-red">Coral red</label>
                    </div>
                    <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="custom-control-input" type="checkbox" id="color-navy">
                        <label class="custom-option-label rounded-circle" for="color-navy"><span class="custom-option-color rounded-circle" style="background-color: #696dc8;"></span></label>
                        <label class="d-block font-size-xs text-muted mt-n1" for="color-navy">Navy</label>
                    </div>
                    <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="custom-control-input" type="checkbox" id="color-charcoal">
                        <label class="custom-option-label rounded-circle" for="color-charcoal"><span class="custom-option-color rounded-circle" style="background-color: #4e4d4d;"></span></label>
                        <label class="d-block font-size-xs text-muted mt-n1" for="color-charcoal">Charcoal</label>
                    </div>
                    <div class="custom-control custom-option text-center mb-2 mx-1" style="width: 4rem;">
                        <input class="custom-control-input" type="checkbox" id="color-sky-blue">
                        <label class="custom-option-label rounded-circle" for="color-sky-blue"><span class="custom-option-color rounded-circle" style="background-color: #8bcdf5;"></span></label>
                        <label class="d-block font-size-xs text-muted mt-n1" for="color-sky-blue">Sky blue</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>