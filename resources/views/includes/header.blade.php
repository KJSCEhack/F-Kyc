<!-- Dropdown Structure -->
<span id="top"></span>
    <ul id="academicsDropdown" class="dropdown-content">
                        {{--<li><a class='dropdown-button2 d' href='#' data-activates='dropdownfe' data-hover="hover" data-alignment="left">Drop Me!</a></li>--}}

        <li><a href="{!! url('fe') !!}">Humanities and Applied Sciences(F.E.)</a></li>
        <li><a href="{!! url('ce') !!}">Computer Engineering</a></li>
        <li><a href="{!! url('extc') !!}">Electronics and Telecommunications</a></li>
        <li><a href="{!! url('me') !!}">Mechanical Engineering</a></li>
        <li><a href="{!! url('it') !!}">Information Technology</a></li>
        <li><a href="{!! url('ppt') !!}">Printing and Packaging Technology</a></li>
        <li class="divider"></li>
        <li class="no-pad"><span class="nav-sub-title text-small">Support Departments</span></li>
        <li><a href="#coe" class="modal-trigger">Center of Excellence</a></li>
        <li><a href=" {!! asset('assets/gst/Innovation_Center.pdf') !!}" class="modal-trigger">Innovation Cell</a></li>
        <li><a href="{!! url('support') !!}#office">Admin Office</a></li>
        <li><a href="{!! url('support') !!}#examcell">Exam Cell</a></li>
        <li><a href="{!! url('support') !!}#nonteaching">Non Teaching Staff</a></li>

    </ul>
{{--<ul id='dropdownfe' class='dropdown-content'>--}}
    {{--<li><a href="#!">one</a></li>--}}
    {{--<li><a href="#!">two</a></li>--}}
    {{--<li class="divider"></li>--}}
    {{--<li><a href="#!">three</a></li>--}}
{{--</ul>--}}

<ul id="amenitiesDropdown" class="dropdown-content">
    <li><a href="{!! url('amenities/library') !!}">Library</a></li>
    <li><a href="{!! url('amenities') !!}#divyangjan">Divyangjan facilities</a></li>
    <li><a href="{!! url('amenities') !!}#eyantraSection">Eyantra</a></li>
    <li><a href="{!! url('amenities') !!}#iitSection">IIT Bombay - REMOTE CENTER</a></li>
    <li><a href="{!! url('amenities') !!}#ccSection">Computer Center</a></li>
    <li><a href="{!! url('amenities') !!}#intranetSection">Intranet</a></li>
    <li><a href="{!! url('amenities') !!}#generalSection">General Laboratories </a></li>
    <li><a href="{!! url('amenities') !!}#audiSection">Auditorium & Halls </a></li>
    <li><a href="{!! url('amenities') !!}#aakashSection">Aakash Project Labs </a></li>
    <li><a href="{!! url('amenities') !!}#miscSection">Miscellaneous </a></li>
</ul>
<ul id="aboutDropdown" class="dropdown-content">
    <li><a target="_self" href=" {!! url('about') !!}#overview">Overview</a></li>
    <li><a target="_self" href=" {!! url('about') !!}#managing-committee" class="modal-trigger">Managing Committee </a>
    </li>
    <li><a target="_self" href=" {!! url('about') !!}#mission-n-vision">Vision and Mission</a></li>
    <li><a target="_self" href=" {!! url('about') !!}#principal">The Principal</a></li>
    <li><a target="_self" href=" {!! asset('assets/gst/core_values.pdf') !!}">Core Values</a></li>
    <li><a target="_slef" href="{!! url('ong') !!}">Organisation & Governance</a></li>
    <li><a target="_slef" href="{!! url('about') !!}#icc" class=" modal-trigger">Internal Complaint Committee</a></li>
    <li><a target="_self" href=" {!! url('about') !!}#wdc" class=" modal-trigger">Women Development Cell</a></li>
    <li><a target="_self" href=" {!! url('iqac') !!}">IQAC - Internal Quality Assurance Committee</a></li>
    <li><a target="_self" href=" {!! url('about') !!}#anti-ragging-committee" class=" modal-trigger">Anti Ragging
            Committee</a></li>
    <li><a target="_blank" href="assets/gst/mandatory_disclosure.pdf">Mandatory Disclosures </a></li>
</ul>
<ul id="gstLifeDropdown" class="dropdown-content">
    <li><a href="{!! url('gstlife/studentchapters') !!}">Student Chapters</a></li>
    <li><a href="#nss" class="modal-trigger">NSS</a></li>
    <li><a href="{!! asset('assets/gst/dreamrun.pdf') !!}">Dream Run</a></li>
    <li><a href="{!! url('gstlife/clubs') !!}">Clubs</a></li>
    <li><a href="{!! url('gstlife/festivals') !!}">Festivals</a></li>
    <li><a href="{!! url('gstlife/studentcouncil') !!}">Student Council</a></li>
    <li><a href="{!! url('gstlife/capability_enhancement') !!}">Capability Enhancement</a></li>
</ul>

{{--laptop--}}
<nav class="nav-extended white hide-on-med-and-down">
    <div class="nav-content">
        <div class="nav-title">
            <a href="/" class="logo"><img src="{!! asset('assets/gst.png') !!}" alt="SIES GST"></a>
        </div>

        {{--TOP section--}}
        <a class="right btn btn-block waves-effect padded-btn" href="{!! url('iiic') !!}">IIIC</a>
        <a class="right btn btn-block waves-effect padded-btn1 modal-trigger" href="#rnd">R&D</a>
        <a class="right btn btn-block waves-effect padded-btn1" href="http://www.siesgst.edu.in/downloads">NIRF</a>
        <a class="right btn btn-block waves-effect padded-btn1 modal-trigger" href="#mnd">Mandatory disclosure</a>
        <a class="right btn btn-block waves-effect padded-btn1 modal-trigger" href="#feedback">Feedback</a>
        {{--<a class="right btn btn-block waves-effect padded-btn1" href="{!! url('isr') !!}">ISR - Beacon</a>--}}
        <a class="right btn btn-block waves-effect padded-btn1 modal-trigger"
           href="{!! asset('assets/gst/rules.pdf') !!}">Rules</a>
        <a class="right btn btn-block waves-effect padded-btn1 modal-trigger" href="{!! url('/naac') !!}">NAAC</a>

    </div>
    <div class="nav-wrapper teal navbar-fixed">
        <ul class="hide-on-med-and-down">
            <li><a href="{!! url('/') !!}">HOME</a></li>
            <li>
                <a class="dropdown-button" data-activates="aboutDropdown">
                    ABOUT
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li>
                <a class="dropdown-button" data-activates="academicsDropdown">
                    ACADEMICS
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li><a href="{!! url('admission') !!}">ADMISSIONS  <span class="new badge white black-text"></span></a></li>
            <li><a href="{!! url('career') !!}">CAREERS</a></li>
            <li>
                <a class="dropdown-button" data-activates="amenitiesDropdown">
                    AMENITIES
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li>
                <a class="dropdown-button" data-activates="gstLifeDropdown">
                    LIFE @ GST
                    <i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li><a href="{!! url('alumni') !!}">ALUMNI</a></li>
            <li><a href="{!! url('contact') !!}">CONTACT US</a></li>
        </ul>
    </div>
