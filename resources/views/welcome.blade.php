@extends('layouts.master')

@section('content')
{{--    check gs--}}
    <nav class="navbar navbar-expand-bg navbar-dark bg-dark justify-content-md-center">
        <a class="navbar-brand" href="#">Code</a>
        <a class="navbar-brand" href="#">Home</a>
        <a class="navbar-brand" href="#">Details</a>
    </nav>
    <div class="container">
        <div class="mt-5">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged.
            </p>
        </div>
        <div>
            <img width="100%" class="mt-5" alt="" src="{{asset('img/biasreport.png')}}">
        </div>

        <div class="row mt-5 text-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body rounded ">
                        <a class="info-card" href="https://www.propublica.org/article/how-we-analyzed-the-compas-recidivism-algorithm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="black"
                                 class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                        </a>
                        <h4 class="card-title">COMPAS</h4>
                        <p class="card-text">Recidivism Risk Score Data and Analysis</p>
                        <div style="text-align: center">
                            <a href="#" class="btn btn-primary ">Check
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body rounded">
                        <a class="info-card" href="https://www.kaggle.com/uciml/german-credit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="black"
                                 class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path
                                    d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                            </svg>
                        </a>
                        <h4 class="card-title ">German Credit Risk</h4>
                        <p class="card-text">This dataset classifies people described by a set of attributes as good or bad credit risks.</p>
                        <div style="text-align: center">
                            <a href="#" class="btn btn-primary">Check
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center" class="mt-5">
            © 2020 Research of a System for Βias Identification in Machine Learning, University of Patras
        </div>
    </div>
@endsection
