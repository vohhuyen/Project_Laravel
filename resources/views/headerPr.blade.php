<header class="header">
        <div class="style_full">
            <nav class="nav_bar grid">
                <ul class="nav_bar-item-left ps-0 disnone-sm">
                    <li class="py-3 pe-4">
                        <button onclick="myFunction()" class="dropbtn dropdown-toggle">Category</button>
                        <div id="myDropdown" class="dropdown-content">
                            <div class="toolbar">
                                <div>
                                    <a data-toggle="modal" data-target="#error" class="dropdown-item"><b>Products</b></a>
                                    <a data-toggle="modal" data-target="#error" class="dropdown-item"><b>Trending now</b></a>
                                    <a data-toggle="modal" data-target="#error" class="dropdown-item"><b>Licensed merch</b></a>
                                    <a data-toggle="modal" data-target="#error" class="dropdown-item"><b>All kid's merch</b></a>
                                </div>
                                @foreach($category as $category)
                                <div>
                                    <b>{{$category->nameCategoryPr}}</b>
                                    @foreach($category->category_Pr_Detail as $detail)
                                    <a class="dropdown-item" href="{{route('categoryPr', $detail->idCategoryPrDetail)}}">{{$detail->nameCategoryPrDetail}}</a>
                                    @endforeach
                                    <b>All for {{$category->nameCategoryPr}}</b>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    <li class="py-3 px-4 nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#error">Blog</a>
                    </li>
                    <li class="py-3 px-4 nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#error">How it work?</a>
                    </li>
                    <li class="py-3 px-4 nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-btn">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" data-toggle="modal" data-target="#error">Order In Bulk</a></li>
                            <li><a class="dropdown-item" data-toggle="modal" data-target="#error">Experts Program</a></li>
                        </ul>
                    </li>
                    <li class="py-3 px-4 nav-item dropdown ">
                        <a class="nav-link dropdown-toggle dropdown-btn">Need help</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" data-toggle="modal" data-target="#error">Help center</a></li>
                            <li><a class="dropdown-item" data-toggle="modal" data-target="#error">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                
                
                <div id="mySidepanel" class="sidepanel disnone-all">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <li class="py-3"> 
                        <button class="dropdown-btn">Category 
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                        @foreach($categorys as $categorys)
                            <div>
                                <button class="dropdown-btn">{{$categorys->nameCategoryPr}}
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                     @foreach($categorys->category_Pr_Detail as $detail)
                                    <a class="dropdown-item" data-toggle="modal" data-target="#error">{{$detail->nameCategoryPrDetail}}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </li>
                    <li class="py-3 px-4 nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#error">Blog</a>
                    </li>
                    <li class="py-3 px-4 nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#error">How it work?</a>
                    </li>
                    <li class="py-3">
                        <div>
                            <button class="dropdown-btn">Services
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <a class="dropdown-item" data-toggle="modal" data-target="#error">Order In Bulk</a>
                                <a class="dropdown-item" data-toggle="modal" data-target="#error">Experts Program</a>
                            </div>
                        </div>
                    </li>
                    <li class="py-3">
                        <div>
                            <button class="dropdown-btn">Need help
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-container">
                                <a class="dropdown-item" data-toggle="modal" data-target="#error">Help center</a>
                                <a class="dropdown-item" data-toggle="modal" data-target="#error">Contact</a>
                            </div>
                        </div>
                    </li>
                </div>
                <button class="openbtn disnone-all" onclick="openNav()">☰</button> 
                <ul class="nav_bar-item-right">
                @if(Session::has('user'))
                    <div class="dropdown">
                        <!-- <a data-toggle="modal" data-target="#error" style="color: black; text-decoration: none;"> -->
                            <button class="btn-login px-3 dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: white; color: black; width: auto;">
                                <i class="fa-solid fa-user"></i>  {{Session('user')->Name}}
                                <span class="caret"></span></button>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('page-user') }}"><i class="fa-solid fa-list-check mx-2"></i> Order</a></li>
                                @if($shop == null)
                                <li data-toggle="modal" data-target="#btncreateshop"><a><i class="fa-solid fa-store mx-2"></i> Create shop</a></li>
                                @else
                                <li><a href="{{ route('PersionalPage', Session('user')->idUser) }}"><i class="fa-solid fa-store mx-2"></i> Your shop</a></li>
                                <li><a href="{{ route('analysic') }}"><i class="fa-solid fa-chart-column mx-2"></i> Revenue</a></li>
                                @endif
                            </ul>
                        <!-- </a> -->
                    </div>
                    <a href="{{ route('logout') }}" style="color: black; text-decoration: none;">
                        <button class="btn-login">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>  Logout
                        </button>
                    </a>
                   @else
                   <a href="{{ route('createAccount') }}">
                        <button class="btn-login" style="background-color: white; color: black;">
                            <b>Register</b>
                        </button>
                    </a>
                    <a href="{{ route('login') }}">
                        <button class="btn-login">
                            <b>Login</b>
                        </button>
                    </a>
                    @endif
                </ul>
            </nav>
        </div>
        <div class="header_body grid">
            <a href="{{route('index')}}">
                <div class="image_logo">
                    <img src="source/img-project/imprint.png" alt="logoPaint" class="logo disnone-sm">
                </div>
            </a>
            <a href="{{route('index')}}">
                <div class="image_logo">
                    <img src="source/img-project/imprintrutgon.png" alt="logoPaint" class="logo disnone-xs disblock-sm">
                </div>
            </a>
            <div class="search">
                <form action="{{route('search')}}"method="GET" class="input-group">
                    @csrf
                    <button type="submit" class="button-search"><i class="icon_search fa-solid fa-magnifying-glass"></i></button>
                    <input class="input_search" type="text" placeholder="What do you need? " name="query">
                </form>
            </div>
            <div class="header_heard_cart">
                <div>
                    <a data-toggle="modal" data-target="#error"><i class="icon_header_body fa-solid fa-bell"></i></a>
                </div>
                @if(Session::has('user'))
                <div>
                    <a href="{{route('getlikePr')}}"><i class="far icon_header_body fa-heart"></i></a>
                </div>
                <div>
                    <a href="{{route('cart')}}"><i class="icon_header_body fa-solid fa-cart-shopping"></i></a>
                </div>
                @else
                <div>
                    <a href="{{ route('login') }}"><i class="far icon_header_body fa-heart"></i></a>
                </div>
                <div>
                    <a href="{{ route('login') }}"><i class="icon_header_body fa-solid fa-cart-shopping"></i></a>
                </div>
                @endif
            </div>
            <div class="bar">
                <button onclick="openListbar()"><i class="fa-solid fa-bars"></i></button>
                <div class="listbar" id="listbar">
                    <li class="d-flex justify-content-between">
                        <a data-toggle="modal" data-target="#error"><span class="icon_header_body fa-solid fa-heart" style="color: white;"></span>Storage</a>
                        <button class="btn-close" onclick="closeListbar()"></button>
                    </li>
                    
                        <a href="{{route('cart')}}"><span class="icon_header_body fa-solid fa-cart-shopping"></span> Cart</a>
                    </li>
                    <li class="icon-user">
                        <a data-toggle="modal" data-target="#error"><span class="icon_header_body fa-solid fa-user"></span>Login </a>
                    </li>
                </div>
            </div>
        </div>

