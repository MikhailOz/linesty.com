// ALERT.JS SUPPOSED TO BE IMPORTED
"use strict";
// Show/hide password function
function showPassword(icon, input_id) {
  const input = document.getElementById(input_id);
  if (input.type === 'password') {
    input.type = 'text';
    icon.style.stroke = '#6e46ff'
  } else if (input.type === 'text') {
    input.type = 'password';
    icon.style.stroke = '#fff'
  }
  input.focus();
}
class FormValidator {
  constructor() {
    const form = document.getElementById('form');
    const submit_button = document.getElementById('submit_button');
    const email = document.getElementById('email');
    const email_title = document.getElementById('email_title');
    const password = document.getElementById('password');
    const password_title = document.getElementById('password_title');
    const confirmation_password = document.getElementById('confirmation_password');
    const confirmation_password_title = document.getElementById('confirmation_password_title');
    const keep_signed = document.getElementById('cbx');
    const recaptchaToken = document.getElementById('token_response');

    this.form = form;
    this.submit_button = submit_button;
    this.submit_default = submit_button.textContent;
    this.email = email;
    this.email_title = email_title;
    this.password = password;
    this.password_title = password_title;
    this.confirmation_password = confirmation_password;
    this.confirmation_password_title = confirmation_password_title;
    this.keep_signed = keep_signed;
    this.recaptchaToken = recaptchaToken;
    this.error_color = 'text-rubyRed';
    this.isSubmitting = false;
    
    this.form.addEventListener('submit', (event) => this.handleFormSubmit(event));
  }
  validateEmail() {
    if (!this.email) {
      return true;
    }
    this.hideError(this.email_title, 'Email');
    const validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    const emailValue = this.email.value.trim();
    if (emailValue === '') {
      this.showError(this.email_title, 'Email is required');
      return false;
    } else if (!validRegex.test(emailValue)) {
      this.showError(this.email_title, 'Invalid email address');
      return false;
    }
    return true;
  }
  validatePassword() {
    if (!this.password) {
      return true;
    }
    this.hideError(this.password_title, 'Password');
    const passwordValue = this.password.value.trim();
    if (passwordValue === '') {
      this.showError(this.password_title, 'Password is required');
      return false;
    } 
    if (!this.form.classList.contains('login-form')) {
      if (passwordValue.length < 8) {
        this.showError(this.password_title, 'Password must be at least 8 characters long');
        return false;
      } else if (!/\d/.test(passwordValue)) {
        this.showError(this.password_title, 'Password must contain a digit');
        return false;
      } else if (!/[a-z]/.test(passwordValue)) {
        this.showError(this.password_title, 'Password must contain a lowercase letter');
        return false;
      } else if (!/[A-Z]/.test(passwordValue)) {
        this.showError(this.password_title, 'Password must contain an uppercase letter');
        return false;
      }
    }
    return true;
  }
  
  validateConfirmationPassword() {
    if (!this.confirmation_password) {
      return true;
    }
    this.hideError(this.confirmation_password_title, 'Confirm Password');
    const passwordValue = this.password.value.trim();
    const confirmationPasswordValue = this.confirmation_password.value.trim();
    if (this.confirmation_password && confirmationPasswordValue === '') {
      this.showError(this.confirmation_password_title, 'Password confirmation is required');
      return false;
    } else if (this.confirmation_password && passwordValue !== confirmationPasswordValue) {
      this.showError(this.confirmation_password_title, 'Passwords do not match');
      return false;
    }
    return true;
  }

  fadeOutAndSetText(element, text) {
    element.classList.replace('duration-75', 'duration-[50]');

    setTimeout(() => {
      element.textContent = text;
      element.classList.replace('duration-[50]', 'duration-75');
    }, 40);
  }

  hideError(element, title) {
    element.classList.remove(this.error_color);
    element.classList.add('text-white');
    this.fadeOutAndSetText(element, title);
  }

  showError(element, message) {
    if (!element.classList.contains(this.error_color)) {
      element.classList.remove('text-white');
      element.classList.add(this.error_color);
      this.fadeOutAndSetText(element, message);
    }
  }

  async submitForm(url) {
    if (this.isSubmitting) {
      return;
    }

    const isEmailValid = this.validateEmail();
    const isPasswordValid = this.validatePassword();
    const isConfPasswordValid = this.validateConfirmationPassword();
  
    if (isEmailValid && isPasswordValid && isConfPasswordValid) {
      this.isSubmitting = true;
      this.submit_button.textContent = 'Processing...';
  
      try {
        const formData = new FormData();
        if (this.email) {
          formData.append('email', this.email.value);
        }
        if (this.password) {
          formData.append('password', this.password.value);
        }
        if (this.confirmation_password) {
          formData.append('confirmation_password', this.confirmation_password.value);
        }
        if (this.confirmation_password) {
          formData.append('confirmation_password', this.confirmation_password.value);
        }
        if (this.keep_signed) {
          formData.append('keep_signed', this.keep_signed.checked);
        }
        formData.append('recaptcha', this.recaptchaToken.value);
  
        const response = await fetch(url, {
          method: 'POST',
          body: formData,
        });
  
        if (response.ok) {
          const data = await response.json();
  
          if (data.error) {
            upperAlertManager.pushAnUpperAlert('error', data.error);
          } else if (data.success && data.success === 'refresh') {
            window.location.reload();
          } else if (data.success && data.success !== 'refresh') {
            upperAlertManager.pushAnUpperAlert('success', data.success);
          }
        } else {
          upperAlertManager.pushAnUpperAlert('error', 'An error occurred while processing the script.');
        }
      } catch (error) {
        upperAlertManager.pushAnUpperAlert('error', error);
      }
  
      this.isSubmitting = false
      this.submit_button.textContent = this.submit_default;
    }
  }
  handleFormSubmit(event) {
    event.preventDefault();
    let url;
    if (this.form.classList.contains('login-form')) {
      url = '/server/controllers/auth/login.php';
    } else if (this.form.classList.contains('signup-form')) {
      url = '/server/controllers/auth/signup.php';
    } else if (this.form.classList.contains('recovery-form')) {
      url = '/server/controllers/auth/recovery.php';
    } else if (this.form.classList.contains('new-password-form')) {
      url = '/server/controllers/auth/set_new_password.php';
    }
    this.submitForm(url);
  }
}

// Create FormValidator instance
const formValidator = new FormValidator();