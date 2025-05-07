import { forms } from "../domElements/index.js";
import {
  authenticateUser,
  validateSignup,
  validateUpdatePass,
  validateUpdateUser
} from "../services/authServices.js";

export function initializeLoginForm() {
  const loginForm = forms.login;

  loginForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const formData = new FormData(loginForm);

    authenticateUser(formData);
  });
}

export function initializeSignupForm() {
  const signupForm = forms.signup;

  signupForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const formData = new FormData(signupForm);

    validateSignup(formData);
  });
}

export function initializeUpdatePassForm() {
  const updatePassForm = forms.updatePass;

  updatePassForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const formData = new FormData(updatePassForm);

    validateUpdatePass(formData);
  });
}

export function initializeUpdateUserInfoForm(){
  const updateUserForm = forms.updateUserForm;

  updateUserForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const formData = new FormData(updateUserForm);

    validateUpdateUser(formData);
  })
}