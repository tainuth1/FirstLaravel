@extends('master')
@section('title', 'Contact Us')

@section('content')
    <div class="container">
        <h1 class="H1">Contact me with</h1>
        <div class="grid-3 container-width">
            <a href="https://www.messenger.com/t" target="_blank">
                <div class="platform-card">
                    <div class="image">
                        <span class="icon"><i class="fa-brands fa-facebook-messenger fa-7x"></i></span>
                    </div>
                    <h3>Messenger</h3>
                </div>
            </a>
            <a href="https://web.facebook.com/tai.nuth.5" target="_blank">
                <div class="platform-card">
                    <div class="image">
                        <span class="icon"><i class="fa-brands fa-facebook fa-7x"></i></span>
                    </div>
                    <h3>Facebook</h3>
                </div>
            </a>
            <a href="https://t.me/tainuth" target="_blank">
                <div class="platform-card">
                    <div class="image">
                        <span class="icon"><i class="fa-brands fa-telegram fa-7x"></i></span>
                    </div>
                    <h3>Telegram</h3>
                </div>
            </a>
        </div>
    </div>
@endsection