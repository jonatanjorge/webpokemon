<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/panel.css">

    <!-- JS-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/panel.js"></script>

    <title>Pokepanel</title>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
                MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                PokeAdmin
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.pingpong-labs.com" target="_blank">Pokeweb</a></li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Usuario
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <div class="absolute-wrapper"> </div>
            <!-- Menu -->
            <div class="side-menu">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Main Menu -->
                    <div class="side-menu-container">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#"> Dashboard</a></li>
                            <li><a href="#"> Pokemones</a></li>
                            <li><a href="#"> Usuarios</a></li>
                            <li><a href="#"> Perfil</a></li>

                            <!-- Dropdown-->
                            <!--<li class="panel panel-default" id="dropdown">-->
                            <!--<a data-toggle="collapse" href="#dropdown-lvl1">-->
                            <!--<span class="glyphicon glyphicon-user"></span> Sub Level <span class="caret"></span>-->
                            <!--</a>-->

                            <!--&lt;!&ndash; Dropdown level 1 &ndash;&gt;-->
                            <!--<div id="dropdown-lvl1" class="panel-collapse collapse">-->
                            <!--<div class="panel-body">-->
                            <!--<ul class="nav navbar-nav">-->
                            <!--<li><a href="#">Link</a></li>-->
                            <!--<li><a href="#">Link</a></li>-->
                            <!--<li><a href="#">Link</a></li>-->

                            <!--&lt;!&ndash; Dropdown level 2 &ndash;&gt;-->
                            <!--<li class="panel panel-default" id="dropdown">-->
                            <!--<a data-toggle="collapse" href="#dropdown-lvl2">-->
                            <!--<span class="glyphicon glyphicon-off"></span> Sub Level <span class="caret"></span>-->
                            <!--</a>-->
                            <!--<div id="dropdown-lvl2" class="panel-collapse collapse">-->
                            <!--<div class="panel-body">-->
                            <!--<ul class="nav navbar-nav">-->
                            <!--<li><a href="#">Link</a></li>-->
                            <!--<li><a href="#">Link</a></li>-->
                            <!--<li><a href="#">Link</a></li>-->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</li>-->
                            <!--</ul>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--</li>-->

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
    </div>

    <div class="col-md-10 content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ">
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>User profile form requirement</legend>

                            <!-- Text input-->




                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Name</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user">
                                            </i>
                                        </div>
                                        <input id="Name" name="name" type="text" placeholder="Name" class="form-control input-md">
                                    </div>


                                </div>


                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="lastName">Last name</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user">
                                            </i>
                                        </div>
                                        <input id="lastName" name="lastName" type="text" placeholder="last name" class="form-control input-md">
                                    </div>


                                </div>


                            </div>

                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Upload photo">Upload photo</label>
                                <div class="col-md-4">
                                    <input id="Upload photo" name="Upload photo" class="input-file" type="file">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Date Of Birth">Date Of Birth</label>
                                <div class="col-md-4">

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-birthday-cake"></i>

                                        </div>
                                        <input id="Date Of Birth" name="Date Of Birth" type="text" placeholder="Date Of Birth" class="form-control input-md">
                                    </div>


                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Father">Father's name</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-male" style="font-size: 20px;"></i>

                                        </div>
                                        <input id="Father" name="Father" type="text" placeholder="Father's name" class="form-control input-md">

                                    </div>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Mother">Mother's Name</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-female" style="font-size: 20px;"></i>

                                        </div>
                                        <input id="Mother" name="Mother" type="text" placeholder="Mother's Name" class="form-control input-md">

                                    </div>

                                </div>
                            </div>

                            <!-- Multiple Radios (inline) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Gender">Gender</label>
                                <div class="col-md-4">
                                    <label class="radio-inline" for="Gender-0">
                                        <input type="radio" name="Gender" id="Gender-0" value="1" checked="checked">
                                        Male
                                    </label>
                                    <label class="radio-inline" for="Gender-1">
                                        <input type="radio" name="Gender" id="Gender-1" value="2">
                                        Female
                                    </label>
                                    <label class="radio-inline" for="Gender-2">
                                        <input type="radio" name="Gender" id="Gender-2" value="3">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <!-- Multiple Radios (inline) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="radios">Marital Status:</label>
                                <div class="col-md-4">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                                        Married
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="radios" id="radios-1" value="2">
                                        Unmarried
                                    </label>
                                </div>
                            </div>

                            <!-- Text input-->
                            <!-- <div class="form-group">
                              <label class="col-md-4 control-label" for="Temporary Address">Temporary Address</label>
                              <div class="col-md-4">

                              <div class="input-group">
                                   <div class="input-group-addon">
                                 <i class="fa fa-home" style="font-size:20px;"></i>

                                   </div>
                             <input id="Temporary Address" name="Temporary Address" type="text" placeholder="Temporary Address" class="form-control input-md">
                                  </div>


                              </div>
                            </div>
                             -->


                            <div class="form-group">
                                <label class="col-md-4 control-label col-xs-12" for="Permanent Address">Permanent Address</label>
                                <div class="col-md-2  col-xs-4">
                                    <input id="Permanent Address" name="Permanent Address" type="text" placeholder="District" class="form-control input-md ">
                                </div>

                                <div class="col-md-2 col-xs-4">

                                    <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Area" class="form-control input-md ">
                                </div>


                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Permanent Address"></label>
                                <div class="col-md-2  col-xs-4">
                                    <input id="Permanent Address" name="Permanent Address" type="text" placeholder="Street" class="form-control input-md ">

                                </div>




                            </div>




                            <div class="form-group">
                                <label class="col-md-4 control-label col-xs-12" for="Temporary Address">Temporary Address</label>
                                <div class="col-md-2  col-xs-4">
                                    <input id="Temporary Address" name="Temporary Address" type="text" placeholder="District" class="form-control input-md ">
                                </div>

                                <div class="col-md-2 col-xs-4">

                                    <input id="Temporary Address" name="Temporary Address" type="text" placeholder="Area" class="form-control input-md ">
                                </div>


                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Temporary Address"></label>
                                <div class="col-md-2  col-xs-4">
                                    <input id="Temporary Address" name="Temporary Address" type="text" placeholder="Street" class="form-control input-md ">

                                </div>




                            </div>




                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Primary Occupation">Primary Occupation</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-briefcase"></i>

                                        </div>
                                        <input id="Primary Occupation" name="Primary Occupation" type="text" placeholder="Primary Occupation" class="form-control input-md">
                                    </div>


                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Secondary Occupation (if any)">Secondary Occupation (if any)</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-briefcase"></i>

                                        </div>
                                        <input id="Secondary Occupation (if any)" name="Secondary Occupation (if any)" type="text" placeholder="Secondary Occupation (if any)" class="form-control input-md">
                                    </div>


                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Skills">Skills</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-graduation-cap"></i>

                                        </div>
                                        <input id="Skills" name="Skills" type="text" placeholder="Skills" class="form-control input-md">
                                    </div>


                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Phone number ">Phone number </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>

                                        </div>
                                        <input id="Phone number " name="Phone number " type="text" placeholder="Primary Phone number " class="form-control input-md">

                                    </div>
                                    <div class="input-group othertop">
                                        <div class="input-group-addon">
                                            <i class="fa fa-mobile fa-1x" style="font-size: 20px;"></i>

                                        </div>
                                        <input id="Phone number " name="Secondary Phone number " type="text" placeholder=" Secondary Phone number " class="form-control input-md">

                                    </div>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Email Address">Email Address</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope-o"></i>

                                        </div>
                                        <input id="Email Address" name="Email Address" type="text" placeholder="Email Address" class="form-control input-md">

                                    </div>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Availability time">Availability time</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>

                                        </div>
                                        <input id="Availability time" name="Availability time" type="text" placeholder="Availability time" class="form-control input-md">

                                    </div>


                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Available Service Area">Available Service Area</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-street-view"></i>

                                        </div>
                                        <input id="Available Service Area" name="Available Service Area" type="text" placeholder="Available Service Area" class="form-control input-md">

                                    </div>


                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Citizenship No.">Citizenship No.</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-sticky-note-o"></i>

                                        </div>
                                        <input id="Citizenship No." name="Citizenship No." type="text" placeholder="Citizenship No." class="form-control input-md">

                                    </div>


                                </div>
                            </div>

                            <!-- Multiple Checkboxes -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Languages Known">Languages Known</label>
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label for="Languages Known-0">
                                            <input type="checkbox" name="Languages Known" id="Languages Known-0" value="1">
                                            Nepali
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="Languages Known-1">
                                            <input type="checkbox" name="Languages Known" id="Languages Known-1" value="2">
                                            Newari
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="Languages Known-2">
                                            <input type="checkbox" name="Languages Known" id="Languages Known-2" value="3">
                                            English
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="Languages Known-3">
                                            <input type="checkbox" name="Languages Known" id="Languages Known-3" value="4">
                                            Hindi
                                        </label>
                                    </div>

                                    <div class="othertop">
                                        <label for="Languages Known-4">



                                        </label>

                                        <input type="input" name="LanguagesKnown" id="Languages Known-4"  placeholder="Other Language">
                                    </div>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="License No.">License No.</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-sticky-note-o"></i>

                                        </div>
                                        <input id="License No." name="License No." type="text" placeholder="License No." class="form-control input-md">

                                    </div>


                                </div>
                            </div>

                            <!-- Multiple Radios -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Owns Vehicle">Owns Vehicle?</label>
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label for="Owns Vehicle-0">
                                            <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-0" value="1">
                                            4 wheeler
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="Owns Vehicle-1">
                                            <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-1" value="2">
                                            Bike
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="Owns Vehicle-2">
                                            <input type="checkbox" name="Owns Vehicle" id="Owns Vehicle-2" value="3">
                                            Bicycle
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Working Experience (time period)">Working Experience (time period)</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>

                                        </div>
                                        <input id="Working Experience (time period)" name="Working Experience" type="text" placeholder="Enter time period " class="form-control input-md">


                                    </div>

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Overview (max 200 words)">Overview (max 200 words)</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" rows="10"  id="Overview (max 200 words)" name="Overview (max 200 words)">Overview</textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label" ></label>
                                <div class="col-md-4">
                                    <button class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span>Enviar</button>


                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
                <div class="col-md-2 hidden-xs">
                    <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" class="img-responsive img-thumbnail ">
                </div>


            </div>
        </div>
    </div>
</div>

</body>
</html>