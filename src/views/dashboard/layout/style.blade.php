<style>
  * {
    font-family: 'Changa', sans-serif;
  }

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  .dropdown-toggle::after {
    position: relative;
    top: 3px;
    right: 8px;
  }

  .main-container {
    margin-top: 20px;
  }

  .page-title {
    margin: 20px 0px;
    text-align: right;
  }

  .nav-link {
    font-size: 18px !important;
  }

  .table .thead-dark th {
    color: #fff;
    background-color: #343a40!important;
    border-color: #32383e;
  }

  .form-submit-button-div {
    text-align: center;
    margin-top: 11px;
  }

  .table td {
    vertical-align: middle;
  }

  .options-button {
    position: relative;
    bottom: 6px;
  }

  .container {
    overflow: scroll;
  }

  .post-picture {
    height: 60px;
    margin-bottom: 11px;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  html,
  body {
    overflow-x: hidden;
    /* Prevent scroll on narrow devices */
  }

  body {
    padding-top: 56px;
  }

  @media (max-width: 991.98px) {
    .offcanvas-collapse {
      position: fixed;
      top: 56px;
      /* Height of navbar */
      bottom: 0;
      left: 100%;
      width: 100%;
      padding-right: 1rem;
      padding-left: 1rem;
      overflow-y: auto;
      visibility: hidden;
      background-color: #343a40;
      transition: visibility .3s ease-in-out, -webkit-transform .3s ease-in-out;
      transition: transform .3s ease-in-out, visibility .3s ease-in-out;
      transition: transform .3s ease-in-out, visibility .3s ease-in-out, -webkit-transform .3s ease-in-out;
    }

    .offcanvas-collapse.open {
      visibility: visible;
      -webkit-transform: translateX(-100%);
      transform: translateX(-100%);
    }
  }

  .nav-scroller {
    position: relative;
    z-index: 2;
    height: 3.1rem;
    overflow-y: hidden;
  }

  .nav-scroller .nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    color: rgba(255, 255, 255, .75);
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
  }

  .nav-underline .nav-link {
    padding-top: .75rem;
    padding-bottom: .75rem;
    font-size: .875rem;
    color: #6c757d;
  }

  .nav-underline .nav-link:hover {
    color: #007bff;
  }

  .nav-underline .active {
    font-weight: 500;
    color: #343a40;
  }

  .text-white-50 {
    color: rgba(255, 255, 255, .5);
  }

  .bg-purple {
    background-color: #6f42c1;
  }

  .lh-100 {
    line-height: 1;
  }

  .lh-125 {
    line-height: 1.25;
  }

  .lh-150 {
    line-height: 1.5;
  }
</style>