</header>
<div class="margin"></div>
<div class="modal fade" id="btncreateshop" tabindex="-1" role="dialog" aria-labelledby="btn1Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create Shop</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            @include('error')
                <form action="{{ route('createShop') }}" method="post" class="login-form w-100" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for='avatar'>Name shop</label>
                        <input type="text" class="auth-form-input w-100" placeholder="Name" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for='avatar'>Description shop</label>
                        <input type="area" class="auth-form-input w-100" placeholder="Description" id="description" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for='avatar'>Location shop</label>
                        <input type="text" class="auth-form-input w-100" placeholder="Location" id="location" name="location" required>
                    </div>
                    <div class="form-group">						
                        <label for='avatar'>Avatar shop</label>						
                        <input type="file" class="auth-form-input w-100" name="avatar" id="avatar" required>						
                    </div>
                    <div class="form-group">						
                        <label for='coverImage'>Cover image shop</label>						
                        <input type="file" class="auth-form-input w-100" name="coverImage" id="coverImage" required>						
                    </div>	
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>	
                        <button type="submit" class="btn btn-danger">Save</button>	
                    </div>				
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="error" tabindex="-1" role="dialog" aria-labelledby="error" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Sorry ! ImPrint team has not yet developed this functionality <i class="fa-solid fa-heart" style="color: #fe5454;"></i></h2>
            </div>
        </div>
    </div>
</div>
