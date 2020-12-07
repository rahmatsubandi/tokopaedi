@extends('layouts.coming')

@section('title')
Tokopaedi Rewards Page
@endsection

@push('prepend-style')
<!-- Styles -->
<script type="text/javascript"
  src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=etj2nJ75i3YhcmzXEH_LRiZReXTP9kyAR3_GzFMoHMAoVDcr6ssjBoNJvw4b5OTct0DG-ERlZaukRVihk-yoyg"
  charset="UTF-8"></script>
<link rel="stylesheet" crossorigin="anonymous"
  href="http://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cDovL3Rva29wYWVkaS50ZXN0L3Jld2FyZHNzcw" />
<style>
  html,
  body {
    background-color: #fff;
    color: #636b6f !important;
    font-family: 'Nunito', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
  }

  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .code {
    border-right: 2px solid;
    font-size: 26px;
    padding: 0 15px 0 15px;
    text-align: center;
  }

  .message {
    font-size: 18px;
    text-align: center;
  }
</style>
@endpush

@section('content')
<div class="flex-center position-ref full-height">
  <div class="code">This Features</div>
  <div class="message" style="padding: 10px;">Coming Soon</div>
  <a href="{{ route('home') }}" class="btn btn-success">Go Back Home</a>
</div>
@endsection