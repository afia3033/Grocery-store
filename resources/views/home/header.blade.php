<!-- header section strats -->
<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('/')}}"><h2>Showroom</h2></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('show_order')}}">Order</a>
                        </li>

                       
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                          <x-app-layout>
                          <x-slot name="header">
                          </x-app-layout>
                        </li>

                        @else

                        <li class="nav-item">
                           <a class="btn btn-primary" href="{{ route('login') }}" id="logincss">Login</a>
                        </li>

                        <li class="nav-item">
                           <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth
                        @endif
                        

                      
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->