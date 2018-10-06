@extends('layouts.master')
@section('title', 'F-KYC | Login')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col s12 m6 l6 offset-l3 offset-m3">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card white z-depth-4" style="margin-top: 25%">
                            <div class="card-content center black-text">
                               <h1>
                                   Welcome to E-kyc
                               </h1>
                                <h3>
                                    our one stop kyc
                                </h3>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('google.login') }}" class="center center-block">
                                    <img class="waves-effect waves-light " src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
