
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Analytics | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="../../../../icon.css?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
          <div class="nav-wrapper">
            <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Explore Materialize" data-search="template-list">
              <ul class="search-list collection display-none"></ul>
            </div>
            <ul class="navbar-list right">
              <li class="dropdown-language"><a class="waves-effect waves-block waves-light translation-button" href="#" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li>
              <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
              <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
              <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
              <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li>
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="en"><i class="flag-icon flag-icon-gb"></i> English</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></li>
              <li class="dropdown-item"><a class="grey-text text-darken-1" href="#!" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a></li>
            </ul>
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
              <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
              <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
              <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form id="navbarForm">
                <div class="input-field search-input-sm">
                  <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                  <ul class="search-list collection search-list-sm display-none"></ul>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="../../../app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="../../../app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
          </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down " src="../../../app-assets/images/logo/materialize-logo.png" alt="materialize logo"><img class="show-on-medium-and-down hide-on-med-and-up" src="../../../app-assets/images/logo/materialize-logo-color.png" alt="materialize logo"><span class="logo-text hide-on-med-and-down">Materialize</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge pill orange float-right mr-10">3</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Modern</span></a>
              </li>
              <li><a href="dashboard-ecommerce.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">eCommerce</span></a>
              </li>
              <li class="active"><a class="active" href="dashboard-analytics.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Analytics</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="Templates">Templates</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Vertical</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="../vertical-modern-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern Menu">Modern Menu</span></a>
                    </li>
                    <li><a href="../vertical-menu-nav-dark-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Navbar Dark">Navbar Dark</span></a>
                    </li>
                    <li><a href="../vertical-gradient-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Gradient Menu">Gradient Menu</span></a>
                    </li>
                    <li><a href="index.htm"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Dark Menu">Dark Menu</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Horizontal">Horizontal</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="../horizontal-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Horizontal Menu">Horizontal Menu</span></a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="Chat">Chat</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">ToDo</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-kanban.html"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-file-manager.html"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">File manager</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-contacts.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Contacts">Contacts</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-calendar.html"><i class="material-icons">today</i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="app-invoice-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Invoice List</span></a>
              </li>
              <li><a href="app-invoice-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice View">Invoice View</span></a>
              </li>
              <li><a href="app-invoice-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Edit">Invoice Edit</span></a>
              </li>
              <li><a href="app-invoice-add.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Add">Invoice Add</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="eCommerce">eCommerce</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="eCommerce-products-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Products Page">Products Page</span></a>
              </li>
              <li><a href="eCommerce-pricing.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pricing">Pricing</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="user-profile-page.html"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">User Profile</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">Pages</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="page-contact.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Contact</span></a>
              </li>
              <li><a href="page-blog-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">Blog</span></a>
              </li>
              <li><a href="page-search.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">Search</span></a>
              </li>
              <li><a href="page-knowledge.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Knowledge">Knowledge</span></a>
              </li>
              <li><a href="page-timeline.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Timeline">Timeline</span></a>
              </li>
              <li><a href="page-faq.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="FAQs">FAQs</span></a>
              </li>
              <li><a href="page-account-settings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Account Settings">Account Settings</span></a>
              </li>
              <li><a href="page-blank.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Blank">Page Blank</span></a>
              </li>
              <li><a href="page-collapse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Collapse">Page Collapse</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="Medias">Medias</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="media-gallery-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Gallery Page">Gallery Page</span></a>
              </li>
              <li><a href="media-hover-effects.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media Hover Effects">Media Hover Effects</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">User</span><span class="badge badge pill purple float-right mr-10">3</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="page-users-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">List</span></a>
              </li>
              <li><a href="page-users-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="View">View</span></a>
              </li>
              <li><a href="page-users-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">lock_open</i><span class="menu-title" data-i18n="Authentication">Authentication</span><span class="badge badge pill purple float-right mr-10">10</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="user-login.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Login">Login</span></a>
              </li>
              <li><a href="user-register.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Register">Register</span></a>
              </li>
              <li><a href="user-forgot-password.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Forgot Password">Forgot Password</span></a>
              </li>
              <li><a href="user-lock-screen.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Lock Screen">Lock Screen</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">filter_tilt_shift</i><span class="menu-title" data-i18n="Misc">Misc</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="page-404.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="404">404</span></a>
              </li>
              <li><a href="page-maintenance.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Maintenanace">Page Maintenanace</span></a>
              </li>
              <li><a href="page-500.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="500">500</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">cast</i><span class="menu-title" data-i18n="Cards">Cards</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="cards-basic.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards">Cards</span></a>
              </li>
              <li><a href="cards-advance.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Cards Advance</span></a>
              </li>
              <li><a href="cards-extended.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Extended">Cards Extended</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">invert_colors</i><span class="menu-title" data-i18n="CSS">CSS</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="css-typography.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Typograpy">Typograpy</span></a>
              </li>
              <li><a href="css-color.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Color">Color</span></a>
              </li>
              <li><a href="css-grid.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Grid">Grid</span></a>
              </li>
              <li><a href="css-helpers.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Helpers">Helpers</span></a>
              </li>
              <li><a href="css-media.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media">Media</span></a>
              </li>
              <li><a href="css-pulse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pulse">Pulse</span></a>
              </li>
              <li><a href="css-sass.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sass">Sass</span></a>
              </li>
              <li><a href="css-shadow.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Shadow">Shadow</span></a>
              </li>
              <li><a href="css-animations.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Animations">Animations</span></a>
              </li>
              <li><a href="css-transitions.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Transitions">Transitions</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Basic UI">Basic UI</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Buttons">Buttons</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="ui-basic-buttons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Basic">Basic</span></a>
                    </li>
                    <li><a href="ui-extended-buttons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Extended">Extended</span></a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a href="ui-icons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Icons">Icons</span></a>
              </li>
              <li><a href="ui-alerts.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Alerts">Alerts</span></a>
              </li>
              <li><a href="ui-badges.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Badges">Badges</span></a>
              </li>
              <li><a href="ui-breadcrumbs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Breadcrumbs">Breadcrumbs</span></a>
              </li>
              <li><a href="ui-chips.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chips">Chips</span></a>
              </li>
              <li><a href="ui-collections.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Collections">Collections</span></a>
              </li>
              <li><a href="ui-navbar.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Navbar">Navbar</span></a>
              </li>
              <li><a href="ui-pagination.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pagination">Pagination</span></a>
              </li>
              <li><a href="ui-preloader.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Preloader">Preloader</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_brightness</i><span class="menu-title" data-i18n="Advanced UI">Advanced UI</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="advance-ui-carousel.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Carousel">Carousel</span></a>
              </li>
              <li><a href="advance-ui-collapsibles.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Collapsibles">Collapsibles</span></a>
              </li>
              <li><a href="advance-ui-toasts.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Toasts">Toasts</span></a>
              </li>
              <li><a href="advance-ui-tooltip.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tooltip">Tooltip</span></a>
              </li>
              <li><a href="advance-ui-dropdown.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Dropdown">Dropdown</span></a>
              </li>
              <li><a href="advance-ui-feature-discovery.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Discovery">Discovery</span></a>
              </li>
              <li><a href="advance-ui-media.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media">Media</span></a>
              </li>
              <li><a href="advance-ui-modals.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modals">Modals</span></a>
              </li>
              <li><a href="advance-ui-scrollspy.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Scrollspy">Scrollspy</span></a>
              </li>
              <li><a href="advance-ui-tabs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tabs">Tabs</span></a>
              </li>
              <li><a href="advance-ui-waves.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Waves">Waves</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="Extra Components">Extra Components</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="extra-components-range-slider.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Range Slider">Range Slider</span></a>
              </li>
              <li><a href="extra-components-sweetalert.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sweetalert">Sweetalert</span></a>
              </li>
              <li><a href="extra-components-nestable.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Nestable">Nestable</span></a>
              </li>
              <li><a href="extra-components-treeview.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Treeview">Treeview</span></a>
              </li>
              <li><a href="extra-components-ratings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Ratings">Ratings</span></a>
              </li>
              <li><a href="extra-components-tour.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tour">Tour</span></a>
              </li>
              <li><a href="extra-components-i18n.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="i18n">i18n</span></a>
              </li>
              <li><a href="extra-components-highlight.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Highlight">Highlight</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="table-basic.html"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="Basic Tables">Basic Tables</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="table-data-table.html"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="Data Tables">Data Tables</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="Forms">Forms</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="form-elements.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Elements">Form Elements</span></a>
              </li>
              <li><a href="form-select2.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Select2">Form Select2</span></a>
              </li>
              <li><a href="form-validation.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Validation">Form Validation</span></a>
              </li>
              <li><a href="form-masks.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Masks">Form Masks</span></a>
              </li>
              <li><a href="form-editor.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Editor">Form Editor</span></a>
              </li>
              <li><a href="form-file-uploads.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="File Uploads">File Uploads</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="Form Layouts">Form Layouts</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Charts</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="Chart">Chart</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="charts-chartjs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">ChartJS</span></a>
              </li>
              <li><a href="charts-chartist.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chartist">Chartist</span></a>
              </li>
              <li><a href="charts-sparklines.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sparkline Charts">Sparkline Charts</span></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu levels</span></a>
          <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
              <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
              </li>
              <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html" target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="../../../../index.htm" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a>
        </li>
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <div class="section">
   <!-- card stats start -->
   <div id="card-stats" class="pt-0">
      <div class="row">
         <div class="col s12 m6 l3">
            <div class="card animate fadeLeft">
               <div class="card-content cyan white-text">
                  <p class="card-stats-title"><i class="material-icons">person_outline</i> New Clients</p>
                  <h4 class="card-stats-number white-text">566</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 15%
                     <span class="cyan text text-lighten-5">from yesterday</span>
                  </p>
               </div>
               <div class="card-action cyan darken-1">
                  <div id="clients-bar" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeLeft">
               <div class="card-content red accent-2 white-text">
                  <p class="card-stats-title"><i class="material-icons">attach_money</i>Total Sales</p>
                  <h4 class="card-stats-number white-text">$8990.63</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 70% <span class="red-text text-lighten-5">last
                        month</span>
                  </p>
               </div>
               <div class="card-action red">
                  <div id="sales-compositebar" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeRight">
               <div class="card-content orange lighten-1 white-text">
                  <p class="card-stats-title"><i class="material-icons">trending_up</i> Today Profit</p>
                  <h4 class="card-stats-number white-text">$806.52</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_up</i> 80%
                     <span class="orange-text text-lighten-5">from yesterday</span>
                  </p>
               </div>
               <div class="card-action orange">
                  <div id="profit-tristate" class="center-align"></div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l3">
            <div class="card animate fadeRight">
               <div class="card-content green lighten-1 white-text">
                  <p class="card-stats-title"><i class="material-icons">content_copy</i> New Invoice</p>
                  <h4 class="card-stats-number white-text">1806</h4>
                  <p class="card-stats-compare">
                     <i class="material-icons">keyboard_arrow_down</i> 3%
                     <span class="green-text text-lighten-5">from last month</span>
                  </p>
               </div>
               <div class="card-action green">
                  <div id="invoice-line" class="center-align"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--card stats end-->
   <!--chart dashboard start-->
   <div id="chart-dashboard">
      <div class="row">
         <div class="col s12 m8 l8">
            <div class="card animate fadeUp">
               <div class="card-move-up waves-effect waves-block waves-light">
                  <div class="move-up cyan darken-1">
                     <div>
                        <span class="chart-title white-text">Revenue</span>
                        <div class="chart-revenue cyan darken-2 white-text">
                           <p class="chart-revenue-total">$4,500.85</p>
                           <p class="chart-revenue-per"><i class="material-icons">arrow_drop_up</i> 21.80 %</p>
                        </div>
                        <div class="switch chart-revenue-switch right">
                           <label class="cyan-text text-lighten-5">
                              Month <input type="checkbox"> <span class="lever"></span> Year
                           </label>
                        </div>
                     </div>
                     <div class="trending-line-chart-wrapper"><canvas id="revenue-line-chart" height="70"></canvas>
                     </div>
                  </div>
               </div>
               <div class="card-content">
                  <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons activator">filter_list</i>
                  </a>
                  <div class="col s12 m3 l3">
                     <div id="doughnut-chart-wrapper">
                        <canvas id="doughnut-chart" height="200"></canvas>
                        <div class="doughnut-chart-status">
                           <p class="center-align font-weight-600 mt-4">4500</p>
                           <p class="ultra-small center-align">Sold</p>
                        </div>
                     </div>
                  </div>
                  <div class="col s12 m2 l2">
                     <ul class="doughnut-chart-legend">
                        <li class="mobile ultra-small"><span class="legend-color"></span>Mobile</li>
                        <li class="kitchen ultra-small"><span class="legend-color"></span> Kitchen</li>
                        <li class="home ultra-small"><span class="legend-color"></span> Home</li>
                     </ul>
                  </div>
                  <div class="col s12 m5 l6">
                     <div class="trending-bar-chart-wrapper"><canvas id="trending-bar-chart" height="90"></canvas></div>
                  </div>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Revenue by Month <i class="material-icons right">close</i>
                  </span>
                  <table class="responsive-table">
                     <thead>
                        <tr>
                           <th data-field="id">ID</th>
                           <th data-field="month">Month</th>
                           <th data-field="item-sold">Item Sold</th>
                           <th data-field="item-price">Item Price</th>
                           <th data-field="total-profit">Total Profit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>1</td>
                           <td>January</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>2</td>
                           <td>February</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>3</td>
                           <td>March</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>4</td>
                           <td>April</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>5</td>
                           <td>May</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>6</td>
                           <td>June</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>7</td>
                           <td>July</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>8</td>
                           <td>August</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>9</td>
                           <td>Septmber</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>10</td>
                           <td>Octomber</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>11</td>
                           <td>November</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                        <tr>
                           <td>12</td>
                           <td>December</td>
                           <td>122</td>
                           <td>100</td>
                           <td>$122,00.00</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="col s12 m4 l4">
            <div class="card animate fadeUp">
               <div class="card-move-up teal accent-4 waves-effect waves-block waves-light">
                  <div class="move-up">
                     <p class="margin white-text">Browser Stats</p>
                     <canvas id="trending-radar-chart" height="114"></canvas>
                  </div>
               </div>
               <div class="card-content  teal">
                  <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons activator">done</i>
                  </a>
                  <div class="line-chart-wrapper">
                     <p class="margin white-text">Revenue by country</p>
                     <canvas id="line-chart" height="114"></canvas>
                  </div>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Revenue by country <i class="material-icons right">close</i>
                  </span>
                  <table class="responsive-table">
                     <thead>
                        <tr>
                           <th data-field="country-name">Country Name</th>
                           <th data-field="item-sold">Item Sold</th>
                           <th data-field="total-profit">Total Profit</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>USA</td>
                           <td>65</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>UK</td>
                           <td>76</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>Canada</td>
                           <td>65</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>Brazil</td>
                           <td>76</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>India</td>
                           <td>65</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>France</td>
                           <td>76</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>Austrelia</td>
                           <td>65</td>
                           <td>$452.55</td>
                        </tr>
                        <tr>
                           <td>Russia</td>
                           <td>76</td>
                           <td>$452.55</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--chart dashboard end-->
   <!--work collections start-->
   <div id="work-collections">
      <div class="row">
         <div class="col s12 m12 l6">
            <ul id="projects-collection" class="collection z-depth-1 animate fadeLeft">
               <li class="collection-item avatar">
                  <i class="material-icons cyan circle">card_travel</i>
                  <h6 class="collection-header m-0">Projects</h6>
                  <p>Your Favorites</p>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s6">
                        <p class="collections-title">Web App</p>
                        <p class="collections-content">AEC Company</p>
                     </div>
                     <div class="col s3"><span class="task-cat cyan">Development</span></div>
                     <div class="col s3">
                        <div id="project-line-1"></div>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s6">
                        <p class="collections-title">Mobile App for Social</p>
                        <p class="collections-content">iSocial App</p>
                     </div>
                     <div class="col s3"><span class="task-cat red accent-2">UI/UX</span></div>
                     <div class="col s3">
                        <div id="project-line-2"></div>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s6">
                        <p class="collections-title">Website</p>
                        <p class="collections-content">MediTab</p>
                     </div>
                     <div class="col s3"><span class="task-cat teal accent-4">Marketing</span></div>
                     <div class="col s3">
                        <div id="project-line-3"></div>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s6">
                        <p class="collections-title">AdWord campaign</p>
                        <p class="collections-content">True Line</p>
                     </div>
                     <div class="col s3"><span class="task-cat deep-orange accent-2">SEO</span></div>
                     <div class="col s3">
                        <div id="project-line-4"></div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
         <div class="col s12 m12 l6">
            <ul id="issues-collection" class="collection z-depth-1 animate fadeRight">
               <li class="collection-item avatar">
                  <i class="material-icons red accent-2 circle">bug_report</i>
                  <h6 class="collection-header m-0">Issues</h6>
                  <p>Assigned to you</p>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s7">
                        <p class="collections-title"><strong>#102</strong> Home Page</p>
                        <p class="collections-content">Web Project</p>
                     </div>
                     <div class="col s2"><span class="task-cat deep-orange accent-2">P1</span></div>
                     <div class="col s3">
                        <div class="progress">
                           <div class="determinate" style="width: 70%"></div>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s7">
                        <p class="collections-title"><strong>#108</strong> API Fix</p>
                        <p class="collections-content">API Project</p>
                     </div>
                     <div class="col s2"><span class="task-cat cyan">P2</span></div>
                     <div class="col s3">
                        <div class="progress">
                           <div class="determinate" style="width: 40%"></div>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s7">
                        <p class="collections-title"><strong>#205</strong> Profile page css</p>
                        <p class="collections-content">New Project</p>
                     </div>
                     <div class="col s2"><span class="task-cat red accent-2">P3</span></div>
                     <div class="col s3">
                        <div class="progress">
                           <div class="determinate" style="width: 95%"></div>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="collection-item">
                  <div class="row">
                     <div class="col s7">
                        <p class="collections-title"><strong>#188</strong> SAP Changes</p>
                        <p class="collections-content">SAP Project</p>
                     </div>
                     <div class="col s2"><span class="task-cat teal accent-4">P1</span></div>
                     <div class="col s3">
                        <div class="progress">
                           <div class="determinate" style="width: 10%"></div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <!--work collections end-->
   <!--card widgets start-->
   <div id="card-widgets">
      <div class="row">
         <div class="col s12 m6 l4">
            <ul id="task-card" class="collection with-header animate fadeLeft">
               <li class="collection-header cyan">
                  <h5 class="task-card-title mb-3">My Task</h5>
                  <p class="task-card-date">Sept 16, 2019</p>
               </li>
               <li class="collection-item dismissable">
                  <label for="task1">
                     <input type="checkbox" id="task1"> <span class="width-100">Create Mobile App UI. </span>
                     <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a>
                     <span class="task-cat cyan">Mobile App</span>
                  </label>
               </li>
               <li class="collection-item dismissable">
                  <label for="task2">
                     <input type="checkbox" id="task2"> <span class="width-100">Check the new API standerds. </span>
                     <a href="#" class="secondary-content"> <span class="ultra-small">Monday</span> </a>
                     <span class="task-cat red accent-2">Web API</span>
                  </label>
               </li>
               <li class="collection-item dismissable">
                  <label for="task3">
                     <input type="checkbox" id="task3" checked="checked">
                     <span class="width-100"> Check the new Mockup of ABC.</span>
                     <a href="#" class="secondary-content"> <span class="ultra-small">Wednesday</span> </a>
                     <span class="task-cat teal accent-4">Mockup</span>
                  </label>
               </li>
               <li class="collection-item dismissable">
                  <label for="task4">
                     <input type="checkbox" id="task4" checked="checked" disabled="disabled">
                     <span class="width-100">I did it ! </span>
                     <a href="#" class="secondary-content"> <span class="ultra-small">Sunday</span> </a>
                     <span class="task-cat deep-orange accent-2">Mobile App</span>
                  </label>
               </li>
            </ul>
         </div>
         <div class="col s12 m6 l4">
            <div id="flight-card" class="card animate fadeUp">
               <div class="card-header deep-orange accent-2">
                  <div class="card-title">
                     <h5 class="task-card-title mb-3 mt-0 white-text">Flight</h5>
                     <p class="flight-card-date">June 18, Thu 04:50</p>
                  </div>
               </div>
               <div class="card-content-bg white-text">
                  <div class="card-content">
                     <div class="row flight-state-wrapper">
                        <div class="col s5 m5 l5 center-align">
                           <div class="flight-state">
                              <h4 class="margin white-text">LDN</h4>
                              <p class="ultra-small">London</p>
                           </div>
                        </div>
                        <div class="col s2 m2 l2 center-align"><i class="material-icons flight-icon">local_airport</i>
                        </div>
                        <div class="col s5 m5 l5 center-align">
                           <div class="flight-state">
                              <h4 class="margin white-text">SFO</h4>
                              <p class="ultra-small">San Francisco</p>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col s6 m6 l6 center-align">
                           <div class="flight-info">
                              <p class="small"><span class="grey-text text-lighten-4">Depart:</span> 04.50</p>
                              <p class="small"><span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                              <p class="small"><span class="grey-text text-lighten-4">Terminal:</span> B</p>
                           </div>
                        </div>
                        <div class="col s6 m6 l6 center-align flight-state-two">
                           <div class="flight-info">
                              <p class="small"><span class="grey-text text-lighten-4">Arrive:</span> 08.50</p>
                              <p class="small"><span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                              <p class="small"><span class="grey-text text-lighten-4">Terminal:</span> C</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m12 l4">
            <div id="profile-card" class="card animate fadeRight">
               <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="../../../app-assets/images/gallery/3.png" alt="user bg">
               </div>
               <div class="card-content">
                  <img src="../../../app-assets/images/avatar/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                  <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                     <i class="material-icons">edit</i>
                  </a>
                  <h5 class="card-title activator grey-text text-darken-4">Roger Waters</h5>
                  <p><i class="material-icons profile-card-i">perm_identity</i> Project Manager</p>
                  <p><i class="material-icons profile-card-i">perm_phone_msg</i> +1 (612) 222 8989</p>
                  <p><i class="material-icons profile-card-i">email</i> yourmail@domain.com</p>
               </div>
               <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">Roger Waters <i class="material-icons right">close</i>
                  </span>
                  <p>Here is some more information about this card.</p>
                  <p><i class="material-icons">perm_identity</i> Project Manager</p>
                  <p><i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                  <p><i class="material-icons">email</i> yourmail@domain.com</p>
                  <p><i class="material-icons">cake</i> 18th June 1990</p>
                  <p></p>
                  <p><i class="material-icons">airplanemode_active</i> BAR - AUS</p>
                  <p></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--card widgets end-->
