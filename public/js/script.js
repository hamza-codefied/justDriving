document.addEventListener("DOMContentLoaded", () => {
    const questions = document.querySelectorAll(".faq-question");
    const video = document.getElementById("mockupVideo");
    const videoContainer = document.getElementById("videoContainer");
    const developedYear = 2025;
    const currentYear = new Date().getFullYear();

    // // // Function to generate blocks dynamically
    // function generateBlocks() {
    //     const container = document.getElementById("blocksContainer");
    //     const blocksPerRow = 8;
    //     const rowsNeeded = 3;
    //     const totalBlocks = rowsNeeded * blocksPerRow;
    //     // const blockHeight = window.innerWidth / blocksPerRow;
    //     // const totalHeight = Math.max(
    //     //     document.body.scrollHeight,
    //     //     document.documentElement.scrollHeight
    //     // );
    //     // const rowsNeeded = Math.ceil(totalHeight / blockHeight);
    //     // let totalBlocks;
    //     // if (window.innerWidth > 768) {
    //     //     totalBlocks = rowsNeeded * blocksPerRow;
    //     // } else {
    //     //     totalBlocks = 1;
    //     // }

    //     // // console.log("total blockss", totalBlocks);

    //     // // Dark accent blocks positions (1 per ~3-4 rows)
    //     // const darkBlockPositions = [
    //     //     4, 23, 41, 62, 85, 103, 124, 145, 168, 191, 214, 237, 260, 283, 306,
    //     // ];

    //     // Create blocks
    //     for (let i = 1; i <= totalBlocks; i++) {
    //         const block = document.createElement("div");
    //         block.className = "block";

    //         // Add dark styling to specific blocks
    //         if (darkBlockPositions.includes(i)) {
    //             block.style.background = "rgba(240, 241, 243, 0.5)";
    //             // block.style.borderColor = "rgba(100, 110, 140, 0.08)";
    //             // block.style.boxShadow = "0 0 10px 0 rgba(0, 0, 0, 0.1)";
    //         }

    //         container.appendChild(block);
    //     }
    // }

    // // Generate blocks on page load
    // generateBlocks();

    lucide.createIcons(); // initial icon render

    questions.forEach((btn) => {
        btn.addEventListener("click", () => {
            const answer = btn.nextElementSibling;
            const iconElement = btn.querySelector(".faq-icon");
            const iconContainer = btn.querySelector(".icon");

            // Close all others
            document.querySelectorAll(".faq-answer").forEach((a) => {
                if (a !== answer) {
                    a.style.maxHeight = "0px";
                    a.style.opacity = "0";
                }
            });

            document.querySelectorAll(".faq-question").forEach((q) => {
                if (q !== btn) {
                    q.classList.remove("open");
                    // Reset icons for other FAQs to plus
                    const otherIcon = q.querySelector(".faq-icon");
                    if (otherIcon) {
                        otherIcon.innerHTML = '';
                        otherIcon.setAttribute("data-lucide", "plus");
                        requestAnimationFrame(() => {
                            lucide.createIcons();
                        });
                    }
                }
            });

            // Toggle current FAQ
            const isOpen = btn.classList.contains("open");
            if (isOpen) {
                // Closing - show plus
                btn.classList.remove("open");
                answer.style.maxHeight = "0px";
                answer.style.opacity = "0";
                // Change to plus icon
                if (iconElement) {
                    iconElement.innerHTML = '';
                    iconElement.setAttribute("data-lucide", "plus");
                    // Use requestAnimationFrame to ensure DOM is updated
                    requestAnimationFrame(() => {
                        lucide.createIcons();
                    });
                }
            } else {
                // Opening - show minus
                btn.classList.add("open");
                answer.style.maxHeight = answer.scrollHeight + "px";
                answer.style.opacity = "1";
                // Change to minus icon
                if (iconElement) {
                    iconElement.innerHTML = '';
                    iconElement.setAttribute("data-lucide", "minus");
                    // Use requestAnimationFrame to ensure DOM is updated
                    requestAnimationFrame(() => {
                        lucide.createIcons();
                    });
                }
            }
        });
    });

    // Check if video already played once (saved in session)
    // const hasPlayed = sessionStorage.getItem("videoPlayedOnce");

    // Observe when video container enters viewport
    // const observer = new IntersectionObserver(
    //     (entries) => {
    //         entries.forEach((entry) => {
    //             if (entry.isIntersecting) {
    //                 video.play(); // Play video when visible
    //                 sessionStorage.setItem("videoPlayedOnce", "true");
    //                 observer.unobserve(videoContainer); // Stop observing
    //             }
    //         });
    //     },
    //     { threshold: 0.5 }
    // ); // 50% visible trigger

    // observer.observe(videoContainer);

    // Update year if element exists
    const yearElement = document.getElementById("year");
    if (yearElement) {
        if (currentYear === developedYear) {
            yearElement.textContent = currentYear;
        } else {
            yearElement.textContent = `${developedYear} - ${currentYear}`;
        }
    }

    new Splide("#clientSlider", {
        type: "loop",
        drag: false,
        arrows: false,
        pagination: false,
        perPage: 5,
        gap: "2rem",
        autoplay: true,
        interval: 0,
        speed: 70000,
        pauseOnHover: false,
        pauseOnFocus: false,
        rewind: false,
        easing: "linear",
    }).mount();
});
