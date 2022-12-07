<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('/cssfile/style.css')}}">
  <link rel="stylesheet" href="{{asset('/cssfile/mobile.css')}}">
</head>

<body>
<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-#0D6986">
  <div class="container">
    <a class="navbar-brand" href="#">
      <h6>GS DOKANIA <br>& ASSOCIATES</h6>
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-icon top-bar"></span>
      <span class="toggler-icon middle-bar"></span>
      <span class="toggler-icon bottom-bar"></span>
    </button>
    
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="<?php echo url('home')?>">Home</a>
            </li>
            <li class="nav-item dropdown menu-area" id="mega-one">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Services </a>
              <div class="dropdown-menu mega-area" aria-labelledby="mega-one">
                <div class="header1">
                  <b>Service List</b>
                  <hr>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-lg-3 size">
                    
                    <b>Business Registration</b>
                    <hr>
                    <a href="<?php echo url('online-services')?>" class="dropdown-item">Online Company registration</a>
                    <a href="<?php echo url('private-services')?>" class="dropdown-item">Private Limited Registration</a>
                    <a href="<?php echo url('OPC-services')?>" class="dropdown-item">OPC Registration</a>
                    <a href="<?php echo url('LPP-services')?>" class="dropdown-item">Lpp registration</a>
                    <a href="<?php echo url('partnership-services')?>" class="dropdown-item">Partnership Registration</a>
                    <a href="<?php echo url('NGO-services')?>" class="dropdown-item">NGO Registration</a>
                    <a href="<?php echo url('Nidhi-services')?>" class="dropdown-item">Nidhi Company Registration</a>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <b>GST Services</b>
                    <hr>
                    <a href="<?php echo url('GST-registration-services')?>" class="dropdown-item">GST Registration</a>
                    <a href="<?php echo url('GST-FILL-services')?>" class="dropdown-item">GST Filing</a>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <b>Taxation services</b>
                    <hr>
                    <a href="<?php echo url('CA-services')?>" class="dropdown-item">Online CA Services</a>
                    <a href="<?php echo url('ITR-Filling-services')?>" class="dropdown-item">ITR Filing</a>
                    <a href="#" class="dropdown-item">Tax Planning</a>
                    <a href="#" class="dropdown-item">Tax Consultancy</a>
                    <a href="#" class="dropdown-item">Accounting & BookkeepingHtml</a>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <b>Trademarks & IPR</b>
                    <hr>
                    <a href="<?php echo url('trademark-services')?>" class="dropdown-item">Trademark Registration</a>
                    <a href="#" class="dropdown-item">Trademark Reply</a>
                    <a href="#" class="dropdown-item">Copyright Registration</a>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <b>Licence & Compliance</b>
                    <hr>
                    <a href="<?php echo url('IEC-services')?>" class="dropdown-item">IEC Registration</a>
                    <a href="<?php echo url('ROC-services')?>" class="dropdown-item">ROC Compliance</a>
                    <a href="<?php echo url('FSSAI-services')?>" class="dropdown-item">FSSAI Registration</a>
                    <a href="<?php echo url('MSME-services')?>" class="dropdown-item">MSME Registration</a>
                  </div>
                  <hr>
                  <div class="header1">
                    <b>Form Services</b>
                    <hr>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-lg-3">
                      <a href="<?php echo url('GST-registration-services')?>" class="dropdown-item">GST Registration</a>
                      <a href="#" class="dropdown-item">GST Return</a>
                      <a href="<?php echo url('ITR-Filling-services')?>" class="dropdown-item">ITR Filing</a>
                      <a href="#" class="dropdown-item">TDS Returns</a>
                      <a href="#" class="dropdown-item">Tax planning</a>
                      <a href="#" class="dropdown-item">Wealth management</a>
                      <a href="#" class="dropdown-item">Others</a>
                    </div>
                  </div>
                </div>
  
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo url('about')?>"> About </a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo url('blog')?>"> Blog</a></li>
          </ul>
          <ul class="navbar-nav ml-auto ">
            <a href="<?php echo url('contact')?>" class="btn"><b>Contact Us</b></a>
  
          </ul>
        </div>
      </div>
    </nav>
