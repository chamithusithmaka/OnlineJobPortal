function validateForm() {
    const jname = document.getElementById("name").value.trim();
    const jdescription = document.getElementById("jdescription").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const jobType = document.getElementById("JobType").value.trim();
    const date = document.getElementById("date").value.trim();
    const cname = document.getElementById("cname").value.trim();
    const companyEmail = document.getElementById("company_email").value.trim();
    const address = document.getElementById("address").value.trim();
    const cdescription = document.getElementById("cdescription").value.trim();

    if (
        jname === "" ||
        jdescription === "" ||
        email === "" ||
        phone === "" ||
        jobType === "" ||
        date === "" ||
        cname === "" ||
        companyEmail === "" ||
        address === "" ||
        cdescription === ""
    ) {
        alert("Please fill in all required fields.");
        return false;
    }

    // Additional validation can be added here.

    return true;
}
