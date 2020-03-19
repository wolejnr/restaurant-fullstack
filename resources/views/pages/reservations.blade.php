@extends('layouts.app')

@section('title', 'Page Title')


@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get On the List</h1>
                    
                    <form method="POST" action="/reservations">
                        @csrf
                        <div class="form-group">
                            <label for="inputFname">First Name</label>
                            <input id="inputFname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" placeholder="John" autofocus>

                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputLname">Last Name</label>
                            <input id="inputLname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" placeholder="Doe" autofocus>

                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input id="inputEmail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPhone">Phone number</label>
                            <input id="inputPhone" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" placeholder="example: 6132946095" autofocus>

                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="guestsInput">How many guests</label>
                            <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="guestsInput">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            @error('guests_total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="timeInput">What time?</label>
                            <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror" id="timeInput">
                            <option value="6">6:00 PM</option>
                            <option value="7">7:00 PM</option>
                            <option value="8">8:00 PM</option>
                            <option value="9">9:00 PM</option>
                            <option value="10">10:00 PM</option>
                            </select>
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                        </div> 
                    </form>

                </div>
                <div class="col-md-6">
                    <p>
                        Please Note: This is not a reservation. You will be added to the current wait list.
                        You may have a short wait once you arrive while we prepare your table.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection