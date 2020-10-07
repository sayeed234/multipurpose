<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="{{asset('public/image/favi.jpg')}}" type="image/gif" >

  <title style="color:red !important;">জারা ক্ষুদ্র ব্যবসায়ী সমবায় সমিতি লিঃ</title>

    {{-- <link href="{{asset('public/admin/')}}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" /> --}}


  <!-- Bootstrap core CSS -->
  <link href="{{asset('public/web/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('public/web/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('public/web/css/grayscale.min.css')}}" rel="stylesheet">
<style>
@media only screen and (max-width: 600px) {
.name{
    display:none;
  }
}
@media only screen and (min-width: 600px) {
.name2{
    display:none;
  }
}
</style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
    <a  href="{{url('/')}}"><img src="public/image/jara.png" style="width:70px; height:70px; border-radius: 50%;"></a> &nbsp; &nbsp; 

      <a class="navbar-brand js-scroll-trigger name" href="{{url('/')}}"style="color:#a11d28!important;"><h3><strong>জারা ক্ষুদ্র ব্যবসায়ী সমবায় সমিতি লিঃ</strong></h3></a>

 <a class="navbar-brand js-scroll-trigger name2" href="{{url('/')}}"style="color:#a11d28!important;"><h6 style="font-size:18px;"><strong>জারা ক্ষুদ্র ব্যবসায়ী সমবায় সমিতি লিঃ</strong></h6></a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about"><b>About</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
          @if(Session::has('email'))
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{url('/admin-dashboard')}}">Dashboard</a>
          </li>
          @else
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{url('/admin-login')}}">Login</a>
          </li>
          
          @endif
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h3 class="mx-auto my-0 text-uppercase" style="color:white !important;"><b>সমবায় শক্তি সমবায়ই মুক্তি</b></h3><br> 
        
        <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center" style="background-color: yellow;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <h2 class="text-white mb-4" style="color:#a11d28 !important;">OUR MISSION</h2>
          <p class="text-white-50">আপনি ছোট ব্যবসা করবেন বলে ভাবছেন বাহ আপনি ক্ষুদ্র ব্যবসায়ী ব্যবসা টা বড় করবেন বলে ভাবছেন। আমরা আপনাকে আর্থিক সহায়তা করে থাকি।</p>

          </div>
          <div class="col-lg-6 mx-auto">
            <h2 class="text-white mb-4" style="color:#a11d28 !important;">OUR VISION</h2>
            <p class="text-white-50">জারা ক্ষুদ্র ব্যবসায়ী সমবায় সমিতি লিঃ একটি সমবায় সমিতি। আমরা  ২০১৯ থেকে আমাদের কার্যক্রম শুরু করেছি। সমবায় সমিতির ইতিহাস প্রায় মানবসভ্যতার ইতিহাসের ন্যায় প্রাচীন।</p>
            
          </div>
        </div>

      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-6 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="public/web/img/xx.jpg" alt="" >
          </div>
          <div class="col-xl-6 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <b><h5>Zara Small Business Cooperative Association Ltd.</b></h5>
              <p class="text-black-150 mb-0" style="text-align: justify;">
                The definition of cooperation is people working together to achieve results or people helping each other out to achieve a common goal. An example of cooperation is when one person hands you a brick and you lay the brick.</p>
                <br>
               <p class="text-black-150 mb-0" style="text-align: justify;">A cooperative business, also known as a co-op, is a type of organization that is both owned and controlled by its members, who also happen to use the services and products of the cooperative</p>
               <br>
             <h6><b>Cooperative Policy :</b></h6>
             <ul>
             <li>Cooperative power is the release of cooperative.</li>
             <li>Build cooperatives to save the country.</li>
             <li>Inter-cooperative Relations and Social Equality</li>
             <li>Education, training and information.</li>
             <li>Autonomy, independence and control of democratic members.</li>
             <li>Co-operative in Bangladesh has passed it scentury on its way. on initial state though it functioned with agriculture.</li>
             <li>Bangladesh Co-operative Society is constitutionally recored as on the most important sectors of the economy.</li>
             <li>Making a Difference Cooperative solutions to global poverty</li>
             </ul>
           </div>
         </div>

         <!-- Project One Row -->
         <div class="row align-items-center no-gutters mb-4 mb-lg-5" style="margin-top: 15px;">
           <div class="col-xl-6 col-lg-5">
            <b><h5> How can i take admission a Member</b> </h5>
            <p class="text-black-150 mb-0"style="text-align: justify;padding-right:25px;">
             A Co-operative society is anautonomous association of persons who voluntarily cooperate for theircommon economic interest.</p><br>
             <p class="text-black-150 mb-0"style="text-align: justify;padding-right:25px;">
             Cooperatives are typically based onthe cooperative values of "self-help,self-responsibility, democracy andequality, equity and solidarity“
           </p>
         <ul>
            <li>Name</li> 
            <li>Age</li> 
            <li>Mobile Number</li> 
            <li>NID</li> 
            <li>Husband Or Father Name</li> 
            <li>Village</li> 
            <li>Post Office</li> 
            <li> Upazila</li> 
            <li>District</li> 
            <li>More Information</li>  
        </ul>
          
        </div>   
        <div class="col-xl-6 col-lg-7">
          <div class="featured-text text-center text-lg-left">
            <img class="img-fluid mb-3 mb-lg-0" src="public/web/img/xxx.jpg" alt="" >
          </div>
        </div>
      </div>

      

      <!-- Project Two Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-6 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="public/web/img/x.jpg" style="padding: 20px;" alt="" >
        </div>
        <div class="col-xl-6 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <b><h5> Savings and loan side book</b> </h5>
            <p class="text-black-150 mb-0"style="text-align: justify;">
            phese credit societies were oganized the basis of two models, one for rural area and other for urban area. 1 or the farmer these were oganized on main fusion model while for the latter itwas pchulze Digital Bangladesh . Due to this Act a number of Co-operative Societies grew up in rural area, but they could not function effectively
             <ul><br>
              <li> Voluntary and open membership.</li>
              <li>Democratic member control.</li>
              <li>Economic participation by members.</li>
              <li> Autonomy and independence.</li>
              <li>Education, training and information.</li>
              <li>Cooperation among cooperatives.</li>
              <li>Concern for community.</li>

            </p>
          </ul>
              <br>
            <p class="text-black-150 mb-0"style="text-align: justify;">
            Passbook savings loans are secured by savings, CD balances. All have the same basic setup: You borrow money using your own savings account or certificate of deposit as collateral, while paying a much lower interest rate than you would on a credit card or unsecured personal loan
            </p>
        </div>
      </div>
    </div>
    <div class="row align-items-center no-gutters mb-4 mb-lg-5">
     <div class="col-xl-6 col-lg-5">
      <b><h5>Daily receipt</b> </h5>
      <p class="text-black-150 mb-0"style="text-align: justify; padding:17px;">
       Why should cash receipts be deposited on the day of their receipt? a. Daily deposits of all cash receipts to produce a timely independent record of the cash received. It also reduces the likelihood of cash theft and the risk that an employee could personally use the money before depositing it.<br><br>
       Where as, we write all the cash payments for the whole year on its credit side. We include both receipts and payments in cash whether they are of capital and revenue nature. We record only cash transactions in receipt and payment account. It generally shows a debit balance.
       <br><br>
       A payment receipt is a proof of payment. It is mostly for the buyer rather than for the business. It is typically not used in accounting for digital products. A payment receipt lets a buyer be sure that their payment was received by the business.
     </p>
  
  </div>   
  <div class="col-xl-6 col-lg-7">
    <div class="featured-text text-center text-lg-left">
      <img class="img-fluid mb-3 mb-lg-0" src="public/web/img/xxxx.jpg" alt="" >
    </div>
  </div>
</div>



</section>

<!-- Signup Section -->
<section id="signup" class="signup-section" style="margin-top: -100px; background-color: #64a19d;" >
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 mx-auto text-center">

        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

        <form class="form-inline d-flex">
          <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
          <button type="submit" class="btn btn-primary mx-auto">Send</button>
        </form>

      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
  <div class="container">

    <div class="row">

      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Address</h4>
            <hr class="my-4">
            <div class="small text-black-150"><b>চকভোলাই, মান্দা, নওগাঁ</b></div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-envelope text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Email</h4>
            <hr class="my-4">
            <div class="small text-black-150">
              <a href="#"><b>mdsumonyhoo7@gmail.com</b></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3 mb-md-0">
        <div class="card py-4 h-100">
          <div class="card-body text-center">
            <i class="fas fa-mobile-alt text-primary mb-2"></i>
            <h4 class="text-uppercase m-0">Phone</h4>
            <hr class="my-4">
            <div class="small text-black-150"><b>01717-291884</b></div>
          </div>
        </div>
      </div>
    </div>

    <div class="social d-flex justify-content-center">
      <a href="#" class="mx-2">
        <i class="fab fa-google"></i>
      </a>
      <a href="#" class="mx-2">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="mx-2">
        <i class="fab fa-youtube"></i>
      </a>
    </div>

  </div>
</section>

<!-- Footer -->
<footer class="bg-black small text-center text-white-50">
  <div class="container">
    Copyright &copy;জারা ক্ষুদ্র ব্যবসায়ী সমবায় সমিতি লিঃ 2019
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('public/web/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/web/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('public/web/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset('public/web/js/grayscale.min.js')}}"></script>

</body>

</html>
