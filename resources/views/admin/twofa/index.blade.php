
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <style>
    .logInArea.custom-cose {
    background: rgba(12, 81, 116, 0.92);
}
.logInArea.custom-cose h1 {
    text-align: center;
    color: #fff;
    font-size: 30px;
    margin-bottom: 24px;
}
.logInArea.custom-cose h2 {
    text-align: center;
   
    margin-bottom: 10px;
}

.logInArea.custom-cose .users {
    width: 30%;
}

</style>   
    


<div id="content">
       
<section class="logInArea custom-cose">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="users">
<h1> Enter Your Google Authenticator 2FA Code</h1>
                    <div class="auth-pages">
                        <div class="auth-left">
                            @if (session()->has('success_message'))
                            <div class="alert alert-success">
                                {{ session()->get('success_message') }}
                            </div>
                            @endif @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{route('authenticate')}}" method="POST">
                                <div class="logIn">
                                    <h2>
                                       One Time Password
                                    </h2>
                                </div>
                                {{ csrf_field() }}
                                <input name="one_time_password" type="text">
                                    <button type="submit">
                                        Authenticate
                                    </button>
                                </input>
                            </form>
                        </div>
                    </div>
              </div>
        </div>
        </div>
        </div>
</section>
</div>

</body>

<style>

*{margin:0px; padding:0px;}

body, html {
    display: inline-block;
    width: 100%;
    height: 100%;
}


* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.logIn h3 {
    margin: 0px 0 20px; color:#f26722;
}
.logInArea {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 100%;
}
.users {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    right: 0;
    left: 0;
    width: 300px;
    margin: 0 auto;
}

.auth-pages {
    background: #efefef;
    padding: 20px;
    display: inline-block;
    width: 100%;
}


.auth-pages input[type="text"] {
    width: 100%;
    height: 40px;
    border: 1px solid #ccc;
}

.auth-pages button {
    background: #1d7dca;
    border: none;
    color: #fff;
    padding: 10px 10px;
    font-size: 14px;
    width: 100%;
    margin: 12px 0 0 0;
}

@media (max-width:767px) {
.users {
    
    width: 100%;
 
}

}




</style>