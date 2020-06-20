<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="theme-color" content="#ffffff">
  <link rel="shortcut icon" href="/favicon.png" type="image/png">

  <title>@yield('title', config('app.name'))</title>

  @stack('scripts')

  @stack('styles')

  <style type="text/css">

    html, body {
      margin: 0;
      padding: 0;
    }

    .app-downloading {
      display: none;
    }

    .app-downloading > span {
      margin-bottom: 28px;
      letter-spacing: 7px;
      padding-left: 4px;
    }

    [v-cloak] > .app-downloading {

      display: flex;
      flex-direction: column;
      width: 100vw;
      height: 100vh;
      overflow: hidden;
      align-items: center;
      justify-content: center;
      font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;

      color: white;
      background: #00beff;
      background-image: url(/images/background.svg);
      background-image: url(/images/background.svg), linear-gradient(135deg, #00beff 0%, #9c43b8 100%);
      background-repeat: no-repeat;
      background-position: left center;
      background-size: cover;

    }

  </style>

<link href="/app/assets/css/chunk-vendors~253ae210.f4363224.css" rel="stylesheet"><link href="/app/assets/css/app~d0ae3f07.6fb6e77b.css" rel="stylesheet"></head>
<body>
<div id="app" v-cloak>
  <div class="app-downloading">
    <span>DOWNLOADING</span>
    <img src="/images/loading.svg" width="105"/>
  </div>
</div>
<script type="text/javascript" src="/app/assets/js/chunk-vendors~253ae210.f6a272fe.js"></script><script type="text/javascript" src="/app/assets/js/chunk-vendors~d939e436.a6a0258f.js"></script><script type="text/javascript" src="/app/assets/js/chunk-vendors~77bf5e45.d2c54ae3.js"></script><script type="text/javascript" src="/app/assets/js/chunk-vendors~daa565d3.2e273d44.js"></script><script type="text/javascript" src="/app/assets/js/app~d0ae3f07.008c7c20.js"></script></body>
</html>
