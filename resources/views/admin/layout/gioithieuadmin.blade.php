@extends('admin.layout.index')

@section('content')
  <style>

  </style>
</head>

<body>
        <div id="page-wrapper">
            <div class="container-fluid">
            	  <style>
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  </style>
<div class="container-fluid bg-1 text-center">
  <h3>Who Am I?</h3>
  <img src="upload/img/logo.gif" class="img-circle" alt="Bird" width="350" height="350">
  <h3>I'm Administrator </h3>
</div>

<div class="container-fluid bg-2 text-center">
  <h3>Bạn có thể làm gì?</h3>
  <p>Nơi đây sẽ giúp bạn quản trị toàn bộ trang website, các nội dung tin tức được cập nhập tại đây. Được sử dụng toàn bộ chức năng của trang web</p>
  <pre><code>Webite được xây dựng bởi Framework Laravel
  Developed by Quy Dong
</code></pre>
</div>
@endsection