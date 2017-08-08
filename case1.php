<?php

?>

<html lang="en"><!DOCTYPE html>

 <!-- 
/* 
  
This document contains all instructions which appear in the paradigm, along with some basic functionality. You can change all text by following the instructions below. 

If you don't have experience with programming, it is important that you alter only the plain text, as indicated in the instructions, and leave any functional elements intact.
*/ 
--> 

<meta charset="utf-8">
<title>Condition 1</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-store" />
<meta http-equiv="cache-control" content="max-age=0" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Stylesheets -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/css/bootstrap-slider.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.10/alertify.core.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.10/alertify.default.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<!-- For IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
  </script>
<![endif]-->

<!-- Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/0.3.0/mustache.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alertify.js/0.3.10/alertify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/2.1.08/jquery.masonry.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.0.4/howler.min.js"></script>
<script src="shortcut.js"></script>
<!--<script src="main.js"></script>-->
<script type="text/javascript" src="profiles.json"></script>

</head>

<body oncontextmenu="return false;">
<div class="container">



<div id="intro" style="display:none;" class="instr">
 <!-- 
/* 
  
**Intro**
---------
You can edit this text using basic HTML elements for styling (e.g., <br>, <h3>).

*/ 
--> <h3>Willkommen zu dieser Studie</h3>

  <br>
  Sie werden zusammen mit anderen Personen, mit denen Sie über das Internet verbunden <br>
  sein werden, eine Reihe einfacher Aufgaben lösen. 
  <br><br>
  In einem ersten Schritt werden alle Teilnehmer der Studie persönliche “Avatare” auswählen <br>
  und einen kurzen Text schreiben, um sich selbst vorzustellen.
  <br><br> 
  Bevor Sie mit den Aufgaben beginnen, werden Sie drei Minuten mit den anderen Teilnehmern <br>
  verbringen. Während dieser Zeit können Sie die kurzen Vorstellungstexte der anderen Teilnehmer <br> 
  lesen und untereinander darauf reagieren.
  <br><br>
  Spezifischere Instruktionen werden dann folgen.<br><br><br>
  <button type="submit" id="submit_intro">Weiter</button>
</div>



<div id="name" style="display:none;" class="instr">
<!-- 
/* 
  
**Username**
---------
You can edit the instructions text for entering usernames below.

*/ 
-->
	<h3>Bitte tragen Sie hier ihren Namen ein</h3>
	Es kann sich um Ihren Vornamen, ihren Nicknamen oder Initialien handeln.<br><br>
	
	<input type="text" id="username"  autocomplete="off" /><br>	<br>
	<button type="submit"  id="submit_username">Senden</button>
</div>



<div id="avatar" style="display:none;">	
<!-- 
/* 
  
**Avatar choice**
---------
You can edit the instructions text. The text "Your choice of avatar will not be recorded or analyzed" depends on whether you record the choice of avatar.

*/ 
-->	<h3>Bitte wählen Sie einen Avatar aus</h3>
	Dieser Avatar wird Sie nachfolgend repräsentieren, jedoch nicht mit ihren Antworten in Verbindung gebracht. <br>
  Die Auswahl ihres Avatars wird nicht erfasst oder analysiert.
	<br><br>
	<div class="avatars"></div>
	<br><button type="submit"  id="submit_avatar">Weiter</button>
	<br><br>
</div>	


<div id="text" style="display:none;" class="instr">	
<!-- 
/* 
  
**Description entry**
---------
You can edit the instructions text. 

*/ 
-->	<h3>Bitte stellen Sie sich vor</h3>
  Bitte schreiben Sie einen Absatz, in dem Sie sich selbst dem Rest der Gruppe vorstellen. <br> 
  Schreiben Sie etwas, dass Sie den Anderen über sich mitteilen möchten – irgendetwas, <br> 
  dass sie teilen möchten.
	<br><br>	
	<textarea id="description" autocomplete="off" /></textarea><br>
	<span id="count">Verbleibende Zeichen: 400</span><br><br>
	<button type="submit" id="submit_text">Senden</button>
</div>	



