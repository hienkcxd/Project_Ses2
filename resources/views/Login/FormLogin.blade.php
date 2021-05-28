<div class="blockForm">
<div class="loginContent">
    <div class="title">Login</div>

    <form action="{{ route('auth.check') }}" method="post">
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
        @csrf
        <div class="field">
            <input type="text"  style="padding-left: 15px" name="Account" value="{{ old('Account') }}">
            <span class="text-danger">@error('Account') {{ $message }} @enderror</span>
            <label>Account</label>
        </div>
        <div class="field" style="margin-top: 35px">
            <input type="password"  style="padding-left: 15px" name="Password" value="{{ old('Password') }}">
            <span class="text-danger"> @error('Password'){{ $message }} @enderror </span>
            <label>Password</label>
        </div>

        <div class="content" style="margin-top: 25px">
            <div class="checkbox" style="padding-left: 0px" >
                <input type="checkbox" id="remember-me" style="margin: 0px; padding-left: 0px">
                <label for="remember-me" style="margin: 0">Remember me</label>
            </div>
            <div class="pass-link">
                <a href="#">Forgot password?</a>
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Login">
        </div>
        <div class="signup-link">
            !!!only for admin!!! <a href="{{ route('homepage') }}">Go Homepage</a></div>
    </form>
</div>
</div>
