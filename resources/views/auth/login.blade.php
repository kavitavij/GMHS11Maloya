<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<style type="text/css">
.login-input {
    width: 95%;
    border: 2px solid #00000052 !important;
}
.login-btn {
    border-radius: 8px;
    padding: 5px;
    color: #fff;
    background-color: #56767F;
    border: 2px solid #F65314 !important;
}
.login-btn:hover{
    background-color: #F65314;
} 
  
.bg-color{
    background-color: aliceblue;
}
.card-body{
    background-color: #F65314;
    font-weight: bold;
    color: #0f0f0f;
    border-radius: 15px 15px 0px 0px;
}
.bg{
    background-color: #56767F;
    border-radius: 0px 0px 15px 15px;

}
</style>
<body>
<section class="vh-100 bg-color">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card login-div text-dark" style="border-radius: 1rem;">
          <div class="card-body ">
          <p class="text-dark-50 mb-2 text-center p-login">Please enter your Email and Password!</p>

            <form method="POST" action="{{ route('login') }}">
                 @csrf
                 </div>
                <div class="md-4 bg">
                  <div class="form-outline form-white mb-2">
                    <label class="form-label text-white ms-3 mt-2" for="typeEmailX">Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control login-input ms-2" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <div class="form-outline form-white mb-2">
                     <label class="form-label text-white ms-3 mt-2" for="typePasswordX">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control login-input ms-2" />
                     <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
                    <div class="form-outline form-white mb-4">  
                     <input id="remember_me" type="checkbox" class="rounded ms-3 border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-white">Remember me</span>
                    </div>
                  <div class="text-center btn-div">
                  <button class=" px-5 mb-4 login-btn" type="submit">Login</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
