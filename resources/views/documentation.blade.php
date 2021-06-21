<!DOCTYPE html>
<html lang="en">
<head>
    <title>Documentation</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Simple CMS"/>
    <link rel="icon" type="image/png" href="bat.png">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link href="/css/documentation.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container-fluid">
    <div class="row">

        <div class="col">
            <nav id="navbar">
                <ul class="nav flex-column">
                    <header>References</header>
                    <li class="nav-item">
                        <a class="nav-link introduction" href="#Introduction">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link Compas" href="#compas">Compas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link content" href="#credit_risk">Credit Risk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link components" href="#custom_dataset">Custom Dataset</a>
                    </li>

                </ul>
            </nav>
        </div>

        <div class="col-md-9">
            <main id="main-doc">
                <div class="head-box">
                    <h1 style="color: black">Bias Auditing Tool - API documentation</h1>
                </div>

                <section class="main-section" id="Introduction">
                    <header><h2>Introduction</h2></header>
                    <article>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum.</p></article>
                </section>

                <section class="main-section" id="compas">
                    <header><h2>COMPAS</h2></header>
                    <article>
                        <h3>ML models - Disparate Impact</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel
                            sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam
                            eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique
                            accusantium nemo autem.</p>

                        <pre>
    <code>
<span class="destinationMethod get">GET</span>  https://bat-django.herokuapp.com/Compas/Ml</code>
  </pre>
                        <h3>Gender</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel
                            sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam
                            eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique
                            accusantium nemo autem.</p>

                        <pre>
    <code>
   <span class="destinationMethod get">GET</span>  https://bat-django.herokuapp.com/Compas/Gender</code>
  </pre>


                        <h3>Race</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel
                            sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam
                            eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique
                            accusantium nemo autem.</p>

                        <pre>
    <code>
<span class="destinationMethod get">GET</span>  https://bat-django.herokuapp.com/Compas/Race</code>
  </pre>

                    </article>
                </section>

                <section class="main-section" id="credit_risk">
                    <header><h2>Credit Risk</h2></header>
                    <article>
                        <h3>ML models - Disparate Impact</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel
                            sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam
                            eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique
                            accusantium nemo autem.</p>

                        <pre>
    <code>
<span class="destinationMethod get">GET</span> https://bat-django.herokuapp.com/German/Ml</code>
  </pre>
                        <h3>Gender</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel
                            sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam
                            eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique
                            accusantium nemo autem.</p>

                        <pre>
                        <code>
                     <span class="destinationMethod get">GET</span>    https://bat-django.herokuapp.com/credit-risk/gender</code>
                      </pre>


                        <h3>Risk</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel
                            sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam
                            eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique
                            accusantium nemo autem.</p>

                        <pre>
                        <code>
              <span class="destinationMethod get">GET</span>       https://bat-django.herokuapp.com/credit-risk/bad-good</code>
                      </pre>

                    </article>
                </section>
                <section class="main-section" id="custom_dataset">
                    <header><h2>Custom Dataset</h2></header>
                    <article>
                        <h3>ML models - Disparate Impact - Analysis</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel
                            sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam
                            eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique
                            accusantium nemo autem.</p>

                        <pre>
    <code>
    <span class="destinationMethod get">GET</span>     https://bat-django.herokuapp.com/custom/<span style="color:#8de1de; !important;">{filename}</span>/<span style="color:#8de1de; !important;">{sensitive}</span>/<span style="color:#8de1de; !important;">{analysis}</span>/<span style="color:#8de1de; !important;">{target}</span>/<span style="color:#8de1de; !important;">{privileged}</span>/<span style="color:#8de1de; !important;">{unprivileged}</span>/</code>
  </pre>

                    </article>
                </section>

            </main>

            <hr>
            <footer>

                <p>&copy 2021 Research of a System for Βias Identification in Machine Learning, University of Patras</p>
            </footer>

        </div>
    </div>
</div>

