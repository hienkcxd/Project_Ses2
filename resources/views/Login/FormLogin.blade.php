<div class="blockForm">
<div class="loginContent">
    <div class="title">Login</div>

    <form action="#">
        <div class="field">
            <input type="text" required style="padding-left: 15px" name="id">
            <label>ID</label>
        </div>
        <div class="field">
            <input type="password" required style="padding-left: 15px" name="pass">
            <label>Password</label>
        </div>

        <div class="content">
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
