<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PHP Security<?php if (!empty($pageTitle)) printf(' | %s', $pageTitle); ?></title>
        <link rel="stylesheet" href="/css/foundation.min.css" />
        <link rel="stylesheet" href="/css/foundation-icons.css" />
        <link rel="stylesheet" href="/css/main.css" />
        <script src="/js/vendor/modernizr.js"></script>
    </head>
    <body>
        <nav class="top-bar" data-topbar role="navigation">
            <?php
                if (empty($examplePage)) {
            ?>
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="/">PHP Security</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>

                <section class="top-bar-section">
                    <ul class="left">
                        <li class="has-dropdown">
                            <a href="#">Cookies</a>
                            <ul class="dropdown">
                                <li><a href="/modules/cookiesteal">Stolen Cookie Consequences</a></li>
                                <li><a href="/modules/cookiestealhowto">How To Steal Cookie</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Filtering</a>
                            <ul class="dropdown">
                                <li><a href="/modules/displayinguserinput">Displaying User Input</a></li>
                                <li><a href="/modules/receiveanddisplayuserinput">Receiving and Displaying Input in Realtime</a></li>
                                <li><a href="/modules/filterrequesturi">Can't Even Trust the Server</a></li>
                                <li><a href="/modules/sqlinjectionlogin">Filter Input Going to Other Systems</a></li>
                                <li><a href="/modules/shellexecfiltering">Filter System Calls</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Validation</a>
                            <ul class="dropdown">
                                <li><a href="/modules/validatingincludefile">Validate include file</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Server Config</a>
                            <ul class="dropdown">
                                <li><a href="/modules/showingsource">Showing Your Source</a></li>
                                <li><a href="/modules/displayerrors">The Error of Display Errors</a></li>
                                <li><a href="/modules/functionsenabledinproduction">Allowing Debug Functions In Production</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">CSRF</a>
                            <ul class="dropdown">
                                <li><a href="/modules/usepostinsteadofget">Use Post When Altering Data</a></li>
                                <li><a href="/modules/postingform">Posting Doesn't Stop CSRF</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Uploads</a>
                            <ul class="dropdown">
                                <li><a href="/modules/htaccessandjpeg">Uploading a different type with new handler</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Misc</a>
                            <ul class="dropdown">
                                <li><a href="/modules/exitafterheader">Exit after redirect</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="right">
                        <li><a href="/todo.php">Future / To do</a></li>
                    </ul>
                </section>
            <?php
                } else {
                    // this is the example page navigation
            ?>
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="#">PHP Security</a></h1>
                    </li>
                </ul>
                <section class="top-bar-section">
                    <ul class="left">
                        <li>
                            <a href="#" class="closeWindowOnClick">Close Example</a>
                        </li>
                    </ul>
                </section>
            <?php
                }
            ?>
        </nav>
        <?php
            if (!empty($pageTitle)) {
        ?>
        <div class="row">
            <div class="large-12 columns">
                <h1><?= $pageTitle; ?></h1>
            </div>
        </div>
        <?php
            }
        ?>