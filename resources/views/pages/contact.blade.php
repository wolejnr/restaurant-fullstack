@extends('layouts.app')

@section('title')
Contact - {{$settings["general"]->site_title}}
@endsection

@section('description')
{{$settings["general"]->site_title}} You want to contact us? Call toll-free on 438-234-0918.
@endsection


@section('content')
    <div id="contact-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                    <h3>Address</h3>
                    <p>
                        {{$settings["general"]->address_1}} {{$settings["general"]->address_2}} <br>
                        {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
                    </p>
                    <h3>Phone Number</h3>
                    <p>
                        {{$settings["general"]->phone_number}}
                    </p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2802.9304526043143!2d-75.66463908418271!3d45.370398447718024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce08aec982701d%3A0x93acafb3d12d69b2!2sCora!5e0!3m2!1sen!2sca!4v1585150258554!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection