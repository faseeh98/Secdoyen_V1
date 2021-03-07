<!DOCTYPE html>
<html lang="en" ng-app="indexApp">

<head>
    <title>Secdoyen Inc.</title>
    <link rel="Icon" type="Icon" href="images/logo/secdoyen_logo.png">
    <!-- AOS -->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="google-site-verification" content="V7mALkycUTPatFHOJ_svZGuWxe1szfbWaOBCdgUoIn0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="lib/Bootstrap4/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- Swiper.js -->
    <link rel="stylesheet" href="lib/Swiper.js/swiper.min.css">
    <script src="lib/Swiper.js/swiper.min.js"></script>
    <!-- Google Fonts (Dosis) -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,600,700&display=swap" rel="stylesheet">
    <!-- Google Fonts (Open Sans Condensed) -->
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Open+Sans+Condensed:300,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Playfair+Display:wght@900&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <!-- Google Fonts (Cinzel) -->
    <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700&display=swap" rel="stylesheet">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- AnimeJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- AngularJS -->
    <script src="lib/angular.js/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script>
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!-- JS -->
    <script src="app/index.js"></script>
    <!-- LinkedIn -->
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
</head>

<header>
	<!-- Navbar -->
    <nav id="navbar" class="navbar fixed-top navbar-expand-md navbar-transparent">
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header">
                <a href="#Home" class="navbar-brand">
                    <img src="images/logo/secdoyen_logo.png" alt="Logo" id="nav-logo"> {{navbar_header}}
                </a>
            </div>
            <!-- Hamburger -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navhamburger" aria-expanded="true">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Items -->
            <div class="collapse navbar-collapse justify-content-end" id="navhamburger">
                <div class="nav nav-pills nav-fill">
                    <a id="Link1" class="nav-item nav-link" href="#AboutUs"> About Us </a>
                    <a id="Link2" class="nav-item nav-link" href="#Services"> Services </a>
                    <a id="Link3" class="nav-item nav-link" href="#Solutions"> Solutions </a>
                    <a id="Link4" class="nav-item nav-link" href="#ContactUs"> Contact </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<body ng-controller="bodyCtrl" data-spy="scroll" data-target="#navbar" data-offset="0">
    
    <div class="content">
        <!-- Home -->
        <section id="Home" class="Home">
            <div class="HomeText" data-aos="fade-up">
                <h3 class="display-3 Slogan"> All your cybersecurity needs in one place </h3>
                <br>
                <br>
                <div class="tagline">
                	<h3> Looking for profesionally tailored consulting services that meets your organizations needs</h3>
                	<h3> or </h3>
                	<h3> Looking to safegaurd your assets from cyber threats </h3>
                	<h3> We are here to help </h3>
                </div>
            </div>
             <div class="middle">
                    <div>
                      <i class="mouse fas fa-chevron-down"></i>
                    </div>
            </div>
            
        </section>
        <!-- About Us -->
        <section id="AboutUs" class="AboutUs">
            <div class="container">
                <p class="lead animated fadeIn AboutUsParagraph" data-aos="fade-up" data-aos-delay="150"> Secdoyen Inc. is a cyber security services firm with the objective of helping organizations safeguard their assets and data. We defend, protect and ensure your IT infrastructure is secure from costly security risks while maintaining organizational integrity. Our team is comprised of experienced consultants in diversified industry sectors with reputable clients. We believe in integrating people, knowledge, process, and technology to provide a comprehensive security roadmap that aligns with your organizational strategy. </p>
                <p id="AboutUsParagraph" class="lead animated fadeIn iphone_6_7_8" data-aos="fade-up" data-aos-delay="150"> Secdoyen Inc. is a cyber security services firm with the objective of helping organizations safeguard their assets and data. We defend, protect and ensure your IT infrastructure is secure from costly security risks while maintaining organizational integrity. Our team is comprised of experienced consultants in diversified industry sectors with reputable clients. </p>
                <!-- <div id="clients" data-aos="fade-up" data-aos-delay="150">
                    <h4 id="ClientsTitle" class="display-4"> Clients </h4>
                    <div class="row">
                        <div class="column mx-auto">
                            <img class="mx-auto" src="images\clients\toyota.png">
                        </div>
                        <div class="column">
                            <img src="images\clients\camh.png">
                        </div>
                        <div class="column">
                            <img src="images\clients\canadiantire.png">
                        </div>
                        <div class="column">
                            
                        </div>
                    </div>
                </div> -->
                <div id="certi" data-aos="fade-up" data-aos-delay="150">
                    <h4 id="CertiTitle" class="display-4"> Certifications </h4>
                    <div class="row">
                        <div class="mx-auto">
                            <img src="images\certis\CEH.png">
                        </div>
                        <div class="mx-auto">
                            <img src="images\certis\clogo2.png">
                        </div>
                        <div class="mx-auto">
                            <img src="images\certis\CIMP.png">
                        </div>
                        <div class="mx-auto">
                            <img src="images\certis\CCSE.png">
                        </div>
                        <div class="mx-auto">
                            <img src="images\certis\CIAM.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->
        <section id="Services" >
        	<div class="Services" data-aos="fade-up" data-aos-delay="150">
        		<h4 id="ServicesTitle" class="display-4"> Services </h4>
            <div id="accordion" class="container">
                <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <i class="fas fa-binoculars"></i>
                        <button id="service1" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Vulnerability & Penetration Testing
                        </button>
                      </h5>
                    </div>
                
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="card-body">
                        <div class="container">
                          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Despite every organization's attempt at implementing a thorough cyber-security infrastructure, attacks are inevitable and expected. Secdoyen’s vulnerability and penetration testing service exposes an organization's weakness before potential attackers can exploit them.</p>
                          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our vulnerability assessment consists of identifying potential risks and documenting findings to formulate a strategic plan based on an organization’s needs.  This differs from our penetration testing service which is an authorized simulated cyberattack on an organization's I.T infrastructure to evaluate the security of the system.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">
                        <i class="fas fa-edit"></i>
                        <button id="service2" class="btn btn-link collapsed eisa" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Enterprise Information Security Architecture Masterplan
                        </button> 
                        <button id="service2" class="btn btn-link collapsed iphone_6_7_8" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Enterprise IS Architecture Masterplan
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        <div class="container">
                          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our EISA masterplan focus on I.T security throughout an enterprise and consists of the implementation of recommended best practices for an organization’s infrastructure, accordance with regulatory requirements and standards as well as a DNA survey (identifying users with privileged access and assessing their risk of causing a security breach).</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h5 class="mb-0">
                        <i class="fas fa-rocket"></i>
                        <button id="service3" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Application Security
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                      <div class="card-body">
                        <div class="container">
                          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protecting an organization’s most valuable assets and the data within them is integral to every organization’s operations. Secdoyen consultants help prioritize remediations, review migration proposals, provide manual penetration testing and launch a secure application.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h5 class="mb-0">
                        <i class="fas fa-wifi"></i>
                        <button id="service4" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Wireless Assessment
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="card-body">
                        <div class="container">
                          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secdoyen identifies the wireless infrastructure components that can be discovered and the security mechanisms enforced on each node. Our approach is to conduct a combination of black-box and white-box testing. We start by completing a site survey, where we use high-powered wireless equipment to locate access points. We then map the wireless infrastructure presence and identify and detect vulnerabilities within the wireless spectrum. We offer a verified set of deliverables and reporting following this assessment.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h5 class="mb-0">
                        <i class="fas fa-cloud"></i>
                        <button id="service5" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          Mobile & Cloud Security
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                      <div class="card-body">
                        <ul>
                            <li>Assessing present or anticipated exposure to information security risk</li>
                            <li>Penetration testing including misuse and unauthorized use</li>
                            <li>Attacks simulating Real-world Network, OS and app-level to provide insight</li>
                            <li>Secured Cloud solution design that achieves risks minimization</li>
                            <li>Mobile Security controls solutions based on mobile device use cases</li>
                            <li>Application of policies and processes to mobile programs</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h5 class="mb-0">
                        <i class="fas fa-database"></i>
                        <button  id="service6" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          Web Application Runtime Assessments
                        </button>
                      </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                      <div class="card-body">
                        <ul>
                          <li>Examine access rights in the organization as a weapon against:
                            <ul>
                          <li>Data, identity, and session thefts</li>
                          <li>Backdoor mechanisms, the strength of mechanisms, compartmentalization of access rights, unauthorized data access, and system data loss checks.</li>
                        </ul>
                          </li>
                        <li>Testing includes system defense checks against:
                          <ul>
                          <li>Hidden Field Manipulation</li>
                          <li>SQL Injections</li>
                          <li>Cross-Site Scripting</li>
                          <li>Cross-Site Request Forgery</li>
                          <li>Parameter Tampering</li>
                          <li>Buffer Overflow</li>
                          <li>Session Hijacking</li>
                          <li>Cookie Poisoning</li>
                          <li>HTTP Parameter Pollution</li>
                          <li>Command Injection</li>
                        </ul>
                        </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h5 class="mb-0">
                        <i class="fas fa-project-diagram"></i>
                        <button  id="service7" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                          Project Security Assessment
                        </button>
                      </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                      <div class="card-body">
                        <p>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A PSA is performed to assess the potential risk(s) introduced into the organization either by taking on a new IT project or by incorporating changes into an established IT solution project. The PSA process is ideally initiated either before or during the architectural stage of a project.
                        </p>
                        <p>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A security risk assessor is assigned during the initial concept/architectural stage of a given project to develop the appropriate security profile. The risk assessor continues to work with the project team until delivery, ensuring any potential risks are identified and therefore addressed accordingly.
                        </p>
                        <p>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The output is the Project Security Assessment (PSA) report. The goal is to determine whether the project addressed will introduce new risks to the organization’s IT infrastructure. This serves to inform the management about the overall risk and to implement safeguards or risk-mitigating measures. We have established a PSA process based on best practices driven from industry known standards.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h5 class="mb-0">
                        <i class="fas fa-lightbulb"></i>
                        <button  id="service8" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                          IoT Security Assessment
                        </button>
                      </h5>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                      <div class="card-body">
                        <p>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Organizations need to bear in mind the associated hardware, the software, and the communication protocols in use for any IoT security assessment. An IoT assessment requires the ecosystem for a specific IoT technology to be thoroughly mapped and a detailed assessment plan to be developed. The elements of technology in any given IoT system can be different in architectures, operating systems, communication protocols, etc.
                        </p>
                        <p>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assessing the security of an IoT technology includes strengthening the endpoint device security, protecting against unauthorized usage, avoiding elevation of privileges, reducing the risk of compromise, better user and data privacy, and strong encryption to avoid man-in-the-middle (MTM) attacks.
                        </p>
                        <p>
                        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Understanding the complexities of the environment, adequate research of components, and development of a thorough assessment plan are the keys to success for securing the IoT. Secdoyen can help develop a risk assessment process to integrate into your IoT project initiatives, so your organization can identify and mitigate the risks before a threat agent takes advantage of the vulnerabilities.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingNine">
                      <h5 class="mb-0">
                        <i class="fas fa-clipboard-list"></i>
                        <button  id="service9" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                          SANS 20 Security Assessment
                        </button>
                      </h5>
                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                      <div class="card-body">
                        <ol>
                            <li>Inventory of Hardware Devices</li>
                            <li>Inventory of Software</li>
                            <li>Secure Configurations for Computer Systems</li>
                            <li>Vulnerability Assessment and Remediation</li>
                            <li>Malware Defenses</li>
                            <li>Application-Layer Software Security</li>
                            <li>Wireless Device Control</li>
                            <li>Data Recovery Capability</li>
                            <li>Skills Assessment and Training</li>
                            <li>Secure Configurations for Network Devices</li>
                            <li>Control of Network Ports, Protocols and Services</li>
                            <li>Administrative Privileges</li>
                            <li>Boundary Defense</li>
                            <li>Audit Logs</li>
                            <li>Controlled Access Based on Need To Know</li>
                            <li>Account Monitoring and Control</li>
                            <li>Data Loss Prevention</li>
                            <li>Incident Response</li>
                            <li>Secure Network Engineering</li>
                            <li>Penetration Tests</li>
                        </ol>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
        <!-- Solutions -->
        <section id="Solutions" class="Solutions" data-aos="fade-up" data-aos-delay="150">
            <h4 id="SolutionsTitle" class="display-4"> Solutions </h4>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="s_card">
                            <div class="sliderText">
                                <h3 class="lead">Privilege Access Security</h3>
                            </div>
                            <div class="content">
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We implement solutions to safeguard your technology assets where privilege accesses are provisioned for administrative level users to perform their daily IT functions.</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We work in conjunction with our clients to identify privilege accesses provisioned all across the enterprise IT systems and devise a policy-based architecture to securely manage the accountability of those privilege accesses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="s_card">
                            <div class="sliderText">
                                <h3 class="lead">Endpoint Protection</h3>
                            </div>
                            <div class="content">
                                <p>We can meet your specific endpoint security requirements through:</p>
                                <ul>
                                    <li>Design, implementation and integration of perimeter, network, endpoint and advanced threat protection solutions</li>
                                    <li>By implementing centralized management system for endpoint protection solutions involving (Antimalware, APT, Data Loss Prevention, Encryption and Firewalls)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="s_card">
                            <div class="sliderText">
                                <h3 class="lead">Vullnerability Management</h3>
                            </div>
                            <div class="content">
                                <p>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secdoyen performs all forms of vulnerability assessments and penetration testing on network systems, web applications, mobile applications, etc. We thoroughly analyze the effectiveness of your organization’s existing security safeguards. Measures and implementations. We aim to provide a specifically tailored solution to your vulnerability remediation requirements through the design, implementation, and integration of vulnerability scanning solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="s_card">
                            <div class="sliderText">
                                <h3 class="lead">Identity & Access Management</h3>
                            </div>
                            <div class="content">
                                <p>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secdoyen develops access rights and entitlement certification processes of all users with appropriate privileges to your organization’s IT assets. We help implement the most appropriate identity and access management solution by integrating policies and processes central to your organizational needs. This incudes but is not limited to: 
                                </p>
                                <ul>
                                    <li>Strategy and Governance</li>
                                    <li>Program Management</li>
                                    <li>Lifecycle and Transformation</li>
                                    <li>Access Request and Approval</li>
                                    <li>Provisioning and De-Provisioning</li>
                                    <li>Enforcement</li>
                                    <li>Auditing and Reporting</li>
                                    <li>Access Review and Certification</li>
                                    <li>Account Reconciliation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  </div>
        	</div>
            
        </section>
        <!-- Contact Us -->
        <section id="ContactUs" class="ContactUs">
            <div class="container"  data-aos="fade-up" data-aos-delay="150">
            	<h4 id="ContactUsTitle" class="display-4"> Contact Us </h4>
                <div id="contact-info">
                    <!-- <p id="contact-name" class="display-4 contact_name">Saeed Ahmed</p> -->
                    <div id="contact-details">
                        <span class="not_iphone_x">
                            <p class="lead">
                            	<a href="https://goo.gl/maps/9mcY7E7m6NBBH3YA7"><i class="fas fa-map-pin"></i> &nbsp;3105 Dundas Street, West Sutie 202, Mississauga, ON L5L 3R8</a></p>
                            <p class="lead">
                            	<a href="tel:14167280453"><i class="fas fa-phone-alt"></i> &nbsp;416 - 728 - 0453</a>
                            </p>
                            <p class="lead">
                            	<a href="mailto:contact@secdoyen.com"><i class="fas fa-envelope"></i> &nbsp;contact@secdoyen.com</a>
                            </p>
                            <br>
                            <!-- <p class="lead">
                            	<a href="mailto:contact@secdoyen.com"><i class="fab fa-facebook-square"></i></a>
                            	<a href="mailto:contact@secdoyen.com"><i class="fab fa-twitter-square"></i></a>
                            	<a href="mailto:contact@secdoyen.com"><i class="fab fa-medium"></i></a>
                            	<a href="mailto:contact@secdoyen.com"><i class="fab fa-instagram-square"></i></a>
                            </p>
 -->
                        </span>
                        <!-- <span class="iphone_x">
                            <p class="lead"><a href="https://goo.gl/maps/9mcY7E7m6NBBH3YA7"><i class="fas fa-map-pin"></i> &nbsp;3105 Dundas Street, West Sutie 202, Mississauga, ON L5L 3R8</a></p>
                            <p class="lead"><a href="tel:14167280453"><i class="fas fa-phone-alt"></i> &nbsp;416 - 728 - 0453</a></p>
                            <p><a href="mailto:contact@secdoyen.com"><i class="fas fa-envelope"></i> &nbsp;contact@secdoyen.com</a></p>
                        </span> -->
                    </div>
                    <!-- <div>
                    	<div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="vertical" data-theme="light" data-vanity="faseeh98"><a class="LI-simple-link" href='https://ca.linkedin.com/in/faseeh98?trk=profile-badge'>Faseeh A.</a></div>
                    </div> -->
                </div>
            </div>
            <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2020 Secdoyen
            </div>
        </footer>
        </section>
        
    </div>
    <!-- JS for navbar pills -->
