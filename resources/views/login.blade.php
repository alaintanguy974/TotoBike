@extends('template')

@section('contenu')

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form, user" method="post" action="{{ url('/login') }}">
					@csrf
					<span class="login100-form>
						<p class=" zmdi zmdi-landscape>
						<h1>Bikes Stores</h1>
						</p>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
					  	<div class="error">{{ $errors->has('username') ? $errors->first('username') : ''  }}</div>
                        <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Nom...">
                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<div class="error">{{ $errors->has('pass') ? $errors->first('pass') : ''  }}</div>

						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	 <div>
        @if (Route::has('login'))
        <div class="fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700">Accueil</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700">Login</a>

           	@if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">inscription</a>
            @endif 
            @endif
        </div>
        @endif
    </div> 

</body>
@stop

	