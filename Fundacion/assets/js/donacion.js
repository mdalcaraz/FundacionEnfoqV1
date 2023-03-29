//Franco Vial's code start
const setSubmitAvailable = (status) => {
    if (!status) return

    const submitButton = document.getElementById("donationFormSubmit")
    submitButton.disabled = false
}

const isFormComplete = (form) => {
    const formData = new FormData(form)
    const formFields = [...formData.entries()]

    let formCompleteStatus = true

    for (let pair of formFields) {
        if (validateFields(pair[0], pair[1]) === false) {
            formCompleteStatus = false
            break
        }
    }

    return formCompleteStatus
}
const validateFields = (field, value) => {

    if (field === "name") return isValidName(value)
    if (field === "phone") return validatePhone(value)
    if (field === "email") return validateEmail(value)
    if (field === "area") return validateArea(value)
    return
}
const isValidName = (value) => { // si esta correcto devuelve true
    if (!value) return false
    const regex = /[^a-zA-z ]/;
    return !value.match(regex)
}
const validatePhone = (value) => {
    if (!value) return false
    const regex = /[^0-9]/;
    return !value.match(regex)

}
const validateArea = (value) => {
    return validatePhone(value)
}
const validateEmail = (value) => {
    if (!value) return false
    const regex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    return value.match(regex)
}
const sendPost = async (formData) => {
    const newPhone = "+54" + formData.get("area") + formData.get("phone")
    let donatorData = {
        name: formData.get("name"),
        phone: newPhone,
        email: formData.get("email"),
        info: formData.get("info"),

    }
    console.log({ donatorData })
}
export {
    sendPost,
    validateFields,
    isFormComplete,
    setSubmitAvailable,

}

// Franco Vial's code end
