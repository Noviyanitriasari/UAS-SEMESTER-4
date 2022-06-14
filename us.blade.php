@extends('fograf')

@section ('title','Halaman profile')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    #profile
    {
        background-image: url(img/3.jpg);
        background-size: cover;
        height: 350px;
    }
</style>

@section ('content')
    <div class="container">
        <section class="my-3" id="profile">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img class="rounded-circle img-thumbnail nt-2" width="55%" src="img/3.jpg">
                </div>
            </div>
        </section>
    </div>

    <br><br><br><br><br><br><br><br><br>
    @endsection