</nav>
{{--Mobile | tablet --}}
<nav class="hide-on-large-only white navbar-fixed">
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <div class="nav-wrapper teal">
        <ul class="side-nav" id="mobile-demo">
            <li>
                <div class="user-view">
                    <div class="background">
                        <a href="{!! url('/') !!}">
                            <img class="responsive-img padding" src="{!! asset('assets/gst.png') !!}">
                        </a>
                    </div>
                    <br>
                    <br>
                </div>
            </li>
            <li>
                <a href="{!! url('/') !!}">
                    Home
                </a>
            </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li class="bold">
                        <a class="collapsible-header  waves-effect">ABOUT
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a target="_self" href=" {!! url('about') !!}/#overview">Overview</a></li>
                                <li><a target="_self" href=" {!! url('about') !!}/#managing-committee">Managing
                                        Committee </a></li>
                                <li><a target="_self" href=" {!! url('about') !!}/#mission-n-vision">Mission And
                                        Vission</a></li>
                                <li><a target="_self" href=" {!! url('about') !!}/#principal">The Principal</a></li>
                                <li><a target="_self" href=" {!! asset('assets/gst/core_values.pdf') !!}">Core Values</a></li>
                                <li><a target="_self" href=" {!! url('about') !!}/#wdc">Women Development Cell</a></li>
                                <li><a target="_self" href=" {!! url('about') !!}/#anti-ragging-committee">Anti Ragging
                                        Committee</a></li>
                                <li><a target="_blank" href="{!! asset('assets/gst/mandatory_disclosure.pdf') !!}">Mandatory
                                        Disclosures </a></li>
                                <li><a target="_blank" href="{!! url('ong') !!}">Organisation & Governance</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold">
                        <a class="collapsible-header  waves-effect ">ACADEMICS
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a class="waves-effect "
                                       href="{!! url('fe') !!}">Humanities and applied Sciences</a></li>
                                <li><a class="waves-effect "
                                       href="{!! url('ce') !!}">Computer Engineering</a></li>
                                <li><a class="waves-effect " href="{!! url('extc') !!}">Electronics and
                                        Telecommunications</a></li>
                                <li><a class="waves-effect "
                                       href="{!! url('me') !!}">Mechanical Engineering</a>
                                </li>
                                <li><a class="waves-effect "
                                       href="{!! url('it') !!}">Information Technology</a></li>
                                <li><a class="waves-effect "
                                       href="{!! url('ppt') !!}">Printing and Packaging
                                        Technology</a></li>
                                <span style="line-height:20px;font-size: small;"
                                      class="black-text">Support Departments</span>
                                <li><a href="#coe" class="modal-trigger">Center of Excellence</a></li>
                                <li><a href=" {!! asset('assets/gst/Innovation_Center.pdf') !!}" class="modal-trigger">Innovation Cell</a></li>
                                <li><a href="{!! url('support') !!}/#office">Admin Office</a></li>
                                <li><a href="{!! url('support') !!}/#office">Admin Office</a></li>
                                <li><a href="{!! url('support') !!}/#examcell">Exam Cell</a></li>
                                <li><a href="{!! url('support') !!}/#nonteaching">Non teaching</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="bold"><a href="{!! url('admission') !!}" class="waves-effect ">ADMISSIONS</a></li>
            <li class="bold"><a href="{!! url('career') !!}" class="waves-effect ">CAREERS</a></li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li class="bold">
                        <a class="collapsible-header waves-effect ">AMENITIES<i class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a class=" waves-effect "
                                       href="{!! url('amenities/library') !!}">Library</a></li>
                                <li><a target="_self" href="{!! url('amenities') !!}#Divyangjan">Divyangjan</a></li>
                                <li><a class=" waves-effect " href="{!! url('amenities') !!}#eyantraSection">Eyantra</a>
                                </li>
                                <li><a class=" waves-effect " href="{!! url('amenities') !!}#iitSection">IIT
                                        Bombay - Remote Center</a></li>
                                <li><a class=" waves-effect " href="{!! url('amenities') !!}#ccSection">Computer
                                        Center</a></li>
                                <li><a class=" waves-effect "
                                       href="{!! url('amenities') !!}#intranetSection">Intranet</a>
                                </li>
                                <li><a class=" waves-effect " href="{!! url('amenities') !!}#generalSection">General
                                        Laboratories </a></li>
                                <li><a class=" waves-effect " href="{!! url('amenities') !!}#audiSection">Auditorium
                                        & Halls </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold">
                        <a class="collapsible-header  waves-effect ">LIFE @ GST<i
                                    class="material-icons right">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a class=" waves-effect " href="{!! url('gstlife/studentchapters') !!}">Student
                                        Chapters</a></li>
                                <li><a href="#nss" class="modal-trigger">NSS</a></li>
                                <li><a href="{!! asset('asstes/gst/dream_run.pdf') !!}">Dream Run</a></li>
                                <li><a class=" waves-effect " href="{!! url('gstlife/clubs') !!}">Clubs</a>
                                </li>
                                <li><a class=" waves-effect " href="{!! url('gstlife/festivals') !!}">Festivals</a>
                                </li>
                                <li><a class=" waves-effect " href="{!! url('gstlife/studentcouncil') !!}">Student
                                        Council</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="bold"><a href="{!! url('alumni') !!}" class="waves-effect ">ALUMNI</a></li>
            <li class="bold"><a href="{!! url('contact') !!}" class="waves-effect ">CONTACT US</a></li>
            <li class="bold"><a class="waves-effect " href="{!! url('iiic') !!}">IIIC</a></li>
            <li class="bold"><a class="waves-effect  modal-trigger" href="#rnd">R&D</a></li>
            <li class="bold"><a class="waves-effect " href="/downloads">NIRF</a></li>
            <li class="bold"><a class="waves-effect  modal-trigger" href="#mnd">Mandatory disclosure</a></li>
            <li class="bold"><a class="waves-effect " href="{!! url('isr') !!}">ISR - Beacon</a></li>
            <li class="bold"><a class="waves-effect " href="{!! asset('assets/gst/rules.pdf')!!}">RULES</a></li>
            <li class="bold"><a class="waves-effect " href="{!! url('/naac')!!}">NAAC Documents</a></li>

        </ul>
    </div>