<!--     <script>
    $(".nav a").on("click", function() {
        $("nav a").removeClass("active");
        $(this).addClass("active");
    })
    $('body').scrollspy({
        target: '#navbar'
    })
    </script> -->
    <!-- Navbar FadeIn -->
    <!-- <script>
        (function ($) {
            
            $(document).ready(function(){
                var SectionHeight = $(".AboutUs").outerHeight(true);
                var ServicesHeight = SectionHeight*2;
                var SolutionsHeight = SectionHeight*3;
                var ContactUsHeight = SectionHeight*4;
                // hide
                $("#navbar").hide();
                $("#AboutUsParagraph").hide();
                $("#certi").hide();
                $("#ServicesTitle").hide();
                $("#accordion").hide();
                $("#SolutionsTitle").hide();
                $(".swiper-container").hide();
                $("#contact-name").hide();
                $("#contact-details").hide();
                $(".contact-form").hide();
                // fade in
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() >= SectionHeight) {
                            $('#navbar').fadeIn(1000);
                            $('#AboutUsParagraph').delay(1500).fadeIn(3000);
                            $('#certi').delay(2500).fadeIn(1500);
                        } else if ($(this).scrollTop() < SectionHeight){
                            $('#navbar').fadeOut(1000);
                            $('#AboutUsParagraph').hide();
                            $('#certi').hide();
                        }
                    }),
                    $(window).scroll(function () {
                        if ($(this).scrollTop() >= ServicesHeight) {
                            $('#ServicesTitle').delay(600).fadeIn(2000);
                            $('#accordion').delay(2000).fadeIn(2500);
                        } else if ($(this).scrollTop() < ServicesHeight){
                            $('#ServicesTitle').hide();
                            $('#accordion').hide();
                        }
                    }),
                    $(window).scroll(function () {
                        if ($(this).scrollTop() >= SolutionsHeight) {
                            $('#SolutionsTitle').delay(500).fadeIn(1000);
                            $('.swiper-container').delay(1500).fadeIn(3500);
                        } else if ($(this).scrollTop() < SolutionsHeight){
                            $('#SolutionsTitle').hide();
                            $('.swiper-container').hide();
                        }
                    }),
                    $(window).scroll(function () {
                        if ($(this).scrollTop() >= ContactUsHeight) {
                            $('#contact-name').delay(400).fadeIn(1000);
                            $('#contact-details').delay(1200).fadeIn(1500);
                            $('.contact-form').delay(2500).fadeIn(2500);
                        } else if ($(this).scrollTop() < ContactUsHeight){
                            $('#contact-name').hide();
                            $('#contact-details').hide();
                            $('.contact-form').hide();
                        }
                    });
                });
            });
        }(jQuery));
    </script> -->
   
    <!-- Header FadeIn -->
    <script>
            (function ($) {
                $(document).ready(function(){
                    // hide footer first
                    // fade in footer
                    $(function () {
                        $(window).scroll(function () {
                            if ($(this).scrollTop() > 400) {
                                $('header').fadeOut(800);
                            } else {
                            	$('header').fadeIn(800);
                            }
                        });
                    });
                });
            }(jQuery));
    </script>
    
    <!-- Animate.CSS animations -->
    <script>
            $(function(){
                //Navbar Links
                $('#Link1').hover(function(){
                    animate('#Link1', 'flipInX')
                    return false;
                });
                $('#Link2').hover(function(){
                    animate('#Link2', 'flipInX')
                    return false;
                });
                $('#Link3').hover(function(){
                    animate('#Link3', 'flipInX')
                    return false;
                });
                $('#Link4').hover(function(){
                    animate('#Link4', 'flipInX')
                    return false;
                });

            //Animation function
            function animate(element, animation){
                $(element).addClass('animated '+animation);
                var wait = setTimeout(function(){
                    $(element).removeClass('animated '+animation);
                }, 1300);
            }
        })
    </script>

    <!-- Accordion animations -->
    <!-- <script>
        $(function(){
            //Services list
            $('#service1').hover(function(){
                animate('#service1', 'pulse')
                return false;
            });
            $('#service2').hover(function(){
                animate('#service2', 'pulse')
                return false;
            });
            $('#service3').hover(function(){
                animate('#service3', 'pulse')
                return false;
            });
            $('#service4').hover(function(){
                animate('#service4', 'pulse')
                return false;
            });
            $('#service5').hover(function(){
                animate('#service5', 'pulse')
                return false;
            });
            $('#service6').hover(function(){
                animate('#service6', 'pulse')
                return false;
            });
            $('#service7').hover(function(){
                animate('#service7', 'pulse')
                return false;
            });
            $('#service8').hover(function(){
                animate('#service8', 'pulse')
                return false;
            });
            $('#service9').hover(function(){
                animate('#service9', 'pulse')
                return false;
            });

        //Animation function
        function animate(element, animation){
            $(element).addClass('animated '+animation);
            var wait = setTimeout(function(){
                $(element).removeClass('animated '+animation);
            }, 800);
        }
    })
</script> -->
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 20,
        stretch: -20,
        depth: 300,
        modifier: 1,
        slideShadows : true,
      },
    });
  </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
