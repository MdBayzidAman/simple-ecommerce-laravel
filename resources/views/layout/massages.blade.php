
 @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div class="alert-notice danger">{{$error}}</div>
     @endforeach
 @endif
 
@if(session()->has('success'))
    <div class="alert-notice success" style="color: green;font-weight: bold;">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert-notice danger" style="color: red;font-weight: bold;">
        {{ session()->get('warning') }}
    </div>
@endif