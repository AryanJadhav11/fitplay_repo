
function SendMail() {

var params ={

from_name: document.getElementById("name").value,
email_id : document.getElementById("email_id").value,
message : document.getElementById("message").value
}

emailjs.send("service_hd43k3q", "template_v6j5ky6", params).then(function (res) {
alert ("Success!" + res.status);
})
}
