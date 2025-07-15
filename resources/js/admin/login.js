import $ from "jquery";

$(".toggle-password").on("click", function (e) {
    e.preventDefault();
    const passwordField = $(this).siblings(".password");
    const type =
        passwordField.attr("type") === "password" ? "text" : "password";
    passwordField.attr("type", type);
    $(this).find("svg").toggleClass("icon-eye-off icon-eye");
});

$(".confirm-password-toggle").on("click", function (e) {
    e.preventDefault();
    const confirmPasswordField = $(this).siblings(".confirm-password");
    const type =
        confirmPasswordField.attr("type") === "password" ? "text" : "password";
    confirmPasswordField.attr("type", type);
    $(this).find("svg").toggleClass("icon-eye-off icon-eye");
});
