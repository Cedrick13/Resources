// Page transition effect
const logoLink = document.querySelector(".logo a");
if (logoLink) {
    logoLink.addEventListener("click", function (e) {
        e.preventDefault(); 
        document.body.classList.add("fade-out");
        setTimeout(() => {
            window.location.href = this.href;
        }, 200); 
    });
}

// Cursor glow effect
const glow = document.querySelector(".cursor-glow");
if (glow) {
    // MOUSE (desktop)
    document.addEventListener("mousemove", (e) => {
        glow.style.left = e.clientX + "px";
        glow.style.top = e.clientY + "px";
    });

    // TOUCH (mobile)
    document.addEventListener("touchmove", (e) => {
        const touch = e.touches[0];
        glow.style.left = touch.clientX + "px";
        glow.style.top = touch.clientY + "px";
    });
}