@extends('master')
@section('title', 'About Us')

@section('content')
    <section class="about">
        <div class="grid-2 container-width">
            <div class="text-contain">
                <div class="title-text">
                    <h1>Hi!  My name is Nuth <br>I am a Web developer</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam ipsum, at laudantium esse inventore necessitatibus veritatis, earum iure dolore quos porro. Accusamus saepe porro reiciendis autem atque ab</p>
                </div>
                <a href="#">Download My CV</a>
            </div>
            <div class="image-contain">
                <img src="images/about.png" alt="front-end">
            </div>
        </div>
    </section>

    <section class="about-two">
        <div class="grid-two container-width">
            <div class="image-about2">
                <img src="images/about-two.jpg" alt="web development">
            </div>
            <div class="text-about2">
                <h1>Build your skill here with ReanCode.com</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate repellat libero ipsum consequuntur delectus laborum harum, quas possimus odio recusandae.</p>
                <a class="ur-course" href="#">Ur Course</a>
            </div>
        </div>
    </section>

    <section class="about-three">
            <div class="image-one container-width">
                <img src="images/about-three.jpg" alt="about-three">
                <div class="text-item">
                    <h1 class="h1-size">UX & UI Designer</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique officia doloribus, deserunt tempore minima, facere sapiente eum nam excepturi voluptas repellendus, fugiat placeat iusto libero.</p>
                </div>
            </div>
    </section>
@endsection