</nav>

{{--<a id="menu" class="waves-effect waves-light btn btn-floating" ><i class="material-icons">menu</i></a>--}}

<!-- Tap Target Structure -->
<div class="tap-target teal white-text" data-activates="menu">
    <div class="tap-target-content">
        <h5>Quick access Button</h5>
        <p>Get quick acess to important pages while browsing through any page</p>
    </div>
</div>

{{--FAB--}}
<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large" id="menu">
        <i class="material-icons">apps</i>
    </a>
    <ul class="hide-on-small-and-down">
        <li class="btn waves-effect waves-light text-small"><a href="{!! url('contact') !!}"><i
                        class="material-icons left">help</i><span class="nospace">Got Query?</span></a></li>
        <li class="btn waves-effect waves-light text-small"><a href="{!! url('downloads') !!}"><i
                        class="material-icons left">file_download</i><span class="nospace">Downloads</span></a></li>
        <li class="btn waves-effect waves-light text-small"><a href="{!! url('news') !!}"><i
                        class="material-icons left">notifications</i><span class="nospace"> News</span></a></li>
        <li class="btn waves-effect waves-light text-small"><a href="{!! url('events') !!}"><i
                        class="material-icons left">event</i><span class="nospace"> Events</span></a></li>
        <li class="btn waves-effect waves-light"><a id="goto"><i class="material-icons">keyboard_arrow_up</i></a></li>
    </ul>
    <ul class="hide-on-med-and-up">
        <li class="btn waves-effect waves-light text-small"><a href="{!! url('contact') !!}"><i
                        class="material-icons left">help</i></a></li>
        <li class="btn waves-effect waves-light text-small"><a href="{!! url('downloads') !!}"><i
                        class="material-icons left">file_download</i></a></li>
        <li class="btn waves-effect waves-light text-small"><a href="{!! url('news') !!}"><i
                        class="material-icons left">notifications</i></a></li>
        <li class="btn waves-effect waves-light text-small"><a href="{!! url('events') !!}"><i
                        class="material-icons left">event</i></a></li>
        <li class="btn waves-effect waves-light"><a class="page-scroll" href="#top" id="goto"><i class="material-icons">keyboard_arrow_up</i></a>
        </li>
    </ul>
</div>


{{--Modal R&D--}}

