@extends('layout')
@section('title', 'Контакты')
@section('content')
{{--<!--  contact -->--}}
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="md-0">
                        @foreach($errors->all() as $message)
                            <li>
                                {{$message}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form id="request" action="{{route('contact.store')}}" method="POST" class="main_form" >
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="contactus pb-1 mb-2" autofocus placeholder="Full Name" type="type" name="name" value="{{old('name')}}">
                            @error('name')<div class="text-danger pt-0">{{$message}}</div>@enderror
                        </div>
                        <div class="col-md-12">
                            <input class="contactus pb-1 mb-2" placeholder="Email " type="type" name="email" value="{{old('email')}}">
                            @error('email')<div class="text-danger pt-1">{{$message}}</div>@enderror
                        </div>
                        <div class="col-md-12">
                            <input class="contactus pb-1 mb-2" placeholder="Phone Number" type="type" name="phone" value="{{old('phone')}}">
                            @error('phone')<div class="text-danger pt-1">{{$message}}</div>@enderror
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea pb-1 mb-2" placeholder="Message" type="type" name="message" value="{{old('message')}}"></textarea>
                            @error('message')<div class="text-danger pt-1">{{$message}}</div>@enderror
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn" type="submit" >Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2241.9746718063675!2d49.0940149!3d55.8110401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5659529c2679414!2z0JPRgNGD0L_Qv9CwINC60L7QvNC_0LDQvdC40LkgTmV0aQ!5e0!3m2!1sru!2sru!4v1664621544808!5m2!1sru!2sru" width="600" height="386" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<!-- end contact -->--}}
@endsection
