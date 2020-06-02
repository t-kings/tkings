		window.onscroll = function() {myFunction()};

		function myFunction() {
			if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                        document.getElementById("navm").style="top:0px;";
                        document.getElementById("mobmain").style="top:0px;";
                        document.getElementById("mob_nav").style="opacity:0;";
			} else {
                        document.getElementById("navm").style="top:-120px;";
                        document.getElementById("mobmain").style="top:-120px;";
                        document.getElementById("mob_nav").style="opacity:1;";
			}
            }



            function msub(){
                  var mx = document.forms["mform"]["fn"].value;
                  var my = document.forms["mform"]["ln"].value;
                  var ma = document.forms["mform"]["ye"].value;
                  var mb = document.forms["mform"]["sbj"].value;
                  var mc = document.forms["mform"]["msg"].value;
                  var merrors = [];
                  if (ma == "") {
                        document.getElementById("mcsub").style.display="block";
                        document.getElementById("mcsub").innerHTML="Please Enter Email";
                        merrors.push("*** Commission is required");
                  }

                  if (merrors.length == 0) {
                        document.getElementById("mcsub").style.display="none";
                        document.getElementById("msub").style.opacity = "0.4" ;
                        document.getElementById("msub").innerHTML = "Sending <img src='images/gf.gif' style='width:25px;position:absolute;' />" ;
                        var hr = new XMLHttpRequest();
				hr.onreadystatechange = function() {
				      if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("cfixed").style.display = "block";
                                    document.getElementById("cfixed1").innerHTML = this.responseText;
                                    document.getElementById("msub").style.opacity = "1" ;
                                    document.getElementById("msub").innerHTML = "Send" ;
                              }
                        }
				hr.open("POST", "msub.php", true);
			      hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        var vars ="p="+mx+"&q="+my+"&r="+ma+"&s="+mb+"&t="+mc;
				hr.send(vars);
                  }


            }



            function csub(){
                  var cx = document.forms["cform"]["csub"].value;
                  var cerrors = [];
                  if (cx == "") {
                        document.getElementById("pcsub").style.display="block";
                        document.getElementById("pcsub").innerHTML="Please Enter Email";
                        merrors.push("*** Commission is required");
                  }

                  if (cerrors.length == 0) {
                        document.getElementById("pcsub").style.display="none";
                        document.getElementById("csub").style.opacity = "0.4" ;
                        document.getElementById("csub").innerHTML = "Sending <img src='images/gf.gif' style='width:25px;position:absolute;' />" ;
                        var hr = new XMLHttpRequest();
				hr.onreadystatechange = function() {
				      if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("cfixed").style.display = "block";
                                    document.getElementById("cfixed1").innerHTML = this.responseText;
                                    document.getElementById("csub").style.opacity = "1" ;
                                    document.getElementById("csub").innerHTML = "Send" ;
                              }
                        }
				hr.open("POST", "csub.php", true);
			      hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        var vars ="cp="+cx;
				hr.send(vars);
                  }


            }






            function cmycloser() {
                  document.getElementById("cfixed1").innerHTML="";
			if(document.getElementById("cfixed").style.display==="none"){
				document.getElementById("cfixed").style.display="block";
			} else { 
				document.getElementById("cfixed").style.display="none";
			}
            }








		
		function myFunction1() {
			document.getElementById("cc").classList.toggle("change");
			var x = document.getElementById("jnnav");
			var y = document.getElementById("jnav");
			
			if(y.style.height==="380px"){
				y.style.height="0px";
			} else { 
				y.style.height="380px";
			}
            }


            function myclose() {
			if(document.getElementById("hireb").style.display==="none"){
				document.getElementById("hireb").style.display="block";
			} else { 
				document.getElementById("hireb").style.display="none";
			}
            }


            function mycloser() {
			if(document.getElementById("hireb").style.display==="none"){
				document.getElementById("hireb").style.display="block";
			} else { 
				document.getElementById("hireb").style.display="none";
                  }
                  
                  document.getElementById("blr").style.display="none";
                  document.getElementById("hire_form").reset();
                  document.getElementById("hload").style.opacity = "1";
                  document.getElementById("hload").innerHTML = "Send";
                  document.getElementById("hre").innerHTML="";
                  document.getElementById("herror").innerHTML="";
                  document.getElementById("hrn").innerHTML="";

            }

            function hsub(){
                  var x = document.forms["hire"]["fname"].value;
                  var y = document.forms["hire"]["hemail"].value;
                  var a = document.forms["hire"]["phn"].value;
                  var b = document.forms["hire"]["service"].value;
                  var c = document.forms["hire"]["habout"].value;
                  var errors = [];
                  if (x == "") {
                        document.getElementById("hrn").innerHTML="*";
                        document.getElementById("herror").innerHTML="Please fill all recquired fields";
                        errors.push("*** Commission is required");
                  }

                  if (y == "") {
                        document.getElementById("hre").innerHTML="*";
                        document.getElementById("herror").innerHTML="Please fill all recquired fields";
                        errors.push("*** Commission is required");
                  }

                  if (errors.length == 0) {
                        document.getElementById("hload").style.opacity = "0.407";
                        document.getElementById("hload").innerHTML = "Sending <img src='images/gf.gif' style='width:25px;position:absolute;' />" ;
                        var hr = new XMLHttpRequest();
				hr.onreadystatechange = function() {
				      if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("tttt").innerHTML = this.responseText;
                                    document.getElementById("blr").style.display = "block";
                                    document.getElementById("hload").innerHTML = "Sent";
                                    document.getElementById("hload").style.opacity = "1";
                              }
                        }
				hr.open("POST", "hsub.php", true);
			      hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        var vars ="p="+x+"&q="+y+"&r="+a+"&s="+b+"&t="+c;
				hr.send(vars);
                  }


            }

            function myFunction1b() {
			document.getElementById("ccc").classList.toggle("changee");
			
			document.getElementById("cc").classList.toggle("change");
            }
            
                        function myFunction1a() {
			document.getElementById("ccc").classList.toggle("changee");
			var x = document.getElementById("jnnav");
			var y = document.getElementById("jnav");
			
			if(y.style.height==="380px"){
				y.style.height="0px";
			} else { 
				y.style.height="380px";
			}
            }
            
            const words = ["I'm a Web Developer.", "I'm a Creative Designer.", "I Create Amazing Stuff.", "Let's Work Together."];
            let i = 0;
            let timer;

            function typingEffect() {
                  let word = words[i].split("");
                  var loopTyping = function() {
                        if (word.length > 0) {
                              document.getElementById('word').innerHTML += word.shift();
                        } else {
                              deletingEffect();
                              return false;
                        };
                        timer = setTimeout(loopTyping, 150);
                  };
                  loopTyping();
            };

            function deletingEffect() {
                  let word = words[i].split("");
                  var loopDeleting = function() {
                        if (word.length > 0) {
                              word.pop();
                              document.getElementById('word').innerHTML = word.join("");
                        } else {
                              if (words.length > (i + 1)) {
                                    i++;
                              } else {
                                    i = 0;
                              };
                              typingEffect();
                              return false;
                        };
                        timer = setTimeout(loopDeleting, 110);
                  };
                  loopDeleting();
            };

            typingEffect();
		

            function pta(){
                   var hr = new XMLHttpRequest();
                   document.getElementById("flex").innerHTML = "<img src='images/gf.gif'  style='width: 30%;'/>";
				hr.onreadystatechange = function() {
				      if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("pta").style.border = "4px solid green";
                                    document.getElementById("ptb").style.border = "none";
                                    document.getElementById("ptc").style.border = "none";
                                    document.getElementById("ptd").style.border = "none";
                                    document.getElementById("pte").style.border = "none";
                                    document.getElementById("flex").innerHTML = this.responseText;
                              }
                        }
				hr.open("POST", "all.php", true);
			      hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				hr.send();
                  }

            function ptb(){
                  var hr = new XMLHttpRequest();
                  document.getElementById("flex").innerHTML = "<img src='images/gf.gif'  style='width: 30%;'/>";
                       hr.onreadystatechange = function() {
                             if (this.readyState == 4 && this.status == 200) {
                                   document.getElementById("pta").style.border = "none";
                                   document.getElementById("ptb").style.border = "4px solid green";
                                   document.getElementById("ptc").style.border = "none";
                                   document.getElementById("ptd").style.border = "none";
                                   document.getElementById("pte").style.border = "none";
                                   document.getElementById("flex").innerHTML = this.responseText;
                             }
                       }
                       hr.open("POST", "wd.php", true);
                       hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                       hr.send();
                 }


                 function ptd(){
                  var hr = new XMLHttpRequest();
                  document.getElementById("flex").innerHTML = "<img src='images/gf.gif'  style='width: 30%;'/>";
                       hr.onreadystatechange = function() {
                             if (this.readyState == 4 && this.status == 200) {
                                   document.getElementById("pta").style.border = "none";
                                   document.getElementById("ptb").style.border = "none";
                                   document.getElementById("ptc").style.border = "none";
                                   document.getElementById("ptd").style.border = "4px solid green";
                                   document.getElementById("pte").style.border = "none";
                                   document.getElementById("flex").innerHTML = this.responseText;
                             }
                       }
                       hr.open("POST", "De.php", true);
                       hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                       hr.send();
                 }

                 function pte(){
                  var hr = new XMLHttpRequest();
                  document.getElementById("flex").innerHTML = "<img src='images/gf.gif'  style='width: 30%;'/>";
                       hr.onreadystatechange = function() {
                             if (this.readyState == 4 && this.status == 200) {
                                   document.getElementById("pta").style.border = "none";
                                   document.getElementById("ptb").style.border = "none";
                                   document.getElementById("ptc").style.border = "none";
                                   document.getElementById("ptd").style.border = "none";
                                   document.getElementById("pte").style.border = "4px solid green";
                                   document.getElementById("flex").innerHTML = this.responseText;
                             }
                       }
                       hr.open("POST", "Ad.php", true);
                       hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                       hr.send();
                 }

                 function ptc(){
                  var hr = new XMLHttpRequest();
                  document.getElementById("flex").innerHTML = "<img src='images/gf.gif'  style='width: 30%;'/>";
                       hr.onreadystatechange = function() {
                             if (this.readyState == 4 && this.status == 200) {
                                   document.getElementById("pta").style.border = "none";
                                   document.getElementById("ptb").style.border = "none";
                                   document.getElementById("ptc").style.border = "4px solid green";
                                   document.getElementById("ptd").style.border = "none";
                                   document.getElementById("pte").style.border = "none";
                                   document.getElementById("flex").innerHTML = this.responseText;
                             }
                       }
                       hr.open("POST", "Ma.php", true);
                       hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                       hr.send();
                 }
