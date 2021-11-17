@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/privacy.css') }}">

    <?php if($data['sunset'] === 'night') { ?>
    <link rel="stylesheet" href="{{ asset('css/stars.css') }}" />
    <?php } else { ?>
    <link rel="stylesheet" href="{{ asset('css/clouds.css') }}" />
    <?php } ?>
@endpush

@section('content')

    <div id="privacy-policy-container" class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <h1 class="headingone">Take a flick through | The boring stuff</h1>
                <h1 class="headingtwo">Privacy policy</h1>
                <p class="body">TNT Media Tech LTD understands that your privacy is important to you and that you care about how your personal data is used. We respect and value the privacy of everyone who visits this website, <a href="https://tntmedia.co.uk">https://tntmedia.co.uk</a> (&quot;Our Site&quot;) and will only collect and use personal data in ways that are described here, and in a way that is consistent with our obligations and your rights under the law. <br />Please read this Privacy Policy carefully and ensure that you understand it. Your acceptance of this Privacy Policy is requested, we require you to accept our Privacy Policy in respect of cookies used for tracking and analytics, and also if you submit data to us via forms contained within our website, for example the contact form, job application or freelancer application forms.</p>
                    <strong class="headingone">Contents</strong>
                    <a class="link link--metis" href="#definitions-and-interpretation">Definitions and interpretation</a><br>
                    <a class="link link--metis" href="#information-about-us">Information about us</a><br>
                    <a class="link link--metis" href="#what-does-this-policy-cover">What does this policy cover?</a><br>
                    <a class="link link--metis" href="#what-is-personal-data">What is personal data?</a><br>
                    <a class="link link--metis" href="#what-are-my-rights">What are my rights?</a><br>
                    <a class="link link--metis" href="#what-data-do-you-collect-and-how">What data do you collect and how?</a><br>
                    <a class="link link--metis" href="#how-do-you-use-my-personal-data">How do you use my personal data?</a><br>
                    <a class="link link--metis" href="#how-long-will-you-keep-my-personal-data">How long will you keep my personal data?</a><br>
                    <a class="link link--metis" href="#how-and-where-do-you-store-or-transfer-my-personal-data">How and where do you store or transfer my personal data?</a><br>
                    <a class="link link--metis" href="#do-you-share-my-personal-data">Do you share my personal data?</a><br>
                    <a class="link link--metis" href="#how-can-I-control-my-personal-data">How can I control my personal data?</a><br>
                    <a class="link link--metis" href="#can-I-withhold-information">Can I withhold information?</a><br>
                    <a class="link link--metis" href="#how-can-I-access-my-personal-data">How can I access my personal data?</a><br>
                    <a class="link link--metis" href="#how-do-you-use-cookies">How do you use cookies?</a><br>
                    <a class="link link--metis" href="#how-do-I-contact-you">How do I contact you?</a><br>
                    <a class="link link--metis" href="#changes-to-this-privacy-policy">Changes to this privacy policy</a>
                <ol role="list" class="list body">
                    <li class="list-item-l1">
                        <strong id="definitions-and-interpretation" class="list-item-title">Definitions and interpretation</strong>In this Policy the following terms shall have the following meanings: <br />
                        <br />&quot;Account&quot; means an account required to access and/or use certain areas and features of Our Site; <br />
                        <br />&quot;Cookie&quot; means a small text file placed on your computer or device by Our Site when you visit certain parts of Our Site and/or when you use certain features of Our Site. Details of the Cookies used by Our Site are set out in Part 14, below; and <br />
                        <br />&quot;Cookie Law&quot; means the relevant parts of the Privacy and Electronic Communications (EC Directive) Regulations 2003.
                    </li>
                    <li class="list-item-l1">
                        <strong id="information-about-us" class="list-item-title">Information about us</strong> Our Site is owned and operated by TNT Media Tech Ltd a Company registered in England under company number 13642648. <br />‍ <br />Registered address: 3 Oliver Close, Chatham, Kent, ME4 5EF <br />
                        <br />Main trading addresses: 3 Oliver Close, Chatham, Kent, ME4 5EF <br />
                        <br />Data Protection Officer: Daniel Harding <br />
                        <br />Email address: <a class="link link--metis" href="mailto:daniel.harding@tntmedia.co.uk">daniel.harding@tntmedia.co.uk</a>
                        <br />
                        <br />Telephone number: <a class="link link--metis" href="tel:+447444796137">07444796137</a>
                        <br />
                        <br />Postal address: 3 Oliver Close, Chatham, Kent, ME4 5EF
                    </li>
                    <li class="list-item-l1">
                        <strong id="what-does-this-policy-cover" class="list-item-title">What does this policy cover?</strong>  This Privacy Policy applies only to your use of Our Site. Our Site may contain links to other websites. Please note that we have no control over how your data is collected, stored, or used by other websites and we advise you to check the privacy policies of any such websites before providing any data to them.
                    </li>
                    <li class="list-item-l1">
                        <strong id="what-is-personal-data" class="list-item-title">What is personal data?</strong> Personal data is defined by the UK GDPR and the Data Protection Act 2018 (collectively, &quot;the Data Protection Legislation&quot;) as &#x27;any information relating to an identifiable person who can be directly or indirectly identified in particular by reference to an identifier&#x27;. <br />‍ <br />Personal data is, in simpler terms, any information about you that enables you to be identified. Personal data covers obvious information such as your name and contact details, but it also covers less obvious information such as identification numbers, electronic location data, and other online identifiers.
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="what-are-my-rights" class="list-item-title">What are my rights?</strong> Under the Data Protection Legislation, you have the following rights, which we will always work to uphold: <br />
                        </p>
                        <ul role="list" class="list-l2">
                            <li class="list-item-l2">The right to be informed about Our collection and use of your personal data. This Privacy Policy should tell you everything you need to know, but you can always contact us to find out more or to ask any questions using the details in Part 15. <br />
                            </li>
                            <li class="list-item-l2">The right to access the personal data we hold about you. Part 13 will tell you how to do this.</li>
                            <li class="list-item-l2">The right to have your personal data rectified if any of your personal data held by us is inaccurate or incomplete. Please contact us using the details in Part 15 to find out more. <br />
                            </li>
                            <li class="list-item-l2">The right to be forgotten, i.e. the right to ask us to delete or otherwise dispose of any of your personal data that we hold. Please contact us using the details in Part 15 to find out more. <br />
                            </li>
                            <li class="list-item-l2">The right to restrict (i.e. prevent) the processing of your personal data. <br />
                            </li>
                            <li class="list-item-l2">The right to object to us using your personal data for a particular purpose or purposes. <br />
                            </li>
                            <li class="list-item-l2">The right to withdraw consent. This means that, if we are relying on your consent as the legal basis for using your personal data, you are free to withdraw that consent at any time. <br />
                            </li>
                            <li class="list-item-l2">The right to data portability. This means that, if you have provided personal data to us directly, we are using it with your consent or for the performance of a contract, and that data is processed using automated means, you can ask us for a copy of that personal data to re-use with another service or business in many cases. <br />
                            </li>
                            <li class="list-item-l2">Rights relating to automated decision-making and profiling. We utilise automated profiling for the purposes of more efficiently matching applicants to job roles, this profiling is purely based on skills, experience and in some cases location and the ability to communicate with our team in a specific language (usually English). <br />
                            </li>
                        </ul>
                        <p>For more information about our use of your personal data or exercising your rights as outlined above, please contact us using the details provided in Part 15. <br />
                            <br />It is important that your personal data is kept accurate and up-to-date. If any of the personal data we hold about you changes, please keep us informed as long as we have that data. <br />
                            <br />Further information about your rights can also be obtained from the Information Commissioner&#x27;s Office or your local Citizens Advice Bureau. <br />
                            <br />If you have any cause for complaint about our use of your personal data, you have the right to lodge a complaint with the Information Commissioner&#x27;s Office. <br />
                            <br />We would welcome the opportunity to resolve your concerns ourselves, however, so please contact us first, using the details in Part 15. <br />
                        </p>
                    </li>
                    <li class="list-item-l1">
                        <strong id="what-data-do-you-collect-and-how" class="list-item-title">What data do you collect and how?</strong> Depending upon your use of Our Site, we may collect and hold some personal and non-personal data depending if it is automatically collected via tracking software mentioned within Part 14 or provided explicitly by you via our contact forms, job/freelancer application forms, or any other forms that may be present on the website from time to time. Please also see Part 14 for more information about our use of Cookies and similar technologies. We do not collect any &#x27;special category&#x27; or &#x27;sensitive&#x27; personal data unless you have chosen to include it (without request by us) as part of your CV/Resume for the purposes of a job application or freelancer/contractor position, for the avoidance of doubt we do not request or require &#x27;special category&#x27; data and where it is stored within your CV, it is not processed. We do not collect any personal data relating to children or data relating to criminal convictions and/or offences. However, some of our clients require staff and freelancers/contractors to have passed a criminal record check to be able to gain access to their data, we would make you aware of this requirement if it arose and no checks would be carried out without your express knowledge or consent in writing.
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="how-do-you-use-my-personal-data" class="list-item-title">How do you use my personal data?</strong> Under the Data Protection Legislation, we must always have a lawful basis for using personal data. Our lawful basis for using your personal data is purely based on the reasons you have explicitly provided the personal data for on our forms and as described on the pages for such forms. <br />
                            <br />With your permission and/or where permitted by law, we may also use your personal data for marketing purposes, which may include contacting you by email, telephone or text with information on services, jobs, contracts etc relevant to you. You will not be sent any unlawful marketing or spam. We will always work to fully protect your rights and comply with our obligations under the Data Protection Legislation and the Privacy and Electronic Communications (EC Directive) Regulations 2003, and you will always have the opportunity to opt-out. <br />
                            <br />We use the following automated system for carrying out certain kinds of decision-making and/or profiling. If at any point you wish to query any action that we take on the basis of this or wish to request &#x27;human intervention&#x27; (i.e. have someone review the action themselves, rather than relying only on the automated method), the Data Protection Legislation gives you the right to do so. Please contact <strong>us </strong>to find out more using the details in Part 15. <br />
                        </p>
                        <ul role="list" class="list-l2">
                            <li class="list-item-l2">The following automated decision-making method(s) may be used: <br />Checking if skillsets of a job candidate match those of a job applied for, for example if a designer applied for a programming role but had no experience in computer programming, they could be deemed unsuitable for that role and not be offered it as a result, or indeed be offered an alternative role or opportunity better suited to them. <br />
                            </li>
                            <li class="list-item-l2">The following automated profiling may take place: <br />If a job requires a certain level of experience or a set of advanced skills, profiling may rank your application higher than those which are less of a match. A human review takes place of the list but would see the highest ranking (apparently most suited/appropriate) candidates first, if your profile contained missing information that had an adverse effect on your rating, this may result in you not being offered a role that you were more suited to than another candidate. </li>
                        </ul>
                        <p>We will only use your personal data for the purpose(s) for which it was originally collected unless we reasonably believe that another purpose is compatible with that or those original purpose(s) and need to use your personal data for that purpose. If we do use your personal data in this way and you wish us to explain how the new purpose is compatible with the original, please contact us using the details in Part 15. <br />
                            <br />If we need to use your personal data for a purpose that is unrelated to, or incompatible with, the purpose(s) for which it was originally collected, we will inform you and explain the legal basis which allows us to do so.In some circumstances, where permitted or required by law, we may process your personal data without your knowledge or consent. This will only be done within the bounds of the Data Protection Legislation and your legal rights. <br />
                        </p>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="how-long-will-you-keep-my-personal-data" class="list-item-title">How long will you keep my personal data?</strong> We will not keep your personal data for any longer than is necessary in light of the reason(s) for which it was first collected. Your personal data will therefore be kept for the following periods (or, where there is no fixed period, the following factors will be used to determine how long it is kept): <br />
                        </p>
                        <div class="w-layout-grid table-personaldata">
                            <div id="w-node-textblock-b5b08ca6" class="table-title">
                                <strong>Type of data</strong>
                            </div>
                            <div id="w-node-_36752438-5fc6-a89b-e5a5-f21aae5a3941-b5b08ca6" class="table-title col2">
                                <strong>How long we keep it</strong>
                            </div>
                            <div id="w-node-d153d55b-7003-8eeb-b5f4-ffa84665f2b5-b5b08ca6" class="table-content">Identity information including CV/Resume for candidates that are live on our freelancer/contractor roster for receiving work from us.</div>
                            <div id="w-node-_3252f1f5-efad-a88c-56bb-5a5b5589a53d-b5b08ca6" class="table-content col2">Until 24 months where no contact, work or further consent to retain data has been obtained.</div>
                            <div id="w-node-_0bcac03f-92a0-9456-ba50-7647edd01cbc-b5b08ca6" class="table-content">Identity information including CV/Resume for candidates who are deemed unsuitable to work for TNT Media Tech LTD or its clients at this present time but may be in the future.</div>
                            <div id="w-node-_6900509a-61d2-ddb5-f724-586467a4944a-b5b08ca6" class="table-content col2">24 months</div>
                            <div id="w-node-f9705b66-0926-149f-c774-264295c4c43a-b5b08ca6" class="table-content">Identity information including CV/Resume for candidates who are deemed wholly unsuitable to work for TNT Media Tech LTD or its clients.</div>
                            <div id="w-node-_9d67f45f-a370-ae0a-2a85-21b57b2fc7d9-b5b08ca6" class="table-content col2">180 days</div>
                            <div id="w-node-_83a2d1f9-5934-6214-252a-236fdaaa1bb7-b5b08ca6" class="table-content lastrow">Payment information including bank details.</div>
                            <div id="w-node-a65e909b-1a7d-c96c-fad5-472c254f63ba-b5b08ca6" class="table-content col2 lastrow">No fixed period whilst there is a requirement to pay a contractor/freelancer, 24 months where no further work or contact has been retained or 180 days if the relationship has been ceased. Immediately removal at the request of the candidate.</div>
                        </div>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="how-and-where-do-you-store-or-transfer-my-personal-data" class="list-item-title">How and where do you store or transfer my personal data?</strong> We will store some of your personal data in the UK. This means that it will be fully protected under the Data Protection Legislation and we may store some of your personal da <strong>a</strong> within the European Economic Area (the &quot;EEA&quot;). The EEA consists of all EU member states, plus Norway, Iceland, and Liechtenstein. This means that your personal data will be fully protected under the EU GDPR and/or to equivalent standards by law. Transfers of personal data to the EEA from the UK are permitted without additional safeguards. <br />
                            <br />The security of your personal data is essential to us, and to protect your data, we take a number of important measures, including the following: <br />
                        </p>
                        <ul role="list" class="list-l2">
                            <li class="list-item-l2">limiting access to your personal data to those employees, agents, contractors, and other third parties with a legitimate need to know and ensuring that they are subject to duties of confidentiality; <br />
                            </li>
                            <li class="list-item-l2">procedures for dealing with data breaches (the accidental or unlawful destruction, loss, alteration, unauthorised disclosure of, or access to, your personal data) including notifying you and/or the Information Commissioner&#x27;s Office where we are legally required to do so.</li>
                        </ul>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="do-you-share-my-personal-data" class="list-item-title">Do you share my personal data?</strong> We will not share any of your personal data with any third parties for any purposes, subject to the following exceptions. <br />‍ <br />If we sell, transfer, or merge parts of our business or assets, your personal data may be transferred to a third party. Any new owner of our business may continue to use your personal data in the same way(s) that we have used it, as specified in this Privacy Policy. <br />‍ <br />In some limited circumstances, we may be legally required to share certain personal data, which might include yours, if we are involved in legal proceedings or complying with legal obligations, a court order, or the instructions of a government authority. <br />‍ <br />We may share your personal data with other companies in our group for achieving the objective you supplied the data for, for example if you supplied your CV/Resume for to become a freelancer or contractor we may share this with our related party companies that are of benefit to you. This includes subsidiaries and our holding company and its subsidiaries. <br />‍ <br />If any personal data is transferred outside of the UK, we will take suitable steps in order to ensure that your personal data is treated just as safely and securely as it would be within the UK and under the Data Protection Legislation, as explained above in Part 9. <br />
                        </p>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="how-can-I-control-my-personal-data">How can I control my personal data?</strong> 
                            <br />
                        </p>
                        <ul role="list" class="list-l2">
                            <li class="list-item-l2">In addition to your rights under the Data Protection Legislation, set out in Part 5, when you submit personal data via Our Site, you may be given options to restrict Our use of your personal data. In particular, we aim to give you strong controls on Our use of your data for direct marketing purposes (including the ability to opt-out of receiving emails from us which you may do by unsubscribing using the links provided in our emails. <br />
                            </li>
                            <li class="list-item-l2">You may also wish to sign up to one or more of the preference services operating in the UK: The Telephone Preference Service (&quot;the TPS&quot;), the Corporate Telephone Preference Service (&quot;the CTPS&quot;), and the Mailing Preference Service (&quot;the MPS&quot;). These may help to prevent you receiving unsolicited marketing. Please note, however, that these services will not prevent you from receiving marketing communications that you have consented to receiving.</li>
                        </ul>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="can-I-withhold-information" class="list-item-title">Can I withhold information?</strong> You may access Our Site without providing any personal data at all. However, to use all features and functions available on Our Site you may be required to submit or allow for the collection of certain data. <br />‍ <br />You may restrict our use of Cookies. For more information, see Part 14. <br />
                        </p>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="how-can-I-access-my-personal-data" class="list-item-title">How can I access my personal data?</strong> If you want to know what personal data we have about you, you can ask us for details of that personal data and for a copy of it (where any such personal data is held). This is known as a &quot;subject access request&quot;. <br />‍ <br />All subject access requests should be made in writing and sent to the email or postal addresses shown in Part 15. To make this as easy as possible for you, a Subject Access Request Form is available for you to use. You do not have to use this form, but it is the easiest way to tell us everything we need to know to respond to your request as quickly as possible. <br />‍ <br />There is not normally any charge for a subject access request. If your request is &#x27;manifestly unfounded or excessive&#x27; (for example, if you make repetitive requests) a fee may be charged to cover our administrative costs in responding. <br />‍ <br />We will respond to your subject access request in no longer than one month of receiving it. Normally, we aim to provide a complete response, including a copy of your personal data within that time. In some cases, however, particularly if your request is more complex, more time may be required up to a maximum of three months from the date we receive your request. You will be kept fully informed of our progress. <br />
                        </p>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="how-do-you-use-cookies" class="list-item-title">How do you use cookies?</strong> Our Site may place and access certain first-party Cookies on your computer or device. First-party Cookies are those placed directly by us and are used only by us. We use Cookies to facilitate and improve your experience of Our Site and to provide and improve our services. We have carefully chosen these Cookies and have taken steps to ensure that your privacy and personal data is protected and respected at all times. <br />‍ <br />All Cookies used by and on Our Site are used in accordance with current Cookie Law. <br />‍ <br />Before Cookies are placed on your computer or device, you will be shown a pop-up requesting your consent to set those Cookies. By giving your consent to the placing of Cookies you are enabling us to provide the best possible experience and service to you. You may, if you wish, deny consent to the placing of Cookies; however certain features of Our Site may not function fully or as intended. <br />‍ <br />Certain features of Our Site depend on Cookies to function. Cookie Law deems these Cookies to be &quot;strictly necessary&quot;. These Cookies are shown in the list below. Your consent will not be sought to place these Cookies, but it is still important that you are aware of them. You may still block these Cookies by changing your internet browser&#x27;s settings as detailed below, but please be aware that Our Site may not work properly if you do so. We have taken great care to ensure that your privacy is not at risk by allowing them. <br />‍ <br />We use cookies for a number of reasons. <br />
                        </p>
                        <ul role="list" class="list-l2">
                            <li class="list-item-l2">For statistical purposes to track how many users we have and how often they visit our websites. We collect information listing which of our pages are most frequently visited, and by which types of users and from which countries. <br />
                            </li>
                            <li class="list-item-l2">We use other organisations to collect anonymous user information, sometimes through cookies and web beacons, (information embedded in images which allow them to analyse how the website is being used and the number of visitors). By using the sites you are agreeing to the use of cookies as described.</li>
                        </ul>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="how-do-I-contact-you" class="list-item-title">How do I contact you?</strong> To contact us about anything to do with your personal data and data protection, including to make a subject access request, please use the following details (for the attention of The Data Protection Officer): <br />‍ <br />Email address: <a class="link link--metis" href="mailto:daniel.harding@tntmedia.co.uk">daniel.harding@tntmedia.co.uk</a>
                            <br />‍ <br />Telephone number: <a class="link link--metis" href="tel:+447444796137">07444796137</a>
                            <br />‍ <br />Postal Address: 3 Oliver Close, Chatham, Kent, ME4 5EF <br />
                        </p>
                    </li>
                    <li class="list-item-l1">
                        <p>
                            <strong id="changes-to-this-privacy-policy" class="list-item-title">Changes to this privacy policy</strong>We may change this Privacy Notice from time to time. This may be necessary, for example, if the law changes, or if we change our business in a way that affects personal data protection. <br />
                            <br />Any changes will be immediately posted on Our Site and you will be deemed to have accepted the terms of the Privacy Policy on your first use of Our Site following the alterations. We recommend that you check this page regularly to keep up-to-date. This Privacy Policy was last updated on <strong>03 February 2021</strong>. <br />
                        </p>
                    </li>
                </ol>
            </div>
        </div>
    </div>

{{--    <div class="menu">--}}
{{--        <div class="header">--}}
{{--            <div class="nav">--}}
{{--                <a href="/" class="nav-logo link w-inline-block">--}}
{{--                    <img src="https://assets-global.website-files.com/5fa11be351a3e7485facb4bc/5fb40922a3a4e482786a5397_Tokyo%2BLogo_2021.svg" alt="Tokyo" class="logo__image" />--}}
{{--                </a>--}}
{{--                <div class="nav-links">--}}
{{--                    <div data-w-id="c0651125-6b7c-ff90-0a1a-e24d55d4b00a" class="nav-menu close-menu">--}}
{{--                        <a href="#" class="text__r link">Close</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="w-layout-grid menu-grid">--}}
{{--            <div id="w-node-_4f77285e-91d4-6b77-2e13-b430dfd880c1-55d4b006" class="menu_items text__xxl w-clearfix">--}}
{{--                <div class="menu_item2">--}}
{{--                    <a href="/who-we-are" class="link-underlined">Who we are</a>--}}
{{--                </div>--}}
{{--                <div class="menu_item3">--}}
{{--                    <a href="/what-we-do" class="link-underlined">What we do</a>--}}
{{--                </div>--}}
{{--                <div class="menu_item4">--}}
{{--                    <a href="/join-us" class="link-underlined">Join us</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <p id="w-node-_418f932a-6faa-adbf-12f4-726a6cd353ef-55d4b006" data-w-id="418f932a-6faa-adbf-12f4-726a6cd353ef" class="menu_contactlist text__l">For new business, agency partnerships <br />or general enquiries, <a href="/contact" class="link-underlined">send us a message</a>. <br />--}}
{{--                <br />We&#x27;re always looking out for digital talent; <br />--}}
{{--                <a href="/join-us" class="link-underlined">Apply to join Tokyo, or our talent network</a>.--}}
{{--            </p>--}}
{{--            <div id="w-node-_4e4cfcda-da49-f937-7cff-7fe726db088a-55d4b006" data-w-id="4e4cfcda-da49-f937-7cff-7fe726db088a" class="menu_emailtel text__s">--}}
{{--                <a href="mailto:sales@tntmedia.co.uk" class="link link--metis">sales@tntmedia.co.uk <br />--}}
{{--                </a>--}}
{{--                <a href="tel:+447444796137" class="link link--metis">07444796137</a>--}}
{{--            </div>--}}
{{--            <div id="w-node-a24592c0-ce77-ff02-c9dc-bd3983dfcdc0-55d4b006" data-w-id="a24592c0-ce77-ff02-c9dc-bd3983dfcdc0" class="menu_copyright text__s">© 2021 TNT Media Tech Ltd. <br />--}}
{{--                <a href="/contact" class="link link--metis">Contact</a> / <a href="/privacy" aria-current="page" class="link w--current">Privacy</a> / <a href="/disclaimer" class="link link--metis">Disclaimer</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@stop