<div id="rnd" class="modal">
    <div class="modal-content">
        <p><strong>Minor research grant of Mumbai University for the year 2016-17</strong></p>
        <table style="height: 421px;" width="618">
            <tbody>
            <tr>
                <td width="110">Sr. No</td>
                <td width="420">Name of Principal Investigator</td>
                <td width="427">Title of the Research</td>
                <td width="319">Fund Sanctioned</td>
            </tr>
            <tr>
                <td width="110">1<strong>.</strong></td>
                <td width="420">Dr.Atul Kemkar</td>
                <td width="427">Analyzing Public safety&nbsp; communications signals using Software defined radio
                    receiver.
                </td>
                <td width="319">30000/-</td>
            </tr>
            <tr>
                <td width="110">2.</td>
                <td width="420">Dr. Rizwana Shaikh</td>
                <td width="427">Real Time pothole detection using android smartphone and IoT based approach</td>
                <td width="319">20000/-</td>
            </tr>
            <tr>
                <td width="110">3.</td>
                <td width="420">Prof. Suvarna Chaure</td>
                <td width="427">An efficient way for monitoring Solid Waste Management</td>
                <td width="319">25000/-</td>
            </tr>
            <tr>
                <td width="110">4.</td>
                <td width="420">Prof. Seema Redekar</td>
                <td width="427">Smart light system</td>
                <td width="319">25000/-</td>
            </tr>
            </tbody>
        </table>
        <p>&nbsp;</p>
        <p><strong>Minor research grant of Mumbai University for the year 2015-16</strong></p>
        <table style="height: 335px;" width="619">
            <tbody>
            <tr>
                <td width="110">Sr. No</td>
                <td width="420">Name of Principal Investigator</td>
                <td width="427">Title of the Research</td>
                <td width="319">Fund Sanctioned</td>
            </tr>
            <tr>
                <td width="110">1.</td>
                <td width="420">Dr. Mansi Karkare</td>
                <td width="427">Preparation of thin film of Nano TiO2 and Study of its Optical, Electrical and&nbsp;
                    Photo catalytic properties
                </td>
                <td width="319">50000/-</td>
            </tr>
            <tr>
                <td width="110">2.</td>
                <td width="420">Prof. Prachi U. Bahurupi</td>
                <td width="427">Real time Monitoring of CO2 emissions in vehicles with Raspberry-Pi</td>
                <td width="319">30000/-</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

{{--modal mandatory_disclosures--}}
<div id="mnd" class="modal">
    <div class="modal-content">

        <div class="collection">
            <a href="assets/gst/mandatory_disclosure.pdf" class="collection-item">Mandatory disclosure</a>
            <a href="{!! asset('files') !!}/Computtation of Fee - Engineering 2018-19.pdf" class="collection-item">Fee
                Proposal</a>
            <a href="{!! asset('files') !!}/EOA Report 2017-18.pdf" class="collection-item">AICTE approval letter for
                the year 2017-18</a>
            <a href="{!! asset('files/EOA Report_2018-19.pdf') !!}" class="collection-item">AICTE approval letter for
                the year 2018-19</a>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>
{{--Modal Feedback--}}
<div id="feedback" class="modal">
    <div class="modal-content">
        <div class="collection">
            <a href="https://goo.gl/forms/0I4B1pJYtQ2FM3cE2" class="collection-item">Student</a>
            <a href="https://goo.gl/forms/uqIBMXnkRgD4v3VQ2" class="collection-item ">Alumni</a>
            <a href="https://goo.gl/forms/fugcyDi8ttH6dhog2" class="collection-item">Parents | Guardians</a>
            <a href="https://goo.gl/forms/6eopQqtmOKlwMLG03" class="collection-item">Faculty</a>
            <a href="{!! asset('assets/gst/Feedback process by students through moodle software.pdf') !!}" class="collection-item">Teaching Learning</a>
            <a href="{!! asset('assets/gst/1.4.1-Report-Syllabus-Revision-Feedback.pdf') !!}" class="collection-item">Feedback
                Analysis</a>
            <a href="{!! asset('assets/gst/1.4.2-feedback-action-taken.pdf') !!}" class="collection-item">Feedback
                Report</a>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109686354-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-109686354-1');
</script>

<!--Managing Committee Modal-->
<div id="managing-committee" class="modal ">
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <table class="striped">
                        <thead>
                        <tr>
                            <th data-field="id"><h5>Managing Committee <span class="grey-text">SIES</span></h5></th>
                        </tr>
                        </thead>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Shri.V.Shankar</td>
                            <td>President</td>
                        </tr>
                        <tr>
                            <td>Shri. J. Santhanam</td>
                            <td>Vice President</td>
                        </tr>
                        <tr>
                            <td>Shri.P.Sethuraman</td>
                            <td>Vice President</td>
                        </tr>
                        <tr>
                            <td>Shri. S. Ganesh</td>
                            <td>Hon. Secretary</td>
                        </tr>
                        <tr>
                            <td>Shri.M.V.Ramnarayan</td>
                            <td>Jt.Hon. Secretary</td>
                        </tr>
                        <tr>
                            <td>Shri.Devdas G Nair</td>
                            <td>Hon. Treasurer</td>
                        </tr>
                        <tr>
                            <td>Shri.G.Chidambaram</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Shri.N.S.Sundar Rajan</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Shri. H. P. Eswar</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Shri.M.Kalahasthi</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Shri. L. Krishnan</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Shri.Ramesh Srinivasan</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Shri.S.V.Viswanathan</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Shri.Arvind Narayanan</td>
                            <td>Member</td>
                        </tr>
                        <tr>
                            <td>Shri.Srinath Sridharan</td>
                            <td>Member</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <a href="#!"
                       class=" quickAccessButton modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Anti Ragging Committee Modal-->
