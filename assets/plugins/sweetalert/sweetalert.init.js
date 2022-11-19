!(function (e) {
	"use strict";
	var t = function () {};
	(t.prototype.init = function () {
		e(".cancel-project").on("click", function () {
			swal({
					title: "Enter Password",
					text: "",
					type: "input",
					showCancelButton: true,
					closeOnConfirm: false,
					animation: "slide-from-top",
					inputPlaceholder: "Please Enter High Security Password"
				},
				function(inputValue){
					if (inputValue === false) return false;
					if (inputValue === "") {
						swal.showInputError("You need to write Password!");
						return false
					}
					swal("Successful", "Project Canceled", "success");
				});
		}),
		
		e(".sweet-wrong").on("click", function () {
			sweetAlert("Oops...", "Something went wrong !!", "error");
		}),
		
		e(".sweet-message").on("click", function () {
			swal("Hey, Here's a message !!")
		}),
		
		e(".sweet-text").on("click", function () {
			swal("Hey, Here's a message !!", "It's pretty, isn't it?")
		}),
		
		e(".sweet-success").on("click", function () {
			swal("Hey, Good job !!", "You clicked the button !!", "success")
		}),
		
		e(".sweet-confirm").on("click", function () {
			swal({
					title: "Are you sure to delete ?",
					text: "You will not be able to recover this imaginary file !!",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Yes, delete it !!",
					closeOnConfirm: false
				},
				function(){
					swal("Deleted !!", "Hey, your imaginary file has been deleted !!", "success");
				});
		}),
		
		e(".sweet-success-cancel").on("click", function () {
			swal({
					title: "Are you sure to delete ?",
					text: "You will not be able to recover this imaginary file !!",
					type: "warning",
					showCancelButton: true,
					confirmButtonColor: "#DD6B55",
					confirmButtonText: "Yes, delete it !!",
					cancelButtonText: "No, cancel it !!",
					closeOnConfirm: false,
					closeOnCancel: false
				},
				function(isConfirm){
					if (isConfirm) {
						swal("Deleted !!", "Hey, your imaginary file has been deleted !!", "success");
					}
					else {
						swal("Cancelled !!", "Hey, your imaginary file is safe !!", "error");
					}
				});
		}),
		
		e(".sweet-image-message").on("click", function () {
			swal({
				title: "Sweet !!",
				text: "Hey, Here's a custom image !!",
				imageUrl: "images/hand.jpg"
			});
		}),
		
		e(".sweet-html").on("click", function () {
			swal({
				title: "Sweet !!",
				text: "<span style='color:#ff0000'>Hey, you are using HTML !!<span>",
				html: true
			});
		}),
		
		e(".sweet-auto").on("click", function () {
			swal({
				title: "Sweet auto close alert !!",
				text: "Hey, i will close in 2 seconds !!",
				timer: 2000,
				showConfirmButton: false
			});
		}),
		
		e(".sweet-prompt").on("click", function () {
			swal({
					title: "Enter an input !!",
					text: "Write something interesting !!",
					type: "input",
					showCancelButton: true,
					closeOnConfirm: false,
					animation: "slide-from-top",
					inputPlaceholder: "Write something"
				},
				function(inputValue){
					if (inputValue === false) return false;
					if (inputValue === "") {
						swal.showInputError("You need to write something!");
						return false
					}
					swal("Hey !!", "You wrote: " + inputValue, "success");
				});
		}),
		
		e(".sweet-ajax").on("click", function () {
			swal({
					title: "Sweet ajax request !!",
					text: "Submit to run ajax request !!",
					type: "info",
					showCancelButton: true,
					closeOnConfirm: false,
					showLoaderOnConfirm: true,
				},
				function(){
					setTimeout(function(){
						swal("Hey, your ajax request finished !!");
					}, 2000);
				});
		});
		
	}),
		(e.SweetAlert = new t()),
		(e.SweetAlert.Constructor = t);
})(window.jQuery),
	(function (e) {
		"use strict";
		e.SweetAlert.init();
	})(window.jQuery);
