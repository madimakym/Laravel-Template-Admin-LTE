<!DOCTYPE html>
<html>
<head>
    @include('layout.partials.head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('layout.partials.header')
    @include('layout.partials.sidebar')

    

    @include('layout.partials.content')
    @include('layout.partials.footer')
</div>

@include('layout.partials.footer-scripts')

</body>
</html>