</div><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
  <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
    <div class="row">
      <div class="slide-out-right-title">
        <div class="col s12 border-bottom-1 pb-0 pt-1">
          <div class="row">
            <div class="col s2 pr-0 center">
              <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
            </div>
            <div class="col s10 pl-0">
              <ul class="tabs">
                <li class="tab col s4 p-0">
                  <a href="#messages" class="active">
                    <span>Messages</span>
                  </a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#settings">
                    <span>Settings</span>
                  </a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#activity">
                    <span>Activity</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-out-right-body row pl-3">
        <div id="messages" class="col s12 pb-0">
          <div class="collection border-none mb-0">
            <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages">
            <ul class="collection right-sidebar-chat p-0 mb-0">
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Elizabeth Elliott</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                </div>
                <span class="secondary-content medium-small">5.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Mary Adams</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Caleb Richards</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Caleb Richards</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                </div>
                <span class="secondary-content medium-small">9.00 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">June Lane</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Edward Fletcher</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                </div>
                <span class="secondary-content medium-small">5.15 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Crystal Bates</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                </div>
                <span class="secondary-content medium-small">8.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Nathan Watts</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                </div>
                <span class="secondary-content medium-small">9.53 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Willard Wood</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                </div>
                <span class="secondary-content medium-small">4.20 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Ronnie Ellis</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                </div>
                <span class="secondary-content medium-small">5.20 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Daniel Russell</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                </div>
                <span class="secondary-content medium-small">12.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Sarah Graves</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                </div>
                <span class="secondary-content medium-small">11.14 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Andrew Hoffman</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                </div>
                <span class="secondary-content medium-small">7.30 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar">
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Camila Lynch</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                </div>
                <span class="secondary-content medium-small">2.00 PM</span>
              </li>
            </ul>
          </div>
        </div>
        <div id="settings" class="col s12">
          <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
          <ul class="collection border-none">
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Notifications</span>
                <div class="switch right">
                  <label>
                    <input checked="" type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show recent activity</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show recent activity</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show Task statistics</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show your emails</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Email Notifications</span>
                <div class="switch right">
                  <label>
                    <input checked="" type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
          </ul>
          <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
          <ul class="collection border-none">
            <li class="collection-item border-none">
              <div class="m-0">
                <span>System Logs</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Error Reporting</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Applications Logs</span>
                <div class="switch right">
                  <label>
                    <input checked="" type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Backup Servers</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Audit Logs</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox">
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div id="activity" class="col s12">
          <div class="activity">
            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">Today</div>
                <h6 class="timeline-title">Homepage mockup design</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content orange-text">Important</div>
              </li>
              <li class="timeline-items timeline-icon-cyan active">
                <div class="timeline-time">10 min</div>
                <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content green-text">Resolved</div>
              </li>
              <li class="timeline-items timeline-icon-red active">
                <div class="timeline-time">30 mins</div>
                <h6 class="timeline-title">12 new users registered</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Registration.doc
                </div>
              </li>
              <li class="timeline-items timeline-icon-indigo active">
                <div class="timeline-time">2 Hrs</div>
                <h6 class="timeline-title">Tina is attending your activity</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Activity.doc
                </div>
              </li>
              <li class="timeline-items timeline-icon-orange">
                <div class="timeline-time">5 hrs</div>
                <h6 class="timeline-title">Josh is now following you</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content red-text">Pending</div>
              </li>
            </ul>
            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">Just now</div>
                <h6 class="timeline-title">New order received urgent</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content orange-text">Important</div>
              </li>
              <li class="timeline-items timeline-icon-cyan active">
                <div class="timeline-time">05 min</div>
                <h6 class="timeline-title">System shutdown.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content blue-text">Urgent</div>
              </li>
              <li class="timeline-items timeline-icon-red">
                <div class="timeline-time">20 mins</div>
                <h6 class="timeline-title">Database overloaded 89%</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="../../../app-assets/images/icon/pdf.png" alt="document" height="30" width="25" class="mr-1">Database-log.doc
                </div>
              </li>
            </ul>
            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">10 min</div>
                <h6 class="timeline-title">System error</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content red-text">Error</div>
              </li>
              <li class="timeline-items timeline-icon-cyan">
                <div class="timeline-time">1 min</div>
                <h6 class="timeline-title">Production server down.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content blue-text">Urgent</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide Out Chat -->
  <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
    <li class="center-align pt-2 pb-2 sidenav-close chat-head">
      <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
    </li>
    <li class="chat-body">
      <ul class="collection">
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">hello!</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">How can we help? We're here for you!</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">I am looking for the best admin template.?</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
          </div>
        </li>

        <li class="collection-item display-grid width-100 center-align">
          <p>8:20 a.m.</p>
        </li>

        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">Ohh! very nice</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Thank you.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">How can I purchase it?</p>
          </div>
        </li>

        <li class="collection-item display-grid width-100 center-align">
          <p>9:00 a.m.</p>
        </li>

        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">From ThemeForest.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Only $24</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">Ohh! Thank you.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar">
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">I will purchase it for sure.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Great, Feel free to get in touch on</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">https://pixinvent.ticksy.com/</p>
          </div>
        </li>
      </ul>
    </li>
    <li class="center-align chat-footer">
      <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
        <div class="input-field">
          <input id="icon_prefix" type="text" class="search">
          <label for="icon_prefix">Type here..</label>
          <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
        </div>
      </form>
    </li>
  </ul>
