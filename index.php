<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="login1.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login"/><br/>
        </div>
        <div class="col-md-9 register-right">      
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   
                    <div class="row register-form">
                        <div class="col-md-6">
                           <form class="login-form">
                                <span class="login-form-title">
                                    Faça o login
                                </span>

                                <div class="wrap-input margin-top-35 margin-bottom-35">
                                    <input class="input-form" type="text" name="email" autocomplete="off">
                                    <span class="focus-input-form" data-placeholder="E-mail"></span>
                                </div>

                                <div class="wrap-input margin-bottom-35">
                                    <input class="input-form" type="password" name="password">
                                    <span class="focus-input-form" data-placeholder="Senha"></span>
                                </div>

                                <div class="container-login-form-btn">
                                    <button class="login-form-btn">
                                        Login
                                    </button>
                                </div>

                                <ul class="login-utils">
                                    <li class="margin-bottom-8 margin-top-8">
                                        <span class="text1">
                                            Esqueceu sua
                                        </span>

                                        <a href="#" class="text2">
                                            senha?
                                        </a>
                                    </li>

                                    <li>
                                        <span class="text1">
                                            Não tem conta?
                                        </span>

                                        <a href="#" class="text2">
                                            Criar
                                        </a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="col-md-6">
                           <img src="login.png" width="300" height="300" class="margin-left-50" />
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as a Hirer</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>What is your Birthdate?</option>
                                    <option>What is Your old Phone Number</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>