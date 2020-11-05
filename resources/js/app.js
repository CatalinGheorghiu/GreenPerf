/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

if (document.querySelector(".alert-success"))
    setTimeout(() => {
        document.querySelector(".alert-success").remove();
    }, 5000);
// <-- time in milliseconds

if (document.querySelector(".alert-warning"))
    setTimeout(() => {
        document.querySelector(".alert-warning").remove();
    }, 5000); // <-- time in milliseconds

if (document.querySelector(".alert-danger"))
    setTimeout(() => {
        document.querySelector(".alert-danger").remove();
    }, 5000); // <-- time in milliseconds

/* Modal */
$("#delete").on("show.bs.modal", function(event) {
    const button = $(event.relatedTarget);
    const userId = button.data("id");
    const modal = $(this);

    modal.find(".modal-body #user_id").val(userId);
});
