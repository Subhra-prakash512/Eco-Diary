document.addEventListener('DOMContentLoaded', function () {
    const fromHome = sessionStorage.getItem("from_home_button");
    const alreadySubmitted = sessionStorage.getItem("submitted");

    // Only submit if NOT coming from home and NOT already submitted
    if (!fromHome && !alreadySubmitted) {
        let today = new Date();
        let yyyy = today.getFullYear();
        let mm = String(today.getMonth() + 1).padStart(2, '0');
        let dd = String(today.getDate()).padStart(2, '0');
        let date = yyyy + "-" + mm + "-" + dd;

        let in_date = document.getElementById("date");
        let cd_form = document.getElementById("change_date");

        in_date.value = date;

        // Mark as submitted to prevent repeat
        sessionStorage.setItem("submitted", "yes");

        cd_form.submit();
    }

    // Clear the home button flag regardless
    sessionStorage.removeItem("from_home_button");
});
