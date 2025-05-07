import { selectById } from "../utils/index.js";

export const forms = {
    'login': selectById('login-form'),
    'student-signup': selectById('student-signup'),
    'admin-signup': selectById('admin-signup'),
    'updateUserForm': selectById('updateuser-form'),
    'updatePass': selectById('updatepass-form'),
    'updateUserInfo': selectById('updateuser-form')
}