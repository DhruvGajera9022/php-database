$(document).ready(function () {

    var $registerForm = $("#addForm");

    $registerForm.validate({
        rules: {
            fname: {
                required: true
            },
            lname: {
                required: true
            },
            email: {
                required: true
            },
            phone: {
                required: true
            },
            gen: {
                required: true
            },
            dob: {
                required: true
            },
            hobby: {
                required: true
            }
        },
        messages: {
            fname: {
                required: 'First Name must be required',
            },
            lname: {
                required: 'Last Name must be required'
            },
            email: {
                required: 'Email must be required'
            },
            phone: {
                required: 'Phone Number must be required'
            },
            gen: {
                required: 'Gender must be required'
            },
            dob: {
                required: 'Date of Birth must be required'
            },
            hobby: {
                required: 'Hobby must be required'
            }
        },
        errorPlacement:function(error, element){
            if(element.is(":radio")){
                error.appendTo(element.parent(".gender"));
            }else{
                error.insertAfter(element);
            }
        }
    })


})


















// function validateForm() {

//     const fname = document.getElementById('fname').value;
//     const lname = document.getElementById('lname').value;
//     const email = document.getElementById('email').value;
//     const phone = document.getElementById('phone').value;
//     const gender = document.getElementsByName('gen');
//     const dob = document.getElementById('dob').value;
//     const hobby = document.getElementById('hobby').value;

//     var fnameError = document.getElementById("fname-error");
//     var lnameError = document.getElementById("lname-error");
//     var emailError = document.getElementById("email-error");
//     var phoneError = document.getElementById("phone-error");
//     var genderError = document.getElementById("gender-error");
//     var dobError = document.getElementById("dob-error");
//     var hobbyError = document.getElementById("hobby-error");

//     const validateEmail = (email) => {
//         return email.match(
//             /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
//         );
//     };

//     // First Name
//     if (fname === "") {
//         fnameError.textContent = "Please enter first name.";
//         return false;
//     } else {
//         fnameError.textContent = "";
//     }

//     // Last Name
//     if (lname === "") {
//         lnameError.textContent = "Please enter last name.";
//         return false;
//     } else {
//         lnameError.textContent = "";
//     }
    
//     // Email
//     if (email === "") {
//         emailError.textContent = "Please enter email.";
//         return false;
//     } else {
//         emailError.textContent = "";
//     }

//     // if (!validateEmail(email)) {
//     //     emailError.textContent = "Please enter valid email.";
//     //     return false;
//     // }
//     // else {
//     //     emailError.textContent = "";
//     // }

//     // Phone
//     if (phone.length != 10) {
//         phoneError.textContent = "Please enter phone number.";
//         return false;
//     } else {
//         phoneError.textContent = "";
//     }


//     // Gender
//     var formValid = false;
//     var i = 0;
//     while (!formValid && i < gender.length) {
//         if (gender[i].checked) {
//             formValid = true;
//             i++;
//         }
//     }
//     if (!formValid) {
//         genderError.textContent = "Please select gender.";
//         return formValid;
//     }
//     else {
//         genderError.textContent = "";
//     }

//     //DOB
//     if (dob === "") {
//         dobError.textContent = "Please select Date of Birth.";
//         return false;
//     } else {
//         dobError.textContent = "";
//     }

//     // Hobby
//     if (hobby === "") {
//         hobbyError.textContent = "Please select hobby.";
//         return false;
//     } else {
//         hobbyError.textContent = "";
//     }
// }