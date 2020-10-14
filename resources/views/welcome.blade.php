<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Retail Booking</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

          <!-- Scripts -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:1rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:80rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.0rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(3,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
            .p0{margin-top: 0px;margin-bottom: 0px;}
            .ft0{font: bold 26px 'Segoe UI Black';color: #389adb;line-height: 60px;}
            .ft1{font: 26px 'Segoe UI';color: #535d63;line-height: 60px;}
            .col-form-label-sm {
            font-size: 9px !important;
                }
                .form-control-sm {
                    border-radius: 0px !important;
                    height: 24px;
                }
                .form-group {
                    margin-bottom: 9px !important;
                }
                * {
            box-sizing: border-box;
            }

            .input-number {
            width: 80px;
            padding: 0 12px;
            vertical-align: top;
            text-align: center;
            outline: none;
            }

            .input-number,
            .input-number-decrement,
            .input-number-increment {
            border: 1px solid #ccc;
            height: 40px;
            user-select: none;
            }

            .input-number-decrement,
            .input-number-increment {
            display: inline-block;
            width: 30px;
            line-height: 38px;
            background: #f1f1f1;
            color: #444;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
            }
            .input-number-decrement:active,
            .input-number-increment:active {
            background: #ddd;
            }

            .input-number-decrement {
            border-right: none;
            border-radius: 4px 0 0 4px;
            }

            .input-number-increment {
            border-left: none;
            border-radius: 0 4px 4px 0;
            }
            .btn-secondary {
                color: #fff;
                background-color: #389adb;
                border-color: #389adb;
            }
            .btn-secondary:hover {
                color: #fff;
                background-color: #389adb !important;
                border-color: #389adb !important;
            }
            .btn-secondary.focus, .btn-secondary:focus {
                box-shadow: 0 0 0 0.2rem rgb(0 135 255 / 50%) !important;
            }
            .custom-select {
                color: #ffffff !important;
                background-color: #389adb !important;
                border: 0px solid #ced4da !important;
            }
            textarea.form-control {
                height: 49px !important;
                border-radius: 0px !important;
            }
            ::placeholder {
            color: blue;
            font-size: 10px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif -->

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <P class="p0 ft1"><SPAN class="ft0">Droppa </SPAN>for Business</P>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <!-- Space -->
                    <div style="height: 18px;"></div>
                    <!-- End of Space -->
                    <div style="background-color: #389adb;    text-align: center;">
                    <P class="p1 ft2" style="color:white; padding: 12px;">Retail Booking</P>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops! </strong> there where some problems with your input.<br>
                            <ul>
                            @foreach ($errors as $error)
                                <li>{{$error}}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="booking" method="post">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <!-- Grid to 3 Culm -->
                            <div class="p-6">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Pick up Address</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="pickUpAddress" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                    <div style="text-align: right;">
                                        <label style="font-size:10px; color: #389adb; font-weight: bold">See Map</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="Name" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="text"  name="PhoneNumber" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Pick Up Date</label>
                                    <div class="col-sm-3">
                                        <input type="date" name="pickUpDate" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Pick Up Time</label>
                                    <div class="col-sm-3">
                                        <input type="time" name="pickUpTime" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Number Of Labour</label>
                                    <div class="col-sm-9">
                                        <input type="number"  name="NumberOFLabour" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                </div>
                                <!-- Grid to 3 Culm -->
                            </div>

                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l"  style="width: 80%; margin: 0 auto;">
                                <div class="text-center" style="height: 53%;">
                                    <img src="{{url('/img/cars.png')}}" class="rounded" alt="Cars" style="width: 100%;">
                                </div>
                                <div class="text-center">
                                    <label for="colFormLabelSm" class="col-sm-10 col-form-label col-form-label-sm"><b>Cousa Utility, Nissan 1400 or Similar</b></label>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 0px;width: 100%;}">
                                    Select Vehicle
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Toyota</a>
                                        <a class="dropdown-item" href="#">BMW</a>
                                    </div>
                                    </div>
                            </div>
                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Pick up Address</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                    <div style="text-align: right;">
                                        <label style="font-size:10px; color: #389adb; font-weight: bold">See Map</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Comment</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"  name="comment" aria-label="With textarea" style="text-size: 20px" placeholder="Leave an instruction for the Drive"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Grid to 3 Culm -->
                        </div>
                        <div style="text-align: right; padding: 0px 27px 21px 27px;">
                            <button type="submit"  class="btn btn-primary" style="font-size:10px !important; border-radius: 0px !important;">CREATE BOOKING</button>
                        </div>
                    </form>
                </div>


                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div style="background-color: #389adb;    text-align: center;">
                    <P class="p1 ft2" style="color:white; padding: 12px;">Drop Off Address(s)</P>
                    </div>
                    <div class="grid grid-cols-1">
                        <!-- Grid to 3 Culm -->
                        <div class="p-6">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                    <th scope="col" style="font-size: 9px !important;"></th>
                                    <th scope="col" style="font-size: 9px !important;">Date</th>
                                    <th scope="col" style="font-size: 9px !important;">Pick Up Address</th>
                                    <th scope="col" style="font-size: 9px !important;">Drop off Address</th>
                                    <th scope="col" style="font-size: 9px !important;">Vehicle type</th>
                                    <th scope="col" style="font-size: 9px !important;">Labour(s)</th>
                                    <th scope="col" style="font-size: 9px !important;">Price</th>
                                    <th scope="col" style="font-size: 9px !important;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row" style="font-size: 9px !important;">1</th>
                                    <td style="font-size: 9px !important;">19-05-20</td>
                                    <td style="font-size: 9px !important;">Unit 13 Northlands Production Park Intersection of Epsom Avenue</td>
                                    <td style="font-size: 9px !important;">Unit 13 Northlands Production Park Intersection of Epsom Avenue</td>
                                    <td style="font-size: 9px !important;">Mini Van</td>
                                    <td style="font-size: 9px !important;">2</td>
                                    <td style="font-size: 9px !important;">R250</td>
                                    <td style="font-size: 9px !important; color: red">Delete</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" style="font-size: 9px !important;">1</th>
                                    <td style="font-size: 9px !important;">19-05-20</td>
                                    <td style="font-size: 9px !important;">Unit 13 Northlands Production Park Intersection of Epsom Avenue</td>
                                    <td style="font-size: 9px !important;">Unit 13 Northlands Production Park Intersection of Epsom Avenue</td>
                                    <td style="font-size: 9px !important;">Mini Van</td>
                                    <td style="font-size: 9px !important;">2</td>
                                    <td style="font-size: 9px !important;">R400</td>
                                    <td style="font-size: 9px !important; color: red">Delete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End of Grid to 3 Culm -->
                    </div>
                </div>
                <!-- Space -->
                <div style="height: 18px;"></div>
                    <!-- End of Space -->
            </div>
        </div>
    </body>
</html>
