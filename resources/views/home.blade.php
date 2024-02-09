@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Create Post -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body px-5">
                    <input class="form-control" type="text" placeholder="What's on your mind?">
                    <button class="btn btn-dark mt-2 float-end">Create Post</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Posts -->
    <div class="mt-5 row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body p-4">
                    <span class="fw-bold">John Doe</span>
                    <br>
                    <small>a few minutes ago</small>
                    <br>
                    <p class="mt-3">Indulge in the irresistible allure of our latest collection! 🌟 Elevate your wardrobe with our meticulously crafted pieces, designed to inspire confidence and captivate attention. From timeless classics to contemporary chic, discover the perfect ensemble to express your unique style. Embrace elegance, embrace sophistication – shop now and make a statement wherever you go! 💃</p>
                    <div class="card mb-3">
                        <div class="card-body">
                            <input class="form-control" type="text" placeholder="Write a comment...">
                            <button class="btn btn-sm btn-dark mt-2 float-end">Submit</button>
                        </div>
                    </div>
                    <div class="card px-3 py-1" style="font-size: 12px;">
                        <div class="card-body">
                            <span class="fw-bold mt-2">John Doe</span>
                            <small>a few minutes ago</small>
                            <br>
                            <p>Indulge in the irresistible allure of our latest collection! 🌟</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
