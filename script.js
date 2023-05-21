var typed = new Typed(".multiple-text", {
    strings: ["Website Designer", "Web Developers", "Mobile App Developer"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});
const cursor = document.querySelectorAll(".cursor");

window.addEventListener("mousemove", (e) => {
    let x = e.pageX;
    // console.log(x);
    let y = e.pageY;

    cursor.forEach(el => {
        el.style.left = `${x}px`;
        el.style.top = `${y}px`;

    })

});

function website() {

    // window.location = "websitePrice.php";
    var webdesign = document.getElementById("webdesign");
    var service2 = document.getElementById("service2");
    var pricebtn = document.getElementById("pricebtn");
    if (pricebtn.innerHTML == "View Price Plan") {

        pricebtn.innerHTML = "Hide Price Plan";
        service2.classList = "d-none";
        webdesign.classList = "d-block";

    } else {
        pricebtn.innerHTML = "View Price Plan";
        service2.classList = "d-block";
        webdesign.classList = "d-none";
    }

}