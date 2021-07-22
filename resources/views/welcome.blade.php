@extends('layouts.master')

@section('content')
{{--    check gs--}}
        <ul class="nav justify-content-center navbar-dark bg-dark justify-content-md-center" style="z-index: 9;">

            <li class="nav-item nav-item-left" style="width: 50%;">
                <a class="nav-link navbar-brand active" style="padding-right: 0 !important;" target="_blank" href="https://github.com/GiwrgosTerezakis/BAT-Django">Code</a>
            </li>
            <li class="nav-item" style="width: 50%">
                <a class="nav-link navbar-brand a-nav-right" target="_blank" href="/documentation">Documentation</a>
            </li>
        </ul>
    <div class="container">
        <div class="mt-5">
            <p class="introduction-p">
                <strong style="color: black;">Bias Auditing Tool</strong> or <strong style="color: black;">BAT</strong> is an interactive benchmark that aims to highlight the biases that a dataset can hide.
                Each engineer can compare different bias rates through the disparate impact metric on several ML models
                and decide which one to use for his use case.<br> We do not care about accuracy, but we do care about the model that will be the fairest. <br>
                You can first try out a sample dataset for auditing, and then you can upload and audit your <strong style="color: black">CSV</strong>!
            </p>

        </div>

        <div class="text-center mt-4">
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


                <svg  id="Capa_1" width="80px" height="80px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 511 511" style="enable-background:new 0 0 511 511;" xml:space="preserve">
            <g>
                <path d="M487.5,111.965H148.116l43.079-43.077c4.439-4.439,6.883-10.341,6.883-16.618c0-6.277-2.445-12.179-6.885-16.618
                    l-22.628-22.625c-9.162-9.161-24.07-9.161-33.232,0.001L2.197,146.162C0.79,147.568,0,149.476,0,151.465s0.79,3.897,2.197,5.303
                    l133.137,133.133c4.582,4.582,10.599,6.872,16.617,6.872c6.017,0,12.035-2.291,16.615-6.871l22.628-22.625
                    c4.439-4.438,6.884-10.34,6.885-16.618c0-6.277-2.444-12.179-6.883-16.618l-43.079-43.078H487.5c12.958,0,23.5-10.542,23.5-23.5
                    v-32C511,122.507,500.458,111.965,487.5,111.965z M496,167.465c0,4.687-3.813,8.5-8.5,8.5H130.009c-3.034,0-5.768,1.827-6.929,4.63
                    c-1.161,2.803-0.519,6.028,1.626,8.173l55.883,55.881c1.605,1.605,2.49,3.74,2.49,6.01s-0.885,4.405-2.49,6.011l-22.628,22.625
                    c-3.314,3.313-8.706,3.313-12.02,0L18.107,151.465L145.94,23.635c3.314-3.314,8.706-3.313,12.02,0l22.628,22.625
                    c1.605,1.605,2.49,3.74,2.49,6.011s-0.884,4.405-2.49,6.011l-55.883,55.881c-2.145,2.145-2.787,5.371-1.626,8.173
                    c1.161,2.803,3.896,4.63,6.929,4.63H487.5c4.687,0,8.5,3.813,8.5,8.5V167.465z"/>
                <path d="M375.667,221.099c-9.162-9.161-24.07-9.162-33.232,0l-22.628,22.624c-4.439,4.438-6.884,10.34-6.884,16.618
                    c0,6.277,2.444,12.179,6.883,16.618l43.079,43.078H23.5c-12.958,0-23.5,10.542-23.5,23.5v32c0,12.958,10.542,23.5,23.5,23.5
                    h339.383l-43.079,43.077c-4.438,4.439-6.883,10.341-6.882,16.618c0,6.277,2.445,12.179,6.884,16.617l22.628,22.625
                    c4.581,4.581,10.598,6.871,16.616,6.871c6.018,0,12.036-2.291,16.617-6.872l133.136-133.133c1.407-1.406,2.197-3.314,2.197-5.303
                    s-0.79-3.897-2.197-5.303L375.667,221.099z M365.061,487.365c-3.314,3.314-8.706,3.314-12.021,0l-22.628-22.625
                    c-1.605-1.605-2.49-3.74-2.49-6.01c0-2.271,0.884-4.406,2.489-6.011l55.883-55.88c2.145-2.145,2.787-5.371,1.626-8.173
                    c-1.161-2.803-3.896-4.63-6.929-4.63H23.5c-4.687,0-8.5-3.813-8.5-8.5v-32c0-4.687,3.813-8.5,8.5-8.5h357.491
                    c3.034,0,5.768-1.827,6.929-4.63c1.161-2.803,0.519-6.028-1.626-8.173l-55.883-55.881c-1.605-1.605-2.49-3.74-2.489-6.011
                    c0-2.271,0.884-4.405,2.49-6.011l22.628-22.625c3.314-3.313,8.707-3.313,12.021,0l127.833,127.83L365.061,487.365z"/>
                <path d="M463.5,143.965h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5
                    S467.642,143.965,463.5,143.965z"/>
                <path d="M415.5,143.965h-112c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h112c4.142,0,7.5-3.358,7.5-7.5
                    S419.642,143.965,415.5,143.965z"/>
                <path d="M199.5,351.965h-16c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h16c4.142,0,7.5-3.358,7.5-7.5
                    S203.642,351.965,199.5,351.965z"/>
                <path d="M151.5,351.965h-112c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5,7.5,7.5h112c4.142,0,7.5-3.358,7.5-7.5
                    S155.642,351.965,151.5,351.965z"/>
                <path d="M157.928,57.518c2.929-2.929,2.929-7.678,0-10.606c-2.929-2.929-7.678-2.929-10.606,0l-32,32
                    c-2.929,2.929-2.929,7.678,0,10.606c1.464,1.464,3.384,2.197,5.303,2.197s3.839-0.732,5.303-2.197L157.928,57.518z"/>
                <path d="M354.863,256.162c-2.929,2.929-2.929,7.678,0,10.606l32,32c1.464,1.464,3.384,2.197,5.303,2.197s3.839-0.732,5.303-2.197
                    c2.929-2.929,2.929-7.678,0-10.606l-32-32C362.541,253.233,357.792,253.233,354.863,256.162z"/>
            </g>
            </svg>


            </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
                        <h3 style="color: black; font-weight: 600; font-size: 1.4rem">
                   AUDIT YOUR OWN DATASET
                </h3>
                        <!-- Alert message (start) -->

                        @if(Session::has('keys') && !empty(Session::get('keys')))
{{--                        <div>--}}


