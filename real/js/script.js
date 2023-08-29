// /* This is all just to start and stop the animation. Technically, the animation itself only uses CSS. */

// document.querySelector("a").addEventListener("click", function () { activateLoadAnim(false) }, false);

// document.querySelector("a").addEventListener("click", function () { activateLoadAnim(true) }, false);

// function activateLoadAnim(undo) {
//     document.querySelector("#loading").classList.remove("animate");
//     document.querySelector("button").blur();
//     document.querySelector("#loading").classList.add("animate"); document.querySelector("#toast").classList.remove("popped");
//     setTimeout(stopAnim, 1000);
//     if (undo) {
//         document.querySelector("#toast .big").textContent = 'Alright.';
//         document.querySelector("#toast .info").textContent = 'We undid that thing.';
//         document.querySelector("#toast a").style.display = "none";
//     }
//     else {
//         document.querySelector("#toast .big").textContent = 'Nice.';
//         document.querySelector("#toast .info").textContent = 'You did a thing.';
//         document.querySelector("#toast a").style.display = "inline";
//     }
// }

// function stopAnim() {
//     document.querySelector("#loading").classList.remove("animate");
//     document.querySelector("#toast").classList.add("popped");
//     setTimeout(cleanup, 1);
// }

// function cleanup() {
//     document.querySelector("#toast").classList.remove("popped");
// }