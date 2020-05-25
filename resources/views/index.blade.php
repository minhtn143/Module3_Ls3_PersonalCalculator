<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="col-md-5 mx-auto">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h3>CALCULATOR</h3>
            </div>
        </div>
        <form action="" method="post">
            @csrf
            <div class="row mt-2">
                <div class="col col-10 mx-auto">
                    <div class="form">
                        <input class="form-control" type="text" id="displayInput" name="displayInput" readonly
                               value="@if(isset($result)){{$result}}"@endif">
                    </div>
                </div>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="7" onclick="clickBtn(this.value)"> 7
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="8" onclick="clickBtn(this.value)"> 8
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="9" onclick="clickBtn(this.value)"> 9
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="/" onclick="clickBtn(this.value)"> /
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="CE" onclick="clearBtn(this.value)">
                        CE
                    </button>
                </div>
            </div>

            <div class="row mt-2 justify-content-center">
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="4" onclick="clickBtn(this.value)"> 4
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="5" onclick="clickBtn(this.value)"> 5
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="6" onclick="clickBtn(this.value)"> 6
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="*" onclick="clickBtn(this.value)"> *
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="C" onclick="clearBtn(this.value)"> C
                    </button>
                </div>
            </div>

            <div class="row mt-2 justify-content-center">
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="1" onclick="clickBtn(this.value)"> 1
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="2" onclick="clickBtn(this.value)"> 2
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="3" onclick="clickBtn(this.value)"> 3
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="-" onclick="clickBtn(this.value)"> -
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="C" onclick="clearBtn(this.value)"> 	&larr;
                    </button>
                </div>
            </div>

            <div class="row mt-2 justify-content-center">
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary btn-block" value="0" onclick="clickBtn(this.value)"> 0
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="." onclick="clickBtn(this.value)"> .
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary btn-block" value="+" onclick="clickBtn(this.value)"> +
                    </button>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block"> =</button>
                </div>
            </div>
        </form>

    </div>
</div>

<script src="{{asset('js.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>
