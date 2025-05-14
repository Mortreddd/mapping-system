document.querySelectorAll(".slot").forEach((slot) => {
    const graveNumber = slot.className.match(/slot-(\d+)/)?.[1]; // Extract grave number from class

    if (!graveNumber) return;

    const popover = document.getElementById("slot-" + graveNumber);

    slot.addEventListener("mouseenter", () => {
        popover?.classList.remove("hidden");
        popover?.classList.add("block");
    });

    slot.addEventListener("mouseleave", () => {
        popover?.classList.remove("block");
        popover?.classList.add("hidden");
    });
});
