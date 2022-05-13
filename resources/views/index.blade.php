
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Notes Application</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="assets/css/apps/notes.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
</head>
<body class="admin-header">

    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->
    
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>



        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content ml-0">
            <div class="layout-px-spacing">

                <div class="content-container">

                    <div class="col-left layout-top-spacing">
                        <div class="col-left-content">

                            <div class="header-container">
                                <header class="header navbar navbar-expand-sm">                                    
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        <div class="page-header">
                                            <div class="page-title">
                                                <h3>Notes</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="header-actions">
                                        <div class="nav-item dropdown language-dropdown more-dropdown">
                                            <div class="dropdown custom-dropdown-icon">
                                                <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/flag-ca2.svg" class="flag-width" alt="flag"><span>English</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                        
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                                    <a class="dropdown-item" data-img-value="flag-de3" data-value="German" href="javascript:void(0);"><img src="assets/img/flag-de3.svg" class="flag-width" alt="flag"> German</a>
                                                    <a class="dropdown-item" data-img-value="flag-sp" data-value="Spanish" href="javascript:void(0);"><img src="assets/img/flag-sp.svg" class="flag-width" alt="flag"> Spanish</a>
                                                    <a class="dropdown-item" data-img-value="flag-fr3" data-value="French" href="javascript:void(0);"><img src="assets/img/flag-fr3.svg" class="flag-width" alt="flag"> French</a>
                                                    <a class="dropdown-item" data-img-value="flag-ca2" data-value="English" href="javascript:void(0);"><img src="assets/img/flag-ca2.svg" class="flag-width" alt="flag"> English</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="toggle-notification-bar">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                        </div>
                                    </div>
                                </header>
                            </div>

                            <div class="admin-data-content layout-top-spacing">

                                <div class="row app-notes" id="cancel-row">
                                    <div class="col-lg-12">
                                        <div class="app-hamburger-container">
                                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                                        </div>
                                
                                        <div class="app-container">
                                            
                                            <div class="app-note-container">
                                
                                                <div class="app-note-overlay"></div>
                                
                                                <div class="tab-title">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-12 text-center">
                                                            <a id="btn-add-notes" class="btn btn-dark" href="javascript:void(0);">Add</a>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-12 mt-5">
                                                            <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link list-actions active" id="all-notes"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> All Notes</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link list-actions" id="note-fav"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> Favourites</a>
                                                                </li>
                                                            </ul>
                                
                                                            <hr/>
                                
                                                            <p class="group-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg> Tags</p>
                                
                                                            <ul class="nav nav-pills d-block group-list" id="pills-tab" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link list-actions g-dot-primary" id="note-personal">Personal</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link list-actions g-dot-warning" id="note-work">Work</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link list-actions g-dot-success" id="note-social">Social</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link list-actions g-dot-danger" id="note-important">Important</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                
                                
                                                <div id="ct" class="note-container note-grid">
                                                    
                                                    <div class="note-item all-notes note-personal">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Meeting with Kelly">Meeting with Kelly</p>
                                                                <p class="meta-time">11/01/2020</p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.">Curabitur facilisis vel elit sed dapibus sodales purus rhoncus.</p>
                                                                </div>
                                                            </div>
                                                            <div class="note-action">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                            <div class="note-footer">
                                                                <div class="tags-selector btn-group">
                                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                                        <div class="tags">
                                                                            <div class="g-dot-personal"></div>
                                                                            <div class="g-dot-work"></div>
                                                                            <div class="g-dot-social"></div>
                                                                            <div class="g-dot-important"></div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <div class="note-item all-notes note-fav">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Receive Package">Receive Package</p>
                                                                <p class="meta-time">11/01/2020</p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Facilisis curabitur facilisis vel elit sed dapibus sodales purus.">Facilisis curabitur facilisis vel elit sed dapibus sodales purus.</p>
                                                                </div>
                                                            </div>
                                                            <div class="note-action">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                            <div class="note-footer">
                                                                <div class="tags-selector btn-group">
                                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                                        <div class="tags">
                                                                            <div class="g-dot-personal"></div>
                                                                            <div class="g-dot-work"></div>
                                                                            <div class="g-dot-social"></div>
                                                                            <div class="g-dot-important"></div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <div class="note-item all-notes note-work">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Imporant Infomation">Download Docs</p>
                                                                <p class="meta-time">11/04/2020</p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.">Proin a dui malesuada, laoreet mi vel, imperdiet diam quam laoreet.</p>
                                                                </div>
                                                            </div>
                                                            <div class="note-action">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                            <div class="note-footer">
                                                                <div class="tags-selector btn-group">
                                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                                        <div class="tags">
                                                                            <div class="g-dot-personal"></div>
                                                                            <div class="g-dot-work"></div>
                                                                            <div class="g-dot-social"></div>
                                                                            <div class="g-dot-important"></div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <div class="note-item all-notes">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Meeting Scheduled at 4:50pm">Meeting at 4:50pm</p>
                                                                <p class="meta-time">11/08/2020</p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Excepteur sint occaecat cupidatat non proident.">Excepteur sint occaecat cupidatat non proident.</p>
                                                                </div>
                                                            </div>
                                                            <div class="note-action">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                            <div class="note-footer">
                                                                <div class="tags-selector btn-group">
                                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                                        <div class="tags">
                                                                            <div class="g-dot-personal"></div>
                                                                            <div class="g-dot-work"></div>
                                                                            <div class="g-dot-social"></div>
                                                                            <div class="g-dot-important"></div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <div class="note-item all-notes">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Backup Files EOD">Backup Files EOD</p>
                                                                <p class="meta-time">11/09/2020</p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Maecenas condimentum neque mollis, egestas leo ut, gravida.">Maecenas condimentum neque mollis, egestas leo ut, gravida.</p>
                                                                </div>
                                                            </div>
                                                            <div class="note-action">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                            <div class="note-footer">
                                                                <div class="tags-selector btn-group">
                                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                                        <div class="tags">
                                                                            <div class="g-dot-personal"></div>
                                                                            <div class="g-dot-work"></div>
                                                                            <div class="g-dot-social"></div>
                                                                            <div class="g-dot-important"></div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <div class="note-item all-notes note-social">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Download Server Logs">Download Server Logs</p>
                                                                <p class="meta-time">11/09/2020</p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Suspendisse efficitur diam quis gravida. Nunc molestie est eros.">Suspendisse efficitur diam quis gravida. Nunc molestie est eros.</p>
                                                                </div>
                                                            </div>
                                                            <div class="note-action">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                            <div class="note-footer">
                                                                <div class="tags-selector btn-group">
                                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                                        <div class="tags">
                                                                            <div class="g-dot-personal"></div>
                                                                            <div class="g-dot-work"></div>
                                                                            <div class="g-dot-social"></div>
                                                                            <div class="g-dot-important"></div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <div class="note-item all-notes">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Team meet at Starbucks">Team meet at Starbucks</p>
                                                                <p class="meta-time">11/10/2020</p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Etiam a odio eget enim aliquet laoreet lobortis sed ornare nibh.">Etiam a odio eget enim aliquet laoreet lobortis sed ornare nibh.</p>
                                                                </div>
                                                            </div>
                                                            <div class="note-action">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                            <div class="note-footer">
                                                                <div class="tags-selector btn-group">
                                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                                        <div class="tags">
                                                                            <div class="g-dot-personal"></div>
                                                                            <div class="g-dot-work"></div>
                                                                            <div class="g-dot-social"></div>
                                                                            <div class="g-dot-important"></div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <div class="note-item all-notes note-important">
                                                        <div class="note-inner-content">
                                                            <div class="note-content">
                                                                <p class="note-title" data-noteTitle="Create new users Profile">Create new users Profile</p>
                                                                <p class="meta-time">11/10/2020</p>
                                                                <div class="note-description-content">
                                                                    <p class="note-description" data-noteDescription="Duis aute irure dolor in voluptate nulla pariatur.">Duis aute irure  in nulla pariatur. Etiam a odio eget enim aliquet</p>
                                                                </div>
                                                            </div>
                                                            <div class="note-action">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fav-note"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 delete-note"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                            <div class="note-footer">
                                                                <div class="tags-selector btn-group">
                                                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                                        <div class="tags">
                                                                            <div class="g-dot-personal"></div>
                                                                            <div class="g-dot-work"></div>
                                                                            <div class="g-dot-social"></div>
                                                                            <div class="g-dot-important"></div>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-right d-icon-menu">
                                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal" href="javascript:void(0);"> Personal</a>
                                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work" href="javascript:void(0);"> Work</a>
                                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social" href="javascript:void(0);"> Social</a>
                                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important" href="javascript:void(0);"> Important</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                </div>
                                
                                            </div>
                                            
                                        </div>
                                
                                        <!-- Modal -->
                                        <div class="modal fade" id="notesMailModal" tabindex="-1" role="dialog" aria-labelledby="notesMailModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        <div class="notes-box">
                                                            <div class="notes-content">                                                                        
                                                                <form action="javascript:void(0);" id="notesMailModalTitle">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="d-flex note-title">
                                                                                <input type="text" id="n-title" class="form-control" maxlength="25" placeholder="Title">
                                                                            </div>
                                                                            <span class="validation-text"></span>
                                                                        </div>
                                
                                                                        <div class="col-md-12">
                                                                            <div class="d-flex note-description">
                                                                                <textarea id="n-description" class="form-control" maxlength="60" placeholder="Description" rows="3"></textarea>
                                                                            </div>
                                                                            <span class="validation-text"></span>
                                                                        </div>
                                                                    </div>
                                
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button id="btn-n-save" class="float-left btn">Save</button>
                                                        <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Discard</button>
                                                        <button id="btn-n-add" class="btn">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>

                            <div class="footer-wrapper col-xl-12">
                                <div class="footer-section f-section-1">
                                    <p class="">© 2021 <a target="_blank" href="https://designreset.com">DesignReset</a></p>
                                </div>
                                <div class="footer-section f-section-2">
                                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-right">
                        <div class="col-right-content">
                            <div class="navbar-item flex-row search-ul navbar-dropdown">
                                <div class="nav-item align-self-center search-animated">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <form class="form-inline search-full form-inline search" role="search">
                                        <div class="search-bar">
                                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-right-content-container">

                                <div class="activity-section">

                                    <div class="widget-profile">

                                        <div class="w-profile-view">
                                            <img src="assets/img/90x90.jpg" alt="admin-profile" class="img-fluid">
                                            <div class="w-profile-content">
                                                <h6>Alan Green</h6>
                                                <p>Lead Developer</p>
                                            </div>
                                        </div>

                                        <div class="w-profile-links">
                                            <a href="user_profile.html" class="w-p-link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <p>My Profile</p>
                                            </a>

                                            <a href="apps_mailbox.html" class="w-p-link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg>
                                                <p>Inbox</p>
                                            </a>
                                        </div>
                                        
                                    </div>

                                    <div class="widget-todo">
                                        <div class="todo-content">
                                            <div class="todo-title">
                                                <h6><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></span> <span class="align-self-center">Todo</span></h6>
                                            </div>
                                            <div class="todo-text">
                                                <a href="apps_todoList.html"><p>11 New Task</p></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-message">
                                        <div class="widget-title">
                                            <h5>Messages</h5>
                                            <a href="apps_chat.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                            </a>
                                        </div>

                                        <div class="widget-messages">
                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Andy King</h5>
                                                    <p class="w-msg-text">Work is delayed</p>
                                                </div>
                                            </a>

                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Alma Clark</h5>
                                                    <p class="w-msg-text">It was a bit dramatic.</p>
                                                </div>
                                            </a>

                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Vincent</h5>
                                                    <p class="w-msg-text">Coffee?</p>
                                                </div>
                                            </a>

                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Iris Hofman</h5>
                                                    <p class="w-msg-text">Not comming to office today.</p>
                                                </div>
                                            </a>

                                            <a href="apps_chat.html" class="w-message">
                                                <img src="assets/img/90x90.jpg" alt="" class="img-fluid">
                                                <div class="msg-content">
                                                    <h5 class="w-msg-username">Linda Nelson</h5>
                                                    <p class="w-msg-text">Uploaded files to server.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="widget-invoice">
                                        <div class="widget-title">
                                            <h5>New Invoice</h5>
                                            <a href="apps_invoice.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                            </a>
                                        </div>

                                        <div class="widget-invoice-lists">
                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#002658</span></a> is generated for <span class="usr-name">Laurie Fox</span></p>
                                            </div>

                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#0036489</span></a> is generated for <span class="usr-name">Ernest Reeves</span></p>
                                            </div>

                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#014778</span></a> is generated for <span class="usr-name">Sean Freeman</span></p>
                                            </div>

                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#0165987</span></a> is generated for <span class="usr-name">Nia Hillyer</span></p>
                                            </div>

                                            <div class="w-invoice">
                                                <p class="w-inv-text"><a href="apps_invoice.html"><span class="inv-number">#0265998</span></a> is generated for <span class="usr-name">Dale Butler</span></p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="widget-taskBoard">
                                        <div class="widget-title">
                                            <h5>Task Board</h5>
                                            <a href="apps_scrumboard.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                            </a>
                                        </div>

                                        <div class="widget-taskBoard-lists">
                                            <div class="w-taskBoard">
                                                <p class="w-taskBoard-text"><a href="apps_scrumboard.html"><span class="taskBoard-number">Launch New Seo Wordpress Theme</span></a> has been moved to <span class="taskBoard-name">Completed</span> Board by <span class="usr-name">Alma Clark</span></p>
                                            </div>

                                            <div class="w-taskBoard">
                                                <p class="w-taskBoard-text"><a href="apps_scrumboard.html"><span class="taskBoard-number">New Task</span></a> is added by <span class="usr-name">Ernest Reeves</span></p>
                                            </div>

                                            <div class="w-taskBoard">
                                                <p class="w-taskBoard-text"><a href="apps_scrumboard.html"><span class="taskBoard-number">Dinner with Kelly Young</span></a> has been moved to <span class="taskBoard-name">Completed</span> Board by <span class="usr-name">Dale Butler</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-calendar">
                                        <div class="widget-title">
                                            <h5>Event Notifications</h5>

                                            <div class="task-action">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>
        
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask" style="will-change: transform;">
                                                        <a class="dropdown-item" href="javascript:void(0);">View All</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Mark as Read</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="widget-calendar-lists">
                                            <div class="widget-calendar-lists-scroll">
                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c6">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    </div>
                                                    <p class="w-calendar-text"><span class="calendar-number">New Event</span> has been added on <span class="calendar-name">15 Dec 2020</span></p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c3">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                    </div>
                                                    <p class="w-calendar-text">Collect <span class="calendar-number">documents</span> from <span class="calendar-number">Kelly</span> at the restaurant tommorrow.</p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c1">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                    </div>
                                                    <p class="w-calendar-text"><span class="calendar-number">Meeting Event</span> on 12 Nov has been updated to 8 PM</p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c5">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                                    </div>
                                                    <p class="w-calendar-text"><span class="calendar-number">New Event</span> Seminar organised by Design Reset will be held on 25 January</p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c2">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                                    </div>
                                                    <p class="w-calendar-text">Today's <span class="calendar-number">Conference</span> is Cancelled.</p>
                                                </a>

                                                <a href="apps_calendar.html" class="w-calendar w-calendar-c4">
                                                    <div class="w-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                                    </div>
                                                    <p class="w-calendar-text">Meeting with <span class="calendar-number">Project Lead</span> on 01 Jan has been updated to 15 Jan</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                            
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/js/ie11fix/fn.fix-padStart.js"></script>
    <script src="assets/js/apps/notes.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>