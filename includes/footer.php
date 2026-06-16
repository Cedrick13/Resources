<footer>
            <p>
                &copy; <span id="year"></span> Ced | Resources. All rights reserved.
            </p>
        </footer>

        <script>
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>

        <script>
            document.querySelector(".logo a").addEventListener("click", function (e) {
                e.preventDefault(); 
                document.body.classList.add("fade-out");
                setTimeout(() => {
                    window.location.href = this.href;
                }, 200); 
            });
        </script>

        <script>
            const glow = document.querySelector(".cursor-glow");
            document.addEventListener("mousemove", (e) => {
                glow.style.left = e.clientX + "px";
                glow.style.top = e.clientY + "px";
            });
            document.addEventListener("touchmove", (e) => {
                const touch = e.touches[0];
                glow.style.left = touch.clientX + "px";
                glow.style.top = touch.clientY + "px";
            });
        </script>
    </body>
</html>