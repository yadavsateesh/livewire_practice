@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" autofocus placeholder="First Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						 <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" autofocus placeholder="Last Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						 <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autofocus placeholder="Ex abc@gamil.com">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contact_number" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contact_number" type="text" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" placeholder="Contact Number">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						 <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>
						
						 <div class="row mb-3">
                            <label for="postcode" class="col-md-4 col-form-label text-md-end">{{ __('Postcode') }}</label>

                            <div class="col-md-6">
                                <input id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" placeholder="Postcode">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="file" class="col-md-4 col-form-label text-md-end">{{ __('File') }}</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file"  placeholder="File">
                            </div>
                        </div>
						
						<div class="row mb-3">
                            <label for="hobbies" class="col-md-4 col-form-label text-md-end">{{ __('Hobbies') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
										<input class="form-check-input" type="checkbox" name="hobbies[]" id="hobby1" value="Reading" placeholder="Hobbies">
										<label class="form-check-label" for="hobby1">Reading</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="hobbies[]" id="hobby2" value="Gaming">
										<label class="form-check-label" for="hobby2">Gaming</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="hobbies[]" id="hobby2" value="Music">
										<label class="form-check-label" for="hobby2">Music</label>
									</div>
                                @error('hobbies')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						
						<div class="row mb-3">
                            <label for="hobbies" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
									<input class="form-check-input" type="radio" name="gender" id="male" value="Male">
									<label class="form-check-label" for="male">Male</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gender" id="female" value="Female">
									<label class="form-check-label" for="female">Female</label>
								</div>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
