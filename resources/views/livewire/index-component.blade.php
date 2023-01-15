<div class="container">
    <div class="row">
        @if(!empty(Auth::user()->email_verified_at))
       <h1>Wellcome {{ Auth::user()->name }}</h1>
        @else
        
        <h1>Wellcome SEO</h1>
        @endif
    </div>
</div>
