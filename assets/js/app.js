// Franco Vial's code start

import {
    sendPost,
    isFormComplete,
    setSubmitAvailable,
    
} from "./donacion.js"



donationForm.addEventListener("change", (event) => {
    let status = isFormComplete(document.querySelector("#donationForm"))
    if(status) setSubmitAvailable(status)
})

donationForm.addEventListener("submit", async (event) => {
    event.preventDefault()
    let donationForm = document.querySelector("#donationForm")
    let formData = new FormData(donationForm)
    await sendPost(formData)
})
// Franco Vial's code end

