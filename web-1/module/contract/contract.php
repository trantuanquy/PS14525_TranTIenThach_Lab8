<?php
$First_Name = !empty($_POST['First_Name']) ? $_POST['First_Name'] : null;
$Last_Name = !empty($_POST['Last_Name']) ? $_POST['Last_Name'] : null;
$Phone = !empty($_POST['Phone_Cus']) ? $_POST['Phone_Cus'] : null;
$Email_Cus = !empty($_POST['Email_Cus']) ? $_POST['Email_Cus'] : null;
$Cus_Mess = !empty($_POST['Cus_Mess']) ? $_POST['Cus_Mess'] : null;
setcookie("Firstname", $First_Name, time() + 3600 * 24 * 7);
setcookie("Lastname", $Last_Name, time() + 3600 * 24 * 7);
setcookie("Fullname", $Last_Name . $First_Name, time() + 3600 * 24 * 7);
setcookie("Phone", $Phone, time() + 3600 * 24 * 7);
setcookie("Email", $Email_Cus, time() + 3600 * 24 * 7);
setcookie("Message", $Cus_Mess, time() + 3600 * 24 * 7);
?>
<?php { {
        $layO->getHeader();
    }
} ?>
<div class="contract">
    <section class="banner-contract">
        <div class="container">
            <div class="row-banner-contract">
                <div class="col-banner-contract">
                    <div class="svg-contract">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#ccc" opacity="0.2"></path>
                                <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#fff"></path>
                            </g>
                        </svg>
                    </div>
                    <h4>Send us an email</h4>
                    <a href="">info@cedarthemes.com</a>
                </div>
                <div class="col-banner-contract">
                    <div class="svg-contract">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M9.8604543,6.01162174 C9.94073619,5.93133984 10.0459506,5.88077119 10.1587919,5.86823326 C10.4332453,5.83773844 10.6804547,6.03550595 10.7109496,6.30995936 L11.2341533,11.0187935 C11.2382309,11.0554911 11.2382309,11.0925274 11.2341533,11.129225 C11.2036585,11.4036784 10.9564491,11.6014459 10.6819957,11.5709511 L5.97316161,11.0477473 C5.86032028,11.0352094 5.75510588,10.9846407 5.67482399,10.9043588 C5.47956184,10.7090967 5.47956184,10.3925142 5.67482399,10.197252 L7.06053236,8.81154367 L5.55907018,7.31008149 C5.36380803,7.11481935 5.36380803,6.79823686 5.55907018,6.60297471 L6.26617696,5.89586793 C6.46143911,5.70060578 6.7780216,5.70060578 6.97328374,5.89586793 L8.47474592,7.39733011 L9.8604543,6.01162174 Z" fill="#ccc" fill-rule="nonzero" opacity="0.2"></path>
                                <path d="M12.0799676,14.7839934 L14.2839934,12.5799676 C14.8927139,11.9712471 15.0436229,11.0413042 14.6586342,10.2713269 L14.5337539,10.0215663 C14.1487653,9.25158901 14.2996742,8.3216461 14.9083948,7.71292558 L17.6411989,4.98012149 C17.836461,4.78485934 18.1530435,4.78485934 18.3483056,4.98012149 C18.3863063,5.01812215 18.4179321,5.06200062 18.4419658,5.11006808 L19.5459415,7.31801948 C20.3904962,9.0071287 20.0594452,11.0471565 18.7240871,12.3825146 L12.7252616,18.3813401 C11.2717221,19.8348796 9.12170075,20.3424308 7.17157288,19.6923882 L4.75709327,18.8875616 C4.49512161,18.8002377 4.35354162,18.5170777 4.4408655,18.2551061 C4.46541191,18.1814669 4.50676633,18.114554 4.56165376,18.0596666 L7.21292558,15.4083948 C7.8216461,14.7996742 8.75158901,14.6487653 9.52156634,15.0337539 L9.77132688,15.1586342 C10.5413042,15.5436229 11.4712471,15.3927139 12.0799676,14.7839934 Z" fill="#fff"></path>
                            </g>
                        </svg>
                    </div>
                    <h4>Give us a call</h4>
                    <a href="">@Inertiasupport</a>
                </div>
                <div class="col-banner-contract">
                    <div class="svg-contract">
                        <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
                            <title>ionicons-v5_logos</title>
                            <path d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z" fill="#fff"></path>
                        </svg>
                    </div>
                    <h4>Reach on Twitter</h4>
                    <a href="">01 800 555-3421</a>
                </div>
            </div>
        </div>
    </section>
    <section class="form-contract">
        <div class="container">
            <div class="row-form-contract">
                <div class="col-left-form-contract">
                    <h4>Contact our support team</h4>
                    <p>We'd love to hear from you, please send a message and we'll get back to you as soon as possible.</p>
                </div>
                <div class="col-right-form-contract">
                    <form action="" method="POST">
                        <div class="name-cus-box">
                            <div class="name-cus-group first-name">
                                <label for="First_Name">First name</label>
                                <input type="text" name="First_Name" id="Name_cus">
                            </div>
                            <div class="name-cus-group">
                                <label for="Last_Name">Last name</label>
                                <input type="text" name="Last_Name" id="Name_cus">
                            </div>
                        </div>
                        <label for="Email_Cus">Email</label>
                        <input type="mail" name="Email_Cus" id="Email_cus">
                        <label for="Phone_Cus">Phone</label>
                        <input type="text" name="Phone_Cus" id="Phone_cus">
                        <label for="Cus_Mess">Your message</label>
                        <textarea name="Cus_Mess" id="Cus_mess" cols="30" rows="10"></textarea>
                        <div class="send-mess">
                            <button type="submit" name="" value="Send Mess" class="btn-send-mess"><a href="?mod=contract&act=mess_cus">SEND MESSAGE</a> </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d23099.894287574047!2d12.568648007651053!3d55.6746014139839!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1588710157300!5m2!1ses-419!2smx" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

</div>
</div>
<?php { {
        $layO->getFooter();
    }
} ?>
<style>
    #container-header {
        background: linear-gradient(to bottom, #1e2e50, #586781);
        border: none;
        opacity: .8;
    }

    /* #container-header::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0%;
        right: 0;
        background-color: #1e2e50 !important;
        opacity: .7;
        bord-radius: inherit;
    }er */

    .task-bar-link {
        color: #fff;
        z-index: 99;
    }

    .logo a svg {
        color: #fff;
        z-index: 99;
    }
</style>