<div id="anti-ragging-committee" class="modal ">
    <div class="modal-content">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <object data='{!! asset('files/Banner.pdf') !!}'
                            type='application/pdf'
                            width='100%'
                            height='550px'>
                    </object>
                    <table class="striped">
                        <thead>
                        <tr>
                            <th data-field="id"><h5>Anti Ragging Committee</h5></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dr. Atul.N.Kemkar</td>
                            <td>HOD, EXTC</td>
                            <td>022-6108-2404</td>
                        </tr>
                        <tr>
                            <td>Dr. Manasi M Karkare</td>
                            <td>HOD, FE</td>
                            <td>
                                022-6108-2408
                            </td>
                        </tr>

                        <tr>
                            <td>Dr.Rizwana Shaikh</td>
                            <td>HOD, CE</td>
                            <td>022-6108-2403</td>
                        </tr>
                        <tr>
                            <td>Ms.Lakshmi Sudha</td>
                            <td>HOD, IT</td>
                            <td>022-6108-2405</td>
                        </tr>
                        <tr>
                            <td>Prof.Prasad Iyer</td>
                            <td>HOD, PPT</td>
                            <td>022-6108- 2407</td>
                        </tr>
                        <tr>
                            <td>Dr Rupendra S . Nehete</td>
                            <td>HOD, ME</td>
                            <td>022-6108- 2412</td>
                        </tr>

                        <tr>
                            <td>Prof Rajesh Kadu</td>
                            <td>Asst ProF. , CE</td>
                            <td>022-6108- 2466</td>
                        </tr>
                        <tr>
                            <td>Prof Mahesh Biradar</td>
                            <td>Asst ProF. , FE</td>
                            <td>022-6108- 2498</td>
                        </tr>
                        <tr>
                            <td>Prof Shubhangi Kadu</td>
                            <td>Asst ProF. , BT</td>
                            <td>022-6108- 2410</td>
                        </tr>
                        <tr>
                            <td>Dr Smitha Kumar</td>
                            <td>Asst ProF. , FE</td>
                            <td>022-6108- 2495</td>
                        </tr>
                        <tr>
                            <td>Ms.Sheetal Padmanabhan</td>
                            <td>STUDENT -BE EXTC</td>
                            <td>8108134097</td>
                        </tr>
                        <tr>
                            <td>Mr.Padmanabhan .V.</td>
                            <td>PARENT</td>
                        </tr>
                        <tr>
                            <td>Ms.Namita Preman</td>
                            <td>STUDENT -BE PPT</td>
                            <td>9819569409</td>
                        </tr>
                        <tr>
                            <td>Mr..Rajani Preman</td>
                            <td>PARENT</td>
                        </tr>
                        <tr>
                            <td>Mr Aditya Sargar</td>
                            <td>STUDENT -BE CE</td>
                            <td>9029025678</td>
                        </tr>
                        <tr>
                            <td>Nanda sagar</td>
                            <td>PARENT</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <a href="#!"
                       class=" quickAccessButton modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--WDC Modal--}}
