document.addEventListener("DOMContentLoaded", () => {
    const questions = document.querySelectorAll(".faq-question");
    const video = document.getElementById("mockupVideo");
    const developedYear = 2025;
    const currentYear = new Date().getFullYear();

    // Function to generate blocks dynamically
    function generateBlocks() {
        const container = document.getElementById("blocksContainer");
        const blocksPerRow = 8;

        // Calculate how many blocks we need based on viewport
        // Estimate: each block is roughly 16.67vw wide, so height is also ~16.67vw
        const blockHeight = window.innerWidth / blocksPerRow;
        const totalHeight = Math.max(
            document.body.scrollHeight,
            window.innerHeight * 3
        );
        const rowsNeeded = Math.ceil(totalHeight / blockHeight);
        let totalBlocks;
        if (window.innerWidth > 768) {
            totalBlocks = rowsNeeded * blocksPerRow + 168;
        } else {
            totalBlocks = 23;
        }

        console.log("total blockss", totalBlocks);

        // Dark accent blocks positions (1 per ~3-4 rows)
        const darkBlockPositions = [
            4, 23, 41, 62, 85, 103, 124, 145, 168, 191, 214, 237, 260, 283, 306,
        ];

        // Create blocks
        for (let i = 1; i <= totalBlocks; i++) {
            const block = document.createElement("div");
            block.className = "block";

            // Add dark styling to specific blocks
            if (darkBlockPositions.includes(i)) {
                block.style.background = "rgba(240, 241, 243, 0.5)";
                // block.style.borderColor = "rgba(100, 110, 140, 0.08)";
                // block.style.boxShadow = "0 0 10px 0 rgba(0, 0, 0, 0.1)";
            }

            container.appendChild(block);
        }
    }

    // Generate blocks on page load
    generateBlocks();

    questions.forEach((btn) => {
        btn.addEventListener("click", () => {
            console.log("object");
            const index = btn.dataset.index;
            const answer = btn.nextElementSibling;
            const icon = btn.querySelector("svg");

            // Close all others
            document.querySelectorAll(".faq-answer").forEach((a) => {
                if (a !== answer) a.classList.add("hidden");
            });
            document.querySelectorAll(".faq-question svg").forEach((svg) => {
                if (svg !== icon)
                    svg.classList.remove("rotate-45", "text-[#3384FF]");
                svg.classList.add("text-gray-400");
            });

            // Toggle current
            answer.classList.toggle("hidden");
            icon.classList.toggle("rotate-45");
            icon.classList.toggle("text-[#3384FF]");
            icon.classList.toggle("text-gray-400");
        });
    });

    video.addEventListener("click", () => {
        if (video.paused) {
            video.play();
        } else {
            video.pause();
        }
    });

    if (currentYear === developedYear) {
        document.getElementById("year").textContent = currentYear;
    } else {
        document.getElementById(
            "year"
        ).textContent = `${developedYear} - ${currentYear}`;
    }
});
