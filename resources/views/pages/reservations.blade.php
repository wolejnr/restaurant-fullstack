@extends('layouts.app')

@section('title', 'Page Title')


@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get On the List</h1>
                    
                    <form>
                        <div class="form-group">
                            <label for="firstNameInput">First Name</label>
                            <input type="text" class="form-control" name="fname" id="firstNameInput" placeholder="John">
                        </div>
                        <div class="form-group">
                            <label for="lastNameInput">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lastNameInput" placeholder="Doe">
                        </div>
                        <div class="form-group">
                            <label for="emailInput">Email address</label>
                            <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phoneInput">Phone number</label>
                            <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="437-268-9245">
                        </div>
                        <div class="form-group">
                            <label for="guestsInput">How many guests</label>
                            <select name="guestsInput" class="form-control" id="guests">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="timeInput">What time?</label>
                            <select name="time" class="form-control" id="timeInput">
                            <option value="6">6:00 PM</option>
                            <option value="7">7:00 PM</option>
                            <option value="8">8:00 PM</option>
                            <option value="9">9:00 PM</option>
                            <option value="10">10:00 PM</option>
                            </select>
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