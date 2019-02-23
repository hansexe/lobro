<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('Layout.login.htmlheader')
@show


<body >
 
<div class="wrapper">



<div class="main-panel">


 <div class="content">
            <div class="container-fluid">

@yield('login-content')

@include('Layout.login.footer')
            </div>
        </div>

</div>
</div>
<!-- ./wrapper -->

    @include('Layout.login.scripts')
    @stack('scripts')    
    
@show

</body>

</html>