<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baby Sitting Maids</title>
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <style>
        body {
          background-color: #f0f0f0;
          font-family: Arial, sans-serif;
        }
    
        .navbar-nav smooth-scroll {
          scroll-behavior: smooth;
        }
    
        .logo-img {
          position: absolute;
          top: 5px;
          left: 150px;
          width: 50px;
          height: 50px;
        }
    
        .container {
          margin-top: 70px;
          /* Adjusted margin to avoid overlapping with the navbar */
        }
    
        .maid-box {
          background-color: #fff;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
          margin: 10px;
          padding: 20px;
          display: flex;
          align-items: center;
          border-radius: 5px;
        }
    
        .maid-photo {
          flex: 1;
          text-align: center;
        }
    
        .maid-details {
          flex: 2;
          padding: 0 20px;
        }
    
        .maid-photo img {
          width: 100%;
          max-width: 200px;
          border-radius: 5px;
        }
    
        h2 {
          margin: 0;
        }
    
        .specialty-category {
          display: flex;
          align-items: center;
          margin-top: 10px;
        }
    
        .specialty-logo {
          max-width: 30px;
          margin-right: 10px;
        }
    
        .specialty-details {
          font-size: 14px;
        }
    
        .navbar-nav smooth-scroll {
          scroll-behavior: smooth;
        }
    
        .logo-img {
          position: absolute;
          top: 5px;
          left: 150px;
          width: 50px;
          height: 50px;
        }
    
        .specialty-logo {
          max-width: 50px;
        }
    
        .container1 {
          /*margin-top: 10%;*/
          margin: 10% 10%;
        }
    
        * {
          padding: 0;
          margin: 0;
          font-family: 'proxima-nova', sans-serif;
          font-size: 13px;
          color: #333;
        }
    
        .list-specialitiesdiv {
          float: left;
          width: 100%;
          min-height: 30px;
          margin: 3px 0;
          /* border: 1px solid #C0C0C0; */
          background-color: #f4f4f4;
        }
    
        .list-specialitiesdiv big img {
          width: 100%;
        }
    
        .list-specialitiesdiv big {
          color: #000000;
          font-size: 13px;
          margin: 0px 10px 0px 0px;
          display: block;
          /* color: #fff; */
          float: left;
          min-height: 46px;
          width: 9%;
          background-color: #C0C0C0;
          text-align: center;
          /* border-right: 2px solid #A3A3A3; */
          padding: 0 2%;
        }
    
        .list-infodiv p {
          display: block;
          margin: 5px 0;
        }
    
        .list-specialitiesdiv p {
          display: block;
          margin: 4px 0 5px;
          float: right;
          width: 85%;
        }
    
        .list-specialitiesdiv span {
          display: inline-block;
          width: 16%;
          vertical-align: top;
          text-align: center;
          position: relative;
          margin-left: 1%;
          max-width: 20%;
        }
    
        .list-specialitiesdiv img {
          width: 45px;
        }
    
        .list-specialitiesdiv span b {
          font-weight: normal;
          font-size: 11px;
          color: #2D2D2D;
          display: block;
        }
    
        .list-infodiv p {
          display: block;
          margin: 5px 0;
        }
    
        .profile-specialitiesdiv.list-specialitiesdiv {
          width: 100%;
          padding: 0;
          min-height: 50px;
          margin: 3px 0;
          border: 0;
        }
    
        .profile-specialitiesdiv.list-specialitiesdiv big {
          color: #000000;
          font-size: 13px;
          margin: 0px 10px 0px 0px;
          display: block;
          /* color: #fff; */
          float: left;
          min-height: 46px;
          width: 9%;
          background-color: #C0C0C0;
          text-align: center;
          /* border-right: 2px solid #A3A3A3; */
          padding: 0 2%;
        }
    
        .profile-specialitiesdiv.list-specialitiesdiv p {
          width: 83%;
        }
    
        .profile-specialitiesdiv.list-specialitiesdiv p {
          margin-bottom: -17px;
        }
    
        .profile-specialitiesdiv.list-specialitiesdiv span {
          width: 16%;
          margin-left: 3px;
        }
    
        .profile-specialitiesdiv.list-specialitiesdiv {
          width: 100%;
          padding: 0;
          min-height: 50px;
          margin: 3px 0;
          border: 0;
        }
    
        .btn_auto {
          background-color: white;
          /*background-image: -webkit-gradient(linear, top, bottom, color-stop(0, #050794), color-stop(1, #6db33f));
          background-image: -webkit-linear-gradient(top, #8ac265, #6db33f);
          background-image: -moz-linear-gradient(top, #8ac265, #6db33f);
          filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#8ac265', EndColorStr='#6db33f')";
          background-image: -ms-linear-gradient(top, #8ac265, #6db33f);
          background-image: -o-linear-gradient(top, #8ac265, #6db33f);
          background-image: linear-gradient(top, #8ac265, #6db33f);*/
          border: 0 none;
          color: #fff;
          padding: 10PX 15PX;
          text-decoration: none;
          width: auto;
          display: inline-block;
          cursor: pointer;
          border-radius: 5px;
        }
    
        div {
          display: block;
        }
    
        .flot-right {
          float: right;
        }
    
        .list-textdiv {
          float: left;
          width: 80%;
        }
    
        .list-imgdiv {
          background-color: transparent;
          float: left;
          width: 18%;
          margin-right: 2%;
          min-height: 100px;
          padding: 0;
          text-align: center;
          position: relative;
        }
    
        .list-imgdiv img {
          width: 100%;
        }
    
        img {
          max-width: 100%;
          height: auto;
        }
    
        .img-nav {
          float: left;
          width: 100%;
          /* background-color: #aaa; */
          text-align: CENTER;
        }
    
        .list-imgdiv p {
          display: block;
          margin: 10px 0 0;
          float: left;
          width: 100%;
        }
    
        .list-imgdiv .btn_auto {
          width: 100%;
          padding: 10px 0;
          margin: 0 0 10px;
        }
    
        .list-imgdiv p {
          display: block;
          margin: 10px 0 0;
          float: left;
          width: 100%;
        }
    
        .list-imgdiv p span {
          display: inline-block;
          vertical-align: middle;
          background-color: #E7490B;
          border: 1px solid #eee;
          margin: 5px 0;
          padding: 1%;
          color: #fff;
          width: 44%;
          text-align: left;
          border-radius: 5px;
          font-weight: normal;
        }
    
        .list-imgdiv p i {
          width: 30px;
          display: inline-block;
          vertical-align: middle;
        }
    
        .list-textdiv {
          float: left;
          width: 80%;
        }
    
        .list-textdiv h3 a {
          font-size: 24px;
          color: #E7490B;
          font-weight: normal;
          font-family: 'Open Sans Condensed', sans-serif;
        }
    
        p.list-Experiance {
          padding: 7px 0;
          text-align: l;
          line-height: 21px;
          margin: 0;
        }
    
        p.list-Experiance small {
          display: inline-block;
        }
    
        .list-Experiance i {
          display: inline-block;
          width: 17px;
          vertical-align: middle;
        }
    
        img {
          max-width: 100%;
          height: auto;
        }
    
        p.list-Experiance span {
          margin: 0 10px;
        }
    
        .list-iteme {
          margin: 20px 10px 20px 70px;
          background-color: #fff;
          padding: 1%;
          float: left;
          width: 70%;
          align-self: center;
        }
    
        .list-infodiv {
          float: left;
          width: 80%;
        }
    
        .section {
          float: left;
          width: 100%;
          background-color: #b6b6b6;
          min-height: 100px;
          margin: 10px 0 0;
          /*background-image: url(https://www.bookmybai.com/images/innerpage-bg.jpg);
          /* background-size: cover; */
        }
    
        .wraper .global {
          width: 100%;
          max-width: 1000px;
        }
    
        .global {
          margin: auto;
        }
    
        .btn_auto {
          background-color: #8ac265;
          background-image: -webkit-gradient(linear, top, bottom, color-stop(0, #8ac265), color-stop(1, #6db33f));
          background-image: -webkit-linear-gradient(top, #8ac265, #6db33f);
          background-image: -moz-linear-gradient(top, #8ac265, #6db33f);
          filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#8ac265', EndColorStr='#6db33f')";
          background-image: -ms-linear-gradient(top, #8ac265, #6db33f);
          background-image: -o-linear-gradient(top, #8ac265, #6db33f);
          background-image: linear-gradient(top, #8ac265, #6db33f);
          border: 0 none;
          color: #fff;
          padding: 10PX 15PX;
          text-decoration: none;
          width: auto;
          display: inline-block;
          cursor: pointer;
          border-radius: 5px;
        }
    
        .popback .cross.popupbg {
          width: 100%;
          height: 100%;
          padding: 0;
          margin: 0;
          left: 0;
          top: 0;
        }
    
        .popback .cross {
          position: absolute;
          right: -30px;
          width: 30px;
          top: 0;
          cursor: pointer;
        }
    
        .searchinfo_body .profile-main {
          background-color: rgba(255, 255, 255, 0.79);
          margin: 13px 0 38px;
          position: relative;
          padding: 0.4%;
          width: 99%;
        }
    
        .searchinfo_body .proile-thumb {
          width: 30%;
          padding: 1%;
          max-height: 300px;
          overflow: hidden;
          position: relative;
        }
    
        .searchinfo_body .profile-imgdiv {
          margin: 0px 0 0px;
        }
    
        .searchinfo_body .proile-thumb img#imgCandidate {
          width: 100%;
        }
    
        .searchinfo_body .profile-imgdiv ul {
          width: 67%;
        }
    
        .searchinfo_body .profile-info {
          margin-bottom: 0;
        }
    
        .profile-main {
          float: left;
          width: 98%;
          background-color: transparent;
          padding: 1%;
          margin: 0px 0 15px;
        }
    
        .searchinfo_body .profile-specialitiesdiv:nth-child(1) {
          border-top: 1px solid #ddd;
          margin-top: 0;
          padding-top: 10px;
        }
    
        .searchinfo_body .profile-specialitiesdiv {
          width: 97%;
          min-height: inherit;
        }
    
        .profile-specialitiesdiv {
          float: left;
          /* width: 46%; */
          /* background-color: #f4f4f4; */
          /* min-height: 105px; */
          margin: 10px 1%;
          padding: 0 1% 10px;
          border-bottom: 1px solid #ddd;
        }
    
        .proile-thumb {
          float: left;
          width: 20%;
        }
    
        .profile-imgdiv ul {
          list-style: none;
          /* border: 1px solid #eee; */
          padding: 0%;
          width: 79%;
          display: block;
          float: right;
        }
    
        .profile-imgdiv ul li {
          padding: 6px;
          display: inline-block;
          margin: 3px 0;
          /* float: left; */
          vertical-align: top;
          width: 99%;
        }
    
        .social-Share.desk {
          display: block;
        }
    
        li .social-Share {
          margin: 0;
        }
    
        .searchinfo_body h3.headingtext {
          margin: 0 0 0px;
          padding: 0;
        }
    
        .searchinfo_body .subheading {
          text-align: left;
          margin: 6px 0 -7px;
          padding: 0;
        }
    
        .profile-imgdiv ul li i {
          display: inline-block;
          vertical-align: middle;
          width: 15px;
        }
    
        .profile-imgdiv ul.commondetailslist li b {
          font-weight: normal;
        }
    
        .profile-imgdiv ul.commondetailslist li {
          border-bottom: 1px solid #eee;
          display: inline-block;
          width: 45%;
          margin: 0 1% 0 0;
        }
    
        .profile-imgdiv ul li {
          /* padding: 6px; */
          /* display: inline-block; */
          /* margin: 3px 0; */
          /* float: left; */
          vertical-align: top;
          /* width: 99%; */
        }
    
        .profile-imgdiv ul.commondetailslist li strong {
          float: right;
          margin-left: 8px;
        }
    
        .popupscroll {
          float: left;
          width: 100%;
          overflow: auto;
          /* max-height: 571px; */
        }
    
        .profile-content {
          float: left;
          width: 98%;
          border-bottom: 1px solid transparent;
          padding: 0%;
        }
    
        .contain{
          margin-top: 0px;
          margin-left:15%;
          width: 100%;
        }
    
        .navbar {
            background-color: black;
            overflow: hidden;
            color: white;
            height: 5%;
        }

        .logo-img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar .logo {
            float: left;
        }

        .navbar .nav-links {
            float: right;
        }

        .navbar .nav-links a {
            display: inline-block;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            color: white;
        }

        .navbar .nav-links a:hover {
            background-color: #333; /* Darker background on hover */
        }

        .navbar .we-help {
            float: right;
        }
      </style>
    </head>
    <body>

    <div class="navbar">
    <a class="navbar-brand" href="#">
        <img src="sitelogo.png" alt="BookMyBai" class="logo-img">
        <span class="we-help">We-Help</span>
    </a>
    
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="maid-hiring.php">Find a Maid</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="admin/login.php">Admin</a>
        <a href="maid_service.php">Services</a>
    </div>
</div>

        <div class="global">

            <input type="hidden" name="ctl00$cp_Main$hf_Payment" id="hf_Payment"
                value="True">
            <input type="hidden" name="ctl00$cp_Main$hf_ClientArea"
                id="hf_ClientArea" value="Santacruz">

            <!-- <a href="#" class="btn_auto flot-right btn_RequirementDetails">Edit Requirement</a>
        <h1 class="headingtext">
            179 maids available for your requirement</h1>
        <p class="breadcrumb">
            <span><a href="https://www.bookmybai.com">Home</a></span> / <span>Search results for
                your requirement</span></p>
        <div id="Container_UrgencyType" class="shortlistnote justbrowsstrip Container_Urgency">
            You have selected 'Just Browsing' option for this requirement, so we will not contact
            you. To change your urgency type <a href="#" id="hyp_UrgencyType" class="btn_auto btn_ReqtUrgencyTypes" rel="998124">Please Click here</a>
        </div> -->

        <div class="contain">
        <!-- Rekha Parmar -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Rekha_Parmar_41326.jpg"
                            title="Video" data-shortlist="41326">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_41326">
                            View Details</a>
                              <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="41326">Shortlist</a> 
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon1.png"></i>
                            Cleaner</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon2.png"></i>
                            Cook</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_41326">
                            Rekha Parmar</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>15
                                Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Jain</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>37
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_41326">
                        View Details</a> 
                        <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="41326">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl00$hf_CandidateID"
                        id="hf_CandidateID" value="41326">
                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon1.png">
                            Cleaning</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                    Ironing</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                    Washing (With Washing Machine)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Clothes
                                    Washing (By Hands)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                    Shopping</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                    Cleaning</b></span>
                        </p></div>

                    <div class="profile-specialitiesdiv list-specialitiesdiv">
                        <big><img
                                src="https://www.bookmybai.com/images/icon2.png">
                            Cooking</big>
                        <p>
                            <span><img src="https://www.bookmybai.com/images/Veg-icon.png"><b>Veg</b></span>
                            <span><img src="https://www.bookmybai.com/images/cuisine-icon.png"><b>South
                                    Indian</b></span>
                            <span><img src="https://www.bookmybai.com/images/cuisine-icon.png"><b>Gujarati</b></span>
                        </p>
                        <div class="cuisinediv">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Idli</small></td>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Dosa</small></td>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Thepla</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                    Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_41326" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Rekha_Parmar_41326.jpg"
                                            id="imgCandidate" alt="Rekha Parmar">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Part-Time-Maid-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Rekha-Parmar/41326">
                                                <div class="facebook"
                                                    rel="41326">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="41326">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="41326">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Rekha Parmar on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Part-Time-Maid-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Rekha-Parmar/41326"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Rekha Parmar</h3>
                                            <p class="subheading">
                                                <span>Cleaner</span><span>Cook</span><span>BabySitter</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Jain</strong></li>
                                        <li><p><b>Age </b> <strong>37 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>8</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>15
                                                    Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Mumbai</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>Gujarati,
                                                Hindi, Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Adhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Ration Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>PAN Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div
                                            class="profile-specialitiesdiv cookdetails"><big>Can
                                                help in cooking</big> <table>
                                                <caption><big>Type of Food</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Veg-icon.png"></i>
                                                                <b>Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>I can cook</big></caption>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>Three Best dishes</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Idli</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Dosa</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Thepla</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cleaner</b>
                                                                (Cleaning
                                                                ,Dusting,Cleaning
                                                                Utensil,Clothes
                                                                washing
                                                                ,Bathroom
                                                                cleaning) in <b>1
                                                                    BHK House</b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cook</b>
                                                                (Cooking 2 Time)
                                                                for <b>4 Person</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Part-Time-Maid-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Rekha-Parmar/41326">
                                            <div class="facebook" rel="41326">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="41326">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="41326">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Rekha Parmar on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Part-Time-Maid-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Rekha-Parmar/41326"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <!-- <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="41326">Shortlist</a></p> -->
                        </div>
                    </div>
                </div>
            </div>

            
        <!-- Trupti Gavar -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Trupti_Gavar_41330.jpg"
                            title="Video" data-shortlist="41330">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_41330">
                            View Details</a> 
                            <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="41330">Shortlist</a>
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon2.png"></i>
                            Cook</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon4.png"></i>
                            Elderly Care</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_41330">
                            Trupti Gavar</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>12
                                Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>41
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_41330">
                        View Details</a>
                         <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="41330">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl01$hf_CandidateID"
                        id="hf_CandidateID" value="41330">

                    <div class="profile-specialitiesdiv list-specialitiesdiv">
                        <big><img
                                src="https://www.bookmybai.com/images/icon2.png">
                            Cooking</big>
                        <p>
                            <span><img src="https://www.bookmybai.com/images/Veg-icon.png"><b>Veg</b></span>
                            <span><img src="https://www.bookmybai.com/images/cuisine-icon.png"><b>Gujarati</b></span>
                        </p>
                        <div class="cuisinediv">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Dhokla</small></td>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Thepla</small></td>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Idli</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon4.png">
                            Elderly Care / Patient Care</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathing-Sponging-ico.png"><b>Bathing
                                    &amp; Sponging</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Elderly-ico.png"><b>Cleaning
                                    Utensils of Elderly</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-ico.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Giving-Medicines-ico.png"><b>Giving
                                    Medicines</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Massage-ico.png"><b>Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Elderly-for-a-Walk-ico.png"><b>Taking
                                    Elderly for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_41330" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Trupti_Gavar_41330.jpg"
                                            id="imgCandidate" alt="Trupti Gavar">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-Elderly-Care-Taker-in-Santacruz-East-in-Mumbai/Trupti-Gavar/41330">
                                                <div class="facebook"
                                                    rel="41330">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="41330">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="41330">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Trupti Gavar on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-Elderly-Care-Taker-in-Santacruz-East-in-Mumbai/Trupti-Gavar/41330"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Trupti Gavar</h3>
                                            <p class="subheading">
                                                <span>Cook</span><span>BabySitter</span><span>Elderly
                                                    Care</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>41 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>8</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>12
                                                    Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Gujarat</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>English,
                                                Gujarati, Hindi, Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Adhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Ration Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Pan Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b></span>
                                            </p></div>

                                        <div
                                            class="profile-specialitiesdiv cookdetails"><big>Can
                                                help in cooking</big> <table>
                                                <caption><big>Type of Food</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Veg-icon.png"></i>
                                                                <b>Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>I can cook</big></caption>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>Three Best dishes</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Dhokla</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Thepla</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Idli</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in elderly care</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathing-Sponging-ico.png"><b>Bathing
                                                        &amp; Sponging</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Elderly-ico.png"><b>Cleaning
                                                        Utensils of Elderly</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-ico.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Giving-Medicines-ico.png"><b>Giving
                                                        Medicines</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Massage-ico.png"><b>Massage</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Elderly-for-a-Walk-ico.png"><b>Taking
                                                        Elderly for a Walk</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cook</b>
                                                                (Cooking For 2
                                                                Time) for <b>2
                                                                    Hours</b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Baby
                                                                    Sitter</b>
                                                                (Baby Sitting)
                                                                for <b>7 Hours.</b>
                                                                The age of baby
                                                                was <b>1 Years</b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Elderly
                                                                    Care</b>
                                                                (Elderly Care)
                                                                for <b>9 Hours.</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-Elderly-Care-Taker-in-Santacruz-East-in-Mumbai/Trupti-Gavar/41330">
                                            <div class="facebook" rel="41330">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="41330">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="41330">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Trupti Gavar on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-Elderly-Care-Taker-in-Santacruz-East-in-Mumbai/Trupti-Gavar/41330"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="41330">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Swapnali_Palkar -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Swapnali_Palkar_41335.jpg"
                            title="Video" data-shortlist="41335">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_41335">
                            View Details</a>
                             <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="41335">Shortlist</a>
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon2.png"></i>
                            Cook</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_41335">
                            Swapnali Palkar</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>10
                                Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>46
                                Years</span></small></p>
                <!-- </div>
                <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_41335">
                        View Details</a> <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="41335">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl02$hf_CandidateID"
                        id="hf_CandidateID" value="41335">

                    <div class="profile-specialitiesdiv list-specialitiesdiv">
                        <big><img
                                src="https://www.bookmybai.com/images/icon2.png">
                            Cooking</big>
                        <p>
                            <span><img src="https://www.bookmybai.com/images/Veg-icon.png"><b>Veg</b></span>
                            <span><img src="https://www.bookmybai.com/images/Non-Veg-icon.png"><b>Non Veg</b></span>
                            <span><img src="https://www.bookmybai.com/images/cuisine-icon.png"><b>Marathi</b></span>
                        </p>
                        <div class="cuisinediv">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Sheera</small></td>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Modak</small></td>
                                        <td valign="middle"><small><img
                                                    src="https://www.bookmybai.com/images/cuisine-icon.png">
                                                Mutton</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                    Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_41335" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Swapnali_Palkar_41335.jpg"
                                            id="imgCandidate"
                                            alt="Swapnali Palkar">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Swapnali-Palkar/41335">
                                                <div class="facebook"
                                                    rel="41335">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="41335">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="41335">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Swapnali Palkar on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Swapnali-Palkar/41335"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Swapnali Palkar</h3>
                                            <p class="subheading">
                                                <span>Cook</span><span>BabySitter</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>46 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>8</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>10
                                                    Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Mumbai</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>English,
                                                Hindi, Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Adhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Ration Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Pan Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b></span>
                                            </p></div>

                                        <div
                                            class="profile-specialitiesdiv cookdetails"><big>Can
                                                help in cooking</big> <table>
                                                <caption><big>Type of Food</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Veg-icon.png"></i>
                                                                <b>Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Non-Veg-icon.png"></i>
                                                                <b>Non Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>I can cook</big></caption>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>Three Best dishes</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Sheera</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Modak</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Mutton</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cook</b>
                                                                (Cooking) for <b>2
                                                                    Hours</b>
                                                                for <b>4 Person</b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Baby
                                                                    Sitter</b>
                                                                (Baby Sitting)
                                                                for <b>7 Hours.</b>
                                                                The age of baby
                                                                was <b>1 Months</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Swapnali-Palkar/41335">
                                            <div class="facebook" rel="41335">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="41335">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="41335">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Swapnali Palkar on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Swapnali-Palkar/41335"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="41335">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            
        <!-- Rajeshree Rajendra Uped -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Rajeshree_Rajendra_Uped_41344.jpg"
                            title="Video" data-shortlist="41344">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_41344">
                            View Details</a> 
                            <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="41344">Shortlist</a> 
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon2.png"></i>
                            Cook</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_41344">
                            Rajeshree Rajendra Uped</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>15
                                Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>50
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_41344">
                        View Details</a> <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="41344">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl03$hf_CandidateID"
                        id="hf_CandidateID" value="41344">

                    <div class="profile-specialitiesdiv list-specialitiesdiv">
                        <big><img
                                src="https://www.bookmybai.com/images/icon2.png">
                            Cooking</big>
                        <p>
                            <span><img src="images/Veg-icon.png"><b>Veg</b></span>
                            <span><img src="images/Non-Veg-icon.png"><b>Non Veg</b></span>
                            <span><img src="images/cuisine-icon.png"><b>North
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>South
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>Gujarati</b></span>
                            <span><img src="images/cuisine-icon.png"><b>Marathi</b></span>
                        </p>
                        <div class="cuisinediv">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Dhokla</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Chicken</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Fish Fry</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                    Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_41344" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Rajeshree_Rajendra_Uped_41344.jpg"
                                            id="imgCandidate"
                                            alt="Rajeshree Rajendra  Uped">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Rajeshree-Rajendra-Uped/41344">
                                                <div class="facebook"
                                                    rel="41344">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="41344">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="41344">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Rajeshree Rajendra  Uped on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Rajeshree-Rajendra-Uped/41344"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Rajeshree Rajendra Uped</h3>
                                            <p class="subheading">
                                                <span>Cook</span><span>BabySitter</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>50 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>8</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>15
                                                    Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Mumbai</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>Hindi,
                                                Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Aadhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Ration Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>PAN Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b></span>
                                            </p></div>

                                        <div
                                            class="profile-specialitiesdiv cookdetails"><big>Can
                                                help in cooking</big> <table>
                                                <caption><big>Type of Food</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Veg-icon.png"></i>
                                                                <b>Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Non-Veg-icon.png"></i>
                                                                <b>Non Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>I can cook</big></caption>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>Three Best dishes</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Dhokla</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Chicken</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Fish
                                                                Fry</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cook</b>
                                                                (Cooking) for <b>2
                                                                    Hours</b>
                                                                for <b>3 Person</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Rajeshree-Rajendra-Uped/41344">
                                            <div class="facebook" rel="41344">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="41344">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="41344">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Rajeshree Rajendra  Uped on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Part-Time-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Rajeshree-Rajendra-Uped/41344"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="41344">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Krishna Balai Kanojia -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Krishna_Balai_Kanojia_42187.jpg"
                            title="Video" data-shortlist="42187">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_42187">
                            View Details</a>
                             <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="42187">Shortlist</a>
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon1.png"></i>
                            Cleaner</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon4.png"></i>
                            Elderly Care</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_42187">
                            Krishna Balai Kanojia</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>5 Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>50
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_42187">
                        View Details</a> <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="42187">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl04$hf_CandidateID"
                        id="hf_CandidateID" value="42187">
                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon1.png">
                            Cleaning</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                    Ironing</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                    Washing (With Washing Machine)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Clothes
                                    Washing (By Hands)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                    Shopping</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                    Cleaning</b></span>
                        </p></div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                    Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon4.png">
                            Elderly Care / Patient Care</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathing-Sponging-ico.png"><b>Bathing
                                    &amp; Sponging</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Elderly-ico.png"><b>Cleaning
                                    Utensils of Elderly</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-ico.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Giving-Medicines-ico.png"><b>Giving
                                    Medicines</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Massage-ico.png"><b>Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Elderly-for-a-Walk-ico.png"><b>Taking
                                    Elderly for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_42187" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Krishna_Balai_Kanojia_42187.jpg"
                                            id="imgCandidate"
                                            alt="Krishna Balai Kanojia">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Part-Time-Maid-Baby-Sitter-Elderly-Care-Taker-in-Santacruz-East-in-Mumbai/Krishna-Balai-Kanojia/42187">
                                                <div class="facebook"
                                                    rel="42187">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="42187">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="42187">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Krishna Balai Kanojia on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Part-Time-Maid-Baby-Sitter-Elderly-Care-Taker-in-Santacruz-East-in-Mumbai/Krishna-Balai-Kanojia/42187"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Krishna Balai Kanojia</h3>
                                            <p class="subheading">
                                                <span>Cleaner</span><span>BabySitter</span><span>Elderly
                                                    Care</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>50 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>8</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>5 Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Mumbai</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>Hindi,
                                                Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Aadhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Ration Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Pan Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in elderly care</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathing-Sponging-ico.png"><b>Bathing
                                                        &amp; Sponging</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Elderly-ico.png"><b>Cleaning
                                                        Utensils of Elderly</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-ico.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Giving-Medicines-ico.png"><b>Giving
                                                        Medicines</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Massage-ico.png"><b>Massage</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Elderly-for-a-Walk-ico.png"><b>Taking
                                                        Elderly for a Walk</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cleaner</b>
                                                                (Cleaning) in <b>1
                                                                    BHK House</b>
                                                                for <b>1 Hours</b>
                                                                for <b>4 Person</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Part-Time-Maid-Baby-Sitter-Elderly-Care-Taker-in-Santacruz-East-in-Mumbai/Krishna-Balai-Kanojia/42187">
                                            <div class="facebook" rel="42187">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="42187">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="42187">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Krishna Balai Kanojia on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Part-Time-Maid-Baby-Sitter-Elderly-Care-Taker-in-Santacruz-East-in-Mumbai/Krishna-Balai-Kanojia/42187"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="42187">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sunita Om Prakash Singh -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Sunita_Om_Prakash_Singh_42142.jpg"
                            title="Video" data-shortlist="42142">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_42142">
                            View Details</a>
                             <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="42142">Shortlist</a>
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon1.png"></i>
                            Cleaner</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon2.png"></i>
                            Cook</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_42142">
                            Sunita Om Prakash Singh</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>10
                                Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>42
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_42142">
                        View Details</a> <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="42142">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl05$hf_CandidateID"
                        id="hf_CandidateID" value="42142">
                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon1.png">
                            Cleaning</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                    Cleaning</b></span>
                        </p></div>

                    <div class="profile-specialitiesdiv list-specialitiesdiv">
                        <big><img
                                src="https://www.bookmybai.com/images/icon2.png">
                            Cooking</big>
                        <p>
                            <span><img src="images/Veg-icon.png"><b>Veg</b></span>
                            <span><img src="images/Non-Veg-icon.png"><b>Non Veg</b></span>
                            <span><img src="images/cuisine-icon.png"><b>North
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>South
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>Gujarati</b></span>
                            <span><img src="images/cuisine-icon.png"><b>Marathi</b></span>
                        </p>
                        <div class="cuisinediv">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Chicken Biryani</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Mutton Pulav</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Idli</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_42142" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Sunita_Om_Prakash_Singh_42142.jpg"
                                            id="imgCandidate"
                                            alt="Sunita Om Prakash Singh">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Part-Time-Maid-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Sunita-Om-Prakash-Singh/42142">
                                                <div class="facebook"
                                                    rel="42142">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="42142">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="42142">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Sunita Om Prakash Singh on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Part-Time-Maid-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Sunita-Om-Prakash-Singh/42142"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Sunita Om Prakash Singh</h3>
                                            <p class="subheading">
                                                <span>Cleaner</span><span>Cook</span><span>BabySitter</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>42 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>8</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>10
                                                    Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Uttar
                                                    Pradesh</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>English,
                                                Hindi, Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Aadhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Ration Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Pan Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div
                                            class="profile-specialitiesdiv cookdetails"><big>Can
                                                help in cooking</big> <table>
                                                <caption><big>Type of Food</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Veg-icon.png"></i>
                                                                <b>Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Non-Veg-icon.png"></i>
                                                                <b>Non Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>I can cook</big></caption>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>Three Best dishes</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Chicken
                                                                Biryani</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Mutton
                                                                Pulav</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Idli</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cook</b>
                                                                (Cooking for 2
                                                                time) for <b>3
                                                                    Hours</b>
                                                                for <b>6 Person</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Part-Time-Maid-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Sunita-Om-Prakash-Singh/42142">
                                            <div class="facebook" rel="42142">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="42142">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="42142">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Sunita Om Prakash Singh on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Part-Time-Maid-Cook-Baby-Sitter-in-Santacruz-East-in-Mumbai/Sunita-Om-Prakash-Singh/42142"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="42142">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sheetal Rane -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Sheetal_Rane_54600.jpg"
                            title="Video" data-shortlist="54600">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_54600">
                            View Details</a> 
                             <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="54600">Shortlist</a>
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon1.png"></i>
                            Cleaner</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon2.png"></i>
                            Cook</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_54600">
                            Sheetal Rane</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>7 Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>32
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_54600">
                        View Details</a> <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="54600">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl06$hf_CandidateID"
                        id="hf_CandidateID" value="54600">
                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon1.png">
                            Cleaning</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                    Ironing</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                    Washing (With Washing Machine)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Clothes
                                    Washing (By Hands)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                    Shopping</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                    Cleaning</b></span>
                        </p></div>

                    <div class="profile-specialitiesdiv list-specialitiesdiv">
                        <big><img
                                src="https://www.bookmybai.com/images/icon2.png">
                            Cooking</big>
                        <p>
                            <span><img src="images/Veg-icon.png"><b>Veg</b></span>
                            <span><img src="images/Non-Veg-icon.png"><b>Non Veg</b></span>
                            <span><img src="images/cuisine-icon.png"><b>North
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>South
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>Marathi</b></span>
                        </p>
                        <div class="cuisinediv">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Idli</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Dosa</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Paneer</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                    Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_54600" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Sheetal_Rane_54600.jpg"
                                            id="imgCandidate" alt="Sheetal Rane">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-in-Bandra-West-in-Mumbai/Sheetal-Rane/54600">
                                                <div class="facebook"
                                                    rel="54600">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="54600">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="54600">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Sheetal Rane on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-in-Bandra-West-in-Mumbai/Sheetal-Rane/54600"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Sheetal Rane</h3>
                                            <p class="subheading">
                                                <span>Cleaner</span><span>Cook</span><span>BabySitter</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>32 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>12</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>7 Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Ratnagiri</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>Hindi,
                                                Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Driving License <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>School Leaving
                                                    Certificate <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div
                                            class="profile-specialitiesdiv cookdetails"><big>Can
                                                help in cooking</big> <table>
                                                <caption><big>Type of Food</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Veg-icon.png"></i>
                                                                <b>Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Non-Veg-icon.png"></i>
                                                                <b>Non Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>I can cook</big></caption>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>Three Best dishes</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Idli</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Dosa</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Paneer</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cleaner</b>
                                                                (All cleaning)
                                                                in <b>3 House</b>
                                                                for <b>24 Hours</b>
                                                                for <b>6 Person</b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Baby
                                                                    Sitter</b>
                                                                (Full baby care)
                                                                for <b>24 Hours.</b>
                                                                The age of baby
                                                                was <b>3 Months</b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cook</b>
                                                                (Cooking) for <b>8
                                                                    Hours</b>
                                                                for <b>4 Person</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-in-Bandra-West-in-Mumbai/Sheetal-Rane/54600">
                                            <div class="facebook" rel="54600">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="54600">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="54600">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Sheetal Rane on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-in-Bandra-West-in-Mumbai/Sheetal-Rane/54600"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="54600">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pushpa Singh Rajpu -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Pushpa_Singh_Rajput_54601.jpg"
                            title="Video" data-shortlist="54601">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_54601">
                            View Details</a> 
                            <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="54601">Shortlist</a>
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon1.png"></i>
                            Cleaner</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon2.png"></i>
                            Cook</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_54601">
                            Pushpa Singh Rajput</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>5 Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>34
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_54601">
                        View Details</a> <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="54601">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl07$hf_CandidateID"
                        id="hf_CandidateID" value="54601">
                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon1.png">
                            Cleaning</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                    Ironing</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                    Washing (With Washing Machine)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Clothes
                                    Washing (By Hands)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                    Shopping</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                    Cleaning</b></span>
                        </p></div>

                    <div class="profile-specialitiesdiv list-specialitiesdiv">
                        <big><img
                                src="https://www.bookmybai.com/images/icon2.png">
                            Cooking</big>
                        <p>
                            <span><img src="images/Veg-icon.png"><b>Veg</b></span>
                            <span><img src="images/Non-Veg-icon.png"><b>Non Veg</b></span>
                            <span><img src="images/cuisine-icon.png"><b>North
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>Marathi</b></span>
                        </p>
                        <div class="cuisinediv">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Fish curry</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Rice</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Alloo Gravy</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                    Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_54601" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Pushpa_Singh_Rajput_54601.jpg"
                                            id="imgCandidate"
                                            alt="Pushpa Singh Rajput">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-in-Vile-Parle-East-in-Mumbai/Pushpa-Singh-Rajput/54601">
                                                <div class="facebook"
                                                    rel="54601">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="54601">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="54601">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Pushpa Singh Rajput on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-in-Vile-Parle-East-in-Mumbai/Pushpa-Singh-Rajput/54601"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Pushpa Singh Rajput</h3>
                                            <p class="subheading">
                                                <span>Cleaner</span><span>Cook</span><span>BabySitter</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>34 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>10</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>5 Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Kolkata</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>Bengali,
                                                Hindi, Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Adhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Pan Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Electricity Bill <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div
                                            class="profile-specialitiesdiv cookdetails"><big>Can
                                                help in cooking</big> <table>
                                                <caption><big>Type of Food</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Veg-icon.png"></i>
                                                                <b>Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Non-Veg-icon.png"></i>
                                                                <b>Non Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>I can cook</big></caption>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>Three Best dishes</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Fish
                                                                curry</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Rice</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Alloo
                                                                Gravy</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Baby
                                                                    Sitter</b>
                                                                (Massage and
                                                                other work) for
                                                                <b>24 Hours.</b>
                                                                The age of baby
                                                                was <b>5 Months</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-in-Vile-Parle-East-in-Mumbai/Pushpa-Singh-Rajput/54601">
                                            <div class="facebook" rel="54601">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="54601">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="54601">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Pushpa Singh Rajput on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-in-Vile-Parle-East-in-Mumbai/Pushpa-Singh-Rajput/54601"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="54601">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shanti Samir Kamble -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Shanti_Samir_Kamble_54602.jpg"
                            title="Video" data-shortlist="54602">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_54602">
                            View Details</a> 
                            <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="54602">Shortlist</a>
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_54602">
                            Shanti Samir Kamble</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>15
                                Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>38
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_54602">
                        View Details</a> <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="54602">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl08$hf_CandidateID"
                        id="hf_CandidateID" value="54602">

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                    Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_54602" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Shanti_Samir_Kamble_54602.jpg"
                                            id="imgCandidate"
                                            alt="Shanti Samir Kamble">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Full-Time-Baby-Sitter-in-Andheri-West-in-Mumbai/Shanti-Samir-Kamble/54602">
                                                <div class="facebook"
                                                    rel="54602">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="54602">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="54602">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Shanti Samir Kamble on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Full-Time-Baby-Sitter-in-Andheri-West-in-Mumbai/Shanti-Samir-Kamble/54602"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Shanti Samir Kamble</h3>
                                            <p class="subheading">
                                                <span>BabySitter</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>38 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>24</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>15
                                                    Years</strong></p></li>

                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>Hindi,
                                                Marathi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Adhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Pan Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Election Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Electricity Bill <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">

                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Baby
                                                                    Sitter</b>
                                                                (Baby care) for
                                                                <b>24 Hours.</b>
                                                                The age of baby
                                                                was <b>2 Months</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Full-Time-Baby-Sitter-in-Andheri-West-in-Mumbai/Shanti-Samir-Kamble/54602">
                                            <div class="facebook" rel="54602">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="54602">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="54602">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Shanti Samir Kamble on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Full-Time-Baby-Sitter-in-Andheri-West-in-Mumbai/Shanti-Samir-Kamble/54602"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="54602">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Rashmi Mikki Rawat -->
            <div class="list-iteme Container_MaidData">
                <div class="list-imgdiv">

                    <div class="list-imgshow">
                        <img
                            src="https://www.bookmybai.com/files/Thumbs/Rashmi_Mikki_Rawat_54607.jpg"
                            title="Video" data-shortlist="54607">
                    </div>
                    <div class="img-nav">
                    </div>

                    <!-- <p class="list-btns">
                        <a href="#" class="btn_auto btn_preview"
                            data-pop-id="Candidate_54607">
                            View Details</a> 
                            <a href="#" id="btn_Shortlist"
                            class="btn_Shortlist btn_auto" rel="54607">Shortlist</a>
                    </p> -->
                    <p style="display: none;">
                        <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon1.png"></i>
                            Cleaner</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon2.png"></i>
                            Cook</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon3.png"></i>
                            Baby Sitter / Nanny</span> <span><i><img
                                    src="https://www.bookmybai.com/images/white-icon4.png"></i>
                            Elderly Care</span></p>
                </div>
                <div class="list-textdiv">
                    <h3>
                        <a href="#" class="btn_preview"
                            data-id="Candidate_54607">
                            Rashmi Mikki Rawat</a>
                    </h3>
                    <p class="list-Experiance"><small><i><img
                                    src="https://www.bookmybai.com/images/location_icon.png"></i><b>Location</b><span>Santacruz
                            </span></small><small><b>Experience</b><span>7 Years</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/religion-icon.png"></i><b>Religion</b><span>Hindu</span></small><small><i><img
                                    src="https://www.bookmybai.com/images/age-icon.png"></i><b>Age</b><span>27
                                Years</span></small></p>
                </div>
                <!-- <p class="list-btns mobi">
                    <a href="#" class="btn_auto btn_preview"
                        data-id="Candidate_54607">
                        View Details</a>
                         <a href="#" id="hyp_Shortlist"
                        class="btn_Shortlist btn_auto" rel="54607">Shortlist</a>
                </p> -->
                <div class="list-infodiv">
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Candidates$ctl09$hf_CandidateID"
                        id="hf_CandidateID" value="54607">
                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon1.png">
                            Cleaning</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                    Ironing</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                    Washing (With Washing Machine)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Clothes
                                    Washing (By Hands)</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                    Cleaning</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                    Shopping</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                    Cleaning</b></span>
                        </p></div>

                    <div class="profile-specialitiesdiv list-specialitiesdiv">
                        <big><img
                                src="https://www.bookmybai.com/images/icon2.png">
                            Cooking</big>
                        <p>
                            <span><img src="images/Veg-icon.png"><b>Veg</b></span>
                            <span><img src="images/Non-Veg-icon.png"><b>Non Veg</b></span>
                            <span><img src="images/cuisine-icon.png"><b>North
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>South
                                    Indian</b></span>
                            <span><img src="images/cuisine-icon.png"><b>Gujarati</b></span>
                        </p>
                        <div class="cuisinediv">
                            <table>
                                <tbody>
                                    <tr>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Paneer Makhni</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Pasta</small></td>
                                        <td valign="middle"><small><img
                                                    src="images/cuisine-icon.png">
                                                Pizza</small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon3.png">
                            Baby Sitter / Nanny</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                    Diaper</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                    Utensils of Baby</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                    Baby for Sleep</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                    Baby for a Walk</b></span>
                        </p></div>

                    <div class="list-specialitiesdiv"><big><img
                                src="https://www.bookmybai.com/images/icon4.png">
                            Elderly Care / Patient Care</big> <p>
                            <span><img
                                    src="https://www.bookmybai.com/images/Bathing-Sponging-ico.png"><b>Bathing
                                    &amp; Sponging</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Elderly-ico.png"><b>Cleaning
                                    Utensils of Elderly</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Feeding-ico.png"><b>Feeding</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Giving-Medicines-ico.png"><b>Giving
                                    Medicines</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Massage-ico.png"><b>Massage</b></span>
                            <span><img
                                    src="https://www.bookmybai.com/images/Taking-Elderly-for-a-Walk-ico.png"><b>Taking
                                    Elderly for a Walk</b></span>
                        </p></div>

                </div>
                <div class="popback" id="Candidate_54607" style="display: none;">
                    <span class="cross popupbg"></span>
                    <div class="search_info">
                        <div class="searchinfo_body">
                            <div class="profile-main" style="position: relative">
                                <span class="cross">
                                    <img src="images/delete-icon.png">
                                </span>
                                <div class="profile-imgdiv">
                                    <div class="proile-thumb">
                                        <img
                                            src="https://www.bookmybai.com/files/Thumbs/Rashmi_Mikki_Rawat_54607.jpg"
                                            id="imgCandidate"
                                            alt="Rashmi Mikki Rawat">
                                    </div>
                                    <ul>
                                        <li>
                                            <div
                                                class="social-Share desk flot-right"
                                                rel="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-Elderly-Care-Taker-in-Lokhandwala-in-Mumbai/Rashmi-Mikki-Rawat/54607">
                                                <div class="facebook"
                                                    rel="54607">
                                                    <a href="#"
                                                        id="hyp_FacebookShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                                </div>
                                                <div class="twitter" rel="54607">
                                                    <a href="#"
                                                        id="hyp_TwitterShare">
                                                        <img
                                                            src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                                </div>
                                                <div class="gplus" rel="54607">
                                                    <a href="#">
                                                        <img
                                                            src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                                </div>
                                                <div class="whatsapp">
                                                    <a href="whatsapp://send"
                                                        data-text="Take a look at this maid Rashmi Mikki Rawat on bookmybai.com :"
                                                        data-href="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-Elderly-Care-Taker-in-Lokhandwala-in-Mumbai/Rashmi-Mikki-Rawat/54607"
                                                        class="wa_btn wa_btn_m"
                                                        style="display: none;
                                                            width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                            padding: 0; border: 0;"></a>
                                                </div>
                                                &nbsp;
                                            </div>
                                            <h3 class="headingtext">
                                                Rashmi Mikki Rawat</h3>
                                            <p class="subheading">
                                                <span>Cleaner</span><span>Cook</span><span>BabySitter</span><span>Elderly
                                                    Care</span></p>
                                        </li>
                                        <li>
                                            <i><img
                                                    src="https://www.bookmybai.com/images/location_icon.png"></i>
                                            <b>Location</b> Santacruz</li>
                                    </ul>
                                    <ul class="commondetailslist">
                                        <li><b>Religion</b> <strong>Hindu</strong></li>
                                        <li><p><b>Age </b> <strong>27 Years</strong></p></li>
                                        <li><b>No. of hours I can work</b>
                                            <strong>12</strong></li>
                                        <li><b>Live In</b> <strong>Yes</strong></li>
                                        <li><p><b>Experience</b> <strong>7 Years</strong></p></li>
                                        <li><p><b>Native place</b> <strong>Punjab</strong></p></li>
                                    </ul>
                                    <ul class="commondetailslist fullwidth">
                                        <li><b>Languages</b> <strong>English,
                                                Hindi</strong></li>

                                        <li><p><b>Documents</b>
                                                <strong>Adhar Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Pan Card <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                                <strong>Electricity Bill <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></strong>
                                            </p> </li>

                                    </ul>
                                </div>
                                <div class="popupscroll">
                                    <div class="profile-info">
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in cleaning</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathroom-Cleaning-icon.png"><b>Bathroom
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Ironing-icon.png"><b>Clothes
                                                        Ironing</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(With-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (With Washing
                                                        Machine)</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Clothes-Washing-(Without-Washing-Machine)-icon.png"><b>Clothes
                                                        Washing (Without Washing
                                                        Machine)</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Dusting-icon.png"><b>Dusting</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Floor-Cleaning-icon.png"><b>Floor
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Grocery-Shopping-icon.png"><b>Grocery
                                                        Shopping</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Utensil-Cleaning-icon.png"><b>Utensil
                                                        Cleaning</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div
                                            class="profile-specialitiesdiv cookdetails"><big>Can
                                                help in cooking</big> <table>
                                                <caption><big>Type of Food</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Veg-icon.png"></i>
                                                                <b>Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                        <td valign="middle"><small><i><img
                                                                        src="https://www.bookmybai.com/images/Non-Veg-icon.png"></i>
                                                                <b>Non Veg</b>
                                                                <strong><img
                                                                        src="https://www.bookmybai.com/images/Tick.gif"></strong></small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>I can cook</big></caption>
                                                <tbody>
                                                    <tr>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <caption><big>Three Best dishes</big></caption>
                                                <tbody>
                                                    <tr>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Paneer
                                                                Makhni</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Pasta</small></td>
                                                        <td valign="middle"><small><i><img
                                                                        src="images/cuisine-icon.png"></i>Pizza</small></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in Baby sitter / Nanny</big>
                                            <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Changing-Diaper-icon.png"><b>Changing
                                                        Diaper</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Baby-icon.png"><b>Cleaning
                                                        Utensils of Baby</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-icon.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Massage-icon.png"><b>Baby
                                                        Massage</b></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-for-Sleep-icon.png"><b>Preparing
                                                        Baby for Sleep</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Baby-for-a-Walk-icon.png"><b>Taking
                                                        Baby for a Walk</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Mother-Massage-icon.png"><b>Mother
                                                        Massage</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Preparing-Baby-Food-icon.png"><b>Preparing
                                                        Baby Food</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Washing-Baby-Clothes-icon.png"><b>Washing
                                                        Baby Clothes</b></span>
                                                <span><img
                                                        src="https://www.bookmybai.com/images/Baby-Bathing-icon.png"><b>Baby
                                                        Bathing</b></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv"><big>Can
                                                help in elderly care</big> <p>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Bathing-Sponging-ico.png"><b>Bathing
                                                        &amp; Sponging</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Cleaning-Utensils-of-Elderly-ico.png"><b>Cleaning
                                                        Utensils of Elderly</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Feeding-ico.png"><b>Feeding</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Giving-Medicines-ico.png"><b>Giving
                                                        Medicines</b> <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Massage-ico.png"><b>Massage</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                                <span class="active"><img
                                                        src="https://www.bookmybai.com/images/Taking-Elderly-for-a-Walk-ico.png"><b>Taking
                                                        Elderly for a Walk</b>
                                                    <i><img
                                                            src="https://www.bookmybai.com/images/Tick.gif"></i></span>
                                            </p></div>

                                        <div class="profile-specialitiesdiv">
                                            <div class="prfl_tbl">
                                                <big>Old work experience</big>
                                                <table style="width: 100%">
                                                    <tbody>
                                                        <tr>
                                                            <th width="50%">
                                                                Details
                                                            </th>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cook</b>
                                                                (All cooking)
                                                                for <b>24 Hours</b>
                                                                for <b>3 Person</b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td align="left">
                                                                Worked as <b>Cleaner</b>
                                                                (All cleaning
                                                                (except
                                                                bathroom))) in
                                                                <b>3 House</b>
                                                                for <b>10 Hours</b>
                                                                for <b>8 Person</b>
                                                            </td>

                                                        </tr>

                                                    </tbody> </table> </div>
                                        </div>

                                        <div class="profile-specialitiesdiv">
                                            <big>Expected Salary and
                                                Availability</big>
                                            <p>
                                                Salary expectation depends on
                                                the kind of work the maid needs
                                                to do. Once you have shortlisted
                                                the maid, we will check the
                                                availability and the salary
                                                expectation of the maid
                                            </p>
                                        </div>
                                        <div class="social-Share mobi"
                                            rel="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-Elderly-Care-Taker-in-Lokhandwala-in-Mumbai/Rashmi-Mikki-Rawat/54607">
                                            <div class="facebook" rel="54607">
                                                <a href="#" id="A1">
                                                    <img
                                                        src="https://www.bookmybai.com/images/facebook-white.png"></a>
                                            </div>
                                            <div class="twitter" rel="54607">
                                                <a href="#" id="A2">
                                                    <img
                                                        src="https://www.bookmybai.com/images/twitter-white.png"></a>
                                            </div>
                                            <div class="gplus" rel="54607">
                                                <a href="#">
                                                    <img
                                                        src="https://www.bookmybai.com/images/gplus-white.png"></a>
                                            </div>
                                            <div class="whatsapp">
                                                <a href="whatsapp://send"
                                                    data-text="Take a look at this maid Rashmi Mikki Rawat on bookmybai.com :"
                                                    data-href="http://www.bookmybai.com/Full-Time-Maid-Cook-Baby-Sitter-Elderly-Care-Taker-in-Lokhandwala-in-Mumbai/Rashmi-Mikki-Rawat/54607"
                                                    class="wa_btn wa_btn_m"
                                                    style="display: none;
                                                        width: 30px; height: 30px; background-size: 100%; background-position: center;
                                                        padding: 0; border: 0;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-content">
                                </div>
                            </div>
                        </div>
                        <div class="search_info popupbtnrow">
                            <p>

                                <a href="#" id="Shortlist_Now"
                                    class="btn_Shortlist shortlistlink btn_auto"
                                    rel="54607">Shortlist</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- <div id="Pager">

                <div id="numericPager">

                    <a href="/SearchDetails.aspx?RequirementID=998124"
                        id="hyp_Pager" class="_active">
                        1
                    </a>
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl00$hf_PageIndex"
                        id="hf_PageIndex" value="1">

                    <a
                        href="/SearchDetails.aspx?RequirementID=998124&amp;Page=2"
                        id="hyp_Pager" class>
                        2
                    </a>
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl01$hf_PageIndex"
                        id="hf_PageIndex" value="2">

                    <a
                        href="/SearchDetails.aspx?RequirementID=998124&amp;Page=3"
                        id="hyp_Pager" class>
                        3
                    </a>
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl02$hf_PageIndex"
                        id="hf_PageIndex" value="3">

                    <a
                        href="/SearchDetails.aspx?RequirementID=998124&amp;Page=4"
                        id="hyp_Pager" class>
                        4
                    </a>
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl03$hf_PageIndex"
                        id="hf_PageIndex" value="4">

                    <a
                        href="/SearchDetails.aspx?RequirementID=998124&amp;Page=5"
                        id="hyp_Pager" class>
                        5
                    </a>
                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl04$hf_PageIndex"
                        id="hf_PageIndex" value="5">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl05$hf_PageIndex"
                        id="hf_PageIndex" value="6">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl06$hf_PageIndex"
                        id="hf_PageIndex" value="7">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl07$hf_PageIndex"
                        id="hf_PageIndex" value="8">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl08$hf_PageIndex"
                        id="hf_PageIndex" value="9">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl09$hf_PageIndex"
                        id="hf_PageIndex" value="10">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl10$hf_PageIndex"
                        id="hf_PageIndex" value="11">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl11$hf_PageIndex"
                        id="hf_PageIndex" value="12">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl12$hf_PageIndex"
                        id="hf_PageIndex" value="13">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl13$hf_PageIndex"
                        id="hf_PageIndex" value="14">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl14$hf_PageIndex"
                        id="hf_PageIndex" value="15">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl15$hf_PageIndex"
                        id="hf_PageIndex" value="16">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl16$hf_PageIndex"
                        id="hf_PageIndex" value="17">

                    <input type="hidden"
                        name="ctl00$cp_Main$rpt_Pager$ctl17$hf_PageIndex"
                        id="hf_PageIndex" value="18">

                </div>
                <a href="/SearchDetails.aspx?RequirementID=998124&amp;Page=2"
                    id="hyp_Next">Next</a> -->
            <!-- </div> -->
            <!-- <input type="hidden" name="ctl00$cp_Main$hf_BookmybaiApp"
                id="hf_BookmybaiApp" value="False">
            <div id="SuccessInfo" class="popback" style="z-index: 10000000;">
                <span class="cross popupbg"></span>
                <div class="popupbody">
                    <div class="popupcontainer">
                        <a href="#" class="closeThis cross">
                            <img
                                src="https://www.bookmybai.com/images/delete-icon.png"
                                alt="delete"></a>
                        <big>Shortlist Info</big>
                        <div class="popuptext">
                            <p id="MessageText">
                            </p>
                        </div>
                        <div class="fbpostdiv">
                            <big>Show us some love, Spread the word</big>
                            <p>
                                When you share on facebook this is how other
                                will also know about bookmybai.com</p>
                            <img
                                src="https://www.bookmybai.com/images/bookmybai-fbscreen.jpg"
                                alt="Fb screen">
                            <div class="fb-like"
                                data-href="https://www.facebook.com/bookmybai"
                                data-layout="standard" data-action="like"
                                data-show-faces="true" data-share="true">
                                <iframe name="f2ea06c7f" width="1000px"
                                    height="1000px" frameborder="0"
                                    allowtransparency="true"
                                    allowfullscreen="true" scrolling="no"
                                    title="fb:like Facebook Social Plugin"
                                    src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df1fd6f8098%26domain%3Dwww.bookmybai.com%26origin%3Dhttp%253A%252F%252Fwww.bookmybai.com%252Ff1dbef4a9c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbookmybai&amp;layout=standard&amp;locale=en_GB&amp;sdk=joey&amp;share=true&amp;show_faces=true"
                                    class
                                    style="border: none; visibility: visible; width: 100%; height: 57px;">
                                </iframe>
                            </div>
                            <a href="#" class="lnk-auto flot-right"
                                onclick="$('.cross').click();">Skip</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Div_Payments" class="popback"
                style="z-index: 10000000; display: none;">
                <span class="cross popupbg"></span>
                <div class="popupbody" style="max-width: 650px;">
                    <div class="popupcontainer">
                        <a href="#" class="closeThis cross">
                            <img
                                src="https://www.bookmybai.com/images/delete-icon.png"
                                alt="delete"></a>
                        <div class="popuptext" style="padding: 0;">
                            <p id="PaymentsMessage">
                            </p>
                        </div>
                        <div class="fbpostdiv ExpressDiv">
                            <big class="ExpressDiv_heading">To shortlist this
                                maid, kindly pay a refundable fee
                                of Rs. 1000.
                            </big>

                            <p class="centeraline"
                                style="border-bottom: 1px solid #eee; padding: 0 0 5px;">
                                <b style="font-size: 15px;">Next steps</b></p>
                            <ul>
                                <li><b>1)</b> Pay this refundable fee of Rs.
                                    1000</li>
                                <li><b>2)</b> Once you have paid this amount,
                                    you can shortlist more maids for free</li>
                                <li><b>3)</b> If this maid is not available then
                                    we will send you other options of maids
                                    who are similar to the one that you have
                                    shortlisted. <span style="color: #BE3B3B;">
                                        If we are unable to find you a maid,
                                        then we will refund this amount of Rs.
                                        1000
                                        that you have paid. No questions asked.</span>
                                </li>
                                <li><b>4)</b> Talk to the maid on the phone or
                                    meet the maid personally at your home</li>
                                <li><b>5)</b> If you select the maid then she
                                    will start working for you from the next
                                    day</li>
                                <li><b>6)</b> You pay us the balance amount on
                                    the day the maid joins. Our charges are:
                                    One month salary of the maid. For example:
                                    If the salary is Rs. 10000, then our
                                    one-time fee will be Rs. 10000 to be paid to
                                    us on the day of joining. GST 18% will
                                    be extra. <span style="color: #BE3B3B;">This
                                        is a one-time fee and we do not charge
                                        any renewal fees after 1 year which
                                        other agencies charges</span></li>
                                <li><b>7)</b> If you fire the maid or the maid
                                    leaves within 6-months of joining you,
                                    then we will replace the maid with a new
                                    maid for FREE of cost. No questions asked!
                                </li>
                            </ul>
                            <p>
                                <b>Note: Most of the maid agencies are frauds.
                                    They will charge you a fee and the maid
                                    will never join or run away after few days.
                                    BookMyBai is a corporate company and
                                    for us your satisfaction is highest
                                    priority. Trust us to give you the best
                                    quality
                                    maid and service. </b>
                            </p> -->
                            <!-- <p class="centeraline">
                                <a
                                    href="/Client/Payments.aspx?Source=Shortlists&amp;RequirementID=998124"
                                    id="btn_Payments" class="btn_auto">Pay Rs.
                                    1000/-</a>
                            </p>
                            <p class="centeraline">
                                <a href="#" class="link btn_Cross">Close This</a>
                            </p> -->
                        <!-- </div>
                    </div> -->
                <!-- </div>
            </div> -->
            <div class="popback" id="VideoDiv" style="display: none;">
                <span class="cross popupbg"></span>
                <div class="search_info">
                    <div class="searchinfo_body">
                        <div class="container">
                            <span class="bindiframe"></span>
                            <div class="btn_row">
                                <a href="#" class="btn_auto btn_Shortlist">Shortlist</a>
                                <a href="#" class="btn_auto gray_btn cross">
                                    Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="RequirementDetails popback" style="display: none">
                <span class="cross popupbg"></span>
                <div class="search_info">
                    <div class="searchinfo_body">
                        <div class="requirmentdetailsdiv">
                            <a href="#" class="closeThis cross">
                                <img src="../images/delete-icon.png"
                                    alt="delete"></a>
                            <table cellspacing="2" cellpadding="2">
                                <tbody>
                                    <tr>
                                        <td>
                                            <span>No of Members</span> <b>0</b>
                                        </td>
                                        <td>
                                            <span>Size of House</span> <b>...</b>
                                        </td>
                                        <td>
                                            <span>Budget</span> <b>9000</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Location</span> <b>Santacruz</b>
                                        </td>
                                        <td>
                                            <span>Religion preference</span> <b>Hindu|Jain</b>
                                        </td>
                                        <td>
                                            <span>Number of hours</span> <b>8
                                                hours ()</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Gender preference</span> <b>A</b>
                                        </td>
                                    </tr>

                                    <tr><td colspan="3">
                                            <big>Baby Sitting</big>
                                            <ul class="requirment table">
                                                <li><span>Baby Age :</span>0
                                                    Months</li>
                                                <li><span>Baby Gender :</span>
                                                </li>
                                            </ul>
                                        </td></tr>

                                    <tr>
                                        <td colspan="3">
                                            <!-- <a
                                                href="https://www.bookmybai.com/Client/Requirements.aspx?RequirementID=998124&amp;hashKey=46c3222de9ac482fdd230de833207ced"
                                                class="btn_auto flot-right">Edit
                                                requirement</a> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="flot-right">
                                Posted Date : 02/11/2023</div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="ClientFormpopup" class="popback">
                <span class="cross popupbg"></span>
                <div class="popupbody">
                    <div class="popupcontainer">
                        <span class="cross">
                            <img
                                src="https://www.bookmybai.com/images/delete-icon.png">
                        </span><big>Enter your info</big>
                        <div class="popuptext"> -->
                            <!-- <p style="text-align: center;">
                                Kindly fil up the below information To shortlist
                                this maid</p> -->
                            <!-- <div class="contactconrow">
                                <div id="vs_EditContactDetails"
                                    class="validationSummary"
                                    style="color:Red;display:none;">

                                </div>
                                <br>
                                <div class="frm_row">
                                    <div class="frm_collarge">
                                        <input name="ctl00$cp_Main$txt_Name"
                                            type="text" id="txt_Name"
                                            class="fullwidth txt_large"
                                            placeholder="Name"
                                            style="width: 99%;">
                                    </div>
                                </div>
                                <div class="frm_row">
                                    <div class="frm_collarge">
                                        <input name="ctl00$cp_Main$txt_Number"
                                            type="text" maxlength="11"
                                            id="txt_Number" class="txt_large"
                                            placeholder="Enter No."
                                            onkeypress="return isNumberKey(event);"
                                            style="width: 99%;">
                                    </div>
                                </div>
                                <p style="text-align: right;">
                                    <input type="submit"
                                        name="ctl00$cp_Main$btn_SuveInfo"
                                        value="Shortlist" id="btn_SuveInfo"
                                        class="btn_auto">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <input type="hidden" name="ctl00$cp_Main$hf_RequirementID"
                id="hf_RequirementID" value="998124">
            <input type="hidden" name="ctl00$cp_Main$hf_CandidateID"
                id="hf_CandidateID">
            <input type="hidden" name="ctl00$cp_Main$hf_City" id="hf_City"
                value="Mumbai">
            <input type="hidden" name="ctl00$cp_Main$hf_CityType"
                id="hf_CityType" value="Primary">
            <input type="hidden" name="ctl00$cp_Main$hf_NoofHours"
                id="hf_NoofHours" value="8">
            <input type="hidden" name="ctl00$cp_Main$hf_PaidClient"
                id="hf_PaidClient" value="False">
            <script type="text/javascript">
    
            $('.img-nav span, #btn_Videolink, .list-imgdiv img').click(function () {
    
                var clicktype = $(this).attr('title');
                $(this).children('img')
                if (clicktype == "Photo") {
                    // $(this).parent('.img-nav').siblings('.list-imgshow').children('img').show().siblings().hide(); ;
                }
                else {
                    // var iframrsrc = $('.popuptext').children('iframe').attr('src');
                    var videolink = $(this).attr('rel').split('?v=');
    
                    var videoembedlink = "https://www.youtube.com/embed/" + videolink[1];
                    var iframeht = $(this).parent('.img-nav').siblings('.list-imgshow').children('img').height();
    
                    //   $('#VideoDiv .container').children('iframe').attr('src', videoembedlink);
    
                    $('#VideoDiv .container').children('.bindiframe').html("<iframe width='100%' height='480' src='" + videoembedlink + "' frameborder='0' allowfullscreen=''></iframe>");
                    var btntext = $(this).parents(".list-iteme").find(".list-imgdiv .btn_Shortlist").text();
                    $('#VideoDiv .btn_Shortlist').attr("rel", $(this).attr('data-shortlist')).text(btntext);
    
    
                    $('#VideoDiv').fadeIn();
                    // $('#Videopopup').reveal($(this).data());
                    //  setTimeout(function () { ('#Videopopup').animate({ top: "19px" }); }, 1000); 
                }
    
            });
    
            $('.searchinfo_body .proile-thumb>img').click(function () {
                $(this).parents('.popback').find('#btn_Videolink').click();
            });
    
    
            $(".btn_RequirementDetails").click(function () {
                $(".RequirementDetails").show();
                return false;
            });
    
    
            $(".btn_Shortlist").click(function () {
    
                var bOpenPayment = $("#hf_Payment").val();
                var RequirementID = $("#hf_RequirementID").val();
                var CandidateID = $(this).attr("rel");
                var btn_Shortlist = $(this);
    
                var ShortlistCount = $("#lnk_Shortlist").children("a").text();
                ShortlistCount = ShortlistCount.replace("View Shortlist (", "");
                ShortlistCount = ShortlistCount.replace(")", "").trim();
                var MessageText = "";
    
                var Text = $(this).text();
    
                if (Text == "Remove from shortlist") {
                    Text = "Shortlist";
                    ShortlistCount = parseInt(ShortlistCount) - 1;
                    MessageText = "This maid has been removed from shortlist";
                }
                else if (Text == "Shortlist") {
                    Text = "Remove from shortlist";
                    ShortlistCount = parseInt(ShortlistCount) + 1;
                    MessageText = "This maid has been shortlisted. We will check the availability of this maid and get back to you. You can shortlist more maids if you want";
                }
    
                if (bOpenPayment == "True") {
    
                    fn_ShowPayPopup("Div_Payments");
    
                }
                else {
    
                    $.ajax({
                        type: 'POST',
                        url: 'api/Candidates.aspx/fn_ShortlistCandidate',
                        data: '{"RequirementID" : "' + RequirementID + '", "CandidateID" : "' + CandidateID + '"}',
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: true,
                        success: function (response) {
    
                            var ShortlistID = parseInt(response.d);
    
                            if (ShortlistID > 0) {
    
                                $("a[rel='" + CandidateID + "'].btn_Shortlist").text(Text);
                                $("#MessageText").html(MessageText);
                                fn_ShowPopup("SuccessInfo");
                            }
    
                        }
                    });
    
                }
    
                return false;
    
            });
    
    
            $(document).ready(function () {
                $(".accordiondiv big").click(function () {
                    $('.active').removeClass('active');
                    $(this).addClass('active');
    
                    $(this).siblings('.accordionbody').slideToggle();
    
    
                });
    
    
                $(".btn_preview").click(function () {
                    var popupid = $(this).attr("data-pop-id");
                    var CandidateID = popupid.replace("Candidate_", "");
                    $("#" + popupid).fadeIn();
                    $("body").css('overflow', 'hidden');
                    $("#" + popupid).addClass("active");
    
    
                    $('.popback.active').bind('scroll', function () {
                        if ($(this).scrollTop() == 0) {
                            //$("#Top_Container").removeClass("fixed");
    
                        }
                    })
    
                    $('.popback.active').bind('scroll', function () {
                        if ($(this).scrollTop() > 300) {
                            //$("#Top_Container").addClass("fixed");
    
                        }
                    })
    
                    $.ajax({
                        type: 'POST',
                        url: '../Candidates.aspx/fn_UpdateCandidatePageViews',
                        data: '{"CandidateID" : "' + CandidateID + '"}',
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: true
                    });
    
                    return false;
                });
    
    
                $(".popback .cross").click(function () {
    
    
                    $(this).parents(".popback").fadeOut();
                    $("body").css('overflow', 'auto');
                    $(".popback.active").removeClass("active");
                    return false;
                });
    
                $("#VideoDiv .cross").click(function () {
    
    
                    $(this).parents(".popback").fadeOut();
                    // $('#VideoDiv .container').children('iframe').attr('src', '');
                    $('#VideoDiv .container').children('.bindiframe').html(" ");
                    $("body").css('overflow', 'auto');
                    $(".popback.active").removeClass("active");
                    return false;
                });
            });
    
    
            jQuery(function ($) {
                $('.popupscroll').bind('scroll', function () {
                    if ($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
    
                    }
                })
            });
    
            $("#Menu_Container a").click(function () {
    
                var Parent_div = "#CanddiateDetails";
                var Scroll_div = $(this).attr("href");
                var Scroll_pos = ($(Parent_div).scrollTop() + $(Scroll_div).offset().top - $(Parent_div).offset().top);
    
    
                $(Parent_div).animate({ scrollTop: Scroll_pos }, { duration: 'slow', easing: 'swing' });
    
                $("#Top_Container").addClass("fixed");
    
                return false;
            });
    
            function fn_ShowPayPopup(popupid) {
    
                var popup_container = $("#" + popupid).find(".popupcontainer");
    
                $("#" + popupid).fadeIn();
    
                $("#" + popupid).addClass("active");
    
                var Win_Height = $(window).height();
                var Pop_Height = $(popup_container).height();
    
                if (Pop_Height <= Win_Height) {
    
                    var TopPos = (Win_Height - Pop_Height) / 2;
                    $(popup_container).css("top", TopPos);
    
                }
                else {
    
                    $(popup_container).css("top", "50px");
                }
    
                return false;
            }
    
    
    
            $("#FacebookShare").click(function () {
    
    
                var left = (screen.width / 2) - (600 / 2);
                var top = (screen.height / 2) - (600 / 2);
                var fbLink = "https://m.facebook.com/sharer.php?u=https://www.bookmybai.com/";
                window.open(fbLink, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=600, top=' + top + ', left=' + left);
    
                var Source = window.location.href;
    
                $.ajax({
                    type: 'POST',
                    url: '../jQuery.aspx/fn_SaveFacebookShare',
                    data: '{"Source" : "' + Source + '"}',
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    async: true
                });
    
                return false;
    
            });
    
    
            $(".social-Share .facebook").click(function () {
    
                var ShareID = $(this).parent(".social-Share").attr("rel");
                var CandidateID = "#Candidate_" + ShareID;
                //var CandidateName = $(CandidateID + " h3.headingtext").html().replace(/ /g, "-");
                var left = (screen.width / 2) - (600 / 2);
                var top = (screen.height / 2) - (600 / 2);
                var fbLink = "https://www.facebook.com/sharer.php?m2w&s=100&p[url]=" + ShareID;
                window.open(fbLink, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=600, top=' + top + ', left=' + left);
    
    
                return false;
    
    
    
            });
    
    
    
            $(".social-Share .twitter").click(function () {
    
                var ShareID = $(this).parent(".social-Share").attr("rel");
                var CandidateID = "#Candidate_" + ShareID;
                // var CandidateName = $(CandidateID + " h3.headingtext").html().replace(/ /g, "-");
                var left = (screen.width / 2) - (600 / 2);
                var top = (screen.height / 2) - (600 / 2);
                var twitterLink = "https://twitter.com/intent/tweet?url=" + ShareID;
                window.open(twitterLink, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=600, top=' + top + ', left=' + left);
                return false;
    
    
    
            });
    
            $(".social-Share .gplus").click(function (e) {
                e.stopPropagation();
                var ShareID = $(this).parent(".social-Share").attr("rel");
                var CandidateID = "#Candidate_" + ShareID;
                //var CandidateName = $(CandidateID + " h3.headingtext").html().replace(/ /g, "-");
                var left = (screen.width / 2) - (600 / 2);
                var top = (screen.height / 2) - (600 / 2);
                var gplusLink = "https://plus.google.com/share?url=https://www.bookmybai.com/" + ShareID;
                window.open(gplusLink, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=600, top=' + top + ', left=' + left);
                return false;
    
            });
    
            $("#img_FacebookLike").fancylike({
                page_url: "https://www.bookmybai.com"
            });
    
            $(".btn_ReqtUrgencyTypes").click(function () {
    
                var iRequirementID = $(this).attr("rel");
                var Parent_Div = $(this).parent(".Container_Urgency");
    
                if (confirm("Are you sure you want to make your requirement urgent?") == true) {
    
                    $.ajax({
                        type: 'POST',
                        url: '../api/Requirements.aspx/fn_UrgencyTypes',
                        data: '{"iRequirementID" : "' + iRequirementID + '"}',
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        async: true,
                        success: function (data) {
                            var ResponseCode = data.d;
    
                            if (ResponseCode.indexOf("SUCCESS") >= 0) {
                                $(Parent_Div).hide();
                            }
                        }
                    });
                }
    
                return false;
    
            });
    
            $(document).ready(function () {
    
                var bDisplay_App = $("#hf_BookmybaiApp").val();
    
                if (bDisplay_App == "True") {
    
                    var MaidData_Counter = 0;
                    var BookmybaiApp_Url = "market://details?id=com.bookmybai.app";
                    var BookmybaiApp_Html = "<div class='Bookmybai_App'><a href='" + BookmybaiApp_Url + "'><img src='images/Bookmybai_App.jpg' alt='#'></a></div>";
    
                    $(".Container_MaidData").each(function () {
    
                        MaidData_Counter++;
    
                        if (MaidData_Counter % 3 == 0) {
    
                            $(this).after(BookmybaiApp_Html);
    
                        }
    
                    });
                }
    
            });
    
        </script>
            <div id="fb-root" class=" fb_reset">
                <div
                    style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
            <script>        (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
                fjs.parentNode.insertBefore(js, fjs);
            } (document, 'script', 'facebook-jssdk'));</script>

        </div>
    </body>
</html>