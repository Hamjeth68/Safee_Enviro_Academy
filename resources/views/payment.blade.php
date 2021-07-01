@extends('layouts.app')

@section('content')


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <section id="pageHead" class="about">
        <div class="col-md-1"></div>

        <aside class="col-sm-4">
            <p>Paymetn form2</p>
            <article class="card">
                <div class="card-body p-5">

                    <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                <i class="fa fa-credit-card"></i> Credit Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                <i class="fab fa-paypal"></i> Paypal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                <i class="fa fa-university"></i> Bank Transfer</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-tab-card">
                            <!--<p class="alert alert-success">Some text success or error</p>-->
                            <form role="form">
                                <div class="form-group">
                                    <label for="username">Full name (on the card)</label>
                                    <input type="text" class="form-control" name="username" placeholder="" required="">
                                </div> <!-- form-group.// -->

                                <div class="form-group">
                                    <label for="cardNumber">Card number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cardNumber" placeholder="">
                                        <div class="input-group-append">
                                            <span class="input-group-text text-muted">
                                                <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>  
                                                <i class="fab fa-cc-mastercard"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div> <!-- form-group.// -->

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">Expiration</span> </label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="MM" name="">
                                                <input type="number" class="form-control" placeholder="YY" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title=""
                                                data-original-title="3 digits code on back side of the card">CVV <i
                                                    class="fa fa-question-circle"></i></label>
                                            <input type="number" class="form-control" required="">
                                        </div> <!-- form-group.// -->
                                    </div>
                                </div> <!-- row.// -->
                                <p class="lead">
                                    <a class="btn btn-primary btn-sm" href="{{ url('thankyou') }}"
                                        role="button">Confirm</a>
                                </p>
                        </div> <!-- tab-pane.// -->
                        <div class="tab-pane fade" id="nav-tab-paypal">
                            <p>Paypal is easiest way to pay online</p>
                            <p>
                                <button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my
                                    Paypal </button>
                            </p>
                            <p><strong>Note:</strong>Enable your paypal account</p>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-bank">
                            <p>Bank accaunt details</p>
                            <dl class="param">
                                <dt>BANK: </dt>
                                <dd>World bank</dd>
                            </dl>
                            <dl class="param">
                                <dt>Accaunt number: </dt>
                                <dd>XXXXXXXXXXX</dd>
                            </dl>
                            <dl class="param">
                                <dt>Code: </dt>
                                <dd>XXXXXXXXXXX</dd>
                            </dl>
                            <p><strong>Note:</strong>anything related bank details...</p>
                        </div> <!-- tab-pane.// -->
                    </div> <!-- tab-content .// -->

                </div> <!-- card-body.// -->
            </article> <!-- card.// -->


        </aside>
    </section>



@endsection
