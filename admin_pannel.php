<?php

//database connectivity testing//
$con = mysqli_connect("localhost", "root", "", "fitplay_users");
?>
<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitplay_users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Turf Admin - Dashboard</title>
      <!-- admin card -->
      <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/cards/card-1/assets/css/card-1.css">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="vendor/css/sb-admin-2.css" rel="stylesheet">

      <style>
     .avatar {
        width: 30px;
        height: 30px;
        background-color: #007bff;
        color: #ffffff;
        font-size: 20px;
        font-weight: bold;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }
    .c-item{
      height:480px;

    }

    .c-img
    {
      height:100%;
      object-fit:cover;
      filter:brightness(0.6);
    }

    body{
      background:#f3f5f8;
      overflow-x:hidden;
    }

 

        .star-container {
            display: flex;
            align-items: center;
            margin-top: 15px; /* Adjust margin as needed */
        }

        .star-container i {
            margin-right: 2px; /* Adjust margin between stars as needed */
        }


    

    .card-container {
      background-color:#ffff;
      padding:20px;
      border-radius:20px;
             margin:40px;
            display: flex;
            gap: 20px; /* Adjust the margin between cards */
        }

        :root {
  --blue: #5e72e4;
  --indigo: #5603ad;
  --purple: #8965e0;
  --pink: #f3a4b5;
  --red: #f5365c;
  --orange: #fb6340;
  --yellow: #ffd600;
  --green: #2dce89;
  --teal: #11cdef;
  --cyan: #2bffc6;
  --white: #fff;
  --gray: #8898aa;
  --gray-dark: #32325d;
  --light: #ced4da;
  --lighter: #e9ecef;
  --primary: #5e72e4;
  --secondary: #f7fafc;
  --success: #2dce89;
  --info: #11cdef;
  --warning: #fb6340;
  --danger: #f5365c;
  --light: #adb5bd;
  --dark: #212529;
  --default: #172b4d;
  --white: #fff;
  --neutral: #fff;
  --darker: black;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: Open Sans, sans-serif;
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@-ms-viewport {
  width: device-width;
}

figcaption,
footer,
header,
main,
nav,
section {
  display: block;
}

body {
  font-family: Open Sans, sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  margin: 0;
  text-align: left;
  color: #525f7f;
  background-color: #f8f9fe;
}

[tabindex='-1']:focus {
  outline: 0 !important;
}

h2,
h5 {
  margin-top: 0;
  margin-bottom: .5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

dfn {
  font-style: italic;
}

strong {
  font-weight: bolder;
}

a {
  text-decoration: none;
  color: #5e72e4;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

a:hover {
  text-decoration: none;
  color: #233dd2;
}

a:not([href]):not([tabindex]) {
  text-decoration: none;
  color: inherit;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
  text-decoration: none;
  color: inherit;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

caption {
  padding-top: 1rem;
  padding-bottom: 1rem;
  caption-side: bottom;
  text-align: left;
  color: #8898aa;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  margin: 0;
}

button,
input {
  overflow: visible;
}

button {
  text-transform: none;
}

button,
[type='reset'],
[type='submit'] {
  -webkit-appearance: button;
}

button::-moz-focus-inner,
[type='button']::-moz-focus-inner,
[type='reset']::-moz-focus-inner,
[type='submit']::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type='radio'],
input[type='checkbox'] {
  box-sizing: border-box;
  padding: 0;
}

input[type='date'],
input[type='time'],
input[type='datetime-local'],
input[type='month'] {
  -webkit-appearance: listbox;
}

legend {
  font-size: 1.5rem;
  line-height: inherit;
  display: block;
  width: 100%;
  max-width: 100%;
  margin-bottom: .5rem;
  padding: 0;
  white-space: normal;
  color: inherit;
}

[type='number']::-webkit-inner-spin-button,
[type='number']::-webkit-outer-spin-button {
  height: auto;
}

[type='search'] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type='search']::-webkit-search-cancel-button,
[type='search']::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

[hidden] {
  display: none !important;
}

h2,
h5,
.h2,
.h5 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.5;
  margin-bottom: .5rem;
  color: #32325d;
}

h2,
.h2 {
  font-size: 1.25rem;
}

h5,
.h5 {
  font-size: .8125rem;
}

.container-fluid {
  width: 100%;
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
}

.row {
  display: flex;
  margin-right: -15px;
  margin-left: -15px;
  flex-wrap: wrap;
}

.col,
.col-auto,
.col-lg-6,
.col-xl-3,
.col-xl-6 {
  position: relative;
  width: 100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  max-width: 100%;
  flex-basis: 0;
  flex-grow: 1;
}

.col-auto {
  width: auto;
  max-width: none;
  flex: 0 0 auto;
}

@media (min-width: 992px) {
  .col-lg-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
}

@media (min-width: 1200px) {
  .col-xl-3 {
    max-width: 25%;
    flex: 0 0 25%;
  }
  .col-xl-6 {
    max-width: 50%;
    flex: 0 0 50%;
  }
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  border: 1px solid rgba(0, 0, 0, .05);
  border-radius: .375rem;
  background-color: #fff;
  background-clip: border-box;
}

.card-body {
  padding: 1.5rem;
  flex: 1 1 auto;
}

.card-title {
  margin-bottom: 1.25rem;
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.bg-info {
  background-color: #11cdef !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #0da5c0 !important;
}

.bg-warning {
  background-color: #fb6340 !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #fa3a0e !important;
}

.bg-danger {
  background-color: #f5365c !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #ec0c38 !important;
}

.bg-default {
  background-color: #172b4d !important;
}

a.bg-default:hover,
a.bg-default:focus,
button.bg-default:hover,
button.bg-default:focus {
  background-color: #0b1526 !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.align-items-center {
  align-items: center !important;
}

@media (min-width: 1200px) {
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
}

.shadow {
  box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mr-2 {
  margin-right: .5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pb-8 {
  padding-bottom: 8rem !important;
}

.m-auto {
  margin: auto !important;
}

@media (min-width: 768px) {
  .pt-md-8 {
    padding-top: 8rem !important;
  }
}

@media (min-width: 1200px) {
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-center {
  text-align: center !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.font-weight-bold {
  font-weight: 600 !important;
}

.text-white {
  color: #fff !important;
}

.text-success {
  color: #2dce89 !important;
}

a.text-success:hover,
a.text-success:focus {
  color: #24a46d !important;
}

.text-warning {
  color: #fb6340 !important;
}

a.text-warning:hover,
a.text-warning:focus {
  color: #fa3a0e !important;
}

.text-danger {
  color: #f5365c !important;
}

a.text-danger:hover,
a.text-danger:focus {
  color: #ec0c38 !important;
}

.text-white {
  color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
  color: #e6e6e6 !important;
}

.text-muted {
  color: #8898aa !important;
}

@media print {
  *,
  *::before,
  *::after {
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  p,
  h2 {
    orphans: 3;
    widows: 3;
  }
  h2 {
    page-break-after: avoid;
  }
  @ page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
}

figcaption,
main {
  display: block;
}

main {
  overflow: hidden;
}

.bg-yellow {
  background-color: #ffd600 !important;
}

a.bg-yellow:hover,
a.bg-yellow:focus,
button.bg-yellow:hover,
button.bg-yellow:focus {
  background-color: #ccab00 !important;
}

.bg-gradient-primary {
  background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

.bg-gradient-primary {
  background: linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
}

@keyframes floating-lg {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(15px);
  }
  100% {
    transform: translateY(0px);
  }
}

@keyframes floating {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(10px);
  }
  100% {
    transform: translateY(0px);
  }
}

@keyframes floating-sm {
  0% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(5px);
  }
  100% {
    transform: translateY(0px);
  }
}

[class*='shadow'] {
  transition: all .15s ease;
}

.text-sm {
  font-size: .875rem !important;
}

.text-white {
  color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
  color: #e6e6e6 !important;
}

[class*='btn-outline-'] {
  border-width: 1px;
}

.card-stats .card-body {
  padding: 1rem 1.5rem;
}

.main-content {
  position: relative;
}

@media (min-width: 768px) {
  .main-content .container-fluid {
    padding-right: 39px !important;
    padding-left: 39px !important;
  }
}

.footer {
  padding: 2.5rem 0;
  background: #f7fafc;
}

.footer .copyright {
  font-size: .875rem;
}

.header {
  position: relative;
}

.icon {
  width: 3rem;
  height: 3rem;
}

.icon i {
  font-size: 2.25rem;
}

.icon-shape {
  display: inline-flex;
  padding: 12px;
  text-align: center;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
}

.icon-shape i {
  font-size: 1.25rem;
}

@media (min-width: 768px) {
  @ keyframes show-navbar-dropdown {
    0% {
      transition: visibility .25s, opacity .25s, transform .25s;
      transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
      opacity: 0;
    }
    100% {
      transform: translate(0, 0);
      opacity: 1;
    }
  }
  @keyframes hide-navbar-dropdown {
    from {
      opacity: 1;
    }
    to {
      transform: translate(0, 10px);
      opacity: 0;
    }
  }
}

@keyframes show-navbar-collapse {
  0% {
    transform: scale(.95);
    transform-origin: 100% 0;
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes hide-navbar-collapse {
  from {
    transform: scale(1);
    transform-origin: 100% 0;
    opacity: 1;
  }
  to {
    transform: scale(.95);
    opacity: 0;
  }
}

p {
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.7;
}



       




  </style>
  <?php
   

   function getInitials($name) {
     $nameParts = explode(' ', $name);
     $initials = '';
     
     foreach ($nameParts as $part) {
         $initials .= strtoupper(substr($part, 0, 1));
     }
     
     return $initials;
   }
   ?>
   </head>
   
   <body>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav sidebar sidebar-dark " id="accordionSidebar" style="background-color:#252525;  ">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
               
               <b><h3 class="logo" style="font-family:Roboto Mono, sans-serif;">Fit<span style="color:grey ;font-family:Roboto Mono,sans-serif;">Play.</span></h3></b>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
           <li class="nav-item">
    <a class="nav-link" href="admin_turf.php">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0,0,255.99599,255.99599" style="fill:#000000;">
            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <g transform="scale(10.66667,10.66667)">
                    <path d="M9.66602,2l-0.49023,2.52344c-0.82417,0.31082 -1.58099,0.74649 -2.24414,1.29102l-2.42383,-0.83594l-2.33594,4.04297l1.94141,1.6875c-0.07463,0.45823 -0.11328,0.88286 -0.11328,1.29102c0,0.40877 0.03981,0.83263 0.11328,1.29102v0.00195l-1.94141,1.6875l2.33594,4.04102l2.42188,-0.83398c0.66321,0.54482 1.42175,0.97807 2.24609,1.28906l0.49023,2.52344h4.66797l0.49024,-2.52344c0.82471,-0.31102 1.58068,-0.74599 2.24414,-1.29102l2.42383,0.83594l2.33398,-4.04102l-1.93945,-1.68945c0.07463,-0.45823 0.11328,-0.88286 0.11328,-1.29102c0,-0.40754 -0.03887,-0.83163 -0.11328,-1.28906v-0.00195l1.94141,-1.68945l-2.33594,-4.04102l-2.42188,0.83398c-0.66321,-0.54482 -1.42175,-0.97807 -2.24609,-1.28906l-0.49024,-2.52344zM11.31445,4h1.37109l0.38867,2l1.04297,0.39453c0.62866,0.23694 1.19348,0.56222 1.68359,0.96484l0.86328,0.70703l1.92188,-0.66016l0.68555,1.18555l-1.53516,1.33594l0.17578,1.09961v0.00195c0.06115,0.37494 0.08789,0.68947 0.08789,0.9707c0,0.28123 -0.02674,0.59572 -0.08789,0.9707l-0.17773,1.09961l1.53516,1.33594l-0.68555,1.1875l-1.91992,-0.66211l-0.86523,0.70898c-0.49011,0.40262 -1.05298,0.7279 -1.68164,0.96484h-0.00195l-1.04297,0.39453l-0.38867,2h-1.36914l-0.38867,-2l-1.04297,-0.39453c-0.62867,-0.23694 -1.19348,-0.56222 -1.68359,-0.96484l-0.86328,-0.70703l-1.92187,0.66016l-0.68555,-1.18555l1.53711,-1.33789l-0.17773,-1.0957v-0.00195c-0.06027,-0.37657 -0.08789,-0.69198 -0.08789,-0.97266c0,-0.28123 0.02674,-0.59572 0.08789,-0.9707l0.17773,-1.09961l-1.53711,-1.33594l0.68555,-1.1875l1.92188,0.66211l0.86328,-0.70898c0.49011,-0.40262 1.05493,-0.7279 1.68359,-0.96484l1.04297,-0.39453zM12,8c-2.19652,0 -4,1.80348 -4,4c0,2.19652 1.80348,4 4,4c2.19652,0 4,-1.80348 4,-4c0,-2.19652 -1.80348,-4 -4,-4zM12,10c1.11148,0 2,0.88852 2,2c0,1.11148 -0.88852,2 -2,2c-1.11148,0 -2,-0.88852 -2,-2c0,-1.11148 0.88852,-2 2,-2z"></path>
                </g>
            </g>
        </svg>
        <span>Manage Turfs</span>
    </a>
</li>

            <li class="nav-item">
               <a class="nav-link" href="add_turf.php"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA+ElEQVR4nN2VawqCQBSFxaigNfTaQ3967iiKtF1orUyMFtFjF18M3EBsnLmW/agDF2TU841nxjtB8PcCWsASiIGjVCRj4SfGXWAH3KnWDdgCnbrmfSBzGJd1BsZa85HMrK6uwFATi5nNu8qdcUnmLiVSLm1cu8W1oEYTKV9Ur7sLWHle1AKM5jbAvkFAZAMcLA8mBVNTPanimG1NUi0gVQBSLSD+dkSLBgFTGyBU/METBeBS2QSlcbmUVmRe1NpqLoAOcOJ9ZUC7EiCQofyNdXUBBk7zEiSvOfO+yrwU18bzNebe2huLBxSa3iKd9nlkmuvZR0fmz+gBB5XkfNZfrNIAAAAASUVORK5CYII="> <span>Add Turfs</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="bookedturf.php"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA+ElEQVR4nN2VawqCQBSFxaigNfTaQ3967iiKtF1orUyMFtFjF18M3EBsnLmW/agDF2TU841nxjtB8PcCWsASiIGjVCRj4SfGXWAH3KnWDdgCnbrmfSBzGJd1BsZa85HMrK6uwFATi5nNu8qdcUnmLiVSLm1cu8W1oEYTKV9Ur7sLWHle1AKM5jbAvkFAZAMcLA8mBVNTPanimG1NUi0gVQBSLSD+dkSLBgFTGyBU/METBeBS2QSlcbmUVmRe1NpqLoAOcOJ9ZUC7EiCQofyNdXUBBk7zEiSvOfO+yrwU18bzNebe2huLBxSa3iKd9nlkmuvZR0fmz+gBB5XkfNZfrNIAAAAASUVORK5CYII="> <span>Booked Turf Record</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="Requests.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAvUlEQVR4nO2UMQrCQBBFV0E8jI0HSGOnhb138BDaCcGbeAqvYGmnQbS0D+ZJkikEd8PozhaCr1r4n//YJMS5P1qAGVAQT1Fv+QQn7Dj7BJWEvcgn0eALHm1E35MNgC1wBy5yHloKNryTWwpukk2ATM5XM8ErwEh6x08FlVKwk97SXADMpbMP9TSC4GcKHKQz7uh8L9DQJUBxg4bfFWjQvIMFUJLwZ1fGjgPT4NWElbOGlOM1ScddK1gnG0/JE938xWREqlSYAAAAAElFTkSuQmCC"> <span>Request</span></a>
            </li> 
            <li class="nav-item">
               <a class="nav-link" href="mg/admin_pannel.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA70lEQVR4nN2SPQ4BURhFn0IiEgWik6joiUUYCjuwC3sQa5AohBVQSvRalXIoRKEiSHBkkk+M+HvPjPi59bn3vMx8Sv1FgAPnNN8h2LsEGyDhu8QJ0MV7BupegKIPgtEjQQAYC1i8C173IsBMeuVncFXAnoGg9vTzuOAosJLLSmvwSRef131RU15U12Dbwra0xqWUk9ICCD/gsnLiayClLZDy0OByaqbjcWCuMey8vAOETAUNGeg7p2tU1hiPATtgC2R8HRdBEFjyQpSBpKL5Dy6iviZACZgCE8Dyyt0qOoVTbK/cRwSWlG2g4JX77RwBQwiZRbeqJ6YAAAAASUVORK5CYII="><span>Users Cart</span></a>
            </li> 
            <li class="nav-item">
            <a class="nav-link" href="turf.php"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 30 30"
style="fill:#FFFFFF;">
    <path d="M 15 2 A 1 1 0 0 0 14.300781 2.2851562 L 3.3925781 11.207031 A 1 1 0 0 0 3.3554688 11.236328 L 3.3183594 11.267578 L 3.3183594 11.269531 A 1 1 0 0 0 3 12 A 1 1 0 0 0 4 13 L 5 13 L 5 24 C 5 25.105 5.895 26 7 26 L 23 26 C 24.105 26 25 25.105 25 24 L 25 13 L 26 13 A 1 1 0 0 0 27 12 A 1 1 0 0 0 26.681641 11.267578 L 26.666016 11.255859 A 1 1 0 0 0 26.597656 11.199219 L 25 9.8925781 L 25 6 C 25 5.448 24.552 5 24 5 L 23 5 C 22.448 5 22 5.448 22 6 L 22 7.4394531 L 15.677734 2.2675781 A 1 1 0 0 0 15 2 z M 18 15 L 22 15 L 22 23 L 18 23 L 18 15 z"></path>
</svg> <span>Home</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            
			 
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            
         </ul>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand   topbar mb-4 static-top shadow" style="background-color:#252525;">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> <i class="fa fa-bars"></i> </button>
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto" >
                     <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                     <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-search fa-fw"></i> </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow +animated--grow-in" aria-labelledby="searchDropdown">
                           
                        </div>
                     </li>
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
          <?php
          if (isset($_SESSION['user_data'])) {
            // If the user is logged in, display username and "View Profile"
            $userName = $_SESSION['user_data']['lastname']; // Assuming username is at index 2
            $userInitials = getInitials($userName); // Replace getInitials with your actual function

            
            echo '<div style="display: flex; align-items: center;"><h6 style="color:white; font-weight:700;">Hello, ' . $userName . '</h6><div class="avatar" style="margin-left: 3px;"><a href="user_profile.php" style="color:white; text-decoration:none;">' . $userInitials . '</a></div></div>';
            
          } else {
            // If the user is not logged in, display login button
            echo '<button type="button" class="btn btn-primary ms-1 ml-3"><a href="signup.php"  style="color:white; text-decoration:none;">Sign Up</a></button>';
            echo '<span>    </span>';
            echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</button>';
          }
          ?>
        </li>
                        </span><!-- <img class="img-profile rounded-circle" src="vendor/img/undraw_profile.svg"> -->
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                           <a class="dropdown-item" href="#"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile </a>
                           <a class="dropdown-item" href="#"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings </a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" 
                              href="logout.php"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout </a>
                        </div>
                     </li>
                  </ul>
               </nav>


<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Address</th>
                            <th scope="col">Pay Mode</th>
                            <th scope="col">Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //main table starts from here//
                        //database connectivity//
                        $query = "SELECT * FROM `order_manager`";
                        $user_result = mysqli_query($con, $query);
                        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                            //fetch from database table Row//
                            echo "
                                <tr>
                                 <th>$user_fetch[Order_id]</th>
                                 <td>$user_fetch[Full_Name]</td>
                                 <td>$user_fetch[Phone_No]</td>
                                 <td>$user_fetch[Address]</td>
                                 <td>$user_fetch[Pay_Mod]</td>
                                 <td>
                                 
                                 <table class='table'>
                                 <thead>
                                   <tr> 
                                     <th scope='col'>Item_Name</th>
                                     <th scope='col'>Price</th>
                                     <th scope='col'>Quantity</th>
                                   </tr>
                                 </thead>
                                 <tbody>                                
                                 ";
                            
                                    //Inner table connectivity//
                                    $order_query = "SELECT * FROM `order_his` WHERE `user_id`=$user_fetch[user_id]";
                                    $order_result = mysqli_query($con, $order_query);
                                    while ($order_fetch = mysqli_fetch_assoc($order_result)) {
                                        echo "
                                        <tr>
                                            <th>$order_fetch[item_name]</th>
                                            <td>$order_fetch[price]</td>
                                            <td>$order_fetch[quantity]</td>
                                        </tr>
                                        ";
                                    }
                                    //inner table close//

                                echo "

                                    </tbody>
                                    </table>
                                    </td>
                                </tr>";

                            }
                        //main table close//
                        ?>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>