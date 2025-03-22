<?php
$includeController = new includeStudentController();
$includeController->header();
$includeController->navbar();
?>
<div class="container-fluid mb-2">
    <div class="card text-gray-900 text-lg">
        <div class="card-header">
            <div class="d-sm-flex justify-content-center">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="img/csuguidance.jpeg" width="75">
                </div>
            </div>
            <div class="form-group text-center">
                <div class="text-capitalize text-center">welcome to your safe place!</div>
                <div class="d-sm-flex justify-content-center">
                    <div class="text-uppercase">"we exist because we care",</div>
                    <div class="ml-1">this is the battle cry of the CCSO at CSU Lasam.</div>
                </div>
            </div>
        </div>
        <div class="card-body text-gray-800">
            <div class="form-group">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="h4 font-weight-bold text-primary m-0"> 
                            <i class="fas fa-bell text-warning animate__animated animate__shakeX"></i> 
                            Announcement 
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <span>
                            <?php 
                                $announceModel = new announceModel();
                                $announcements = $announceModel->show_announce(); 
                                $total = count($announcements); // Get the total of announcements records
                                $index = 1; 
                                foreach ($announcements as $row) { ?> 
                                    <div class="text-xs mb-3"> 
                                        <i><?=$row['time_date']?></i>
                                    </div>
                                    <div>
                                        <?=$row['announce']?>
                                    </div>
                                    <br>
                                    <?php if ($index < $total) { ?>
                                      <hr class="text-gray-500">
                                    <?php } $index++; } ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="text-gray-900">Counseling and Career Services Office(formerly the Guidance and Counseling Center)</div>
                <div class="text-uppercase text-gray-900 font-weight-bold mb-4">citizen's charter</div>
            </div>
            <div class="d-sm-inline-block d-md-inline-block d-lg-inline-block d-none">
                <div class="form-group row">
                    <label class="col-sm-3 text-gray-900 font-weight-bold"> LOCATION </label>
                    <div class="col-sm-9">: &nbsp; Counseling and Career Services Office (CCSO), Left Wing-DARP Hall, Cagayan State University-Lasam Campus</div>
                    <label class="col-sm-3 text-gray-900 font-weight-bold m-0"> AVAILABILITY OF SERVICE </label>
                    <div class="col-sm-8">: &nbsp; 8:00 AM – 5:00 PM (Monday to Friday: No Noon Break)</div>
                    <label class="col-sm-3 text-gray-900 font-weight-bold"> CLIENTS </label>
                    <div class="col-sm-8">: &nbsp; Primarily Students (with Faculty and Staff clients as needs arise)</div>
                </div>
            </div>

            <!-- for mobile -->
            <div class="d-sm-flex flex-column mb-3 d-sm-none d-md-none d-lg-none">
                <div>
                    <div class="text-gray-900 mb-1">
                        <b>LOCATION :</b> Counseling and Career Services Office (CCSO), Left Wing-DARP Hall, Cagayan State University-Lasam Campus
                    </div>
                    <div class="text-gray-900 mb-1">
                        <b>AVAILABLE OF SERVICE :</b> 8:00 AM – 5:00 PM (Monday to Friday: No Noon Break)
                    </div>
                    <div class="text-gray-900">
                        <b>CLIENTS :</b> Primarily Students (with Faculty and Staff clients as needs arise)
                    </div>
                </div>
            </div>
            <!-- end -->
            <div class="d-sm-flex flex-column">
                <div>
                    <div class="text-gray-900 font-weight-bold">Counseling and Career Services Office</div>
                    <div class="text-gray-900 font-weight-bold">Information and Growth Session Service</div>
                </div>
            </div>
            <div class="d-sm-inline-block d-md-inline-block d-lg-inline-block d-none">
                <div class="row">
                    <label class="col-sm-3 text-gray-900 m-0"> Schedule of Availability of Service</label>
                    <div class="col-sm-8">: &nbsp; August-October, January- May</div>
                    <label class="col-sm-3 text-gray-900 m-0"> Client/Customers </label>
                    <div class="col-sm-8">: &nbsp; College Students</div>
                    <label class="col-sm-3 text-gray-900"> Requirements </label>
                    <div class="col-sm-8">: &nbsp; Letters, Activity Sheets, Certificate of Participation and Growth Session or Information Service Logbook</div>
                    <label class="col-sm-3 text-gray-900"> Processing Time </label>
                    <div class="col-sm-8">: &nbsp; 1 hour and 48 minutes</div>
                </div>
            </div>
            <!-- for mobile -->
            <div class="d-sm-flex flex-column mb-3 d-sm-none d-md-none d-lg-none">
                <div>
                    <div class="text-gray-900 mb-1">Schedule of Availability of Service <b>:</b> August-October, January- May</div>
                    <div class="text-gray-900 mb-1">Client/Customers <b>:</b> College Students</div>
                    <div class="text-gray-900 mb-1">Requirements <b>:</b> Letters, Activity Sheets, Certificate of Participation and Growth Session or Information Service Logbook</div>
                    <div class="text-gray-900">Processing Time <b>:</b> 1 hour and 48 minutes</div>
                </div>
            </div>
            <!-- end  -->
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-sm text-dark p-0">
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">steps</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">client/applicant</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">types of frontline service</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">fees</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">forms</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">proccessing time/duration of actity</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">person responsible</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">1</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Seeks recommending approval from the College Deans about the conduct of the activity prior to seeking the Campus Executive Officer’s approval</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Letter from the Counselor which was recommended for approval by the College Deans and approved by the Campus Executive Officer</td>
                        <td class="align-middle text-center">10 minutes</td>
                        <td class="align-middle text-center" rowspan="5">Ronabelle A. Ramil Guidance Counselor</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">2</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="text-center">Arranges schedule and venue with class advisers and subject instructors</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Approved letter of the activity and personalized letter addressed to the adviser or subject instructor</td>
                        <td class="align-middle text-center">5 minutes</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">3</td>
                        <td class="align-middle text-cnter">Proceeds to the designated Growth Session Room</td>
                        <td class="text-cnter">Ushers the students in the activity venue</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">None</td>
                        <td class="align-middle text-center">2 minute</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">4</td>
                        <td class="align-middle text-cnter">Participate in the Growth Session</td>
                        <td class="align-middle text-cnter">Conducts the Group Growth Session</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Activity Sheets</td>
                        <td class="align-middle text-center">1 hour and 30 minutes</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">5</td>
                        <td class="text-center">Signs in the Growth Session or Information Service Logbook</td>
                        <td class="text-center">Distributes Certificates of Participation</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Growth Session or Information Service Logbook and Certificates of Participation</td>
                        <td class="align-middle text-center">3 minute</td>
                    </tr>
                </table>
            </div>
            <div class="d-sm-flex flex-column">
                <div>
                    <div class="text-gray-900 font-weight-bold">
                        Counseling and Career Services Office
                    </div>
                    <div class="text-gray-900 font-weight-bold">
                        Psychological Testing (for CSU students, faculty and staff)
                    </div>
                </div>
            </div>
            <div class="d-sm-inline-block d-md-inline-block d-lg-inline-block d-none">
                <div class="row">
                    <label class="col-sm-3 text-gray-900 m-0"> Schedule of Availability of Service </label>
                    <div class="col-sm-8">: &nbsp; September, November, February and April</div>
                    <label class="col-sm-3 text-gray-900 m-0"> Client/Customers </label>
                    <div class="col-sm-8">: &nbsp; CSU College Students and other requesting parties (as needs arise for faculty and staff)</div>
                    <label class="col-sm-3 text-gray-900"> Requirements </label>
                    <div class="col-sm-8">: &nbsp; I.D, Ball pen/ Pencil, Psychological Test Manual, Psychological Test Booklets and Answer Sheets, Psychological Testing Logbook</div>
                    <label class="col-sm-3 text-gray-900"> Processing Time </label>
                    <div class="col-sm-8">: &nbsp; 20 minutes to 2 hours and 20 minutes</div>
                </div>
            </div>
            <!-- for mobile -->
            <div class="d-sm-flex flex-column mb-3 d-sm-none d-md-none d-lg-none">
                <div>
                    <div class="text-gray-900 text-justify mb-1">Schedule of Availability of Service <b>:</b> September, November, February and April</div>
                    <div class="text-gray-900 text-justify mb-1">Client/Customers <b>:</b> CSU College Students and other requesting parties (as needs arise for faculty and staff)</div>
                    <div class="text-gray-900 text-justify mb-1">Requirements <b>:</b> I.D, Ball pen/ Pencil, Psychological Test Manual, Psychological Test Booklets and Answer Sheets, Psychological Testing Logbook</div>
                    <div class="text-gray-900">Processing Time <b>:</b> 20 minutes to 2 hours and 20 minutes</div>
                </div>
            </div>
            <!-- end -->
            <div class="table-responsive mb-3">
                <table class="table table-bordered table-sm text-dark">
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">steps</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">client/applicant</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">types of frontline service</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">fees</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">forms</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">proccessing time/duration of actity</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">person responsible</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">1</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Seeks recommending approval from the College Deans about the conduct of the psychological test prior to seeking the Campus Executive Officer’s approval</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Letter from the Counselor which was recommended for approval by the College Deans and approved by the Campus Executive Officer</td>
                        <td class="align-middle text-center">10 minutes</td>
                        <td class="align-middle text-center" rowspan="5">Ronabelle A. Ramil Guidance Counselor</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">2</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="text-center">Arranges schedule and venue with class advisers and subject instructors re conduct of psychological test</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Approved letter of the activity and personalized letter addressed to the adviser or subject instructor</td>
                        <td class="align-middle text-center">3 minutes</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">3</td>
                        <td class="align-middle text-center">Proceeds to the designated area for the Psychological test or to the testing room</td>
                        <td class="text-center">Gives orientation about the purpose of the test</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="text-center">Psychological Test Manual</td>
                        <td class="align-middle text-center">2 minute</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">4</td>
                        <td class="text-center">Takes the Psychological Test</td>
                        <td class="text-center">Conducts the Psychological Test</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="text-center">Psychological Test Booklets, Answer Sheets</td>
                        <td class="align-middle text-center">5 minutes</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">5</td>
                        <td class="text-center">Signs in the Psychological Testing Logbook</td>
                        <td class="text-center">Facilitates the signing of the students in the attendance sheet</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="text-center">Psychological Testing Logbook</td>
                        <td class="align-middle text-center">5 minute</td>
                    </tr>
                </table>
            </div>
            <div class="d-sm-flex flex-column">
                <div>
                    <div class="text-gray-900 font-weight-bold">Counseling and Career Services Office</div>
                    <div class="text-gray-900 font-weight-bold">Employment Counseling and PRC Online Orientation</div>
                </div>
            </div>
            <div class="d-sm-inline-block d-none d-md-inline-block d-none d-lg-inline-block d-none">
                <div class="row">
                    <label class="col-sm-3 text-gray-900 m-0"> Schedule of Availability of Service</label>
                    <div class="col-sm-8">
                        : &nbsp; May or June
                    </div>
                    <label class="col-sm-3 text-gray-900 m-0"> Client/Customers </label>
                    <div class="col-sm-8">
                        : &nbsp; CSU College Graduating Students (for employment counseling) and Graduating Students with Board Courses (for PRC Online Orientation)
                    </div>
                    <label class="col-sm-3 text-gray-900"> Requirements </label>
                    <div class="col-sm-8">
                        : &nbsp; Request Letter, Certificates of Appreciation for Speakers and Participation for attendees, Career Guidance Logbook
                    </div>
                    <label class="col-sm-3 text-gray-900"> Processing Time </label>
                    <div class="col-sm-8">
                        : &nbsp; 4 hours and 17 minutes
                    </div>
                </div>
            </div>
            <!-- for mobile -->
            <div class="d-sm-flex flex-column mb-3 d-sm-none d-md-none d-lg-none">
                <div>
                    <div class="text-gray-900 text-justify mb-1">Schedule of Availability of Service <b>:</b> May or June</div>
                    <div class="text-gray-900 text-justify mb-1">Client/Customers <b>:</b> CSU College Graduating Students (for employment counseling) and Graduating Students with Board Courses (for PRC Online Orientation)</div>
                    <div class="text-gray-900 text-justify mb-1">Requirements <b>:</b> Request Letter, Certificates of Appreciation for Speakers and Participation for attendees, Career Guidance Logbook</div>
                    <div class="text-gray-900">Processing Time <b>:</b> 4 hours and 17 minutes</div>
                </div>
            </div>
            <!-- end -->
            <div class="table-responsive mb-3">
                <table class="table table-bordered table-sm text-dark">
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">steps</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">client/applicant</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">types of frontline service</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">fees</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">forms</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">proccessing time/duration of actity</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">person responsible</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">1</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Seeks recommending approval from the College Deans about the conduct and venue of the career guidance program prior to seeking the Campus Executive Officer’s approval</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="text-center">Letter from the Counselor which was recommended for approval by the College Deans and approved by the Campus Executive Officer</td>
                        <td class="align-middle text-center">10 minutes</td>
                        <td class="align-middle text-center" rowspan="4">Ronabelle A. Ramil Guidance Counselor</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">2</td>
                        <td class="text-center">Proceeds to the activity venue</td>
                        <td class="text-center">Ushers the students to enter the program venue</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center"></td>
                        <td class="align-middle text-center">5 minutes</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">3</td>
                        <td class="text-center">Actively participates in the forum</td>
                        <td class="text-center">Conducts the Seminar-Forum. Facilitates the conduct of the forum</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center"></td>
                        <td class="align-middle text-center">4 hours</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">4</td>
                        <td class="text-center">Signs in the Attendance Sheet and secures their Certificate of Participation</td>
                        <td class="align-middle text-center">Distributes the certificates of appreciation to speakers and certificates of participation to the student-attendees</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Attendance Sheet</td>
                        <td class="align-middle text-center">2 minutes</td>
                    </tr>
                </table>
            </div>
            <div class="d-sm-flex flex-column">
                <div>
                    <div class="text-gray-900 font-weight-bold pr-5">Counseling and Career Services</div>
                    <div class="text-gray-900 font-weight-bold pr-5">Requests for Certification of Good Moral Character</div>
                </div>
            </div>
            <div class="d-sm-inline-block d-none d-md-inline-block d-none d-lg-inline-block d-none">
                <div class="row">
                    <label class="col-sm-3 text-gray-900 m-0"> Schedule of Availability of Service</label>
                    <div class="col-sm-8">: &nbsp; All Year Round </div>
                    <label class="col-sm-3 text-gray-900 m-0"> Client/Customers </label>
                    <div class="col-sm-8">: &nbsp; Undergraduate and Graduate CSU students</div>
                    <label class="col-sm-3 text-gray-900"> Requirements </label>
                    <div class="col-sm-8">: &nbsp; Official Receipt of Payment</div>
                    <label class="col-sm-3 text-gray-900"> Processing Time </label>
                    <div class="col-sm-8">: &nbsp; 5 minutes</div>
                </div>
            </div>
            <!-- for mobile -->
            <div class="d-sm-flex flex-column d-sm-none d-md-none d-lg-none">
                <div>
                    <div class="text-gray-900 mb-1">Schedule of Availability of Service <b>:</b> All Year Round</div>
                    <div class="text-gray-900 mb-1">Client/Customers <b>:</b> Undergraduate and Graduate CSU students</div>
                    <div class="text-gray-900 mb-1">Requirements <b>:</b> Official Receipt of Payment</div>
                    <div class="text-gray-900">Processing Time <b>:</b> 5 minutes</div>
                </div>
            </div>
            <!-- end -->
            <div class="table-responsive mb-3">
                <table class="table table-bordered table-sm text-dark">
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">steps</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">client/applicant</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">types of frontline service</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">fees</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">forms</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">proccessing time/duration of actity</td>
                        <td class="align-middle text-uppercase font-weight-bold text-center">person responsible</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">1</td>
                        <td class="text-center">Informs the Guidance Counselor of the purpose of the visit</td>
                        <td class="align-middle text-center">Instructs the client to pay the certification fee at the cashier’s office</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center"></td>
                        <td class="align-middle text-center">1 minutes</td>
                        <td class="align-middle text-center" rowspan="4">Ronabelle A. Ramil Guidance Counselor</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">2</td>
                        <td class="align-middle text-center">Pays the Certification fee at the Cashier’s Office</td>
                        <td class="align-middle text-center">Issues the Official Receipt for the payment</td>
                        <td class="align-middle text-center">&#x20B1; 30.00</td>
                        <td class="align-middle text-center">Official receipt</td>
                        <td class="align-middle text-center">2 minutes</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">3</td>
                        <td class="text-center">Gives the official receipt to the Guidance Counselor</td>
                        <td class="align-middle text-center">Asks relevant personal details from the client, checks for accuracy of data encoded, prints and issues the certification</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Certification of Good Moral Character</td>
                        <td class="align-middle text-center">1 minute</td>
                    </tr>
                    <tr>
                        <td class="align-middle text-uppercase font-weight-bold text-center">4</td>
                        <td class="align-middle text-center">Receives the Certification and Signs in the Good Moral Character Certificate Logbook</td>
                        <td class="text-center">Assists the client in signing the logbook</td>
                        <td class="align-middle text-uppercase text-center">n/a</td>
                        <td class="align-middle text-center">Logbook</td>
                        <td class="align-middle text-center">1 minute</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Slider -->
<script src="vendor/aos/aos.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>
<script src="vendor/script-swipper.js"></script>
<?php
    $includeController->footer();
    $includeController->script();
?>