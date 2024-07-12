@include('cdn')
<x-header />
<style>

@media (max-width: 576px) {
    .login-container {
        width: 90%; /* Adjust container width for smaller screens */
    }

    .input-field,
    .login-field {
        margin-left: 0; /* Remove left margin for smaller screens */
        margin-right: 0; /* Remove right margin for smaller screens */
    }
}

/* Styles for show/hide password button */
.show-password-btn {
    position: absolute;
    right: 28px;
    top: 36%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #aaa;
}

.show-password-btn:hover {
    color: #333;
}

/* Body styles */
.body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #000; /* Black background */
    color: #fff; /* Text color */
}

/* Styles for the login container */
.login-container {
    background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0px 0px 5px rgba(203, 203, 203); /* White box shadow */
    width: 500px;
    text-align: center;
}

/* Additional styles for the login container */
.login-container h2 {
    margin-bottom: 30px;
}

.login-container input[type="email"],
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #FFFFFF; /* White border */
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #000; /* Black background */
    color: #fff; /* Text color */
}

.login-container input[type="submit"] {
    background-color: #FFFFFF; /* White button color */
    color: #000; /* Button text color */
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-container input[type="submit"]:hover {
    background-color: #DEDEDE; /* Darker shade of white on hover */
}

.terms {
    font-size: 12px;
    margin-top: 20px;
    text-align: left;
    color: #888; /* Light gray text color */
}

.error-message {
    color: red;
    margin-top: 10px;
}

.input-field {
    margin-left: 60px;
    width: 70%;
}

.login-field {
    margin-right: 100px;
}

input {
    width: 100%;
}

h2 {
    font-size: 30px;
}

.alert {
    color: rgb(66, 231, 11);
}


</style>

<div class="body">
    <div class="login-container">
        <div class="alert">
            @if (session('status'))
                <div role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <h2>Login Dashboard</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-field">
                <div class="row mb-3   ">
                    <div class="position-relative ">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Username" name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3  ">
                    <div class="position-relative ">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Password" required autocomplete="current-password">
                        <span id="showPasswordBtn" class="show-password-btn" onclick="togglePasswordVisibility()">
                            <i id="eyeIcon" class="fas fa-eye"></i>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


            </div>

            <div class="login-field">
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        <br><br>
                        @if (Route::has('password.request'))
                            <a class="btn nav-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="terms">
                By clicking 'Login' above, you agree to read, understand, and fully agree to Scorpia's Terms and
                Conditions.
            </div>
        </form>
    </div>

</div>
<x-footer />



<script>
    function togglePasswordVisibility() {
        let passwordField = document.getElementById("password");
        let eyeIcon = document.getElementById("eyeIcon");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }
</script>
