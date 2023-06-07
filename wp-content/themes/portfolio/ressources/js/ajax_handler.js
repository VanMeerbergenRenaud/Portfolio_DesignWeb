// Define global variables
import axios from "axios";

let currentStep = 0;
function submitForm() {
    console.log("Submitting Form...");
    // Check if all mandatory fields have been filled out
    const firstNameField = document.getElementById('first-name');
    const lastNameField = document.getElementById('last-name');
    const emailAddressField = document.getElementById('email-address');

    if (!firstNameField ||!lastNameField||!emailAddressField ) {
        alert("Please fill out all mandatory fields before submitting.");
        return false;
    } else {
        // If validation passed, send request to server to save the details entered by user
        axios({
            method: 'post',
            url: '/wp-json/contact-form-7/v1/contact-forms/698/feedback',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data: `first-name=${encodeURIComponent(firstNameField.value)}&
                        last-name=${encodeURIComponent(lastNameField.value)}&
                        email-address=${encodeURIComponent(emailAddressField.value)}`
        })
            .then((response) => {
                console.log(`Success! Response Data: ${JSON.stringify(response.data)}`);
                // After successful response, redirect to thankyou page
                window.location.href="/thankyou";
            }).catch((error) => {
            console.error(`Error Occurred: ${error}`);
        });
    }
}

/* Form in Ajax request */
$(document).ready(() => {
    $('#next').click(() => {
        validateAndDisplayNext();
    });
    $('.previous').click(() => {
        goBackOneStep();
    });
});
function validateAndDisplayNext(){
    switch(currentStep){
        case 0:
            if(!validateFields()){
                break;
            }else{
                currentStep++;
                showCurrentStep();
            }
        case 1:
            // Add further validations specific to step 2 here...
            currentStep++;
            showCurrentStep();
        default:
            console.warn("No more steps available!");
    }
}
function goBackOneStep(){
    if(currentStep > 0 ){
        currentStep--;
        showCurrentStep();
    }else{
        console.warn("No previous step found");
    }
}
function showCurrentStep(){
    hideAllSteps();
    $("#step-" + currentStep).show();
    updateButtonState();
}
function hideAllSteps(){
    $(".steps").hide();
}
function updateButtonState(){
    if(currentStep === 0){
        $('#prevBtn').attr('disabled','true');
    }else if(currentStep === 1){
        $('#prevBtn').removeAttr('disabled');
        $('#nextBtn').text('Save Details');
    }else{
        $('#prevBtn').removeAttr('disabled');
        $('#nextBtn').text('Send Request');
    }
}
function validateFields(){
    // Code to check validity of each field goes here..
    return true;
}