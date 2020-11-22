@stack('beforeCss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/nice-select.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/venobox/venobox.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
    integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
    crossorigin="anonymous" />
{{-- <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css"
    integrity="sha512-8D+M+7Y6jVsEa7RD6Kv/Z7EImSpNpQllgaEIQAtqHcI0H6F4iZknRj0Nx1DCdB+TwBaS+702BGWYC0Ze2hpExQ=="
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">



@stack('afterCss')

<style>
    .banner-area.bg-2 {
        background-image: url('{{ asset("img/banner.jpg") }}');
    }

    .challenges-area {
        background-image: url('{{ asset("img/challenges-bg.jpg") }}');
    }

    .counter-area {
        background-image: url('{{ asset("img/counter-bg.jpg") }}');
    }

    .get-in-touch-area {
        background-image: url('{{ asset("img/get-in-touch-bg.jpg") }}');
    }

    .footer-area {
        background-image: none !important;
        /* background-image: url('{{ asset("img/footer-bg.jpg") }}'); */
    }

    .btn-submit {
        background-color: #ff2a60;
        color: white;
        z-index: 1;
    }

    .btn-submit:hover {
        background-color: #ff5a00;
        color: #ffffff;
    }

    .btn-danger {
        padding: 10px 30px 10px;
    }

    .btn-danger:hover {
        background-color: #ff5a00;
        color: #ffffff;
    }

    .single-product .btn-danger {
        width: 100%;
        margin-top: 25px;
    }

    .btn {
        padding: 7px;
        border: 0px solid #ff2a60;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .footer_menu ul li a {
          font-size: 14px;
          line-height: 26px;
        }
      }

      @media only screen and (max-width: 767px) {
        .footer_menu ul li a {
          line-height: 22px;
          font-size: 13px;
        }
      }

      .footer_social {
        margin-top: 23px;
        text-align: center;
      }

      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .footer_social {
          margin-top: 17px;
        }
      }

      @media only screen and (max-width: 767px) {
        .footer_social {
          margin-top: 15px;
        }
      }

      .footer_social ul li {
        display: inline-block;
        margin-right: 8px;
      }

      .footer_social ul li:last-child {
        margin-right: 0;
      }

      @media only screen and (max-width: 767px) {
        .footer_social ul li {
          margin-right: 6px;
        }
      }

      .footer_social ul li a {
        width: 42px;
        height: 42px;
        line-height: 44px;
        display: block;
        text-align: center;
        font-size: 14px;
        background: #f2f2f2;
        border-radius: 50%;
      }

      .footer_social ul li a:hover {
        color: #ffffff;
        background: rgb(235, 51, 5);
      }

      @media only screen and (max-width: 767px) {
        .footer_social ul li a {
          width: 35px;
          height: 35px;
          line-height: 35px;
        }
      }

      .footer_widgetnav_menu {
        text-align: center;
      }

      .footer_widgetnav_menu ul li {
        display: inline-block;
        margin-right: 20px;
      }

      .footer_widgetnav_menu ul li:last-child {
        margin-right: 0;
      }

      @media only screen and (max-width: 767px) {
        .footer_widgetnav_menu ul li {
          margin-right: 14px;
        }
      }

      .footer_widgetnav_menu ul li a {
        font-size: 14px;
        line-height: 30px;
      }

      .footer_widgetnav_menu ul li a:hover {
        color: rgb(173, 43, 26);
      }

      .footer_app {
        text-align: center;
        margin-top: 32px;
      }

      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .footer_app {
          margin-top: 25px;
        }
      }

      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .footer_app {
          margin-top: 22px;
        }
      }

      .footer_app ul li {
        display: inline-block;
        margin-right: 10px;
      }

      .footer_app ul li:last-child {
        margin-right: 0;
      }

      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .footer_app ul li {
          margin-right: 6px;
        }
      }

      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .footer_app ul li {
          margin-right: 6px;
        }
      }

      @media only screen and (max-width: 767px) {
        .footer_app ul li {
          margin-right: 4px;
        }
      }

      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .footer_app ul li a img {
          max-width: 140px;
        }
      }

      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .footer_app ul li a img {
          max-width: 135px;
        }
      }

      @media only screen and (max-width: 767px) {
        .footer_app ul li a img {
          max-width: 128px;
        }
      }

      .footer_payment {
        text-align: right;
      }

      .footer_bottom {
        padding: 29px 0;
      }

      @media only screen and (max-width: 767px) {
        .footer_bottom {
          padding: 25px 0;
        }
      }

    .navbar-area .main-nav nav .navbar-nav .nav-item.active a {
        color: #f8fafc;
    }

    .banner-area.banner-area-two .banner-content {
        max-width: 690px;
    }

    .badge-year1{
        background-color: rgb(125, 241, 90)
    }

    .badge-year2{
        background-color: rgb(60, 243, 60)
    }

    .badge-year3{
        background-color: rgb(27, 214, 27)
    }

    .badge-year4{
        background-color: rgb(7, 226, 7)
    }

</style>

@yield('css')
