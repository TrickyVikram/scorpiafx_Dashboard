@include('cdn')
<x-header />
    <style>
        .body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            /* Black background */
            color: #fff;
            /* Text color */
        }

        .login-container {
            background-color: rgba(0, 0, 0, 0.8);
            /* Semi-transparent black background */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 5px rgba(203, 203, 203);
            /* white box shadow */
            width: 500px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 30px;
        }

        .nav-link {
            color: white;
        }

        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #FFFFFF;
            /* white border */
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #000;
            /* Black background */
            color: #fff;
            /* Text color */
        }

        .login-container input[type="submit"] {
            background-color: #FFFFFF;
            /* white button color */
            color: #000;
            /* Button text color */
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background-color: #DEDEDE;
            /* Darker shade of white on hover */
        }

        .terms {
            font-size: 12px;
            margin-top: 20px;
            text-align: left;
            color: #888;
            /* Light gray text color */
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
            font-size: 30px
        }
        
    </style>
    <div class="body">
        <div class="login-container">
            <h2>Forget Password</h2>
            <p>Enter your Username or Email</p>
            <div class="alert" >
                @if (session('status'))
                <div  role="alert" >
                    {{ session('status') }}
                   
                </div>
            @endif
            </div>
            <div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="input-field">
                        <input id="email" type="email"  placeholder="username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Sand reset link') }}
                        </button>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   

                </form>
            </div>
           
        </div>
    </div>
