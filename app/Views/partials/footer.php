<footer class="footer-strip py-5 mt-0">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-12">
        <h3 class="footer-title mb-4">Sign up to our <span class="text-purple-200">Beta Program</span></h3>
      </div>
      <div class="col-md-10 col-lg-8 col-xl-5">
        <div class="signup-form-wrap mx-auto">
          <form
            class="signup-form"
            action="#"
            id="footer-signup-form"
            data-toast-id="footerSignupToast"
            data-email-input-id="footer-email"
          >
            <label class="visually-hidden" for="footer-email">Email</label>
            <input
              type="email"
              id="footer-email"
              required
              class="form-control signup-input"
              placeholder="Enter email adress"
            />
            <button type="submit" class="btn btn-primary signup-btn">
              Sign up now ▸
            </button>
          </form>
          <div class="position-fixed signup-toast-wrapper">
            <div
              id="footerSignupToast"
              class="toast"
              role="alert"
              aria-live="assertive"
              aria-atomic="true"
            >
              <div class="toast-header">
                <strong class="me-auto">Notification</strong>
              </div>
              <div class="toast-body text-start">
                Thanks for sign up
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
