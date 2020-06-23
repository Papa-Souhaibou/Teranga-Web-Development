$(function () {
    $("#navbar a").on("click",function () {
        const href = this.getAttribute("href").split("#")[1];
        $("#websiteContent").load(`Views/${href}.php`);
    })
});