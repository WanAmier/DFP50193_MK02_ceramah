function validateForm() {
    let slot = document.getElementById("slot").value;
    let terma = document.getElementById("terma").checked;

    if (slot <= 0) {
        alert("Bilangan slot mesti lebih daripada 0");
        return false;
    }

    if (!terma) {
        alert("Sila setuju Terma & Syarat");
        return false;
    }

    return true;
}
