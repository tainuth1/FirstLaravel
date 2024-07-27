@extends('master')
@section('title', 'Home Page')

@section('content')
    <section class="hero">
        <div class="grid-1x2 container-width grid-hero">
            <div class="hero-text">
                <h1>Welcome to ReanCode.com</h1>
                <p>Build your skills here with reancode. We have too many popular course. You can choose your favorite course to learn to improve you skills.</p>
                <a href="{{ url('/about') }}">Learn More</a>
            </div>
            <div class="hero-img">
                <img src="images/hero-image.webp" alt="reancode image">
            </div>
        </div>
    </section>

    <section class="popular-course">
        <h2 class="pc-heading">Popular-Courses</h2>
        <div class="grid-1x3 container-width">
            <div class="course-card">
                <div class="course-img">
                    <img src="images/html-css.webp" alt="html-css">
                </div>
                <h3 class="course-heading">HTML & CSS</h3>
                <p>This is HTML & CSS Course for everyone who want to become front-end developer. If you end this course you can create a static website.</p>
                <div class="btn-container">
                    <a class="btn-one" href="#">Learn now</a>
                    <a class="btn-two" href="" target="_blank">40$</a>
                </div>
            </div>
            <div class="course-card">
                <div class="course-img">
                    <img src="images/video-editing.webp" alt="video-editing">
                </div>
                <h3 class="course-heading">Video Editing</h3>
                <p>This course is for everyone who want to learn about Video-Editing. if you end this course you can become a great video editor.</p>
                <div class="btn-container">
                    <a class="btn-one" href="#">Learn now</a>
                    <a class="btn-two" href="" target="_blank">60$</a>
                </div>
            </div>
            <div class="course-card">
                <div class="course-img">
                    <img src="images/graphic.webp" alt="graphic">
                </div>
                <h3 class="course-heading">Graphic Design</h3>
                <p>This is Graphic design course that can improve your design skills. If you end this course you will become great Designer.Thank you!!</p>
                <div class="btn-container">
                    <a class="btn-one" href="#">Learn now</a>
                    <a class="btn-two" href="" target="_blank">80$</a>
                </div>
            </div>
            <div class="course-card">
                <div class="course-img">
                    <img src="images/html-css.webp" alt="software">
                </div>
                <h3 class="course-heading">Software Dev</h3>
                <p>This is a Software Development course for everyone who want to become software developer. If you end this course you can create mobile app, video game, computer application.</p>
                <div class="btn-container">
                    <a class="btn-one" href="#">Learn now</a>
                    <a class="btn-two" href="" target="_blank">95$</a>
                </div>
            </div>
            <div class="course-card">
                <div class="course-img">
                    <img src="images/video-editing.webp" alt="front-end">
                </div>
                <h3 class="course-heading">Front End</h3>
                <p>This course is the same like HTML & CSS. But the html&css course can create only static website <br> And this course we have javaScript that you can create a small dynamic website.</p>
                <div class="btn-container">
                    <a class="btn-one" href="#">Learn now</a>
                    <a class="btn-two" href="" target="_blank">30$</a>
                </div>
            </div>
            <div class="course-card">
                <div class="course-img">
                    <img src="images/graphic.webp" alt="back-end">
                </div>
                <h3 class="course-heading">Back End</h3>
                <p>This is a Back-end course that you need to learn after you finished the Front-end developer. <br> This course can make you become a full stack Web developer.<br>&#160;</p>
                <div class="btn-container">
                    <a class="btn-one" href="#">Learn now</a>
                    <a class="btn-two" href="" target="_blank">70$</a>
                </div>
            </div>
        </div>
    </section>
@endsection