/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#alertBox").hide();
    $("#form").submit(function (evt) {

        var message = "";

        var postalCode = $("[name=postalcode]").val();
        if (postalCode === "") {
            message += "- Postal Code is required. <br/>";
        } else if ((/^[0-9]{6}$/).test(postalCode) === false) {
            message += "- You must enter a valid postal code. <br/>";

        }

        var name = $("[name=name]").val();
        if (name === "") {
            message += "- Name is required.<br/>";
        }

        var country = $("[name=selCountry]").val();
        if (country === "") {
            message += "- Country is required.<br/>";
        }

        var phone = $("[name=phone]").val();
        if (phone == 0) {
            message += "- Phone Number is required.<br/>";

        } else if ((/[89][0-9]{7}/).test(phone) === false) {
            message += "- You must enter a valid phone number.<br/>";
        }

        var email = $("[name = email]").val();
        if (email === "") {
            message += "- Email is required.<br/>";
        } else if ((/\w+\@[a-z]+\.com/).test(email) === false) {
            message += "- You must enter a valid email.<br/>";
        }

        var password = $("[name = pwd]").val();
        if (password === "") {
            message += "- Password is required.<br/>";
        } else if ((/[a-zA-Z0-9]{6,8}/).test(password) === false) {
            message += "- You must enter a valid password.<br/>";
        }

        var verifyPassword = $("[name=verifypwd]").val();
        if (verifyPassword === "") {
            message += "- Confirm password is required.<br/>";
        } else if (password !== "" && password !== verifyPassword) {
            message += "- Passwords do not match.<br/>";
            $("[name=pwd]").val("");
            $("[name=verifypwd]").val("");
        }


        if ($("[name=gender]").is(":checked") === false) {
            message += "- Gender is required.<br/>";
        }


        if ($(".chkboxlist").is(":checked") === false) {
            message += "- At least one color is required.<br/>";
        }



        if (message.length > 0) {
            $("#alertBox").html(message);
            $("#alertBox").show();

            return false;
        }


    })


})