<div id="wdc" class="modal ">
    <div class="modal-content">
        <div class="container">
            <div class="divider"></div>
            <br>
            <h5 class="hide-on-small-only">WOMEN DEVELOPMENT CELL</h5>
            <h4 class="center hide-on-med-and-up">
                <br>
                <span class="text-justify">WOMEN DEVELOPMENT CELL</span>
            </h4>
            <p class="text-justify">
                The CWDC (College Women Development Cell) has been setup as per the guidelines laid down by the
                women development cell of University of Mumbai. CWDC conducts various programs and workshops to
                create social awareness in students about women related issues.
                The cell looks into the grievances of the women, both staff and students, and provides guidance
                and
                help to them.
            </p>
            <blockquote>
                Objectives : <br>
                •To prevent sexual harassment at workplace and to promote general wellbeing of female students,
                teaching and non-teaching women staff of SIES Graduate School of Technology. <br>
                •To become a resource centre for women and provide a forum for exchange of ideas. <br>
                •To employ safety and security measures for female employees and girl students at college campus.
                <br>
                •To enhance self esteem and self confidence of women, students and staff of the institute. <br>
            </blockquote>
            <div class="row">
                <div class="col s12 m12">
                    <table class="striped">
                        <thead>
                        <tr>
                            <th data-field="id"><h5>WDC Committee</h5></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dr. Manasi M Karkare</td>
                            <td>HOD, FE</td>
                            <td>President | Convener</td>
                        </tr>
                        <tr>
                            <td>Prof. Ujwala Ravale</td>
                            <td>Faculty , CE</td>
                            <td>Representative</td>
                        </tr>
                        <tr>
                            <td>Prof. Katyayani</td>
                            <td>Faculty ,PPT</td>
                            <td>Representative</td>
                        </tr>
                        <tr>
                            <td>Prof.. Prajakta Kane</td>
                            <td>Faculty ,MECH</td>
                            <td>WDC Co-ordinator</td>
                        </tr>
                        <tr>
                            <td>Ms. V.Vijayalakshmi</td>
                            <td>Office Suprintendant</td>
                            <td>Non-Teaching Representative</td>
                        </tr>
                        <tr>
                            <td>Ms. Shruti Shinde</td>
                            <td>Student Representative</td>
                        </tr>
                        <tr>
                            <td>Ms. Vandana Chincholkar</td>
                            <td>Maharashtra Mahila Parishad</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <a href="#!"
                       class=" quickAccessButton modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{--ICC Modal--}}
<div id="ICC" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="divider"></div>
            <br>
            <h5 class="hide-on-small-only">INTERNAL COMPLAINT COMMITTEE</h5>
            <h4 class="center hide-on-med-and-up">
                <br>
                <span class="text-justify">INTERNAL COMPLAINT COMMITTEE</span>
            </h4>
            <p class="text-justify">

                The Parliament of India passed the “Sexual Harassment of Women at Workplace
                (Prevention, Prohibition, and Redressal) Act,” in the year 2013. The ACT provides
                protection against sexual harassment of women at workplace and for the prevention
                and redressal of complaints of sexual harassment and for the matters connected
                therewith or incidental thereto. <br>
                The guidelines explicitly state the following: “It shall be the duty of the employer or
                other responsible persons in workplaces or other institutions to prevent or deter the
                commission of acts of sexual harassment and to provide the procedures for the
                resolutions, settlement, or prosecution of acts, of sexual harassment by taking all
                steps require.” <br>
                Educational institutions are also bound by the Supreme Court’s directive and the Act.
                S.I.E.S Graduate School of Technology, Nerul, Navi-Mumbai is committed to
                creating and maintaining an environment which is free of all forms of gender
                violence, sexual harassment, and discrimination on the basis of sex/gender.
                Following this, the institute is committed to uphold the Constitutional mandate
                ensuring the above mentioned human rights of all those who fall within its
                jurisdiction. As directed by the act SIESGST has constituted a committee called
                “Internal Complaint Committee to Prevent Sexual Harassment of Women at the
                Workplace.” The following policy has been made keeping in mind the above facts.
            </p>
            <blockquote>
                Objectives <br>
                The objectives of the Internal Complaint Committee to Prevent Sexual
                Harassment of Women at the Workplace are as follows: <br>
                 To develop a policy against sexual harassment of women at the Institute. <br>
                 To evolve a permanent mechanism for the prevention and redressal of sexual
                harassment cases and other acts of gender based violence at the Institute.<br>
                 To ensure the implementation of the policy in letter and spirit through proper
                reporting of the complaints and their follow-up procedures.<br>
                 To uphold the commitment of the Institute to provide an environment free of
                genderbased discrimination.<br>
                 To create a secure physical and social environment to deter any act of sexual
                harassment.<br>
                 To promote a social and psychological environment to raise awareness on
                sexual harassment in its various forms.<br>
            </blockquote>
            <div class="row">
                <div class="col s12 m12">
                    <table class="striped">
                        <thead>
                        <tr>
                            <th data-field="id"><h5>ICC Committee</h5></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dr. Manasi M Karkare</td>
                            <td>HOD, FE</td>
                        </tr>
                        <tr>
                            <td>Dr.Rizwana Shaikh</td>
                            <td>HOD, CE</td>
                        </tr>
                        <tr>
                            <td>Prof Pradeep Patil</td>
                            <td>Associate Profecor, ME</td>
                        </tr>
                        <tr>
                            <td>Prof. Seema Khan</td>
                            <td>T&amp;P
                                Coordinator
                            </td>
                        </tr>
                        <tr>
                            <td>Prof . Seema Desai</td>
                            <td>Faculty, IT</td>
                        </tr>
                        <tr>
                            <td>Prof . Vandana Sawant</td>
                            <td>Faculty, EXTC</td>
                        </tr>
                        <tr>
                            <td>Ms. Binacaa Varma</td>
                            <td>NGO,
                                Innerwheel
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <a href="#!"
                       class=" quickAccessButton modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{--Center of Excelence--}}
