(function () {
	function initSignupForms() {
		var forms = document.querySelectorAll('.signup-form[data-toast-id]');

		forms.forEach(function (form) {
			var toastId = form.getAttribute('data-toast-id');
			var emailId = form.getAttribute('data-email-input-id');
			var toastEl = document.getElementById(toastId);

			if (!toastEl) return;

			form.addEventListener('submit', function (e) {
				e.preventDefault();

				var emailInput = emailId
					? document.getElementById(emailId)
					: form.querySelector('input[type="email"]');

				if (emailInput && !emailInput.checkValidity()) {
					if (typeof emailInput.reportValidity === 'function') {
						emailInput.reportValidity();
					}
					return;
				}

				if (window.bootstrap && window.bootstrap.Toast) {
					var toast = window.bootstrap.Toast.getOrCreateInstance(toastEl, {
						delay: 3000,
					});
					toast.show();
				} else {
					toastEl.style.display = 'block';
				}

				form.reset();
			});
		});
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initSignupForms);
	} else {
		initSignupForms();
	}
})();
