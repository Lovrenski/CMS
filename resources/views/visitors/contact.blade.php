@extends('visitors.layouts.main')

@section('content')
    <div class="col-lg-8">
        <div class="blog-post single-post">
            <h3>Contact Me</h3>
            <p>This web is still under development. You can leave any suggestions or critics? to improve this web</p>
            <form class="comment-form" action="/suggest/add" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" placeholder="Your name" name="name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Your e-mail" name="email">
                    </div>
                    <div class="col-md-12">
                        <textarea placeholder="Your message" name="body"></textarea>
                        <button class="site-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if (session()->has('success'))
        <script>
            alert('Thank you for your suggestions!');
        </script>
    @endif
@endsection