<div id="coe" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="divider"></div>
            <br>
            <h5 class="hide-on-small-only">Center of Excellence In -</h5>
            <h4 class="center hide-on-med-and-up">
                <br>
                <span class="text-justify">Center of Excellence In -</span>
            </h4>
            <ul class="collection">
                <li class="collection-item">
                    <div>
                        VLSI & Embedded Systems
                        <a href="{!! asset('assets/gst/coe/coe1.pdf') !!}" class="secondary-content"><i class="material-icons">vertical_align_bottom</i></a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        E-Security
                        <a href="{!! asset('assets/gst/coe/coe2.pdf') !!}" class="secondary-content"><i class="material-icons">vertical_align_bottom</i></a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        High Performance Computing
                        <a href="{!! asset('assets/gst/coe/coe3.pdf') !!}" class="secondary-content"><i class="material-icons">vertical_align_bottom</i></a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        Internet of Things
                        <a href="{!! asset('assets/gst/coe/coe4.pdf') !!}" class="secondary-content"><i class="material-icons">vertical_align_bottom</i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <a href="#!"
                       class=" quickAccessButton modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>
        </div>
    </div>

</div>

{{--Innovation Cell--}}
<div id="nss" class="modal">
    <div class="modal-content">
        <div class="container">
            <div class="divider"></div>
            <br>
            <h5 class="hide-on-small-only">NSS Reports</h5>
            <h4 class="center hide-on-med-and-up">
                <br>
                <span class="text-justify">NSS Reports</span>
            </h4>
            <ul class="collection">
                <li class="collection-item">
                    <div>
                        2012-2013
                        <a href="{!! asset('assets/gst/nss/NSS 2012-13.pdf') !!}" class="secondary-content"><i class="material-icons">launch</i></a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        2013-2014
                        <a href="{!! asset('assets/gst/nss/NSS 2013-14.pdf') !!}" class="secondary-content"><i class="material-icons">launch</i></a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        2014-2015
                        <a href="{!! asset('assets/gst/nss/NSS 2014-15.pdf') !!}" class="secondary-content"><i class="material-icons">launch</i></a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        2015-2016
                        <a href="{!! asset('assets/gst/nss/NSS 2015-16.pdf') !!}" class="secondary-content"><i class="material-icons">launch</i></a>
                    </div>
                </li>
                <li class="collection-item">
                    <div>
                        2016-2017
                        <a href="{!! asset('assets/gst/nss/NSS 2016-17.pdf') !!}" class="secondary-content"><i class="material-icons">launch</i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <a href="#!"
                       class=" quickAccessButton modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
            </div>
        </div>
    </div>

</div>
<marquee>
    <span class="badge teal white-text" style="float: none !important;">New</span>The college is NAAC Accredited B++
    <a href="{!! asset('assets/gst/SSR.pdf') !!}">Click here to for NAAC SSR</a>
</marquee>
