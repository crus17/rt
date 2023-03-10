@include('home.assetss')
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<body class="auth-page">
	
    <!-- Wrapper Starts -->
    <div class="limiter">
        <div class="container-form user-auth" >
				<div class="section-form-box">
                            <!-- Logo Starts -->
                            <!--<a href="{{url('/')}}" class="text-center"><img src="{{ $settings->site_address}}/cloud/app/images/{{$settings->logo}}" alt="{{$settings->site_name}}" class="text-center"> </a>-->
                            <!--<a href="{{url('/')}}" class="text-center"><img src="{{ asset ('public/sppcoindom.jpg')}}" alt="{{$settings->site_name}}" class="text-center"> </a>-->
                            <div>
                                <a href="{{url('/')}}">
                                  <!--<span style="color:#04b9f4;font-size:30px;" class="w3-hide-large"><img src="{{ asset ('temp_new/images/log.png')}}">{{$settings->site_name}}</span>-->
                                  <span style="color:#04b9f4;font-size:30px;" class="w3-hide-large"><img src="{{ asset ('temp/img/logo_dark.png')}}" width="320"></span>
                                </a>
                            </div>
                            <!-- Logo Ends -->
						    <!-- Section Title Starts -->
							<h3 class="mb-3">member registration</h3>
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						<form  class="form" method="POST" action="{{ route('register') }}">
                            {{csrf_field()}}   
                            <!-- Input Field Starts -->
							<div class="form__group">
								<input  class="form__input" id="name" placeholder="firstname" name="name" type="text" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <label for="name" class="form__label">First Name</label>
                            </div>
							<!-- Input Field Ends -->
	
							<!-- Input Field Starts for lastname -->
							<div class="form__group">
								<input  class="form__input" id="name" placeholder="lastname" name="l_name" type="text" value="{{ old('l_name') }}" required >
                            
                                @if ($errors->has('l_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('l_name') }}</strong>
                                    </span>
                                @endif
                                <label for="name" class="form__label">Last Name</label>
                            </div>
							<!-- Input Field Ends -->

                             <!-- Input Field Starts -->
                            <div class="form__group">
                                <input class="form__input" id="email" placeholder="email" name="email" type="email" value="{{ old('email') }}" required>
                            
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <label for="email" class="form__label">Emails</label>
                            </div>
                            
                            <div class="form__group">
								<input  class="form__input" id="phone" placeholder="phone number"  name="phone" type="number" value="{{ old('phone') }}" required>
                            
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                <label for="phone" class="form__label">Phone Number</label>
                            </div>
							
							<!-- Input Field Starts -->
							<div class="form__group">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <input  class="form__input" id="password" name="password" id="password" placeholder="Password" type="password" required>
                                <label for="password" class="form__label">Password</label>
							</div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
							<div class="form__group">
								<input  class="form__input" id="password" placeholder="re-enter password" name="password_confirmation" type="password" value="{{ old('password_confirmation') }}" required>
                                <label for="password" class="form__label">Re-enter password</label>
							</div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            
                            
                            <div class="form__group">
								
								<select  class="form__input" name="country" id="country">
								<option value="None">Select country</option>
								@foreach($countries as $country)
								<option value="{{$country}}">{{$country}}</option>
								@endforeach
                                </select>
                            </div>
							<!-- Submit Form Button Starts -->
							<div class="form__group text-center">
								<button class="btn btn__login" type="submit">Create account</button>
								<p class="text-center">Already a member?  <a href="{{route('login')}}">Login now</a></p>
                            </div>
                            
							<!-- Submit Form Button Ends -->
                        </form>
                        <!-- Form Ends -->
                        <!-- Copyright Text Starts -->
                        <div class="form__footer text-center">
                            <p class="mt-2">  &copy; Copyright  {{date('Y')}} &nbsp; {{$settings->site_name}} &nbsp; All Rights Reserved.</p>
                        </div>
				<!-- Copyright Text Ends -->
			</div>
		</div>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>

