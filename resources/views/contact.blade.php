<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    <style type="text/css">
    body{
        direction: rtl;
        background-image: url("assets/img/logo.jpg");
        background-size: cover;

    }
    .logo{
        float: right;
        margin-right: 15vh
    }
		#contact-form {
  padding: 20px 0;
  /* background:#f9f9f9; */
}
#contact-form form input,
#contact-form form textarea {
  padding: 24px 20px 0;
  border-color: #0e90db;
  border-radius: 5px;
  font-size: 14px;
  color: #97a0af;
  box-shadow: none;
}
#contact-form form input {
  margin-bottom: 15px;
  padding: 24px 27px;
}
#contact-form form textarea {
  margin-bottom: 28px;
  min-height: 172px;
  resize: none;
}
#contact-form form button {
  float: right;
  color: #fff;
  font-size: 16px;
  padding: 17px 43px;
  background: #0e90db;
  border-radius: 40px;
  font-weight: 600;
  border-color: transparent;
  transition: 0.3s;
}
#contact-form form button:hover {
  background: none;
  color: #0e90db;
  border-color: #0e90db;
}

.title {
	margin: auto;
  text-align: center;
  padding-bottom: 30px;
}
.title h2 {
  color: #333;
  font-size: 25px;
  padding-bottom: 25px;
  text-transform: uppercase;
  display: inline-block;
  position: relative;
}

.title h2:before {
    content: '';
    width: 40px;
    height: 2px;
    background: #0e90db;
    position: absolute;
    top: 12px;
    left: -60px;
}
.title h2:after {
    content: '';
    width: 40px;
    height: 2px;
    background: #0e90db;
    position: absolute;
    top: 12px;
    right: -60px;
}
.title .email , .title .phone{
	color: #0e90db;
	font-weight: 500
}

.title p {
  font-size: 16px;
  line-height: 24px;
  font-weight: 300;
  color: #817C7C;
}
	</style>
</head>
<body>
    <section class="logo">
        <a href="{{ route('home') }}">
            <img width="230px" src="{{ asset('assets/img/logo.png') }}" alt="nawadi">
        </a>
    </section>
    <section id="contact-form">
        <div class="container">
            <div class="row">
                <div class="title">

                    <h2>اتصل بنا</h2>
                    <p class="email" >Nawadiksa@gmail.com</p>
                    <p class="phone" >0550460749</p>
                    {{-- <p>We are ready to hear what you want to tell us.

                        <br> From Here 👇</p> --}}
                </div>

                <div class="col-md-6" style="margin-right:300px">

                    <form >
                        <input type="text" class="form-control" placeholder="الاسم">
                        <input type="text" class="form-control" name="email" placeholder="البريد الالكتروني">
                        <textarea class="form-control" rows="3" name="message" placeholder="رسالة"></textarea>
                        <button class="btn btn-default" name="submit" type="submit">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
