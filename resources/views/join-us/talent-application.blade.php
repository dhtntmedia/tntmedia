@extends('layouts.main')

@section('content')
    <div class="header">
        <div class="nav">
            <a href="/" class="nav-logo link w-inline-block">
                <img src="https://assets-global.website-files.com/5fa11be351a3e7485facb4bc/5fb40922a3a4e482786a5397_Tokyo%2BLogo_2021.svg" alt="Tokyo" class="logo__image" />
            </a>
            <div class="nav-links">
                <a href="/contact?startaproject" class="text__r link cta">Start a project</a>
                <div class="nav-menu open-menu">
                    <a href="#" class="text__r link">Menu</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section wf-section">
        <div class="container">
            <h1 class="text__xxl">Talent application</h1>
            <div class="formblock w-form">
                <form id="wf-form-Freelancer-Application" name="wf-form-Freelancer-Application" data-name="Freelancer Application" redirect="/thank-you/talent-application" data-redirect="/thank-you/talent-application" class="contactform">
                    <p class="text__l form-intro">We&#x27;re always looking for digital talent to join our team (permanent + freelance). Submit some details below, tell us a bit about you and show us your best work. <br />
                    </p>
                    <div class="scroll-trigger">
                        <div class="text__s overline">1 of 2</div>
                        <h2 class="text__xl">About you</h2>
                        <div class="contactform__grid">
                            <div id="w-node-_9f5d708f-5c26-e4ae-d029-22dc239f0e08-8ab08cad" class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="name">Full Name</label>
                                </div>
                                <input type="text" class="contactform__textfield text__l w-input" maxlength="256" name="Name" data-name="Name" placeholder="Your full name" id="name" required="" />
                            </div>
                            <div id="w-node-_9f5d708f-5c26-e4ae-d029-22dc239f0e0b-8ab08cad" class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="email">Email</label>
                                </div>
                                <input type="email" class="contactform__textfield text__l w-input" maxlength="256" name="Email" data-name="Email" placeholder="Your email address" id="email" required="" />
                            </div>
                            <div id="w-node-_9f5d708f-5c26-e4ae-d029-22dc239f0e0e-8ab08cad" class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="phone">Phone (include country code e.g. +44)</label>
                                </div>
                                <input type="text" class="contactform__textfield text__l w-input" maxlength="256" name="Phone" data-name="Phone" placeholder="Your phone number" id="phone" required="" />
                            </div>
                            <div id="w-node-_9f5d708f-5c26-e4ae-d029-22dc239f0e11-8ab08cad" class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="country">Country</label>
                                </div>
                                <select id="country" name="Country" data-name="Country" required="" class="contactform__textfield text__l dropdown w-select">
                                    <option value="">Select your country...</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Bassas da India">Bassas da India</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burma">Burma</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote d&#x27;Ivoire">Cote d&#x27;Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Dhekelia">Dhekelia</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, North">Korea, North</option>
                                    <option value="Korea, South">Korea, South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">Svalbard</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div id="w-node-_9f5d708f-5c26-e4ae-d029-22dc239f0e14-8ab08cad" class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="linkedin-profile-url">LinkedIn Profile URL (optional)</label>
                                </div>
                                <input type="text" class="contactform__textfield text__l w-input" maxlength="256" name="Linkedin-Profile-Url" data-name="Linkedin Profile Url" placeholder="Your LinkedIn URL" id="linkedin-profile-url" />
                            </div>
                            <div id="w-node-_98a938e1-e82c-2ed1-7995-b00d5c18a84e-8ab08cad" class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="cv">CV Upload (doc, pdf, txt)</label>
                                </div>
                                <div class="file-upload w-file-upload">
                                    <div class="fileupload-state w-file-upload-default">
                                        <input type="file" required="" id="CV" name="CV" data-name="CV" accept=".ai, .doc, .docx, .indd, .key, .numbers, .pps, .ppt, .pptx, .psd, .ods, .odt, .odp, .pages, .pdf, .txt, .xls, .xlsx" class="w-file-upload-input" />
                                        <label for="CV" id="cv" class="fileupload_button text__l w-file-upload-label">
                                            <div class="w-inline-block">Upload file (max 10MB)</div>
                                            <div class="icon w-icon-file-upload-icon"></div>
                                        </label>
                                    </div>
                                    <div class="fileupload-state w-file-upload-uploading w-hidden">
                                        <div class="fileupload_button text__l w-file-upload-uploading-btn">
                                            <div class="w-inline-block">Uploading...</div>
                                            <svg class="filedupload_icon w-icon-file-upload-uploading" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                                <path fill="currentColor" opacity=".2" d="M15 30a15 15 0 1 1 0-30 15 15 0 0 1 0 30zm0-3a12 12 0 1 0 0-24 12 12 0 0 0 0 24z"></path>
                                                <path fill="currentColor" opacity=".75" d="M0 15A15 15 0 0 1 15 0v3A12 12 0 0 0 3 15H0z">
                                                    <animateTransform attributeName="transform" attributeType="XML" dur="0.6s" from="0 15 15" repeatCount="indefinite" to="360 15 15" type="rotate"></animateTransform>
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="fileupload-state w-file-upload-success w-hidden">
                                        <div class="fileupload_button text__l w-file-upload-file">
                                            <div class="text__l w-file-upload-file-name">fileuploaded.jpg</div>
                                            <div class="fileupload_icon_delete_wrapper w-file-remove-link">
                                                <div class="fileupload_icon_delete">✕</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="error-state w-file-upload-error w-hidden">
                                        <div class="error-message text__r w-file-upload-error-msg" data-w-size-error="Upload failed. Max size for files is 10MB." data-w-type-error="Upload failed. Invalid file type." data-w-generic-error="Upload failed. Something went wrong. Please retry.">Upload failed. Max size for files is 10MB.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scroll-trigger">
                        <div class="text__s overline">2 of 2</div>
                        <h2 class="text__xl">Your experience </h2>
                        <div class="contactform__grid">
                            <div class="contactform__grid-wrapper">
                                <div class="div-block">
                                    <div class="text__s form-label w-embed">
                                        <label for="service">What's the main service you offer?</label>
                                    </div>
                                    <a data-w-id="Link Block" href="#" class="help-icon link w-inline-block">
                                        <img src="https://assets-global.website-files.com/5fa11be351a3e7485facb4bc/601d5054f98eb9b8990372a6_icon_help.svg" loading="lazy" alt="Help" class="help-icon-image" />
                                    </a>
                                </div>
                                <select id="service" name="Service" data-name="Service" required="" data-source="recruitee-services" class="contactform__textfield text__l dropdown w-select">
                                    <option value="">Select a service...</option>
                                </select>
                            </div>
                            <div class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="experience">What's your level of experience in this field?</label>
                                </div>
                                <select id="experience" name="Experience" data-name="Experience" required="" class="contactform__textfield text__l dropdown w-select">
                                    <option value="">Select your experience...</option>
                                    <option value="1-2 years">1-2 years</option>
                                    <option value="3-5 years">3-5 years</option>
                                    <option value="5-10 years">5-10 years</option>
                                    <option value="10+ years">10+ years</option>
                                </select>
                            </div>
                            <div id="w-node-_8d3f3748-3a93-b57b-139a-087ee446dd85-8ab08cad" class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="skills">What skills do you offer clients?</label>
                                </div>
                                <select data-name="Skills" required="" name="Skills" id="skills" multiple="" data-placeholder="Select your skills (multiple)..." class="contactform__textfield text__l w-select"></select>
                            </div>
                            <div id="w-node-c0f4d862-5382-b530-9aca-9b82555c3e0e-8ab08cad" class="contactform__grid-wrapper">
                                <div class="text__s w-embed">
                                    <label for="portfolio-url">Portfolio URL</label>
                                </div>
                                <input type="text" class="contactform__textfield text__l w-input" maxlength="256" name="Portfolio-Url" data-name="Portfolio Url" placeholder="Your portfolio URL" id="portfolio-url" required="" />
                            </div>
                            <div id="w-node-c0f4d862-5382-b530-9aca-9b82555c3e1d-8ab08cad" class="contactform__grid-wrapper">
                                <label id="gdpr" class="w-checkbox contactform__checkbox-wrapper">
                                    <div class="w-checkbox-input w-checkbox-input--inputType-custom contactform__checkbox"></div>
                                    <input type="checkbox" id="gdpr" required="" data-name="GDPR" name="GDPR" style="opacity:0;position:absolute;z-index:-1" />
                                    <span for="GDPR" class="text__s w-form-label">I have read and accept the <a href="/privacy" target="_blank" class="link-underlined">privacy policy</a>. </span>
                                </label>
                            </div>
                            <div class="body w-embed">
                                <input type="hidden" class="hidden-field" id="campaign-id" name="Campaign ID" data-name="Campaign ID" value="">
                                <input type="hidden" class="hidden-field" id="referrer-url" name="Referrer URL" data-name="Referrer URL" value="">
                                <input type="hidden" class="hidden-field" id="ip-address" name="IP Address" data-name="IP Address" value="">
                                <input type="hidden" class="hidden-field" id="user-agent" name="User Agent" data-name="User Agent" value="">
                                <input type="hidden" class="hidden-field" id="rate" name="Rate" data-name="Rate" value="">
                                <input type="hidden" class="hidden-field" id="fee-preference" name="Fee Preference" data-name="Fee Preference" value="">
                            </div>
                            <input type="submit" value="Send application" data-wait="Please wait..." id="w-node-c0f4d862-5382-b530-9aca-9b82555c3e25-8ab08cad" class="contactform__button text__xl link-underlined w-button" />
                        </div>
                    </div>
                </form>
                <div class="contactform_success w-form-done">
                    <div class="contactform_success-wrapper">
                        <div class="text__l">Thanks for your application. We&#x27;ll be in touch. <br />‍ <br />
                            <a href="/" class="link-underlined">Return to homepage</a>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="contactform__error w-form-fail">
                    <div class="text__s">Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="hiddencollectionlist__wrapper w-dyn-list">
        <div role="list" class="hiddencollectionlist w-dyn-items">
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">.NET</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">API</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">AR</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">AWS Architecture</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">AWS SysOps</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Account Management</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Adobe After Effects</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Adobe Experience Manager</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Adobe XD</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Analytics</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Android</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">AngularJS</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Animation</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Anime.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Apache</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Art Direction</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Augmented Reality</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Backbone.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Barba.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Bootstrap</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Branding</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Business Development</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">CSS</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">CSS Framework</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">CSS3</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">CanvasJS</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">CloudFlare</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Copywriting</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Craft CMS</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">CreateJS</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">D3</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Debian</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Demandware</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Digital Production</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Drupal</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Express</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Expression Engine</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Facebook API</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">FastClick</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Figma</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Firebase</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Frontend Development</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">GSAP Animation</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Gatsby</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Globalization</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">GraphQL</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Graphic Design</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">HTML</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Hammer.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Healthkit</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Highway.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Hugo</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Illustration</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Internationalisation</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">JAVA</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">JavaScript</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">LAMP/LEMP Stacks</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Linux SysAdmin</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Magento</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Marketing</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Marketo</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">MediaElement.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Microsoft ASP.NET</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Mobile App Development</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Modernizr</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Motion Design</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Naming</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Nginx</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Node.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Nuxt.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Objective-C</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Optimizely</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">PHP</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">PPC</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">PR</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Perl</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Photography</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">PixiJS</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Planning</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Platform Testing</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Production</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Project Management</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Proposal Writing</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Python</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">QA/Testing</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">R&amp;D</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">React</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">React Native</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">ReactJS</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Reporting</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">RequireJS</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Research &amp; Development</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Reveal.js</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Ruby</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">SDK</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">SEM</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">SEO</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Salesforce</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Shopify</div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="skills-item">Sitecore</div>
            </div>
        </div>
    </div>
    <div class="hiddencollectionlist__wrapper w-dyn-list">
        <div role="list" class="hiddencollectionlist w-dyn-items">
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "771342",
                "text": " Full Stack Developer"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "733179",
                "text": "AWS SysOps Engineer"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "630350",
                "text": "Account Manager"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "607142",
                "text": "Creative (Other)"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "600069",
                "text": "Development"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "798059",
                "text": "Freelance QA/Tester"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "607138",
                "text": "Junior Developer"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "600068",
                "text": "Marketing/Business Development"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "600071",
                "text": "Project/Production Management"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "607141",
                "text": "Quality Assurance"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "607140",
                "text": "React.js Developer"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "761291",
                "text": "Recruiter"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "607139",
                "text": "Technical Project Manager"
              }
            </script>
                </div>
            </div>
            <div role="listitem" class="hiddencollectionlist__item w-dyn-item">
                <div class="w-embed w-script">
                    <script type="application/json" data="recruitee-services">
              {
                "id": "600059",
                "text": "UX / UI / Design"
              }
            </script>
                </div>
            </div>
        </div>
    </div>
    <div class="w-layout-grid footer">
        <div class="text__s">
            <span class="location_title">London</span>
            <br />81 Rivington Street <br />London EC2A 3AY, UK <br />
            <a href="mailto:london@tokyo.uk?subject=Website%20enquiry%20-%20London" class="link">london@tokyo.uk <br />
            </a>
            <a href="tel:+442077345004" class="link">+44 20 7734 5004</a>
        </div>
        <div class="text__s">
            <span class="location_title">New York</span>
            <br />16 Madison Square W. FL 12 <br />New York City, NY 10010, USA <br />
            <a href="mailto:newyork@tokyo.uk?subject=Website%20enquiry%20-%20New%20York" class="link">newyork@tokyo.uk <br />
            </a>
            <a href="tel:+13474412962" class="link">+1 347-441-2962</a>
        </div>
        <div class="text__s">
            <span class="location_title">Liverpool</span>
            <br />17 Mann Island <br />Liverpool L3 1BP, UK <br />
            <a href="mailto:liverpool@tokyo.uk?subject=Website%20enquiry%20-%20Liverpool" class="link">liverpool@tokyo.uk <br />
            </a>
            <a href="tel:+441517099524" class="link">+44 151 709 9524</a>
        </div>
        <div class="text__s">
            <a href="/contact" class="link">Contact</a>
            <br />
            <a href="/privacy" class="link">Privacy Policy <br />
            </a>
            <a href="/disclaimer" class="link">Disclaimer</a>
            <br />‍ <br />© 2021 TNT Media Tech Ltd.
        </div>
    </div>
    <div class="menu">
        <div class="header">
            <div class="nav">
                <a href="/" class="nav-logo link w-inline-block">
                    <img src="https://assets-global.website-files.com/5fa11be351a3e7485facb4bc/5fb40922a3a4e482786a5397_Tokyo%2BLogo_2021.svg" alt="Tokyo" class="logo__image" />
                </a>
                <div class="nav-links">
                    <div data-w-id="c0651125-6b7c-ff90-0a1a-e24d55d4b00a" class="nav-menu close-menu">
                        <a href="#" class="text__r link">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-layout-grid menu-grid">
            <div id="w-node-_4f77285e-91d4-6b77-2e13-b430dfd880c1-55d4b006" class="menu_items text__xxl w-clearfix">
                <div class="menu_item1">
                    <a href="/work" class="link-underlined">Work</a>
                </div>
                <div class="menu_item2">
                    <a href="/who-we-are" class="link-underlined">Who we are</a>
                </div>
                <div class="menu_item3">
                    <a href="/what-we-do" class="link-underlined">What we do</a>
                </div>
                <div class="menu_item4">
                    <a href="/join" class="link-underlined">Join us</a>
                </div>
            </div>
            <p id="w-node-_418f932a-6faa-adbf-12f4-726a6cd353ef-55d4b006" data-w-id="418f932a-6faa-adbf-12f4-726a6cd353ef" class="menu_contactlist text__l">For new business, agency partnerships <br />or general enquiries, <a href="/contact" class="link-underlined">send us a message</a>. <br />
                <br />We&#x27;re always looking out for digital talent; <br />
                <a href="/join" class="link-underlined">Apply to join Tokyo, or our talent network</a>.
            </p>
            <div id="w-node-_4e4cfcda-da49-f937-7cff-7fe726db088a-55d4b006" data-w-id="4e4cfcda-da49-f937-7cff-7fe726db088a" class="menu_emailtel text__s">
                <a href="mailto:hello@tokyo.uk" class="link">hello@tokyo.uk <br />
                </a>
                <a href="tel:+442077345004" class="link">+44 20 7734 5004</a>
            </div>
            <div id="w-node-a24592c0-ce77-ff02-c9dc-bd3983dfcdc0-55d4b006" data-w-id="a24592c0-ce77-ff02-c9dc-bd3983dfcdc0" class="menu_copyright text__s">© 2021 TNT Media Tech Ltd. <br />
                <a href="/contact" class="link">Contact</a> / <a href="/privacy" class="link">Privacy</a> / <a href="/disclaimer" class="link">Disclaimer</a>
            </div>
        </div>
    </div>
    <div style="display:none" class="help-wrapper">
        <div style="-webkit-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(100%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="help">
            <div class="help-title text__r">
                <div>What&#x27;s the main service you offer?</div>
                <a data-w-id="Text Link" href="#" class="link help-close">Close</a>
            </div>
            <div class="help-content text__s">
                <ul role="list" class="list">
                    <li>‍ <strong>Marketing/Business Development</strong>
                        <br />Business Development, Marketing, PR, Social Media Management, SEO/SEM, Pitch/Bid Writing. <br />‍
                    </li>
                    <li>
                        <strong>Planning</strong>
                        <br />Strategy, Project Planning, Resource Planning, Media Buying, Budgeting, Research, R&amp;D. <br />‍
                    </li>
                    <li>
                        <strong>UX / UI / Design <br />
                        </strong>User Interface Design, Interaction Design, Sketch, Adobe Creative Suite, Figma, Digital Toolkit / Guidelines, User Experience, Wireframing, Prototypes, A/B Testing. <br />‍
                    </li>
                    <li>
                        <strong>Development <br />
                        </strong>Full stack, Front-end, Back-end, Mobile Native, Language specific (PHP, React, React Native, Python, JAVA etc), Platform specific (Wordpress, Craft, Drupal etc). <br />‍
                    </li>
                    <li>
                        <strong>Client Handling <br />
                        </strong>Account Manager / Director. <br />‍
                    </li>
                    <li>
                        <strong>Project/Production Management <br />
                        </strong>Project Manager, Producer, Technical Manager. <br />‍
                    </li>
                    <li>
                        <strong>Quality Assurance <br />
                        </strong>Platform Testing, User Acceptance Testing, Reporting. <br />‍
                    </li>
                    <li>
                        <strong>Technical (Other) <br />
                        </strong>CRM (Salesforce, AEM), Sysadmin, DevOps, Analytics, Broadcast/streaming, VR, AR, Experiential Tech, Game Development. <br />‍
                    </li>
                    <li>
                        <strong>Creative (Other) <br />
                        </strong>Illustration, Copywriter, Motion Graphics, 3D, Unity, Unreal Engine, Experiential Design, Photographer, Film Production, Asset Production (gifs, social etc), Branding, Art Direction. <br />
                        <br />‍
                    </li>
                </ul>
            </div>
        </div>
        <div data-w-id="570f158f-829a-ae19-4e44-6485b3890897" style="opacity:0" class="help-scrim"></div>
    </div>
@stop