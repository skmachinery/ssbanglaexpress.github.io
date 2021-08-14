<script>
// Vanilla JavaScript
// const trackingForm = document.getElementById("trackingForm");
// function fetchData() {
//     return (
//         fetch("https://api-eu.dhl.com/track/shipments?trackingNumber=00340434292135100132", {
//             "method": "GET",
//             "headers": {
//                 "DHL-API-Key": "REPLACE_KEY_VALUE"
//             }
//         }).then(response => {
//             console.log(response);
//         }).catch(err => {
//             console.error(err);
//         })
//     )
// }
// trackingForm.addEventListener("submit", (e) => { e.preventDefault(); fetchData() });

class DHLApp {
    constructor() {
        this.trackingForm = document.getElementById("trackingForm");
        this.inputTrackId = document.getElementById("inputTrackId");
    }
    fetchData() {
        const url = `https://api-eu.dhl.com/track/shipments?` + `trackingNumber=${this.inputTrackId.value}`;
        fetch("https://api-eu.dhl.com/track/shipments?trackingNumber=00340434292135100132", {
            "method": "GET",
            "headers": {
                "DHL-API-Key": "REPLACE_KEY_VALUE"
            }
        }).then(response => {
            console.log(response);
        }).catch(err => {
            console.error(err);
        });
    }
    submitError() {
        alert("Please enter a valid tracking no.");
        return;
    }
}

function addEventHandaling() {
    const ObjDHLApp = new DHLApp();
    const trackingForm = document.getElementById("trackingForm");
    const inputTrackId = document.getElementById("inputTrackId");
    trackingForm.addEventListener("submit", (e) => {
        e.preventDefault();
        if (inputTrackId.value === "") {
            ObjDHLApp.submitError();
        } else {
            ObjDHLApp.fetchData();
        }
    });
}
document.addEventListener("DOMContentLoaded", addEventHandaling());
</script>