{{--                            <h1>{{$key}}</h1>--}}

{{--                        </div>--}}
                            <div class="modal" id="modalLoginForm" tabindex="-1" role="dialog"  style="display: block !important; color: black!important;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-center" style="color: black !important;">
                                            <h4 class="modal-title w-100 font-weight-bold">Important Attributes</h4>
                                            <button id="modal-to-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span style="color: black!important;" aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="/custom-analysis" enctype='multipart/form-data'
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
                                                        <option style="color: black !important;" value="{{$key}}">
                                                            {{$key}}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            <label style="color: black !important;" for="Sensitive">Sensitive
                                                Attribute: </label>
                                            <select style="color:#000 !important;" name="Sensitive"
                                                    id="Sensitive">
                                                @foreach(Session::get('keys') as $key)
                                                    @if($key == '')
                                                        @continue;
                                                    @endif
                                                    <option style="color: black !important;" value="{{$key}}">
                                                        {{$key}}
                                                    </option>
                                                @endforeach
                                            </select>
                                                <label style="color: black !important;" for="Privileged">Privileged
                                                    Attribute: </label>
                                                <select style="color:#000 !important;" name="Privileged"
                                                        id="Privileged">
                                                        <option style="color: black !important;" value="Pick Sensitive Column First" disabled>
                                                           Pick Sensitive Column First
                                                        </option>
                                                </select>

                                                <label style="color: black !important;" for="Unprivileged">Unprivileged
                                                    Attribute: </label>
                                                <select style="color:#000 !important;" name="Unprivileged"
                                                        id="Unprivileged">
                                                            <option style="color: black !important;" value="Pick Sensitive Column First" disabled>
                                                                Pick Sensitive Column First
                                                            </option>
                                                </select>



                                            <label style="color: black !important;" for="Analysis">Analysis
                                                Attribute: </label>
                                            <select style="color:#000 !important;" name="Analysis"
                                                    id="Analysis">
                                                @foreach(Session::get('keys') as $key)
                                                    @if($key == '')
                                                        @continue;
                                                    @endif
                                                    <option style="color: black !important;" value="{{$key}}">
                                                        {{$key}}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button class=" btn-import-excel attributes">Audit</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                    @endif
                    <!-- Alert message (end) -->

                        <form action="/uploadFile" enctype='multipart/form-data' method="post" style="margin: 25px;">
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
                        @if(Session::has('message'))
                            <div class="alert {{ Session::get('alert-class') }}">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                    </div>
                </div>

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content modal-content-feedback">
  <span class="close" onclick="closeFeedbackModal();">&times;</span>
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeYbU03_-rvgIkvbTHmv47kBp-nVm_ucAeVNx4oJhkVyUezKQ/viewform?embedded=true"  height="2115" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>  </div>