</aside>
<!-- END RIGHT SIDEBAR NAV -->
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->

<a href="#" data-target="theme-cutomizer-out" class="btn btn-customizer pink accent-2 white-text sidenav-trigger theme-cutomizer-trigger"><i class="material-icons">settings</i></a>

<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
   <div class="col s12">
      <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
      <h5 class="theme-cutomizer-title">Theme Customizer</h5>
      <p class="medium-small">Customize & Preview in Real Time</p>
      <div class="menu-options">
         <h6 class="mt-6">Menu Options</h6>
         <hr class="customize-devider">
         <div class="menu-options-form row">
            <div class="input-field col s12 menu-color mb-0">
               <p class="mt-0">Menu Color</p>
               <div class="gradient-color center-align">
                  <span class="menu-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                  <span class="menu-color-option gradient-45deg-purple-deep-orange" data-color="gradient-45deg-purple-deep-orange"></span>
                  <span class="menu-color-option gradient-45deg-light-blue-cyan" data-color="gradient-45deg-light-blue-cyan"></span>
                  <span class="menu-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                  <span class="menu-color-option gradient-45deg-purple-deep-purple" data-color="gradient-45deg-purple-deep-purple"></span>
                  <span class="menu-color-option gradient-45deg-deep-orange-orange" data-color="gradient-45deg-deep-orange-orange"></span>
                  <span class="menu-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                  <span class="menu-color-option gradient-45deg-indigo-light-blue" data-color="gradient-45deg-indigo-light-blue"></span>
                  <span class="menu-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
               </div>
               <div class="solid-color center-align">
                  <span class="menu-color-option red" data-color="red"></span>
                  <span class="menu-color-option purple" data-color="purple"></span>
                  <span class="menu-color-option pink" data-color="pink"></span>
                  <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                  <span class="menu-color-option cyan" data-color="cyan"></span>
                  <span class="menu-color-option teal" data-color="teal"></span>
                  <span class="menu-color-option light-blue" data-color="light-blue"></span>
                  <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                  <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
               </div>
            </div>
            <div class="input-field col s12 menu-bg-color mb-0">
               <p class="mt-0">Menu Background Color</p>
               <div class="gradient-color center-align">
                  <span class="menu-bg-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
                  <span class="menu-bg-color-option gradient-45deg-purple-deep-orange" data-color="gradient-45deg-purple-deep-orange"></span>
                  <span class="menu-bg-color-option gradient-45deg-light-blue-cyan" data-color="gradient-45deg-light-blue-cyan"></span>
                  <span class="menu-bg-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
                  <span class="menu-bg-color-option gradient-45deg-purple-deep-purple" data-color="gradient-45deg-purple-deep-purple"></span>
                  <span class="menu-bg-color-option gradient-45deg-deep-orange-orange" data-color="gradient-45deg-deep-orange-orange"></span>
                  <span class="menu-bg-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
                  <span class="menu-bg-color-option gradient-45deg-indigo-light-blue" data-color="gradient-45deg-indigo-light-blue"></span>
                  <span class="menu-bg-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
               </div>
               <div class="solid-color center-align">
                  <span class="menu-bg-color-option red" data-color="red"></span>
                  <span class="menu-bg-color-option purple" data-color="purple"></span>
                  <span class="menu-bg-color-option pink" data-color="pink"></span>
                  <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                  <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                  <span class="menu-bg-color-option teal" data-color="teal"></span>
                  <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                  <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                  <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  Menu Dark
                  <label class="float-right"><input class="menu-dark-checkbox" type="checkbox"> <span class="lever ml-0"></span></label>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  Menu Collapsed
                  <label class="float-right"><input class="menu-collapsed-checkbox" type="checkbox"> <span class="lever ml-0"></span></label>
               </div>
            </div>
            <div class="input-field col s12">
               <div class="switch">
                  <p class="mt-0">Menu Selection</p>
                  <label>
                     <input class="menu-selection-radio with-gap" value="sidenav-active-square" name="menu-selection" type="radio">
                     <span>Square</span>
                  </label>
                  <label>
                     <input class="menu-selection-radio with-gap" value="sidenav-active-rounded" name="menu-selection" type="radio">
                     <span>Rounded</span>
                  </label>
                  <label>
                     <input class="menu-selection-radio with-gap" value="" name="menu-selection" type="radio">
                     <span>Normal</span>
                  </label>
               </div>
            </div>
         </div>
      </div>
      <h6 class="mt-6">Navbar Options</h6>
      <hr class="customize-devider">
      <div class="navbar-options row">
         <div class="input-field col s12 navbar-color mb-0">
            <p class="mt-0">Navbar Color</p>
            <div class="gradient-color center-align">
               <span class="navbar-color-option gradient-45deg-indigo-blue" data-color="gradient-45deg-indigo-blue"></span>
               <span class="navbar-color-option gradient-45deg-purple-deep-orange" data-color="gradient-45deg-purple-deep-orange"></span>
               <span class="navbar-color-option gradient-45deg-light-blue-cyan" data-color="gradient-45deg-light-blue-cyan"></span>
               <span class="navbar-color-option gradient-45deg-purple-amber" data-color="gradient-45deg-purple-amber"></span>
               <span class="navbar-color-option gradient-45deg-purple-deep-purple" data-color="gradient-45deg-purple-deep-purple"></span>
               <span class="navbar-color-option gradient-45deg-deep-orange-orange" data-color="gradient-45deg-deep-orange-orange"></span>
               <span class="navbar-color-option gradient-45deg-green-teal" data-color="gradient-45deg-green-teal"></span>
               <span class="navbar-color-option gradient-45deg-indigo-light-blue" data-color="gradient-45deg-indigo-light-blue"></span>
               <span class="navbar-color-option gradient-45deg-red-pink" data-color="gradient-45deg-red-pink"></span>
            </div>
            <div class="solid-color center-align">
               <span class="navbar-color-option red" data-color="red"></span>
               <span class="navbar-color-option purple" data-color="purple"></span>
               <span class="navbar-color-option pink" data-color="pink"></span>
               <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
               <span class="navbar-color-option cyan" data-color="cyan"></span>
               <span class="navbar-color-option teal" data-color="teal"></span>
               <span class="navbar-color-option light-blue" data-color="light-blue"></span>
               <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
               <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Navbar Dark
               <label class="float-right"><input class="navbar-dark-checkbox" type="checkbox"> <span class="lever ml-0"></span></label>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Navbar Fixed
               <label class="float-right"><input class="navbar-fixed-checkbox" type="checkbox" checked/=""> <span class="lever ml-0"></span></label>
            </div>
         </div>
      </div>
      <h6 class="mt-6">Footer Options</h6>
      <hr class="customize-devider">
      <div class="navbar-options row">
         <div class="input-field col s12">
            <div class="switch">
               Footer Dark
               <label class="float-right"><input class="footer-dark-checkbox" type="checkbox"> <span class="lever ml-0"></span></label>
            </div>
         </div>
         <div class="input-field col s12">
            <div class="switch">
               Footer Fixed
               <label class="float-right"><input class="footer-fixed-checkbox" type="checkbox"> <span class="lever ml-0"></span></label>
            </div>
         </div>
      </div>
   </div>
</div>
<!--/ Theme Customizer -->

    
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2020          <a href="../../../../user/pixinvent/portfolio.html?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by <a href="https://pixinvent.com/">PIXINVENT</a></span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../../app-assets/vendors/chartjs/chart.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.min.js"></script>
    <script src="../../../app-assets/js/search.min.js"></script>
    <script src="../../../app-assets/js/custom/custom-script.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/dashboard-analytics.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>