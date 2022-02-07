<!DOCTYPE html>
<html lang="en">

<head>
    <title>Documentation</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Simple CMS" />
    <link rel="icon" type="image/png" href="bat.png">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
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
                        <h1 style="color: black">Bias Auditing Tool <br> API documentation</h1>
                    </div>

                    <section class="main-section" id="Introduction">
                        <header>
                            <h2>Introduction</h2>
                        </header>
                        <article>
                            <p><b>Bias Auditing Tool </b> or <b> BAT</b> is an interactive benchmark that highlights the
                                bias that
                                a dataset can hide. Each engineer can compare different bias rates through the disparate
                                impact metric on several ML models and decide which one to use for his use case.
                                We do not care about accuracy, but we do care about the model that will be the fairest.
                            </p>
                        </article>
                    </section>
                    <hr>
                    <section class="main-section" id="compas">
                        <header>
                            <h2>COMPAS</h2>
                        </header>
                        <article>
                            <h3>ML models - Disparate Impact</h3>
                            <p>This request provides you the results of all Machine Learning models and their Disparate
                                Impact that we have tested on the dataset.<br>
                                <small>(Logistic Regression, Random Forest, Decision Tree, KNN, Naive Bayes, AdaBoost,
                                    SVM)</small>
                            </p>

                            <pre>
    <code>
<a href="https://bat-django.herokuapp.com/Compas/Ml" target="_blank"><span class="destinationMethod get">GET</span></a>  https://bat-django.herokuapp.com/Compas/Ml</code>
  </pre>
                            <h3>Gender</h3>
                            <p>This request provides you the results of Gender Distribution of the Dataset
                                and the ratio of Gender to ground truth.</p>

                            <pre>
    <code>
  <a href="https://bat-django.herokuapp.com/Compas/Gender" target="_blank"> <span class="destinationMethod get">GET</span></a>  https://bat-django.herokuapp.com/Compas/Gender</code>
  </pre>


                            <h3>Race</h3>
                            <p>This request provides you the results of Race Distribution of the Dataset
                                and the ratio of Race to ground truth.</p>

                            <pre>
    <code>
<a href="https://bat-django.herokuapp.com/Compas/Race" target="_blank"><span class="destinationMethod get">GET</span> </a> https://bat-django.herokuapp.com/Compas/Race</code>
  </pre>

                        </article>
                    </section>
            <hr>
                    <section class="main-section" id="credit_risk">
                        <header>
                            <h2>Credit Risk</h2>
                        </header>
                        <article>
                            <h3>ML models - Disparate Impact</h3>
                            <p>
                                This request provides you the results of all Machine Learning models and their Disparate
                                Impact that we have tested on the dataset.<br>
                                <small>(Logistic Regression, Random Forest, Decision Tree, KNN, Naive Bayes, AdaBoost,
                                    SVM)</small>
                            </p>
                            <pre>
    <code>
<a href="https://bat-django.herokuapp.com/German/Ml" target="_blank"><span class="destinationMethod get">GET</span></a> https://bat-django.herokuapp.com/German/Ml</code>
  </pre>
                            <h3>Gender</h3>
                            <p>This request provides you the results of Gender Distribution of the Dataset
                                and the ratio of Gender to ground truth.</p>

                            <pre>
                        <code>
                     <a href="https://bat-django.herokuapp.com/credit-risk/gender" target="_blank"><span class="destinationMethod get">GET</span> </a>   https://bat-django.herokuapp.com/credit-risk/gender</code>
                      </pre>


                            <h3>Risk</h3>
                            <p>This request provides you the results of Risk Distribution of the Dataset
                                and the ratio of Risk to ground truth.</p>

                            <pre>
                        <code>
              <a href="https://bat-django.herokuapp.com/credit-risk/bad-good" target="_blank"><span class="destinationMethod get">GET</span> </a>      https://bat-django.herokuapp.com/credit-risk/bad-good</code>
                      </pre>

                        </article>
                    </section>
                    <hr>
                    <section class="main-section" id="custom_dataset">
                        <header>
                            <h2>Custom Dataset</h2>
                        </header>
                        <article>
                            <h3>ML models - Disparate Impact - Analysis</h3>
                            <p>This tool enables developers to upload their dataset and analyze it for them. <br>
                                You can upload yours too <a href="/" target="_blank">here! </a> <br>You can get
                                information of other datasets also from other developers.<br>
                                Uploaded Datasets: (titanic)<br>
                                <small>Example Request:   </small>
                            </p>

                            <pre>
    <code>
    <a target="_blank" href="https://bat-django.herokuapp.com/custom/?filename=titanic&sensitive=Pclass&analysis=Pclass&target=Survived&privileged=1&unprivileged=3&dropFirstColumn=1&encode=1"><span class="destinationMethod get">GET</span>  </a>   https://bat-django.herokuapp.com/custom/filename=<span style="color:#8de1de; !important;">{filename}</span>/sensitive=<span style="color:#8de1de; !important;">{sensitive}</span>/analysis=<span style="color:#8de1de; !important;">{analysis}</span>/target=<span style="color:#8de1de; !important;">{target}</span>/privileged<span style="color:#8de1de; !important;">{privileged}</span>/unprivileged=<span style="color:#8de1de; !important;">{unprivileged}</span>/dropFirstColumn=<span style="color:#8de1de; !important;">{dropFirstColumn}</span>/encode=<span style="color:#8de1de; !important;">{encode}</span></code>
  </pre>

                        </article>
                    </section>

                </main>

                <hr>
                <footer>

                    <p>&copy 2022 Research of a System for Βias Identification in Machine Learning, University of Patras
                    </p>
                </footer>

            </div>
        </div>
    </div>
