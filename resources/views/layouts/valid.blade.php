@if(Route::has('register'))
    <body style="background-color: #a94442;">
        <div class="container">
            <div align="center" class="alert" role="alert" style="margin: auto; margin-top: 20%; width: 36%; background-color: #dd4b39;">
                <p class="h3 text-light"><i class="fa fa-ban"></i> Error</p>
             <p class="h6 text-light">Sorry your Session is Expired please Re-login now</p>
             <a class="btn text-light" style="background-color: #f39c12;" href="{{ url('login') }}">Re-Login</a>
            </div>
        </div>
    </body>
@endif