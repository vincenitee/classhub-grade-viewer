import { selectById } from "../utils/index.js";

export const forms = {
    'loginForm': selectById('login-form'),
    'signupForm': selectById('signup-form')
}