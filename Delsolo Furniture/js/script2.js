
// Create a break line element
var br = document.createElement("br");



var mydiv = document.createElement("div");
mydiv.setAttribute("class", "input-box");
var mydiv1 = document.createElement("div");
mydiv1.setAttribute("class", "input-box message-box");
var mydiv2 = document.createElement("div");
mydiv2.setAttribute("class", "input-box");
var mydiv3 = document.createElement("div");
mydiv3.setAttribute("class", "button");

// Create a form dynamically
var form = document.createElement("form");
form.setAttribute("method", "post");
form.setAttribute("action", "php/form.php");

// Create an input element for Full Name
var FN = document.createElement("input");
FN.setAttribute("type", "text");
FN.setAttribute("name", "FullName");
FN.setAttribute("placeholder", "Enter your name");

// FN.setAttribute("class", "field input-field");

FN.setAttribute("required", "");

FN.setAttribute("minlength", "3");

// Create an input element for emailID
var EID = document.createElement("input");
EID.setAttribute("type", "text");
EID.setAttribute("name", "emailID");
EID.setAttribute("placeholder", "enter your email");
EID.setAttribute("required", "");
//type="button" value="Send Now"
// Create an input element for password
var mytextarea = document.createElement("textarea");
mytextarea.setAttribute("name", "myText");
mytextarea.setAttribute("placeholder", "Enter your message");
mydiv.appendChild( FN);
mydiv2.appendChild(EID);
mydiv1.appendChild(mytextarea);



// create a submit button
var s = document.createElement("input");
s.setAttribute("type", "submit");
s.setAttribute("name", "submit");

s.setAttribute("value", "Send Now");

mydiv3.appendChild(s);
//append  div to form
form.appendChild(mydiv);
form.appendChild(mydiv2);
// Append the full name input to the form
// form.appendChild(FN);
form.appendChild(mydiv1);
// Inserting a line break
form.appendChild(br.cloneNode());
form.appendChild(mydiv3);

form.appendChild(br.cloneNode());

//append form in right-side div 

v = document.getElementsByClassName("right-side")[0];
v.appendChild(form);




///
function validateForm() {
    let fullName = document.forms["form"]["name"].value;
    let email = document.forms["form"]["emailID"].value;
    let mes = document.forms["form"]["myText"].value;
    if (fullName == ""||email==""||mes=="") {
      alert("You  must be filled out all infromations");
      return false;
    }
  }