</div>
        <div class="feedback-class" style="text-align: center;color: black" class="mt-2">

            <a onclick="openFeedBackModal();">
<svg version="1.1" id="Feedback"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M405.333,42.667h-44.632c-4.418-12.389-16.147-21.333-30.035-21.333h-32.219C288.427,8.042,272.677,0,256,0
				s-32.427,8.042-42.448,21.333h-32.219c-13.888,0-25.617,8.944-30.035,21.333h-44.631C83.135,42.667,64,61.802,64,85.333v384
				C64,492.865,83.135,512,106.667,512h298.667C428.865,512,448,492.865,448,469.333v-384C448,61.802,428.865,42.667,405.333,42.667
				z M170.667,53.333c0-5.885,4.781-10.667,10.667-10.667h37.917c3.792,0,7.302-2.021,9.219-5.302
				c5.844-10.042,16.135-16.031,27.531-16.031s21.688,5.99,27.531,16.031c1.917,3.281,5.427,5.302,9.219,5.302h37.917
				c5.885,0,10.667,4.781,10.667,10.667V64c0,11.76-9.573,21.333-21.333,21.333H192c-11.76,0-21.333-9.573-21.333-21.333V53.333z
				 M426.667,469.333c0,11.76-9.573,21.333-21.333,21.333H106.667c-11.76,0-21.333-9.573-21.333-21.333v-384
				c0-11.76,9.573-21.333,21.333-21.333h42.667c0,23.531,19.135,42.667,42.667,42.667h128c23.531,0,42.667-19.135,42.667-42.667
				h42.667c11.76,0,21.333,9.573,21.333,21.333V469.333z"/>
			<path d="M202.667,170.667h-64c-5.896,0-10.667,4.771-10.667,10.667v64c0,5.896,4.771,10.667,10.667,10.667h64
				c5.896,0,10.667-4.771,10.667-10.667v-64C213.333,175.438,208.563,170.667,202.667,170.667z M192,234.667h-42.667V192H192
				V234.667z"/>
			<path d="M202.667,341.333h-64c-5.896,0-10.667,4.771-10.667,10.667v64c0,5.896,4.771,10.667,10.667,10.667h64
				c5.896,0,10.667-4.771,10.667-10.667v-64C213.333,346.104,208.563,341.333,202.667,341.333z M192,405.333h-42.667v-42.667H192
				V405.333z"/>
			<circle cx="277.333" cy="181.333" r="10.667"/>
			<circle cx="341.333" cy="181.333" r="10.667"/>
			<path d="M309.333,256c38.156,0,51.656-26.115,52.208-27.229c2.604-5.208,0.51-11.479-4.667-14.156
				c-5.177-2.719-11.583-0.646-14.344,4.479c-0.344,0.635-8.677,15.573-33.198,15.573c-24.333,0-32.729-14.719-33.188-15.563
				c-2.667-5.177-8.99-7.229-14.25-4.646c-5.271,2.635-7.406,9.042-4.771,14.313C257.677,229.885,271.177,256,309.333,256z"/>
			<circle cx="277.333" cy="352" r="10.667"/>
			<circle cx="341.333" cy="352" r="10.667"/>
			<path d="M309.333,384c-38.156,0-51.656,26.115-52.208,27.229c-2.604,5.208-0.51,11.479,4.667,14.156
				c5.156,2.698,11.573,0.656,14.344-4.479c0.344-0.635,8.677-15.573,33.198-15.573c24.333,0,32.729,14.719,33.188,15.563
				c1.885,3.656,5.615,5.771,9.49,5.771c1.604,0,3.229-0.365,4.76-1.125c5.271-2.635,7.406-9.042,4.771-14.313
				C360.99,410.115,347.49,384,309.333,384z"/>
		</g>
	</g>
</g> </a>
        </div>
        <div style="text-align: center;color: black" class="mt-2">
            © 2021 Research of a System for Βias Identification in Machine Learning, University of Patras
        </div>
    </div>
@endsection
