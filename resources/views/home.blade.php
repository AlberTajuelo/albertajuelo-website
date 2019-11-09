<!DOCTYPE html>
<html lang="{{Config::get('app.locale')}}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AlberTajuelo website - Resume and contact form">
    <meta name="author" content="AlberTajuelo">
		<link rel="shortcut icon" href="{{ URL::to('favicon.ico') }}">

    <title>{{ trans('app.title') }}</title>

    <link href="https://blackrockdigital.github.io/startbootstrap-freelancer/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://blackrockdigital.github.io/startbootstrap-freelancer/css/freelancer.min.css" rel="stylesheet" type="text/css">

    <style>
      .portfolio .portfolio-item {max-width: 17rem;}
    </style>

  </head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">AlberTajuelo</a>
      <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ABOUT ME</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#work">WORK EXPERIENCE</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <img class="masthead-avatar mb-5 rounded-circle" src="img/albertajuelo.jpeg" alt="AlberTajuelo photo">

      <h1 class="masthead-heading mb-0">AlberTajuelo</h1>

      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <p class="masthead-subheading font-weight-light mb-0">Build & Release Engineer - Crypto Enthusiast - PC Gamer</p>

      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="{{ URL::to('/download/resume') }}">
          <i class="fas fa-download mr-2"></i>
          Download Resume!
        </a>
      </div>

      <br>

      <div class="col-lg-4 mb-5 mb-lg-0">

        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/albertajuelo/" target="_blank">
          <i class="fab fa-fw fa-linkedin-in"></i>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/albertajuelo" target="_blank">
          <i class="fab fa-fw fa-github"></i>
        </a>
        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/AlberTajuelo" target="_blank">
          <i class="fab fa-fw fa-twitter"></i>
        </a>
      </div>

    </div>
  </header>

  <section class="page-section mb-0" id="about">
    <div class="container">

      <h2 class="page-section-heading text-center mb-0">ABOUT ME</h2>

      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="row">
        <div class="col-lg-4 ml-auto">
          <p class="lead">Hi! I'm Alberto Gonz&aacute;lez and I love to empower business and professionals to create software with high quality and to reduce software development lifecycle costs.</p>

          <p class="lead">With six+ years of software development experience, I have become a great added value to a software development team.</p>

        </div>
        <div class="col-lg-4 mr-auto">
          <p class="lead">If you want to know more about my work experience, you can read more below.</p>

          <p class="lead">I am always looking for new challenges and to help more companies, so If I can be of any help to you, please feel free to reach out and contact me. Let's talk!</p>
        </div>
      </div>

    </div>
  </section>

  <section class="page-section portfolio bg-primary text-white" id="work">
    <div class="container">

      <h2 class="page-section-heading text-center text-uppercase text-white mb-0">WORK EXPERIENCE</h2>

      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/channeladivsor.png') }}" alt="ChannelAdvisor">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/airbus.png') }}" alt="Airbus">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/predictx.png') }}" alt="PredictX">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/stratiobd.png') }}" alt="StratioBD">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/fonetic.png') }}" alt="Fonetic">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/bring.png') }}" alt="Bring Global">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal7">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/indizen.png') }}" alt="Indizen">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal8">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/uc3m.png') }}" alt="UC3M">
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal9">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="{{ URL::to('img/work/ganetecglobalsolutions.png') }}" alt="Ganetec Global Solutions">
          </div>
        </div>

      </div>

    </div>
  </section>

  <section class="page-section" id="contact">
    <div class="container">

      <h2 class="page-section-heading text-center text-secondary mb-0">CONTACT</h2>

      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto">
          
          <p class="lead">You can contact me via email <a href="mailto:info@albertajuelo.com">info@albertajuelo.com</a></p>
          
        </div>
      </div>

    </div>
  </section>

  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <div class="col-lg-6">
          <h4 class="text-uppercase mb-6">Location</h4>
          <p class="lead mb-0">Spain, Madrid</p>
        </div>

        <div class="col-lg-6">
          <h4 class="text-uppercase mb-6">Licenses</h4>
          <p class="lead mb-0">This website has been created using Freelancer (MIT licensed Bootstrap theme) created by
            <a href="http://startbootstrap.com" target="_blank">Start Bootstrap</a>.</p>
        </div>

      </div>
    </div>
  </footer>

  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>AlberTajuelo 2014 - {{ date('Y') }}</small>
    </div>
  </section>

  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">ChannelAdvisor</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/channeladivsor.png') }}" alt="ChannelAdvisor">
                <p class="mb-5">ChannelAdvisor Corp. is an e-commerce company based in Morrisville, North Carolina. The company provides cloud-based e-commerce software solutions to over 2800 customers worldwide, including Dell, Karen Kane, KitchenAid, Under Armour, Timex and Samsung.</p>
                <p class="mb-5">Build pipeline implementation using Azure DevOps for projects with C#, F# and JavaScript (React) in Windows environments (AWS and on-premise environments).</p>
                <p class="mb-5">Tech knowledge sharing about containers (Docker) and Git.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Airbus</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/airbus.png') }}" alt="Airbus">
                <p class="mb-5">Pipeline implementation using Jenkins, Docker, Gitlab and Bitbucket, SonarQube, Nexus, Ansible with projects using C++/Python/Go/Ada in Windows and Linux environments.</p>
                <p class="mb-5">Company training about tech topics: Git (git internal, git workflow, advanced git), Agile (Scrum), Docker. DevOps and CI/CD.</p>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">PredictX</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/predictx.png') }}" alt="PredictX">
                <p class="mb-5">Test automation (Backend with SoapUI, and Karate). Frontend with Cucumber and Protactor. Performance testing with jMeter.</p>
                <p class="mb-5">Extending Jenkins Pipeline flow creating company Jenkins Shared Library (in Groovy). Jenkinsfile is a standard for all company repositories. Integration with SonarQube, Bitbucket, Slack and company test management tool (developed by myself).</p>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">StratioBD</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/stratiobd.png') }}" alt="StratioBD">
                <p class="mb-5">Test automation including Performance Tests with Gatling.</p>
                <p class="mb-5">Cloud Orchestration and Provisioning using Amazon AWS (EC2) and Terraform. Automatic Installation using Ansible of Kerberos, OpenLDAP, NFS Server, HDFS Server, Zookeeper and Spark.</p>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Fonetic</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/fonetic.png') }}" alt="Fonetic">
                <p class="mb-5">User stories, tasks and bugs management and validation. Integration and acceptance testing using C# with NUnit and Specflow.</p>
                <p class="mb-5">Fonetic R&D department quality control. Improving internal procedures, product traceability and bug prevention.</p>
                <p class="mb-5">Continuous Integration with Jenkins, SonarQube, Nexus and Redmine. Agile and SCRUM methodologies.</p>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Bring Global</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/bring.png') }}" alt="Bring Global">
                <p class="mb-5">Working on development department at Vaughan Systems. App development using Laravel 5, AngularJS, Cordova (PhoneGap). API design and development to be consumed for external applications using REST services.</p>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-labelledby="portfolioModal7Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Indizen</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/indizen.png') }}" alt="Indizen">
                <p class="mb-5">Design and development of unit testing in Java (jUnit) and integration testing using Selenium with Jenkins.</p>
                <p class="mb-5">Implementation of Continuous Integration Using Jenkins for build, create package, code analysis, build report and unit and integration test. Development Integration tests using Java and Selenium.</p>
                <p class="mb-5">Design, development and maintenance of integration testing (using Python) with HP Application Lifecycle Management.</p>
                <p class="mb-5">Continuous Integration pipeline development: Personalized reports (tests run/failed, time consumed), task creation on Jenkins with build, package, code analysis using SonarQube, bug and defects in Trac and launch unit testing for C++, Python, Java and TIBCO BusinessWorks.</p>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-labelledby="portfolioModal8Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">UC3M</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/uc3m.png') }}" alt="UC3M">
                <p class="mb-5">Web Development with PHP + MySQL using new web technologies, like Laravel, Bootstrap and jQuery.</p>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-labelledby="portfolioModal9Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Ganetec Global Solutions</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <img class="img-fluid rounded mb-5" src="{{ URL::to('img/work/ganetecglobalsolutions.png') }}" alt="Ganetec Global Solutions">
                <p class="mb-5">· C# development with biometric products, based on iris recognition, to integrate surveillance systems. NFC Development with Android devices.</p>

                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script src="https://blackrockdigital.github.io/startbootstrap-freelancer/js/freelancer.min.js"></script>

</body>

</html>
