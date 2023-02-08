<div class="tab-pane fade" id="pills-stud-register" role="tabpanel" aria-labelledby="tab-register">
    <!-- action="./includes/studentRegister.inc.php" method="POST" -->
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" novalidate class="needs-validation">

        <!-- Name input -->
        <div class="mb-4">
            <label class="form-label" for="registerName" style="font-size: 1.3rem;color: black;">Name of the Applicant *</label>
            <input type="text" name="studName" id="registerName" pattern="^[a-zA-Z][a-zA-Z0-9-_\.\s]{5,}$" class="form-control" required />
            <div class="invalid-feedback">
                Enter valid username
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label" for="aadharStud" style="font-size: 1.3rem;color: black;">Aadhar number of student *</label>
            <input type="text" name="aadharStud" id="aadharStud" pattern="^[0-9]{12}$" class="form-control" required />
            <div class="invalid-feedback">
                Enter valid Aadhar Number
            </div>
        </div>

		<div class="mb-4 d-flex justify-content-center align-content-center">
			<button class="btn-lg btn-success">Generate OTP</button>

		</div>

		<div class="mb-4">
            <label class="form-label" for="otp" style="font-size: 1.3rem;color: black;">Enter OTP *</label>
            <input type="text" name="otp" id="otp" class="form-control" required />
            <div class="invalid-feedback">
                Enter valid OTP
            </div>
        </div>

		<div class="mb-4 d-flex justify-content-center align-content-center">
			<button class="btn-lg btn-success">Verify OTP</button>
		</div>

		<hr style="font-size: 3px;">
        <!-- Email input -->
        <div class="mb-4">
            <label class="form-label" for="registerEmail" style="font-size: 1.3rem;color: black;">Email *</label>
            <input type="email" name="studEmail" id="registerEmail" required class="form-control" required />
            <div class="invalid-feedback">
                Invalid email
            </div>
        </div>

        <!-- Phone input -->
        <div class="mb-4">
            <label class="form-label" for="registerPhone" style="font-size: 1.3rem;color: black;">Phone *</label>
            <input type="phone" name="studPhone" id="registerPhone" pattern="[0-9]{10}" class="form-control" required />
            <div class="invalid-feedback">
                Invalid Phone Number
            </div>
        </div>

        <!-- Gender input -->
        <div class="mb-4">
            <label for="genders" class="form-label" style="font-size: 1.3rem;color: black;">Gender *</label>
            <div class="row" id="genders">
                <div class="col-3">
                    <input class="form-check-input" value="male" type="radio" name="studGender" id="flexRadioMale" required>
                    <label class="form-check-label" for="flexRadioMale">Male</label>
                </div>
                <div class="col-3">
                    <input class="form-check-input" value="female" type="radio" name="studGender" id="flexRadioFemale">
                    <label class="form-check-label" for="flexRadioFemale">Female</label>
                </div>
                <div class="col-4">
                    <input class="form-check-input" value="others" type="radio" name="studGender" id="flexRadioOthers">
                    <label class="form-check-label" for="flexRadioOthers">Prefer Not Say</label>
                </div>
            </div>
        </div>

        <!-- College input -->
        <div class="mb-4">
            <label for="inputClg" class="form-label" style="font-size: 1.3rem;color: black;">College *</label>
            <input type="text" name="studClg" class="form-control" id="inputClg" placeholder="ABCD clg" required>
            <div class="invalid-feedback">
                Invalid College
            </div>
        </div>

        <!-- Address input -->
        <div class="mb-4">
            <label for="inputAddress" class="form-label" style="font-size: 1.3rem;color: black;">Address *</label>
            <input type="text" name="studAddress" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
                Invalid Address
            </div>
        </div>

        <!-- location input -->
        <div class="row mb-4">
        <div class="col-4">
                <label for="inputState" class="form-label" style="font-size: 1.3rem;color: black;">State *</label>
                <select id="inputState" name="studState" class="form-select" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
                <div class="invalid-feedback">
                    Select State
                </div>
            </div>
            <div class="col-4">
                <label for="inputCity" class="form-label" style="font-size: 1.3rem;color: black;">City *</label>
                <input type="text" name="studCity" class="form-control" id="inputCity" required>
                <div class="invalid-feedback">
                    City Required
                </div>
            </div>
            <div class="col-4">
                <label for="inputZip" class="form-label" style="font-size: 1.3rem;color: black;">Zip *</label>
                <input type="text" name="studZip" class="form-control" id="inputZip" required>
                <div class="invalid-feedback">
                    Zipcode Required
                </div>
            </div>
        </div>

        <!-- Category input -->
        <div class="row mb-4">
            <div class="col-4">
                <label for="inputCat" class="form-label" style="font-size: 1.3rem;color: black;">Category *</label>
                <select id="inputCat" name="studCategory" class="form-select" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="SC">SC</option>
                    <option value="SC Divyang">SC Divyang</option>
                </select>
                <div class="invalid-feedback">
                    Select Category
                </div>
            </div>
            <div class="col-8 my-1">
                <label for="formFile" class="form-label" style="font-size: 1.3rem;color: black;">Category Certificate *</label>
                <input class="form-control" name="studCatCertificate" type="file" id="formFile" required>
            </div>
            <div class="invalid-feedback">
                Document Required
            </div>
        </div>

        <div class="mb-4">
            <label for="certNum" class="form-label" style="font-size: 1.3rem;color: black;">Caste Certificate Number *</label>
            <input type="text" name="certNum" class="form-control" id="certNum" required>
            <div class="invalid-feedback">
                Enter valid certificate number
            </div>
        </div>

        <div class="mb-4">
                <label for="studTBI" class="form-label" style="font-size: 1.3rem;color: black;">Select TBI *</label>
                <select id="studTBI" name="studTBI" class="form-select" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="">Please Select</option>
		<option value="NIDHI-Technology Business Incubator (TBI)">NIDHI-Technology Business Incubator (TBI)</option>
		<option value="Aditya Global Business Incubator">Aditya Global Business Incubator</option>
		<option value="SPMVV Society for Innovation and Incubation Entrepreneurship (SSIIE)">SPMVV Society for Innovation and Incubation Entrepreneurship (SSIIE)</option>
		<option value="Society for Siddharth International Incubation Centre">Society for Siddharth International Incubation Centre</option>
		<option value="IIITD Innovation and Incubation Centre">IIITD Innovation and Incubation Centre</option>
		<option value="Pusa Technique Se Vyavsay (PUSA TAKSAY)">Pusa Technique Se Vyavsay (PUSA TAKSAY)</option>
		<option value="Indigram Labs Foundation - ILF">Indigram Labs Foundation - ILF</option>
		<option value="Shriram Institute – Technology Business Incubator">Shriram Institute – Technology Business Incubator (SRI-TBI)</option>
		<option value="IAN Mentoring and Incubation Services">IAN Mentoring and Incubation Services</option>
		<option value="Forum for Innovation Incubation Research and Entrepreneurship">Forum for Innovation Incubation Research and Entrepreneurship</option>
		<option value="Centre for Incubation and Business Acceleration">Centre for Incubation and Business Acceleration</option>
		<option value="Gujarat University Startup and Entrepreneurship Council (GUSEC)">Gujarat University Startup and Entrepreneurship Council (GUSEC)</option>
		<option value="NIDHI- Technology Business Incubator (TBI) - “ Association for Harnessing ">NIDHI- Technology Business Incubator (TBI) - “ Association for Harnessing Innovation and Entrepreneurship (ASHINE)”</option>
		<option value="CIIE Initiatives">CIIE Initiatives</option>
		<option value="Ahmedabad University Support Foundation (AUSF),">Ahmedabad University Support Foundation (AUSF),</option>
		<option value="NIF Incubation and Entrepreneurship Council (NIFientreC)">NIF Incubation and Entrepreneurship Council (NIFientreC)</option>
		<option value="NSIC- Technical Services Centre">NSIC- Technical Services Centre</option>
		<option value="Gujarat Foundation for Entrepreneurial">Gujarat Foundation for Entrepreneurial Excellence(GFEE-i create )</option>
		<option value="IIT Gandhinagar Innovation and Entrepreneurship Center">IIT Gandhinagar Innovation and Entrepreneurship Center</option>
		<option value="TBI - Centre for Advancing and Launching Enterprises (CrAdLE)">TBI - Centre for Advancing and Launching Enterprises (CrAdLE)</option>
		<option value="LEAF (Leadership Entrepreneurship and Acceleration Foundation) - GLS University Incubator">LEAF (Leadership Entrepreneurship and Acceleration Foundation) - GLS University Incubator</option>
		<option value="Comcubator">Comcubator</option>
		<option value="Society for Innovation &amp; Entrepreurship in Dairying (SINED) Technology Business Incubator">Society for Innovation &amp; Entrepreurship in Dairying (SINED) Technology Business Incubator</option>
		<option value="IIT Mandi Catalyst">IIT Mandi Catalyst</option>
		<option value="NIDHI- Technology Business Incubator (TBI) - Indian Institute of Integrative Medicine">NIDHI- Technology Business Incubator (TBI) - Indian Institute of Integrative Medicine-Technology Business Incubator ( IIIM-TBI) at</option>
		<option value="Shri Mata Vaishno Devi University Technology Business Incubator Center Society (SMVDU-TBIC)">Shri Mata Vaishno Devi University Technology Business Incubator Center Society (SMVDU-TBIC)</option>
		<option value="Indian Institute of Integrative Medicine-Technology Business Incubator(IIIM-TBI)">Indian Institute of Integrative Medicine-Technology Business Incubator(IIIM-TBI)</option>
		<option value="STEP-Birla Institute of Technology">STEP-Birla Institute of Technology</option>
		<option value="ARTI Lab Foundation">ARTI Lab Foundation</option>
		<option value="IKP EDEN NIDHI TBI, Bangalore">IKP EDEN NIDHI TBI, Bangalore</option>
		<option value="NIDHI-Technology Business Incubator (TBI) – Business Entrepreneurship and Start-up support">NIDHI-Technology Business Incubator (TBI) – Business Entrepreneurship and Start-up support through Technology in Horticulture (BESST-HORT)</option>
		<option value="National Design Business Incubator (NDBI) -Bengaluru">National Design Business Incubator (NDBI) -Bengaluru</option>
		<option value="NITK-STEP">NITK-STEP</option>
		<option value="Soceity for Development of Composites">Soceity for Development of Composites</option>
		<option value="International Centre for Innovation Technology Transfer and Entrepreneurship (IN-CITE)">International Centre for Innovation Technology Transfer and Entrepreneurship (IN-CITE)</option>
		<option value="Manipal University Technology Business Incubator">Manipal University Technology Business Incubator</option>
		<option value="Sri Jayachamarajendra College of Engineering –Science ">Sri Jayachamarajendra College of Engineering –Science &amp; Technology Entrepreneurs Park (SJCE-STEP)</option>
		<option value="Foundation for Sandboxstartup Initiatives">Foundation for Sandboxstartup Initiatives</option>
		<option value="Jain University Incubation Centre (JUincubator)">Jain University Incubation Centre (JUincubator)</option>
		<option value="BEC STEP (Bagalkot Engineering College- Science &amp; Technology Entrepreneur's Park)">BEC STEP (Bagalkot Engineering College- Science &amp; Technology Entrepreneur's Park)</option>
		<option value="E-Health TBI">E-Health TBI</option>
		<option value="Global Incubation Service (GINSERV)">Global Incubation Service (GINSERV)</option>
		<option value="DERBI Foundation">DERBI Foundation</option>
		<option value="KLE Technological University">KLE Technological University</option>
		<option value="Foundation for Innovation and Social Entrepreneurship,">Foundation for Innovation and Social Entrepreneurship,</option>
		<option value="TBI-NITC">TBI-NITC</option>
		<option value="Amrita Technology Business Incubator (Amrita TBI)">Amrita Technology Business Incubator (Amrita TBI)</option>
		<option value="SCTIMST-TIMed">SCTIMST-TIMed</option>
		<option value="Amal-Jyothi Rural Technologies Business Incubator(ARTBI)">Amal-Jyothi Rural Technologies Business Incubator(ARTBI)</option>
		<option value="CET-TBI">CET-TBI</option>
		<option value="IIMK LIVE, Indian Institute of Management, Kozhikode">IIMK LIVE, Indian Institute of Management, Kozhikode</option>
		<option value="Startup Village">Startup Village</option>
		<option value="TBI at National Institute of Technology,">TBI at National Institute of Technology,</option>
		<option value="Kerala Startup Mission (Formerly Technopark Technology Business Incubator)">Kerala Startup Mission (Formerly Technopark Technology Business Incubator)</option>
		<option value="NIDHI-Technology Business Incubator (TBI)- “ Innovation and Incubation Centre for Entrepreneurship (IICE)">NIDHI-Technology Business Incubator (TBI)- “ Innovation and Incubation Centre for Entrepreneurship (IICE)</option>
		<option value="Maulana Azad National Institute of Technology,">Maulana Azad National Institute of Technology,</option>
		<option value="MITPune Technology Business Incubator">MITPune Technology Business Incubator</option>
		<option value="TBI-Foundation for Innovation and Social Entrepreneurship (FISE)">TBI-Foundation for Innovation and Social Entrepreneurship (FISE)</option>
		<option value="NIDHI-Technology Business Incubator (TBI) –Symbiosis Centre for">NIDHI-Technology Business Incubator (TBI) –Symbiosis Centre for Entrepreneurship and Innovation (SCEI-TBI )</option>
		<option value="College of Engineering, Pune">College of Engineering, Pune</option>
		<option value="RiiDL (Research Innovation Incubation Design Labs)">RiiDL (Research Innovation Incubation Design Labs)</option>
		<option value="TBI – Research Innovation Incubation Design Laboratory Foundation (RiiDLF)">TBI – Research Innovation Incubation Design Laboratory Foundation (RiiDLF)</option>
		<option value="National Centre for Aerospace Innovation and Research (NCAIR)">National Centre for Aerospace Innovation and Research (NCAIR)</option>
		<option value="Science And Technology Park">Science And Technology Park</option>
		<option value="Society for Innovation and Entrepreneurship">Society for Innovation and Entrepreneurship</option>
		<option value="Entrepreneurship Development Center (Venture Center)Venture Center">Entrepreneurship Development Center (Venture Center)Venture Center</option>
		<option value="DKTE TBI">DKTE TBI</option>
		<option value="Centre For Incubation And Business Acceleration (CIBA)">Centre For Incubation And Business Acceleration (CIBA)</option>
		<option value="Zone Startups India (BIL-Ryerson Fututes Pvt Ltd.)">Zone Startups India (BIL-Ryerson Fututes Pvt Ltd.)</option>
		<option value="Mitcon Technology Business Incubation Centre (A Division of MITCON Consultancy &amp; Engg. Services Ltd.)">Mitcon Technology Business Incubation Centre (A Division of MITCON Consultancy &amp; Engg. Services Ltd.)</option>
		<option value="Sardar Patel Technology Business Incubator">Sardar Patel Technology Business Incubator</option>
		<option value="Mizoram University Incubation Centre">Mizoram University Incubation Centre</option>
		<option value="KIIT Technology Business Incubator">KIIT Technology Business Incubator</option>
		<option value="CU-TBI">CU-TBI</option>
		<option value="Science &amp; Techology Entrepreneur's Park">Science &amp; Techology Entrepreneur's Park</option>
		<option value="Science &amp; Technology Entrepreneurs' park">Science &amp; Technology Entrepreneurs' park</option>
		<option value="TBI-NITJ Technology Business Incubator,">TBI-NITJ Technology Business Incubator,</option>
		<option value="Society of Technology Business Incubator (IISERM)">Society of Technology Business Incubator (IISERM)</option>
		<option value="Startup Oasis Incubation Center">Startup Oasis Incubation Center</option>
		<option value="Indian Institute of Management Udaipur Incubation Center">Indian Institute of Management Udaipur Incubation Center</option>
		<option value="MNIT Innovation and Incubation Center (MIIC)">MNIT Innovation and Incubation Center (MIIC)</option>
		<option value="Pilani Innovation and Entrepreneurship Development Society">Pilani Innovation and Entrepreneurship Development Society</option>
		<option value="NIDHI-Technology Business Incubator (TBI)- “Foundation for Innovation and Research-SASTRA TBI SASTRA TBI”">NIDHI-Technology Business Incubator (TBI)- “Foundation for Innovation and Research-SASTRA TBI SASTRA TBI”</option>
		<option value="IITM Incubation Cell">IITM Incubation Cell</option>
		<option value="Tiruchirappalli Regional Engineering College - Science and Technology Entrepreneurs Park (TREC-STEP)">Tiruchirappalli Regional Engineering College - Science and Technology Entrepreneurs Park (TREC-STEP)</option>
		<option value="VIT-Technology Business Incubator (VITTBI)">VIT-Technology Business Incubator (VITTBI)</option>
		<option value="Technology Business Incubator (TBI) - Agribusiness Incubation Society (ABIS)">Technology Business Incubator (TBI) - Agribusiness Incubation Society (ABIS)</option>
		<option value="Villgro Innovations Foundation">Villgro Innovations Foundation</option>
		<option value="Sathyabama University - Technology Business Incubator">Sathyabama University - Technology Business Incubator</option>
		<option value="Vel Tech Technology Incubator (Vel Tech TBI)">Vel Tech Technology Incubator (Vel Tech TBI)</option>
		<option value="Incubating IoT Dreams , CIET-TBIS">Incubating IoT Dreams , CIET-TBIS</option>
		<option value="Coimbatore Innovation and Business Incubator (CIBI)">Coimbatore Innovation and Business Incubator (CIBI)</option>
		<option value="Periyar Technology Business Incubator">Periyar Technology Business Incubator</option>
		<option value="St.Peter's Engineering College - Technology Business Incubator">St.Peter's Engineering College - Technology Business Incubator</option>
		<option value="Technology Business Incubator">Technology Business Incubator</option>
		<option value="PSG CT - Science &amp; Technology Entrepreneurial Park(PSG - STEP)">PSG CT - Science &amp; Technology Entrepreneurial Park(PSG - STEP)</option>
		<option value="BAIT-TBI (Bannari Amman Institute of Technology - Technology Business Incubator)">BAIT-TBI (Bannari Amman Institute of Technology - Technology Business Incubator)</option>
		<option value="Development of Entrepreuners Through Incubation (DETI@ACE)">Development of Entrepreuners Through Incubation (DETI@ACE)</option>
		<option value="Thiagarajar College of Engineering - Technology Business Incubator (TCE-TBI )">Thiagarajar College of Engineering - Technology Business Incubator (TCE-TBI )</option>
		<option value="Technology Business Incubator">Technology Business Incubator</option>
		<option value="Nanotechnology Research, Innovation and Incubation Centre (NRIIC)">Nanotechnology Research, Innovation and Incubation Centre (NRIIC)</option>
		<option value="TBI- MaDeIT Innovation Foundation">TBI- MaDeIT Innovation Foundation</option>
		<option value="IITMS Rural Technology and Business Incubator (RTBI)">IITMS Rural Technology and Business Incubator (RTBI)</option>
		<option value="Technology Business Incubator @ Kongu Engineering College (TBI@KEC)">Technology Business Incubator @ Kongu Engineering College (TBI@KEC)</option>
		<option value="NIDHI- Technology Business Incubator (TBI) – “SR Foundation”">NIDHI- Technology Business Incubator (TBI) – “SR Foundation”</option>
		<option value="NIDHI- Technology Business Incubator (TBI) - “Nesting Incubation and Entrepreneurship for Leveraging Agri-innovations in Nutricereals (NIELAN)”">NIDHI- Technology Business Incubator (TBI) - “Nesting Incubation and Entrepreneurship for Leveraging Agri-innovations in Nutricereals (NIELAN)”</option>
		<option value="i-TIC Foundation, IIT Hyderabad Technology Business Incubator">i-TIC Foundation, IIT Hyderabad Technology Business Incubator</option>
		<option value="IIIT-H Foundation (International Institute of Information Technology-Hyderabad Foundation)(Formerly known as Banyan Intellectual Initiatives)">IIIT-H Foundation (International Institute of Information Technology-Hyderabad Foundation)(Formerly known as Banyan Intellectual Initiatives)</option>
		<option value="TBI@UoH,Technology Business Incubator">TBI@UoH,Technology Business Incubator</option>
		<option value="IKP Life Science Incubator (IKP-LSI)">IKP Life Science Incubator (IKP-LSI)</option>
		<option value="DLabs Incubator Association">DLabs Incubator Association</option>
		<option value="Agri Business Incubator">Agri Business Incubator</option>
		<option value="Association for Innovation Development of Entrepreneurship in Agriculture (a-IDEA)">Association for Innovation Development of Entrepreneurship in Agriculture (a-IDEA)</option>
		<option value="JSSATE-STEP, Noida">JSSATE-STEP, Noida</option>
		<option value="Malaviya Centre for Innovation,">Malaviya Centre for Innovation,</option>
		<option value="SIDBI – Innovation &amp; Incubation Centre (SIIC)">SIDBI – Innovation &amp; Incubation Centre (SIIC)</option>
		<option value="Amity Innovation Incubator">Amity Innovation Incubator</option>
		<option value="HBTI-STEP ( Harcourt Butler Technological Institute)">HBTI-STEP ( Harcourt Butler Technological Institute)</option>
		<option value="Technology Business Incubator-KIET">Technology Business Incubator-KIET</option>
		<option value="Shreetron IT UPVAN Society">Shreetron IT UPVAN Society</option>
		<option value="Technology Business Incubator, Graphic ERA University (TBI-GEU)">Technology Business Incubator, Graphic ERA University (TBI-GEU)</option>
		<option value="TIDES Centre">TIDES Centre</option>
		<option value="Science and Technology Entrepreneurs' Park, IIT Kharagpur">Science and Technology Entrepreneurs' Park, IIT Kharagpur</option>
		<option value="Ekta Incubation Centre">Ekta Incubation Centre</option>
		<option value="Tagore Centre for Green Technology Business Incubation">Tagore Centre for Green Technology Business Incubation</option>
		<option value="IIM Calcutta Innovation Park (IIP)">IIM Calcutta Innovation Park (IIP)</option>
		<option value="&quot;CIIE" initiatives="">CIIE Initiatives</option>
		<option value="Entrepreneurship Development Center - Venture Center">Entrepreneurship Development Center - Venture Center</option>
		<option value="Society for Innovation and Entrepreneurship (SINE)">Society for Innovation and Entrepreneurship (SINE)</option>
		<option value="KIIT Technology Business Incubator">KIIT Technology Business Incubator</option>
		<option value="PSG CT - Science and Technology Entrepreneurial Park (PSG - STEP)">PSG CT - Science and Technology Entrepreneurial Park (PSG - STEP)</option>
		<option value="Vel Tech Technology Incubator">Vel Tech Technology Incubator</option>
		<option value="Foundation for Innovation and Technology Transfer (FITT) Indian Institute of Technology, Delhi">Foundation for Innovation and Technology Transfer (FITT) Indian Institute of Technology, Delhi</option>
		<option value="IIT Gandhinagar Research Park">IIT Gandhinagar Research Park</option>
		<option value="National Centre for Aerospace Innovation and Research (NCAIR)">National Centre for Aerospace Innovation and Research (NCAIR) </option>
		<option value="CIIE Initiatives">CIIE Initiatives</option>
		<option value="Association for Harnessing Innovation and Entrepreneurship - SVNIT, Surat">Association for Harnessing Innovation and Entrepreneurship - SVNIT, Surat</option>
		<option value="CIIE Initiatives">CIIE Initiatives</option>
		<option value="IIT Gandhinagar Innovation and Entrepreneurship Center">IIT Gandhinagar Innovation and Entrepreneurship Center</option>
		<option value="National Design Business Incubator, Ahmedabad">National Design Business Incubator, Ahmedabad</option>
		<option value="IIT Mandi Catalyst">IIT Mandi Catalyst</option>
		<option value="NITK-STEP">NITK-STEP </option>
		<option value="IIMK LIVE (Laboratory for Innovation, Venturing and Entrepreneurship)">IIMK LIVE (Laboratory for Innovation, Venturing and Entrepreneurship)</option>
		<option value="SCTIMST-TIMed">SCTIMST-TIMed</option>
		<option value="TBI- NIT Calicut">TBI- NIT Calicut</option>
		<option value="Innovation and Incubation Centre for Entrepreneurship (IICE)">Innovation and Incubation Centre for Entrepreneurship (IICE)</option>
		<option value="Maulana Azad National Institute of Technology (MANIT)">Maulana Azad National Institute of Technology (MANIT)</option>
		<option value="Society for Innovation and Entrepreneurship (SINE)">Society for Innovation and Entrepreneurship (SINE)</option>
		<option value="Foundation for Technology and Business Incubation">Foundation for Technology and Business Incubation</option>
		<option value="Indian Institute of Technology, Ropar">Indian Institute of Technology, Ropar</option>
		<option value="Society for Technology Business Incubator, Mohali (TBI-IISERM)">Society for Technology Business Incubator, Mohali (TBI-IISERM)</option>
		<option value="IIM Udaipur Incubation Centre">IIM Udaipur Incubation Centre</option>
		<option value="MNIT Innovation and Incubation Center (MIIC)">MNIT Innovation and Incubation Center (MIIC)</option>
		<option value="IITM INCUBATION CELL">IITM INCUBATION CELL</option>
		<option value="IITMS Rural Technology and Business Incubator (RTBI)">IITMS Rural Technology and Business Incubator (RTBI)</option>
		<option value="MaDeIT Innovation Foundation">MaDeIT Innovation Foundation</option>
		<option value="TREC-STEP (Tiruchirappalli Regional Engineering College - Science and Technology Entrepreneurs Park - NIT Tirchy)">TREC-STEP (Tiruchirappalli Regional Engineering College - Science and Technology Entrepreneurs Park - NIT Tirchy)</option>
		<option value="i-TIC Foundation IIT Hyderabad">i-TIC Foundation IIT Hyderabad</option>
		<option value="Foundation for Innovation and Research in Science and Technology">Foundation for Innovation and Research in Science and Technology</option>
		<option value="Malaviya Centre for Innovation, Incubation &amp; Entrepreneurship - IIT BHU">Malaviya Centre for Innovation, Incubation &amp; Entrepreneurship - IIT BHU</option>
		<option value="FIED - IIM Kashipur">FIED - IIM Kashipur</option>
		<option value="TIEDS - IIT Roorkee">TIEDS - IIT Roorkee</option>
		<option value="IIM Calcutta, Innovation Park">IIM Calcutta, Innovation Park</option>
		<option value="Tagore Centre for Green Technology Business Incubation">Tagore Centre for Green Technology Business Incubation </option>
		<option value="Science and Technology Entrepreneurs Park - IIT Kharagpur">Science and Technology Entrepreneurs' Park - IIT Kharagpur</option>
		<option value="Technology Incubation and Entrepreneurship Training Society">Technology Incubation and Entrepreneurship Training Society</option>
		<option value="L-Incubator, IIM Lucknow">L-Incubator, IIM Lucknow</option>
		<option value="NITRR Innovation and Entrepreneurship Park - NIEP, Raipur">NITRR Innovation and Entrepreneurship Park - NIEP, Raipur</option>
		<option value="Foundation for Innovation and Technology Transfer (FITT) Indian Institute of Technology, Delhi">Foundation for Innovation and Technology Transfer (FITT) Indian Institute of Technology, Delhi,</option>
		<option value="Foundation for Innovators in Science and Technology - Indian Institute of Technology Patna">Foundation for Innovators in Science and Technology - Indian Institute of Technology Patna</option>
		<option value="IIITD Innovation &amp; Incubation Center">IIITD Innovation &amp; Incubation Center</option>
		<option value="Indigram Labs Foundation">Indigram Labs Foundation</option>
		<option value="IGDTUW – Anveshan Foundation, Indra Gandhi Technical University for Women">IGDTUW – Anveshan Foundation, Indra Gandhi Technical University for Women</option>
		<option value="IAN Mentoring and Incubation Services">IAN Mentoring and Incubation Services</option>
		<option value="Pusa Technique Se Vyavsay (PUSA TAKSAY) - PUSA KRISHI - Indian Agricultural Research">Pusa Technique Se Vyavsay (PUSA TAKSAY) - PUSA KRISHI - Indian Agricultural Research</option>
		<option value="Institute (ICAR-IARI)">Institute (ICAR-IARI)</option>
		<option value="Shri Ram Institute -TBI">Shri Ram Institute -TBI</option>
		<option value="University of Delhi -South Campus TBI">University of Delhi -South Campus TBI</option>
		<option value="Centre for Incubation and Business Acceleration (CIBA)">Centre for Incubation and Business Acceleration (CIBA)</option>
		<option value="Forum for Innovation Incubation Research and Entrepreneurship">Forum for Innovation Incubation Research and Entrepreneurship</option>
		<option value="GFEE-i create">GFEE-i create</option>
		<option value="CrAdLE (Centre for Advancing and Launching Enterprises)">CrAdLE (Centre for Advancing and Launching Enterprises)</option>
		<option value="Gujarat University Startup and Entrepreneurship Council (GUSEC)">Gujarat University Startup and Entrepreneurship Council (GUSEC)</option>
		<option value="Indian Institute of Public Health - NIDHI TBI">Indian Institute of Public Health - NIDHI TBI</option>
		<option value="Leaf GLS University Incubator">Leaf GLS University Incubator</option>
		<option value="Comcubator">Comcubator</option>
		<option value="NIF Incubation and Entrepreneurship Council (NIFientreC)">NIF Incubation and Entrepreneurship Council (NIFientreC)</option>
		<option value="NSIC- Technical Services Centre AJI Industrial Estate">NSIC- Technical Services Centre AJI Industrial Estate</option>
		<option value="Venture Studio">Venture Studio</option>
		<option value="Entrepreneurship Promotion and Incubation Council">Entrepreneurship Promotion and Incubation Council</option>
		<option value="Society for Innovation &amp; Entrepreurship in Dairying (SINED) Technology Business Incubator">Society for Innovation &amp; Entrepreurship in Dairying (SINED) Technology Business Incubator</option>
		<option value="IIIM-Technology Business Incubator (TBI)">IIIM-Technology Business Incubator (TBI)</option>
		<option value="Shri Mata Vaishno Devi University - Technology Business Incubation Center">Shri Mata Vaishno Devi University - Technology Business Incubation Center</option>
		<option value="ARTILAB FOUNDATION">ARTILAB FOUNDATION</option>
		<option value="BESST-HORT (Business Entrepreneurship Startup Support through Technologies in Horticulture)">BESST-HORT (Business Entrepreneurship Startup Support through Technologies in Horticulture)</option>
		<option value="BVVS BEC STEP">BVVS BEC STEP</option>
		<option value="Dayananda Sagar Entrepreneurship Research and Business Incubation (DERBI) Foundation - Dayananda Sagar College of Engineering">Dayananda Sagar Entrepreneurship Research and Business Incubation (DERBI) Foundation - Dayananda Sagar College of Engineering</option>
		<option value="Foundation for Innovation and Social Entrepreneurship, Social Alpha">Foundation for Innovation and Social Entrepreneurship, Social Alpha</option>
		<option value="Global Incubation Services">Global Incubation Services</option>
		<option value="IKP EDEN NIDHI TBI">IKP EDEN NIDHI TBI</option>
		<option value="Jain University Incubation Centre">Jain University Incubation Centre</option>
		<option value="JSSATE-SCIENCE &amp; TECHNOLOGY ENTREPRENEURS PARK BANGALORE">JSSATE-SCIENCE &amp; TECHNOLOGY ENTREPRENEURS PARK BANGALORE</option>
		<option value="KLE-CTIE">KLE-CTIE</option>
		<option value="Manipal University Technology Business Incubator">Manipal University Technology Business Incubator</option>
		<option value="Mazumdar Shaw Medical Foundation">Mazumdar Shaw Medical Foundation</option>
		<option value="National Design Business Incubator - National Institute of Design, Bangalore">National Design Business Incubator - National Institute of Design, Bangalore</option>
		<option value="E-Health TBI - PES School of Engineering">E-Health TBI - PES School of Engineering</option>
		<option value="Soceity for Development of Composites (composites technology park)">Soceity for Development of Composites (composites technology park)</option>
		<option value="SJCE-STEP, JSS Technical Institutions Campus">SJCE-STEP, JSS Technical Institutions Campus</option>
		<option value="Technovate India Innovations">Technovate India Innovations</option>
		<option value="Foundations for Sandbox Startup Initiatives  - Despande Startups">Foundations for Sandbox Startup Initiatives  - Despande Startups</option>
		<option value="Amrita Technology Business Incubator">Amrita Technology Business Incubator</option>
		<option value="CET TBI">CET TBI</option>
		<option value="Startup Village - SV.co - Indian Telecom Innovation Hub - Technology Business Incubator">Startup Village - SV.co - Indian Telecom Innovation Hub - Technology Business Incubator</option>
		<option value="Startups Valley">Startups Valley</option>
		<option value="Technopark Technology Business Incubator ( Kerala Startup Mission)">Technopark Technology Business Incubator ( Kerala Startup Mission)</option>
		<option value="BIL-Ryerson Technology Startup Incubator Foundation">BIL-Ryerson Technology Startup Incubator Foundation</option>
		<option value="Centre for Incubation and Business Acceleration (CIBA)">Centre for Incubation and Business Acceleration (CIBA)</option>
		<option value="COEP's Bhau Institute of Innovation Entrepreneurship and Leadership">COEP's Bhau Institute of Innovation Entrepreneurship and Leadership</option>
		<option value="DKTE Technology Business Incubation">DKTE Technology Business Incubation</option>
		<option value="Entrepreneurship Development Center - Venture Center">Entrepreneurship Development Center - Venture Center</option>
		<option value="G H Raisoni Technology Business Incubator Foundation">G H Raisoni Technology Business Incubator Foundation</option>
		<option value="MIT TBI Pune">MIT TBI Pune </option>
		<option value="MITCON Technology Business Incubator">MITCON Technology Business Incubator</option>
		<option value="National Centre for Aerospace Innovation and Research (NCAIR)">National Centre for Aerospace Innovation and Research (NCAIR)</option>
		<option value="Research Innovation Incubation Design Laboratory Foundation">Research Innovation Incubation Design Laboratory Foundation</option>
		<option value="Sardar Patel Technology Business Incubator">Sardar Patel Technology Business Incubator</option>
		<option value="Science and Technology Park University of Pune">Science and Technology Park University of Pune</option>
		<option value="Symbiosis Centre for Entrepreneurship  and Innovation, Pune">Symbiosis Centre for Entrepreneurship  and Innovation, Pune</option>
		<option value="VJTI Technology Business Incubator">VJTI Technology Business Incubator</option>
		<option value="Mizoram University Incubation Center">Mizoram University Incubation Center</option>
		<option value="KIIT Technology Business Incubator">KIIT Technology Business Incubator</option>
		<option value="TBI-NITJ Technology Business Incubator">TBI-NITJ Technology Business Incubator</option>
		<option value="Chandigarh University">Chandigarh University</option>
		<option value="STEP, TIET, PATIALA">STEP, TIET, PATIALA</option>
		<option value="STEP- Science and Technology Entrepreneurs Park">STEP- Science and Technology Entrepreneurs Park</option>
		<option value="Startup Oasis">Startup Oasis</option>
		<option value="Pilani Innovation and Entrepreneurship Development Society">Pilani Innovation and Entrepreneurship Development Society</option>
		<option value="ABIS-Technology Business Incubator">ABIS-Technology Business Incubator</option>
		<option value="Development of Entrepreuners Through Incubation (DETI@ACE)">Development of Entrepreuners Through Incubation (DETI@ACE)</option>
		<option value="Technology Business Incubator Centre for Biotechnology - Anna University">Technology Business Incubator Centre for Biotechnology - Anna University</option>
		<option value="Bannari Amman Institute of Technology-Technology Business incubator (BIT-TBI)">Bannari Amman Institute of Technology-Technology Business incubator (BIT-TBI)</option>
		<option value="Forge Incubator - Coimbatore Innovation and Business Incubator (CIBI)">Forge Incubator - Coimbatore Innovation and Business Incubator (CIBI)</option>
		<option value="Coimbator Institute od Engineering and Technology Business Incubator Society">Coimbator Institute od Engineering and Technology Business Incubator Society</option>
		<option value="Foundation for Innovation &amp; Research at SASTRA - TBI">Foundation for Innovation &amp; Research at SASTRA - TBI</option>
		<option value="Nehru Group of Institutions Technology Business Incubator">Nehru Group of Institutions Technology Business Incubator</option>
		<option value="Periyar Technology Business Incubator">Periyar Technology Business Incubator</option>
		<option value="PSG CT - Science and Technology Entrepreneurial Park (PSG - STEP)">PSG CT - Science and Technology Entrepreneurial Park (PSG - STEP)</option>
		<option value="Nanotechnology Research, Innovation and Incubation Centre (NRIIC)">Nanotechnology Research, Innovation and Incubation Centre (NRIIC)</option>
		<option value="PSG CT - Science and Technology Entrepreneurial Park (PSG - STEP)">PSG CT - Science and Technology Entrepreneurial Park (PSG - STEP)</option>
		<option value="Society of Sathyabama University - Technology Business Incubator">Society of Sathyabama University - Technology Business Incubator</option>
		<option value="St.Peter's Engineering College - Technology Business Incubator">St.Peter's Engineering College - Technology Business Incubator</option>
		<option value="TCE- Technology Business Incubator (TCE-TBI)">TCE- Technology Business Incubator (TCE-TBI)</option>
		<option value="Technology Business Incubator (TBI)  - University of Madras">Technology Business Incubator (TBI)  - University of Madras</option>
		<option value="Technology Business Incubator @ Kongu Engineering College (TBI@KEC)">Technology Business Incubator @ Kongu Engineering College (TBI@KEC)</option>
		<option value="Vel Tech Technology Incubator">Vel Tech Technology Incubator</option>
		<option value="Vellore Institute of Technology-Technology Business Incubator (VITTBI)">Vellore Institute of Technology-Technology Business Incubator (VITTBI)</option>
		<option value="Villgro Innovations Foundation">Villgro Innovations Foundation</option>
		<option value="A-IDEA (Association for Innovation and Development of Entrepreneurship in Agriculture">A-IDEA (Association for Innovation and Development of Entrepreneurship in Agriculture</option>
		<option value="Agri-Business Incubator of ICRISAT">Agri-Business Incubator of ICRISAT</option>
		<option value="ASPIRE- Technology Business Incubator - University of Hyderabad">ASPIRE- Technology Business Incubator - University of Hyderabad</option>
		<option value="BITS Pilani, Hyderabad Campus TBI Society">BITS Pilani, Hyderabad Campus TBI Society</option>
		<option value="DLabs Incubator Association">DLabs Incubator Association</option>
		<option value="IKP Knowledge ParkIKP Life Science Incubator (IKP-LSI)">IKP Knowledge ParkIKP Life Science Incubator (IKP-LSI)</option>
		<option value="NIDHI- Technology Business Incubator (TBI) - Nesting Incubation and Entrepreneurship for Leveraging Agri-innovations in Nutricereals (NIELAN)">NIDHI- Technology Business Incubator (TBI) - Nesting Incubation and Entrepreneurship for Leveraging Agri-innovations in Nutricereals (NIELAN)</option>
		<option value="International Advanced Research Centre">International Advanced Research Centre</option>
		<option value="International Institute of Information Technology - Hyderabad Foundation">International Institute of Information Technology - Hyderabad Foundation</option>
		<option value="SR FOUNDATION">SR FOUNDATION</option>
		<option value="Amity Technology Incubator">Amity Technology Incubator</option>
		<option value="HBIT - STEP - Harcourt Butler Technological Institute">HBIT - STEP - Harcourt Butler Technological Institute</option>
		<option value="JSS ATE STEP">JSS ATE STEP</option>
		<option value="Krishna Path Incubation Society- TBI KIET">Krishna Path Incubation Society- TBI KIET</option>
		<option value="Shreetron IT UPVAN Society">Shreetron IT UPVAN Society</option>
		<option value="Technology Business Incubator, Graphic ERA University (TBI-GEU)">Technology Business Incubator, Graphic ERA University (TBI-GEU)</option>
		<option value="EKTA Incubation Centre -Maulana Abul Kalam Azad University of Technology, WB">EKTA Incubation Centre -Maulana Abul Kalam Azad University of Technology, WB</option>
		<option value="Andhra Technology Business Incubation Center">Andhra Technology Business Incubation Center</option>
		<option value="Vishnu Foundation">Vishnu Foundation</option>
		<option value="Nirma University TBI">Nirma University TBI</option>
		<option value="Himachal Pradesh STEP">Himachal Pradesh STEP</option>
		<option value="STEP-Birla Institute of Technology, Mesra Ranchi">STEP-Birla Institute of Technology, Mesra Ranchi</option>
		<option value="Aditya Global Business Incubator">Aditya Global Business Incubator</option>
		<option value="Society for Siddharth International Incubation Center">Society for Siddharth International Incubation Center</option>
		<option value="Society for Innovation Incubation Entrepreneruship - SSIIE-SPMVV">Society for Innovation Incubation Entrepreneruship - SSIIE-SPMVV</option>
		<option value="others">Others</option>
                </select>
                <div class="invalid-feedback">
                    Select TBI
                </div>
        </div>

        <!-- Password input -->
        <div class="mb-4">
            <label class="form-label" for="registerPassword" style="font-size: 1.3rem;color: black;">Password *</label>
            <input type="password" name="studPwd" id="registerPassword" class="form-control" required />
            <div class="invalid-feedback">
                Password must contain upperCase, lowerCase, number/specialchar and min 8 chars
            </div>
        </div>

        <!-- Repeat Password input -->
        <div class="mb-4">
            <label class="form-label" for="registerRepeatPassword" style="font-size: 1.3rem;color: black;">Repeat password *</label>
            <input type="password" name="studPwdRep" id="registerRepeatPassword" class="form-control" required />
        </div>


        <!-- Submit button -->
        <button type="submit" name="studRegister" class="btn btn-primary btn-block mb-3" style="background: linear-gradient(90deg, rgba(55,59,68,1) 0%, rgba(66,134,244,1) 100%); font-size:1.5rem;">Register</button>
        <div class="text-center">
            <p>Already Registered? Login</p>
        </div>
    </form>
</div>


<?php

include("./includes/dbcon.inc.php");

if (isset($_POST["studRegister"])) {

    $aadharStud = $_POST["aadharStud"];
	$studName = mysqli_real_escape_string($con, $_POST["studName"]);
    $certNum = $_POST["certNum"];

    $verify = "SELECT * FROM scdatabase WHERE certificate_id ='$certNum' ";
    $verifyQuery = mysqli_query($con, $verify);
    $aid = mysqli_fetch_array($verifyQuery);

    if ($aid["Aadhar_id"] == $aadharStud && $aid["name"] == $studName) {

        
        $studEmail = mysqli_real_escape_string($con, $_POST["studEmail"]);
        $studPhone = mysqli_real_escape_string($con, $_POST["studPhone"]);
        $studGender = mysqli_real_escape_string($con, $_POST["studGender"]);
        $studAddress = mysqli_real_escape_string($con, $_POST["studAddress"]);
        $studClg = mysqli_real_escape_string($con, $_POST["studClg"]);
        $studCity = mysqli_real_escape_string($con, $_POST["studCity"]);
        $studState = mysqli_real_escape_string($con, $_POST["studState"]);
        $studZip = mysqli_real_escape_string($con, $_POST["studZip"]);
        $studCategory = mysqli_real_escape_string($con, $_POST["studCategory"]);
        $studPwd = mysqli_real_escape_string($con, $_POST["studPwd"]);
		$studTBI = mysqli_real_escape_string($con, $_POST["studTBI"]);
        $studPwdRep = mysqli_real_escape_string($con, $_POST["studPwdRep"]);
        $studCatCertificate = $_FILES["studCatCertificate"];

        $filename = $studCatCertificate['name'];
        $filepath = $studCatCertificate['tmp_name'];
        $fileerror = $studCatCertificate['error'];

        if ($fileerror == 0) {

            $curdir = getcwd();
            if (!file_exists($curdir . "/uploads/category-certificates/" . $studEmail))
                mkdir($curdir . "/uploads/category-certificates/" . $studEmail, 0770, true);

            $destpath = 'uploads/category-certificates/' . $studEmail . '/' . $filename;
            move_uploaded_file($filepath, $destpath);

            if ($studPwd === $studPwdRep) {
                $stdPwdHash = password_hash($studPwd, PASSWORD_BCRYPT);

                $emailExist = " select * from students where email='$studEmail' ";
                $emailExistQuery = mysqli_query($con, $emailExist);
                $emailCount = mysqli_num_rows($emailExistQuery);

                if ($emailCount > 0) {
                    ?>
                    <script>
                        swal("Email already exists!!", "Try again with differrent email", "warning");
                    </script>
                    <?php
                } 
                else {
                    $insert = " insert into students(name,email,phone,gender,clg,address,city,state,zip,category,certificate,tbi,pwd,status) values('$studName','$studEmail','$studPhone','$studGender','$studClg','$studAddress','$studCity','$studState','$studZip','$studCategory','$destpath','$studTBI','$stdPwdHash','active') ";
                    $insertQuery = mysqli_query($con, $insert);
                    if ($insertQuery) {
                    ?>
                        <script>
                            swal("Good Job!", "Account successfully created", "success");
                        </script>
                    <?php
                    }
                    else {
                        ?>
                        <script>
                            swal("Error!!", "Something Went Wrong", "error");
                        </script>
                        <?php
                    }
                }
            } 
            else {
                ?>
                <script>
                    swal("Error", "Passwords do not match", "info");
                </script>
                <?php
            }
        } 
        else {
            ?>
            <script>
                swal("Error!!", "Unable to process the document", "error");
            </script>
            <?php
        }
    } 
    else {
        ?>
        <script>
            swal("Error!!", "Details does not match", "error");
        </script>
        <?php
    }
}

?>