<div id="fb_intro" style="display:none;" class="instr">
<!-- 
/* 
  
**Task instructions**
---------
You can edit the instructions text. The prompt to try and form an impression of the other players is recommended in all ostacism paradigms. Defining the action of "liking" is also recommended. The information regarding task duration can be adjusted to match the actual duration you have set.

*/ 
-->  <h3>Hinweise für die Gruppe</h3>
  Kurz nachdem eine Verbindung aufgebaut wurde, sollten Sie die Beschreibungen<br>
  der anderen Personen sehen können.<br>
  Sie können die kurzen Texte, welche die Personen über sich selbst geschrieben<br>
  haben, lesen und darauf reagieren, indem sie die "like" Taste, die der "like" Taste<br>
  auf Facebook ähnelt ("favorite" auf Twitter, &hearts; auf Tumblr und Instagram, etc.)<br>
  <br>
  Auch wenn es nur eine kurze Interaktion ist, versuchen Sie bitte einen Eindruck<br>
  von den anderen Personen in der Gruppe zu gewinnen. Versuchen Sie sich diese<br>
  im echten Leben vorzustellen - wie sie aussehen oder sich anhören könnten, was <br>
  für ein Typ Mensch sie sind, wie Sie mit diesen zurechtkommen würden.<br>
  <br>
  Die Aufgabe wird 3 Minuten andauern und es ist für die Studie sehr wichtig<br>
  aufmerksam zu sein, ohne auf eine andere Seite zu wechseln, oder Aufgaben zu erledigen, <br>
  die mit der Studie nicht in Verbindung stehen. Es könnten Fragen über die anderen <br>
  Personen folgen.
  <br><br><b>Wenn Sie diese Instruktion verstanden haben, können Sie mit dem Login fortfahren.</b><br>
  <br>
  <button type="submit"  id="submit_fb_intro">Log in</button>
</div>



<div id="fb_login" style="display:none;" class="instr">
  <h3>Verbindungsaufbau</h3>
  Bitte warten Sie einen Moment, während Sie mit den anderen Teilnehmern der<br>
  Gruppe verbunden werden.<br><br>
  <img class="load" src='ajax-loader.gif' id="loader">
  <div id="msg_all_done" style="display:none;">
  <br>
  	<b>Alle Teilnehmer sind nun miteinander verbunden und Sie können fortfahren.</b><br><br>
  	<button type="submit"  id="submit_fb_login">Weiter</button>
  </div>
</div>


<!-- 
/* 
  
**In-task instructions and timer**
---------
You can edit the instructions text. 

*/ 
-->
<div id="task" style="display:none;">
	<div id="countdown"><span class="secs" style="display: none;"></span>Sie können die "Like" taste drücken, wenn Ihnen die beschreibung einer Person gefallen hat.<br><br>Verbleibende Zeit:<br><span id="timer" class="cntr label label-info"></span>
	<br><br>
  <button type="submit" class="btn btn-danger" id="abbruch"><i class="icon-stop icon-white"></i> Abbruch</button>
	<button type="submit" class="btn btn-info" id="final-continue" style="display:none;">Fortfahren</button>	
	</div>
</div>

<div id="regulator_page" style="display:none;" class="instr">
  <h3>Send a noise blast!</h3>  
  <p>In this page, you can choose to send a noise blast to one of the other participants.</p>
  <br/>
  <div style="display: flex">
    <div style="flex: 1;">
      <input
        id="noise_intensity"
        type="text"
        data-slider-orientation="vertical"
        data-slider-handle="square"
        data-slider-reversed=true
        data-slider-max="10"
        data-slider-min="1"
        data-slider-step="1"
        data-slider-tooltip="always"
      >
      <br/><br/>

      <button type="submit"  id="send_noise">Send Noise</button>
    </div>
    <div style="flex: 3">
      <div id="noise_victims"></div>
    </div> 
  </div>
  <br/>
  <button class="pull-right" type="submit"  id="submit_regulator">Fortfahren</button>

</div>

