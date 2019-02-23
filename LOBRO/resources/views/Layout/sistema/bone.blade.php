<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('Layout.sistema.htmlheader')
@show


<body >
 
<div class="wrapper">

@include('Layout.sistema.sidebar')

<div class="main-panel">
        @include('Layout.sistema.mainheader')

 <div class="content">
            <div class="container-fluid">

@yield('main-content')

@include('Layout.sistema.footer')
            </div>
        </div>

</div>
</div>
<!-- ./wrapper -->

    @include('Layout.sistema.scripts')
    @stack('scripts')    
    
@show

</body>

</html>