var currentURL=window.location.href;
var buttonHerf=document.getElementById("get-started").href;
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

if ( jQuery( '#get-started' ).length ) {
    var source = getParameterByName('utm_source');
    if(source=== ""){
        document.getElementById("get-started").href=buttonHerf+"/?source=base";
    }
    else{
        document.getElementById("get-started").href=buttonHerf+"/?source="+source;
    }

    document.getElementById("get-started").addEventListener("click", function(){ gtag('event' , 'Get_Started_Button_Clicked', {
        'event_label': 'Get Started',
        'event_category': 'Get_Started_Clicked'
    }); });
}

if ( jQuery( '#option_25' ).length ) {
    // 25buttonclick
    var source = getParameterByName('utm_source');
    if(source=== ""){
        document.getElementById("option_25").href=buttonHerf+"/?source=base";
    }
    else{
        document.getElementById("option_25").href=buttonHerf+"/?source="+source;
    }
    document.getElementById("option_25").addEventListener("click", function(){ gtag('event' , '£25_Get_Started_Button_Clicked', {
        'event_label': '£25 Get Started',
        'event_category': 'Get_Started_Clicked'
    }); });
    // 25buttonclick
}


if ( jQuery( '#option_220' ).length ) {
    // 220buttonclick
    var source = getParameterByName('utm_source');
    if(source=== ""){
        document.getElementById("option_220").href=buttonHerf+"/?source=base";
    }
    else{
        document.getElementById("option_220").href=buttonHerf+"/?source="+source;
    }
    document.getElementById("option_220").addEventListener("click", function(){ gtag('event' , '£220_Get_Started_Button_Clicked', {
        'event_label': '£220 Get Started',
        'event_category': 'Get_Started_Clicked'
    }); });
    // 220buttonclick
}

if ( jQuery( '#option_410' ).length ) {
    // 410buttonclick
    var source = getParameterByName('utm_source');
    if(source=== ""){
        document.getElementById("option_410").href=buttonHerf+"/?source=base";
    }
    else{
        document.getElementById("option_410").href=buttonHerf+"/?source="+source;
    }
    document.getElementById("option_410").addEventListener("click", function(){ gtag('event' , '£410_Get_Started_Button_Clicked', {
        'event_label': '£410 Get Started',
        'event_category': 'Get_Started_Clicked'
    }); });
    // 410buttonclick
}

if ( jQuery( '#get_started' ).length ) {
    // getStartedButtonOffersPage
    var source = getParameterByName('utm_source');
    if(source=== ""){
        document.getElementById("get_started").href=buttonHerf+"/?source=base";
    }
    else{
        document.getElementById("get_started").href=buttonHerf+"/?source="+source;
    }
    document.getElementById("get_started").addEventListener("click", function(){ gtag('event' , 'Offers_Page_Get_Started_Button_Clicked', {
        'event_label': 'Offers Get Started',
        'event_category': 'Offers_Get_Started_Clicked'
    }); });
    // getStartedButtonOffersPage
}

if ( jQuery( '#find_instructor' ).length ) {
    // getStartedButtonOffersPage
    var source = getParameterByName('utm_source');
    if(source=== ""){
        document.getElementById("find_instructor").href=buttonHerf+"/?source=base";
    }
    else{
        document.getElementById("find_instructor").href=buttonHerf+"/?source="+source;
    }
    document.getElementById("find_instructor").addEventListener("click", function(){ gtag('event' , 'Find_An_Instructor_Button_Clicked', {
        'event_label': 'Find an Instructor',
        'event_category': 'Find_Instructor_Clicked'
    }); });
    // getStartedButtonOffersPage
}