<script type="template/text" id="noisevictimtmp">
  {{#posts}}
    
    <div class="well noisevictim">

        <img src="{{avatar}}" class="avatar">
        <h3 style="text-align: center">{{username}}</h3>

        <br style="clear:both;">

    </div>

  {{/posts}}  
</script>

<script type="template/text" id="usertmp">
  {{#posts}}
    
    <div class="entry">
    <div class="tophalf">
    	<img src="{{avatar}}" class="avatar">
    	<h3>{{username}}</h3>
    	<div class="main">
    		<p>{{text}}</p>
    	</div>
    	<br style="clear:both;">
    </div>	
    <div class="bottomhalf">
    	Likes <span class="badge badge-custom userslikes" data-likes="{{likes}}" data-usernames="{{usernames}}">0</span>
    </div>
    </div>
  {{/posts}}  
</script>

<script type="template/text" id="otherstmp">
  {{#posts}}
    <div class="entry">
    <div class="tophalf">

    	<img src="{{avatar}}" class="avatar">
        <h3>{{username}}</h3>
    	
    	<div class="main">
    		
    		<p>{{text}}</p>
    	</div>

    	<br style="clear:both;">

    </div>	

    <div class="bottomhalf">final
    	Likes <span class="badge badge-custom otherslikes" data-likes="{{likes}}">0</span>
    	<button type="submit" class="btn pull-right btn-like btn-custom btn-deround">Like <i class="icon-thumbs-up icon-white"></i></button>
    </div>

    </div>
  {{/posts}}  
</script>


</body>

<script>
$(function () {

  // **Parameters**
  // ------------

  function set_settings() {
    window.settings = [];

    // **Number** **of** **Avatar** **Images**   
    // Number of avatars the user can choose from. Can be changed to any number, depending on how many avatars you would like to display. Default: 82
    // The avatar images used in the online preview of the paradigm were created using by pickaface.net and due to their terms not available for redistribution. You should therefore create your own images. All images should be 250x250 pixels in size and carry the names "avatar_NUMBER.png" (e.g. avatar_1.png; "png" should be lower case; the numbers in the names should be consequtive, starting from 1). The number of avatars dependeds on the corresponding parameter. The images should be placed in folder "avatars," located in the main study folder extracted on your computer or server.

    settings.numberofavatars = 10;


    // **Redirection**    
    // After the introduction task is over participants should be redirected to a survey with manipulation checks and dependent measures, to subsequent tasks, or to further instructions. 
    // If the study is called with a parameter for redirection, as explained in the documentation, this value is overwritten. 
    // To the redirect link, the following information will be appended: (1) participant number, (2) condition, (3) username, (4) description submitted by participant. These variables can be extracted from the link, saved as data, and used for linking the Social Media Ostracism paradigm to subsequent tasks and measures. See documentation for more details.

    settings.defaultredirect = 'http://localhost:8080/index.php/849925?lang=de';


    // **Tasklength**     
    // Length of the group introduction task in milliseconds. Can be changed to any number (in ms). Default: 180000 (3min) 
    settings.tasklength = 180000; 
    //settings.tasklength = 10000; /*for testing*/

    // **Number** **of** **"likes"**    
    // Each received "like" is indicated by the timepoint (in ms) at which the "like" will appear. To change the number of "likes" in each condition, add or remove timepoints. Make sure that every timepoint (except the first) is preceded by a single comma. 
    // In cases with only 1 "like," a second "like" is added with time point 9999999. This "like" is added for programming purposes and is never executed, as it is outside the task time

    // In condition 1, the participant will receive 1 like at the following timepoint (in ms). Default: [12000, 9999999]
    //settings.condition_1_likes = [12000, 9999999];
    settings.condition_1_likes = [9999999, 9999999];

    // In condition 2, user will receive 6 likes at the following timepoints (in ms). Default: [10000, 15000,35000,80000,1320000,150000]
    settings.condition_2_likes = [10000, 15000, 35000, 80000, 1320000, 150000];

    // In condition 3, user will receive 9 likes at the following timepoints (in ms). Default: [10000, 11000,15000,35000,80000,100000,110000,150000,20000]
    settings.condition_3_likes = [10000, 11000, 15000, 35000, 80000, 100000, 110000, 150000, 20000];

    // **Others' likes**     
    // To keep the total distribution of "likes" constant across conditions, The "likes" received by one group member can be adjusted according to the participant's. By default, the other group member receives 9 "likes" in the participant-ostracism condition, 5 in the participant-inclusion condtion, and 1 in the participant-overinclusion condtion.
    settings.condition_1_adjusted_likes = [12000, 14000, 15000, 35000, 80000, 100000, 110000, 150000, 20000]; // 9
    settings.condition_2_adjusted_likes = [12000, 14000, 15000, 35000, 80000]; // 5
    settings.condition_3_adjusted_likes = [12000, 9999999]; //1	

    // Usernames by which the participant will receive "likes"
    // If group member names are changed, these should be changed accordingly.
    settings.likes_by = ['Christopher', 'Harit', 'Sarah', 'Felix', 'Davina', 'Max', 'Niklas', 'Florian', 'Ky'];
  }

  // -------------------
  // Above were the basic parameters you can adjust using the instructions. The remaining code is also annotated, but we do not recommend changing it, unless you are comfortable with web programming.
  // -------------------


  // **Slide:** **Intro**     
  // With instructions regarding the task. The intro container is shown, the continue calls the next slide when clicked.
  function init_intro() {
    $('#intro').show();
    $('#submit_intro').on('click', function () {
      $('#intro').hide();
      init_name();
    });
  }


  // **Slide:** **Username**       
  // Note: Only alphanumeric usernames without spaces are accepted

  function init_name() {

    $('#name').show();


    $('#submit_username').on('click', function () {

      var error = 0;
      var uname = $('#username').val();

      if (uname == "") {
        error = 1;
        errormsg = 'Please enter text';
        uname = "undefined";
      }
      if (not_alphanumeric(uname)) {
        error = 1;
        errormsg = 'Please only letters (and no spaces)';
      }

      if (error == 0) {
        $('#name').hide();
        window.username = $('#username').val();
        init_avatar();
      } else {
        alertify.log(errormsg, "error");
      }


    });
  }

  // **Slide:** **Avatar**       
  // Avatar slide in which the participant is asked to select an avatar

  function init_avatar() {
    $('#avatar').show();

    var avatars = window.settings.numberofavatars;
    for (var i = 0; i < avatars; i++) {
      $('.avatars').append('<img id="avatar_' + i + '" src="avatars/avatar_' + i + '.png" class="avatar" />');
    }

    $('.avatar').on('click', function () {
      $('.avatar').removeClass('selected');
      $(this).addClass('selected');
    });

    $('#submit_avatar').on('click', function () {
      if ($('.selected').length == 1) {
        $('#avatar').hide();
        window.avatar = $('.selected').attr('id');
        window.avatarexport = /avatar_([^\s]+)/.exec(window.avatar)[1];
        init_text();
      } else {
        alertify.log("Please select an avatar", "error");
      }
    });

  }


  // **Slide:** **Description**   
  function init_text() {
    $('#text').show();

    $("#description").keyup(function () {
      $("#count").text("Verbleibende Zeichen: " + (400 - $(this).val().length));
    });

    $('#submit_text').on('click', function () {

      var error = 0;
      if ($('#description').val() == "") {
        error = 1;
        errormsg = 'Please enter text';
      }
      if ($('#description').val() !== "" && $('#description').val().length < 140) {

        error = 1;
        errormsg = 'Please write a bit more';
      }
      if ($('#description').val().length > 401) {

        error = 1;
        errormsg = 'Please enter less text';
      }
      if (error == 0) {
        $('#text').hide();
        window.description = $('#description').val();
        init_fb_intro();
      } else {
        alertify.log(errormsg, "error");
      }
    });
  }


  // **Slide:** **Instructions**   
  function init_fb_intro() {
    $('#fb_intro').show();

    $('#submit_fb_intro').on('click', function () {

      $('#fb_intro').hide();
      init_fb_login();

    });
  }


  // **Slide:** **Login** **Screen**   
  // Participant can continue after 8000ms = 8s      
  function init_fb_login() {
    $('#fb_login').show();


    setTimeout(function () {
      $('#msg_all_done').show();
      $("#loader").hide();
    }, 8000);

    $('#submit_fb_login').on('click', function () {
      $('#fb_login').hide();
      init_task();
    });
  }

  // **Slide:** **Task**   
  function init_task() {

    var $cancelBtn = $('#abbruch');

    $('#task').show();

    shortcut.add("Backspace", function () {});

    jQuery("#countdown").countDown({
      startNumber: window.settings.tasklength / 1000, // in seconds
      callBack: function (me) {
        console.log('over');
        $('#timer').text('00:00');
      }
    });

    users = {
      "posts": [{
        "avatar": 'avatars/' + window.avatar + '.png',
        "username": window.username,
        "text": window.description,
        "likes": window.settings.condition_likes,
        "usernames": window.settings.likes_by
      }]
    };

    // Add user box to slide     
    var tpl = $('#usertmp').html(),
      html = Mustache.to_html(tpl, users);
    $("#task").append(html);

    // Add other boxes to slide    
    var tpl = $('#otherstmp').html(),
      html = Mustache.to_html(tpl, others);
    $("#task").append(html);

    // Randomize order of other players boxes
    function reorder() {
      var grp = $("#others").children();
      var cnt = grp.length;

      var temp, x;
      for (var i = 0; i < cnt; i++) {
        temp = grp[i];
        x = Math.floor(Math.random() * cnt);
        grp[i] = grp[x];
        grp[x] = temp;
      }
      $(grp).remove();
      $("#others").append($(grp));
    }
    reorder();

    // When user receives likes
    // $('.userslikes').each(function () {
    //   console.log($(this))
    //   var that = $(this);
    //   var usernames = $(this).data('usernames').split(",");
    //   var times = $(this).data('likes').split(",");

    //   for (var i = 0; i < times.length; i++) {
    //     times[i] = +times[i];

    //     themsg = usernames[i] + " hat deinen Beitrag mit einem “Like” versehen";

    //     setTimeout(function (themsg) {
    //       that.text(parseInt(that.text()) + 1);
    //       alertify.success(themsg)

    //     }, times[i], themsg);
    //   }
    // });

    // When others receive likes
    $('.otherslikes').each(function () {
      var that = $(this);
      var times = $(this).data('likes').split(",");

      for (var i = 0; i < times.length; i++) {
        times[i] = +times[i];

        setTimeout(function () {
          that.text(parseInt(that.text()) + 1);
        }, times[i]);

      }
    });


    // Initialize like buttons
    $('.btn-like').on('click', function () {
      $(this).prev().text(parseInt($(this).prev().text()) + 1);
      // Like buttons can only be clicked once
      $(this).attr("disabled", true);
    });

    // Initalize Masonry plugin
    // For display of user and other players boxes in columns without gaps
    $('#task').masonry({
      itemSelector: '.entry',
      columnWidth: 10
    });

    $cancelBtn.click(function(){
      window.cancelled = true;
      //$('#task').hide();
      //init_imagination_task();

      $(window).unbind('beforeunload');
      redirectToSurvey();
    });

    // Redirect, default after 180000ms = 180s = 3min
    setTimeout(function () {

      $(window).unbind('beforeunload');

      $cancelBtn.hide();
      $cancelBtn.unbind("click");

      $('#final-continue').show();

      $('#timer').text('00:00');

      $('#final-continue').on('click', function(){
        //$('#task').hide();
        //init_imagination_task();
        redirectToSurvey();
      });

    }, window.settings.tasklength); // timing for task

  }

  function init_imagination_task() {
    $('#imagination_task').show();
  }

  function init_regulator_page() {
    /*Load the noise blast file*/
    var sendBtn = $('#send_noise');
    var slider = $('#noise_intensity').bootstrapSlider();
    var noise = new Howl({
      src: ['whitenoise.wav'],
      volume: slider.bootstrapSlider('getValue') * 0.1
    });

    noise.on('load', function(){
      sendBtn.click(function(){
        noise.play();
      });
      slider.on('change', function(e){
        noise.volume(e.value.newValue * 0.1)
      })
    });

    var tpl = $('#noisevictimtmp').html(),
      html = Mustache.to_html(tpl, others);
    $("#noise_victims").append(html);

 

    $('#regulator_page').show();
    
  }

  function redirectToSurvey() {
    // Redirect link
    location.href = window.redirect + '&p=' + window.participant + '&c=' + window.condition + '&cancelled=' + window.cancelled + '&u=' + encodeURI(window.username) + '&av=' + window.avatarexport + '&d=' + encodeURI(window.description);

  }

  // Get URL parameters to set condition number and participant number
  function get_params() {
    // condition number must be 1, 2, or 3
    if (window.QueryString.c !== undefined && !isNaN(parseInt(window.QueryString.c)) && parseInt(window.QueryString.c) > 0 && parseInt(window.QueryString.c) < 4) {
      window.condition = parseInt(window.QueryString.c);
    } else {
      window.condition = 1; // condition defaults to 1
    }
    // participant number must be numeric
    if (window.QueryString.p !== undefined && !isNaN(parseInt(window.QueryString.p))) {
      window.participant = parseInt(window.QueryString.p);
    } else {
      window.participant = 0; // participant defaults to 0
    }
    // redirect
    if (window.QueryString.redirect !== undefined && window.QueryString.redirect !== "") {
      window.redirect = decode(window.QueryString.redirect);
    } else {
      window.redirect = window.settings.defaultredirect;
    }

    var urlHasQuestionMark = (window.redirect.indexOf("?") > -1);
    if (!urlHasQuestionMark) {
      window.redirect = window.redirect + "?redir=1";
    }

    window.cancelled = false;
    //alert(window.redirect);

  }


  // adjustments according to current condition
  function adjust_to_condition() {

    // the number of likes a person receives depends on the condition
    // in addition, the number of likes another person receives is adjusted, so that there is the same number of likes overall
    switch (condition) {
      case 1:
        window.settings.condition_likes = settings.condition_1_likes;
        window.others.posts[1].likes = settings.condition_1_adjusted_likes;
        break;
      case 2:
        window.settings.condition_likes = settings.condition_2_likes;
        window.others.posts[1].likes = settings.condition_2_adjusted_likes;
        break;
      case 3:
        window.settings.condition_likes = settings.condition_3_likes;
        window.others.posts[1].likes = settings.condition_3_adjusted_likes;
        break;
    }

  }


  // The variable QueryString contains the url parameters, i.e. condition no. and participant no.
  // via http://stackoverflow.com/a/979995
  window.QueryString = function () {
    var query_string = {};
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split("=");
      // If first entry with this name
      if (typeof query_string[pair[0]] === "undefined") {
        query_string[pair[0]] = pair[1];
        // If second entry with this name
      } else if (typeof query_string[pair[0]] === "string") {
        var arr = [query_string[pair[0]], pair[1]];
        query_string[pair[0]] = arr;
        // If third or later entry with this name
      } else {
        query_string[pair[0]].push(pair[1]);
      }
    }
    return query_string;
  }();


  // Function to check letters and numbers
  // via http://www.w3resource.com/javascript/form/letters-numbers-field.php
  function not_alphanumeric(inputtxt) {
    var letterNumber = /^[0-9a-zA-Z]+$/;
    if (inputtxt.match(letterNumber)) {
      return false;
    } else {
      return true;
    }
  }


  // Function to add extra zeros infront of numbers (used for the countdown)
  // via http://stackoverflow.com/a/6466243
  function pad(str, max) {
    return str.length < max ? pad("0" + str, max) : str;
  }

  // Function for encoding and decoding URLs
  // via http://meyerweb.com/eric/tools/dencoder/
  function encode(unencoded) {
    return encodeURIComponent(unencoded).replace(/'/g, "%27").replace(/"/g, "%22");
  }

  function decode(encoded) {
    return decodeURIComponent(encoded.replace(/\+/g, " "));
  }


  // Simple Countdown
  // via http://davidwalsh.name/jquery-countdown-plugin
  jQuery.fn.countDown = function (settings, to) {
    settings = jQuery.extend({
      startFontSize: "12px",
      endFontSize: "12px",
      duration: 1000,
      startNumber: 10,
      endNumber: 0,
      callBack: function () {}
    }, settings);
    return this.each(function () {
      if (!to && to != settings.endNumber) {
        to = settings.startNumber;
      }
      jQuery(this).children('.secs').text(to);
      jQuery(this).animate({
        fontSize: settings.endFontSize
      }, settings.duration, "", function () {
        if (to > settings.endNumber + 1) {
          jQuery(this).children('.secs').text(to - 1);
          jQuery(this).countDown(settings, to - 1);
          var minutes = Math.floor(to / 60);
          var seconds = to - minutes * 60;
          jQuery(this).children('.cntr').text(pad(minutes.toString(), 2) + ':' + pad(seconds.toString(), 2));
        } else {
          settings.callBack(this);
        }
      });
    });
  };

  // Prevent that participants accidentally exit the experiment by disabling F5 and backspace keys
  shortcut.add("f5", function () {});
  $(window).bind('beforeunload', function () {
    return 'Are you sure you want to quit the experiment completely?';
  });

  // Set Settings, get Participant No. and Condition No.
  set_settings();
  get_params();
  adjust_to_condition();

  // Start with the intro slide
  init_intro();
  //init_regulator_page();
});
</script>
</html>