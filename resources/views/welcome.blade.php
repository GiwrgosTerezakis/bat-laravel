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
            <p class="introduction-p">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged.
            </p>

        </div>

        <div class="text-center mt-5">
            <h3 style="color: black; font-weight: 600; font-size: 1.4rem">
               AUDIT A SAMPLE DATASET
            </h3>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body ">
                        <a class="info-card" target="_blank" href="https://www.propublica.org/article/how-we-analyzed-the-compas-recidivism-algorithm">
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
                            <a href="/compas-analysis" class="btn btn-primary ">Check
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="black" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body ">
                        <a class="info-card" target="_blank" href="https://www.kaggle.com/uciml/german-credit">
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
                            <a href="/german-analysis" class="btn btn-primary">Check
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="black" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3">

                <svg xmlns="http://www.w3.org/2000/svg"
                     width="80px" height="80px" viewBox="0 0 427.484 427.484" xml:space="preserve">
                    <g>
                        <path d="M405.943,290.254L302.096,425.338c-1.04,1.354-2.66,2.146-4.374,2.146c-1.702,0-3.321-0.798-4.368-2.146L189.511,290.254
                            c-0.769-0.993-1.144-2.176-1.144-3.357c0-1.152,0.364-2.329,1.108-3.322c1.499-1.975,4.125-2.707,6.434-1.809l68.76,27.166V21.01
                            c0-3.047,2.477-5.503,5.515-5.503h55.106c3.038,0,5.509,2.456,5.509,5.503v287.922l68.76-27.166
                            c2.305-0.898,4.93-0.166,6.419,1.809C407.473,285.561,407.461,288.28,405.943,290.254z M238.012,143.913
                            c0.744-0.993,1.105-2.167,1.105-3.322c0-1.176-0.379-2.367-1.142-3.36L134.125,2.148C133.081,0.792,131.458,0,129.759,0
                            c-1.714,0-3.328,0.798-4.377,2.148L21.539,137.23c-1.519,1.969-1.525,4.69-0.03,6.683c1.487,1.968,4.114,2.707,6.419,1.803
                            l68.766-27.163v287.919c0,3.05,2.462,5.509,5.506,5.509h55.109c3.041,0,5.515-2.459,5.515-5.509V118.552l68.763,27.163
                            C233.886,146.62,236.51,145.88,238.012,143.913z"/>
                    </g>
                </svg>

            </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
                        <h3 style="color: black; font-weight: 600; font-size: 1.4rem">
                   AUDIT YOUR OWN DATASET
                </h3>
                        <!-- Alert message (start) -->
                        @if(Session::has('message'))
                            <div class="alert {{ Session::get('alert-class') }}">
                                {{ Session::get('message') }}
                            </div>
                    @endif
                        @if(Session::has('keys') && !empty(Session::get('keys')))
{{--                        <div>--}}


{{--                            <h1>{{$key}}</h1>--}}

{{--                        </div>--}}
                            <div class="modal" id="modalLoginForm" tabindex="-1" role="dialog"  style="display: block !important; color: black!important; top: 30% !important;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center" style="color: black !important;">
                                            <h4 class="modal-title w-100 font-weight-bold">Important Attributes</h4>
                                            <button id="modal-to-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span style="color: black!important;" aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('postToDjango')}}" enctype='multipart/form-data'
                                              method="post" style="margin: 25px;">
                                            {{csrf_field()}}
                                        <div class="modal-body mx-3">

                                                <label style="color: black !important;" for="TargetInput">Choose your
                                                    target: </label>
                                                <select style="color:#000 !important;" name="TargetInput"
                                                        id="TargetInput">
                                                    @foreach(Session::get('keys') as $key)
                                                        @if($key == '')
                                                            @continue;
                                                        @endif
                                                        <option style="color: black !important;" value={{$key}}>
                                                            {{$key}}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                <label style="color: black !important;" for="Privileged">Privileged
                                                    Attribute: </label>
                                                <select style="color:#000 !important;" name="Privileged"
                                                        id="Privileged">
                                                    @foreach(Session::get('keys') as $key)
                                                        @if($key == '')
                                                            @continue;
                                                        @endif
                                                        <option style="color: black !important;" value={{$key}}>
                                                            {{$key}}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                <label style="color: black !important;" for="Unprivileged">Unprivileged
                                                    Attribute: </label>
                                                <select style="color:#000 !important;" name="Unprivileged"
                                                        id="Unprivileged">
                                                    @foreach(Session::get('keys') as $key)
                                                        @if($key == '')
                                                            @continue;
                                                        @endif
                                                        <option style="color: black !important;" value={{$key}}>
                                                            {{$key}}
                                                        </option>
                                                    @endforeach
                                                </select>

                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button class="btn btn-default">Begin Audition</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                    @endif
                    <!-- Alert message (end) -->

                        <form action="{{route('uploadFile')}}" enctype='multipart/form-data' method="post" style="margin: 25px;">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-lg-6 input-excel">

                                    <input type='file' name='file' class="form-control" style="border: 1px solid black; line-height: 1.3">

                                    @if($errors->any())
                                        <span class="errormsg text-danger">{{ $errors->first() }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" name="submit" value='Submit' class=' btn-import-excel'>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

        <div style="text-align: center;color: black" class="mt-2">
            © 2020 Research of a System for Βias Identification in Machine Learning, University of Patras
        </div>
    </div>
@endsection
