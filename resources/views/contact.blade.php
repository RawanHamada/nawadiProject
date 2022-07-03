<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    <section id="contact-form">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>CONTACT US</h2>
                    <p class="email" >Nawadiksa@gmail.com</p>
                    <p class="phone" >0550460749</p>
                    <p>We are ready to hear what you want to tell us.

                        <br> From Here 👇</p>
                </div>

                <div class="col-md-6" style="margin-left:300px">

                    <form >
                        <input type="text" class="form-control" placeholder="Name">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                        <textarea class="form-control" rows="3" name="message" placeholder="Message"></textarea>
                        <button class="btn btn-default" name="submit" type="submit">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
