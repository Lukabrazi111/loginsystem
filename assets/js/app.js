// // OOP JAVASCRIPT REGISTRATION FORM
//
// // Class UI
// class UI {
//     // Displaying error message
//     static displayingError(input, message) {
//         const formControl = input.parentElement;
//         const smallTag = formControl.querySelector('small');
//         formControl.className = 'form-control error';
//         smallTag.textContent = message;
//     }
//
//     // Displaying success message
//     static displayingSuccess(input) {
//         const formControl = input.parentElement;
//         formControl.className = 'form-control success';
//     }
// }
//
// // Events
// document.getElementById('btn').addEventListener('click', (e) => {
//     e.preventDefault();
//
//     const usernameValue = document.getElementById('username');
//     const emailValue = document.getElementById('email');
//     const passwordValue = document.getElementById('password');
//     const confirmPasswordValue = document.getElementById('confirm__password');
//
//     if (usernameValue.value.trim() === '') {
//         UI.displayingError(usernameValue, 'Username cannot be blank!');
//     } else {
//         UI.displayingSuccess(usernameValue);
//     }
//
//     if (emailValue.value.trim() === '') {
//         UI.displayingError(emailValue, 'Email cannot be blank!');
//     } else {
//         UI.displayingSuccess(emailValue);
//     }
//
//     if (passwordValue.value.trim() === '') {
//         UI.displayingError(passwordValue, 'Password cannot be blank!');
//     } else {
//         UI.displayingSuccess(passwordValue);
//     }
//
//     if (confirmPasswordValue.value.trim() === '') {
//         UI.displayingError(confirmPasswordValue, 'Password cannot be blank!');
//     } else {
//         UI.displayingSuccess(confirmPasswordValue);
//     }
//
//     // Checking password match
//     if (passwordValue.value !== confirmPasswordValue.value) {
//         UI.displayingError(confirmPasswordValue, 'Password mismatch!');
//     }
//
// });