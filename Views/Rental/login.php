<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>RENTCARS</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	

<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />

<link rel="stylesheet" href="style.css">
<style>
    *{
    margin: 0;
    padding: 0;
    font-family:'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    body{
        background-color: white;
    }

    #wrapper{
        width: 50em;
        margin-top: 30px;
        margin-left: 280px;
        background-color: #f8ca11;
        padding: 20px;
    }

    h1{
        color: white;
        text-align: center;
    }

    #kolom{
        padding: 10px;
        border-style: solid;
        border-color: white;
        margin: 15px;
        
    }

    .hitung{
        margin: 30px;
        color: #f8ca11;
        background-color: white;
        width: 120px;
        height: 25px;
        border: none;

    }

    .kurs{
    color: #f8ca11;
    background-color: white;
    border-color: white;
    border-radius: 10px;
    width: 120px;
    height: 25px;
    }

    #username,#password{
        margin: 1em;
    }
    
    .previous{
        margin: 1em;
    }

    .signin-content{
        text-align: center;
    }
</style>
</head>
<body>
    <div class="previous">
        <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg></a>
        <a href="index.html"><img style="width: 70px" src="images/logo3.png"></a>
    </div>

    <div id="wrapper">
    <h1>Log In</h1>
    
    <div id="kolom">
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <br/>
                    <div class="signin-form">
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <p>Username</p>
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input 
                                value="<?php echo $_POST['username']; ?>" required
                                class="kurs" 
                                type="text" 
                                name="username" 
                                id="username" 
                                placeholder="Masukkan nama"
                                />
                            </div>
                            <div class="form-group">
                                <p>Password</p>
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input 
                                value="<?php echo $_POST['username']; ?>" required
                                class="kurs" 
                                type="password" 
                                name="password" 
                                id="password" 
                                placeholder="Masukkan password"
                                />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Ingat saya</label>
                            </div>
                            <button class="submit">Log In</button>
                        </form>

                        <div class="social-login">
                            <span class="social-label">Atau login dengan</span>
                            <ul class="socials">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                                    </svg>
                                </a>
                            </ul>
                        </div>

                        <br>
                        <p>Belum memiliki akun?</p>
                        <a href="registrasi.html">
                            <button class="hitung">Sign Up</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
</div>

    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>
</body>
</html>
